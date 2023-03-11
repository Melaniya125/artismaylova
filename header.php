<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mirage-event
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div class="wrapper" id="app" :class="{isMobile, isTablet}">
		<div class="decor decor__first">
			<img src="<?= get_template_directory_uri();?>/src/dist/img/decor.svg" width="100%" alt="">
		</div>
		<header class="wow fadeInDown" data-wow-delay="0.1s">
			<div class="container">
				<div class="header">
					<div class="header__in">
						<a href="/" class="header__logo">
							<img src="<?= get_template_directory_uri();?>/src/dist/img/logo.svg" width="100%" alt="logo">
						</a>
						<a href="/" class="header__logo--mobile">
							<img src="<?= get_template_directory_uri();?>/src/dist/img/logo_mobile.svg" alt="logo">
						</a>
						<div class="header__middle">
							<nav class="header__menu">
								<ul>
									<li><a href="#">Площадки</a></li>
									<li><a href="#">Кейсы</a></li>
									<li><a href="#">Услуги</a></li>
									<li><a href="#">Отзывы</a></li>
									<li><a href="#">Контакты</a></li>
								</ul>
							</nav>
							<div class="header-number"><a href="tel:+79999999999">+9 (999) 999-99-99</a></div>
							<div class="header__menu-opener menuOpener">
								<img src="<?= get_template_directory_uri();?>/src/dist/img/burger_closed.svg" alt="">
								<img src="<?= get_template_directory_uri();?>/src/dist/img/burger_opened.svg" alt="">
							</div>
						</div>
						<button type="submit" class="modalOpener">Отправить заявку</button>
					</div>
				</div>
			</div>
		</header>