let menuIcon = document.getElementById("plate2");
let navLinks = document.getElementById("navLinks");
let erreurDiv = document.getElementById("erreur");
let fineDiv = document.getElementById("fine");

if (navigator.userAgent.indexOf("Firefox") != -1 || navigator.userAgent.indexOf("Safari") != -1 || navigator.userAgent.indexOf("Apple") != -1) {
  menuIcon.classList.remove("burger");
}

menuIcon.addEventListener("click", function () {
    navLinks.classList.toggle("_yd_fade_visible");
    navLinks.classList.toggle("_yd_fade_invisible");
});

window.onload = () => {
  var url_string = window.location.href;
  var url = new URL(url_string);
  var fine = url.searchParams.get("fine");
  var erreur = url.searchParams.get("erreur");
  if(erreur){
    erreurDiv.classList.remove("_yd_fade_invisible_popup");
    erreurDiv.classList.add("_yd_fade_invisible_popup_placement");
    setTimeout(() => {
      erreurDiv.classList.add("_yd_fade_invisible_popup");
    }, 5000);
  } else if (fine){
    fineDiv.classList.remove("_yd_fade_invisible_popup");
    fineDiv.classList.add("_yd_fade_invisible_popup_placement");
    setTimeout(() => {
      fineDiv.classList.add("_yd_fade_invisible_popup");
    }, 5000);
  }
};


