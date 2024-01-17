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

?>

	<footer class="footer">
		<div class="wrapper">
			<div class="footer__row">
				<div class="footer__col">
					<p>
						© 2015–2023, ООО "Финансовая Компания "Форекс Клуб" 
						<a href="https://download.fxclub.by/Condition/2015-12-16_certificate.pdf" target="_blank">зарегистрировано</a> 
						Минским горисполкомом 16.12.2015 г. Регистрационный номер 192580558
					</p>
					<p>
						Республика Беларусь, г. Минск, 220030, ул. Немига, 5, офис 503
					</p>
					<p>
						<a href="https://download.fxclub.by/Condition/2016-04-19_certificate.pdf" target="_blank">Свидетельство</a>
						№2 выдано 19.04.2016 Национальным банком Республики Беларусь.
					</p>
					<p>
						<span class="text-3">Предупреждение:</span> <br>
						совершение операций с беспоставочными внебиржевыми финансовыми инструментами имеет рискованный характер.
						Возможность получения прибыли неразрывно связана с риском получения убытков.
						При совершении операций к клиентам не переходят право собственности и иные права на базовые активы.
						Полученные прибыли в прошлом не гарантируют прибылей в будущем.
						Воспользуйтесь обучающими сервисами от компании для понимания рисков, прежде, чем начинать операции.
					</p>
					<div class="footer__services">
						<img src="<?php echo get_template_directory_uri()?>/assets/img/macafee.png" alt="McAfee">
						<img src="<?php echo get_template_directory_uri()?>/assets/img/ssl.png" alt="SSL Secured">
						<img src="<?php echo get_template_directory_uri()?>/assets/img/payment.png" alt="Payment Secure">
					</div>
				</div>
				<div class="footer__col">
					<ul class="footer__menu">
						<li>
							<a href="#">
								<?php _e('Как начать инвестировать', 'lbrtx'); ?>
							</a>
						</li>
						<li>
							<a href="#">
								<?php _e('Платформы', 'lbrtx'); ?>
							</a>
						</li>
						<li>
							<a href="#">
								<?php _e('Акции', 'lbrtx'); ?>
							</a>
						</li>
						<li>
							<a href="#">
								<?php _e('Помощь', 'lbrtx'); ?>
							</a>
						</li>
						<li>
							<a href="#">
								<?php _e('Новости', 'lbrtx'); ?>
							</a>
						</li>
						<li>
							<a href="#">
								<?php _e('О компании', 'lbrtx'); ?>
							</a>
						</li>
						<li>
							<a href="#">
								<?php _e('Наши офисы', 'lbrtx'); ?>
							</a>
						</li>
						<li>
							<a href="#">
								<?php _e('Центр Поддержки', 'lbrtx'); ?>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
