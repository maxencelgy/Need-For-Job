const wrap = document.querySelector('.wrap_card')
const cardImg = document.querySelectorAll('.card')
const plus = document.querySelector('.card_plus')


cardImg.forEach((elements) => {
    elements.addEventListener("mouseenter", function (e) {
        e.preventDefault();
        console.log('oui');
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
