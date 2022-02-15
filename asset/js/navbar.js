// console.log("cc");

const navbar = document.getElementById(".site-branding");

// console.log(navbar);

// const header = document.getElementsByTagName("HEADER");

window.onload = function () {
  document.getElementsByTagName("HEADER")[0].style.position = "fixed";
  document.getElementsByTagName("HEADER")[0].style.backgroundColor =
    "transparent";
};

$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 50) {
      $(".site-branding").css("background", "#2c3338");
    } else {
      $(".site-branding").css("background", "transparent");
    }
  });
});
