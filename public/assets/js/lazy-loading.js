/**
 * Lazy Loading Implementation for Emerge Ventures Website
 * Optimizes image loading for better performance
 */

class LazyLoader {
    constructor() {
        this.imageObserver = null;
        this.init();
    }

    init() {
        // Check if Intersection Observer is supported
        if ('IntersectionObserver' in window) {
            this.setupIntersectionObserver();
        } else {
            // Fallback for older browsers
            this.loadAllImages();
        }
    }

    setupIntersectionObserver() {
        const options = {
            root: null,
            rootMargin: '50px',
            threshold: 0.1
        };

        this.imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    this.loadImage(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, options);

        this.observeImages();
    }

    observeImages() {
        const lazyImages = document.querySelectorAll('img[data-src], img[data-lazy]');
        lazyImages.forEach(img => {
            this.imageObserver.observe(img);
        });
    }

    loadImage(img) {
        const src = img.dataset.src || img.dataset.lazy;
        if (src) {
            // Create a new image to preload
            const imageLoader = new Image();
            
            imageLoader.onload = () => {
                img.src = src;
                img.classList.add('loaded');
                img.classList.remove('lazy');
                
                // Remove data attributes
                delete img.dataset.src;
                delete img.dataset.lazy;
            };
            
            imageLoader.onerror = () => {
                img.classList.add('error');
            };
            
            imageLoader.src = src;
        }
    }

    loadAllImages() {
        // Fallback for browsers without Intersection Observer
        const lazyImages = document.querySelectorAll('img[data-src], img[data-lazy]');
        lazyImages.forEach(img => {
            this.loadImage(img);
        });
    }

    // Method to add new images dynamically
    addImage(img) {
        if (this.imageObserver) {
            this.imageObserver.observe(img);
        } else {
            this.loadImage(img);
        }
    }
}

// CSS for lazy loading effects
const lazyLoadingCSS = `
    .lazy {
        opacity: 0;
        transition: opacity 0.3s;
        background: #f0f0f0;
    }
    
    .lazy.loaded {
        opacity: 1;
    }
    
    .lazy.error {
        opacity: 1;
        background: #ffebee;
    }
    
    /* Placeholder animation */
    .lazy:not(.loaded):not(.error) {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: loading 1.5s infinite;
    }
    
    @keyframes loading {
        0% { background-position: 200% 0; }
        100% { background-position: -200% 0; }
    }
`;

// Inject CSS
const style = document.createElement('style');
style.textContent = lazyLoadingCSS;
document.head.appendChild(style);

// Initialize lazy loader when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    window.lazyLoader = new LazyLoader();
});

// Export for module usage
if (typeof module !== 'undefined' && module.exports) {
    module.exports = LazyLoader;
}