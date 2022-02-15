<?php

/* Template Name: HomePage */

session_start();

get_header(); ?>


<section id="home">
    <div class="filter">
        <h1>Need For Job</h1>
        <h2>Votre génerateur de CV en ligne</h2>
    </div>
</section>


<section id="cards">
    <div class="wrap_card">
            <div class="card"> <a href=""> <img src="https://fr.mycvstore.com/wp-content/uploads/2020/02/Sample-CV-for-Job.jpg" alt=""> </a>  <a href=""><span class="card_plus hidden" >Voir plus</span></a></div>
            <div class="card"> <a href=""><img src="https://fr.mycvstore.com/wp-content/uploads/2020/02/Professional-CV-Template.jpg" alt=""></a> <a href=""><span class="card_plus hidden" >Voir plus</span></a></div>
            <div class="card"><a href=""><img src="https://th.bing.com/th/id/R.1a9eec47c53e43baf3bc7624481e863e?rik=Kj9ybqWtvHWFLA&pid=ImgRaw&r=0" alt=""> <a href=""><span class="card_plus hidden" >Voir plus</span></a></div>
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

<section id="contact"></section>















<?php get_footer();
