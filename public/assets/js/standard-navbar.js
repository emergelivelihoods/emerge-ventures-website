
// <!-- Custom navbar script for click dropdowns and mobile functionality -->
// <script>
  document.addEventListener('DOMContentLoaded', function () {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

    // Handle hamburger button clicks to ensure menu toggles properly
    navbarToggler.addEventListener('click', function() {
      // Check if menu is currently visible
      const isMenuOpen = navbarCollapse.classList.contains('show');
      
      // Get or create Bootstrap collapse instance
      let bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
      if (!bsCollapse) {
        bsCollapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });
      }
      
      // Toggle based on current menu state (not aria-expanded)
      if (isMenuOpen) {
        // Menu is open (X is showing), close it
        bsCollapse.hide();
      } else {
        // Menu is closed (hamburger is showing), open it
        bsCollapse.show();
      }
    });

    // Handle Bootstrap collapse events for cleanup and animation
    navbarCollapse.addEventListener('show.bs.collapse', function () {
      navbarToggler.setAttribute('aria-expanded', 'true');
    });

    navbarCollapse.addEventListener('hide.bs.collapse', function () {
      navbarToggler.setAttribute('aria-expanded', 'false');
      // Close all dropdowns when main menu closes
      document.querySelectorAll('.dropdown').forEach(function (dropdown) {
        dropdown.classList.remove('show');
        const menu = dropdown.querySelector('.dropdown-menu');
        if (menu) menu.classList.remove('show');
      });
    });

    navbarCollapse.addEventListener('shown.bs.collapse', function () {
      navbarToggler.setAttribute('aria-expanded', 'true');
    });

    navbarCollapse.addEventListener('hidden.bs.collapse', function () {
      navbarToggler.setAttribute('aria-expanded', 'false');
    });

    // Handle dropdown clicks for all screen sizes
    dropdownToggles.forEach(function (toggle) {
      toggle.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        const dropdownMenu = this.nextElementSibling;
        const parentDropdown = this.closest('.dropdown');

        // Close other dropdowns
        document.querySelectorAll('.dropdown').forEach(function (dropdown) {
          if (dropdown !== parentDropdown) {
            dropdown.classList.remove('show');
            const menu = dropdown.querySelector('.dropdown-menu');
            if (menu) menu.classList.remove('show');
          }
        });

        // Toggle current dropdown
        const isShowing = dropdownMenu.classList.contains('show');

        if (isShowing) {
          dropdownMenu.classList.remove('show');
          parentDropdown.classList.remove('show');
        } else {
          dropdownMenu.classList.add('show');
          parentDropdown.classList.add('show');
        }
      });
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function (e) {
      if (!e.target.closest('.dropdown')) {
        document.querySelectorAll('.dropdown').forEach(function (dropdown) {
          dropdown.classList.remove('show');
          const menu = dropdown.querySelector('.dropdown-menu');
          if (menu) menu.classList.remove('show');
        });
      }
    });

    // Handle window resize to reset dropdowns
    window.addEventListener('resize', function () {
      if (window.innerWidth > 991) {
        document.querySelectorAll('.dropdown').forEach(function (dropdown) {
          dropdown.classList.remove('show');
          const menu = dropdown.querySelector('.dropdown-menu');
          if (menu) menu.classList.remove('show');
        });
      }
    });

    // Close mobile menu when clicking on nav links
    document.querySelectorAll('.nav-link').forEach(function (link) {
      link.addEventListener('click', function () {
        if (window.innerWidth <= 991 && !this.classList.contains('dropdown-toggle')) {
          const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
          if (bsCollapse) {
            bsCollapse.hide();
          }
        }
      });
    });

    // Close mobile menu when clicking on dropdown items
    document.querySelectorAll('.dropdown-item').forEach(function (item) {
      item.addEventListener('click', function () {
        if (window.innerWidth <= 991) {
          const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
          if (bsCollapse) {
            bsCollapse.hide();
          }
        }
      });
    });
  });
// </script>