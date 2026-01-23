<?php
/*
Template Name: Practice Areas
*/
include 'header.php'; ?>

<!-- HERO SECTION -->
<section class="page-hero">
    <div class="hero-content">
        <h1>Practice Areas</h1>
        <p>Expert legal representation across all areas of personal injury and employment law.</p>
    </div>
</section>

<!-- MAIN LAYOUT -->
<div class="practice-container">
    
    <!-- LEFT SIDEBAR: ACCORDION -->
    <aside class="practice-sidebar">
        <h3 class="sidebar-title">Legal Services</h3>
        
        <div class="accordion-menu">
            
            <!-- PERSONAL INJURY -->
            <div class="accordion-item">
                <div class="accordion-header active" data-target="personal-injury">
                    <span>Personal Injury</span>
                    <span class="accordion-icon">▼</span>
                </div>
                <!-- Submenu (Auto-expanded for demo) -->
                <div class="accordion-content" style="max-height: 500px;">
                    <a href="#" class="accordion-link" data-content="personal-injury">Overview</a>
                    <a href="#" class="accordion-link" data-content="auto-accidents">Auto Accidents</a>
                    <a href="#" class="accordion-link" data-content="slip-fall">Slip & Fall</a>
                    <a href="#" class="accordion-link" data-content="dog-bite">Dog Bite</a>
                    <a href="#" class="accordion-link" data-content="brain-injury">Brain & Head Injury</a>
                    <a href="#" class="accordion-link" data-content="uninsured-insured">Uninsured and Under-Insured</a>
                    <a href="#" class="accordion-link" data-content="trucking">Trucking & Big Rig Accidents</a>
                    <a href="#" class="accordion-link" data-content="motorcycle">Motorcycle Accidents</a>
                </div>
            </div>

            <!-- WORKERS COMP -->
            <div class="accordion-item">
                <div class="accordion-header" data-target="workers-comp">
                    <span>Workers Compensation</span>
                    <span class="accordion-icon">▼</span>
                </div>
                <div class="accordion-content">
                    <a href="#" class="accordion-link active" data-content="workers-compensation">Overview</a>
                    <a href="#" class="accordion-link" data-content="benefits-overview">Benefits Overview</a>
                    <a href="#" class="accordion-link" data-content="survivor">Survivor Benefits</a>
                    <a href="#" class="accordion-link" data-content="wages">Loss of Wages</a>
                    <a href="#" class="accordion-link" data-content="voc-rehab">Vocational Rehabilitation</a>
                </div>
            </div>

            <!-- EMPLOYMENT LAW -->
            <div class="accordion-item">
                <div class="accordion-header" data-target="employment">
                    <span>Employment Law</span>
                    <span class="accordion-icon">▼</span>
                </div>
                <div class="accordion-content">
                    <a href="#" class="accordion-link active" data-content="employment-law">Overview</a>
                    <a href="#" class="accordion-link" data-content="wrongful-termination">Wrongful Termination</a>
                    <a href="#" class="accordion-link" data-content="discrimination">Discrimination</a>
                    <a href="#" class="accordion-link" data-content="harassment">Sexual Harassment</a>
                    <a href="#" class="accordion-link" data-content="employment-faq">Employment Law Frequently Asked Questions</a>
                    <a href="#" class="accordion-link" data-content="employment-overview">Employment Law: An Employee Overview</a>
                </div>
            </div>

             <!-- SOCIAL SECURITY -->
             <div class="accordion-item">
                <div class="accordion-header" data-target="ssdi">
                    <span>Social Security</span>
                    <span class="accordion-icon">▼</span>
                </div>
                <div class="accordion-content">
                    <!-- <a href="#" class="accordion-link" data-content="ssdi">Disability Claims</a> -->
                </div>
            </div>

        </div>
    </aside>

    <!-- RIGHT CONTENT: DYNAMIC AREA -->
    <main id="dynamic-content">
        <!-- Content will be loaded here via Fetch -->
        <!-- Default Content Loading... -->
        <div style="text-align:center; padding: 50px;">
            <p>Loading content...</p>
        </div>
    </main>

</div>

<?php include 'footer.php'; ?>
