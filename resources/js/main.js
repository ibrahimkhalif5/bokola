(function() {
  "use strict";

  function toggleScrolled() {
    const header = document.querySelector('#header');
    const topbar = document.querySelector('#topbar');
    if (window.scrollY > 60) {
      header.classList.add('scrolled');
      if (topbar) { topbar.classList.add('hidden'); document.body.classList.add('topbar-hidden'); }
    } else {
      header.classList.remove('scrolled');
      if (topbar) { topbar.classList.remove('hidden'); document.body.classList.remove('topbar-hidden'); }
    }
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  const navToggle = document.querySelector('#navToggle');
  const mobileNav = document.querySelector('#mobileNav');
  const navOverlay = document.querySelector('#navOverlay');
  const navClose = document.querySelector('#navClose');

  if (navToggle && mobileNav && navOverlay) {
    function openMobileNav() {
      mobileNav.classList.add('open');
      navOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
      navToggle.classList.add('active');
    }

    function closeMobileNav() {
      mobileNav.classList.remove('open');
      navOverlay.classList.remove('active');
      document.body.style.overflow = '';
      navToggle.classList.remove('active');
    }

    navToggle.addEventListener('click', openMobileNav);
    navClose.addEventListener('click', closeMobileNav);
    navOverlay.addEventListener('click', closeMobileNav);

    document.querySelectorAll('.mobile-nav-list > li > a').forEach(link => {
      link.addEventListener('click', function(e) {
        if (this.parentElement.classList.contains('has-sub')) {
          e.preventDefault();
          this.parentElement.classList.toggle('active');
        } else {
          closeMobileNav();
        }
      });
    });
  }

  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.classList.add('loaded');
      setTimeout(() => preloader.remove(), 600);
    });
  }

  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    function toggleScrollTop() {
      window.scrollY > 300 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    scrollTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    window.addEventListener('load', toggleScrollTop);
    document.addEventListener('scroll', toggleScrollTop);
  }

  function aosInit() {
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 700,
        easing: 'ease-out-cubic',
        once: true,
        mirror: false
      });
    }
  }
  window.addEventListener('load', aosInit);

  const searchToggle = document.querySelector('#searchToggle');
  const searchOverlay = document.querySelector('#searchOverlay');
  const searchClose = document.querySelector('#searchClose');
  const searchInput = document.querySelector('.search-input');
  const searchForm = document.querySelector('#searchForm');

  if (searchToggle && searchOverlay) {
    searchToggle.addEventListener('click', () => {
      searchOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
      setTimeout(() => searchInput?.focus(), 200);
    });
  }

  if (searchForm) {
    searchForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const q = searchInput?.value.trim();
      if (!q) return;
      const domain = window.location.hostname === '127.0.0.1' || window.location.hostname === 'localhost'
        ? 'elwakmunicipality.co.ke'
        : window.location.hostname;
      window.open('https://www.google.com/search?q=site:' + encodeURIComponent(domain) + '+' + encodeURIComponent(q), '_blank');
      closeSearch();
    });
  }

  function closeSearch() {
    if (searchOverlay) {
      searchOverlay.classList.remove('active');
      document.body.style.overflow = '';
    }
  }

  if (searchClose) searchClose.addEventListener('click', closeSearch);
  if (searchOverlay) {
    searchOverlay.addEventListener('click', (e) => {
      if (e.target === searchOverlay) closeSearch();
    });
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeSearch();
    });
  }

  function initSwiper() {
    if (typeof Swiper === 'undefined') return;

    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      try {
        let config = JSON.parse(
          swiperElement.querySelector(".swiper-config").innerHTML.trim()
        );
        new Swiper(swiperElement, config);
      } catch (e) {
        // silently skip
      }
    });
  }
  window.addEventListener("load", initSwiper);

  if (typeof PureCounter !== 'undefined') {
    new PureCounter();
  }

  function initFaq() {
    document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((el) => {
      el.addEventListener('click', () => {
        el.parentNode.classList.toggle('faq-active');
      });
    });
  }
  window.addEventListener('load', initFaq);

  if (typeof GLightbox !== 'undefined') {
    GLightbox({ selector: '.glightbox' });
  }

  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      setTimeout(() => {
        let section = document.querySelector(window.location.hash);
        if (section) {
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }
      }, 200);
    }
  });

  const skipLink = document.querySelector('a[href="#main-content"]');
  if (skipLink) {
    skipLink.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector('#main-content');
      if (target) {
        target.setAttribute('tabindex', '-1');
        target.focus();
        target.addEventListener('blur', function() {
          this.removeAttribute('tabindex');
        }, { once: true });
      }
    });
  }

  function updateClock() {
    const dateEl = document.getElementById('dtDate');
    const timeEl = document.getElementById('dtTime');
    if (!dateEl || !timeEl) return;
    const now = new Date();
    const days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    const months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
    dateEl.textContent = days[now.getDay()] + ', ' + months[now.getMonth()] + ' ' + now.getDate() + ', ' + now.getFullYear();
    timeEl.textContent = now.toLocaleTimeString('en-US', { hour12: true, hour: '2-digit', minute: '2-digit', second: '2-digit' });
  }
  updateClock();
  setInterval(updateClock, 1000);

})();
