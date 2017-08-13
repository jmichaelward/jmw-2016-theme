const nav = (($)=> {
    return {
        menuWrap: document.querySelector('.menu-primary-navigation-container'),
        menu: document.querySelector('.jmw-main-menu'),

        init() {
            $(document).ready(()=> {
                nav.menuWrap.addEventListener('click', nav.menuToggle, false);
            });
        },

        menuToggle(e) {
            if (e.target !== nav.menuWrap) {
                return;
            }

            if (nav.menuWrap.classList.contains('js--nav-open')) {
                nav.reset();
                return;
            }

            nav.open();
        },

        isMobileBreakpoint() {
            return window.innerWidth <= 640;
        },

        reset() {
            if (nav.isMobileBreakpoint()) {
                nav.menuWrap.style.height = '';
            }

            nav.menuWrap.classList.remove('js--nav-open');
        },

        open() {
            if (nav.isMobileBreakpoint()) {
                nav.menuWrap.style.height = nav.menu.offsetHeight + 30 + 'px';
            }

            nav.menuWrap.classList.add('js--nav-open');
        }
    }
})(jQuery);

export default nav;