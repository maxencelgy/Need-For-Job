<?php

/* Template Name: HomePage */

session_start();

if (!empty($_SESSION)) {
    $user_meta = get_user_meta($_SESSION['user']['id']);
}

get_header(); ?>

<?php   if(!empty($user_meta) && $user_meta['user_meta_role'][0]=='recruteur' ){ ?>
        <!--PAGE HOME QUAND RECRUTEUR CONNECTÉ-->
    <section id="home_recruteur">
        <div class="filter">
            <div class="title" data-aos="fade-up" data-aos-duration="3000">
                <h1>Need For Job</h1>
                <h2 id="typer_2">Bienvenue sur la partie recruteur ! 😁</h2>
                <a href="" class="btn-a" id="btn">Voir les CVs</a>
            </div>
        </div>
    </section>

<section id="info_recruteur">
    <div class="wrap">

        <div class="info_box">
            <div class="left_part_box">

                <div class="box">
                    <i class="fa-solid fa-address-book"></i>
                    <div class="box_txt">
                        <h2>Reperez les profils intéressants 👨‍💼</h2>
                        <p>Avec Need For Job, vos recherches seront facilités et en quelques cliques vous aurez accès à tout un tas de CV publié par un grand nombre d'utilisateur.</p>
                    </div>
                </div>

                <div class="box">
                    <i class="fa-solid fa-folder"></i>
                    <div class="box_txt">
                        <h2>Récupérez les CV 📃</h2>
                        <p>Vous pouvez aussi facilement télécharger les CV disponibles en ligne en PDF !</p>
                    </div>
                </div>

                <div class="box">
                    <i class="fa-solid fa-eye"></i>
                    <div class="box_txt">
                        <h2>Examinez les profils 👓</h2>
                        <p>En plus d'avoir la liste des CV disponible sur Need For Job, vous pouvez aussi consulter ceux-ci en détail !</p>
                    </div>
                </div>

            </div>

            <div class="right_part_box">
                <img src="<?php echo get_template_directory_uri() . '/asset/img/box_recruteur_img.jpg' ?>" alt="">
            </div>
        </div>

    </div>
</section>

    <div class="separator_card"></div>
        <?php }else{ ?>

    <!--PAGE HOME CLASSIQUE-->

<section id="home">
    <div class="filter">
        <div class="title" data-aos="fade-up" data-aos-duration="3000">
            <h1>Need For Job</h1>
            <h2 id="typer">Votre génerateur de CV en ligne 😁</h2>
            <a href="" class="btn-a" id="btn">Créer un CV !</a>
        </div>
    </div>
</section>

<section id="presentation">
    <div class="wrap">
        <div data-aos="fade-right" data-aos-duration="1000" class="presentation_box">
            <p class="presentation_titre">⌛ Rapide et facile !</p>
            <p>Notre outil de rédaction de CV en ligne permet aisément à chacun(e) de faire un CV professionnel de manière rapide. Vous introduisez vos données personnelles avant d'entamer la rédaction du contenu de votre CV. Pour conclure, vous choisissez une mise en page parmi nos 36 versions de CV proposées et vous téléchargez votre CV.</p>
        </div>
        <div data-aos="fade-left" data-aos-duration="1000" class="presentation_box2">
            <p class="presentation_titre">👔 Chance augmentée de trouver un emploi !</p>
            <p>La rédaction d'un CV pertinent et professionnel vous distinguera des autres demandeurs d'emploi. Vous disposerez ainsi d'environ 80% de chance supplémentaire pour décrocher une invitation pour un entretien de sélection</p>
        </div>
        <div data-aos="fade-right" data-aos-duration="1000" class="presentation_box">
            <p class="presentation_titre"> 😎 Pas besoin d'inscription !</p>
            <p>Vous n'avez pas besoin d'être inscrit sur le site de Need for job pour créer votre CV en ligne, il vous suffit simplement de cliquer sur le bouton "Créer mon cv".</p>
        </div>
    </div>

</section>




<section id="cards">
    <div class="titre_card">
        <h2>Nos Templates de CV</h2>
        <div class="separator_card"></div>
    </div>
    <div class="wrap_card">
        <div class="flexslider carousel">
            <ul class="slides">

                <li class="item">
                    <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt="" />
                    <div class="overlay"> <a href="#">Voir les modèles </a></div>
                </li>

                <li class="item">
                    <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt="" />
                    <div class="overlay"> <a href="#">Voir les modèles </a></div>
                </li>
                <li class="item">
                    <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt="" />
                    <div class="overlay"> <a href="#">Voir les modèles </a></div>
                </li>
                <li class="item">
                    <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt="" />
                    <div class="overlay"> <a href="#">Voir les modèles </a></div>
                </li>
                <li class="item">
                    <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt="" />
                    <div class="overlay"> <a href="#">Voir les modèles </a></div>
                </li>
                <li class="item">
                    <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt="" />
                    <div class="overlay"> <a href="#">Voir les modèles </a></div>
                </li>
                <li class="item">
                    <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt="" />
                    <div class="overlay"> <a href="#">Voir les modèles </a></div>
                </li>
                <li class="item">
                    <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt="" />
                    <div class="overlay"> <a href="#">Voir les modèles </a></div>
                </li>
                <li class="item">
                    <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt="" />
                    <div class="overlay"> <a href="#">Voir les modèles </a></div>
                </li>
                <li class="item">
                    <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt="" />
                    <div class="overlay"> <a href="#">Voir les modèles </a></div>
                </li>
                <li class="item">
                    <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt="" />
                    <div class="overlay"> <a href="#">Voir les modèles </a></div>
                </li>
                <li class="item">
                    <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt="" />
                    <div class="overlay"> <a href="#">Voir les modèles </a></div>
                </li>
                <li class="item">
                    <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt="" />
                    <div class="overlay"> <a href="#">Voir les modèles </a></div>
                </li>

                <!-- items mirrored twice, total of 12 -->
            </ul>
        </div>
    </div>
</section>




<section id="pub">
    <div data-aos="fade-down"
         data-aos-easing="linear"
         data-aos-duration="1000" class="pub_titre">
        <p class="pub_texte_titre">👨‍💼 Des recruteurs actifs !</p>
        <br>
        <p>Publiez votre CV pour avoir des chances d'être contacté !</p>
        <p>Les recruteurs ont toujours un oeil sur les CVs disponible sur Need For Job !</p>
        <p>Une chance pour vous de trouver votre futur stage ou emplois ! </p>
    </div>
</section>

<section id="entreprise">
    <div class="entreprise_text">
        <p>Ils sont maintenants salariés dans des grandes entreprises.</p>
    </div>
    <div class="entreprises">
        <ul>
            <li><img src="<?php echo get_template_directory_uri() . '/asset/img/apple.png' ?>" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri() . '/asset/img/google.png' ?>" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri() . '/asset/img/burger.png' ?>" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri() . '/asset/img/ccourrir.png' ?>" alt=""></li>
        </ul>
    </div>
</section>



  <?php  } ?>



<?php get_footer();
