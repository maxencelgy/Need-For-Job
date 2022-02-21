<?php

/* Template Name: CVTEST2 */


get_header() ?>
<form id="formulaire" class="wrapform" action="" method="POST" novalidate>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="">

    <label for="prenom">Prenom :</label>
    <input type="text" name="prenom" id="prenom" value="">

    <label for="dob">Date de naissance : </label>
    <input type="text" name="dob" id="dob" value="">

    <label for="lieux">Adresse : </label>
    <textarea name="lieux" id="lieux" cols="30" rows="10"></textarea>


    <input type="submit" name="submitted" value="Suivant">
</form>

<?php

get_footer();
