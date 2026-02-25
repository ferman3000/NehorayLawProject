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
    <title>Law Offices Of Bob Nehoray</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <nav>
        <div class="logo">
            <a href="<?php echo home_url('/'); ?>" class="brand-logo">
                <span class="brand-sub">Law Offices of</span>
                <span class="brand-main">Bob Nehoray</span>
            </a>
        </div>
        <div class="nav-links">
            <a href="<?php echo home_url('/practice-areas'); ?>" class="<?php echo is_page('practice-areas') ? 'active' : ''; ?>" style="color: <?php echo is_page('practice-areas') ? 'var(--accent)' : 'var(--primary)'; ?>;">Practice Areas</a>
            <a href="<?php echo home_url('/attorneys'); ?>" class="<?php echo is_page('attorneys') ? 'active' : ''; ?>" style="color: <?php echo is_page('attorneys') ? 'var(--accent)' : 'var(--primary)'; ?>;">Attorneys</a>
            <a href="<?php echo home_url('/testimonies'); ?>" class="<?php echo is_page('testimonies') ? 'active' : ''; ?>" style="color: <?php echo is_page('testimonies') ? 'var(--accent)' : 'var(--primary)'; ?>;">Testimonials</a>
            <a href="<?php echo home_url('/blog'); ?>" class="<?php echo ( ( is_home() && ! is_front_page() ) || is_single() ) ? 'active' : ''; ?>" style="color: <?php echo ( ( is_home() && ! is_front_page() ) || is_single() ) ? 'var(--accent)' : 'var(--primary)'; ?>;">Blog</a>
            <a href="<?php echo home_url('/contact'); ?>" class="<?php echo is_page('contact') ? 'active' : ''; ?>" style="color: <?php echo is_page('contact') ? 'var(--accent)' : 'var(--primary)'; ?>;">Contact</a>
            <!-- <div class="lang-switch">
                <span class="lang-opt active">EN</span>
                <span class="lang-divider">|</span>
                <span class="lang-opt">ES</span>
            </div> -->
        </div>
        <div class="mobile-menu">☰</div>
    </nav>