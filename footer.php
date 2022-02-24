

<?php wp_footer(); ?>

<?php
if (!empty($_SESSION)) {
    $user_meta = get_user_meta($_SESSION['user']['id']);
}
if(!empty($user_meta) && $user_meta['user_meta_role'][0]=='recruteur' ){ ?>
    <footer id="footer_recruteur">
        <div class="wrap_footer">
            <div class="copyright">
                <a href="<?= path('/'); ?>"><img src="<?php echo get_template_directory_uri() . '/asset/img/NeedForJobv2.png' ?>" /></a>
            </div>
            <div class="separator_footer"></div>
            <div class="footer_nav">
                <nav>
                    <ul>
                        <li><a href="#">Mentions légales</a></li>
                        <li><a href="#">Créer un CV</a></li>
                        <li><a href="#">À propos de nous</a></li>
                    </ul>
                </nav>
            </div>
            <div class="separator_footer"></div>
            <div class="reseau_footer">
                <a href=""><i class="fab fa-facebook-messenger fb"></i></a>
                <a href=""><i class="fab fa-instagram insta"></i></a>
                <a href=""><i class="fab fa-snapchat-ghost snap"></i></a>
            </div>
        </div>
    </footer>
<?php }else{ ?>
    <footer id="footer">
        <div class="wrap_footer">
            <div class="copyright">
                <a href="<?= path('/'); ?>"><img src="<?php echo get_template_directory_uri() . '/asset/img/NeedForJobv2.png' ?>" /></a>
            </div>
            <div class="separator_footer"></div>
            <div class="footer_nav">
                <nav>
                    <ul>
                        <li><a href="<?= path('mentions-legales') ?>">Mentions légales</a></li>
                        <li><a href="#">Créer un CV</a></li>
                        <li><a href="#">À propos de nous</a></li>
                    </ul>
                </nav>
            </div>
            <div class="separator_footer"></div>
            <div class="reseau_footer">
                <a href="#"><i class="fab fa-facebook-messenger fb"></i></a>
                <a href="#"><i class="fab fa-instagram insta"></i></a>
                <a href="#"><i class="fab fa-snapchat-ghost snap"></i></a>
            </div>
        </div>
    </footer>
<?php  } ?>

</body>

</html>