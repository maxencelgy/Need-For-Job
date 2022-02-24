<?php
/*Template Name: CV Détail*/

if (is_user_logged_in() == false) {
    wp_redirect(path('profil'));
    exit;
}

$id = $_GET['id'];

if (empty($id)) {
    wp_redirect(path('404'));
    exit;
}

global $wpdb;
$cv = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}cv WHERE id=%s", $id),
    ARRAY_A
);
if (empty($cv)) {
    wp_redirect(path('404'));
    exit;
}
$cvFormation = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}formation WHERE cv_id=%s", $id),
    ARRAY_A
);
$cvExperience = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}experience WHERE cv_id=%s", $id),
    ARRAY_A
);
$cvLoisir = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}passion WHERE cv_id=%s", $id),
    ARRAY_A
);
$cvLangue = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}langue WHERE cv_id=%s", $id),
    ARRAY_A
);

// debug($cv);

get_header()
?>
<section id="cv_detail">
    <div class="wrap">
        <div class="left">
            <h2>Voici le CV pour <?= $cv[0]['poste'] ?> ! </h2>
            <a href="javascript:void(0)" class="btn-download">Télécharger le CV au format PDF</a>
        </div>
        <div class="right">
            <?php include_once($cv[0]['template-id']);  ?>
        </div>
    </div>
</section>



<?php
get_footer();
