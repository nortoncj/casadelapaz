<?php
/**
 * Template Name: Contact Page
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

<!-- Contact Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2><?php esc_html_e('Ready to Begin Again?', 'casadelapaz'); ?></h2>
            <p class="cta-description"><?php esc_html_e('Take the first step toward a new chapter. Our compassionate team is here to support you on your journey to independence and stability.', 'casadelapaz'); ?></p>
            
            <div class="cta-buttons">
                <a href="tel:<?php echo esc_attr(str_replace(array('(', ')', ' ', '-'), '', casadelapaz_get_phone())); ?>" class="btn btn-primary">
                    <i class="fas fa-phone" aria-hidden="true"></i> <?php esc_html_e('Call Us Now', 'casadelapaz'); ?>
                </a>
                <a href="mailto:<?php echo esc_attr(casadelapaz_get_email()); ?>" class="btn btn-secondary">
                    <i class="fas fa-envelope" aria-hidden="true"></i> <?php esc_html_e('Send a Message', 'casadelapaz'); ?>
                </a>
            </div>
            
            <div class="contact-info-grid">
                <div class="contact-item">
                    <i class="fas fa-clock" aria-hidden="true"></i>
                    <div>
                        <strong><?php esc_html_e('Office Hours', 'casadelapaz'); ?></strong>
                        <p><?php echo wp_kses_post(casadelapaz_get_hours()); ?></p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone-alt" aria-hidden="true"></i>
                    <div>
                        <strong><?php esc_html_e('Call Us', 'casadelapaz'); ?></strong>
                        <p><?php echo esc_html(casadelapaz_get_phone()); ?><br><?php esc_html_e('Available 24/7 for emergencies', 'casadelapaz'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Content Section -->
<?php if (get_the_content()) : ?>
<section class="who-we-serve-section">
    <div class="container">
        <div style="max-width: 900px; margin: 0 auto;">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Contact Form Section (if using a contact form plugin) -->
<section class="who-we-serve-section" style="background-color: var(--light-beige);">
    <div class="container">
        <div class="section-header">
            <h2><?php esc_html_e('Send Us a Message', 'casadelapaz'); ?></h2>
            <p class="section-subtitle"><?php esc_html_e('Fill out the form below and we will get back to you as soon as possible', 'casadelapaz'); ?></p>
        </div>
        
        <div style="max-width: 800px; margin: 0 auto; background: white; padding: var(--space-2xl); border-radius: var(--radius-md); box-shadow: var(--shadow-lg);">
            <?php
            // Check if Contact Form 7 is installed
            if (function_exists('wpcf7_contact_form')) {
                echo do_shortcode('[contact-form-7 id="1" title="Contact form 1"]');
            } else {
                // Simple HTML form fallback
                ?>
                <form id="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="casadelapaz_contact_form">
                    <?php wp_nonce_field('casadelapaz_contact_form_nonce', 'contact_nonce'); ?>
                    
                    <div style="margin-bottom: var(--space-lg);">
                        <label for="contact-name" style="display: block; margin-bottom: var(--space-sm); font-weight: 600; color: var(--deep-brown);">
                            <?php esc_html_e('Your Name', 'casadelapaz'); ?> <span style="color: var(--error);">*</span>
                        </label>
                        <input type="text" id="contact-name" name="contact_name" required style="width: 100%; padding: var(--space-md); border: 1px solid var(--soft-gray); border-radius: var(--radius-sm); font-size: 16px;">
                    </div>
                    
                    <div style="margin-bottom: var(--space-lg);">
                        <label for="contact-email" style="display: block; margin-bottom: var(--space-sm); font-weight: 600; color: var(--deep-brown);">
                            <?php esc_html_e('Your Email', 'casadelapaz'); ?> <span style="color: var(--error);">*</span>
                        </label>
                        <input type="email" id="contact-email" name="contact_email" required style="width: 100%; padding: var(--space-md); border: 1px solid var(--soft-gray); border-radius: var(--radius-sm); font-size: 16px;">
                    </div>
                    
                    <div style="margin-bottom: var(--space-lg);">
                        <label for="contact-phone" style="display: block; margin-bottom: var(--space-sm); font-weight: 600; color: var(--deep-brown);">
                            <?php esc_html_e('Phone Number', 'casadelapaz'); ?>
                        </label>
                        <input type="tel" id="contact-phone" name="contact_phone" style="width: 100%; padding: var(--space-md); border: 1px solid var(--soft-gray); border-radius: var(--radius-sm); font-size: 16px;">
                    </div>
                    
                    <div style="margin-bottom: var(--space-lg);">
                        <label for="contact-message" style="display: block; margin-bottom: var(--space-sm); font-weight: 600; color: var(--deep-brown);">
                            <?php esc_html_e('Your Message', 'casadelapaz'); ?> <span style="color: var(--error);">*</span>
                        </label>
                        <textarea id="contact-message" name="contact_message" required rows="6" style="width: 100%; padding: var(--space-md); border: 1px solid var(--soft-gray); border-radius: var(--radius-sm); font-size: 16px; resize: vertical;"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <i class="fas fa-paper-plane" aria-hidden="true"></i>
                        <?php esc_html_e('Send Message', 'casadelapaz'); ?>
                    </button>
                </form>
                <?php
            }
            ?>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php
get_footer();
