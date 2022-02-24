<?php
/*Template Name: Profil Edit*/

if (is_user_logged_in()==false){
    wp_redirect(path('home'));
    exit;
}
$user=wp_get_current_user();
$userArray = objectToArray($user);

debug($userArray);
$user_id=get_current_user_id();
$user_meta=get_user_meta($user_id);
debug($user_meta);





$errors = [];
if(!empty($_POST['submitted'])) {
    // Faille xss
    $email = cleanXss ('email');
    $login = cleanXss ('email');
    $date_de_naissance = cleanXss ('date_de_naissance');
    $portable = cleanXss ('portable');

    $errors = mailValidation($errors, $email,'email');
    $errors = phoneNumberValidation($errors, $portable, 'portable');



    if(empty($errors['email'])) {
        global $wpdb;
        $verifPseudo = $wpdb->get_results(
            $wpdb->prepare("SELECT * FROM {$wpdb->prefix}users WHERE user_login=%s",$email),ARRAY_A);


        if(!empty($verifPseudo)) {
            if ($verifPseudo[0]['user_email']!==$userArray['data']['user_email'])
                $errors['email'] = 'Un compte existe déjà sur cette adresse email';
        }
    }
debug($errors);
    if(count($errors) == 0){
        $userdata = array(
            'ID'                    => $user_id,
            'user_login'            => $login,   //(string) The user's login username.
            'user_email'            => $email,   //(string) The user email address.
        );
        wp_update_user($userdata);
    update_user_meta($user_id,'user_meta_phone',$portable);
        wp_redirect(path('profil'));
        exit;

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
                    <h2><?php echo $userArray['data']['user_nicename'].' '.$userArray['data']['display_name']; ?></h2>
                </div>
                <div class="box_profil_right">
                    <form action="" method="post">
                        <div class="form_box_modif">
                            <div class="form_box_input">
                                <label for="email">Email :</label>
                                <input type="text" name="email" id="email" value="<?=$userArray['data']['user_email']; ?>">
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
                                <input type="number" name="portable" id="portable" value="<?= $user_meta['user_meta_phone'][0]; ?>">
                            </div>
                            <div class="error_box">
                                <span class="error"><?= viewError($errors,'portable'); ?></span>
                            </div>
                        </div>


                        <div class="form_box_modif">
                            <input type="submit" name="submitted" id="submitted" value="Modifier">
                        </div>
                    </form>
                    <p><strong> Compte créé le :</strong> <?php echo $userArray['data']['user_registered'] ?></p>
                </div>

            </div>
        </div>
    </section>


<?php
get_footer();
