<?php

session_start();
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
                    <label for="name">Nom :</label>
                    <input type="text" name="name" id="name" value="">

                    <label for="name">Prenom :</label>
                    <input type="text" name="prenom" id="prenom" value="">

                    <label for="age">Date de naissance : </label>
                    <input type="text" name="age" id="age" value="">

                    <label for="lieux">Adresse : </label>
                    <textarea name="" id="lieux" cols="30" rows="10"></textarea>

                    <input type="submit" name="submitted" value="Suivant">
                </form>
                <!-- FORMULAIRE -->
                <form id="formulaire2" class="wrapform formulaireAll" action="" method="POST" novalidate>
                    <label for="number">Numéro de télphone :</label>
                    <input type="text" name="number" id="number" value="">

                    <label for="mail">Adresse email :</label>
                    <input type="mail" name="mail" id="mail" value="">

                    <label for="perms">Permis : </label>
                    <input type="text" name="perms" id="perms" value="">

                    <input type="submit" name="submitted" value="Suivant">
                </form>
                <!-- FORMULAIRE -->
                <form id="formulaire3" class="wrapform" action="" method="POST" novalidate>
                    <div id="input3"></div>
                    <button id="forma-add" class="btnADD">Ajouter une formation</button>
                    <input type="submit" name="submitted" value="Suivant">
                </form>
                <!-- FORMULAIRE -->
                <form id="formulaire4" class="wrapform" action="" method="POST" novalidate>
                    <div id="input4"></div>
                    <button id="forma-add-experience" class="btnADD">Ajouter une experience</button>
                    <input type="submit" name="submitted" value="Suivant">
                </form>
                <!-- FORMULAIRE -->
                <form id="formulaire5" class="wrapform" action="" method="POST" novalidate>
                    <div id="input5"></div>
                    <button id="forma-add-langue" class="btnADD">Ajouter une langue</button>
                    <input type="submit" name="submitted" value="Suivant">
                </form>
                <!-- FORMULAIRE -->
                <form id="formulaire6" class="wrapform" action="" method="POST" novalidate>
                    <div id="input6"></div>
                    <button id="forma-add-loisir" class="btnADD">Ajouter un loisir</button>
                    <input type="submit" name="submitted" value="Suivant">
                </form>
                <form id="formulaire7" class="wrapform" action="" method="POST" novalidate>
                    <h2>Merci d'avoir utiliser notre génerateur de CV</h2>
                    <p>Vous pouvez maintenant affiche votre CV sur votre profil ou le télecharger au format pdf</p>
                    <a href="javascript:void(0)" class="btn-download">Download PDF </a>
                    <a href="" class="btn-add">Ajouter à mon profil</a>
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
