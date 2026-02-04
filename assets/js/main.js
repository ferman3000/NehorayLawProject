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
    const contentArea = document.getElementById("dynamic-content");

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

});
