/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
var dropdown = document.querySelector(".dropdown");
var dropbtn = document.querySelector(".dropdown-btn");
var droplist = document.querySelector(".dropdown-list");
dropdown.addEventListener("click", function () {
  dropdown.classList.toggle("active");
  setInterval(function () {
    dropdown.classList.add("show");
  }, 300);
});
/******/ })()
;