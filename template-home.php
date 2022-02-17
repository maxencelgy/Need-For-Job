<?php

/* Template Name: HomePage */

session_start();
if (!empty($_SESSION)) {
    $user_meta = get_user_meta($_SESSION['user']['id']);
}



get_header(); ?>


<section id="home">
    <div class="filter">
        <div class="title" data-aos="fade-up" data-aos-duration="3000">
            <h1>Need For Job</h1>
            <h2 id="typer">Votre génerateur de CV en ligne</h2>
            <a href="" class="btn-a" id="btn">Créer un CV !</a>
        </div>
    </div>
</section>

<section id="presentation">
    <div data-aos="fade-right" data-aos-duration="1000" class="presentation_box">
        <p class="presentation_titre">Rapide et facile !</p>
        <p>Notre outil de rédaction de CV en ligne permet aisément à chacun(e) de faire un CV professionnel de manière rapide. Vous introduisez vos données personnelles avant d'entamer la rédaction du contenu de votre CV. Pour conclure, vous choisissez une mise en page parmi nos 36 versions de CV proposées et vous téléchargez votre CV.</p>
    </div>
    <div data-aos="fade-left" data-aos-duration="1000" class="presentation_box2">
        <p class="presentation_titre">Chance augmenté de trouver un emploi !</p>
        <p>La rédaction d'un CV pertinent et professionnel vous distinguera des autres demandeurs d'emploi. Vous disposerez ainsi d'environ 80% de chance supplémentaire pour décrocher une invitation pour un entretien de sélection</p>
    </div>
    <div data-aos="fade-right" data-aos-duration="1000" class="presentation_box">
        <p class="presentation_titre">Pas besoin d'inscription !</p>
        <p>Vous n'avez pas besoin d'être inscrit sur le site de Need for job pour créer votre CV en ligne, il vous suffit simplement de cliquer sur le bouton "Créer mon cv"</p>
    </div>

</section>


<div class="separator_home_page"></div>


<section id="cards">
    <div class="titre_card">
        <h2>Nos Templates de CV</h2>
        <div class="separator_card"></div>
    </div>
    <div class="wrap_card">
        <div class="flexslider carousel">
            <ul class="slides">
                <li>
                <li class="item">
                    <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt="" />
                    <div class="overlay"> <a href="#">Voir les modèles </a></div>
                </li>
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
        <p class="pub_texte_titre">Des recruteurs actifs</p>
        <br>
        <p>Retrouvez des centaines de candidatures en un clic</p>
        <p>Recherche d'un alternant.e ou d'un stagiare</p>
        <p>Trouvez vos futurs pépites ici !</p>
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

<?php get_footer();
