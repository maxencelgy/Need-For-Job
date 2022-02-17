<?php
session_start();
get_header();
?>


<section id="single_blog">
    <div class="wrapBlog">

        <?php
        while (have_posts()) :
            the_post();
            echo '<h2>' . get_the_title() . '</h2>';
            echo  getImageFeatured(get_the_ID(), 'imgblog');
            echo '<p>' . get_the_content() . '</p>';


        endwhile; // End of the loop.
        ?>

    </div>
</section>



<?php
// get_sidebar();
get_footer();
