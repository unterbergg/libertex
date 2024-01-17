<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package libertex
 */

get_header();
?>

	<main>

		<section class="hero">
			<div class="wrapper">
				<h1 class="hero__title">
					<?php _e('Инвестируй на финансовых рынках c', '')?>
					<span class="text-colored">Forex Club</span>
				</h1>
				<div class="hero__buttons">
					<a href="" class="button rounded">
						<?php _e('Открыть аккаунт', 'lbrtx'); ?>
					</a>
					<a href="" class="button rounded ghost">
						<?php _e('Демо-аккаунт', 'lbrtx'); ?>
					</a>
				</div>
			</div>
			
		</section>

		<section class="tools">
			<div class="wrapper">
				<h2 class="tools__title">
					<?php _e('Инвестиционные инструменты', 'lbrtx'); ?>
				</h2>
				<div class="tools__grid">
					<div class="tools__item">
						<div>
							<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/circum_dollar.svg');?>
						</div>
						<h5>
							<?php _e('Валюты', 'lbrtx'); ?>
						</h5>
						<p>
							<?php _e('Позволяют совершать инвестиции практически на любых событиях в мире. Котировки валют меняются 5 дней в неделю, круглосуточно, ежеминутно.', 'lbrtx'); ?>
						</p>
						<img class="tools__item-bg" src="<?php echo get_template_directory_uri();?>/assets/img/flags_bg.png" alt="">
					</div>
					<div class="tools__item">
						<div>
							<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/circ_water.svg');?>
						</div>
						<h5>
							<?php _e('Валюты', 'lbrtx'); ?>
						</h5>
						<p>
							<?php _e('Позволяют совершать инвестиции практически на любых событиях в мире. Котировки валют меняются 5 дней в неделю, круглосуточно, ежеминутно.', 'lbrtx'); ?>
						</p>
					</div>
					<div class="tools__item">
						<div>
							<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/gold.svg');?>
							
						</div>
						<h5>
							<?php _e('Валюты', 'lbrtx'); ?>
						</h5>
						<p>
							<?php _e('Позволяют совершать инвестиции практически на любых событиях в мире. Котировки валют меняются 5 дней в неделю, круглосуточно, ежеминутно.', 'lbrtx'); ?>
						</p>
					</div>
					<div class="tools__item">
						<div>
							<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/circ_flag.svg');?>
						</div>
						<h5>
							<?php _e('Валюты', 'lbrtx'); ?>
						</h5>
						<p>
							<?php _e('Позволяют совершать инвестиции практически на любых событиях в мире. Котировки валют меняются 5 дней в неделю, круглосуточно, ежеминутно.', 'lbrtx'); ?>
						</p>
					</div>
					<div class="tools__item">
						<div>
							<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/circ_apple.svg');?>
						</div>
						<h5>
							<?php _e('Валюты', 'lbrtx'); ?>
						</h5>
						<p>
							<?php _e('Позволяют совершать инвестиции практически на любых событиях в мире. Котировки валют меняются 5 дней в неделю, круглосуточно, ежеминутно.', 'lbrtx'); ?>
						</p>
					</div>
					<div class="tools__item">
						<div>
							<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/circ_bitcoin.svg');?>
						</div>
						<h5>
							<?php _e('Валюты', 'lbrtx'); ?>
						</h5>
						<p>
							<?php _e('Позволяют совершать инвестиции практически на любых событиях в мире. Котировки валют меняются 5 дней в неделю, круглосуточно, ежеминутно.', 'lbrtx'); ?>
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="features">
			<div class="wrapper">
				<h3 class="features__title">
					<?php _e('Преимущества Libertex', 'lbrtx'); ?>
				</h3>
				<div class="features__items">
					<div class="features__item">
						<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/check.svg');?>
						<?php _e('150 беспоставочных внебиржевых финансовых инструментов.', 'lbrtx'); ?>
					</div>
					<div class="features__item">
						<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/check.svg');?>
						<?php _e('Одна платформа для любого устройства.', 'lbrtx'); ?>
					</div>
					<div class="features__item">
						<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/check.svg');?>
						<?php _e('Инвестирование без специальных знаний.', 'lbrtx'); ?>
					</div>
				</div>
			</div>
		</section>

		<section class="online">
			<div class="wrapper">
				<h2 class="online__title">
					<?php _e('Ключевые характеристики онлайн-платформы', 'lbrtx')?>
				</h2>
				<div class="online__row">
					<div class="onliner__col">
						<div class="online__items">
							<div class="online__item">
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/check.svg');?>	
								<span>
									<?php _e('Все популярные финансовые инструменты в одной платформе.', 'lbrtx'); ?>		
								</span>
							</div>
							<div class="online__item">
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/check.svg');?>	
								<span>
									<?php _e('Все популярные финансовые инструменты в одной платформе.', 'lbrtx'); ?>		
								</span>
							</div>
							<div class="online__item">
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/check.svg');?>	
								<span>
									<?php _e('Все популярные финансовые инструменты в одной платформе.', 'lbrtx'); ?>		
								</span>
							</div>
							<div class="online__item">
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/check.svg');?>	
								<span>
									<?php _e('Все популярные финансовые инструменты в одной платформе.', 'lbrtx'); ?>		
								</span>
							</div>
						</div>
					</div>
					<div class="online__col">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ipad.png" alt="IPad">
					</div>
				</div>
				<div class="online__cta">
					<a href="#" class="button">
						<?php _e('Как инвестировать в Libertex', 'lbrtx'); ?>
					</a>
				</div>
			</div>
		</section>		

	</main><!-- #main -->

<?php
get_footer();
