<?php
/**
 * The footer template
 *
 * @package CasaDeLaPaz
 * @since 1.0.0
 */
?>
</main>

<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-column">
                <div class="footer-logo">
                    <?php casadelapaz_site_logo(); ?>
                </div>
                <p class="footer-tagline"><?php esc_html_e('A Safe Place to Begin Again', 'casadelapaz'); ?></p>
                <p class="footer-description"><?php esc_html_e('Providing dignified, structured support for individuals rebuilding their lives with hope and independence.', 'casadelapaz'); ?></p>
            </div>

            <?php if (is_active_sidebar('footer-1')) : ?>
                <?php dynamic_sidebar('footer-1'); ?>
            <?php else : ?>
                <div class="footer-column">
                    <h4><?php esc_html_e('Quick Links', 'casadelapaz'); ?></h4>
                    <ul class="footer-links" role="list">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'casadelapaz'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>"><?php esc_html_e('Services', 'casadelapaz'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>"><?php esc_html_e('About', 'casadelapaz'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/gallery')); ?>"><?php esc_html_e('Gallery', 'casadelapaz'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/blog')); ?>"><?php esc_html_e('Blog', 'casadelapaz'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Contact', 'casadelapaz'); ?></a></li>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('footer-2')) : ?>
                <?php dynamic_sidebar('footer-2'); ?>
            <?php else : ?>
                <div class="footer-column">
                    <h4><?php esc_html_e('Contact Information', 'casadelapaz'); ?></h4>
                    <ul class="footer-contact" role="list">
                        <li>
                            <i class="fas fa-phone" aria-hidden="true"></i>
                            <span><?php echo esc_html(casadelapaz_get_phone()); ?></span>
                        </li>
                        <li>
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                            <span><?php echo esc_html(casadelapaz_get_email()); ?></span>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('footer-3')) : ?>
                <?php dynamic_sidebar('footer-3'); ?>
            <?php endif; ?>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'casadelapaz'); ?></p>
            <div class="footer-legal">
                <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>"><?php esc_html_e('Privacy Policy', 'casadelapaz'); ?></a>
                <span>|</span>
                <a href="<?php echo esc_url(home_url('/terms-of-service')); ?>"><?php esc_html_e('Terms of Service', 'casadelapaz'); ?></a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
