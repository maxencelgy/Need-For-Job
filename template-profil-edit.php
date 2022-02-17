<?php
/*Template Name: Profil Edit*/
session_start();
$idUser=$_SESSION['user']['id'];
global $wpdb;
$user = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}users WHERE ID=%s",$idUser),ARRAY_A);

$user_meta = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}users WHERE ID=%s",$idUser),ARRAY_A);

debug($user);

$user_meta=get_user_meta($_SESSION['user']['id']);
debug($user_meta);


$errors = [];
if(!empty($_POST['submitted'])) {
    // Faille xss
    $email = cleanXss ('email');
    $date_de_naissance = cleanXss ('date_de_naissance');
    $portable = cleanXss ('portable');

    $errors = mailValidation($errors, $email,'email');
    $errors = phoneNumberValidation($errors, $portable, 'portable');



    if(empty($errors['email'])) {
        $verifPseudo = $wpdb->get_results(
            $wpdb->prepare("SELECT * FROM {$wpdb->prefix}users WHERE user_login=%s",$email),ARRAY_A);;
        if(!empty($verifPseudo)) {
            if ($verifPseudo[0]['email']!==$user[0]['email'])
                $errors['email'] = 'Un compte existe déjà sur cette adresse email';
        }
    }

    if(count($errors) == 0){
       $wpdb->update("UPDATE `wpnfj_users` SET `user_login`='%s',`user_nicename`='%s',`user_email`='%S',`display_name`='%s' WHERE user_id=%s",$email,$prenom,$email,$nom,$idUser);

    }
}


debug($_POST);

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
                                <label for="date_de_naissance">Date de naissance</label>
                                <input type="date" name="date_de_naissance" id="date_de_naissance" value="<?php if(!empty($user_meta['user_meta_birthday']['0'])){ echo $user_meta['user_meta_birthday']['0']; };?>">
                            </div>
                            <div class="error_box">
                                <span class="error"><?= viewError($errors,'date_de_naissance'); ?></span>
                            </div>
                        </div>

                        <div class="form_box_modif">
                            <div class="form_box_input">
                                <label for="portable">Téléphone :</label>
                                <input type="number" name="portable" id="portable" value="<?php if(!empty($user_meta['user_meta_phone'][0] )){ echo $user_meta['user_meta_phone'][0];}?>">
                            </div>
                            <div class="error_box">
                                <span class="error"><?= viewError($errors,'portable'); ?></span>
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
