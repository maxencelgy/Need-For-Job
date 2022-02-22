<?php

session_start();

if (!empty(is_user_logged_in())) {
    $user = wp_get_current_user();
    $user_id = get_current_user_id();
    $user_meta = get_user_meta($user_id);
}


get_header();

?>

<section id="single_blog">
    <div class="wrapBlog">
        <?php
        while (have_posts()) :
            the_post();
        ?>
            <div class="left">
                <form id="formulaire" class="wrapform" action="" method="POST" novalidate>


                    <div id="formulaire1">
                        <p id="userID"><?= $user_id ?></p>
                        <label for="nom">Nom :</label>
                        <input type="text" name="nom" id="nom" value="">

                        <label for="prenom">Prenom :</label>
                        <input type="text" name="prenom" id="prenom" value="">

                        <label for="dob">Date de naissance : </label>
                        <input type="text" name="dob" id="dob" value="">

                        <label for="lieux">Adresse : </label>
                        <textarea name="lieux" id="lieux" cols="30" rows="10"></textarea>
                        <button id="formulaire1Btn">Suivant</button>
                    </div>

                    <div id="formulaire2">
                        <label for="number">Numéro de télphone :</label>
                        <input type="text" name="number" id="number" value="">
                        <label for="mail">Adresse email :</label>
                        <input type="mail" name="mail" id="mail" value="">
                        <label for="perms">Permis : </label>
                        <input type="text" name="perms" id="perms" value="">
                        <button id="formulaire2Btn">Suivant</button>
                    </div>

                    <div id="formulaire3">
                        <div id="input3"></div>
                        <button id="forma-add" class="btnADD">Ajouter une formation</button>
                        <button id="formulaire3Btn">Suivant</button>
                    </div>

                    <div id="formulaire4">
                        <div id="input4"></div>
                        <button id="forma-add-experience" class="btnADD">Ajouter une experience</button>
                        <button id="formulaire4Btn">Suivant</button>
                    </div>

                    <div id="formulaire5">
                        <div id="input5"></div>
                        <button id="forma-add-langue" class="btnADD">Ajouter une langue</button>
                        <button id="formulaire5Btn">Suivant</button>
                    </div>
                    <div id="formulaire6">
                        <div id="input6"></div>
                        <button id="forma-add-loisir" class="btnADD">Ajouter un loisir</button>
                        <button id="formulaire6Btn">Suivant</button>
                    </div>

                    <div id="formulaire7">
                        <h2>Merci d'avoir utiliser notre génerateur de CV</h2>
                        <p>Vous pouvez maintenant affiche votre CV sur votre profil ou le télecharger au format pdf</p>
                        <a href="javascript:void(0)" class="btn-download">Download PDF </a>
                        <input type="submit" name="submitted" value="Ajouter à mon profil">
                    </div>

                </form>

            </div>
            <div class="right">
                <?php include_once(get_the_content());  ?>
            </div>
        <?php
        endwhile; // End of the loop.
        ?>
    </div>
    <div class="download">
        <a href="javascript:void(0)" class="btn-download">Download PDF </a>
        <a href="" class="btn-add">Ajouter à mon profil</a>

    </div>

</section>


<?php
// get_sidebar();
get_footer();
