const setup = (($)=> {
    return {
        init() {
            $(document).ready(()=> {
                if (this.isTouchDevice()) {
                    document.body.classList.add('touch-device');
                }
            });
        },

        isTouchDevice() {
            return ('ontouchstart' in window || navigator.MaxTouchPoints > 0 || navigator.msMaxTouchPoints > 0);
        }
    };
})(jQuery);

export default setup;
