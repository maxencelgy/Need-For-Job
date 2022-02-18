// /////////////////////////////////////////////////////////////////////////////////
console.log("coucou cv");
$(document).ready(function () {
  const formulaire = $("#formulaire");
  const formulaire2 = $("#formulaire2");
  const formulaire3 = $("#formulaire3");
  const formulaire4 = $("#formulaire4");
  const formulaire5 = $("#formulaire5");
  const formulaire6 = $("#formulaire6");
  const formulaire7 = $("#formulaire7");

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
    formulaire2.css("display", "flex");
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
    formulaire3.css("display", "flex");
  });
  // /////////////////////////////////////////////////////////////////////
  const formationAdd = $("#forma-add");
  // console.log(formationAdd);
  formationAdd.on("click", function (e) {
    e.preventDefault();

    $("#input3").append(
      '<label for="date">Date : </label><br><input type="text" name="date" class="date" value=""></input><br><label for="formation">Formation : </label><br><input type="text" name="formation" class="formation" value=""></input><br>'
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
    formulaire4.css("display", "flex");
  });

  // ////////////////////////////////////////

  const formationAddExperience = $("#forma-add-experience");
  console.log(formationAddExperience);

  formationAddExperience.on("click", function (e) {
    e.preventDefault();

    $("#input4").append(
      '<label for="date-exp">Date : </label><br><input type="text" name="date-exp" class="date-exp" value=""></input><br><label for="experience">Experience : </label><br><input type="text" name="experienceIn" class="experienceIn" value=""></input><br>'
    );
  });

  formulaire4.on("submit", function (e) {
    e.preventDefault();
    const input4 = document.querySelectorAll(".date-exp");
    input4.forEach((element) => {
      let dateExp = element.value;
      $(".date_experience").append("<p>" + dateExp + "</p>");
    });

    const experience4 = document.querySelectorAll(".experienceIn");
    experience4.forEach((element) => {
      let experienceVal = element.value;
      $(".experience").append("<h2>" + experienceVal + "</h2>");
    });

    // CACHER ANCIEN FORMULAIRE
    formulaire4.css("display", "none");
    formulaire5.css("display", "flex");
  });
  // ////////////////////////////////////////////////

  const formationAddLangue = $("#forma-add-langue");
  console.log(formationAddLangue);

  formationAddLangue.on("click", function (e) {
    e.preventDefault();

    $("#input5").append(
      '<label for="langue">Langue : </label><br><input type="text" name="langue" class="langue" value=""></input><br><label for="niveau">Niveau : </label><br><input type="text" name="niveau" class="niveau" value=""></input><br>'
    );
  });

  formulaire5.on("submit", function (e) {
    e.preventDefault();

    const input5 = document.querySelectorAll(".langue");
    input5.forEach((element) => {
      let langue = element.value;
      $(".langues").append("<p>" + langue + "</p>");
    });

    const niveau = document.querySelectorAll(".niveau");
    niveau.forEach((element) => {
      let level = element.value;
      $(".niveau_langues").append("<h2>" + level + "</h2>");
    });

    // CACHER ANCIEN FORMULAIRE
    formulaire5.css("display", "none");
    formulaire6.css("display", "flex");
  });
  // ///////////////////////////////////////////
  const formationAddLoisir = $("#forma-add-loisir");
  console.log(formationAddLoisir);

  formationAddLoisir.on("click", function (e) {
    e.preventDefault();

    $("#input6").append(
      '<label for="loisir">Loisir : </label><br><input type="text" name="loisir" class="loisir" value=""></input><br>'
    );
  });

  formulaire6.on("submit", function (e) {
    e.preventDefault();

    const input6 = document.querySelectorAll(".loisir");
    input6.forEach((element) => {
      let loisir = element.value;
      $(".loisirs").append("<p>" + loisir + "</p>");
    });

    // CACHER ANCIEN FORMULAIRE
    formulaire6.css("display", "none");
    formulaire7.css("display", "block");
  });
});

const options = {
  filename: "cv.pdf",
  image: {
    type: "png",
    quality: 800,
  },
  html2canvas: {
    scale: 1,
  },
  jsPDF: {
    format: "a4",
    unit: "in",
    format: "letter",
    orientation: "portrait",
  },
};

$(".btn-download").click(function (e) {
  e.preventDefault();
  const element = document.getElementById("invoice");
  html2pdf().from(element).set(options).save();
});

function printDiv(divName) {
  var printContents = document.getElementById(divName).innerHTML;
  var originalContents = document.body.innerHTML;

  document.body.innerHTML = printContents;

  window.print();
  document.body.innerHTML = originalContents;
}
