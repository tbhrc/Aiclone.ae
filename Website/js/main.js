/* ==========================================================================
   AIClone.ae Main JavaScript
   ========================================================================== */

document.addEventListener('DOMContentLoaded', function() {
  
  // Initialize Lucide icons
  if (typeof lucide !== 'undefined') {
    lucide.createIcons();
  }

  // Mobile menu toggle
  const mobileBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  
  if (mobileBtn && mobileMenu) {
    mobileBtn.addEventListener('click', function() {
      mobileMenu.classList.toggle('active');
      const isOpen = mobileMenu.classList.contains('active');
      mobileBtn.setAttribute('aria-expanded', isOpen);
    });

    // Close mobile menu when clicking a link
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
        mobileBtn.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      
      const target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  // Fade-in on scroll observer
  const fadeElements = document.querySelectorAll('.fade-in');
  
  if (fadeElements.length > 0) {
    const fadeObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    });

    fadeElements.forEach(el => fadeObserver.observe(el));
  }

  // FAQ Accordion functionality
  const accordions = document.querySelectorAll('.accordion');
  
  accordions.forEach(accordion => {
    const btn = accordion.querySelector('.accordion-btn');
    
    if (btn) {
      btn.addEventListener('click', function() {
        // Close other accordions (optional - comment out for multiple open)
        accordions.forEach(other => {
          if (other !== accordion && other.classList.contains('active')) {
            other.classList.remove('active');
          }
        });
        
        // Toggle current accordion
        accordion.classList.toggle('active');
      });
    }
  });

  // Form validation (basic)
  const forms = document.querySelectorAll('form[data-validate]');
  
  forms.forEach(form => {
    form.addEventListener('submit', function(e) {
      let isValid = true;
      const requiredFields = form.querySelectorAll('[required]');
      
      requiredFields.forEach(field => {
        if (!field.value.trim()) {
          isValid = false;
          field.classList.add('error');
        } else {
          field.classList.remove('error');
        }
      });

      // Email validation
      const emailFields = form.querySelectorAll('input[type="email"]');
      emailFields.forEach(email => {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.value && !emailRegex.test(email.value)) {
          isValid = false;
          email.classList.add('error');
        }
      });

      if (!isValid) {
        e.preventDefault();
        // Find first error and focus
        const firstError = form.querySelector('.error');
        if (firstError) firstError.focus();
      }
    });
  });

  // Video placeholder play button (opens video modal or plays inline)
  const videoPlaceholders = document.querySelectorAll('.video-placeholder-icon');
  
  videoPlaceholders.forEach(placeholder => {
    placeholder.addEventListener('click', function() {
      const videoUrl = this.dataset.videoUrl;
      if (videoUrl) {
        // For now, open in new tab (can be replaced with modal)
        window.open(videoUrl, '_blank');
      }
    });
  });

  // Navbar scroll effect
  const nav = document.querySelector('.nav');
  
  if (nav) {
    let lastScroll = 0;
    
    window.addEventListener('scroll', () => {
      const currentScroll = window.pageYOffset;
      
      if (currentScroll > 100) {
        nav.classList.add('scrolled');
      } else {
        nav.classList.remove('scrolled');
      }
      
      lastScroll = currentScroll;
    });
  }

});

// Utility: Get relative path to root
function getBasePath() {
  const path = window.location.pathname;
  if (path.includes('/pages/')) {
    return '../';
  }
  return './';
}
