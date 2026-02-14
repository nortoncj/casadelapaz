<?php
/**
 * The front page template (Homepage)
 *
 * @package CasaDeLaPaz
 * @since 1.0.0
 */

get_header();
?>

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title"><?php echo esc_html(get_bloginfo('name')); ?></h1>
        <p class="hero-tagline"><?php esc_html_e('A Safe Place to Begin Again', 'casadelapaz'); ?></p>
        <p class="hero-description"><?php esc_html_e('Peaceful, dignified, structured support for individuals rebuilding their lives with hope and purpose', 'casadelapaz'); ?></p>
        <div class="hero-cta">
            <a href="#contact" class="btn btn-primary"><?php esc_html_e('Start Your Journey', 'casadelapaz'); ?></a>
            <a href="#services" class="btn btn-secondary"><?php esc_html_e('Learn More', 'casadelapaz'); ?></a>
        </div>
    </div>
    <div class="scroll-indicator" aria-hidden="true">
        <i class="fas fa-chevron-down"></i>
    </div>
</section>

<!-- Who We Serve Section -->
<section id="services" class="who-we-serve-section">
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
    </div>
</section>

<!-- Why Choose Us Section -->
<section id="why-choose-us" class="why-choose-section">
    <div class="container">
        <div class="section-header">
            <h2><?php esc_html_e('Why Choose Casa De La Paz', 'casadelapaz'); ?></h2>
            <p class="section-subtitle"><?php esc_html_e('Our commitment to your success is built on these core principles', 'casadelapaz'); ?></p>
        </div>

        <div class="values-grid">
            <!-- Value Card 1 -->
            <article class="value-card">
                <div class="value-icon">
                    <i class="fas fa-heart" aria-hidden="true"></i>
                </div>
                <h3><?php esc_html_e('Dignity & Respect', 'casadelapaz'); ?></h3>
                <p><?php esc_html_e('Every individual deserves to be treated with compassion and respect. We honor your story and support your journey without judgment.', 'casadelapaz'); ?></p>
            </article>

            <!-- Value Card 2 -->
            <article class="value-card">
                <div class="value-icon">
                    <i class="fas fa-shield-alt" aria-hidden="true"></i>
                </div>
                <h3><?php esc_html_e('Structured Support', 'casadelapaz'); ?></h3>
                <p><?php esc_html_e('Benefit from consistent routines, clear expectations, and reliable support systems that create stability and promote lasting change.', 'casadelapaz'); ?></p>
            </article>

            <!-- Value Card 3 -->
            <article class="value-card">
                <div class="value-icon">
                    <i class="fas fa-people-arrows" aria-hidden="true"></i>
                </div>
                <h3><?php esc_html_e('Community Connection', 'casadelapaz'); ?></h3>
                <p><?php esc_html_e('You\'re not alone. Join a caring community where residents support each other and celebrate milestones together on the path forward.', 'casadelapaz'); ?></p>
            </article>

            <!-- Value Card 4 -->
            <article class="value-card">
                <div class="value-icon">
                    <i class="fas fa-route" aria-hidden="true"></i>
                </div>
                <h3><?php esc_html_e('Path to Independence', 'casadelapaz'); ?></h3>
                <p><?php esc_html_e('Our goal is your independence. We provide the tools, resources, and support you need to build a sustainable, fulfilling life.', 'casadelapaz'); ?></p>
            </article>
        </div>
    </div>
</section>

<!-- About the House Section -->
<section id="about-house" class="about-house-section">
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
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/casa1.jpeg'); ?>"
                    alt="<?php esc_attr_e('Exterior view of Casa De La Paz - a welcoming, well-maintained residential home with peaceful surroundings', 'casadelapaz'); ?>"
                    class="house-image">
                <div class="image-overlay-badge">
                    <i class="fas fa-home" aria-hidden="true"></i>
                    <span><?php esc_html_e('Your Safe Haven in Tampa', 'casadelapaz'); ?></span>
                </div>
            </div>

            <!-- Information Container -->
            <div class="house-info-container">
                <p class="lead-text"><?php esc_html_e('Our home is designed with intention—every space reflects our commitment to providing a peaceful, comfortable environment where healing and growth can flourish.', 'casadelapaz'); ?></p>

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

                <a href="#contact" class="btn btn-primary">
                    <i class="fas fa-calendar-check" aria-hidden="true"></i>
                    <?php esc_html_e('Schedule a Tour', 'casadelapaz'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Our Process Section -->
<section id="process" class="process-section">
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

<!-- Call to Action Section -->
<section id="contact" class="cta-section">
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

<?php
get_footer();
