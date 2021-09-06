const dropdown = document.querySelector(".dropdown");
const dropbtn = document.querySelector(".dropdown-btn");

dropbtn.addEventListener("click", () => {
    dropdown.classList.toggle("active");
});
