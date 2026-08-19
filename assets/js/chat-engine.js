/*
  Chat Widget Engine
  Handles rendering, user input, state management, and N8N submission.
*/

const N8N_WEBHOOK_URL = "https://testerfer.app.n8n.cloud/webhook-test/law-chat"; // Test Environment

class LawChatWidget {
    constructor(config) {
        this.config = config;
        this.state = {
            isOpen: false,
            currentStep: "start",
            history: [],
            data: {} // Collects user answers
        };

        // Initialize Widget
        this.init();
    }

    init() {
        this.injectHTML();
        this.cacheDOM();
        this.bindEvents();
    }

    injectHTML() {
        if (document.getElementById("law-chat-widget")) return;

        // Create wrapper
        const wrapper = document.createElement("div");
        wrapper.id = "law-chat-widget";

        wrapper.innerHTML = `
      <!-- Toggle Button -->
      <button id="law-chat-toggle" aria-label="Open Chat">
        <svg viewBox="0 0 24 24"><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z"/></svg>
      </button>

      <!-- Chat Container -->
      <div id="law-chat-container">
        <!-- Header -->
        <div class="law-chat-header">
          <div class="law-chat-branding">
            <!-- Logo Placeholder (Circle) -->
            <div class="law-chat-logo-sm">
               <!-- WP Dynamic Image -->
               <img src="${(window.nehorayChatParams && window.nehorayChatParams.logoUrl) ? window.nehorayChatParams.logoUrl : 'assets/img/logo-chat.png'}" alt="" style="width:100%; height:100%; object-fit: contain; border-radius: 50%;">
            </div>
            <h3>Law Office of Bob Nehoray</h3>
          </div>
          <div class="law-chat-actions">
            <button class="law-chat-icon-btn" title="Restart" aria-label="Restart chat"><svg viewBox="0 0 24 24" width="18" height="18" fill="#1a1a1a"><path d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"/></svg></button>
            <button class="law-chat-close" title="Close" aria-label="Close chat"><svg viewBox="0 0 24 24" width="20" height="20" fill="#1a1a1a"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg></button>
          </div>
        </div>
        
        <div id="law-chat-messages">
            <!-- Welcome Branding (Dynamic Content) -->
            <div class="welcome-branding-area">
                <div class="welcome-logo-lg">
                     <!-- WP Dynamic Image -->
                     <img src="${(window.nehorayChatParams && window.nehorayChatParams.logoUrl) ? window.nehorayChatParams.logoUrl : 'assets/img/logo-chat.png'}" alt="" style="width:100%; height:100%; object-fit: contain; border-radius: 50%;">
                </div>
                <h2 class="welcome-title">Law Offices of Bob Nehoray</h2>
                <p class="welcome-subtitle">Virtual Assistant 24/7</p>
            </div>
        </div>
        
        <div class="law-chat-input-area">
          <input type="text" id="chat-input-field" placeholder="Message..." aria-label="Message">
          <button id="chat-send-btn" aria-label="Send message">
             <svg style="width:28px;height:28px;fill:#1a1a1a" viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
          </button>
        </div>
        
        <div class="law-chat-footer" style="display:none;"></div>
      </div>
    `;

        document.body.appendChild(wrapper);
    }

    cacheDOM() {
        this.dom = {
            wrapper: document.getElementById("law-chat-widget"),
            toggleBtn: document.getElementById("law-chat-toggle"),
            container: document.getElementById("law-chat-container"),
            closeBtn: document.querySelector(".law-chat-close"),
            restartBtn: document.querySelector(".law-chat-icon-btn[title='Restart']"), // Added Restart Btn
            messages: document.getElementById("law-chat-messages"),
            inputArea: document.querySelector(".law-chat-input-area"),
            inputField: document.getElementById("chat-input-field"),
            sendBtn: document.getElementById("chat-send-btn")
        };
    }

    bindEvents() {
        this.dom.toggleBtn.addEventListener("click", () => this.toggleChat());

        // Close Buttons
        const closeBtns = document.querySelectorAll(".law-chat-close");
        closeBtns.forEach(btn => btn.addEventListener("click", () => this.toggleChat(false)));

        // Restart Button
        if (this.dom.restartBtn) {
            this.dom.restartBtn.addEventListener("click", () => {
                // Optional: Confirm before restart? For now just reset.
                this.resetChat();
            });
        }

        // Send Message Events
        this.dom.sendBtn.addEventListener("click", () => this.handleTextInput());
        this.dom.inputField.addEventListener("keypress", (e) => {
            if (e.key === "Enter") this.handleTextInput();
        });
    }

    toggleChat(forceState = null) {
        if (forceState !== null) {
            this.state.isOpen = forceState;
        } else {
            this.state.isOpen = !this.state.isOpen;
        }

        if (this.state.isOpen) {
            this.dom.container.classList.add("open");
            this.dom.toggleBtn.style.transform = "scale(0) rotate(90deg)"; // Hide Toggle

            // Fixed Check: Start flow if no bubbles exist yet (ignore branding)
            if (!this.dom.messages.querySelector(".chat-bubble")) {
                this.processStep("start");
            }
        } else {
            this.dom.container.classList.remove("open");
            this.dom.toggleBtn.style.transform = "scale(1) rotate(0)";
        }
    }

    async processStep(stepId) {
        const step = this.config[stepId];
        if (!step) {
            console.error("Step not found:", stepId);
            return;
        }

        this.state.currentStep = stepId;

        // Show Typing Indicator
        await this.showTyping();

        // Render Bot Message
        this.addMessage(step.message, "bot");

        // Handle Input Types
        this.handleInputType(step);

        // Handle End State
        if (step.type === "end") {
            if (step.action === "submit") {
                this.submitData();
            } else {
                // For "close" or generic ends without submission, show the restart screen directly
                this.showEndScreen();
            }
        }
    }

    showTyping() {
        return new Promise(resolve => {
            const typingEl = document.createElement("div");
            typingEl.className = "typing-indicator";
            typingEl.innerHTML = `
        <span class="typing-dot"></span>
        <span class="typing-dot"></span>
        <span class="typing-dot"></span>
      `;
            this.dom.messages.appendChild(typingEl);
            this.scrollToBottom();

            setTimeout(() => {
                typingEl.remove();
                resolve();
            }, 800); // Artificial Delay
        });
    }

    addMessage(text, sender) {
        const bubble = document.createElement("div");
        bubble.className = `chat-bubble ${sender}`;
        bubble.innerText = text;
        this.dom.messages.appendChild(bubble);
        this.scrollToBottom();
    }

    scrollToBottom() {
        // Use requestAnimationFrame to ensure DOM has updated height
        requestAnimationFrame(() => {
            this.dom.messages.scrollTop = this.dom.messages.scrollHeight;
        });
    }

    handleInputType(step) {
        // Reset Input Area
        this.dom.inputArea.classList.remove("active");
        this.dom.inputField.value = "";

        if (step.type === "buttons") {
            const optionsContainer = document.createElement("div");
            optionsContainer.className = "chat-options";

            step.options.forEach(opt => {
                const btn = document.createElement("button");
                btn.className = "chat-btn-option";
                btn.innerText = opt.label;
                btn.onclick = () => {
                    this.handleAnswer(step.key, opt.label, opt.next);
                    // Remove buttons after selection preventing re-click (optional, looks cleaner)
                    optionsContainer.remove();
                };
                optionsContainer.appendChild(btn);
            });

            this.dom.messages.appendChild(optionsContainer);
            this.scrollToBottom();
        }

        else if (step.type === "text" || step.type === "textarea") {
            this.dom.inputArea.classList.add("active");
            this.dom.inputField.focus();
        }

        else if (step.type === "multiselect") {
            const formContainer = document.createElement("div");
            formContainer.className = "chat-options";
            formContainer.style.flexDirection = "column";

            const checkboxes = [];

            step.options.forEach(optLabel => {
                const label = document.createElement("label");
                label.style.display = "flex";
                label.style.alignItems = "center";
                label.style.gap = "8px";
                label.style.padding = "5px 0";
                label.style.cursor = "pointer";

                const chk = document.createElement("input");
                chk.type = "checkbox";
                chk.value = optLabel;

                const span = document.createElement("span");
                span.innerText = optLabel;

                label.appendChild(chk);
                label.appendChild(span);
                formContainer.appendChild(label);
                checkboxes.push(chk);
            });

            // Done Button
            const doneBtn = document.createElement("button");
            doneBtn.className = "chat-btn-option";
            doneBtn.style.marginTop = "10px";
            doneBtn.style.background = "var(--chat-primary)";
            doneBtn.style.color = "white";
            doneBtn.innerText = "Done ✓";
            doneBtn.onclick = () => {
                const selected = checkboxes.filter(c => c.checked).map(c => c.value);
                if (selected.length === 0) return; // Require at least one? Or allow empty? Assuming require.

                const answerText = selected.join(", ");
                formContainer.remove();
                this.handleAnswer(step.key, answerText, step.next);
            };

            formContainer.appendChild(doneBtn);
            this.dom.messages.appendChild(formContainer);
            this.scrollToBottom();
        }
    }

    handleTextInput() {
        const text = this.dom.inputField.value.trim();
        if (!text) return;

        const currentStepObj = this.config[this.state.currentStep];

        // Basic Validation
        if (currentStepObj.validation === "email") {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(text)) {
                alert("Please enter a valid email address.");
                return;
            }
        }

        if (currentStepObj.validation === "name") {
            // Allows letters, spaces, hyphens, apostrophes. 
            const nameRegex = /^[a-zA-Z\s'-]+$/;
            if (!nameRegex.test(text)) {
                alert("Please enter a valid name (letters only, no numbers).");
                return;
            }
        }

        if (currentStepObj.validation === "city") {
            // City/Location: Letters, spaces, commas, periods, hyphens. NO Numbers.
            const cityRegex = /^[a-zA-Z\s,.-]+$/;
            if (!cityRegex.test(text)) {
                alert("Please enter a valid city (letters only, no numbers).");
                return;
            }
        }

        if (currentStepObj.validation === "employer") {
            // Employer: Alphanumeric + basic punctuation. 
            // We want to restrict "special characters" typically used in code injection or spam, 
            // but allow things like "&" (AT&T), "." (Inc.), "," (Co., Ltd), "-" (Hy-Vee).
            // Let's block highly special chars: !@#$%^*()_+=[]{}\|;:"<>/?
            // Safe list: a-z A-Z 0-9 space . , - ' &
            const employerRegex = /^[a-zA-Z0-9\s.,'&-]+$/;
            if (!employerRegex.test(text)) {
                alert("Please enter a valid employer name (no special symbols).");
                return;
            }
        }

        if (currentStepObj.validation === "phone") {
            // Basic phone validation (at least 10 digits/chars)
            const phoneRegex = /^[\d\s()+-]{10,}$/;
            if (!phoneRegex.test(text)) {
                alert("Please enter a valid phone number.");
                return;
            }
        }

        this.handleAnswer(currentStepObj.key, text, currentStepObj.next);
    }

    handleAnswer(key, value, nextStepId) {
        // 1. Save Data
        if (key) {
            this.state.data[key] = value;
        }

        // 2. Show User Message
        this.addMessage(value, "user");

        // 3. Move to next step
        setTimeout(() => {
            this.processStep(nextStepId);
        }, 500);
    }

    submitData() {
        console.log("Submitting Data to WP AJAX...");

        // Prepare Data for WordPress AJAX
        const formData = new FormData();
        formData.append('action', 'nehoray_chat_submit');

        // We send the whole state as a JSON string to handle dynamic fields easily
        formData.append('chat_payload', JSON.stringify({
            ...this.state.data,
            timestamp: new Date().toISOString(),
            source: window.location.href
        }));

        // Get AJAX URL from localized params
        const ajaxUrl = (window.nehorayChatParams && window.nehorayChatParams.ajaxUrl)
            ? window.nehorayChatParams.ajaxUrl
            : '/wp-admin/admin-ajax.php';

        fetch(ajaxUrl, {
            method: "POST",
            body: formData
        })
            .then(res => res.json())
            .then(response => {
                if (response.success) {
                    console.log("Chat data sent via WP Mail!");
                } else {
                    console.error("WP Mail Error:", response);
                }
            })
            .catch(err => console.error("Network Error:", err))
            .finally(() => {
                // Show End Screen regardless of success/fail so user isn't stuck
                this.showEndScreen();
            });
    }

    showEndScreen() {
        const endContainer = document.createElement("div");
        endContainer.className = "chat-end-container";
        endContainer.innerHTML = `
            <div class="chat-end-divider">Chat has ended</div>
            <button class="chat-restart-btn-lg">Start new chat</button>
        `;

        // Restart Logic
        endContainer.querySelector("button").onclick = () => {
            this.resetChat();
        };

        this.dom.messages.appendChild(endContainer);
        this.scrollToBottom();

        // Hide Input Area just in case
        this.dom.inputArea.classList.remove("active");
    }

    resetChat() {
        this.state = {
            isOpen: true,
            currentStep: "start",
            history: [],
            data: {}
        };
        // Clear messages but keep branding area (only remove dynamic elements)
        const elementsToRemove = this.dom.messages.querySelectorAll(".chat-bubble, .typing-indicator, .chat-options, .chat-end-container");
        elementsToRemove.forEach(el => el.remove());

        this.processStep("start");
    }
}

// Auto-initialize when script loads
document.addEventListener("DOMContentLoaded", () => {
    if (window.chatConfig) {
        window.lawChat = new LawChatWidget(window.chatConfig);
    } else {
        console.error("Chat Config not found!");
    }
});
