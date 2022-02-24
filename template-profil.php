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



global $wpdb;
$cvs = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}cv WHERE user_id=%s", $user_id),
    ARRAY_A
);


get_header();
?>


<section id="profil">

    <div class="wrap">

        <div class="box_profil">
            <div class="box_profil_left">
                <i class="fa-solid fa-circle-user"></i>
                <h2 class="rowdies"><?php echo ucwords($userArray['data']['user_nicename']) . ' ' . $userArray['data']['display_name']; ?></h2>
            </div>
            <div class="box_profil_right">
                <p> <strong> Email :</strong> <?php echo $userArray['data']['user_email']; ?> </p>
                <p><strong> Numéro de téléphone :</strong> <?php echo $user_meta['user_meta_phone'][0]; ?> </p>
                <p><strong> Mot de passe :</strong> *****</p>
                <p><strong> Compte créé le :</strong> <?php echo $userArray['data']['user_registered'] ?></p>

                <a class="button_type2" href="<?php echo path('edit-profil') ?>">Modifier</a>
            </div>

        </div>

        <?php
        if($user_meta['user_meta_role'][0]=='utilisateur') {?>

        <div class="cv_user">
                    <h2 class="box_title rowdies">Vos CV :</h2>
            <div class="list_cv">
            <?php
            global $wpdb;
            $cvs = $wpdb->get_results(
                $wpdb->prepare("SELECT * FROM {$wpdb->prefix}cv WHERE user_id=%s", $user_id),
                ARRAY_A
            );

            if(!empty($cvs)){
                foreach ($cvs as $cv){?>

                    <div class="bloccv">
                        <div class="cvImg">
                            <img src="<?= get_template_directory_uri() . '/asset/img/cv1.jpg' ?>" alt="">
                        </div>
                        <div class="cvDescription">
                            <h2 class="rowdies"><?= $cv['prenom'] ?><span> </span><span class="descriptionName"><?= $cv['nom'] ?></span></h2>
                            <h3><i><?= $cv['poste'] ?></i></h3>
                            <div class="profil_cv_btn">
                            <a href="<?= path('cv-detail')?>?id=<?= $cv['id'] ?>" class="view">Voir ce CV</a>
                            <a href="<?= path('delete-cv-profil')?>?id=<?= $cv['id'] ?>" class="view">Supprimer ce CV</a>
                            </div>
                        </div>
                    </div>

                <?php }
            } else { ?>
                <h3 class="box_title">Vous n'avez pas encore créé de CV, commencez dès maintenant en cliquant <a href="<?= path('select')?>">ici !</a></h3>
        <?php }}?>
</section>

<?php
get_footer();
