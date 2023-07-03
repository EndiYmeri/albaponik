const burgerButton = document.querySelector("#burger-menu");
const mobileMenu = document.querySelector("#mobile-menu");
const body = document.querySelector("body");

burgerButton.addEventListener("click", () => {
    burgerButton.classList.toggle("open");
    mobileMenu.classList.toggle("open");
    body.classList.toggle("overflow-hidden");
    // body.classList.toggle("overscroll-none");
});
