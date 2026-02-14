<?php
/**
 * Template Name: About Page
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

<!-- About Content Section -->
<section class="about-house-section">
    <div class="container">
        <div class="section-header">
            <div class="section-label">
                <i class="fas fa-house-user" aria-hidden="true"></i>
                <span><?php esc_html_e('About Our Home', 'casadelapaz'); ?></span>
            </div>
            <h2><?php esc_html_e('A Place Built for New Beginnings', 'casadelapaz'); ?></h2>
            <p class="section-subtitle"><?php esc_html_e('Located in Tampa, this newly renovated two-story home offers a safe, structured and welcoming environment designed to promote stability and independence', 'casadelapaz'); ?></p>
        </div>

        <div class="house-content-wrapper">
            <!-- Photo Container -->
            <div class="house-image-container">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', array('class' => 'house-image')); ?>
                <?php else : ?>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/casa1.jpeg'); ?>"
                        alt="<?php esc_attr_e('Casa De La Paz residence', 'casadelapaz'); ?>"
                        class="house-image">
                <?php endif; ?>
                <div class="image-overlay-badge">
                    <i class="fas fa-home" aria-hidden="true"></i>
                    <span><?php esc_html_e('Your Safe Haven in Tampa', 'casadelapaz'); ?></span>
                </div>
            </div>

            <!-- Information Container -->
            <div class="house-info-container">
                <div class="lead-text">
                    <?php the_content(); ?>
                </div>

                <div class="house-features-list">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-bed" aria-hidden="true"></i>
                        </div>
                        <div class="feature-content">
                            <h4><?php esc_html_e('Comfortable Living Spaces', 'casadelapaz'); ?></h4>
                            <p><?php esc_html_e('The residence accommodates up to 11 beds and features 4 bathrooms and 3 kitchens, providing ample space and convenience for residents.', 'casadelapaz'); ?></p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-tree" aria-hidden="true"></i>
                        </div>
                        <div class="feature-content">
                            <h4><?php esc_html_e('Shared Community Areas', 'casadelapaz'); ?></h4>
                            <p><?php esc_html_e('The home also includes on-site laundry and a designated outdoor smoking area located at the rear of the property.', 'casadelapaz'); ?></p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-couch" aria-hidden="true"></i>
                        </div>
                        <div class="feature-content">
                            <h4><?php esc_html_e('Peaceful Leisure Space', 'casadelapaz'); ?></h4>
                            <p><?php esc_html_e('With a spacious front porch, updated interiors, and well-maintained common areas, this residence offers a calm and respectful setting for individuals working toward long-term stability and personal growth.', 'casadelapaz'); ?></p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-wheelchair" aria-hidden="true"></i>
                        </div>
                        <div class="feature-content">
                            <h4><?php esc_html_e('Accessible & Safe', 'casadelapaz'); ?></h4>
                            <p><?php esc_html_e('Our facility is designed with accessibility in mind, ensuring safety, comfort, and ease of movement for all residents.', 'casadelapaz'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="house-quote-callout">
                    <i class="fas fa-quote-left" aria-hidden="true"></i>
                    <p class="quote-text"><?php esc_html_e('"Our home reflects our values: peaceful, dignified, and structured to support your journey toward independence."', 'casadelapaz'); ?></p>
                </div>

                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
                    <i class="fas fa-calendar-check" aria-hidden="true"></i>
                    <?php esc_html_e('Schedule a Tour', 'casadelapaz'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php
get_footer();
