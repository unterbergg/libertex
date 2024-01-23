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

 
$curlang = pll_current_language();

if (function_exists('get_field')) {
	$disclaimer = get_field($curlang == 'ru' ? 'disclaimer' : "disclaimer_$curlang" , 'options');
	$email = get_field('email', 'options');
	$phone = get_field('phone', 'options');
}
?>
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

	<header class="header">
		<?php if ($disclaimer): ?>
			<div class="header__notice">
				<div class="wrapper">
					<?php echo $disclaimer; ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="header__top">
			<div class="wrapper">
				<a href="tel:<?php echo $phone; ?>" class="header__phone">
					<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/phone.svg'); ?>
					<?php echo $phone; ?>
				</a>
				<div>
					<div class="trp_language_switcher_shortcode">
						<div class="trp-language-switcher trp-language-switcher-container" data-no-translation="">
							<div class="trp-ls-shortcode-current-language" style="width: 71px;">
								<a href="<?php echo get_permalink(pll_get_post( $post->ID, 'ru' )); ?>" 
									class="trp-ls-shortcode-disabled-language trp-ls-disabled-language" 
									title="Russian"
									onclick="event.preventDefault()"
								>
									<img class="trp-flag-image"
										src="<?php echo get_template_directory_uri(); ?>/assets/icons/<?php echo get_locale();?>.png"
										width="18" height="12" alt="<?php echo get_locale();?>"> </a>
							</div>
							<div class="trp-ls-shortcode-language" style="width: 71px; display: none;">
								<a href="<?php echo get_permalink(pll_get_post( $post->ID, 'ru' )); ?>" class="trp-ls-disabled-language" title="Russian">
									<img class="trp-flag-image"
										src="<?php echo get_template_directory_uri(); ?>/assets/icons/ru_RU.png"
										width="18" height="12" alt="ru_RU" title="Russian"> </a>
								<a href="<?php echo get_permalink(pll_get_post( $post->ID, 'en' )); ?>" title="English">
									<img class="trp-flag-image"
										src="<?php echo get_template_directory_uri(); ?>/assets/icons/en_US.png"
										width="18" height="12" alt="en_US" title="English"> </a>

							</div>
							<script type="application/javascript">
								var trp_ls_shortcodes = document.querySelectorAll('.trp_language_switcher_shortcode .trp-language-switcher');
								if (trp_ls_shortcodes.length > 0) {
									var trp_el = trp_ls_shortcodes[trp_ls_shortcodes.length - 1];

									var trp_shortcode_language_item = trp_el.querySelector('.trp-ls-shortcode-language')
									var trp_ls_shortcode_width = trp_shortcode_language_item.offsetWidth + 16;
									trp_shortcode_language_item.style.width = trp_ls_shortcode_width + 'px';
									trp_el.querySelector('.trp-ls-shortcode-current-language').style.width = trp_ls_shortcode_width + 'px';
									trp_shortcode_language_item.style.display = 'none';
								}
							</script>
						</div>
					</div>
					<ul>
						<li class="mobile-only">
							<a href="mailto:<?php echo $email; ?>">
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/mail.svg'); ?>
							</a>
						</li>
						<li>
							<a href="https://fxclub.by/filials">
								<span>
									<?php _e('Наши офисы', 'lbrtx'); ?>
								</span>
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/location.svg'); ?>
							</a>
						</li>
						<li>
							<a href="https://support.fxclub.by/ru-RU/support/home" target="_blank">
								<span>
									<?php _e('Центр поддержки', 'lbrtx'); ?>
								</span>
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/support.svg'); ?>
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
					<?php
					wp_nav_menu([
						'menu' => 'header__menu' . pll_current_language() == 'ru' ? '' : "_$curlang" ,
						'menu_class' => 'header__menu',
						'items_wrap' => '<ul class="%2$s">%3$s</ul>',
					]);
					?>
					<div class="header__buttons">
						<a href="#">
							<?php _e('Войти', 'lbrtx'); ?>
						</a>
						<a href="<?php echo home_url(); ?>/registration<?php echo pll_current_language() == 'ru' ? '' : "-$curlang"?>" class="button small">
							<span>
								<?php _e('Регистрация', 'lbrtx'); ?>
							</span>
						</a>
						<div class="header__hamburger open">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<mask id="mask0_4682_1764" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24"
									height="24">
									<path d="M24 0H0V24H24V0Z" fill="white" />
								</mask>
								<g mask="url(#mask0_4682_1764)">
									<path d="M3 6H21V8H3V6ZM3 11H21V13H3V11ZM3 16H21V18H3V16Z" fill="#161616" />
								</g>
							</svg>
						</div>
						<div class="header__menu-mobile">
							<header>
								<a href="<?php echo home_url(); ?>" class="header__logo">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo">
								</a>
								<div class="header__close">
									<svg xmlns="http://www.w3.org/2000/svg" width="32" height="26" viewBox="0 0 32 26" fill="none">
										<path
											d="M25.3334 5.5465L23.4534 3.6665L16.0001 11.1198L8.54675 3.6665L6.66675 5.5465L14.1201 12.9998L6.66675 20.4532L8.54675 22.3332L16.0001 14.8798L23.4534 22.3332L25.3334 20.4532L17.8801 12.9998L25.3334 5.5465Z"
											fill="#6F6F6F" />
									</svg>
								</div>
							</header>
							<div class="header__menu-mobile__wrapper">
								<div class="header__buttons-mob">
									<a href="#">
										<?php _e('Войти', 'lbrtx'); ?>
									</a>
									<a href="#" class="button small">
										<span>
											<?php _e('Регистрация', 'lbrtx'); ?>
										</span>
									</a>
								</div>
								<?php
								wp_nav_menu([
									'menu' => 'header__menu' . pll_current_language() == 'ru' ? '' : "_$curlang" ,
									'menu_class' => '',
									'items_wrap' => '<ul>%3$s</ul>',
								]);
								?>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</header><!-- #masthead -->