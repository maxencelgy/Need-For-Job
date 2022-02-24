<?php
/* Template Name: Recruteur*/


if (!empty(is_user_logged_in())) {
    $user = wp_get_current_user();
    $user_id = get_current_user_id();
    $user_meta = get_user_meta($user_id);
    $userArray = objectToArray($user);

    if ($user_meta['user_meta_role'][0]!=='recruteur'){
        wp_redirect(path('home'));
        exit;
    }
}
global $wpdb;
 $cvs = $wpdb->get_results(
      $wpdb->prepare("SELECT * FROM {$wpdb->prefix}cv ORDER BY id DESC"),
     ARRAY_A
 );
get_header(); ?>

<section id="recruteur">
    <div class="wrap_recruteur">
        <div class="title_recru">
            <h2>Bonjour, <span class="nameSpan"><?= $userArray['data']['user_nicename'] ?></span></h2>
            <h3>Voici la liste des derniers CV en ligne</h3>
        </div>
        <div class="lastCV">
            <div class="result">
                <div class="left">
                    <h2><?= count($cvs) ?> resultats :</h2>
                </div>

                <div class="searchbar">
                    <label for="">Rechercher :</label>
                    <input type="search" name="q" placeholder="Entrez un job particulier ou un nom">
                </div>
            </div>

            <div class="cvs">
                <?php
                foreach ($cvs as $cv) {
                ?>
                    <div class="bloccv">
                        <div class="cvImg">
                            <img src="<?= get_template_directory_uri() . '/asset/img/cv1.jpg' ?>" alt="">
                        </div>
                        <div class="cvDescription">
                            <h2><?= $cv['prenom'] ?><span> </span><span class="descriptionName"><?= $cv['nom'] ?></span></h2>
                            <h3><i><?= $cv['poste'] ?></i></h3>
                            <a href="<?= path('cv-detail')?>?id=<?= $cv['id'] ?>" class="view">Voir ce CV</a>
                        </div>

                    </div>
                <?php
                }
                ?>
            </div>


        </div>
    </div>
</section>




<?php
get_footer();
