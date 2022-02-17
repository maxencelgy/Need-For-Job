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
  .typeString("Votre génerateur de CV en ligne ! 😁")
  .pauseFor(700)
  .start();



const txtAnimation = document.getElementById("typer_2");
new Typewriter(txtAnimation, {
  deleteSpeed: 55,
})
    .changeDelay(105)
    .typeString("Bienvenue sur la partie recruteur ! 😁")
    .pauseFor(700)
    .start();


const discover = document.querySelectorAll(".discover");
const discoverTwo = document.querySelectorAll(".discoverTwo");
// console.log(discoverTwo);
const message = document.querySelector(".message");

discover.forEach((elements) => {
  elements.addEventListener("click", function (e) {
    e.preventDefault();
    message.style.display = "block";
  });
});

discoverTwo.forEach((elements) => {
  elements.addEventListener("click", function (e) {
    message.style.display = "block";
  });
});
console.log(message);

