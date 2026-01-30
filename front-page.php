<?php
/**
 * Template Name: Demo Speed Lawyer (Front Page)
 *
 * @package NehorayNew
 */

get_header();
?>

    <section class="hero">
        <div class="hero-content">
            <h1>Relentless Justice. <br>Proven Results.</h1>
            <p>We fight for your rights when it matters most. Expert legal representation in Los Angeles.</p>
            <a href="<?php echo home_url('/contact'); ?>" class="btn">Get a Free Consultation</a>
        </div>
    </section>

    <section class="services-section">
        <h2 class="section-title">Legal Practice Areas</h2>
        <p class="section-subtitle">We provide aggressive representation across a wide range of complex legal matters.</p>
        
        <div class="services-grid">
            
            <?php
            // QUERY PERSONALIZADA PARA 'PRACTICE_AREA'
            $args = array(
                'post_type'      => 'practice_area',
                'posts_per_page' => -1, // Traer todos
                'order'          => 'ASC',
            );
            $services_query = new WP_Query( $args );

            if ( $services_query->have_posts() ) :
                while ( $services_query->have_posts() ) : $services_query->the_post();
                    
                    // OBTENER CAMPOS ACF
                    $icon_svg  = get_field('service_icon'); // El SVG crudo
                    $link_text = get_field('link_text');    // El texto del botón
                    $link_url  = get_field('link_url');     // La URL personalizada

                    // Fallbacks
                    if( empty($link_text) ) $link_text = 'Consult About Case';
                    if( empty($link_url) )  $link_url  = '#contact';
                    ?>

                    <article class="service-card">
                        
                        <!-- SVG RENDERING (Direct output of raw code) -->
                        <?php if( $icon_svg ): ?>
                            <?php echo $icon_svg; ?> 
                        <?php else: ?>
                            <!-- Fallback Icon if empty -->
                            <svg class="service-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"/></svg>
                        <?php endif; ?>

                        <h3><?php the_title(); ?></h3>
                        
                        <!-- CONTENT (Strip P tags if needed, but the_content usually adds them) -->
                        <?php the_content(); ?>

                        <a href="<?php echo esc_attr($link_url); ?>" class="card-link"><?php echo esc_html($link_text); ?></a>
                    </article>

                <?php endwhile;
                wp_reset_postdata();

            else : ?>
                
                <!-- MENSAJE DE FALLBACK (Solo visible si no has creado posts aún) -->
                <p style="text-align:center; width:100%;">Please add 'Practice Areas' in the WordPress Admin.</p>

            <?php endif; ?>

        </div>
    </section>

    <section class="cta-banner">
        <div class="cta-overlay"></div> <div class="cta-container">
            
            <div class="cta-text-group">
                <h2 class="cta-question">Injured on the job?</h2>
                <h3 class="cta-big-title">CALL BOB</h3>
            </div>

            <div class="cta-divider"></div>

<div class="cta-action-group">
                <div class="cta-number-display">
                    <span class="material-icon">📞</span>
                    (888) 595-4LAW
                </div>
            </div>

        </div>
    </section>

    <section>
        <div style="text-align: center; padding: 70px 20px 40px; background: #fff;">
            <h2 class="section-title">Our Locations</h2>
            <p class="section-subtitle">Serving clients across California with offices strategically located for your
                convenience.</p>
        </div>

        <div class="offices-section">
            <article class="office-card office-hc">
                <div class="office-content">
                    <h3 class="office-city">Headquarters</h3>
                    <div class="office-details">
                        <p>16542 Ventura Boulevard Suite 417<br>Encino, CA 91436</p>
                        <p><strong>Phone:</strong> (888) 595-4LAW</p>
                    </div>
                </div>
            </article>

            <article class="office-card office-hemet">
                <div class="office-content">
                    <h3 class="office-city">Hemet</h3>
                    <div class="office-details">
                        <p>1600 E Florida Ave<br>Hemet, CA 92544</p>
                        <p><strong>Phone:</strong> (888) 595-4LAW</p>
                    </div>
                </div>
            </article>

            <article class="office-card office-pd">
                <div class="office-content">
                    <h3 class="office-city">Palm Desert</h3>
                    <div class="office-details">
                        <p>74-075 El Paseo Ste C-5<br>Palm Desert, CA 92260</p>
                        <p><strong>Phone:</strong> (888) 595-4LAW</p>
                    </div>
                </div>
            </article>

            <article class="office-card office-riv">
                <div class="office-content">
                    <h3 class="office-city">Riverside</h3>
                    <div class="office-details">
                        <p>3763 Arlington Ave<br>Riverside, CA 92506</p>
                        <p><strong>Phone:</strong> (888) 595-4LAW</p>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- <section class="results-section">
<div class="results-intro">
        <h2 class="section-title light-mode">Millions Recovered</h2>
        <p class="section-subtitle light-mode">Our track record speaks for itself. While past results do not guarantee future outcomes, our history of success shows our dedication to fighting for maximum compensation.</p>
    </div>

        <div class="results-grid">
            
            <div class="result-item">
                <span class="amount">$5.2M</span>
                <div class="case-type">Wrongful Death</div>
                <div class="case-desc">Trucking Accident Case</div>
            </div>

            <div class="result-item">
                <span class="amount">$2.1M</span>
                <div class="case-type">Brain Injury</div>
                <div class="case-desc">Construction Site Negligence</div>
            </div>

            <div class="result-item">
                <span class="amount">$850K</span>
                <div class="case-type">Auto Accident</div>
                <div class="case-desc">Disputed Liability Settlement</div>
            </div>

            <div class="result-item">
                <span class="amount">$1.5M</span>
                <div class="case-type">Workplace Injury</div>
                <div class="case-desc">Third-Party Liability Claim</div>
            </div>

        </div>

        <p class="disclaimer">* Examples of past cases. Results vary depending on the facts of each case.</p>
    </section> -->
  <!-- <section class="team-section">
        <h2 class="section-title">Meet The Team</h2>
        <p class="section-subtitle">Experienced litigators dedicated to protecting your rights and securing your future.
        </p>

        <div class="team-grid">
            <article class="attorney-card">
                <div class="attorney-image-wrapper">
                    <img src="https://nehoraylaw.com/wp-content/uploads/2020/03/bob_image2-263x285-1.jpg"
                        alt="Bob Nehoray" loading="lazy">
                    <div class="attorney-overlay">
                        <div class="attorney-overlay-role">Founding Partner</div>
                        <p class="attorney-overlay-bio">With over 25 years of trial experience, Bob has recovered
                            millions for clients in complex personal injury and employment cases.</p>
                    </div>
                </div>
                <div class="attorney-info">
                    <h3 class="attorney-name">Bob Nehoray</h3>
                </div>
            </article>

            <article class="attorney-card">
                <div class="attorney-image-wrapper">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                        alt="Alexi Martirosyan" loading="lazy">
                    <div class="attorney-overlay">
                        <div class="attorney-overlay-role">Senior Associate</div>
                        <p class="attorney-overlay-bio">Specializing in workplace discrimination and harassment, Alexi
                            is a fierce advocate for employee rights across California.</p>
                    </div>
                </div>
                <div class="attorney-info">
                    <h3 class="attorney-name">Alexi Martirosyan</h3>
                </div>
            </article>

            <article class="attorney-card">
                <div class="attorney-image-wrapper">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                        alt="Jackie Martinez" loading="lazy">
                    <div class="attorney-overlay">
                        <div class="attorney-overlay-role">Trial Attorney</div>
                        <p class="attorney-overlay-bio">Jackie brings a strategic approach to civil litigation, focusing
                            on catastrophic injury and wrongful death claims.</p>
                    </div>
                </div>
                <div class="attorney-info">
                    <h3 class="attorney-name">Jackie Martinez</h3>
                </div>
            </article>
        </div>
    </section> -->
   <section id="contact" class="contact-section">
        
        <div class="contact-info">
            <h2 class="section-title">Get a Free Consultation</h2>
            <p class="section-subtitle" style="margin-bottom: 30px;">
                Legal cases have strict time limits. Don't let the statute of limitations expire on your claim. Contact us today for a confidential review of your case.
            </p>

            <div class="urgent-call">
                <h4>Immediate Assistance 24/7</h4>
                <a href="tel:888-555-0123" class="phone-display">(888) 595-4LAW</a>
                <p style="margin-top: 10px; font-size: 0.9rem; color: #64748b; text-align: center;">Se Habla Español</p>
            </div>
        </div> 

        <?php echo do_shortcode( '[contact-form-7 id="c06dbd5" title="Contact form 1"]' ); ?> 

        <!-- <div class="contact-form-wrapper">
            
            <form>
                <div class="form-group">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-input" placeholder="John Doe">
                </div>
                
                <div class="form-group">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" class="form-input" placeholder="(555) 123-4567">
                </div>

                <div class="form-group">
                    <label class="form-label">Case Type</label>
                    <select class="form-input">
                        <option>Personal Injury</option>
                        <option>Employment Law</option>
                        <option>Workers Compensation</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Tell us about your case</label>
                    <textarea class="form-textarea" placeholder="Please describe what happened..."></textarea>
                </div>

                <button type="submit" class="submit-btn">Request Free Review</button>
            </form> 
         </div> -->

    </section>

<?php
get_footer();