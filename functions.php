<?php
/**
 * NehorayNew functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NehorayNew
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.6' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nehoraynew_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on NehorayNew, use a find and replace
		* to change 'nehoraynew' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'nehoraynew', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'nehoraynew' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'nehoraynew_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'nehoraynew_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nehoraynew_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nehoraynew_content_width', 640 );
}
add_action( 'after_setup_theme', 'nehoraynew_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nehoraynew_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nehoraynew' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nehoraynew' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nehoraynew_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nehoraynew_scripts() {
	wp_enqueue_style( 'nehoraynew-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'nehoraynew-custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'nehoraynew-layout', get_template_directory_uri() . '/assets/css/layout.css', array(), _S_VERSION );

// Conditional Load for Home Page (Front Page)
    if ( is_front_page() ) {
        wp_enqueue_style( 'nehoray-home', get_template_directory_uri() . '/assets/css/home.css', array('nehoraynew-style'), _S_VERSION );
    }
    // Conditional Load for Attorneys Page
    if ( is_page_template( 'page-attorneys.php' ) || is_page('attorneys') ) {
        wp_enqueue_style( 'nehoray-attorneys', get_template_directory_uri() . '/assets/css/attorneys.css', array(), _S_VERSION );
    }

	// Conditional Load for Contact Page
    if ( is_page_template( 'page-contact.php' ) || is_page('contact') ) {
        wp_enqueue_style( 'nehoray-contact', get_template_directory_uri() . '/assets/css/contact.css', array('nehoraynew-style'), _S_VERSION );
    }

    // Conditional Load for Testimonies Page
    if ( is_page_template( 'page-testimonies.php' ) || is_page('testimonies') ) {
        wp_enqueue_style( 'nehoray-testimonies', get_template_directory_uri() . '/assets/css/testimonies.css', array('nehoraynew-style'), _S_VERSION );
    }

    // Conditional Load for Privacy Policy Page
    if ( is_page_template( 'page-privacy-policy.php' ) || is_page('privacy-policy') ) {
        wp_enqueue_style( 'nehoray-privacy', get_template_directory_uri() . '/assets/css/privacy.css', array('nehoraynew-style'), _S_VERSION );
    }

	// Conditional Load for Practice Areas
    if ( is_page_template( 'page-practice-areas.php' ) || is_page('practice-areas') || is_page('discrimination') || is_page('wrongful-termination') || is_page('employment-law') || is_page('harassment') || is_page('employment-overview') || is_page('employment-law-faq') || is_page('employment-faq') ) {
        wp_enqueue_style( 'nehoray-practice-areas', get_template_directory_uri() . '/assets/css/practice-areas.css', array('nehoraynew-style'), _S_VERSION );
        wp_enqueue_style( 'nehoray-personal-injury', get_template_directory_uri() . '/assets/css/personal-injury.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-auto-accidents', get_template_directory_uri() . '/assets/css/auto-accidents.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-slip-fall', get_template_directory_uri() . '/assets/css/slip-fall.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-dog-bite', get_template_directory_uri() . '/assets/css/dog-bite.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-brain-injury', get_template_directory_uri() . '/assets/css/brain-injury.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-uninsured', get_template_directory_uri() . '/assets/css/uninsured-insured.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-trucking', get_template_directory_uri() . '/assets/css/trucking.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-motorcycle', get_template_directory_uri() . '/assets/css/motorcycle.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-workers-comp', get_template_directory_uri() . '/assets/css/workers-compensation.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-benefits-overview', get_template_directory_uri() . '/assets/css/benefits-overview.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-survivor', get_template_directory_uri() . '/assets/css/survivor.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-wages', get_template_directory_uri() . '/assets/css/wages.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-voc-rehab', get_template_directory_uri() . '/assets/css/voc-rehab.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-employment-law', get_template_directory_uri() . '/assets/css/employment-law.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-wrongful-termination', get_template_directory_uri() . '/assets/css/wrongful-termination.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-discrimination', get_template_directory_uri() . '/assets/css/discrimination.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-harassment', get_template_directory_uri() . '/assets/css/harassment.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-employment-overview', get_template_directory_uri() . '/assets/css/employment-overview.css', array('nehoray-practice-areas'), _S_VERSION );
        wp_enqueue_style( 'nehoray-employment-faq', get_template_directory_uri() . '/assets/css/employment-faq.css', array('nehoray-practice-areas'), _S_VERSION );
    }

	// 2. NUEVO: Estilos para el Blog (Listado) Y Artículos individuales
    // Usamos is_home() para el listado y is_single() para el artículo
    if ( is_home() || is_single() ) {
        wp_enqueue_style( 'nehoray-blog', get_template_directory_uri() . '/assets/css/blog.css', array('nehoraynew-style'), _S_VERSION );
    }

	wp_style_add_data( 'nehoraynew-style', 'rtl', 'replace' );

	/* script viejo eliminado */
    wp_enqueue_script( 'nehoraynew-mobile-menu', get_template_directory_uri() . '/assets/js/mobile-menu.js', array(), time(), true );

    wp_enqueue_script( 'nehoraynew-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

    wp_localize_script( 'nehoraynew-main', 'nehorayData', array(
        'themeUrl' => get_template_directory_uri()
    ));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    // --- CHATBOT WIDGET INTEGRATION ---
    // Enqueue CSS
    wp_enqueue_style( 'nehoray-chat-css', get_template_directory_uri() . '/assets/css/chat-widget.css', array(), '1.0' );
    
    // Enqueue JS Configuration (No dependencies)
    wp_enqueue_script( 'nehoray-chat-config', get_template_directory_uri() . '/assets/js/chat-config.js', array(), '1.0', true );
    
    // Enqueue JS Engine (Depends on Config)
    wp_enqueue_script( 'nehoray-chat-engine', get_template_directory_uri() . '/assets/js/chat-engine.js', array('nehoray-chat-config'), '1.0', true );
    
    // Localize Script to pass PHP variables to JS (like the Logo URL)
    wp_localize_script( 'nehoray-chat-engine', 'nehorayChatParams', array(
        'logoUrl' => get_template_directory_uri() . '/assets/img/logo-chat.png',
        'ajaxUrl' => admin_url( 'admin-ajax.php' )
    ));
}
add_action( 'wp_enqueue_scripts', 'nehoraynew_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Custom Post Type: Practice Areas (Services)
 */
function nehoray_register_practice_areas() {
	$labels = array(
		'name'                  => 'Practice Areas',
		'singular_name'         => 'Practice Area',
		'menu_name'             => 'Practice Areas',
		'add_new'               => 'Add New',
		'add_new_item'          => 'Add New Practice Area',
		'edit_item'             => 'Edit Practice Area',
		'new_item'              => 'New Practice Area',
		'view_item'             => 'View Practice Area',
		'search_items'          => 'Search Practice Areas',
		'not_found'             => 'No practice areas found',
		'not_found_in_trash'    => 'No practice areas found in Trash',
	);
	$args = array(
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ), // Title used for H3, Editor for Paragraph
		'public'                => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-hammer', 
		'show_in_rest'          => true,
		'has_archive'           => false,
	);
	register_post_type( 'practice_area', $args );
}
add_action( 'init', 'nehoray_register_practice_areas' );

/**
 * ACF Fields Registration (Code-based for consistency)
 */
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_nehoray_practice_area',
		'title' => 'Service Card Details',
		'fields' => array(
			array(
				'key' => 'field_service_icon_svg',
				'label' => 'SVG Icon Code',
				'name' => 'service_icon',
				'type' => 'textarea',
				'instructions' => 'Paste the full <svg> code here. It will be rendered inline to preserve CSS.',
				'required' => 1,
				'rows' => 4,
				'new_lines' => '', // Important: No wpautop
			),
			array(
				'key' => 'field_service_link_text',
				'label' => 'Link Text',
				'name' => 'link_text',
				'type' => 'text',
				'instructions' => 'e.g. "Consult About Injury"',
				'default_value' => 'Consult About Case',
				'required' => 1,
			),
			array(
				'key' => 'field_service_link_url',
				'label' => 'Link URL',
				'name' => 'link_url',
				'type' => 'text', // Text allows anchors (#contact) and relative paths
				'instructions' => 'Enter custom URL or anchor (e.g. /personal-injury or #contact). Default: #contact',
				'default_value' => '#contact',
				'required' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'practice_area',
				),
			),
		),
	));
	
endif;

/**
 * CAJA DE AUTOR INVITADO (Nehoray Custom Meta Box)
 * Permite firmar artículos con nombre externo sin crear usuario.
 */

// 1. Crear la caja en el editor
function nehoray_add_author_box() {
    add_meta_box(
        'nehoray_guest_author',      // ID único
        'Author Name', // Título visible
        'nehoray_author_box_html',   // Función que muestra el HTML
        'post',                      // Solo en Entradas (blog)
        'side'                       // En la barra lateral derecha
    );
}
add_action( 'add_meta_boxes', 'nehoray_add_author_box' );

// 2. El HTML de la caja (lo que ves en el editor)
function nehoray_author_box_html( $post ) {
    $value = get_post_meta( $post->ID, 'autor_invitado', true );
    ?>
    <label for="nehoray_guest_author_field">Author Name:</label>
    <input type="text" name="nehoray_guest_author_field" id="nehoray_guest_author_field" value="<?php echo esc_attr( $value ); ?>" style="width:100%; margin-top:5px;" placeholder="Ej: Jhon Doe">
    <?php
}

// 3. Guardar el dato cuando le das a "Actualizar"
function nehoray_save_author_data( $post_id ) {
    if ( array_key_exists( 'nehoray_guest_author_field', $_POST ) ) {
        update_post_meta(
            $post_id,
            'autor_invitado', // La misma clave que usaste en el PHP del frontend
            sanitize_text_field( $_POST['nehoray_guest_author_field'] )
        );
    }
}
add_action( 'save_post', 'nehoray_save_author_data' );

/**
 * SISTEMA DE SEGURIDAD UNIFICADO: Honeypot + Bloqueo Ruso
 */
add_filter( 'wpcf7_spam', function( $spam ) {
    // Si ya está marcado como spam, abortamos.
    if ( $spam ) {
        return $spam;
    }

    $submission = WPCF7_Submission::get_instance();
    if ( ! $submission ) {
        return $spam;
    }

    $posted_data = $submission->get_posted_data();

    // 1. CAPA HONEYPOT (Bots genéricos)
    if ( ! empty( $posted_data['honeypot-trap'] ) ) {
        return true; 
    }

    // 2. CAPA CIRÍLICA Y DOMINIOS .RU
    foreach ( $posted_data as $key => $value ) {
        if ( is_array( $value ) ) continue;

        // Si hay alfabeto ruso, es bot.
        if ( preg_match( '/[А-Яа-яЁё]/u', $value ) ) {
            return true; 
        }

        // Si el campo es un email y termina en .ru, es bot.
        if ( strpos( strtolower( $key ), 'email' ) !== false ) {
            if ( preg_match( '/\.ru$/i', trim( $value ) ) ) {
                return true; 
            }
        }
    }

    return $spam;
} );

/**
 * SANITIZACIÓN DE SEGURIDAD PARA CONTACT FORM 7
 * Limpia todos los campos de código malicioso (HTML, Scripts) antes de procesarlos.
 */
add_filter( 'wpcf7_posted_data', function( $posted_data ) {
    
    // Recorremos cada campo enviado
    foreach ( $posted_data as $key => $value ) {
        
        // 1. Si es un array (ej: checkboxes), limpiamos cada elemento
        if ( is_array( $value ) ) {
            $posted_data[$key] = array_map( 'sanitize_text_field', $value );
        } 
        // 2. Si es texto plano (inputs normales, textareas)
        else {
            // sanitize_text_field: Elimina etiquetas HTML, saltos de línea extraños y espacios vacíos.
            // sanitize_textarea_field: Mantiene saltos de línea pero mata HTML/Scripts.
            
            if ( strpos( $key, 'your-message' ) !== false || strpos( $key, 'textarea' ) !== false ) {
                // Para áreas de texto (permite saltos de línea, pero sin HTML)
                $posted_data[$key] = sanitize_textarea_field( $value );
            } else {
                // Para inputs de una línea (Nombre, Asunto, etc.)
                $posted_data[$key] = sanitize_text_field( $value );
            }
        }
    }

    return $posted_data;
} );

/**
 * --- CONFIGURACIÓN CHATBOT ---
 * Define aquí el correo donde quieres recibir los notificaciones de nuevos leads.
 * Si lo dejas como está, te llegará al correo pero es mejor cambiarlo al tuyo real.
 */
if ( ! defined( 'CHAT_LEADS_EMAIL' ) ) {
    define( 'CHAT_LEADS_EMAIL', 'intake@nehoraylaw.com');
}
// -----------------------------

/**
 * HANDLER PARA EL BOT DE CHAT (Reemplazo de N8N)
 * Recibe los datos del chat vía AJAX y envía un correo al admin.
 */
function nehoray_handle_chat_submit() {
    // 1. Obtener la carga útil (JSON stringified desde JS)
    // Usamos stripslashes porque WP a veces escapa las comillas en $_POST
    $json_payload = isset($_POST['chat_payload']) ? stripslashes($_POST['chat_payload']) : '';
    $chat_data = json_decode($json_payload, true);

    if ( ! $chat_data ) {
        wp_send_json_error( array( 'message' => 'No data received' ) );
    }

    // 2. Construir el Correo
    // Usamos la constante definida arriba, o el email de admin por defecto si fallara algo
    $admin_email = defined('CHAT_LEADS_EMAIL') ? CHAT_LEADS_EMAIL : get_option( 'admin_email' );
    $client_name = isset($chat_data['name']) ? $chat_data['name'] : 'Lead';
    
    $subject = '🔔 New Lead from Chatbot: ' . $client_name;
    
    // Cabeceras para HTML
    $headers = array('Content-Type: text/html; charset=UTF-8');
    
    // Cuerpo del mensaje
    $body = '<div style="font-family: Arial, sans-serif; color: #333;">';
    $body .= '<h2 style="color: #C5A059;">New Chat Submission</h2>';
    $body .= '<p><strong>Date:</strong> ' . date('Y-m-d H:i:s') . '</p>';
    $body .= '<hr style="border: 1px solid #eee;">';
    $body .= '<table style="width: 100%; border-collapse: collapse;">';
    
    foreach ( $chat_data as $key => $val ) {
        // Ignorar campos internos
        if ($key === 'timestamp' || $key === 'source') continue;

        $label = ucfirst( str_replace( '_', ' ', $key ) );
        $value = esc_html( $val );
        
        $body .= '<tr>';
        $body .= '<td style="padding: 8px; border-bottom: 1px solid #eee; font-weight: bold; width: 30%;">' . $label . '</td>';
        $body .= '<td style="padding: 8px; border-bottom: 1px solid #eee;">' . $value . '</td>';
        $body .= '</tr>';
    }
    
    $body .= '</table>';
    
    // Agregar Metadata al final
    $body .= '<br><p style="font-size: 12px; color: #999;">Source: ' . esc_html(isset($chat_data['source']) ? $chat_data['source'] : 'Unknown') . '</p>';
    $body .= '</div>';

    // 3. Enviar
    $sent = wp_mail( $admin_email, $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => 'Email sent successfully to ' . $admin_email ) );
    } else {
        wp_send_json_error( array( 'message' => 'Failed to send email. Check WP mail config.' ) );
    }
}
// Registramos el hook para usuarios logueados y visitantes
add_action( 'wp_ajax_nehoray_chat_submit', 'nehoray_handle_chat_submit' );
add_action( 'wp_ajax_nopriv_nehoray_chat_submit', 'nehoray_handle_chat_submit' );
