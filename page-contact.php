<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<section class="hero-contact">
        <div class="hero-content">
            <h1>Contact Us</h1>
            <p>Immediate legal assistance. Confidential. Free Consultation.</p>
        </div>
</section>
    <div class="section-header-wrapper">
        <h2 class="section-title">Contact Our Team</h2>
        <p class="section-subtitle">A multidisciplinary force led by industry veteran Bob Nehoray ready to fight for you.</p>
    </div>
    <div class="contact-container-standard">

        <aside class="contact-info-card">
            <span class="contact-eyebrow">Direct Line</span>
            <h2 class="contact-headline-small">War Room Access</h2>
            <p class="contact-desc-small">
                Don't wait. Statutes of limitations are real deadlines. Contacting us today protects your right to compensation.
            </p>

            <div class="office-mini-item">
                <div class="office-mini-title">
                    <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                    Headquarters
                </div>
                <div class="office-mini-address">16542 Ventura Boulevard Suite 417<br>Encino, CA 91436</div>
            </div>

            <div class="office-mini-item">
                <div class="office-mini-title">
                    <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                    Hemet Office
                </div>
                <div class="office-mini-address">1600 E Florida Ave<br>Hemet, CA 92544</div>
            </div>

            <div class="office-mini-item">
                <div class="office-mini-title">
                    <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                    Palm Desert Office
                </div>
                <div class="office-mini-address">74-075 El Paseo Ste C-5<br>Palm Desert, CA 92260</div>
            </div>

            <div class="office-mini-item">
                <div class="office-mini-title">
                    <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                    Riverside Office
                </div>
                <div class="office-mini-address">3763 Arlington Ave<br>Riverside, CA 92506</div>
            </div>

            <div class="channel-grid">
                <div class="channel-item">
                    <h4>Phone</h4>
                    <p>(888) 595-4LAW</p>
                </div>
                <!-- <div class="channel-item">
                    <h4>Live Chat</h4>
                    <p style="color: var(--accent);">24/7 Support</p>
                </div> -->
            </div>
        </aside>
        <?php echo do_shortcode( '[contact-form-7 id="063833b" title="Contact Form"]' ); ?> 
        <!-- <main class="form-side-wrapper">
            <div class="form-header">
                <h2>Request Case Review</h2>
            </div>

         <div class="contact-form-wrapper">
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
        </div>
        </main> -->

    </div>

<?php get_footer(); ?>