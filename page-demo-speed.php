<?php
/*
Template Name: Demo Speed Lawyer
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nehoray Law | High Performance Demo</title>
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
        nav {
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
        .mobile-menu { display: none; font-size: 1.5rem; cursor: pointer; }

        /* HERO SECTION */
        .hero {
            height: 85vh;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=2400&q=80') no-repeat center center/cover;, url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=2400&q=80'); /* Foto legal genérica de alta calidad */
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--white);
            padding: 0 20px;
            margin-top: 60px; /* Offset del navbar */
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
        .btn:hover { background: transparent; color: var(--accent); }

        /* FEATURES / SERVICES */
        .features { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px; padding: 80px 5%; background: var(--white); }
        .feature-card { padding: 40px; border: 1px solid #e2e8f0; transition: transform 0.3s ease; }
        .feature-card:hover { transform: translateY(-5px); border-color: var(--accent); box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .feature-card h3 { color: var(--primary); margin-bottom: 15px; font-size: 1.5rem; }
        .feature-card p { color: var(--text); font-size: 0.95rem; }

        /* FOOTER */
        footer { background: var(--primary); color: var(--white); text-align: center; padding: 40px 20px; }
        footer p { font-size: 0.8rem; opacity: 0.6; }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .nav-links { display: none; }
            .mobile-menu { display: block; color: var(--primary); }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* SERVICES SECTION (Optimized with SVGs) */
        .services-section {
            padding: 70px 5%;
            background: #ffffff;
            text-align: center;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .service-card {
            background: #fff;
            border: 1px solid #e2e8f0;
            padding: 40px 30px;
            border-radius: 4px;
            transition: all 0.3s ease;
            text-align: left;
            display: flex;
            flex-direction: column; /* Para alinear botones al fondo */
            height: 100%; /* Forza altura igual */
        }

        .service-card:hover {
            transform: translateY(-8px);
            border-color: var(--accent);
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.08);
        }

       .service-icon {
            width: 60px; /* Lo subí un poco para más presencia */
            height: 60px;
            margin-bottom: 25px;
            fill: var(--accent); /* Color dorado automático */
            align-self: center; /* <--- LA LÍNEA MÁGICA PARA CENTRARLO */
        }

        .service-card h3 {
            color: var(--primary);
            font-size: 1.5rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .service-card p {
            color: var(--text);
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 30px;
            opacity: 0.8;
            flex-grow: 1; /* EL TRUCO: Empuja el botón al fondo */
        }

        .card-link {
            color: var(--primary);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.85rem;
            text-decoration: none;
            letter-spacing: 1px;
            display: inline-flex;
            align-items: center;
            align-self: flex-start; /* Alinea a la izquierda */
            border-bottom: 2px solid transparent;
            padding-bottom: 2px;
            transition: 0.3s;
        }

        .service-card:hover .card-link {
            color: var(--accent);
            border-bottom-color: var(--accent);
        }

        /* OFFICES SECTION - ACCORDION */
        .offices-section {
            display: flex;
            height: 500px; /* Altura imponente */
            width: 100%;
            overflow: hidden;
            background: #000;
        }

        .office-card {
            flex: 1; /* Todos ocupan lo mismo al inicio */
            position: relative;
            transition: all 0.6s cubic-bezier(0.25, 1, 0.5, 1); /* Animación suave estilo Apple */
            overflow: hidden;
            display: flex;
            align-items: flex-end; /* Texto abajo */
            cursor: pointer;
            filter: grayscale(100%); /* Efecto elegante: B/N por defecto */
        }

        /* Imágenes de fondo para cada oficina */
        
/* CORRECCIÓN DE LAG: Imágenes optimizadas & WebP */
        
        .office-hemet { 
            /* Agregamos &w=600&q=60&fm=webp para que pese 50KB en lugar de 2MB */
            background: #2c3e50 url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=60') center/cover no-repeat; 
        }

        .office-pd { 
            background: #c0392b url('https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=60') center/cover no-repeat; 
        }

        .office-riv { 
            background: #7f8c8d url('https://images.unsplash.com/photo-1486325212027-8081e485255e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=60&fm=webp') center/cover no-repeat; 
        }

        /* Capa oscura para que el texto se lea siempre */
        .office-card {
            flex: 1;
            position: relative;
            transition: all 0.6s cubic-bezier(0.25, 1, 0.5, 1);
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            cursor: pointer;
            filter: grayscale(100%);
            
            /* --- AGREGA ESTA LÍNEA MÁGICA --- */
            will-change: flex-grow, filter; 
            /* Esto elimina el tartamudeo en la animación */
        }

        /* ESTADO HOVER (La Magia) */
        .office-card:hover {
            flex: 3.5; /* Se expande mucho */
            filter: grayscale(0%); /* Recupera el color */
        }
        
        /* Cuando haces hover en uno, oscurece más a los otros (opcional, visual) */
        .offices-section:hover .office-card:not(:hover)::before {
            background: rgba(15, 23, 42, 0.9);
        }

        .office-content {
            position: relative;
            z-index: 2;
            padding: 40px;
            width: 100%;
            transform: translateY(0);
            transition: 0.4s;
        }

        .office-city {
            font-size: 2rem;
            font-weight: 800;
            color: var(--white);
            text-transform: uppercase;
            letter-spacing: -1px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .office-city::before {
            content: '';
            display: inline-block;
            width: 30px;
            height: 2px;
            background: var(--accent);
            margin-right: 15px;
            transition: width 0.3s;
        }

        .office-card:hover .office-city::before {
            width: 60px; /* La línea crece al expandir */
        }

        .office-details {
            max-height: 0; /* Oculto por defecto */
            opacity: 0;
            overflow: hidden;
            transition: all 0.5s ease;
            font-size: 0.95rem;
            color: #cbd5e1;
        }

        .office-card:hover .office-details {
            max-height: 200px; /* Se muestra al expandir */
            opacity: 1;
            margin-top: 15px;
        }

        .office-btn {
            margin-top: 15px;
            display: inline-block;
            color: var(--accent);
            font-weight: 700;
            text-decoration: none;
            border-bottom: 1px solid var(--accent);
        }

        /* RESPONSIVE (Móvil) */
        @media (max-width: 768px) {
            .offices-section { flex-direction: column; height: auto; }
            .office-card { height: 250px; width: 100%; filter: grayscale(0%); }
            .office-card:hover { flex: 1; /* Desactivar expansión en móvil */ }
            .office-details { max-height: 200px; opacity: 1; margin-top: 10px; } /* Mostrar info siempre en móvil */
        }

        /* SETTLEMENTS / RESULTS SECTION */
        .results-section {
            background-color: var(--primary); /* Fondo Azul Oscuro */
            color: var(--white);
            padding: 100px 5%;
            text-align: center;
        }

        .results-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .result-item {
            border: 1px solid rgba(255, 255, 255, 0.1); /* Borde sutil */
            padding: 40px 20px;
            border-radius: 4px;
            transition: transform 0.3s ease;
        }

        .result-item:hover {
            background: rgba(255, 255, 255, 0.03);
            transform: translateY(-5px);
            border-color: var(--accent);
        }

        .amount {
            display: block;
            font-size: 3.5rem; /* GIGANTE */
            font-weight: 800;
            color: var(--accent); /* Dorado */
            margin-bottom: 10px;
            line-height: 1;
            font-family: 'Helvetica Neue', sans-serif; /* O la fuente que uses de números */
        }

        .case-type {
            font-size: 1.1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
            color: var(--white);
        }

        .case-desc {
            font-size: 0.9rem;
            color: #94a3b8;
            font-style: italic;
        }
        
        .disclaimer {
            margin-top: 60px;
            font-size: 0.75rem;
            color: #64748b;
            opacity: 0.6;
        }
/* ATTORNEYS / TEAM SECTION */
        .team-section {
            padding: 100px 5%;
            background: #ffffff;
            text-align: center;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        .attorney-card {
            position: relative;
            background: #fff;
            transition: all 0.4s ease;
        }

        .attorney-image-wrapper {
            width: 100%;
            height: 400px; /* Altura fija para uniformidad */
            overflow: hidden;
            position: relative;
            background: #f1f5f9;
        }

        .attorney-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center; /* Enfocar caras */
            filter: grayscale(100%); /* Efecto B/N elegante */
            transition: all 0.5s cubic-bezier(0.25, 1, 0.5, 1);
        }

        /* Al pasar el mouse, color y zoom */
        .attorney-card:hover .attorney-image-wrapper img {
            filter: grayscale(0%);
            transform: scale(1.05);
        }

        .attorney-info {
            padding: 25px 0;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        .attorney-name {
            font-size: 1.5rem;
            color: var(--primary);
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 5px;
            letter-spacing: -0.5px;
        }

        .attorney-role {
            color: var(--accent);
            font-size: 0.9rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .attorney-bio-snippet {
            font-size: 0.95rem;
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .view-profile-btn {
            text-decoration: none;
            color: var(--primary);
            font-weight: 700;
            font-size: 0.85rem;
            text-transform: uppercase;
            display: inline-flex;
            align-items: center;
            transition: color 0.3s;
        }

        .view-profile-btn::after {
            content: '+';
            font-size: 1.2rem;
            margin-left: 8px;
            color: var(--accent);
            transition: transform 0.3s;
        }

        .attorney-card:hover .view-profile-btn {
            color: var(--accent);
        }
        
        .attorney-card:hover .view-profile-btn::after {
            transform: rotate(90deg); /* Animación sutil de la cruz */
        }

/* CONTACT SECTION */
        .contact-section {
            padding: 100px 5%;
            background: #f8fafc; /* Gris muy muy claro para diferenciar del blanco */
            display: grid;
            grid-template-columns: 1fr 1fr; /* Mitad y mitad */
            gap: 60px;
            align-items: center;
        }

        .contact-info {
            padding-right: 30px;
        }

        .contact-info h2 {
            text-align: left; /* Alineamos a la izquierda aquí */
            margin-left: 0;
        }

        .contact-info p {
            text-align: left;
            margin-left: 0;
            font-size: 1.1rem;
        }

        .urgent-call {
            margin-top: 30px;
            padding: 30px;
            background: #fff;
            border-left: 5px solid var(--accent);
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .urgent-call h4 {
            color: var(--primary);
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .phone-display {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--accent);
            text-decoration: none;
            display: block;
            margin-top: 10px;
        }

        /* FORM STYLES */
        .contact-form-wrapper {
            background: #fff;
            padding: 50px;
            border-radius: 4px;
            box-shadow: 0 20px 50px rgba(15, 23, 42, 0.1); /* Sombra de lujo */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: var(--primary);
            font-weight: 700;
            font-size: 0.9rem;
        }

        .form-input, .form-textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #e2e8f0;
            border-radius: 4px;
            font-family: inherit;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8fafc;
        }

        .form-input:focus, .form-textarea:focus {
            outline: none;
            border-color: var(--accent); /* Brillo dorado al escribir */
            background: #fff;
            box-shadow: 0 0 0 3px rgba(197, 160, 89, 0.1);
        }

        .form-textarea {
            resize: vertical;
            height: 120px;
        }

        .submit-btn {
            width: 100%;
            padding: 18px;
            background: var(--accent);
            color: white;
            border: none;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 10px;
        }

        .submit-btn:hover {
            background: #b08d4b; /* Dorado un poco más oscuro */
        }

        /* FOOTER */
        .site-footer {
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
        
        .footer-links a:hover { color: var(--accent); }

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

/* LANGUAGE SWITCHER (Versión para Fondo Blanco) */
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
<body>

    <nav>
        <div class="logo">NEHORAY <span>LAW</span></div>
        <div class="nav-links">
            <a href="#">Practice Areas</a>
            <a href="#">Attorneys</a>
            <a href="#">Results</a>
            <a href="#">Contact</a>
                        <div class="lang-switch">
                <span class="lang-opt active">EN</span>
                <span class="lang-divider">|</span>
                <span class="lang-opt">ES</span>
            </div>
        </div>
        <div class="mobile-menu">☰</div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <h1>Relentless Justice. <br>Proven Results.</h1>
            <p>We fight for your rights when it matters most. Expert legal representation in Los Angeles.</p>
            <a href="#" class="btn">Get a Free Consultation</a>
        </div>
    </section>

<section class="services-section">
        <h2 class="section-title">Legal Practice Areas</h2>
        <p class="section-subtitle">We provide aggressive representation across a wide range of complex legal matters.</p>
        
        <div class="services-grid">
            
            <article class="service-card">
                <svg class="service-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 14h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
                <h3>Personal Injury</h3>
                <p>If you have been injured due to someone else's negligence, you deserve justice. We handle complex cases involving auto accidents, slips and falls, and catastrophic injuries, ensuring you get the maximum compensation for your recovery.</p>
                <a href="#contact" class="card-link">Consult About Injury</a>
            </article>

            <article class="service-card">
                <svg class="service-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h18c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
                <h3>Employment Law</h3>
                <p>Your workplace rights are non-negotiable. We fight for employees facing wrongful termination, discrimination, sexual harassment, or wage theft. Don't let corporations violate your rights—let us fight back for you.</p>
                <a href="#contact" class="card-link">Consult About Work</a>
            </article>

            <article class="service-card">
                <svg class="service-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2L1 21h22L12 2zm0 3.99L19.53 19H4.47L12 5.99zM11 16h2v2h-2zm0-6h2v4h-2z"/></svg>
                <h3>Workers' Compensation</h3>
                <p>Injured on the job? The system can be confusing and hostile. We help navigate the claims process to ensure you receive medical treatment and lost wage benefits immediately, protecting your livelihood while you heal.</p>
                <a href="#contact" class="card-link">Consult About Claims</a>
            </article>

            <article class="service-card">
                <svg class="service-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                <h3>Social Security Disability</h3>
                <p>When a disability prevents you from working, SSDI benefits are a lifeline. We guide you through the initial application and appeals process, cutting through the red tape to secure the long-term support you are entitled to.</p>
                <a href="#contact" class="card-link">Consult About SSDI</a>
            </article>

        </div>
    </section>
<section>
        <div style="text-align: center; padding: 20px 20px 40px; background: #fff;">
            <h2 class="section-title">Our Locations</h2>
            <p class="section-subtitle">Serving clients across California with offices strategically located for your convenience.</p>
        </div>

 <div class="offices-section">
            
            <article class="office-card office-hemet">
                <div class="office-content">
                    <h3 class="office-city">Hemet</h3>
                    <div class="office-details">
                        <p>1600 E Florida Ave<br>Hemet, CA 92544</p>
                        <p><strong>Phone:</strong> (951) 555-0101</p>
                        <a href="#" class="office-btn">Get Directions</a>
                    </div>
                </div>
            </article>

            <article class="office-card office-pd">
                <div class="office-content">
                    <h3 class="office-city">Palm Desert</h3>
                    <div class="office-details">
                        <p>74-075 El Paseo Ste C-5<br>Palm Desert, CA 92260</p>
                        <p><strong>Phone:</strong> (760) 555-0202</p>
                        <a href="#" class="office-btn">Get Directions</a>
                    </div>
                </div>
            </article>

            <article class="office-card office-riv">
                <div class="office-content">
                    <h3 class="office-city">Riverside</h3>
                    <div class="office-details">
                        <p>3763 Arlington Ave<br>Riverside, CA 92506</p>
                        <p><strong>Phone:</strong> (951) 555-0303</p>
                        <a href="#" class="office-btn">Get Directions</a>
                    </div>
                </div>
            </article>

        </div>
    </section>

    <section class="results-section">
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
    </section>
    <section class="team-section">
        <h2 class="section-title">Meet Our Attorneys</h2>
        <p class="section-subtitle">Experienced litigators dedicated to protecting your rights and securing your future.</p>

        <div class="team-grid">
            
            <article class="attorney-card">
                <div class="attorney-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Attorney" loading="lazy">
                </div>
                <div class="attorney-info">
                    <h3 class="attorney-name">David Mc Collins</h3>
                    <div class="attorney-role">Founding Partner</div>
                    <p class="attorney-bio-snippet">With over 25 years of trial experience, David has recovered millions for clients in complex personal injury and employment cases.</p>
                    <a href="#" class="view-profile-btn">View Full Bio</a>
                </div>
            </article>

            <article class="attorney-card">
                <div class="attorney-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Attorney" loading="lazy">
                </div>
                <div class="attorney-info">
                    <h3 class="attorney-name">Sarah J. Miller</h3>
                    <div class="attorney-role">Senior Associate</div>
                    <p class="attorney-bio-snippet">Specializing in workplace discrimination and harassment, Sarah is a fierce advocate for employee rights across California.</p>
                    <a href="#" class="view-profile-btn">View Full Bio</a>
                </div>
            </article>

            <article class="attorney-card">
                <div class="attorney-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Attorney" loading="lazy">
                </div>
                <div class="attorney-info">
                    <h3 class="attorney-name">Michael Ross</h3>
                    <div class="attorney-role">Trial Attorney</div>
                    <p class="attorney-bio-snippet">Michael brings a strategic approach to civil litigation, focusing on catastrophic injury and wrongful death claims.</p>
                    <a href="#" class="view-profile-btn">View Full Bio</a>
                </div>
            </article>

        </div>
    </section>
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

    </section>

    <footer class="site-footer">
        <div class="footer-logo">NEHORAY <span style="color: var(--accent);">LAW</span></div>
        <div class="footer-links">
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Practice Areas</a>
            <a href="#">Disclaimer</a>
            <a href="#">Privacy Policy</a>
        </div>
        <p>&copy; 2026 Nehoray Law Firm. All Rights Reserved. Attorney Advertising.</p>
    </footer>

<a href="#" 
   class="chat-widget" 
   aria-label="Chat with us" 
   onclick="abrirChatPersonalizado(event)"> <span class="chat-tooltip">Start a Consultation</span>
    <svg class="chat-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z"/>
    </svg>
</a>
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
<script type="text/javascript">
  (function(d, t) {
      var v = d.createElement(t), s = d.getElementsByTagName(t)[0];
      
      v.onload = function() {
        console.log("--> Cargando Voiceflow...");
        
        window.voiceflow.chat.load({
          verify: { projectID: '695d4ad10e56a355bc0a68ed' },
          url: 'https://general-runtime.voiceflow.com',
          versionID: 'production'
        }).then(() => {
            console.log("--> Voiceflow Cargado. Iniciando operación 'Ninja'...");

            // DETECTOR RÁPIDO (Revisa cada 50ms en lugar de esperar segundos)
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
                    
                    console.log("--> Flash evitado. Chat listo y botón azul oculto.");
                    
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
  }
</script>
</body>
</html>