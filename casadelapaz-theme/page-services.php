<?php
/**
 * Template Name: Services Page
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

<!-- Services Section -->
<section class="who-we-serve-section">
    <div class="container">
        <div class="section-header">
            <h2><?php esc_html_e('How We Support Your Journey', 'casadelapaz'); ?></h2>
            <p class="section-subtitle"><?php esc_html_e('Comprehensive services designed to help you rebuild with dignity and independence', 'casadelapaz'); ?></p>
        </div>

        <div class="services-grid">
            <!-- Service Card 1 -->
            <article class="service-card">
                <div class="icon-container">
                    <i class="fas fa-home" aria-hidden="true"></i>
                </div>
                <h3><?php esc_html_e('Transitional Housing', 'casadelapaz'); ?></h3>
                <p><?php esc_html_e('Safe, clean, and comfortable living spaces designed to provide stability as you work toward your goals. Each resident enjoys a peaceful environment that feels like home.', 'casadelapaz'); ?></p>
            </article>

            <!-- Service Card 2 -->
            <article class="service-card">
                <div class="icon-container">
                    <i class="fas fa-users" aria-hidden="true"></i>
                </div>
                <h3><?php esc_html_e('Community Support', 'casadelapaz'); ?></h3>
                <p><?php esc_html_e('Connect with peers and staff who understand your journey. Build meaningful relationships in a supportive community that celebrates your progress.', 'casadelapaz'); ?></p>
            </article>

            <!-- Service Card 3 -->
            <article class="service-card">
                <div class="icon-container">
                    <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <h3><?php esc_html_e('Life Skills Development', 'casadelapaz'); ?></h3>
                <p><?php esc_html_e('Practical workshops and one-on-one coaching to help you develop essential skills for independent living, medical wellness, and financial wellness.', 'casadelapaz'); ?></p>
            </article>

            <!-- Service Card 4 -->
            <article class="service-card">
                <div class="icon-container">
                    <i class="fas fa-handshake" aria-hidden="true"></i>
                </div>
                <h3><?php esc_html_e('Case Management', 'casadelapaz'); ?></h3>
                <p><?php esc_html_e('Personalized support from dedicated case managers who work with you to create and achieve your individualized plan for success and independence.', 'casadelapaz'); ?></p>
            </article>
        </div>

        <?php if (get_the_content()) : ?>
        <div style="max-width: 900px; margin: var(--space-3xl) auto 0; padding: var(--space-xl); background: var(--light-beige); border-radius: var(--radius-md);">
            <?php the_content(); ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Our Process Section -->
<section class="process-section">
    <div class="container">
        <div class="section-header">
            <h2><?php esc_html_e('Your Journey with Us', 'casadelapaz'); ?></h2>
            <p class="section-subtitle"><?php esc_html_e('A clear, supportive path from your first contact to lasting independence', 'casadelapaz'); ?></p>
        </div>

        <div class="process-steps">
            <!-- Step 1 -->
            <div class="process-step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h3><?php esc_html_e('Initial Contact', 'casadelapaz'); ?></h3>
                    <p><?php esc_html_e('Reach out to us by phone or in person. We\'ll have a welcoming conversation about your needs and answer all your questions.', 'casadelapaz'); ?></p>
                </div>
            </div>

            <div class="step-connector" aria-hidden="true"></div>

            <!-- Step 2 -->
            <div class="process-step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3><?php esc_html_e('Assessment', 'casadelapaz'); ?></h3>
                    <p><?php esc_html_e('Meet with our team to discuss your goals and situation. Together, we\'ll determine how our program can best support you.', 'casadelapaz'); ?></p>
                </div>
            </div>

            <div class="step-connector" aria-hidden="true"></div>

            <!-- Step 3 -->
            <div class="process-step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3><?php esc_html_e('Move-In', 'casadelapaz'); ?></h3>
                    <p><?php esc_html_e('Get settled into your new home with guidance from staff. We\'ll help you adjust to the community and begin your personalized plan.', 'casadelapaz'); ?></p>
                </div>
            </div>

            <div class="step-connector" aria-hidden="true"></div>

            <!-- Step 4 -->
            <div class="process-step">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h3><?php esc_html_e('Ongoing Support', 'casadelapaz'); ?></h3>
                    <p><?php esc_html_e('Participate in programs, connect with your case manager, and work toward your goals with consistent support every step of the way.', 'casadelapaz'); ?></p>
                </div>
            </div>
        </div>

        <div class="process-callout">
            <i class="fas fa-info-circle" aria-hidden="true"></i>
            <p><strong><?php esc_html_e('Average Response Time:', 'casadelapaz'); ?></strong> <?php esc_html_e('We typically respond to inquiries within 24 hours. For urgent needs, please call us directly.', 'casadelapaz'); ?></p>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php
get_footer();
