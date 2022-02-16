<?php
/* Template Name: Recruteur*/

get_header(); ?>

<section id="recruteur">
    <div class="wrap_recruteur">
        <div class="title_recru">
            <h2>Bonjour Recruteur</h2>
            <h3>Voici la liste des derniers CV en ligne</h3>
        </div>

        <div class="lastCV">
            <div class="result">
                <div class="left">
                    <h2>7 resultats :</h2>
                </div>
                <div class="searchbar">
                    <label for="">Rechercher :</label>
                    <input type="search" placeholder="Entrez un job particulier ou un nom">
                </div>

            </div>

            <div class="cv">
                <div class="cvImg">
                    <img src="<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?>" alt="">
                </div>
                <div class="cvDescription">
                    <h2>Maxence <span>Leguay</span> </h2>
                    <p>Ceci est une petite phrase d'accroche très trreès tchatcheuse. zefffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
                        ezfzfeffffffffffffffffffffffffffffff
                        efzezfzefzefzefzffzefzefzf
                        zefzefzf
                    </p>
                    <a href="">Voir ce CV</a>
                </div>
            </div>
        </div>



    </div>
</section>


<?php $args = array(
    'post_type' => 'cv',
    'posts_per_page' => -1,
    'order' => 'ASC'
);
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
        $metas = get_post_meta(get_the_ID());
?>
        <a href="<?= get_the_permalink() ?>"><?= getImageFeatured(get_the_ID(), 'imgdiapo', get_the_title()) ?></a>

<?php
    }
}
wp_reset_postdata(); ?>

<?php
get_footer();
