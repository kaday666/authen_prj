const dropdown = document.querySelector(".dropdown");
const dropbtn = document.querySelector(".dropdown-btn");
const droplist = document.querySelector(".dropdown-list");
dropdown.addEventListener("click", () => {
    dropdown.classList.toggle("active");
    setInterval(() => {
        dropdown.classList.add("show");
    }, 300);
});

