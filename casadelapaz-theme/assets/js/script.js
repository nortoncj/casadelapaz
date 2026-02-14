/**
 * Casa De La Paz Independent Living
 * Main JavaScript File
 */

// ============================================
// Smooth Scrolling for Navigation Links
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    
    // Mobile Menu Toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (mobileMenuToggle && navMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
            navMenu.classList.toggle('active');
            
            // Toggle hamburger animation
            const hamburger = this.querySelector('.hamburger');
            hamburger.style.backgroundColor = navMenu.classList.contains('active') ? 'transparent' : '';
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenuToggle.contains(event.target) && !navMenu.contains(event.target)) {
                navMenu.classList.remove('active');
                mobileMenuToggle.setAttribute('aria-expanded', 'false');
            }
        });
    }
    
    // Smooth scrolling for anchor links
    const navLinks = document.querySelectorAll('a[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Skip if it's just "#"
            if (href === '#' || href === '#!') {
                e.preventDefault();
                return;
            }
            
            const targetId = href.substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                e.preventDefault();
                
                // Close mobile menu if open
                if (navMenu && navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    if (mobileMenuToggle) {
                        mobileMenuToggle.setAttribute('aria-expanded', 'false');
                    }
                }
                
                // Smooth scroll to target
                const headerOffset = 80;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
                
                // Update active state
                updateActiveNavLink(this);
                
                // Focus on the target element for accessibility
                targetElement.setAttribute('tabindex', '-1');
                targetElement.focus();
            }
        });
    });
    
    // ============================================
    // Active Navigation Link on Scroll
    // ============================================
    function updateActiveNavLink(clickedLink) {
        navLinks.forEach(link => {
            link.classList.remove('active');
        });
        if (clickedLink) {
            clickedLink.classList.add('active');
        }
    }
    
    // Intersection Observer for active nav state
    const sections = document.querySelectorAll('section[id]');
    const observerOptions = {
        threshold: 0.3,
        rootMargin: '-80px 0px -50% 0px'
    };
    
    const sectionObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const sectionId = entry.target.getAttribute('id');
                const correspondingLink = document.querySelector(`.nav-link[href="#${sectionId}"]`);
                
                if (correspondingLink) {
                    navLinks.forEach(link => link.classList.remove('active'));
                    correspondingLink.classList.add('active');
                }
            }
        });
    }, observerOptions);
    
    sections.forEach(section => {
        sectionObserver.observe(section);
    });
    
    // ============================================
    // Fade-in Animation on Scroll
    // ============================================
    const fadeElements = document.querySelectorAll('.service-card, .value-card, .process-step');
    
    const fadeObserverOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const fadeObserver = new IntersectionObserver(function(entries) {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Add staggered delay for sequential appearance
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
                
                fadeObserver.unobserve(entry.target);
            }
        });
    }, fadeObserverOptions);
    
    // Set initial state and observe
    fadeElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        fadeObserver.observe(element);
    });
    
    // ============================================
    // Scroll Indicator Hide on Scroll
    // ============================================
    const scrollIndicator = document.querySelector('.scroll-indicator');
    
    if (scrollIndicator) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                scrollIndicator.style.opacity = '0';
            } else {
                scrollIndicator.style.opacity = '1';
            }
        });
    }
    
    // ============================================
    // Header Shadow on Scroll
    // ============================================
    const header = document.querySelector('.site-header');
    
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 20) {
                header.style.boxShadow = '0 4px 12px rgba(61, 61, 61, 0.1)';
            } else {
                header.style.boxShadow = '0 1px 4px rgba(61, 61, 61, 0.06)';
            }
        });
    }
    
    // ============================================
    // Form Validation (if forms are added later)
    // ============================================
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                    field.setAttribute('aria-invalid', 'true');
                } else {
                    field.classList.remove('error');
                    field.setAttribute('aria-invalid', 'false');
                }
            });
            
            if (isValid) {
                // Form is valid - handle submission
                console.log('Form is valid and ready to submit');
                // Add your form submission logic here
            }
        });
    });
    
    // ============================================
    // Accessibility: Skip to Main Content
    // ============================================
    const skipLink = document.createElement('a');
    skipLink.href = '#main';
    skipLink.className = 'skip-link sr-only';
    skipLink.textContent = 'Skip to main content';
    skipLink.style.cssText = `
        position: absolute;
        top: 10px;
        left: 10px;
        background: var(--peaceful-blue);
        color: white;
        padding: 8px 16px;
        text-decoration: none;
        border-radius: 4px;
        z-index: 9999;
        transform: translateY(-100%);
        transition: transform 0.3s;
    `;
    
    skipLink.addEventListener('focus', function() {
        this.style.transform = 'translateY(0)';
    });
    
    skipLink.addEventListener('blur', function() {
        this.style.transform = 'translateY(-100%)';
    });
    
    document.body.insertBefore(skipLink, document.body.firstChild);
    
    // Add ID to main element if not present
    const mainElement = document.querySelector('main');
    if (mainElement && !mainElement.id) {
        mainElement.id = 'main';
    }
    
    // ============================================
    // Keyboard Navigation Enhancement
    // ============================================
    document.addEventListener('keydown', function(e) {
        // Close mobile menu on Escape key
        if (e.key === 'Escape' && navMenu && navMenu.classList.contains('active')) {
            navMenu.classList.remove('active');
            if (mobileMenuToggle) {
                mobileMenuToggle.setAttribute('aria-expanded', 'false');
                mobileMenuToggle.focus();
            }
        }
    });
    
    // ============================================
    // Button Ripple Effect (Enhanced Interaction)
    // ============================================
    const buttons = document.querySelectorAll('.btn');
    
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.3);
                left: ${x}px;
                top: ${y}px;
                transform: scale(0);
                animation: ripple 0.6s ease-out;
                pointer-events: none;
            `;
            
            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);
            
            setTimeout(() => ripple.remove(), 600);
        });
    });
    
    // Add ripple animation to document
    if (!document.querySelector('#ripple-animation-style')) {
        const style = document.createElement('style');
        style.id = 'ripple-animation-style';
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    }
    
    // ============================================
    // Performance: Lazy Loading Images (if added)
    // ============================================
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    observer.unobserve(img);
                }
            });
        });
        
        const lazyImages = document.querySelectorAll('img[data-src]');
        lazyImages.forEach(img => imageObserver.observe(img));
    }
    
    // ============================================
    // Announce Dynamic Content Changes (ARIA Live)
    // ============================================
    function announceToScreenReader(message, priority = 'polite') {
        const announcement = document.createElement('div');
        announcement.setAttribute('role', 'status');
        announcement.setAttribute('aria-live', priority);
        announcement.className = 'sr-only';
        announcement.textContent = message;
        
        document.body.appendChild(announcement);
        
        setTimeout(() => {
            document.body.removeChild(announcement);
        }, 1000);
    }
    
    // Make the function globally available
    window.announceToScreenReader = announceToScreenReader;
    
    // ============================================
    // Print Styles Enhancement
    // ============================================
    window.addEventListener('beforeprint', function() {
        // Expand any collapsed content before printing
        const collapsedElements = document.querySelectorAll('[aria-expanded="false"]');
        collapsedElements.forEach(el => {
            el.setAttribute('data-was-collapsed', 'true');
            el.setAttribute('aria-expanded', 'true');
        });
    });
    
    window.addEventListener('afterprint', function() {
        // Restore collapsed state after printing
        const elements = document.querySelectorAll('[data-was-collapsed="true"]');
        elements.forEach(el => {
            el.setAttribute('aria-expanded', 'false');
            el.removeAttribute('data-was-collapsed');
        });
    });
    
    console.log('Casa De La Paz - Website initialized successfully');
});
