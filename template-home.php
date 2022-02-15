<?php

/* Template Name: HomePage */

session_start();

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


<section id="cards">
    <div class="wrap_card">
        <div class="card">
            <a href=""> <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt=""></a>
            <a href=""><span class="card_plus">Voir plus</span></a>
        </div>
        <div class="card">
            <a href=""> <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt=""></a>
            <a href=""><span class="card_plus">Voir plus</span></a>
        </div>
        <div class="card">
            <a href=""> <img src=<?php echo get_template_directory_uri() . '/asset/img/cv1.jpg' ?> alt=""></a>
            <a href=""><span class="card_plus">Voir plus</span></a>
        </div>

    </div>

</section>

<section id="pub">
    <div class="pub_titre">
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
