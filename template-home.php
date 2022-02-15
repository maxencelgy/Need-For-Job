<?php

/* Template Name: HomePage */


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

<section id="contact"></section>















<?php get_footer();
