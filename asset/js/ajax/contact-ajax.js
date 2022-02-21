console.log("contact ajax js");
// ajax_contact_2
$(document).ready(function () {
  const formulaire = $("#formulaire");

  formulaire.on("submit", function (e) {
    e.preventDefault();
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
        loisir: loisir
      },
      beforeSend: function () {
        console.log("start ajax contact");
        formulaire.children("input[type=submit]").prop("disabled", true);
      },
      success: function (res) {
        if (res.success) {
          formulaire.fadeOut(1000, function () {
            $("#success").fadeIn(1000);
          });
        }
      },
    });
  });
});
