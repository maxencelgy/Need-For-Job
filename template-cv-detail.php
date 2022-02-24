<?php
/*Template Name: CV Détail*/



$id = $_GET['id'];
global $wpdb;
$cv = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}cv WHERE id=%s", $id),
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
