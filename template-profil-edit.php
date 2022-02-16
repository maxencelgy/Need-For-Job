<?php
/*Template Name: Profil Edit*/
session_start();
$idUser=$_SESSION['user']['id'];
global $wpdb;
$user = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}users WHERE ID=%s",$idUser),ARRAY_A);
debug($user);

$user_meta=get_user_meta($_SESSION['user']['id']);
debug($user_meta);

$errors = [];
if(!empty($_POST['submitted'])) {
    // Faille xss
    $email = cleanXss ('email');
    $password = cleanXss ('password');
    $password2 = cleanXss ('password2');
    $date_de_naissance = cleanXss ('date_de_naissance');
    $portable = cleanXss ('portable');

    $errors = mailValidation($errors, $email,'email');
    $errors = phoneNumberValidation($errors, $portable, 'portable');

    if(empty($_POST['password'])) {
        $errors['password'] = "Confirmez votre mot de passe pour valider les informations.";
    }

    if(!empty($_POST['password2'])){
        if(empty($_POST['password'])){
            $errors['password'] = "Vous devez entrer votre ancien mot de passe";
        }
        if(!empty($_POST['password'])){
            if(!password_verify($password, $user['password'])){
                $errors['password'] = "Mot de passe incorrect";
            }
        }
        if(mb_strlen($password2) < 6){
            $errors['password2'] = 'Min 6 caractères pour votre mot de passe';
        }
    }

    if(empty($errors['email'])) {
        $verifPseudo = verifUserByEmail($email);
        if(!empty($verifPseudo)) {
            if ($verifPseudo['email']!==$user['email'])
                $errors['email'] = 'Un compte existe déjà sur cette adresse email';
        }
    }

    if(count($errors) == 0){
        $hashpassword = password_hash($password2,PASSWORD_DEFAULT);

    }
}





get_header()
?>


    <section id="profil">
        <div class="wrap">

            <h2 class="box_title">Mon Profil</h2>

            <div class="box_profil">
                <div class="box_profil_left">
                    <i class="fa-solid fa-circle-user"></i>
                    <h2><?php echo $user[0]['user_nicename'].' '.$user[0]['display_name'] ?></h2>
                </div>
                <div class="box_profil_right">
                    <form action="" method="post">
                        <div class="form_box_modif">
                            <div class="form_box_input">
                                <label for="email">Mail :</label>
                                <input type="text" name="email" id="email" value="<?=$user[0]['user_email']; ?>">
                            </div>

                            <div class="error_box">
                                <span class="error"><?= viewError($errors,'email'); ?></span>
                            </div>
                        </div>
                        <div class="form_box_modif">
                            <div class="form_box_input">
                                <label for="password">Nouveau mot de passe :</label>
                                <input type="password" name="password2" id="password2">
                            </div>
                            <div class="error_box">
                                <span class="error"><?= viewError($errors,'password2'); ?></span>
                            </div>
                        </div>

                        <div class="form_box_modif">
                            <div class="form_box_input">
                                <label for="date_de_naissance">Date de naissance</label>
                                <input type="date" name="date_de_naissance" id="date_de_naissance" value="<?= $user['date_de_naissance'] ;?>">
                            </div>
                            <div class="error_box">
                                <span class="error"><?= viewError($errors,'date_de_naissance'); ?></span>
                            </div>
                        </div>

                        <div class="form_box_modif">
                            <div class="form_box_input">
                                <label for="portable">Téléphone :</label>
                                <input type="number" name="portable" id="portable" value="<?= $user['portable'] ;?>">
                            </div>
                            <div class="error_box">
                                <span class="error"><?= viewError($errors,'portable'); ?></span>
                            </div>
                        </div>

                        <div class="form_box_modif">
                            <div class="form_box_input">
                                <label for="password">Mot de passe de validation :</label>
                                <input type="password" name="password" id="password" value="">
                            </div>
                            <div class="error_box">
                                <span class="error"><?= viewError($errors,'password'); ?></span>
                            </div>
                        </div>

                        <div class="form_box_modif">
                            <input type="submit" name="submitted" id="submitted" value="Modifier">
                        </div>
                    </form>
                    <span><strong> Compte créé le :</strong> <?php echo $user[0]['user_registered'] ?></span>
                </div>

            </div>
        </div>
    </section>


<?php
get_footer();
