<?php
/* Template Name: Login Page*/

session_start();

$errors = [];

if(!empty($_POST['submitted'])) {
    // Faille xss
    $login   = trim(strip_tags($_POST['login']));
    $password  = trim(strip_tags($_POST['password']));


    //Chercher User dans BDD


    if(empty($user)) {
        $errors['login'] = 'Email invalide';
    } else {
        if (password_verify($password , $user['password'] )==true){
            $_SESSION['user']=array(
                'id'    =>$user['id'],
                'email' =>$user['email'],
                'status'=>$user['status'],
                'ip'     =>$_SERVER['REMOTE_ADDR'],//::1
            );
        }else {
            $errors['password'] = 'Mot de passe incorrect';
        }
    }
    if(count($errors) == 0) {
        header('Location: index.php');
    }
}
get_header();
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
                        <input type="password" placeholder="Mot de Passe*" id="password" name="password" value="">
                    </div>

                    <span class="error"><?php if(!empty($errors)){echo'Mot de passe ou Adresse Mail invalide';} ?></span>


                    <div class="info_box info_box_button">
                        <input type="submit" name="submitted" value="ENVOYER">
                    </div>
                    <p>Les champs avec * sont requis</p>

                </form>

            <div class="img_part_register">
                <h2 class="absolute">Rejoins la communauté Need For Job !</h2>
                <img class="img_float1 absolute shadow" src="<?php echo get_template_directory_uri(); ?>../asset/img/img_register1.jpg" alt="">
                <img class="img_float2 absolute shadow" src="<?php echo get_template_directory_uri(); ?>../asset/img/img_register2.jpg" alt="">
                <img class="img_float3 absolute shadow" src="<?php echo get_template_directory_uri(); ?>../asset/img/img_register3.jpg" alt="">
                <img class="img_float4 absolute shadow" src="<?php echo get_template_directory_uri(); ?>../asset/img/img_register4.jpg" alt="">
                <img class="img_float5 absolute shadow" src="<?php echo get_template_directory_uri(); ?>../asset/img/img_register5.jpg" alt="">
                <img class="img_float6 absolute shadow" src="<?php echo get_template_directory_uri(); ?>../asset/img/img_register6.jpg" alt="">

                <img class="img_float8 absolute shadow" src="<?php echo get_template_directory_uri(); ?>../asset/img/img_register8.jpg" alt="">
            </div>

        </div>

    </section>

<?php
get_footer();
