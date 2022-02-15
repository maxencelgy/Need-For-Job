<?php
/* Template Name: Register Page*/

session_start();

$success=false;
$errors = [];
if(!empty($_POST['submitted'])) {
    // Faille xss
    $prenom    = cleanXss('prenom');
    $nom       = cleanXss('nom');
    $phone     = cleanXss('phone');
    $email     = cleanXss('email');
    $password  = cleanXss('password');
    $password2 = cleanXss('password2');

    // Validation
    $errors = mailValidation($errors,$email,'email');

    if(empty($errors['email'])) {

    }

    // password
    if(!empty($password) || !empty($password2)) {
        if($password != $password2) {
            $errors['password'] = 'Veuillez renseigner des mot de passe identiques';
        } elseif (mb_strlen($password2) < 6) {
            $errors['password'] = 'Min 6 caractères pour votre mot de passe';
        }
    } else {
        $errors['password'] = 'Veuillez renseigner un mot de passe';
    }
    if(count($errors) == 0) {
        // generate token
        $token = generateRandomString(100);
        // hashpassword
        $hashpassword = password_hash($password,PASSWORD_DEFAULT);
        // INSERT INTO

        // redirection
        $success=true;
        header('refresh:5;url=index.php');
    }
}
get_header();
?>




<section id="register_form">

    <div class="wrap">
        <?php if($success==false){ ?>
            <form action="" method="post" class="wrapform" novalidate>

                <div class="info_box">
                    <i class="fa-solid fa-user"></i>
                    <div>
                        <div>
                            <label for="nom"></label>
                            <input type="text" placeholder="Nom" id="nom" name="nom" value="<?=recupInputValue('nom');?>">
                            <span class="error"><?= viewError($errors,'nom'); ?></span>
                        </div>

                        <div>
                            <label for="prenom"></label>
                            <input type="text" placeholder="Prénom" id="prenom" name="prenom" value="<?=recupInputValue('prenom');?>">
                            <span class="error"><?= viewError($errors,'prenom'); ?></span>
                        </div>
                    </div>
                </div>


                <div class="info_box">
                    <label for="phone"></label>
                    <i class="fa-solid fa-phone"></i>
                    <input type="tel" placeholder="Numéro de téléphone" pattern="[0-9]{10}" maxlength="10" id="phone" name="phone" value="<?= recupInputValue('phone'); ?>">
                    <span class="error"><?= viewError($errors,'phone'); ?></span>
                </div>

                <div class="info_box">
                    <label for="email"></label>
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email*" id="email" name="email" value="<?= recupInputValue('email'); ?>">
                    <span class="error"><?= viewError($errors,'email'); ?></span>
                </div>


                <div class="info_box">
                    <i class="fa-solid fa-lock"></i>
                    <div>
                        <div>
                            <label for="password"></label>
                            <input type="password" placeholder="Mot de passe*" id="password" name="password" value="">
                            <span class="error"><?= viewError($errors,'password'); ?></span>
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
                <p>Les champs avec * sont requis</p>

            </form>

        <?php } else {echo'<div class="info_box_success"><h2>Bienvenue ! Votre compte a bien été créé !</h2><h4>Redirection dans 5 secondes.</h4></div>';} ?>


        <div class="img_part_register">
            <h2>Rejoins la communauté Need For Job !</h2>
            <img class="img_float1 absolute shadow" src="<?php echo get_template_directory_uri(); ?>../asset/img/img_register1.jpg" alt="">
            <img class="img_float2 absolute shadow" src="<?php echo get_template_directory_uri(); ?>../asset/img/img_register2.jpg" alt="">
            <img class="img_float3 absolute shadow" src="<?php echo get_template_directory_uri(); ?>../asset/img/img_register3.jpg" alt="">
            <img class="img_float4 absolute shadow" src="<?php echo get_template_directory_uri(); ?>../asset/img/img_register4.jpg" alt="">
        </div>

    </div>

</section>

<?php
get_footer();