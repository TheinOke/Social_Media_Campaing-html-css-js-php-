const menubar = document.querySelector(".menubar");
const navtab = document.querySelector(".navtab");
const menuicon = document.querySelector(".menuicon");

menubar.addEventListener("click", function () {
  navtab.classList.toggle("active");
  menuicon.classList.toggle("fa-bars");
  menuicon.classList.toggle("fa-x");
});

const userbtn = document.querySelector(".user_btn");
const dropdown_menu = document.querySelector(".dropdown-menu");

userbtn.addEventListener("click", function () {
  dropdown_menu.classList.toggle("active");
});
