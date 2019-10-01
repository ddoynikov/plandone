<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plandone
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic"
        rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="container header ">
        <div class="menu">
            <div class="header__main">
                
                <div class="header__item">
                    <a href="#" class="header__logo">
                        <img src="/img/logo-main.png" alt="Plan Done" class="logo-main">
                    </a>
                </div>
                
                <div class="hamburger-menu header__item ">
                    <input id="menu__toggle" type="checkbox" />
                    <label class="header__item menu__btn" for="menu__toggle">
                        <span></span>
                    </label>
                    <ul class="header__menu menu__box">
                        <li class="menu__item"><a href="index.html" class="menu__link">Главная</a></li>
                        <li class="menu__item"><a href="about.html" class="menu__link">О
                                проекте</a></li>
                        <li class="menu__item"><a href="courses.html" class="menu__link">Курсы</a></li>
                        <li class="menu__item"><a href="blog.html" class="menu__link">Блог</a>
                        </li>
                        <li class="menu__item"><a href="contacts.html" class="menu__link">Контакты</a></li>
                    </ul>
                </div>
            <div class="header__item">
                <a href="#" class="header__button">Начать обучение</a>
            </div>
</div>
<!--
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'plandone' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$plandone_description = get_bloginfo( 'description', 'display' );
			if ( $plandone_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $plandone_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'plandone' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	</header>

	<div id="content" class="site-content">
			-->