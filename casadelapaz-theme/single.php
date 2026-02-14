<?php
/**
 * The template for displaying all single posts
 *
 * @package CasaDeLaPaz
 * @since 1.0.0
 */

get_header();
?>

<?php while (have_posts()) : the_post(); ?>

<!-- Featured Image Hero -->
<?php if (has_post_thumbnail()) : ?>
<section class="hero-section" style="min-height: 500px; background-image: linear-gradient(135deg, rgba(74, 144, 164, 0.85) 0%, rgba(139, 126, 116, 0.85) 100%), url('<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>'); background-size: cover; background-position: center;">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div style="max-width: 900px; margin: 0 auto;">
            <div style="display: flex; gap: var(--space-md); flex-wrap: wrap; justify-content: center; font-size: 14px; color: var(--light-beige); margin-bottom: var(--space-md);">
                <span>
                    <i class="fas fa-calendar" aria-hidden="true"></i>
                    <?php echo get_the_date(); ?>
                </span>
                <span>
                    <i class="fas fa-user" aria-hidden="true"></i>
                    <?php the_author(); ?>
                </span>
                <?php if (has_category()) : ?>
                    <span>
                        <i class="fas fa-folder" aria-hidden="true"></i>
                        <?php the_category(', '); ?>
                    </span>
                <?php endif; ?>
            </div>
            <h1 class="hero-title"><?php the_title(); ?></h1>
        </div>
    </div>
</section>
<?php else : ?>
<section class="hero-section" style="min-height: 400px;">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div style="max-width: 900px; margin: 0 auto;">
            <div style="display: flex; gap: var(--space-md); flex-wrap: wrap; justify-content: center; font-size: 14px; color: var(--light-beige); margin-bottom: var(--space-md);">
                <span>
                    <i class="fas fa-calendar" aria-hidden="true"></i>
                    <?php echo get_the_date(); ?>
                </span>
                <span>
                    <i class="fas fa-user" aria-hidden="true"></i>
                    <?php the_author(); ?>
                </span>
                <?php if (has_category()) : ?>
                    <span>
                        <i class="fas fa-folder" aria-hidden="true"></i>
                        <?php the_category(', '); ?>
                    </span>
                <?php endif; ?>
            </div>
            <h1 class="hero-title"><?php the_title(); ?></h1>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Post Content -->
<section class="who-we-serve-section">
    <div class="container">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <div style="max-width: 900px; margin: 0 auto;">
                
                <div class="entry-content" style="font-size: 18px; line-height: 1.8; color: var(--charcoal-gray);">
                    <?php
                    the_content();
                    
                    wp_link_pages(array(
                        'before' => '<div style="margin-top: var(--space-2xl); padding: var(--space-lg); background: var(--light-beige); border-radius: var(--radius-md);">' . esc_html__('Pages:', 'casadelapaz'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
                
                <!-- Tags -->
                <?php if (has_tag()) : ?>
                    <div style="margin-top: var(--space-2xl); padding-top: var(--space-lg); border-top: 1px solid var(--soft-gray);">
                        <div style="display: flex; align-items: center; gap: var(--space-md); flex-wrap: wrap;">
                            <span style="font-weight: 600; color: var(--deep-brown);">
                                <i class="fas fa-tags" aria-hidden="true"></i>
                                <?php esc_html_e('Tags:', 'casadelapaz'); ?>
                            </span>
                            <?php
                            $tags = get_the_tags();
                            if ($tags) {
                                foreach ($tags as $tag) {
                                    echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" style="display: inline-block; padding: var(--space-xs) var(--space-md); background: var(--light-beige); color: var(--peaceful-blue); border-radius: var(--radius-pill); font-size: 14px; text-decoration: none; transition: all var(--transition-fast);">' . esc_html($tag->name) . '</a>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                <?php endif; ?>
                
                <!-- Author Bio -->
                <div style="margin-top: var(--space-2xl); padding: var(--space-xl); background: var(--light-beige); border-radius: var(--radius-md); border-left: 4px solid var(--peaceful-blue);">
                    <div style="display: flex; gap: var(--space-lg); align-items: start;">
                        <div style="flex-shrink: 0;">
                            <?php echo get_avatar(get_the_author_meta('ID'), 80, '', '', array('style' => 'border-radius: 50%; border: 3px solid var(--peaceful-blue);')); ?>
                        </div>
                        <div>
                            <h4 style="margin-bottom: var(--space-xs); color: var(--deep-brown);">
                                <?php esc_html_e('Written by', 'casadelapaz'); ?> <?php the_author(); ?>
                            </h4>
                            <?php if (get_the_author_meta('description')) : ?>
                                <p style="margin-bottom: 0; color: var(--charcoal-gray); font-size: 15px;">
                                    <?php echo wp_kses_post(get_the_author_meta('description')); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <!-- Post Navigation -->
                <div style="margin-top: var(--space-2xl); padding-top: var(--space-lg); border-top: 2px solid var(--light-beige);">
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: var(--space-lg);">
                        <?php
                        $prev_post = get_previous_post();
                        $next_post = get_next_post();
                        
                        if ($prev_post) :
                        ?>
                            <div class="value-card" style="text-align: left;">
                                <div style="font-size: 14px; color: var(--soft-gray); margin-bottom: var(--space-sm);">
                                    <i class="fas fa-arrow-left" aria-hidden="true"></i>
                                    <?php esc_html_e('Previous Post', 'casadelapaz'); ?>
                                </div>
                                <a href="<?php echo esc_url(get_permalink($prev_post)); ?>" style="color: var(--deep-brown); font-weight: 600; text-decoration: none; display: block;">
                                    <?php echo esc_html(get_the_title($prev_post)); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($next_post) : ?>
                            <div class="value-card" style="text-align: right;">
                                <div style="font-size: 14px; color: var(--soft-gray); margin-bottom: var(--space-sm);">
                                    <?php esc_html_e('Next Post', 'casadelapaz'); ?>
                                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </div>
                                <a href="<?php echo esc_url(get_permalink($next_post)); ?>" style="color: var(--deep-brown); font-weight: 600; text-decoration: none; display: block;">
                                    <?php echo esc_html(get_the_title($next_post)); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Comments -->
                <?php
                if (comments_open() || get_comments_number()) :
                    ?>
                    <div style="margin-top: var(--space-3xl);">
                        <?php comments_template(); ?>
                    </div>
                    <?php
                endif;
                ?>
                
            </div>
            
        </article>
    </div>
</section>

<?php endwhile; ?>

<?php
get_footer();
