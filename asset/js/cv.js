// /////////////////////////////////////////////////////////////////////////////////

$(document).ready(function () {
  const formulaire = $("#formulaire");
  const formulaire2 = $("#formulaire2");
  const formulaire3 = $("#formulaire3");
  const formulaire4 = $("#formulaire4");

  formulaire.on("submit", function (e) {
    e.preventDefault();

    // RECUPERATION INPUT
    const name = $("#name").val();
    const prenom = $("#prenom").val();
    const age = $("#age").val();
    const lieux = $("#lieux").val();
    // REMPLISSAGE
    const nom = document.querySelector("#Nom");
    const date = document.querySelector("#Date_de_naissance");
    const adresse = document.querySelector("#adresse");

    // INJECTION DANS PAGE CV
    nom.innerText = ` ${name} ${prenom}`;
    date.innerText = ` ${age}`;
    adresse.innerText = ` ${lieux}`;
    // CACHER ANCIEN FORMULAIRE
    formulaire.css("display", "none");
    formulaire2.css("display", "block");
  });

  formulaire2.on("submit", function (e) {
    e.preventDefault();
    // RECUPERATION INPUT
    const number = $("#number").val();
    const mail = $("#mail").val();
    const perms = $("#perms").val();
    // REMPLISSAGE
    const numero = document.querySelector("#numero");
    const adresse_mail = document.querySelector("#adresse_mail");
    const permis = document.querySelector("#permis");
    // INJECTION DANS PAGE CV
    numero.innerText = ` ${number}`;
    adresse_mail.innerText = `${mail}`;
    permis.innerText = `${perms}`;
    // CACHER ANCIEN FORMULAIRE
    formulaire2.css("display", "none");
    formulaire3.css("display", "block");
  });
  // /////////////////////////////////////////////////////////////////////
  const formationAdd = $("#forma-add");
  // console.log(formationAdd);

  formationAdd.on("click", function (e) {
    e.preventDefault();

    $("#input3").append(
      '<label for="date">Date : </label><input type="text" name="date" class="date" value=""></input>  <label for="formation">Formation(s) : </label><input type="text" name="formation" class="formation" value=""></input>'
    );
  });

  formulaire3.on("submit", function (e) {
    e.preventDefault();

    const input3 = document.querySelectorAll(".date");
    input3.forEach((element) => {
      let dateVal = element.value;
      $(".date_formation_cv").append("<p>" + dateVal + "</p>");
    });

    const formation3 = document.querySelectorAll(".formation");

    formation3.forEach((element) => {
      let formation = element.value;
      $(".formation_faites_cv").append("<h2>" + formation + "</h2>");
    });

    // CACHER ANCIEN FORMULAIRE
    formulaire3.css("display", "none");
    formulaire4.css("display", "block");
  });

  // ////////////////////////////////////////

  //   const formationAdd = $("#forma-add");
  //   console.log(formationAdd);

  //   formationAdd.on("click", function (e) {
  //     e.preventDefault();

  //     $("#input3").append(
  //       '<label for="date">Date : </label><input type="text" name="date" class="date" value=""></input>  <label for="formation">Formation(s) : </label><input type="text" name="formation" class="formation" value=""></input>'
  //     );
  //   });

  //   formulaire4.on("submit", function (e) {
  //     e.preventDefault();

  //     const input3 = document.querySelectorAll(".date");
  //     input3.forEach((element) => {
  //       let dateVal = element.value;
  //       $(".date_formation_cv").append("<p>" + dateVal + "</p>");
  //     });

  //     const formation3 = document.querySelectorAll(".formation");

  //     formation3.forEach((element) => {
  //       let formation = element.value;
  //       $(".formation_faites_cv").append("<h2>" + formation + "</h2>");
  //     });

  //     // CACHER ANCIEN FORMULAIRE
  //     formulaire3.css("display", "none");
  //     formulaire4.css("display", "block");
  //   });
});

// const subject = document.getElementById("subject");
// console.log(subject.value );

// const valeur = document.querySelector("#subject");

// valeur.addEventListener("keyup", function () {
//   const name = document.getElementById("name");
//   let tableau = valeur.value.split("");
//   let tableauMaxLenght = valeur.value.split("").length;
//   let valueLastIndex = tableau[tableauMaxLenght - 1];
//   console.log(valueLastIndex);
//   // console.log(tableau);
//   console.log(tableauMaxLenght);
//   // let cara = valeur.value;
//   // console.log(cara);

//   name.innerText += `${valueLastIndex}`;
// });

// valeur.addEventListener("keydown", function () {
//   console.log(valeur.value.wich);
// });

// **************************************************************

// $(document).ready(function () {
//   //Change la couleur de fond du champ en bleu dès qu'une touche est pressée
//   //et affiche le code de la dernière touche pressée
//   $("#texte").keydown(function (event) {
//     $(this).css("background-color", "lightBlue");
//     // console.log(event);

//     // $("#name").append(event.key);

//     // console.log($("#name")[0].innerHTML);

//     // text = $("#name")[0].html;

//     // console.log(text);

//     if (event.key == "Backspace") {
//       console.log("cc");
//       $("#name").append(slice(0, -1));
//     } else {
//       $("#name").append(event.key);
//     }
//   });

//   //Change la couleur de fond du champ en jaune dès qu'une touche est pressée
//   $("#texte").keyup(function () {
//     $(this).css("background-color", "yellow");
//   });
// });
