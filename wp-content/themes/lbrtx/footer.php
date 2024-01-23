<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package libertex
 */

$curlang = pll_current_language();
if (function_exists('get_field')) {
	$content = get_field($curlang == 'ru' ? 'content' : "content_$curlang" , 'options');
}
?>
	<footer class="footer">
		<div class="wrapper">
			<div class="footer__row">
				<div class="footer__col">
					<?php echo $content; ?>
					<div class="footer__services">
						<img src="<?php echo get_template_directory_uri()?>/assets/img/macafee.png" alt="McAfee">
						<img src="<?php echo get_template_directory_uri()?>/assets/img/ssl.png" alt="SSL Secured">
						<img src="<?php echo get_template_directory_uri()?>/assets/img/payment.png" alt="Payment Secure">
					</div>
				</div>
				<div class="footer__col">
					<?php 
						$footerNav = wp_nav_menu( [
							'menu'            => 'footer__menu' . pll_current_language() == 'ru' ? '' : "_$curlang" ,
							'menu_class'      => 'footer__menu',
							'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
							'echo'						=> false,
						] );
						echo str_replace('$lang', str_replace('_', '-', get_locale()), $footerNav);
					?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	<button id="scrollToTop" class="button">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M17 14L12 9L7 14" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
	</svg>
	</button>
<?php wp_footer(); ?>

</body>
</html>
