<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package CasaDeLaPaz
 * @since 1.0.0
 */

get_header();
?>

<!-- Page Hero Section -->
<section class="hero-section" style="min-height: 400px;">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title">
            <?php
            if (is_home() && !is_front_page()) {
                single_post_title();
            } else {
                bloginfo('name');
            }
            ?>
        </h1>
        <p class="hero-description">
            <?php
            if (is_home() && !is_front_page()) {
                echo esc_html(get_the_excerpt());
            } else {
                bloginfo('description');
            }
            ?>
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="who-we-serve-section">
    <div class="container">
        
        <?php if (have_posts()) : ?>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: var(--space-xl); margin-bottom: var(--space-3xl);">
                
                <?php while (have_posts()) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('service-card'); ?> style="display: flex; flex-direction: column; height: 100%;">
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div style="margin: calc(var(--space-xl) * -1) calc(var(--space-xl) * -1) var(--space-md); overflow: hidden; border-radius: var(--radius-md) var(--radius-md) 0 0;">
                                <a href="<?php the_permalink(); ?>" style="display: block;">
                                    <?php the_post_thumbnail('medium', array('style' => 'width: 100%; height: 200px; object-fit: cover; display: block; transition: transform var(--transition-medium);')); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div style="flex: 1; display: flex; flex-direction: column;">
                            <div class="icon-container" style="margin-bottom: var(--space-md);">
                                <i class="fas fa-newspaper" aria-hidden="true"></i>
                            </div>
                            
                            <header class="entry-header" style="margin-bottom: var(--space-sm);">
                                <h3 style="margin-bottom: var(--space-sm);">
                                    <a href="<?php the_permalink(); ?>" style="color: var(--deep-brown); text-decoration: none;">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                
                                <div style="display: flex; gap: var(--space-md); flex-wrap: wrap; font-size: 14px; color: var(--soft-gray); margin-bottom: var(--space-md);">
                                    <span>
                                        <i class="fas fa-calendar" aria-hidden="true"></i>
                                        <?php echo get_the_date(); ?>
                                    </span>
                                    <span>
                                        <i class="fas fa-user" aria-hidden="true"></i>
                                        <?php the_author(); ?>
                                    </span>
                                </div>
                            </header>
                            
                            <div class="entry-summary" style="flex: 1; margin-bottom: var(--space-md);">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <div style="margin-top: auto;">
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary" style="display: inline-flex; padding: var(--space-sm) var(--space-md); font-size: 14px;">
                                    <?php esc_html_e('Read More', 'casadelapaz'); ?>
                                    <i class="fas fa-arrow-right" aria-hidden="true" style="margin-left: var(--space-sm);"></i>
                                </a>
                            </div>
                        </div>
                        
                    </article>
                    
                <?php endwhile; ?>
                
            </div>
            
            <!-- Pagination -->
            <div style="text-align: center; margin-top: var(--space-2xl);">
                <?php casadelapaz_pagination(); ?>
            </div>
            
        <?php else : ?>
            
            <div style="text-align: center; padding: var(--space-3xl); background: var(--light-beige); border-radius: var(--radius-md);">
                <div class="icon-container" style="margin: 0 auto var(--space-lg);">
                    <i class="fas fa-search" aria-hidden="true"></i>
                </div>
                <h2><?php esc_html_e('Nothing Found', 'casadelapaz'); ?></h2>
                <p style="font-size: 18px; color: var(--charcoal-gray); margin-bottom: var(--space-lg);">
                    <?php esc_html_e('It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'casadelapaz'); ?>
                </p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                    <i class="fas fa-home" aria-hidden="true"></i>
                    <?php esc_html_e('Return Home', 'casadelapaz'); ?>
                </a>
            </div>
            
        <?php endif; ?>
        
    </div>
</section>

<style>
    .service-card img:hover {
        transform: scale(1.05);
    }
</style>

<?php
get_footer();
