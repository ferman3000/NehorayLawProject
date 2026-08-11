<?php
/**
 * Template Name: Solidarity
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standing With Garden Grove | Law Offices of Bob Nehoray</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<section class="sol-hero">
    <div class="sol-hero-content">
        <span class="sol-hero-badge">Community Alert / Alerta Comunitaria</span>
        <h1>Standing With<br>Garden Grove</h1>
        <p class="sol-hero-sub-en">A chemical emergency affected thousands of families in Orange County. We are here to help.</p>
        <p class="sol-hero-sub-es">Una emergencia química afectó a miles de familias en el Condado de Orange. Estamos aquí para ayudar.</p>
        <a href="#sol-form" class="sol-hero-btn">Get Free Consultation / Consulta Gratuita</a>
    </div>
</section>

<section class="sol-incident">
    <div class="sol-container">
        <div class="sol-incident-grid">
            <div class="sol-incident-text">
                <h2 class="sol-section-title">What Happened</h2>
                <p>On May 22, 2026, a chemical storage tank at the GKN Aerospace facility in Garden Grove, California malfunctioned. The tank, containing approximately 7,000 gallons of methyl methacrylate — a highly toxic and flammable chemical — began overheating due to a faulty valve, putting the surrounding community at risk of a catastrophic explosion.</p>
                <p>Approximately <strong>50,000 residents</strong> of Orange County were placed under evacuation orders. A presidential emergency declaration was signed, and emergency crews worked around the clock to stabilize the situation.</p>

                <div class="sol-divider"></div>

                <h2 class="sol-section-title">Qué Sucedió</h2>
                <p>El 22 de mayo de 2026, un tanque de almacenamiento químico en las instalaciones de GKN Aerospace en Garden Grove, California, presentó una falla. El tanque, que contenía aproximadamente 7,000 galones de metacrilato de metilo — un químico altamente tóxico e inflamable — comenzó a sobrecalentarse debido a una válvula defectuosa, poniendo en riesgo a la comunidad circundante.</p>
                <p>Aproximadamente <strong>50,000 residentes</strong> del Condado de Orange fueron puestos bajo órdenes de evacuación. Se firmó una declaración presidencial de emergencia y los equipos de emergencia trabajaron sin descanso para estabilizar la situación.</p>
            </div>
            <div class="sol-incident-img">
                <img src="https://images.unsplash.com/photo-1569862986409-a33b0e7f1b88?auto=format&fit=crop&w=800&q=80" alt="Emergency response team" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="sol-community">
    <div class="sol-container">
        <div class="sol-community-grid">
            <div class="sol-community-img">
                <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?auto=format&fit=crop&w=800&q=80" alt="Community support and solidarity" loading="lazy">
            </div>
            <div class="sol-community-text">
                <h2 class="sol-section-title">We Stand With You</h2>
                <p>At the Law Offices of Bob Nehoray, we believe that when disaster strikes, no one should face it alone. Our team is committed to helping families in Garden Grove and across Orange County navigate the legal process and fight for the compensation they deserve.</p>

                <div class="sol-divider"></div>

                <h2 class="sol-section-title">Estamos Con Usted</h2>
                <p>En las Oficinas Legales de Bob Nehoray, creemos que cuando ocurre un desastre, nadie debería enfrentarlo solo. Nuestro equipo está comprometido a ayudar a las familias de Garden Grove y todo el Condado de Orange a navegar el proceso legal y luchar por la compensación que merecen.</p>
            </div>
        </div>
    </div>
</section>

<section class="sol-form-section" id="sol-form">
    <div class="sol-container">
        <div class="sol-form-layout">

            <div class="sol-form-wrapper">
                <div class="sol-form-header">
                    <h2>Contact Us Today / Contáctenos Hoy</h2>
                    <p>Fill out the form below and a member of our team will contact you shortly.<br>
                    Complete el formulario y un miembro de nuestro equipo lo contactará pronto.</p>
                </div>

                <?php echo do_shortcode( '[contact-form-7 id="086ddf1" title="Solidarity Form"]' ); ?>
            </div>

            <aside class="sol-sidebar">
                <span class="sol-sidebar-eyebrow">24/7 Emergency Line</span>
                <h2 class="sol-sidebar-headline">Need Immediate<br>Assistance?</h2>
                <p class="sol-sidebar-desc">Call us now for a free, confidential consultation about your rights.<br><br>
                Llámenos ahora para una consulta gratuita y confidencial sobre sus derechos.</p>

                <div class="sol-sidebar-phone">
                    <svg viewBox="0 0 24 24" fill="currentColor" width="22" height="22"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                    <span>(888) 595-4LAW</span>
                </div>

                <div class="sol-sidebar-divider"></div>

                <div class="sol-sidebar-offices">
                    <h4>Our Offices / Nuestras Oficinas</h4>
                    <ul>
                        <li>Encino (Headquarters)</li>
                        <li>Hemet</li>
                        <li>Palm Desert</li>
                        <li>Oakland</li>
                        <li>Sacramento</li>
                        <li>San Diego</li>
                        <li>Bakersfield</li>
                    </ul>
                </div>

                <div class="sol-sidebar-divider"></div>

                <div class="sol-sidebar-badge">
                    <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    <span>Confidential & Secure<br>Confidencial y Seguro</span>
                </div>
            </aside>

        </div>
    </div>
</section>

<?php wp_footer(); ?>
</body>
</html>
