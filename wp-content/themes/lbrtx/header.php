<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package libertex
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

	<header class="header">
		<div class="header__notice">
			<div class="wrapper">
					<?php _e('Совершение операций с беспоставочными внебиржевыми финансовыми инструментами имеет рискованный характер.
					Возможность получения прибыли неразрывно связана с риском получения убытков.
					При совершении операций к клиентам не переходят право собственности и иные права на базовые активы', 'lbrtx') ;?>
			</div>
		</div>
		<div class="header__top">
			<div class="wrapper">
				<a href="tel:<?php _e('+375 (33) 905-22-20', 'lbrtx'); ?>" class="header__phone">
					<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/phone.svg');?>
					<?php _e('+375 (33) 905-22-20', 'lbrtx'); ?>
				</a>
				<div>
					<ul>
						<li>
							<a href="https://fxclub.by/filials">
								<?php _e('Наши офисы', 'lbrtx'); ?>
							</a>
						</li>
						<li>
							<a href="https://support.fxclub.by/ru-RU/support/home" target="_blank">
								<?php _e('Центр Поддержки', 'lbrtx'); ?>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div>
			<div class="wrapper">
				<div class="header__navigation">
					<a href="<?php echo home_url(); ?>" class="header__logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo">
					</a>
					<ul class="header__menu">
						<li>
							<a href="#"><?php _e('Центр Поддержки', 'lbrtx'); ?></a>
						</li>
						<li>
							<a href="#"><?php _e('Платформы', 'lbrtx'); ?></a>
						</li>
						<li>
							<a href="#"><?php _e('Акции', 'lbrtx'); ?></a>
						</li>
						<li>
							<a href="#"><?php _e('Помощь', 'lbrtx'); ?></a>
						</li>
						<li>
							<a href="#"><?php _e('Новости', 'lbrtx'); ?></a>
						</li>
						<li>
							<a href="#"><?php _e('О компании', 'lbrtx'); ?></a>
						</li>
					</ul>
					<div class="header__buttons">
						<a href="#"><?php _e('Войти', 'lbrtx'); ?></a>
						<a href="#" class="button small">
							<?php _e('Регистрация', 'lbrtx'); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
