<?php
/*Template Name: Profil*/
session_start();
debug($_SESSION['user']);

debug($_SESSION);
$idUser=$_SESSION['user']['id'];

global $wpdb;
$user = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}users WHERE ID=%s",$idUser),ARRAY_A);
debug($user);

$user_meta=get_user_meta($_SESSION['user']['id']);
debug($user_meta);

get_header();
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
                <p> <strong> Email :</strong> <?php echo $user[0]['user_email'] ?> </p>
                <p><strong> Numéro de téléphone :</strong> <?php if(!empty($user_meta['user_meta_phone'][0] )){ echo $user_meta['user_meta_phone'][0];}else{echo'';} ?> </p>
                <p><strong> Date de naissance :</strong> 01/01/0001 </p>
                <p><strong> Mot de passe :</strong> *****</p>
                <p><strong> Compte créé le :</strong> <?php echo $user[0]['user_registered'] ?></p>

                <a class="button_type2" href="<?php echo path('edit-profil') ?>">Modifier</a>
            </div>

        </div>
    </div>
</section>





<?php
get_footer();
