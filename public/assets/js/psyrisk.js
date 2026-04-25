(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        initMobileMenu();
        initDropdowns();
        initHeaderShadow();
    });

    function initMobileMenu() {
        var toggle = document.querySelector('.menu-toggle');
        var nav = document.querySelector('.main-nav');
        if (!toggle || !nav) return;

        toggle.addEventListener('click', function () {
            var isOpen = nav.classList.toggle('open');
            toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });

        nav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                if (nav.classList.contains('open')) {
                    nav.classList.remove('open');
                    toggle.setAttribute('aria-expanded', 'false');
                }
            });
        });
    }

    function initDropdowns() {
        var items = document.querySelectorAll('.main-nav .nav-item.has-dropdown');

        items.forEach(function (item) {
            var trigger = item.querySelector('button, > a');
            if (!trigger) return;

            trigger.addEventListener('click', function (e) {
                if (window.matchMedia('(max-width: 760px)').matches) {
                    e.preventDefault();
                    items.forEach(function (other) {
                        if (other !== item) other.classList.remove('open');
                    });
                    item.classList.toggle('open');
                }
            });
        });

        document.addEventListener('click', function (e) {
            if (!e.target.closest('.main-nav')) {
                items.forEach(function (item) { item.classList.remove('open'); });
            }
        });
    }

    function initHeaderShadow() {
        var header = document.querySelector('.site-header');
        if (!header) return;
        var apply = function () {
            if (window.scrollY > 8) header.classList.add('scrolled');
            else header.classList.remove('scrolled');
        };
        apply();
        window.addEventListener('scroll', apply, { passive: true });
    }
})();
