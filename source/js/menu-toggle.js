const closeButton = document.getElementById("menu-close-button");
const openButton = document.getElementById("menu-open-button");
const navMenu = document.getElementById("nav-menu-items");

closeButton.addEventListener("click", function() {
  navMenu.classList.add("main-nav--mobile-hidden");
  openButton.classList.remove("main-nav--mobile-hidden");
  closeButton.classList.add("main-nav--mobile-hidden");
});

openButton.addEventListener("click", function() {
  openButton.classList.add("main-nav--mobile-hidden");
  closeButton.classList.remove("main-nav--mobile-hidden")
  navMenu.classList.remove("main-nav--mobile-hidden");
});
