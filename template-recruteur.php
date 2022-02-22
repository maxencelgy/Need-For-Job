<?php
/* Template Name: Recruteur*/
session_start();
if (!empty(is_user_logged_in())) {
    $user = wp_get_current_user();
    $user_id = get_current_user_id();
    $user_meta = get_user_meta($user_id);
    $userArray = objectToArray($user);
}

debug($user);
// echo $user['data']['user_nicename'];
global $wpdb;
$cv = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}cv"),
    ARRAY_A
);
// debug($_SESSION);
get_header(); ?>

<section id="recruteur">
    <div class="wrap_recruteur">
        <div class="title_recru">
            <h2>Bonjour <?= $userArray['data']['user_nicename'] ?></h2>
            <h3>Voici la liste des derniers CV en ligne</h3>
        </div>
        <div class="lastCV">
            <div class="result">
                <div class="left">
                    <h2><?= count($cv) ?> resultats :</h2>
                </div>
                <div class="searchbar">
                    <label for="">Rechercher :</label>
                    <input type="search" placeholder="Entrez un job particulier ou un nom">
                </div>
            </div>

            <?php
            foreach ($cv as $value) {
            ?>
                <div class="cv">
                    <div class="cvImg">
                        <p><?= $value['id'] ?></p>
                    </div>
                    <div class="cvDescription">
                        <h2><?= $value['prenom'] ?><span></span><?= $value['nom'] ?></h2>
                        <a href="">Voir ce CV</a>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>




<?php
get_footer();
