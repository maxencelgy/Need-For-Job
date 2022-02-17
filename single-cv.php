<?php

session_start();
get_header();
?>


<section id="single_blog">
    <div class="wrapBlog">


        <?php
        while (have_posts()) :
            the_post();
            // debug(get_the_content())
        ?>
            <div class="left">
                <form id="formulaire" class="wrapform" action="" method="POST" novalidate>
                    <label for="name">Nom :</label>
                    <input type="text" name="name" id="name" value="">

                    <label for="name">Prenom :</label>
                    <input type="text" name="prenom" id="prenom" value="">

                    <label for="age">Age : </label>
                    <input type="text" name="age" id="age" value="">

                    <label for="lieux">Adresse : </label>
                    <textarea name="" id="lieux" cols="30" rows="10"></textarea>

                    <input type="submit" name="submitted" value="envoyer message">
                </form>
                <!-- FORMULAIRE -->
                <form id="formulaire2" class="wrapform" action="" method="POST" novalidate>
                    <label for="number">Numéro de télphone :</label>
                    <input type="text" name="number" id="number" value="">

                    <label for="mail">Adresse email :</label>
                    <input type="mail" name="mail" id="mail" value="">

                    <label for="perms">Permis : </label>
                    <input type="text" name="perms" id="perms" value="">

                    <input type="submit" name="submitted" value="envoyer message">
                </form>
                <!-- FORMULAIRE -->
                <form id="formulaire3" class="wrapform" action="" method="POST" novalidate>
                    <div id="input3"></div>
                    <button id="forma-add">Ajouter une formation</button>
                    <input type="submit" name="submitted" value="envoyer message">
                </form>
                <!-- FORMULAIRE -->
                <form id="formulaire4" class="wrapform" action="" method="POST" novalidate>
                    <div id="input3"></div>
                    <button id="forma-add">Ajouter une formation</button>
                    <input type="submit" name="submitted" value="envoyer message">
                </form>


            </div>
            <div class="right">
                <?= get_the_content() ?>
            </div>

        <?php
        endwhile; // End of the loop.
        ?>

    </div>
</section>



<?php
// get_sidebar();
get_footer();
