<?php
/**
 * Template Name: Gallery Page
 *
 * @package CasaDeLaPaz
 * @since 1.0.0
 */

get_header();
?>

<?php while (have_posts()) : the_post(); ?>

<!-- Page Hero Section -->
<section class="hero-section" style="min-height: 400px;">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title"><?php the_title(); ?></h1>
        <?php if (has_excerpt()) : ?>
            <p class="hero-description"><?php echo esc_html(get_the_excerpt()); ?></p>
        <?php endif; ?>
    </div>
</section>

<!-- Gallery Section -->
<section class="who-we-serve-section">
    <div class="container">
        <div class="section-header">
            <h2><?php esc_html_e('Our Facility & Community', 'casadelapaz'); ?></h2>
            <p class="section-subtitle"><?php esc_html_e('Take a look at our welcoming home and the community we\'ve built', 'casadelapaz'); ?></p>
        </div>

        <?php
        // Display WordPress gallery if shortcode exists in content
        $content = get_the_content();
        if (has_shortcode($content, 'gallery')) {
            ?>
            <div class="wp-gallery-container">
                <?php the_content(); ?>
            </div>
            <style>
                .wp-gallery-container .gallery {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                    gap: var(--space-lg);
                    margin-top: var(--space-2xl);
                }
                .wp-gallery-container .gallery-item {
                    position: relative;
                    overflow: hidden;
                    border-radius: var(--radius-md);
                    box-shadow: var(--shadow-md);
                    transition: transform var(--transition-medium);
                }
                .wp-gallery-container .gallery-item:hover {
                    transform: translateY(-4px);
                    box-shadow: var(--shadow-lg);
                }
                .wp-gallery-container .gallery-item img {
                    width: 100%;
                    height: 300px;
                    object-fit: cover;
                    display: block;
                }
                .wp-gallery-container .gallery-caption {
                    padding: var(--space-sm);
                    background: rgba(248, 246, 243, 0.95);
                    text-align: center;
                    font-size: 14px;
                    color: var(--charcoal-gray);
                }
            </style>
            <?php
        } else {
            // Default gallery layout with sample images
            ?>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: var(--space-lg); margin-top: var(--space-2xl);">
                <?php
                // Get images from media library
                $args = array(
                    'post_type'      => 'attachment',
                    'post_mime_type' => 'image',
                    'post_status'    => 'inherit',
                    'posts_per_page' => 12,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                );
                
                $images = get_posts($args);
                
                if ($images) :
                    foreach ($images as $image) :
                        $img_url = wp_get_attachment_image_url($image->ID, 'large');
                        $img_thumb = wp_get_attachment_image_url($image->ID, 'medium');
                        $img_alt = get_post_meta($image->ID, '_wp_attachment_image_alt', true);
                        $img_caption = $image->post_excerpt;
                        ?>
                        <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: var(--radius-md); box-shadow: var(--shadow-md); transition: transform var(--transition-medium);">
                            <a href="<?php echo esc_url($img_url); ?>" data-lightbox="gallery" style="display: block;">
                                <img src="<?php echo esc_url($img_thumb); ?>" 
                                     alt="<?php echo esc_attr($img_alt ? $img_alt : 'Gallery image'); ?>" 
                                     style="width: 100%; height: 300px; object-fit: cover; display: block;">
                                <?php if ($img_caption) : ?>
                                    <div style="padding: var(--space-sm); background: rgba(248, 246, 243, 0.95); text-align: center; font-size: 14px;">
                                        <?php echo esc_html($img_caption); ?>
                                    </div>
                                <?php endif; ?>
                            </a>
                        </div>
                        <?php
                    endforeach;
                else :
                    // Fallback with placeholder images if no images in media library
                    $placeholder_images = array(
                        array('src' => get_template_directory_uri() . '/assets/img/casa1.jpeg', 'title' => 'Front View'),
                        array('src' => get_template_directory_uri() . '/assets/img/care.jpeg', 'title' => 'Community Care'),
                    );
                    
                    foreach ($placeholder_images as $img) :
                        ?>
                        <div class="gallery-item" style="position: relative; overflow: hidden; border-radius: var(--radius-md); box-shadow: var(--shadow-md); transition: transform var(--transition-medium);">
                            <img src="<?php echo esc_url($img['src']); ?>" 
                                 alt="<?php echo esc_attr($img['title']); ?>" 
                                 style="width: 100%; height: 300px; object-fit: cover; display: block;">
                            <div style="padding: var(--space-sm); background: rgba(248, 246, 243, 0.95); text-align: center; font-size: 14px;">
                                <?php echo esc_html($img['title']); ?>
                            </div>
                        </div>
                        <?php
                    endforeach;
                    ?>
                    <div style="grid-column: 1 / -1; text-align: center; padding: var(--space-2xl); background: var(--light-beige); border-radius: var(--radius-md);">
                        <p style="font-size: 18px; color: var(--charcoal-gray); margin-bottom: var(--space-md);">
                            <?php esc_html_e('To add images to this gallery:', 'casadelapaz'); ?>
                        </p>
                        <ol style="text-align: left; max-width: 600px; margin: 0 auto; color: var(--charcoal-gray);">
                            <li><?php esc_html_e('Go to the WordPress admin panel', 'casadelapaz'); ?></li>
                            <li><?php esc_html_e('Navigate to Media > Add New', 'casadelapaz'); ?></li>
                            <li><?php esc_html_e('Upload your gallery images', 'casadelapaz'); ?></li>
                            <li><?php esc_html_e('Or edit this page and insert a gallery using the [gallery] shortcode', 'casadelapaz'); ?></li>
                        </ol>
                    </div>
                    <?php
                endif;
                ?>
            </div>
            
            <style>
                .gallery-item:hover {
                    transform: translateY(-4px);
                    box-shadow: var(--shadow-lg);
                }
            </style>
            <?php
        }
        ?>
    </div>
</section>

<!-- Call to Action -->
<section class="process-section">
    <div class="container">
        <div class="section-header">
            <h2><?php esc_html_e('Visit Us', 'casadelapaz'); ?></h2>
            <p class="section-subtitle"><?php esc_html_e('Schedule a tour to see our facility in person', 'casadelapaz'); ?></p>
        </div>
        
        <div style="text-align: center;">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
                <i class="fas fa-calendar-check" aria-hidden="true"></i>
                <?php esc_html_e('Schedule a Tour', 'casadelapaz'); ?>
            </a>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php
get_footer();
