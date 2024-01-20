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
				<div class="hero__img mobile-only">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="IPhone">
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
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/bitcoin_shadow.svg');?>	
								<span>
									<?php _e('Все популярные финансовые инструменты в одной платформе.', 'lbrtx'); ?>		
								</span>
							</div>
							<div class="online__item">
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/download_shadow.svg');?>	
								<span>
									<?php _e('Не требует скачивания и установки.', 'lbrtx'); ?>		
								</span>
							</div>
							<div class="online__item">
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/earth_shadow.svg');?>	
								<span>
									<?php _e('Встроенные инструменты для анализа рынка.', 'lbrtx'); ?>		
								</span>
							</div>
							<div class="online__item">
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/money_shadow.svg');?>	
								<span>
									<?php _e('Быстрый доступ к финансовым рынкам и отсутствие скрытых комиссий.', 'lbrtx'); ?>		
								</span>
							</div>
							<div class="online__item">
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/shield_shadow.svg');?>	
								<span>
									<?php _e('Трехступенчатая система защиты ваших данных.', 'lbrtx'); ?>		
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

		<section class="partners">
			<div class="wrapper">
				<div class="partners__wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/visa.png" alt="Visa">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mastercard.png" alt="Master Card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/belcart.png" alt="Belcart">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sberbank.png" alt="Sber">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/visa_sec.png" alt="Visa Secure">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/belcart2.png" alt="Belcart2">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/webpay.png" alt="Wbpat">
				</div>
			</div>
		</section>

		<section class="news">
			<div class="wrapper">
				<div class="news__header">
					<h2 class="news__title">
						Новости
					</h2>
					<a href="#" class="button ghost accent">
						Читать все
					</a>
				</div>
				<div class="news__items-large">
					<a href="#" class="news__item">
						<img 
							src="<?php echo get_template_directory_uri(); ?>/assets/img/post1.jpg" 
							alt="Post 1" 
							class="news__thumb"
						>
						<h6 class="news__title">
							Изменения в расписании совершения операций по ряду инструментов
						</h6>
						<p class="news__description">
							Уважаемые Клиенты!Просим вас обратить внимание на изменения в расписании совершения операций по ряду инструментов, 
							которое произойдет в связи с грядущими в июле праздниками в США
						</p>
						<span class="news__meta">Пн, 08/26/2022 - 19:54</span>
					</a>
					<a href="#" class="news__item">
						<img 
							src="<?php echo get_template_directory_uri(); ?>/assets/img/post2.jpg" 
							alt="Post 2"
							class="news__thumb"
						>
						<h6 class="news__title">
							Изменения в расписании совершения операций по ряду инструментов
						</h6>
						<p class="news__description">
							Уважаемые Клиенты!Просим вас обратить внимание на изменения в расписании совершения операций по ряду инструментов, 
							которое произойдет в связи с грядущими в июле праздниками в США
						</p>
						<span class="news__meta">Пн, 08/26/2022 - 19:54</span>
					</a>
					<a href="#" class="news__item">
						<img 
							src="<?php echo get_template_directory_uri(); ?>/assets/img/post3.jpg" 
							alt="Post 3"
							class="news__thumb"
						>
						<h6 class="news__title">
							Изменения в расписании совершения операций по ряду инструментов
						</h6>
						<p class="news__description">
							Уважаемые Клиенты!Просим вас обратить внимание на изменения в расписании совершения операций по ряду инструментов, 
							которое произойдет в связи с грядущими в июле праздниками в США
						</p>
						<span class="news__meta">Пн, 08/26/2022 - 19:54</span>
					</a>
				</div>
				<hr>
				<div class="news__items">
					<a href="#" class="news__item">
						<h6 class="news__title">
							Изменения в расписании совершения операций по ряду инструментов
						</h6>
						<span class="news__meta">Пн, 08/26/2022 - 19:54</span>
					</a>
					<a href="#" class="news__item">
						<h6 class="news__title">
							Изменения в расписании совершения операций по ряду инструментов
						</h6>
						<span class="news__meta">Пн, 08/26/2022 - 19:54</span>
					</a>
					<a href="#" class="news__item">
						<h6 class="news__title">
							Изменения в расписании совершения операций по ряду инструментов
						</h6>
						<span class="news__meta">Пн, 08/26/2022 - 19:54</span>
					</a>
					<a href="#" class="news__item">
						<h6 class="news__title">
							Изменения в расписании совершения операций по ряду инструментов
						</h6>
						<span class="news__meta">Пн, 08/26/2022 - 19:54</span>
					</a>
				</div>
			</div>
		</section>

		<section class="apps">
			<div class="wrapper">
				<div class="apps__items">
					<div class="apps__item">
						<div>
							<h5 class="apps__title">
								<span class="text-colored">
									Мобильный Libertex для iOS и Android
								</span>
							</h5>
							<p>
								Инвестируйте на финансовых рынках в любое время в любом месте. 
								Мгновенный доступ к лучшим бес-посставочным внебиржевым финансовым инструментам прямо с вашего смартфона.
							</p>
						</div>
						<div class="apps__links">
							<a href="#">
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/img/app_store.svg');?>
							</a>
							<a href="#">
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/img/google_play.svg');?>
							</a>
						</div>
					</div>
					<div class="apps__item">
						<div>
							<h5 class="apps__title">
								<span class="text-colored">
									Онлайн-платформа для инвестиций
								</span>
							</h5>
							<p>
							Инвестируйте в CFD на акции, фондовые индексы и валюты без скачивания и установки терминала. 
							Все в одной платформе.
							</p>
						</div>
						<a href="#" class="button">
							Инвестировать сейчас
						</a>
					</div>
					<div class="apps__item">
						<div>
							<h5 class="apps__title">
								<span class="text-colored">
									MetaTrader 5
								</span>
							</h5>
							<p>
								Выходите на профессиональный уровень инвестиций с популярной платформой для опытных клиентов.
							</p>
						</div>
						<div>
							<a href="#" class="apps__link">
								Скачать MetaTrader 5 для ПК
							</a>
							<div class="apps__links">
								<a href="#">
									<?php echo file_get_contents(get_stylesheet_directory() . '/assets/img/app_store.svg');?>
								</a>
								<a href="#">
									<?php echo file_get_contents(get_stylesheet_directory() . '/assets/img/google_play.svg');?>
								</a>
							</div>
						</div>
					</div>
					<div class="apps__item">
						<div>
							<h5 class="apps__title">
								<span class="text-colored">
									MetaTrader 4 
								</span>
							</h5>
							<p>
								Популярный скачиваемый терминал для опытных клиентов. 
								Предоставляет широкие возможности для инвестиций на финансовых рынках.
							</p>
						</div>
						<div>
							<a href="#" class="apps__link">
								Скачать MetaTrader 4 для ПК
							</a>
							<div class="apps__links">
								<a href="#" class="apps__link">
									<?php echo file_get_contents(get_stylesheet_directory() . '/assets/img/app_store.svg');?>
								</a>
								<a href="#" class="apps__link">
									<?php echo file_get_contents(get_stylesheet_directory() . '/assets/img/google_play.svg');?>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="apps__cta">
					<a href="#" class="button ghost">
						Подробнее
					</a>
				</div>
			</div>
		</section>


	</main><!-- #main -->

<?php
get_footer();
