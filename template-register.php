<?php
/* Template Name: Register Page*/

if (is_user_logged_in() == true) {
    wp_redirect(path('home'));
    exit;
}

$success = false;
$errors = [];
if (!empty($_POST['submitted'])) {
    // Faille xss
    $prenom    = cleanXss('prenom');
    $nom       = cleanXss('nom');
    $email     = cleanXss('email');
    $phone     = cleanXss('phone');
    $password  = cleanXss('password');
    $password2 = cleanXss('password2');

    // Validation
    $errors = mailValidation($errors, $email, 'email');
    $errors = textValidation($errors, $prenom, 'prenom', 2, 100);
    $errors = textValidation($errors, $nom, 'nom', 2, 100);

    if (empty($errors['email'])) {
        global $wpdb;
        $verifPseudo = $wpdb->get_results(
            $wpdb->prepare("SELECT * FROM {$wpdb->prefix}users WHERE user_email=%s", $email),
            ARRAY_A
        );
        if (!empty($verifPseudo)) {
            $errors['email'] = 'Vous avez déjà un compte avec cette adresse mail';
        }
    }
    // password
    if (!empty($password) || !empty($password2)) {
        if ($password != $password2) {
            $errors['password'] = 'Veuillez renseigner des mot de passe identiques';
        } elseif (mb_strlen($password2) < 6) {
            $errors['password'] = 'Min 6 caractères pour votre mot de passe';
        }
    } else {
        $errors['password'] = 'Veuillez renseigner un mot de passe';
    }
    if (count($errors) == 0) {
        // generate token
        $token = generateRandomString(100);

        // INSERT INTO
        if (count($errors) === 0) {
            global $wpdb;
            $userdata = array(
                'ID'                    => 0,    //(int) User ID. If supplied, the user will be updated.
                'user_pass'             => $password,   //(string) The plain-text user password.
                'user_login'            => $email,   //(string) The user's login username.
                'user_nicename'         => $prenom,   //(string) The URL-friendly user name.
                'user_email'            => $email,   //(string) The user email address.
                'display_name'          => $nom,   //(string) The user's display name. Default is the user's username.
                'first_name'            => $nom,   //(string) The user's first name. For new users, will be used to build the first part of the user's display name if $display_name is not specified.
                'last_name'             => $prenom,   //(string) The user's last name. For new users, will be used to build the second part of the user's display name if $display_name is not specified.
                'user_registered'       => current_time('mysql'),   //(string) Date the user registered. Format is 'Y-m-d H:i:s'.
                'show_admin_bar_front'  => 'false',
                'user_activation_key'   => $token,   //Token
                'role'                  => 'subscriber',   //(string) User's role.
            );
            $newUser = wp_insert_user($userdata);
            add_user_meta($newUser, 'user_meta_role', 'utilisateur');
            add_user_meta($newUser, 'user_meta_phone', $phone);
            $success = true;

            // redirection
            wp_redirect(path('login'));
            exit;
        }
    }
}
get_header();
?>




<section id="register_form">

    <div class="wrap_2">
        <?php if (!$success == true) { ?>
            <form action="" method="post" class="wrapform" novalidate>
                <div class="info_box">
                    <i class="fa-solid fa-user"></i>
                    <div>
                        <div>
                            <label for="nom"></label>
                            <input type="text" placeholder="Nom" id="nom" name="nom" value="<?= recupInputValue('nom'); ?>">
                            <span class="error"><?= viewError($errors, 'nom'); ?></span>
                        </div>
                        <div class="prenom">
                            <label for="prenom"></label>
                            <input type="text" placeholder="Prénom" id="prenom" class="pre" name="prenom" value="<?= recupInputValue('prenom'); ?>">
                            <span class="error"><?= viewError($errors, 'prenom'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="info_box email">
                    <label for="email"></label>
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email*" id="email" name="email" value="<?= recupInputValue('email'); ?>">
                    <span class="error"><?= viewError($errors, 'email'); ?></span>
                </div>

                <div class="info_box ">
                    <label for="phone"></label>
                    <i class="fa-solid fa-phone"></i>
                    <input type="tel" placeholder="Numéro de téléphone" pattern="[0-9]{10}" maxlength="10" id="phone" name="phone" value="<?= recupInputValue('phone'); ?>">
                    <span class="error"><?= viewError($errors, 'phone'); ?></span>
                </div>


                <div class="info_box">
                    <i class="fa-solid fa-lock"></i>
                    <div>
                        <div>
                            <label for="password"></label>
                            <input type="password" placeholder="Mot de passe*" id="password" name="password" value="">
                            <span class="error"><?= viewError($errors, 'password'); ?></span>
                        </div>
                        <div>
                            <label for="password2"></label>
                            <input type="password" placeholder="Confirmer Mot de passe*" id="password2" name="password2" value="">
                        </div>
                    </div>

                </div>

                <div class="info_box info_box_button">
                    <input type="submit" name="submitted" value="ENVOYER">
                </div>
                <p class="champsRequis">Les champs avec * sont requis</p>

            </form>
        <?php } else { ?>

            <div class="success_msg wrapform">
                <h2>Compte créé avec succès !</h2>
                <p>Redirection en cours...</p>
            </div>

        <?php } ?>


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
