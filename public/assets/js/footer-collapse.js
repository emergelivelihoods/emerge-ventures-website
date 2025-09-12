/**
 * Footer Collapsible Functionality
 * Makes footer sections collapsible on mobile devices
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize footer collapse functionality
    initFooterCollapse();
});

function initFooterCollapse() {
    // Only apply on mobile devices (screen width <= 991px)
    if (window.innerWidth <= 991) {
        setupCollapsibleFooter();
        handleSpecialSections();
    }
    
    // Re-initialize on window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth <= 991) {
            setupCollapsibleFooter();
            handleSpecialSections();
        } else {
            resetFooterCollapse();
        }
    });
}

function setupCollapsibleFooter() {
    // Get all footer headings except the company logo section
    const footerHeadings = document.querySelectorAll('.ms-footer .ms-footer-heading');
    
    footerHeadings.forEach(function(heading) {
        // Skip the company section (logo section)
        if (heading.closest('.ms-footer-company')) {
            return;
        }
        
        // Add click event listener
        heading.addEventListener('click', function(e) {
            e.preventDefault();
            toggleFooterSection(this);
        });
        
        // Initially hide all dropdown sections
        const dropdown = heading.nextElementSibling;
        if (dropdown && dropdown.classList.contains('ms-footer-dropdown')) {
            dropdown.classList.remove('show');
            heading.classList.remove('active');
        }
    });
}

function toggleFooterSection(heading) {
    const dropdown = heading.nextElementSibling;
    
    if (dropdown && dropdown.classList.contains('ms-footer-dropdown')) {
        // Toggle the active state
        const isCurrentlyActive = heading.classList.contains('active');
        
        if (isCurrentlyActive) {
            // Collapse
            heading.classList.remove('active');
            dropdown.classList.remove('show');
            dropdown.style.display = 'none';
        } else {
            // Expand
            heading.classList.add('active');
            dropdown.classList.add('show');
            dropdown.style.display = 'block';
        }
    }
}

function resetFooterCollapse() {
    // Remove all event listeners and reset styles for desktop view
    const footerHeadings = document.querySelectorAll('.ms-footer .ms-footer-heading');
    const footerDropdowns = document.querySelectorAll('.ms-footer .ms-footer-dropdown');
    
    footerHeadings.forEach(function(heading) {
        heading.classList.remove('active');
        // Remove event listeners by cloning and replacing the element
        const newHeading = heading.cloneNode(true);
        heading.parentNode.replaceChild(newHeading, heading);
    });
    
    footerDropdowns.forEach(function(dropdown) {
        dropdown.classList.add('show');
        dropdown.style.display = '';
        dropdown.style.opacity = '';
        dropdown.style.maxHeight = '';
    });
    
    // Reset social dropdown to its original position if it was moved
    const contactSection = document.querySelector('.ms-footer-cont-social');
    if (contactSection) {
        const socialSection = contactSection.querySelector('.ms-footer-social');
        const socialDropdown = contactSection.querySelector('.ms-footer-social .ms-footer-dropdown');
        const contactDropdown = contactSection.querySelector('.ms-footer-contact .ms-footer-dropdown');
        
        // If social dropdown is inside contact dropdown, move it back
        if (contactDropdown && socialDropdown && contactDropdown.contains(socialDropdown)) {
            const socialWidget = socialSection.querySelector('.ms-footer-widget');
            if (socialWidget) {
                socialWidget.appendChild(socialDropdown);
            }
        }
    }
}

// Touch event handling for better mobile experience
function addTouchSupport() {
    const footerHeadings = document.querySelectorAll('.ms-footer .ms-footer-heading');
    
    footerHeadings.forEach(function(heading) {
        if (heading.closest('.ms-footer-company')) {
            return;
        }
        
        heading.addEventListener('touchstart', function(e) {
            this.style.backgroundColor = 'rgba(255, 255, 255, 0.1)';
        });
        
        heading.addEventListener('touchend', function(e) {
            this.style.backgroundColor = '';
        });
    });
}

// Initialize touch support
document.addEventListener('DOMContentLoaded', function() {
    if ('ontouchstart' in window) {
        addTouchSupport();
    }
});

// Handle special cases for contact and social sections
function handleSpecialSections() {
    if (window.innerWidth > 991) return;
    
    // Make social links collapse under Contact (no separate "Follow Us" heading)
    const contactSection = document.querySelector('.ms-footer-cont-social');
    if (!contactSection) return;

    const contactWidget = contactSection.querySelector('.ms-footer-contact .ms-footer-widget');
    const contactDropdown = contactSection.querySelector('.ms-footer-contact .ms-footer-dropdown');
    const socialDropdown = contactSection.querySelector('.ms-footer-social .ms-footer-dropdown');

    if (contactWidget && contactDropdown && socialDropdown) {
        // Ensure contact heading exists
        let contactHeading = contactWidget.querySelector('.ms-footer-heading');
        if (!contactHeading) return;

        // Hide both dropdowns initially on mobile
        contactDropdown.classList.remove('show');
        socialDropdown.classList.remove('show');
        contactHeading.classList.remove('active');
        contactDropdown.style.display = 'none';
        socialDropdown.style.display = 'none';

        // Add CSS to ensure social icons are visible when shown
        const style = document.createElement('style');
        style.textContent = `
            @media (max-width: 991px) {
                .ms-footer-social .ms-footer-widget .ms-footer-links.ms-footer-dropdown.show {
                    display: block !important;
                }
                .ms-footer-social .ms-footer-widget .ms-footer-links.ms-footer-dropdown.show .ms-footer-link {
                    display: inline-block !important;
                    visibility: visible !important;
                }
            }
        `;
        document.head.appendChild(style);

        // Ensure clicking Contact toggles both contact and social content
        const newHeading = contactHeading.cloneNode(true);
        contactHeading.parentNode.replaceChild(newHeading, contactHeading);
        newHeading.addEventListener('click', function(e) {
            e.preventDefault();
            toggleContactAndSocial(this);
        });
    }
}

// Toggle both contact and social sections together
function toggleContactAndSocial(heading) {
    const contactSection = document.querySelector('.ms-footer-cont-social');
    if (!contactSection) return;

    const contactDropdown = contactSection.querySelector('.ms-footer-contact .ms-footer-dropdown');
    const socialDropdown = contactSection.querySelector('.ms-footer-social .ms-footer-dropdown');
    
    if (contactDropdown && socialDropdown) {
        const isCurrentlyActive = heading.classList.contains('active');
        
        if (isCurrentlyActive) {
            // Collapse both
            heading.classList.remove('active');
            contactDropdown.classList.remove('show');
            socialDropdown.classList.remove('show');
            contactDropdown.style.display = 'none';
            socialDropdown.style.display = 'none';
        } else {
            // Expand both
            heading.classList.add('active');
            contactDropdown.classList.add('show');
            socialDropdown.classList.add('show');
            contactDropdown.style.display = 'block';
            socialDropdown.style.display = 'block';
            
            // Ensure social icons are visible by forcing display
            const socialLinks = socialDropdown.querySelectorAll('.ms-footer-link');
            socialLinks.forEach(function(link) {
                link.style.display = 'inline-block';
                link.style.visibility = 'visible';
            });
        }
    }
}

// Enhanced setup function to handle all sections properly
function setupCollapsibleFooter() {
    // First, hide all dropdown sections
    const allDropdowns = document.querySelectorAll('.ms-footer .ms-footer-dropdown');
    allDropdowns.forEach(function(dropdown) {
        dropdown.classList.remove('show');
        dropdown.style.display = 'none';
    });
    
    // Get all footer headings except the company logo section
    const footerHeadings = document.querySelectorAll('.ms-footer .ms-footer-heading');
    
    footerHeadings.forEach(function(heading) {
        // Skip the company section (logo section)
        if (heading.closest('.ms-footer-company')) {
            return;
        }
        
        // Remove any existing event listeners by cloning
        const newHeading = heading.cloneNode(true);
        heading.parentNode.replaceChild(newHeading, heading);
        
        // Add click event listener to the new heading
        newHeading.addEventListener('click', function(e) {
            e.preventDefault();
            toggleFooterSection(this);
        });
        
        // Ensure heading is not active initially
        newHeading.classList.remove('active');
    });
}

// Additional initialization for touch devices
document.addEventListener('DOMContentLoaded', function() {
    if ('ontouchstart' in window && window.innerWidth <= 991) {
        addTouchSupport();
    }
});