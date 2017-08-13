import $ from "jquery";

let setup = (()=> {
    return {
        init() {
            if (setup.isTouchDevice()) {
                document.body.classList.add('touch-device');
            }
        },

        isTouchDevice() {
            return ('ontouchstart' in window || navigator.MaxTouchPoints > 0 || navigator.msMaxTouchPoints > 0);
        }
    };
})();

$(document).ready(()=> {
   setup.init();
});