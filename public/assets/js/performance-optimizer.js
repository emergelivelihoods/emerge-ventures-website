/**
 * Performance Optimizer for Emerge Ventures Website
 * Handles various performance optimizations beyond lazy loading
 */

class PerformanceOptimizer {
    constructor() {
        this.init();
    }

    init() {
        this.optimizeCSS();
        this.optimizeImages();
        this.optimizeScrolling();
        this.preloadCriticalResources();
        this.setupIntersectionObserver();
        this.optimizeAnimations();
    }

    // Optimize CSS delivery
    optimizeCSS() {
        // Load non-critical CSS asynchronously (only if actually needed on page)
        const nonCriticalCSS = [
            // Add entries here only when the corresponding component is present
            // e.g., 'assets/css/plugins/owl.carousel.min.css'
        ];

        nonCriticalCSS.forEach(href => {
            const link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = href;
            link.media = 'print';
            link.onload = function() {
                this.media = 'all';
            };
            document.head.appendChild(link);
        });
    }

    // Optimize images
    optimizeImages() {
        // Add loading="lazy" to images that don't have it
        const images = document.querySelectorAll('img:not([loading]):not(.critical-img)');
        images.forEach(img => {
            if (!img.classList.contains('lazy')) {
                img.loading = 'lazy';
            }
        });

        // Optimize image formats
        this.addWebPSupport();
    }

    // Add WebP support detection
    addWebPSupport() {
        const webP = new Image();
        webP.onload = webP.onerror = () => {
            if (webP.height === 2) {
                document.documentElement.classList.add('webp-support');
            } else {
                document.documentElement.classList.add('no-webp-support');
            }
        };
        webP.src = 'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';
    }

    // Optimize scrolling performance
    optimizeScrolling() {
        let ticking = false;

        const updateScrollElements = () => {
            // Add scroll-based optimizations here
            ticking = false;
        };

        const requestTick = () => {
            if (!ticking) {
                requestAnimationFrame(updateScrollElements);
                ticking = true;
            }
        };

        window.addEventListener('scroll', requestTick, { passive: true });
    }

    // Preload critical resources
    preloadCriticalResources() {
        const criticalResources = [
            // These are already included normally; avoid double-preloading
            { href: 'assets/img/logo/logov.png', as: 'image' }
        ];

        criticalResources.forEach(resource => {
            const link = document.createElement('link');
            link.rel = 'preload';
            link.href = resource.href;
            link.as = resource.as;
            if (resource.as === 'style') {
                link.onload = function() {
                    this.rel = 'stylesheet';
                };
            }
            document.head.appendChild(link);
        });
    }

    // Setup Intersection Observer for animations
    setupIntersectionObserver() {
        if ('IntersectionObserver' in window) {
            const animationObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                        animationObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '50px'
            });

            // Observe elements that should animate in
            const animateElements = document.querySelectorAll('.animate-on-scroll');
            animateElements.forEach(el => animationObserver.observe(el));
        }
    }

    // Optimize animations
    optimizeAnimations() {
        // Reduce animations on low-end devices
        if (navigator.hardwareConcurrency && navigator.hardwareConcurrency < 4) {
            document.documentElement.classList.add('reduce-animations');
        }

        // Respect user's motion preferences
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            document.documentElement.classList.add('reduce-motion');
        }
    }

    // Optimize form submissions
    optimizeForm(formElement) {
        if (!formElement) return;

        formElement.addEventListener('submit', (e) => {
            const submitBtn = formElement.querySelector('[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Submitting...';
                
                // Re-enable after 3 seconds as fallback
                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Submit';
                }, 3000);
            }
        });
    }

    // Debounce function for performance
    debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // Throttle function for performance
    throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }
}

// Performance monitoring
class PerformanceMonitor {
    constructor() {
        this.metrics = {};
        this.init();
    }

    init() {
        this.measurePageLoad();
        this.measureLCP();
        this.measureFID();
        this.measureCLS();
    }

    measurePageLoad() {
        window.addEventListener('load', () => {
            const perfData = performance.getEntriesByType('navigation')[0];
            this.metrics.loadTime = perfData.loadEventEnd - perfData.loadEventStart;
            this.metrics.domContentLoaded = perfData.domContentLoadedEventEnd - perfData.domContentLoadedEventStart;
            
            console.log('Page Load Metrics:', this.metrics);
        });
    }

    measureLCP() {
        if ('PerformanceObserver' in window) {
            const observer = new PerformanceObserver((list) => {
                const entries = list.getEntries();
                const lastEntry = entries[entries.length - 1];
                this.metrics.lcp = lastEntry.startTime;
            });
            observer.observe({ entryTypes: ['largest-contentful-paint'] });
        }
    }

    measureFID() {
        if ('PerformanceObserver' in window) {
            const observer = new PerformanceObserver((list) => {
                const entries = list.getEntries();
                entries.forEach(entry => {
                    this.metrics.fid = entry.processingStart - entry.startTime;
                });
            });
            observer.observe({ entryTypes: ['first-input'] });
        }
    }

    measureCLS() {
        if ('PerformanceObserver' in window) {
            let clsValue = 0;
            const observer = new PerformanceObserver((list) => {
                const entries = list.getEntries();
                entries.forEach(entry => {
                    if (!entry.hadRecentInput) {
                        clsValue += entry.value;
                    }
                });
                this.metrics.cls = clsValue;
            });
            observer.observe({ entryTypes: ['layout-shift'] });
        }
    }

    getMetrics() {
        return this.metrics;
    }
}

// Initialize optimizations when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    window.performanceOptimizer = new PerformanceOptimizer();
    window.performanceMonitor = new PerformanceMonitor();

    // Optimize forms
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        window.performanceOptimizer.optimizeForm(form);
    });
});

// Add performance CSS
const performanceCSS = `
    .reduce-animations * {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
    
    .reduce-motion * {
        animation: none !important;
        transition: none !important;
    }
    
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }
    
    .animate-on-scroll.animate-in {
        opacity: 1;
        transform: translateY(0);
    }
    
    .webp-support .webp-image {
        background-image: url('image.webp');
    }
    
    .no-webp-support .webp-image {
        background-image: url('image.jpg');
    }
`;

// Inject performance CSS
const style = document.createElement('style');
style.textContent = performanceCSS;
document.head.appendChild(style);

// Export for module usage
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { PerformanceOptimizer, PerformanceMonitor };
}