<?php
/*Template Name: CV Détail*/



$id = $_GET['id'];

global $wpdb;
$cv = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}cv WHERE id=%s", $id),
    ARRAY_A
);
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
        <div class="right">
            <?php include_once($cv[0]['template-id']);  ?>
        </div>
    </div>
</section>



<?php
get_footer();
