/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/script.js":
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
/***/ (() => {

eval("var dropdown = document.querySelector(\".dropdown\");\nvar dropbtn = document.querySelector(\".dropdown-btn\");\nvar droplist = document.querySelector(\".dropdown-list\");\ndropdown.addEventListener(\"click\", function () {\n  dropdown.classList.toggle(\"active\");\n  setInterval(function () {\n    dropdown.classList.add(\"show\");\n  }, 300);\n});\nvar openNav = document.querySelector(\".btn-open\");\nvar closeNav = document.querySelector(\".btn-close\");\nvar nav = document.querySelector(\".nav\");\nopenNav.addEventListener(\"click\", function () {\n  nav.classList.add(\"visible\");\n});\ncloseNav.addEventListener(\"click\", function () {\n  nav.classList.remove(\"visible\");\n}); //loader\n\nvar loader = document.querySelector(\".loader-warp\");\nwindow.addEventListener(\"load\", function () {\n  loader.style.display = \"none\";\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2NyaXB0LmpzPzg3MzMiXSwibmFtZXMiOlsiZHJvcGRvd24iLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJkcm9wYnRuIiwiZHJvcGxpc3QiLCJhZGRFdmVudExpc3RlbmVyIiwiY2xhc3NMaXN0IiwidG9nZ2xlIiwic2V0SW50ZXJ2YWwiLCJhZGQiLCJvcGVuTmF2IiwiY2xvc2VOYXYiLCJuYXYiLCJyZW1vdmUiLCJsb2FkZXIiLCJ3aW5kb3ciLCJzdHlsZSIsImRpc3BsYXkiXSwibWFwcGluZ3MiOiJBQUFBLElBQU1BLFFBQVEsR0FBR0MsUUFBUSxDQUFDQyxhQUFULENBQXVCLFdBQXZCLENBQWpCO0FBQ0EsSUFBTUMsT0FBTyxHQUFHRixRQUFRLENBQUNDLGFBQVQsQ0FBdUIsZUFBdkIsQ0FBaEI7QUFDQSxJQUFNRSxRQUFRLEdBQUdILFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixnQkFBdkIsQ0FBakI7QUFDQUYsUUFBUSxDQUFDSyxnQkFBVCxDQUEwQixPQUExQixFQUFtQyxZQUFNO0FBQ3JDTCxFQUFBQSxRQUFRLENBQUNNLFNBQVQsQ0FBbUJDLE1BQW5CLENBQTBCLFFBQTFCO0FBQ0FDLEVBQUFBLFdBQVcsQ0FBQyxZQUFNO0FBQ2RSLElBQUFBLFFBQVEsQ0FBQ00sU0FBVCxDQUFtQkcsR0FBbkIsQ0FBdUIsTUFBdkI7QUFDSCxHQUZVLEVBRVIsR0FGUSxDQUFYO0FBR0gsQ0FMRDtBQVFBLElBQU1DLE9BQU8sR0FBR1QsUUFBUSxDQUFDQyxhQUFULENBQXVCLFdBQXZCLENBQWhCO0FBQ0EsSUFBTVMsUUFBUSxHQUFHVixRQUFRLENBQUNDLGFBQVQsQ0FBdUIsWUFBdkIsQ0FBakI7QUFFQSxJQUFNVSxHQUFHLEdBQUdYLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixNQUF2QixDQUFaO0FBRUFRLE9BQU8sQ0FBQ0wsZ0JBQVIsQ0FBeUIsT0FBekIsRUFBa0MsWUFBWTtBQUMxQ08sRUFBQUEsR0FBRyxDQUFDTixTQUFKLENBQWNHLEdBQWQsQ0FBa0IsU0FBbEI7QUFDSCxDQUZEO0FBR0FFLFFBQVEsQ0FBQ04sZ0JBQVQsQ0FBMEIsT0FBMUIsRUFBbUMsWUFBWTtBQUMzQ08sRUFBQUEsR0FBRyxDQUFDTixTQUFKLENBQWNPLE1BQWQsQ0FBcUIsU0FBckI7QUFDSCxDQUZELEUsQ0FJQTs7QUFDQSxJQUFJQyxNQUFNLEdBQUdiLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixjQUF2QixDQUFiO0FBQ0FhLE1BQU0sQ0FBQ1YsZ0JBQVAsQ0FBd0IsTUFBeEIsRUFBZ0MsWUFBWTtBQUN4Q1MsRUFBQUEsTUFBTSxDQUFDRSxLQUFQLENBQWFDLE9BQWIsR0FBdUIsTUFBdkI7QUFDSCxDQUZEIiwic291cmNlc0NvbnRlbnQiOlsiY29uc3QgZHJvcGRvd24gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmRyb3Bkb3duXCIpO1xyXG5jb25zdCBkcm9wYnRuID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5kcm9wZG93bi1idG5cIik7XHJcbmNvbnN0IGRyb3BsaXN0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5kcm9wZG93bi1saXN0XCIpO1xyXG5kcm9wZG93bi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKCkgPT4ge1xyXG4gICAgZHJvcGRvd24uY2xhc3NMaXN0LnRvZ2dsZShcImFjdGl2ZVwiKTtcclxuICAgIHNldEludGVydmFsKCgpID0+IHtcclxuICAgICAgICBkcm9wZG93bi5jbGFzc0xpc3QuYWRkKFwic2hvd1wiKTtcclxuICAgIH0sIDMwMCk7XHJcbn0pO1xyXG5cclxuXHJcbmNvbnN0IG9wZW5OYXYgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmJ0bi1vcGVuXCIpO1xyXG5jb25zdCBjbG9zZU5hdiA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuYnRuLWNsb3NlXCIpO1xyXG5cclxuY29uc3QgbmF2ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5uYXZcIik7XHJcblxyXG5vcGVuTmF2LmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBmdW5jdGlvbiAoKSB7XHJcbiAgICBuYXYuY2xhc3NMaXN0LmFkZChcInZpc2libGVcIik7XHJcbn0pO1xyXG5jbG9zZU5hdi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgZnVuY3Rpb24gKCkge1xyXG4gICAgbmF2LmNsYXNzTGlzdC5yZW1vdmUoXCJ2aXNpYmxlXCIpO1xyXG59KTtcclxuXHJcbi8vbG9hZGVyXHJcbmxldCBsb2FkZXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmxvYWRlci13YXJwXCIpO1xyXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcihcImxvYWRcIiwgZnVuY3Rpb24gKCkge1xyXG4gICAgbG9hZGVyLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcclxufSk7Il0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9zY3JpcHQuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/script.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/script.js"]();
/******/ 	
/******/ })()
;