<?php
/* Template Name: Login Page*/

session_start();
debug($_SESSION);
$errors = [];

if(!empty($_POST['submitted'])) {
    // Faille xss
    $login   = trim(strip_tags($_POST['login']));
    $password  = trim(strip_tags($_POST['password']));


    //Chercher User dans BDD
    global $wpdb;
    $user = $wpdb->get_results(
        $wpdb->prepare("SELECT * FROM {$wpdb->prefix}users WHERE user_login=%s",$login),ARRAY_A);
    debug($user);


    if(empty($user)) {
        $errors['login'] = 'Email invalide';
    } else {
        if (password_verify($password , $user[0]['user_pass'] )==true){
            $_SESSION['user']=array(
                'id'=>$user[0]['ID'],
                'pseudo'=>$user[0]['user_nicename'],
                'email' =>$user[0]['user_email'],
                'status'=>$user[0]['user_status'],
                'ip'=>$_SERVER['REMOTE_ADDR']
            );
        }else {
            $errors['password'] = 'Mot de passe incorrect';
        }
    }
    if(count($errors) == 0) {
        echo'Ouais fuck les erreurs';
        header('Location: index.php');
    }
}

get_header();
debug($errors);
?>




    <section id="register_form">

        <div class="wrap">

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

                    <span class="error"><?php if(!empty($errors)){echo'Mot de passe ou Adresse Mail invalide';} ?></span>
                    <span class="error"><?= viewError($errors, 'email'); ?></span>
                    <span class="error"><?= viewError($errors, 'password'); ?></span>
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
