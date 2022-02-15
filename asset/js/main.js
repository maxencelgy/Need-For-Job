const wrap = document.querySelector(".wrap_card");
const cardImg = document.querySelectorAll(".card");
const plus = document.querySelector(".card_plus");

cardImg.forEach((elements) => {
  elements.addEventListener("mouseenter", function (e) {
    const span = document.querySelector(".card_plus");
    span.style.display = "block";
  });

  elements.addEventListener("mouseleave", function (e) {
    const span = document.querySelector(".card_plus");
    span.style.display = "none";
  });
});
console.log("salut main");

AOS.init();

const txtAnim = document.getElementById("typer");
new Typewriter(txtAnim, {
  deleteSpeed: 55,
})
  .changeDelay(105)
  .typeString("Votre génerateur de CV en ligne !")
  .pauseFor(700)
  .start();
