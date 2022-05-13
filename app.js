const toTop = document.querySelector(".toTop");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 500) {
        toTop.classList.add("active");
    } else {
        toTop.classList.remove("active");
    }
})