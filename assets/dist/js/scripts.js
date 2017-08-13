/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
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
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	"use strict";
	
	__webpack_require__(4);
	
	__webpack_require__(6);

/***/ },
/* 1 */,
/* 2 */,
/* 3 */,
/* 4 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	var _jquery = __webpack_require__(5);
	
	var _jquery2 = _interopRequireDefault(_jquery);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var setup = function () {
	    return {
	        init: function init() {
	            if (setup.isTouchDevice()) {
	                document.body.classList.add('touch-device');
	            }
	        },
	        isTouchDevice: function isTouchDevice() {
	            return 'ontouchstart' in window || navigator.MaxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
	        }
	    };
	}();
	
	(0, _jquery2.default)(document).ready(function () {
	    setup.init();
	});

/***/ },
/* 5 */
/***/ function(module, exports) {

	module.exports = jQuery;

/***/ },
/* 6 */
/***/ function(module, exports, __webpack_require__) {

	'use strict';
	
	var _jquery = __webpack_require__(5);
	
	var _jquery2 = _interopRequireDefault(_jquery);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	var nav = function () {
	    return {
	        menuWrap: document.querySelector('.menu-primary-navigation-container'),
	        menu: document.querySelector('.jmw-main-menu'),
	
	        init: function init() {
	            nav.menuWrap.addEventListener('click', nav.menuToggle, false);
	        },
	        menuToggle: function menuToggle(e) {
	            if (e.target !== nav.menuWrap) {
	                return;
	            }
	
	            if (nav.menuWrap.classList.contains('js--nav-open')) {
	                nav.reset();
	                return;
	            }
	
	            nav.open();
	        },
	        isMobileBreakpoint: function isMobileBreakpoint() {
	            return window.innerWidth <= 640;
	        },
	        reset: function reset() {
	            if (nav.isMobileBreakpoint()) {
	                nav.menuWrap.style.height = '';
	            }
	
	            nav.menuWrap.classList.remove('js--nav-open');
	        },
	        open: function open() {
	            if (nav.isMobileBreakpoint()) {
	                nav.menuWrap.style.height = nav.menu.offsetHeight + 30 + 'px';
	            }
	
	            nav.menuWrap.classList.add('js--nav-open');
	        }
	    };
	}();
	
	(0, _jquery2.default)(document).ready(function () {
	    nav.init();
	});

/***/ }
/******/ ]);
//# sourceMappingURL=scripts.js.map