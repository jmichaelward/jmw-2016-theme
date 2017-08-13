/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__setup__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__nav__ = __webpack_require__(2);



__WEBPACK_IMPORTED_MODULE_0__setup__["a" /* default */].init();
__WEBPACK_IMPORTED_MODULE_1__nav__["a" /* default */].init();

/***/ }),
/* 1 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
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

/* harmony default export */ __webpack_exports__["a"] = (setup);


/***/ }),
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
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

/* harmony default export */ __webpack_exports__["a"] = (nav);

/***/ })
/******/ ]);