(self["webpackChunk"] = self["webpackChunk"] || []).push([["dreammaker"],{

/***/ "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.[jt]sx?$":
/*!****************************************************************************************************************!*\
  !*** ./assets/controllers/ sync ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \.[jt]sx?$ ***!
  \****************************************************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var map = {
	"./hello_controller.js": "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.[jt]sx?$";

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json":
/*!************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json ***!
  \************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
});

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js":
/*!******************************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js ***!
  \******************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _default)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var _hotwired_stimulus__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! @hotwired/stimulus */ "./node_modules/@hotwired/stimulus/dist/stimulus.js");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }














function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }


/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */

var _default = /*#__PURE__*/function (_Controller) {
  _inherits(_default, _Controller);

  var _super = _createSuper(_default);

  function _default() {
    _classCallCheck(this, _default);

    return _super.apply(this, arguments);
  }

  _createClass(_default, [{
    key: "connect",
    value: function connect() {
      this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';
    }
  }]);

  return _default;
}(_hotwired_stimulus__WEBPACK_IMPORTED_MODULE_12__.Controller);



/***/ }),

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ressources_sass_dreammaker_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ressources/sass/dreammaker.scss */ "./assets/ressources/sass/dreammaker.scss");
/* harmony import */ var _ressources_sass_responsive_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ressources/sass/responsive.scss */ "./assets/ressources/sass/responsive.scss");
/* harmony import */ var _bootstrap__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./bootstrap */ "./assets/bootstrap.js");
/* harmony import */ var _ressources_js_script__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./ressources/js/script */ "./assets/ressources/js/script.js");
/* harmony import */ var _ressources_js_script__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_ressources_js_script__WEBPACK_IMPORTED_MODULE_3__);
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you import will output into a single css file (app.css in this case)
// import './styles/app.css';

 // start the Stimulus application




/***/ }),

/***/ "./assets/bootstrap.js":
/*!*****************************!*\
  !*** ./assets/bootstrap.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "app": () => (/* binding */ app)
/* harmony export */ });
/* harmony import */ var _symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @symfony/stimulus-bridge */ "./node_modules/@symfony/stimulus-bridge/dist/index.js");
 // Registers Stimulus controllers from controllers.json and in the controllers/ directory

var app = (0,_symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__.startStimulusApp)(__webpack_require__("./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.[jt]sx?$")); // register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);

/***/ }),

/***/ "./assets/ressources/js/script.js":
/*!****************************************!*\
  !*** ./assets/ressources/js/script.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

document.addEventListener("DOMContentLoaded", function () {
  var topBtn = document.getElementById('btnToTop');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 50) {
      document.getElementById('navbar_top').classList.add('fixed-top'); // add padding top to show content behind navbar

      navbar_height = document.querySelector('.navbar').offsetHeight;
      document.body.style.paddingTop = navbar_height + 'px';
      document.getElementById('navbar_top').classList.remove('bg-transparent');
      document.getElementById('navbar_top').classList.add('bg-bleu');
      topBtn.style.display = "block";
    } else {
      document.getElementById('navbar_top').classList.remove('fixed-top'); // remove padding top from body

      document.body.style.paddingTop = '0';
      document.getElementById('navbar_top').classList.add('bg-transparent');
      document.getElementById('navbar_top').classList.remove('bg-bleu');
      topBtn.style.display = "none";
    }
  });

  if (window.innerWidth > 992) {
    document.querySelectorAll('.navbar .nav-item').forEach(function (everyitem) {
      everyitem.addEventListener('mouseover', function (e) {
        var el_link = this.querySelector('a[data-bs-toggle]');

        if (el_link != null) {
          var nextEl = el_link.nextElementSibling;
          el_link.classList.add('show');
          nextEl.classList.add('show');
        }
      });
      everyitem.addEventListener('mouseleave', function (e) {
        var el_link = this.querySelector('a[data-bs-toggle]');

        if (el_link != null) {
          var nextEl = el_link.nextElementSibling;
          el_link.classList.remove('show');
          nextEl.classList.remove('show');
        }
      });
    });
  }
});
$(document).ready(function () {
  $('.logo-partenaires').slick({
    slidesToShow: 9,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1,
        Infinite: true
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        Infinite: true
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        Infinite: true
      }
    }]
  });
});
$(document).ready(function () {
  $("#btnToTop").on('click', function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  });
});

/***/ }),

/***/ "./assets/ressources/sass/dreammaker.scss":
/*!************************************************!*\
  !*** ./assets/ressources/sass/dreammaker.scss ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/ressources/sass/responsive.scss":
/*!************************************************!*\
  !*** ./assets/ressources/sass/responsive.scss ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_symfony_stimulus-bridge_dist_index_js-node_modules_core-js_modules_es_ar-5de6b2"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QUFRLEVBQUM7QUFDUlAsUUFBQUEsWUFBWSxFQUFFLENBRE47QUFFUkMsUUFBQUEsY0FBYyxFQUFDLENBRlA7QUFHUk8sUUFBQUEsUUFBUSxFQUFFO0FBSEY7QUFGVixLQURVLEVBU1Y7QUFDQ0YsTUFBQUEsVUFBVSxFQUFDLEdBRFo7QUFFQ0MsTUFBQUEsUUFBUSxFQUFDO0FBQ1JQLFFBQUFBLFlBQVksRUFBRSxDQUROO0FBRVJDLFFBQUFBLGNBQWMsRUFBQyxDQUZQO0FBR1JPLFFBQUFBLFFBQVEsRUFBRTtBQUhGO0FBRlYsS0FUVSxFQWlCVjtBQUNDRixNQUFBQSxVQUFVLEVBQUMsR0FEWjtBQUVDQyxNQUFBQSxRQUFRLEVBQUM7QUFDUlAsUUFBQUEsWUFBWSxFQUFFLENBRE47QUFFUkMsUUFBQUEsY0FBYyxFQUFDLENBRlA7QUFHUk8sUUFBQUEsUUFBUSxFQUFFO0FBSEY7QUFGVixLQWpCVTtBQU5pQixHQUE3QjtBQWlDRSxDQWxDSDtBQW9DQVgsQ0FBQyxDQUFDeEIsUUFBRCxDQUFELENBQVl5QixLQUFaLENBQWtCLFlBQVk7QUFDN0JELEVBQUFBLENBQUMsQ0FBQyxXQUFELENBQUQsQ0FBZVksRUFBZixDQUFrQixPQUFsQixFQUEyQixTQUFTQyxXQUFULEdBQXVCO0FBQ2pEckMsSUFBQUEsUUFBUSxDQUFDVyxJQUFULENBQWMyQixTQUFkLEdBQTBCLENBQTFCO0FBQ0V0QyxJQUFBQSxRQUFRLENBQUN1QyxlQUFULENBQXlCRCxTQUF6QixHQUFxQyxDQUFyQztBQUNGLEdBSEQ7QUFJQSxDQUxEOzs7Ozs7Ozs7Ozs7QUN4RkE7Ozs7Ozs7Ozs7Ozs7QUNBQSIsInNvdXJjZXMiOlsid2VicGFjazovLy98L1xcLltqdF1zeCIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY29udHJvbGxlcnMuanNvbiIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY29udHJvbGxlcnMvaGVsbG9fY29udHJvbGxlci5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9ib290c3RyYXAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3Jlc3NvdXJjZXMvanMvc2NyaXB0LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9yZXNzb3VyY2VzL3Nhc3MvZHJlYW1tYWtlci5zY3NzIiwid2VicGFjazovLy8uL2Fzc2V0cy9yZXNzb3VyY2VzL3Nhc3MvcmVzcG9uc2l2ZS5zY3NzIl0sInNvdXJjZXNDb250ZW50IjpbInZhciBtYXAgPSB7XG5cdFwiLi9oZWxsb19jb250cm9sbGVyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvQHN5bWZvbnkvc3RpbXVsdXMtYnJpZGdlL2xhenktY29udHJvbGxlci1sb2FkZXIuanMhLi9hc3NldHMvY29udHJvbGxlcnMvaGVsbG9fY29udHJvbGxlci5qc1wiXG59O1xuXG5cbmZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0KHJlcSkge1xuXHR2YXIgaWQgPSB3ZWJwYWNrQ29udGV4dFJlc29sdmUocmVxKTtcblx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oaWQpO1xufVxuZnVuY3Rpb24gd2VicGFja0NvbnRleHRSZXNvbHZlKHJlcSkge1xuXHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKG1hcCwgcmVxKSkge1xuXHRcdHZhciBlID0gbmV3IEVycm9yKFwiQ2Fubm90IGZpbmQgbW9kdWxlICdcIiArIHJlcSArIFwiJ1wiKTtcblx0XHRlLmNvZGUgPSAnTU9EVUxFX05PVF9GT1VORCc7XG5cdFx0dGhyb3cgZTtcblx0fVxuXHRyZXR1cm4gbWFwW3JlcV07XG59XG53ZWJwYWNrQ29udGV4dC5rZXlzID0gZnVuY3Rpb24gd2VicGFja0NvbnRleHRLZXlzKCkge1xuXHRyZXR1cm4gT2JqZWN0LmtleXMobWFwKTtcbn07XG53ZWJwYWNrQ29udGV4dC5yZXNvbHZlID0gd2VicGFja0NvbnRleHRSZXNvbHZlO1xubW9kdWxlLmV4cG9ydHMgPSB3ZWJwYWNrQ29udGV4dDtcbndlYnBhY2tDb250ZXh0LmlkID0gXCIuL2Fzc2V0cy9jb250cm9sbGVycyBzeW5jIHJlY3Vyc2l2ZSAuL25vZGVfbW9kdWxlcy9Ac3ltZm9ueS9zdGltdWx1cy1icmlkZ2UvbGF6eS1jb250cm9sbGVyLWxvYWRlci5qcyEgXFxcXC5banRdc3g/JFwiOyIsImV4cG9ydCBkZWZhdWx0IHtcbn07IiwiaW1wb3J0IHsgQ29udHJvbGxlciB9IGZyb20gJ0Bob3R3aXJlZC9zdGltdWx1cyc7XG5cbi8qXG4gKiBUaGlzIGlzIGFuIGV4YW1wbGUgU3RpbXVsdXMgY29udHJvbGxlciFcbiAqXG4gKiBBbnkgZWxlbWVudCB3aXRoIGEgZGF0YS1jb250cm9sbGVyPVwiaGVsbG9cIiBhdHRyaWJ1dGUgd2lsbCBjYXVzZVxuICogdGhpcyBjb250cm9sbGVyIHRvIGJlIGV4ZWN1dGVkLiBUaGUgbmFtZSBcImhlbGxvXCIgY29tZXMgZnJvbSB0aGUgZmlsZW5hbWU6XG4gKiBoZWxsb19jb250cm9sbGVyLmpzIC0+IFwiaGVsbG9cIlxuICpcbiAqIERlbGV0ZSB0aGlzIGZpbGUgb3IgYWRhcHQgaXQgZm9yIHlvdXIgdXNlIVxuICovXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBleHRlbmRzIENvbnRyb2xsZXIge1xuICAgIGNvbm5lY3QoKSB7XG4gICAgICAgIHRoaXMuZWxlbWVudC50ZXh0Q29udGVudCA9ICdIZWxsbyBTdGltdWx1cyEgRWRpdCBtZSBpbiBhc3NldHMvY29udHJvbGxlcnMvaGVsbG9fY29udHJvbGxlci5qcyc7XG4gICAgfVxufVxuIiwiLypcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcbiAqXG4gKiBXZSByZWNvbW1lbmQgaW5jbHVkaW5nIHRoZSBidWlsdCB2ZXJzaW9uIG9mIHRoaXMgSmF2YVNjcmlwdCBmaWxlXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxuICovXG5cbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcbi8vIGltcG9ydCAnLi9zdHlsZXMvYXBwLmNzcyc7XG5pbXBvcnQgJy4vcmVzc291cmNlcy9zYXNzL2RyZWFtbWFrZXIuc2Nzcyc7XG5pbXBvcnQgJy4vcmVzc291cmNlcy9zYXNzL3Jlc3BvbnNpdmUuc2Nzcyc7XG5cbi8vIHN0YXJ0IHRoZSBTdGltdWx1cyBhcHBsaWNhdGlvblxuaW1wb3J0ICcuL2Jvb3RzdHJhcCc7XG5pbXBvcnQgJy4vcmVzc291cmNlcy9qcy9zY3JpcHQnO1xuIiwiaW1wb3J0IHsgc3RhcnRTdGltdWx1c0FwcCB9IGZyb20gJ0BzeW1mb255L3N0aW11bHVzLWJyaWRnZSc7XG5cbi8vIFJlZ2lzdGVycyBTdGltdWx1cyBjb250cm9sbGVycyBmcm9tIGNvbnRyb2xsZXJzLmpzb24gYW5kIGluIHRoZSBjb250cm9sbGVycy8gZGlyZWN0b3J5XG5leHBvcnQgY29uc3QgYXBwID0gc3RhcnRTdGltdWx1c0FwcChyZXF1aXJlLmNvbnRleHQoXG4gICAgJ0BzeW1mb255L3N0aW11bHVzLWJyaWRnZS9sYXp5LWNvbnRyb2xsZXItbG9hZGVyIS4vY29udHJvbGxlcnMnLFxuICAgIHRydWUsXG4gICAgL1xcLltqdF1zeD8kL1xuKSk7XG5cbi8vIHJlZ2lzdGVyIGFueSBjdXN0b20sIDNyZCBwYXJ0eSBjb250cm9sbGVycyBoZXJlXG4vLyBhcHAucmVnaXN0ZXIoJ3NvbWVfY29udHJvbGxlcl9uYW1lJywgU29tZUltcG9ydGVkQ29udHJvbGxlcik7XG4iLCJkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKFwiRE9NQ29udGVudExvYWRlZFwiLCBmdW5jdGlvbigpe1xyXG5cdGxldCB0b3BCdG4gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYnRuVG9Ub3AnKTtcclxuICB3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignc2Nyb2xsJywgZnVuY3Rpb24oKSB7XHJcbiAgICAgIGlmICh3aW5kb3cuc2Nyb2xsWSA+IDUwKSB7XHJcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ25hdmJhcl90b3AnKS5jbGFzc0xpc3QuYWRkKCdmaXhlZC10b3AnKTtcclxuICAgICAgICAvLyBhZGQgcGFkZGluZyB0b3AgdG8gc2hvdyBjb250ZW50IGJlaGluZCBuYXZiYXJcclxuICAgICAgICBuYXZiYXJfaGVpZ2h0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLm5hdmJhcicpLm9mZnNldEhlaWdodDtcclxuICAgICAgICBkb2N1bWVudC5ib2R5LnN0eWxlLnBhZGRpbmdUb3AgPSBuYXZiYXJfaGVpZ2h0ICsgJ3B4JztcclxuXHRcdGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCduYXZiYXJfdG9wJykuY2xhc3NMaXN0LnJlbW92ZSgnYmctdHJhbnNwYXJlbnQnKTtcclxuXHRcdGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCduYXZiYXJfdG9wJykuY2xhc3NMaXN0LmFkZCgnYmctYmxldScpO1xyXG5cdFx0dG9wQnRuLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XHJcbiAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ25hdmJhcl90b3AnKS5jbGFzc0xpc3QucmVtb3ZlKCdmaXhlZC10b3AnKTtcclxuICAgICAgICAgLy8gcmVtb3ZlIHBhZGRpbmcgdG9wIGZyb20gYm9keVxyXG4gICAgICAgIGRvY3VtZW50LmJvZHkuc3R5bGUucGFkZGluZ1RvcCA9ICcwJztcclxuXHRcdGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCduYXZiYXJfdG9wJykuY2xhc3NMaXN0LmFkZCgnYmctdHJhbnNwYXJlbnQnKTtcclxuXHRcdGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCduYXZiYXJfdG9wJykuY2xhc3NMaXN0LnJlbW92ZSgnYmctYmxldScpO1xyXG5cdFx0dG9wQnRuLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcclxuICAgICAgfSBcclxuICB9KTtcclxuXHJcbiAgaWYgKHdpbmRvdy5pbm5lcldpZHRoID4gOTkyKSB7XHJcblxyXG5cdGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5uYXZiYXIgLm5hdi1pdGVtJykuZm9yRWFjaChmdW5jdGlvbihldmVyeWl0ZW0pe1xyXG5cclxuXHRcdGV2ZXJ5aXRlbS5hZGRFdmVudExpc3RlbmVyKCdtb3VzZW92ZXInLCBmdW5jdGlvbihlKXtcclxuXHJcblx0XHRcdGxldCBlbF9saW5rID0gdGhpcy5xdWVyeVNlbGVjdG9yKCdhW2RhdGEtYnMtdG9nZ2xlXScpO1xyXG5cclxuXHRcdFx0aWYoZWxfbGluayAhPSBudWxsKXtcclxuXHRcdFx0XHRsZXQgbmV4dEVsID0gZWxfbGluay5uZXh0RWxlbWVudFNpYmxpbmc7XHJcblx0XHRcdFx0ZWxfbGluay5jbGFzc0xpc3QuYWRkKCdzaG93Jyk7XHJcblx0XHRcdFx0bmV4dEVsLmNsYXNzTGlzdC5hZGQoJ3Nob3cnKTtcclxuXHRcdFx0fVxyXG5cclxuXHRcdH0pO1xyXG5cdFx0ZXZlcnlpdGVtLmFkZEV2ZW50TGlzdGVuZXIoJ21vdXNlbGVhdmUnLCBmdW5jdGlvbihlKXtcclxuXHRcdFx0bGV0IGVsX2xpbmsgPSB0aGlzLnF1ZXJ5U2VsZWN0b3IoJ2FbZGF0YS1icy10b2dnbGVdJyk7XHJcblxyXG5cdFx0XHRpZihlbF9saW5rICE9IG51bGwpe1xyXG5cdFx0XHRcdGxldCBuZXh0RWwgPSBlbF9saW5rLm5leHRFbGVtZW50U2libGluZztcclxuXHRcdFx0XHRlbF9saW5rLmNsYXNzTGlzdC5yZW1vdmUoJ3Nob3cnKTtcclxuXHRcdFx0XHRuZXh0RWwuY2xhc3NMaXN0LnJlbW92ZSgnc2hvdycpO1xyXG5cdFx0XHR9XHJcblxyXG5cclxuXHRcdH0pXHJcblx0fSk7XHJcblxyXG59XHJcbn0pO1xyXG5cclxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcclxuXHQkKCcubG9nby1wYXJ0ZW5haXJlcycpLnNsaWNrKHtcclxuXHRcdHNsaWRlc1RvU2hvdzogOSxcclxuXHRcdHNsaWRlc1RvU2Nyb2xsOiAxLFxyXG5cdFx0YXV0b3BsYXk6IHRydWUsXHJcblx0XHRhdXRvcGxheVNwZWVkOiAyMDAwLFxyXG5cdFx0YXJyb3dzOiBmYWxzZSxcclxuXHRcdHJlc3BvbnNpdmU6W1xyXG5cdFx0XHR7XHJcblx0XHRcdFx0YnJlYWtwb2ludDoxMDI0LFxyXG5cdFx0XHRcdHNldHRpbmdzOntcclxuXHRcdFx0XHRcdHNsaWRlc1RvU2hvdzogNixcclxuXHRcdFx0XHRcdHNsaWRlc1RvU2Nyb2xsOjEsXHJcblx0XHRcdFx0XHRJbmZpbml0ZTogdHJ1ZSxcclxuXHRcdFx0XHR9XHJcblx0XHRcdH0sXHJcblx0XHRcdHtcclxuXHRcdFx0XHRicmVha3BvaW50Ojc2OCxcclxuXHRcdFx0XHRzZXR0aW5nczp7XHJcblx0XHRcdFx0XHRzbGlkZXNUb1Nob3c6IDQsXHJcblx0XHRcdFx0XHRzbGlkZXNUb1Njcm9sbDoxLFxyXG5cdFx0XHRcdFx0SW5maW5pdGU6IHRydWUsXHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9LFxyXG5cdFx0XHR7XHJcblx0XHRcdFx0YnJlYWtwb2ludDo0ODAsXHJcblx0XHRcdFx0c2V0dGluZ3M6e1xyXG5cdFx0XHRcdFx0c2xpZGVzVG9TaG93OiAzLFxyXG5cdFx0XHRcdFx0c2xpZGVzVG9TY3JvbGw6MSxcclxuXHRcdFx0XHRcdEluZmluaXRlOiB0cnVlLFxyXG5cdFx0XHRcdH1cclxuXHRcdFx0fSxcclxuXHRcdF1cclxuXHR9KTtcclxuICB9KTtcclxuXHJcbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcclxuXHQkKFwiI2J0blRvVG9wXCIpLm9uKCdjbGljaycsIGZ1bmN0aW9uIHRvcEZ1bmN0aW9uKCkge1xyXG5cdFx0ZG9jdW1lbnQuYm9keS5zY3JvbGxUb3AgPSAwO1xyXG4gIFx0XHRkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQuc2Nyb2xsVG9wID0gMDtcclxuXHR9KVxyXG59KSIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJDb250cm9sbGVyIiwiZWxlbWVudCIsInRleHRDb250ZW50Iiwic3RhcnRTdGltdWx1c0FwcCIsImFwcCIsInJlcXVpcmUiLCJjb250ZXh0IiwiZG9jdW1lbnQiLCJhZGRFdmVudExpc3RlbmVyIiwidG9wQnRuIiwiZ2V0RWxlbWVudEJ5SWQiLCJ3aW5kb3ciLCJzY3JvbGxZIiwiY2xhc3NMaXN0IiwiYWRkIiwibmF2YmFyX2hlaWdodCIsInF1ZXJ5U2VsZWN0b3IiLCJvZmZzZXRIZWlnaHQiLCJib2R5Iiwic3R5bGUiLCJwYWRkaW5nVG9wIiwicmVtb3ZlIiwiZGlzcGxheSIsImlubmVyV2lkdGgiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9yRWFjaCIsImV2ZXJ5aXRlbSIsImUiLCJlbF9saW5rIiwibmV4dEVsIiwibmV4dEVsZW1lbnRTaWJsaW5nIiwiJCIsInJlYWR5Iiwic2xpY2siLCJzbGlkZXNUb1Nob3ciLCJzbGlkZXNUb1Njcm9sbCIsImF1dG9wbGF5IiwiYXV0b3BsYXlTcGVlZCIsImFycm93cyIsInJlc3BvbnNpdmUiLCJicmVha3BvaW50Iiwic2V0dGluZ3MiLCJJbmZpbml0ZSIsIm9uIiwidG9wRnVuY3Rpb24iLCJzY3JvbGxUb3AiLCJkb2N1bWVudEVsZW1lbnQiXSwic291cmNlUm9vdCI6IiJ9