jQuery(document).ready(function ($) {
  $(".flexslider").flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 210,
    itemMargin: 50,
  });
});

const slides = document.querySelector(".slides");
const filter = slides.querySelector(".filter");

console.log(slides);

slides.addEventListener("mouseover", (event) => {
  filter.style.display = "block";
});
slides.addEventListener("mouseleave", (event) => {
  filter.style.display = "none";
});
