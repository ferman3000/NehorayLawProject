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
    <title>Nehoray Law | High Performance Demo</title>
    <?php wp_head(); ?>
    <style>
        /* RESET & BASE */
        /* =========================================
           ESTILOS UNIVERSALES DE TIPOGRAFÍA (MASTER)
           ========================================= */
        
        .section-title {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 3rem;       /* Tamaño grande y autoritario */
            font-weight: 800;      /* Extra Bold */
            text-transform: uppercase;
            letter-spacing: -1px;  /* Moderno y compacto */
            line-height: 1.1;
            margin-bottom: 20px;
            text-align: center;    /* Siempre centrado por defecto */
            color: var(--primary); /* Color por defecto: Navy Blue */
            
            /* Truco para evitar saltos de línea feos */
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .section-subtitle {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 1.125rem;   /* 18px */
            font-weight: 400;      /* Regular */
            color: #64748b;        /* Gris suave (Slate 500) */
            text-align: center;
            line-height: 1.6;
            max-width: 700px;      /* Ancho de lectura cómodo */
            margin: 0 auto 60px;   /* Margen inferior estándar para todas las secciones */
        }

        /* VARIANTE: MODO OSCURO (Para fondos azules/negros) */
        .section-title.light-mode {
            color: #ffffff;
        }

        .section-subtitle.light-mode {
            color: #cbd5e1; /* Gris muy claro (Slate 300) para contraste en oscuro */
        }

        /* RESPONSIVE: Ajuste automático para móviles */
        @media (max-width: 768px) {
            .section-title {
                font-size: 2.2rem; /* Más pequeño en celular para que no rompa */
            }
            .section-subtitle {
                font-size: 1rem;
                padding: 0 20px;
            }
        }
        
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #333; line-height: 1.6; background: #f9f9f9; }
        
        /* VARIABLES */
        :root {
            --primary: #111111; /* Navy Blue oscuro */
            --accent: #c5a059;  /* Gold elegante */
            --text: #334155;
            --white: #ffffff;
        }

        /* NAVIGATION */
        /* nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 5%;
            background: var(--white);
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        .logo { font-size: 1.5rem; font-weight: 800; color: var(--primary); text-transform: uppercase; letter-spacing: -1px; }
        .logo span { color: var(--accent); }
        .nav-links { display: flex; gap: 30px; }
        .nav-links a { text-decoration: none; color: var(--primary); font-weight: 500; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; transition: color 0.3s; }
        .nav-links a:hover { color: var(--accent); }
        .mobile-menu { display: none; font-size: 1.5rem; cursor: pointer; } */

        /* HERO SECTION */
        /* .hero {
            height: 85vh;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=2400&q=80') no-repeat center center/cover;, url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=2400&q=80'); 
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--white);
            padding: 0 20px;
            margin-top: 60px; 
        }
        .hero-content { max-width: 800px; animation: fadeIn 1.5s ease; }
        .hero h1 { font-size: 4rem; margin-bottom: 1rem; line-height: 1.1; font-weight: 700; letter-spacing: -2px; }
        .hero p { font-size: 1.25rem; margin-bottom: 2rem; color: #cbd5e1; font-weight: 300; }
        
        .btn {
            display: inline-block;
            padding: 15px 40px;
            background: var(--accent);
            color: var(--white);
            text-decoration: none;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 2px;
            transition: all 0.3s ease;
            border: 2px solid var(--accent);
        }
        .btn:hover { background: transparent; color: var(--accent); } */

        /* FEATURES / SERVICES */
    

        /* Imágenes de fondo para cada oficina */
        


        /* FOOTER */
        /* .site-footer {
            background: var(--primary);
            color: #94a3b8;
            padding: 60px 5% 30px;
            font-size: 0.9rem;
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .footer-logo {
            font-size: 1.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 20px;
            display: inline-block;
        }
        
        .footer-links {
            margin-bottom: 30px;
        }
        
        .footer-links a {
            color: #cbd5e1;
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.3s;
        }
        
        .footer-links a:hover { color: var(--accent); } */

        /* Responsive Contact */
        @media (max-width: 900px) {
            .contact-section { grid-template-columns: 1fr; padding: 60px 20px; }
            .contact-info { padding-right: 0; text-align: center; margin-bottom: 40px; }
            .contact-info h2, .contact-info p { text-align: center; margin-left: auto; margin-right: auto; }
            .urgent-call { text-align: center; }
            .contact-form-wrapper { padding: 30px 20px; }
        }

        /* FLOATING CHAT BUTTON */
        .chat-widget {
            position: fixed; /* La clave para que se mueva con la pantalla */
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background-color: var(--accent); /* Dorado */
            border-radius: 50%; /* Lo hace redondo */
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            z-index: 1000; /* Siempre encima de todo */
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            text-decoration: none;
        }

        .chat-widget:hover {
            transform: scale(1.1) translateY(-5px); /* Efecto de salto al pasar el mouse */
            background-color: #fff; /* Cambio de color al hover */
            box-shadow: 0 10px 25px rgba(197, 160, 89, 0.4); /* Resplandor dorado */
        }

        .chat-icon {
            width: 28px;
            height: 28px;
            fill: #fff; /* Icono blanco por defecto */
            transition: fill 0.3s;
        }

        .chat-widget:hover .chat-icon {
            fill: var(--accent); /* El icono se vuelve dorado al hover */
        }
        
        /* Tooltip (Texto "Chat with us" que aparece al lado) */
        .chat-tooltip {
            position: absolute;
            right: 70px;
            background: #fff;
            color: var(--primary);
            padding: 8px 15px;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 700;
            opacity: 0; /* Invisible por defecto */
            visibility: hidden;
            transform: translateX(10px);
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            white-space: nowrap;
        }
        
        .chat-widget:hover .chat-tooltip {
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
        }

        /* Ajuste para móviles */
        @media (max-width: 768px) {
            .chat-widget {
                bottom: 20px;
                right: 20px;
                width: 55px;
                height: 55px;
            }
        }
        /* COOKIE BANNER */
        .cookie-consent-banner {
            position: fixed;
            bottom: 30px;
            left: 30px;
            width: 320px;
            background-color: #111111; /* Negro elegante */
            padding: 25px;
            z-index: 9999; /* Por encima de todo, incluso del chat */
            box-shadow: 0 10px 40px rgba(0,0,0,0.5); /* Sombra profunda */
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-left: 4px solid var(--accent); /* Detalle dorado */
            display: none; /* Oculto por defecto hasta que JS diga lo contrario */
            animation: slideUp 0.5s ease-out;
        }

        .cookie-title {
            color: #fff;
            font-weight: 700;
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .cookie-text {
            color: #94a3b8;
            font-size: 0.85rem;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .cookie-btn {
            background-color: var(--accent);
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s;
        }

        .cookie-btn:hover {
            background-color: #b08d4b;
        }

        @keyframes slideUp {
            from { transform: translateY(100px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* En móviles, que ocupe todo el ancho abajo */
        @media (max-width: 768px) {
            .cookie-consent-banner {
                left: 0;
                bottom: 0;
                width: 100%;
                border-left: none;
                border-top: 4px solid var(--accent);
            }
        }

        .lang-switch {
            display: inline-flex;
            align-items: center;
            margin-left: 25px;
            font-size: 0.8rem;
            font-weight: 800;
            letter-spacing: 1px;
            user-select: none;
        }

        .lang-opt {
            cursor: pointer;
            /* CAMBIO: Color oscuro para que se vea sobre fondo blanco */
            color: var(--primary); 
            opacity: 0.4; /* Inactivo un poco transparente */
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .lang-opt:hover {
            opacity: 1;
            color: var(--accent); /* Dorado al pasar el mouse */
        }

        /* El idioma activo se queda Dorado y totalmente visible */
        .lang-opt.active {
            opacity: 1;
            color: var(--accent); 
            border-bottom: 2px solid var(--accent); /* Hice la línea un poco más gruesa */
        }

        .lang-divider {
            /* CAMBIO: Gris visible en lugar de blanco transparente */
            color: #cbd5e1; 
            margin: 0 8px;
            font-weight: 300;
        }

        @media (max-width: 768px) {
            .lang-switch { display: none; }
        }

        /* TRUCO DE MAGIA: */
/* El contenedor nace invisible para evitar el flash azul */
#voiceflow-chat {
    visibility: hidden !important;
    opacity: 0 !important;
    transition: opacity 0.2s ease; /* Transición suave al aparecer */
}

        
    </style>
</head>
<body <?php body_class(); ?>>

    <nav>
        <div class="logo"><a href="<?php echo home_url('/'); ?>" style="text-decoration:none; color:inherit;">NEHORAY <span>LAW</span></a></div>
        <div class="nav-links">
            <a href="<?php echo home_url('/practice-areas'); ?>" class="<?php echo is_page('practice-areas') ? 'active' : ''; ?>" style="color: <?php echo is_page('practice-areas') ? 'var(--accent)' : 'var(--primary)'; ?>;">Practice Areas</a>
            <a href="<?php echo home_url('/attorneys'); ?>" class="<?php echo is_page('attorneys') ? 'active' : ''; ?>" style="color: <?php echo is_page('attorneys') ? 'var(--accent)' : 'var(--primary)'; ?>;">Attorneys</a>
            <a href="<?php echo home_url('/testimonies'); ?>" class="<?php echo is_page('testimonies') ? 'active' : ''; ?>" style="color: <?php echo is_page('testimonies') ? 'var(--accent)' : 'var(--primary)'; ?>;">Testimonials</a>
            <a href="<?php echo home_url('/contact'); ?>" class="<?php echo is_page('contact') ? 'active' : ''; ?>" style="color: <?php echo is_page('contact') ? 'var(--accent)' : 'var(--primary)'; ?>;">Contact</a>
                        <div class="lang-switch">
                <span class="lang-opt active">EN</span>
                <span class="lang-divider">|</span>
                <span class="lang-opt">ES</span>
            </div>
        </div>
        <div class="mobile-menu">☰</div>
    </nav>