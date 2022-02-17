<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="header_img">
				<a href="<?= path('/'); ?>"><img src="<?php echo get_template_directory_uri() . '/asset/img/NeedForJobv2.png' ?>" /></a>

			</div>
            <?php
            if (!empty($_SESSION)){
            $user_meta=get_user_meta($_SESSION['user']['id']);
            }
            ?>
			<div class="navigation">
				<nav>
					<ul>
						<li><a href="<?= path('/'); ?>">Accueil</a></li>


                        <!--MENU QUAND CONNECTÉ-->
                        <?php if(!empty($_SESSION)){ ?>
                            <li><a href="<?= path('logout'); ?>">Se déconnecter</a></li>
                        <?php if($user_meta['user_meta_role'][0]=='utilisateur'){ ?>
                            <li><a href="<?= path('profil'); ?>">Mon profil</a></li>
                            <li><a href="#cards">Voir les modèles</a></li>
                            <?php } ?>
                            <?php if($user_meta['user_meta_role'][0]=='recruteur'){ ?>
                                <li><a href="<?= path('profil'); ?>">Mon Profil</a></li>
                                <li><a href="<?= path('recruteur'); ?>">Liste des CVs</a></li>
                            <?php } ?>


                        <!--MENU QUAND DECONNECTÉ-->
                      <?php  } else{ ?>
						<li><a href="<?= path('login'); ?>">Connexion</a></li>
						<li><a href="<?= path('register'); ?>">Inscription</a></li>
                        <?php } ?>
					</ul>
				</nav>
			</div>
		</div>
	</header>