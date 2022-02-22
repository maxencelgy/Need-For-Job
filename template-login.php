<?php
/* Template Name: Login Page*/

if(is_user_logged_in()==true){
    wp_redirect(path('home'));
    exit;
}

$errors = [];

if(!empty($_POST['submitted'])) {
    // Faille xss
    $login   = trim(strip_tags($_POST['login']));
    $password  = trim(strip_tags($_POST['password']));

    if(count($errors)==0){
       $erreur_test= wpdocs_custom_login($login,$password);
        if(empty($erreur_test)){
            wp_redirect(path('home'));
            exit;
        }
    }
}

get_header();
?>




    <section id="register_form">

        <div class="wrap_2">

                <form action="" method="post" class="wrapform" novalidate>
                    <h2>Connexion :</h2>

                    <div class="info_box">
                        <label for="login"></label>
                        <i class="fa-solid fa-user"></i>
                        <input type="login" placeholder="Email*" id="login" name="login" value="<?= recupInputValue('login'); ?>">
                    </div>

                    <div class="info_box">
                        <label for="password"></label>
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Mot de Passe*" id="password" name="password" value="<?= recupInputValue('password'); ?>">
                    </div>

                    <span class="error"><?php if(!empty($erreur_test)){echo $erreur_test; } ?></span>

                    <div class="info_box info_box_button">
                        <input type="submit" name="submitted" value="ENVOYER">
                    </div>
                    <p>Les champs avec * sont requis</p>

                </form>

            <div class="img_part_register">
                <h2 class="title">Rejoins la communauté Need For Job !</h2>
                <div class="box_part">
                    <div class="box">
                        <i class="fa-solid fa-address-book"></i>
                        <h2>Créer ton CV !</h2>
                        <div class="separator"></div>
                        <p>Plusieurs modèles de CV sont disponible, choisi celui qui te plaît et personnalise-le à tes goûts !</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-briefcase"></i>
                        <h2>Fais toi recruter !</h2>
                        <div class="separator"></div>
                        <p>Un grand nombre de recruteurs sont déjà présent sur Need For Job ! C'est ton occasion de mettre en avant tes compétences !</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-globe"></i>
                        <h2>Tout ça en ligne !</h2>
                        <div class="separator"></div>
                        <p>En créant ton compte, tu peux créer, sauvegarder et modifier tes différents CV ! Les recruteurs contactent plus souvent les personnes ayant un compte !</p>
                    </div>

                </div>
            </div>

        </div>

    </section>

<?php
get_footer();
