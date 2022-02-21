<?php
/* Template Name: Recruteur*/
session_start();
global $wpdb;
$cv = $wpdb->get_results(
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}cv"),
    ARRAY_A
);
debug($_SESSION);
get_header(); ?>

<section id="recruteur">
    <div class="wrap_recruteur">
        <div class="title_recru">
            <h2>Bonjour <?= $_SESSION['user']['pseudo'] ?></h2>
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
