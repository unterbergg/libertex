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
					<a href="#" class="button rounded">
						<span><?php _e('Открыть аккаунт', 'lbrtx'); ?></span>
					</a>
					<a href="#" class="button rounded ghost">
						<span><?php _e('Демо-аккаунт', 'lbrtx'); ?></span>
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
						<div class="tools__icon">
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
						<div class="tools__icon">
							<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/circ_water.svg');?>
						</div>
						<h5>
							<?php _e('Нефть и фьючерсные контракты', 'lbrtx'); ?>
						</h5>
						<p>
							<?php _e('Различные сорта нефти, природный газ и мазут — беспоставочные внебиржевые финансовые инстру-менты с высокой волатильностью и хорошим потенциалом для инвестиций как в краткосрочной, так и в долгосрочной перспективе.', 'lbrtx'); ?>
						</p>
						<img class="tools__item-bg" src="<?php echo get_template_directory_uri();?>/assets/img/flame.png" alt="">
					</div>
					<div class="tools__item">
						<div class="tools__icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/gold.png" alt="gold">
						</div>
						<h5>
							<?php _e('Фьючерсы на металлы', 'lbrtx'); ?>
						</h5>
						<p>
							<?php _e('Драгоценные металлы — традиционные беспоставочные внебиржевые финансовые инструменты инвестора, которые помогают стабилизировать инвестиционный портфель. Фьючерсы на металлы обладают более высоким потенциалом доходности по сравнению с многими валютными парами.', 'lbrtx'); ?>
						</p>
						<img class="tools__item-bg" src="<?php echo get_template_directory_uri();?>/assets/img/gold.png" alt="">
					</div>
					<div class="tools__item">
						<div class="tools__icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/circ_flag.png" alt="flag">
						</div>
						<h5>
							<?php _e('Фондовые индексы', 'lbrtx'); ?>
						</h5>
						<p>
							<?php _e('Фондовые индексы ― это возможность открывать позиции в рост или в снижение всего рынка сразу и инвестировать в глобальный рост или падение крупнейших мировых экономик. Фондовые индексы ― надежный, проверенный временем и кризисами инструмент, доходность которого может опережать инфляцию и ставки по банковским депозитам.', 'lbrtx'); ?>
						</p>
						<img class="tools__item-bg" src="<?php echo get_template_directory_uri();?>/assets/img/americanFlag.png" alt="">
					</div>
					<div class="tools__item">
						<div class="tools__icon">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/circ_apple.png" alt="flag">
						</div>
						<h5>
							<?php _e('Акции', 'lbrtx'); ?>
						</h5>
						<p>
							<?php _e('Инвестируйте в реальный бизнес! CFD на ценные бумаги позволяют совершать долгосрочные вложениях в ценные бумаги крупнейших мировых компаний (например, Apple, Google,Tesla и др.), а также инвестировать в краткосрочные трендовые изменения.', 'lbrtx'); ?>
						</p>
						<img class="tools__item-bg" src="<?php echo get_template_directory_uri();?>/assets/img/apple.png" alt="">
					</div>
					<div class="tools__item">
						<div class="tools__icon">
							<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/circ_bitcoin.svg');?>
						</div>
						<h5>
							<?php _e('Криптовалюты', 'lbrtx'); ?>
						</h5>
						<p>
							<?php _e('Криптовалюта — это цифровые деньги, создаваемые пользователями специальных пиринговых сетей. Криптовалюты не привязаны к реальным валютам, а их количество изначально ограничено алгоритмом.', 'lbrtx'); ?>
						</p>
						<img class="tools__item-bg" src="<?php echo get_template_directory_uri();?>/assets/img/binanceCoin.png" alt="">
					</div>
				</div>
				<div class="tools__link">
					<a href="javascript:void(0);" class="tools__more">
						<?php _e('Еще инструменты', 'lbrtx'); ?>
					</a>
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
					<div class="online__col">
						<div class="online__items">
							<div class="online__item">
								<span class="online__icon">
									<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/bitcoin_shadow.svg');?>	
								</span>
								<span>
									<?php _e('Все популярные финансовые инструменты в одной платформе.', 'lbrtx'); ?>		
								</span>
							</div>
							<div class="online__item">
								<span class="online__icon">
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/download_shadow.svg');?>			
								</span>
								<span>
									<?php _e('Не требует скачивания и установки.', 'lbrtx'); ?>		
								</span>
							</div>
							<div class="online__item">
								<span class="online__icon">
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/earth_shadow.svg');?>			
								</span>
								<span>
									<?php _e('Встроенные инструменты для анализа рынка.', 'lbrtx'); ?>		
								</span>
							</div>
							<div class="online__item">
								<span class="online__icon">
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/money_shadow.svg');?>			
								</span>
								<span>
									<?php _e('Быстрый доступ к финансовым рынкам и отсутствие скрытых комиссий.', 'lbrtx'); ?>		
								</span>
							</div>
							<div class="online__item">
								<span class="online__icon">
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/shield_shadow.svg');?>			
								</span>
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
						<span><?php _e('Как инвестировать в Libertex', 'lbrtx'); ?></span>
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

		
		<?php $recent_posts_array = get_posts(['numberposts' => 7]); ?>
		<?php if(!empty($recent_posts_array)) : ?>
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
						<?php foreach(array_slice($recent_posts_array, 0, 3) as $item) : ?>
							<a href="<?php echo get_field('original_url', $item->ID); ?>" class="news__item">
								<?php echo get_the_post_thumbnail($item->ID, 'medium', ['class' => 'news__thumb']); ?>
								<h6 class="news__title">
									<?php echo $item->post_title; ?>
								</h6>
								<p class="news__description">
									<?php echo $item->post_excerpt; ?>
								</p>
								<span class="news__meta">
									<?php echo get_the_date( "D, m/d/Y - H:i", $item->ID ); ?>
								</span>
							</a>
						<?php endforeach; ?>
					</div>
					<?php if (!empty(array_slice($recent_posts_array, 3, 4))) : ?>
						<hr>
						<div class="news__items">
							<?php foreach(array_slice($recent_posts_array, 3) as $item) : ?>
								<a href="<?php echo get_field('original_url', $item->ID); ?>" class="news__item">
									<h6 class="news__title">
										<?php echo $item->post_title; ?>
									</h6>
									<span class="news__meta"><?php echo get_the_date( "D, m/d/Y - H:i", $item->ID ); ?></span>
								</a>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			</section>
		<?php endif; ?>

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
							<a href="https://fxclubbelarus.onelink.me/cy6g/f50t74bq">
								<?php echo file_get_contents(get_stylesheet_directory() . '/assets/img/app_store.svg');?>
							</a>
							<a href="https://fxclubbelarus.onelink.me/cy6g/z9igp6no">
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
						<a href="https://fxclub.by/start-libertex" class="button">
							<span>Инвестировать сейчас</span>
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
							<a href="https://fxclub.by/metatrader/download" class="apps__link">
								Скачать MetaTrader 4 для ПК
							</a>
							<div class="apps__links">
								<a href="https://fxclub.by/news/mobilnye-versii-mt4-i-mt5-ot-razrabotchika-metaquotes-vremenno-nedostupny-v-magazine-appstore" class="apps__link">
									<?php echo file_get_contents(get_stylesheet_directory() . '/assets/img/app_store.svg');?>
								</a>
								<a href="https://fxclub.by/metatrader/android" class="apps__link">
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

		<section class="about">
			<div class="wrapper">
				<div class="about__row">
					<div class="about__col">
						<div>
							<h3 class="about__title">
								О компании Forex Club
							</h3>
							<p class="about__text">
								Помогаем нашим клиентам инвестировать в CFD на акции, фондовые индексы, валюты, драгоценные металлы, нефть и фьючерсные контракты.
							</p>
							<a href="https://fxclub.by/about" class="about__link"><?php _e('Узнать больше', 'lbrtx'); ?></a>
						</div>
						<div>
							<h3 class="about__title">
								Как инвестировать?
							</h3>
							<p class="about__text">
								Чтобы начать инвестировать нужно сделать 4 простых шага...
							</p>
							<a href="https://fxclub.by/start-trading/" class="about__link"><?php _e('Узнать больше', 'lbrtx'); ?></a>
						</div>
					</div>
					<div class="about__col">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/About.jpg" alt="About block">
					</div>
				</div>
				<div class="about__cta">
					<a href="#" class="button">
						<span><?php _e('Открыть аккаунт', 'lbrtx'); ?></span>
					</a>
				</div>
			</div>
		</section>


	</main><!-- #main -->

<?php
get_footer();
