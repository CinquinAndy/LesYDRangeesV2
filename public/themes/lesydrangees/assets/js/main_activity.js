let menuIcon = document.getElementById("plate2");
let navLinks = document.getElementById("navLinks");

if (navigator.userAgent.indexOf("Firefox") != -1 || navigator.userAgent.indexOf("Safari") != -1 || navigator.userAgent.indexOf("Apple") != -1) {
  menuIcon.classList.remove("burger");
}

menuIcon.addEventListener("click", function () {
  navLinks.classList.toggle("_yd_fade_visible");
  navLinks.classList.toggle("_yd_fade_invisible");
});


window.onload = () => {
    AOS.init({
        duration: 800, // values from 0 to 3000, with step 50ms
    });
};
