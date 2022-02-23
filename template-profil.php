<?php
/*Template Name: Profil*/

if (is_user_logged_in() == false) {
    wp_redirect(path('home'));
    exit;
}
$user = wp_get_current_user();
$userArray = objectToArray($user);


$user_id = get_current_user_id();
$user_meta = get_user_meta($user_id);


get_header();
?>


<section id="profil">
    <div class="wrap">

        <h2 class="box_title">Mon Profil</h2>

        <div class="box_profil">
            <div class="box_profil_left">
                <i class="fa-solid fa-circle-user"></i>
                <h2><?php echo $userArray['data']['user_nicename'] . ' ' . $userArray['data']['display_name']; ?></h2>
            </div>
            <div class="box_profil_right">
                <p> <strong> Email :</strong> <?php echo $userArray['data']['user_email']; ?> </p>
                <p><strong> Numéro de téléphone :</strong> <?php echo $user_meta['user_meta_phone'][0]; ?> </p>
                <p><strong> Date de naissance :</strong> 01/01/0001 </p>
                <p><strong> Mot de passe :</strong> *****</p>
                <p><strong> Compte créé le :</strong> <?php echo $userArray['data']['user_registered'] ?></p>

                <a class="button_type2" href="<?php echo path('edit-profil') ?>">Modifier</a>
            </div>

        </div>
    </div>
</section>

<section>
    <?php
    global $wpdb;
    $cvs = $wpdb->get_results(
        $wpdb->prepare("SELECT * FROM {$wpdb->prefix}cv WHERE user_id=%s", $user_id),
        ARRAY_A
    );
    debug($cvs);

    if (!empty($cvs)) {
        foreach ($cvs as $cv) { ?>
            <div class="box_cv_profil">
                <h2>CV pour : <?php echo $cv['poste'] ?></h2>
                <a href="<?= path('cv-detail') ?>?id=<?= $cv['id'] ?>">Voir</a>
                <a href="#">Supprimer</a>
            </div>


    <?php }
    } else {
        echo 'non';
    }
    ?>


</section>



<?php
get_footer();
