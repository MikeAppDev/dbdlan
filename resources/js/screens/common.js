export default {
    init() {
        console.log('chouet');
        const burger = document.querySelector(".burger");
        const navMenu = document.querySelector(".nav-menu");


    burger.addEventListener("click", () => {
    burger.classList.toggle("active");
    navMenu.classList.toggle("active");
    console.log("active menu");
    })

    document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
        burger.classList.remove("active");
        navMenu.classList.remove("active");
        console.log("fermeture au click li");
    }))
    }
}