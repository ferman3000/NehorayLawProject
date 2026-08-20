document.addEventListener("DOMContentLoaded", function () {

    // --- ACCORDION LOGIC ---
    const headers = document.querySelectorAll(".accordion-header");

    headers.forEach(header => {
        header.addEventListener("click", function () {
            // Toggle Active Class
            this.classList.toggle("active");

            // Toggle Content Visibility
            const content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    });

    // --- DYNAMIC CONTENT FETCHING ---
    const links = document.querySelectorAll(".accordion-link");
    const contentArea = document.getElementById("primary");

    if (contentArea) {
        // Load default content (Personal Injury)
        loadContent('personal-injury');

        links.forEach(link => {
            link.addEventListener("click", function (e) {
                e.preventDefault();

                // Remove active class from all links
                links.forEach(l => l.classList.remove("active"));
                // Add active to clicked
                this.classList.add("active");

                const contentKey = this.getAttribute("data-content");
                loadContent(contentKey);
            });
        });

        function loadContent(key) {
            // Fade Out
            contentArea.style.opacity = '0.5';

            fetch(`${nehorayData.themeUrl}/content/${key}.html`)
                .then(response => {
                    if (!response.ok) throw new Error("Content not found");
                    return response.text();
                })
                .then(html => {
                    // Update Content
                    contentArea.innerHTML = html;
                    // Fade In
                    setTimeout(() => {
                        contentArea.style.opacity = '1';
                    }, 100);
                })
                .catch(error => {
                    contentArea.innerHTML = `<div style="padding:40px; text-align:center;"><h2>Content Under Construction</h2><p>This section is being updated.</p></div>`;
                    contentArea.style.opacity = '1';
                });
        }
    }

    // --- MEMBER DETAIL OVERLAY ---
    const overlay = document.getElementById('memberDetailOverlay');
    if (overlay) {
        const detailPhoto = document.getElementById('detailPhoto');
        const detailName = document.getElementById('detailName');
        const detailRole = document.getElementById('detailRole');
        const detailBio = document.getElementById('detailBio');
        const closeBtn = document.getElementById('memberDetailClose');

        const cards = document.querySelectorAll('.attorney-card');
        cards.forEach(card => {
            const roleEl = card.querySelector('.attorney-role');
            const hasBio = card.hasAttribute('data-bio');
            if ((roleEl && roleEl.textContent.trim() === 'Attorney') || hasBio) {
                card.classList.add('clickable');
            }

            card.addEventListener('click', function () {
                const role = this.querySelector('.attorney-role');
                const isAttorney = role && role.textContent.trim() === 'Attorney';
                const cardHasBio = this.hasAttribute('data-bio');
                if (!isAttorney && !cardHasBio) return;

                const img = this.querySelector('img');
                const nameEl = this.querySelector('.attorney-name');
                const lastnameEl = this.querySelector('.attorney-lastname');

                detailPhoto.src = img.src;
                detailPhoto.alt = img.alt;

                const fullName = (nameEl ? nameEl.textContent : '') + ' ' + (lastnameEl ? lastnameEl.textContent : '');
                detailName.textContent = fullName.trim();
                detailRole.textContent = role ? role.textContent : '';
                var customBio = this.getAttribute('data-bio');
                if (customBio) {
                    detailBio.innerHTML = customBio.replace(/\|/g, '<br><br>');
                } else {
                    detailBio.textContent = 'A dedicated member of the Nehoray Law team with years of experience in the legal field. Their commitment to excellence and passion for justice drives every case they handle. Whether navigating complex workers\' compensation claims, personal injury litigation, or employment law disputes, they bring a meticulous approach and deep understanding of California law to protect our clients\' rights. Known for their strong communication skills and compassionate client care, they work tirelessly to ensure every client feels heard, informed, and confident throughout the legal process. Their contributions to the firm have been instrumental in securing favorable outcomes and building lasting relationships with the communities we serve.';
                }

                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        function closeOverlay() {
            overlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        closeBtn.addEventListener('click', closeOverlay);

        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) {
                closeOverlay();
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && overlay.classList.contains('active')) {
                closeOverlay();
            }
        });
    }

    // --- HEADER SCROLL EFFECT ---
    const nav = document.querySelector("nav");
    if (nav) {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 50) {
                nav.classList.add("scrolled");
            } else {
                nav.classList.remove("scrolled");
            }
        });
    }

});
