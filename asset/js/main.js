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
