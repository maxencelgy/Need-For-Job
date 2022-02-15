
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="masthead" class="site-header">
			<div class="site-branding">
                <div class="header_img">
                    <img src="<?php echo get_template_directory_uri().'/asset/img/NeedForJobv2.png' ?>" alt="">
                </div>
                <div class="navigation">
                    <nav>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Connexion</a></li>
                            <li><a href="#">Inscription</a></li>
                            <li><a href="#">Créer un CV</a></li>
                            <li><a href="#">Voir les modèles</a></li>
                        </ul>
                    </nav>
                </div>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
		);
		?>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->