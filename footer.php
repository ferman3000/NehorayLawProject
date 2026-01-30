<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NehorayNew
 */

?>

    <footer class="site-footer">
        <div class="footer-logo">NEHORAY <span style="color: var(--accent);">LAW</span></div>
        <div class="footer-links">
            <a href="<?php echo home_url('/'); ?>">Home</a>
            <!-- <a href="#">About Us</a> -->
            <a href="<?php echo home_url('/practice-areas'); ?>">Practice Areas</a>
            <!-- <a href="#">Disclaimer</a> -->
            <a href="<?php echo home_url('/privacy-policy'); ?>">Privacy Policy</a>
        </div>
        <p>&copy; <?php echo date('Y'); ?> Nehoray Law Firm. All Rights Reserved. Attorney Advertising.</p>
    </footer>

<!-- <a href="#" 
   class="chat-widget" 
   aria-label="Chat with us" 
   onclick="abrirChatPersonalizado(event)"> <span class="chat-tooltip">Start a Consultation</span>
    <svg class="chat-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z"/>
    </svg>
</a> -->
    <div id="cookieBanner" class="cookie-consent-banner">
        <div class="cookie-title">We Value Your Privacy</div>
        <p class="cookie-text">
            We use cookies to enhance your browsing experience and analyze our traffic. By continuing to use our site, you consent to our legal terms.
        </p>
        <button id="acceptCookies" class="cookie-btn">Accept & Close</button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const banner = document.getElementById("cookieBanner");
            const acceptBtn = document.getElementById("acceptCookies");

            if (!localStorage.getItem("nehorayCookiesAccepted")) {
                banner.style.display = "block";
            }

            acceptBtn.addEventListener("click", function() {
                localStorage.setItem("nehorayCookiesAccepted", "true");
                banner.style.display = "none";
            });
        });
    </script>
<!-- <script type="text/javascript"> -->
  <!-- (function(d, t) {
      var v = d.createElement(t), s = d.getElementsByTagName(t)[0];
      
      v.onload = function() {
        
        
        window.voiceflow.chat.load({
          verify: { projectID: '695d4ad10e56a355bc0a68ed' },
          url: 'https://general-runtime.voiceflow.com',
          versionID: 'production'
        }).then(() => {
           

        
            const checkInterval = setInterval(() => {
                const vfRoot = document.getElementById('voiceflow-chat');
                
                // Si encontramos el chat y su Shadow DOM...
                if (vfRoot && vfRoot.shadowRoot) {
                    
                    // 1. Matamos el botón azul internamente
                    const style = document.createElement('style');
                    style.innerHTML = `
                        .vfrc-launcher { display: none !important; }
                        .vfrc-proactive-message { display: none !important; }
                    `;
                    vfRoot.shadowRoot.appendChild(style);
                    
                    // 2. Hacemos visible el contenedor (ahora que ya está limpio)
                    // Usamos style inline para vencer al !important del CSS global
                    vfRoot.style.setProperty('visibility', 'visible', 'important');
                    vfRoot.style.setProperty('opacity', '1', 'important');
                    
                    
                    
                    // Dejamos de revisar
                    clearInterval(checkInterval);
                }
            }, 50); // Revisión ultrarrápida
        });
      }

      v.src = "https://cdn.voiceflow.com/widget-next/bundle.mjs";
      v.type = "text/javascript";
      s.parentNode.insertBefore(v, s);
  })(document, 'script');

  // TU FUNCIÓN DEL BOTÓN DORADO
  function abrirChatPersonalizado(e) {
      if(e) e.preventDefault();
      if (window.voiceflow && window.voiceflow.chat) {
          window.voiceflow.chat.open();
      } else {
          console.warn("Cargando...");
      }
  } -->
<!-- </script> -->

<?php wp_footer(); ?>

</body>
</html>
