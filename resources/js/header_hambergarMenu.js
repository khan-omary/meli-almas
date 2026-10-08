document.addEventListener("DOMContentLoaded", function () {
    console.log("KHAN KHAN KHAN ")
    const hamburger = document.querySelector(".hamburger");
    const menuList = document.querySelector(".menu-list");

    const overlay = document.createElement("div");
    overlay.classList.add("menu-overlay");
    document.body.append(overlay);

    hamburger.addEventListener("click", function () {
        menuList.classList.toggle("open");
        overlay.classList.toggle("open");
    });

    overlay.addEventListener("click", function () {
        menuList.classList.remove("open");
        overlay.classList.remove("open");
    });

    menuList.querySelectorAll("a").forEach(function (link) {
        link.addEventListener("click", function () {
            menuList.classList.remove("open");
            overlay.classList.remove("open");
        });
    });
});
