<?php
/**
 * Casa De La Paz Theme Functions
 * 
 * @package CasaDeLaPaz
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function casadelapaz_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 630, true);

    // Add custom image sizes
    add_image_size('casadelapaz-hero', 1920, 1080, true);
    add_image_size('casadelapaz-gallery', 800, 600, true);
    add_image_size('casadelapaz-thumbnail', 400, 300, true);

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'casadelapaz'),
        'footer'  => esc_html__('Footer Menu', 'casadelapaz'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for Block Styles
    add_theme_support('wp-block-styles');

    // Add support for full and wide align images
    add_theme_support('align-wide');

    // Add support for editor styles
    add_theme_support('editor-styles');

    // Add support for responsive embedded content
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'casadelapaz_setup');

/**
 * Set the content width in pixels
 */
function casadelapaz_content_width() {
    $GLOBALS['content_width'] = apply_filters('casadelapaz_content_width', 1440);
}
add_action('after_setup_theme', 'casadelapaz_content_width', 0);

/**
 * Enqueue scripts and styles
 */
function casadelapaz_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'casadelapaz-google-fonts',
        'https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Open+Sans:wght@400;600;700&family=Lora:wght@400;500;700&display=swap',
        array(),
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );

    // Main stylesheet
    wp_enqueue_style(
        'casadelapaz-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0.0'
    );

    // Main JavaScript
    wp_enqueue_script(
        'casadelapaz-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        '1.0.0',
        true
    );

    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'casadelapaz_scripts');

/**
 * Register widget areas
 */
function casadelapaz_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'casadelapaz'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here to appear in your sidebar.', 'casadelapaz'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer 1', 'casadelapaz'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'casadelapaz'),
        'before_widget' => '<div id="%1$s" class="footer-column widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer 2', 'casadelapaz'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'casadelapaz'),
        'before_widget' => '<div id="%1$s" class="footer-column widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer 3', 'casadelapaz'),
        'id'            => 'footer-3',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'casadelapaz'),
        'before_widget' => '<div id="%1$s" class="footer-column widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'casadelapaz_widgets_init');

/**
 * Custom excerpt length
 */
function casadelapaz_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'casadelapaz_excerpt_length');

/**
 * Custom excerpt more
 */
function casadelapaz_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'casadelapaz_excerpt_more');

/**
 * Add custom body classes
 */
function casadelapaz_body_classes($classes) {
    // Add class if sidebar is active
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    // Add class for page templates
    if (is_page_template()) {
        $template = get_page_template_slug();
        $classes[] = 'page-template-' . sanitize_html_class(str_replace('.php', '', basename($template)));
    }

    return $classes;
}
add_filter('body_class', 'casadelapaz_body_classes');

/**
 * Customizer additions
 */
function casadelapaz_customize_register($wp_customize) {
    // Add Contact Information Section
    $wp_customize->add_section('casadelapaz_contact_info', array(
        'title'    => esc_html__('Contact Information', 'casadelapaz'),
        'priority' => 130,
    ));

    // Phone Number
    $wp_customize->add_setting('casadelapaz_phone', array(
        'default'           => '(813) 726-4626',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('casadelapaz_phone', array(
        'label'   => esc_html__('Phone Number', 'casadelapaz'),
        'section' => 'casadelapaz_contact_info',
        'type'    => 'text',
    ));

    // Email Address
    $wp_customize->add_setting('casadelapaz_email', array(
        'default'           => 'cdpliving@outlook.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('casadelapaz_email', array(
        'label'   => esc_html__('Email Address', 'casadelapaz'),
        'section' => 'casadelapaz_contact_info',
        'type'    => 'email',
    ));

    // Office Hours
    $wp_customize->add_setting('casadelapaz_hours', array(
        'default'           => 'Monday - Friday<br>9:00 AM - 5:00 PM',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('casadelapaz_hours', array(
        'label'   => esc_html__('Office Hours', 'casadelapaz'),
        'section' => 'casadelapaz_contact_info',
        'type'    => 'textarea',
    ));
}
add_action('customize_register', 'casadelapaz_customize_register');

/**
 * Custom template tags for this theme
 */

/**
 * Get Phone Number
 */
function casadelapaz_get_phone() {
    return get_theme_mod('casadelapaz_phone', '(813) 726-4626');
}

/**
 * Get Email
 */
function casadelapaz_get_email() {
    return get_theme_mod('casadelapaz_email', 'cdpliving@outlook.com');
}

/**
 * Get Office Hours
 */
function casadelapaz_get_hours() {
    return get_theme_mod('casadelapaz_hours', 'Monday - Friday<br>9:00 AM - 5:00 PM');
}

/**
 * Display the logo
 */
function casadelapaz_site_logo() {
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        $logo_url = get_template_directory_uri() . '/assets/img/CasaDeLaPaz.png';
        echo '<img src="' . esc_url($logo_url) . '" height="100" alt="' . esc_attr(get_bloginfo('name')) . '">';
    }
}

/**
 * Pagination
 */
function casadelapaz_pagination() {
    the_posts_pagination(array(
        'mid_size'  => 2,
        'prev_text' => '<i class="fas fa-chevron-left"></i> ' . esc_html__('Previous', 'casadelapaz'),
        'next_text' => esc_html__('Next', 'casadelapaz') . ' <i class="fas fa-chevron-right"></i>',
    ));
}
