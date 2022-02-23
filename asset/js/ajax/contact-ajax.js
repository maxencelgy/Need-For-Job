console.log("contact ajax js");
// ajax_contact_2
$(document).ready(function () {
  const formulaire = $("#formulaire");
  formulaire.on("submit", function (e) {
    e.preventDefault();
    const userID = document.querySelector("#userID");
    const userId = userID.innerHTML;
    const themeID = document.querySelector("#themeID");
    const themeId = themeID.innerHTML;
    const poste = $("#poste").val();
    const nom = $("#nom").val();
    const prenom = $("#prenom").val();
    const dob = $("#dob").val();
    const lieux = $("#lieux").val();
    const number = $("#number").val();
    const mail = $("#mail").val();
    const perms = $("#perms").val();
    const dateFormation = $(".date").val();
    const formation = $(".formation").val();
    const dateExp = $(".date-exp").val();
    const experience = $(".experienceIn").val();
    const langue = $(".langue").val();
    const niveau = $(".niveau").val();
    const loisir = $(".loisir").val();

    $.ajax({
      url: ajaxUrl,
      type: "POST",
      data: {
        action: "ajax_contact_2",
        userId: userId,
        themeId: themeId,
        // profilVal: profilVal,
        poste: poste,
        nom: nom,
        prenom: prenom,
        dob: dob,
        lieux: lieux,
        number: number,
        mail: mail,
        perms: perms,
        dateFormation: dateFormation,
        formation: formation,
        dateExp: dateExp,
        experience: experience,
        langue: langue,
        niveau: niveau,
        loisir: loisir,
      },
      beforeSend: function () {
        console.log("start ajax contact");
        formulaire.children("input[type=submit]").prop("disabled", true);
      },
      success: function (res) {
        if (res.success) {
          let profil = "http://localhost/NFJ/profil/";
          window.location = profil;
        }
      },
    });
  });
});
