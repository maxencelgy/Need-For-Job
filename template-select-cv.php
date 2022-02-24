<?php
/* Template Name: Select Cv*/

get_header(); ?>

<section id="select">
    <div class="wrap_select">
        <div class="title_slect">
            <h2>Veuillez choisir un modèle de CV :)</h2>
        </div>
        <div class="CVS">
            <?php if (is_user_logged_in() == true) { ?>
                <div class="message"></div>
                <?php $args = array(
                    'post_type' => 'cv',
                    'posts_per_page' => 4,
                    'order' => 'ASC'
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        $metas = get_post_meta(get_the_ID());
                ?>
                        <div class="CV">
                            <?= getImageFeatured(get_the_ID(), 'imgcv', get_the_title()) ?>
                            <a href="<?= get_the_permalink() ?>" class="discoverTwo">Utiliser ce modèle</a>
                        </div>
                <?php
                    }
                }
                wp_reset_postdata(); ?>


            <?php  } else { ?>
                <?php $args = array(
                    'post_type' => 'cv',
                    'posts_per_page' => 4,
                    'order' => 'ASC'
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        $metas = get_post_meta(get_the_ID()); ?>
                        <div class="CV">
                            <?= getImageFeatured(get_the_ID(), 'imgcv', get_the_title()) ?>
                            <a href="<?= get_the_permalink() ?>" class="discover">Utiliser ce modèle</a>
                        </div>

                        <?php if (is_user_logged_in() == true) { ?>
                            <div class="message"></div>
                        <?php  } else { ?>
                            <div class="message">
                                <div class="popup">
                                    <h2>Continuer sans se connecter ?</h2>
                                    <p>Attention, si vous continuez sans vous connecté les recruteurs ne pourront pas vous trouvez
                                        il sera aussi impossible de modifier votre CV par la suite.</p>
                                    <div class="btnPop">
                                        <a href="<?= get_the_permalink() ?>" class="btnPop1">Continuer sans se connecter</a>
                                        <a href="<?= path('login'); ?>" class="btnPop2">Se connecter</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                <?php }
                }
                wp_reset_postdata(); ?>
            <?php } ?>

        </div>

        <div class="btnDiscover">
            <a href="">Voir plus de modèle</a>
        </div>

    </div>
    </div>
</section>




<?php
get_footer();
