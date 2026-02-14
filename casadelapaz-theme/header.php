<?php
/**
 * The header template
 *
 * @package CasaDeLaPaz
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Navigation Header -->
<header class="site-header">
    <nav class="nav-container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php casadelapaz_site_logo(); ?>
            </a>
        </div>
        <button class="mobile-menu-toggle" aria-label="<?php esc_attr_e('Toggle navigation menu', 'casadelapaz'); ?>" aria-expanded="false">
            <span class="hamburger"></span>
        </button>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class'     => 'nav-menu',
            'container'      => false,
            'fallback_cb'    => 'casadelapaz_default_menu',
        ));
        ?>
    </nav>
</header>

<main id="main">
<?php
/**
 * Default menu fallback
 */
function casadelapaz_default_menu() {
    ?>
    <ul class="nav-menu" role="list">
        <li><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link"><?php esc_html_e('Home', 'casadelapaz'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="nav-link"><?php esc_html_e('Services', 'casadelapaz'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/about')); ?>" class="nav-link"><?php esc_html_e('About', 'casadelapaz'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/gallery')); ?>" class="nav-link"><?php esc_html_e('Gallery', 'casadelapaz'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/blog')); ?>" class="nav-link"><?php esc_html_e('Blog', 'casadelapaz'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="nav-link"><?php esc_html_e('Contact', 'casadelapaz'); ?></a></li>
    </ul>
    <?php
}
