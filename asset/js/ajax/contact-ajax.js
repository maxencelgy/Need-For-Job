console.log("contact ajax js");
// ajax_contact_2
$(document).ready(function () {
  var cv = {};
  // console.log(cv);
  const formulaire1 = $("#formulaire1");
  const formulaire2 = $("#formulaire2");
  const formulaire3 = $("#formulaire3");
  const formulaire4 = $("#formulaire4");
  const formulaire5 = $("#formulaire5");
  const formulaire6 = $("#formulaire6");
  const formulaire7 = $("#formulaire7");
  const formulaire1Btn = $("#formulaire1Btn");
  const formulaire2Btn = $("#formulaire2Btn");
  const formulaire3Btn = $("#formulaire3Btn");
  const formulaire4Btn = $("#formulaire4Btn");
  const formulaire5Btn = $("#formulaire5Btn");
  const formulaire6Btn = $("#formulaire6Btn");

  formulaire1Btn.on("click", function (e) {
    e.preventDefault();
    // RECUPERATION INPUT
    const poste = $("#poste").val();
    cv.poste = $("#poste").val();
    const name = $("#nom").val();
    cv.name = $("#nom").val();
    const prenom = $("#prenom").val();
    cv.prenom = $("#prenom").val();
    const dob = $("#dob").val();
    cv.dob = $("#dob").val();
    const lieux = $("#lieux").val();
    cv.lieux = $("#lieux").val();
    // REMPLISSAGE
    // const img = document.querySelector("#imgProfil");
    const Poste = document.querySelector("#Poste");
    const nom = document.querySelector("#Nom");
    const date = document.querySelector("#Date_de_naissance");
    const adresse = document.querySelector("#adresse");

    // INJECTION DANS PAGE CV
    // img.src = `${profilVal}`;
    Poste.innerText = `${poste}`;
    nom.innerText = ` ${name} ${prenom}`;
    date.innerText = ` ${dob}`;
    adresse.innerText = ` ${lieux}`;
    // CACHER ANCIEN FORMULAIRE
    formulaire1.css("display", "none");
    formulaire2.css({ display: "flex", "flex-direction": "column" });
  });

  formulaire2Btn.on("click", function (e) {
    e.preventDefault();
    // RECUPERATION INPUT
    const number = $("#number").val();
    cv.number = $("#number").val();
    const mail = $("#mail").val();
    cv.mail = $("#mail").val();
    const perms = $("#perms").val();
    cv.perms = $("#perms").val();
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
    formulaire3.css({ display: "flex", "flex-direction": "column" });
  });
  // /////////////////////////////////////////////////////////////////////
  const formationAdd = $("#forma-add");
  // console.log(formationAdd);
  formationAdd.on("click", function (e) {
    e.preventDefault();

    $("#input3").append(
      '<label for="date">Date : </label><br><input type="text" name="date[]" class="date" value=""></input><br><label for="formation">Formation : </label><br><input type="text" name="formation[]" class="formation" value=""></input><br>'
    );
  });

  formulaire3Btn.on("click", function (e) {
    e.preventDefault();

    const input3 = document.querySelectorAll(".date");
    // console.log(input3);
    cv.dateVal = [];
    input3.forEach((element) => {
      let dateVal = element.value;
      cv.dateVal.push(element.value);
      $(".date_formation_cv").append("<p>" + dateVal + "</p>");
    });

    const formation3 = document.querySelectorAll(".formation");
    cv.formation = [];
    formation3.forEach((element) => {
      let formation = element.value;
      cv.formation.push(element.value);
      $(".formation_faites_cv").append("<h2>" + formation + "</h2>");
    });

    // CACHER ANCIEN FORMULAIRE
    formulaire3.css("display", "none");
    formulaire4.css({ display: "flex", "flex-direction": "column" });
  });

  // ////////////////////////////////////////

  const formationAddExperience = $("#forma-add-experience");
  // console.log(formationAddExperience);

  formationAddExperience.on("click", function (e) {
    e.preventDefault();

    $("#input4").append(
      '<label for="date-exp">Date : </label><br><input type="text" name="date-exp[]" class="date-exp" value=""></input><br><label for="experience">Experience : </label><br><input type="text" name="experienceIn[]" class="experienceIn" value=""></input><br>'
    );
  });

  formulaire4Btn.on("click", function (e) {
    e.preventDefault();
    const input4 = document.querySelectorAll(".date-exp");
    cv.dateExp = [];
    input4.forEach((element) => {
      let dateExp = element.value;
      cv.dateExp.push(element.value);
      $(".date_experience").append("<p>" + dateExp + "</p>");
    });

    const experience4 = document.querySelectorAll(".experienceIn");
    cv.experienceVal = [];
    experience4.forEach((element) => {
      let experienceVal = element.value;
      cv.experienceVal.push(element.value);
      $(".experience").append("<h2>" + experienceVal + "</h2>");
    });

    // CACHER ANCIEN FORMULAIRE
    formulaire4.css("display", "none");
    formulaire5.css({ display: "flex", "flex-direction": "column" });
  });
  // ////////////////////////////////////////////////

  const formationAddLangue = $("#forma-add-langue");
  // console.log(formationAddLangue);

  formationAddLangue.on("click", function (e) {
    e.preventDefault();

    $("#input5").append(
      '<label for="langue">Langue : </label><br><input type="text" name="langue[]" class="langue" value=""></input><br><label for="niveau">Niveau : </label><br><input type="text" name="niveau[]" class="niveau" value=""></input><br>'
    );
  });

  formulaire5Btn.on("click", function (e) {
    e.preventDefault();

    const input5 = document.querySelectorAll(".langue");
    cv.langue = [];
    input5.forEach((element) => {
      let langue = element.value;
      cv.langue.push(element.value);
      $(".langues").append("<p>" + langue + "</p>");
    });

    const niveau = document.querySelectorAll(".niveau");
    cv.niveau = [];
    niveau.forEach((element) => {
      let level = element.value;
      cv.niveau.push(element.value);
      $(".niveau_langues").append("<h2>" + level + "</h2>");
    });

    // CACHER ANCIEN FORMULAIRE
    formulaire5.css("display", "none");
    formulaire6.css({ display: "flex", "flex-direction": "column" });
  });
  // ///////////////////////////////////////////
  const formationAddLoisir = $("#forma-add-loisir");
  // console.log(formationAddLoisir);

  formationAddLoisir.on("click", function (e) {
    e.preventDefault();

    $("#input6").append(
      '<label for="loisir">Loisir : </label><br><input type="text" name="loisir[]" class="loisir" value=""></input><br>'
    );
  });

  formulaire6Btn.on("click", function (e) {
    e.preventDefault();
    cv.loisir = [];
    const input6 = document.querySelectorAll(".loisir");
    input6.forEach((element) => {
      let loisir = element.value;
      cv.loisir.push(element.value);
      $(".loisirs").append("<p>" + loisir + "</p>");
    });

    // console.log(cv);
    // CACHER ANCIEN FORMULAIRE
    formulaire6.css("display", "none");
    formulaire7.css("display", "block");
  });
  const formulaire = $("#formulaire");
  formulaire.on("submit", function (e) {
    e.preventDefault();
    const userID = document.querySelector("#userID");
    const userId = userID.innerHTML;
    const themeID = document.querySelector("#themeID");
    const themeId = themeID.innerHTML;
    const posteID = document.querySelector("#Poste");
    const posteId = posteID.innerHTML;

    // console.log(JSON.stringify(cv));

    let newcv = JSON.stringify([cv]);
    $.ajax({
      url: ajaxUrl,
      type: "POST",
      dataType: "json",

      data: {
        action: "ajax_contact_2",
        userId: userId,
        themeId: themeId,
        posteId: posteId,
        dataaa: newcv,
      },
      beforeSend: function () {
        console.log("start ajax contact");
        formulaire.children("input[type=submit]").prop("disabled", true);
      },
      success: function (res) {
        // console.log(res);
        if (res.success) {
          let profil = "http://localhost/NFJ/profil/";
          window.location = profil;
        }
      },
    });
  });
});
