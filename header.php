<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NehorayNew
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php // Título generado por WordPress (title-tag): único por página (WCAG 2.4.2) ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="skip-link" href="#primary">Skip to main content</a>

    <nav>
        <div class="logo">
            <a href="<?php echo home_url('/'); ?>" class="brand-logo">
                <span class="brand-sub">Law Offices of</span>
                <span class="brand-main">Bob Nehoray</span>
            </a>
        </div>
        <div class="nav-links">
            <a href="<?php echo home_url('/practice-areas'); ?>" class="<?php echo is_page('practice-areas') ? 'active' : ''; ?>" style="color: <?php echo is_page('practice-areas') ? 'var(--accent)' : 'var(--white)'; ?>;">Practice Areas</a>
            <a href="<?php echo home_url('/meet-our-team'); ?>" class="<?php echo is_page('meet-our-team') ? 'active' : ''; ?>" style="color: <?php echo is_page('meet-our-team') ? 'var(--accent)' : 'var(--white)'; ?>;">Meet our Team</a>
            <a href="<?php echo home_url('/testimonies'); ?>" class="<?php echo is_page('testimonies') ? 'active' : ''; ?>" style="color: <?php echo is_page('testimonies') ? 'var(--accent)' : 'var(--white)'; ?>;">Testimonials</a>
            <a href="<?php echo home_url('/blog'); ?>" class="<?php echo ( ( is_home() && ! is_front_page() ) || is_single() ) ? 'active' : ''; ?>" style="color: <?php echo ( ( is_home() && ! is_front_page() ) || is_single() ) ? 'var(--accent)' : 'var(--white)'; ?>;">Blog</a>
            <!-- <a href="<?php echo home_url('/attorney-referrals'); ?>" class="<?php echo is_page('attorney-referrals') ? 'active' : ''; ?>" style="color: <?php echo is_page('attorney-referrals') ? 'var(--accent)' : 'var(--white)'; ?>;">Attorney Referrals</a> -->
            <a href="<?php echo home_url('/contact'); ?>" class="<?php echo is_page('contact') ? 'active' : ''; ?>" style="color: <?php echo is_page('contact') ? 'var(--accent)' : 'var(--white)'; ?>;">Contact</a>
            <!-- <div class="lang-switch">
                <span class="lang-opt active">EN</span>
                <span class="lang-divider">|</span>
                <span class="lang-opt">ES</span>
            </div> -->
        </div>
        <button class="mobile-menu" aria-label="Open menu" aria-expanded="false">☰</button>
    </nav>