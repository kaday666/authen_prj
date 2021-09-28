const dropdown = document.querySelector(".dropdown");
const dropbtn = document.querySelector(".dropdown-btn");
const droplist = document.querySelector(".dropdown-list");
dropdown.addEventListener("click", () => {
    dropdown.classList.toggle("active");
    setInterval(() => {
        dropdown.classList.add("show");
    }, 300);
});


const openNav = document.querySelector(".btn-open");
const closeNav = document.querySelector(".btn-close");

const nav = document.querySelector(".nav");

openNav.addEventListener("click", function () {
    nav.classList.add("visible");
});
closeNav.addEventListener("click", function () {
    nav.classList.remove("visible");
});

//loader
let loader = document.querySelector(".loader-warp");
window.addEventListener("load", function () {
    loader.style.display = "none";
});