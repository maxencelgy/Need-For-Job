const navbar = document.getElementById(".site-branding");

console.log(navbar);

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
