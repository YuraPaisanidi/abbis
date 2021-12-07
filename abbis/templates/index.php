<?php
/* Template name: Главная */
?>

<?php get_header(); ?>

<main>
	<section class="banner">
		<div class="banner__container container">
			<div class="banner__block">
				<h1 class="banner__title h1">База знаний абисс</h1>
				<p class="banner__text">Портал с ответами экспертов и разъяснениями регуляторов по вопросам ИБ-комплаенса финансовой сферы</p>
				<a href="#work" class="btn--more">Подробнее</a>
			</div>
			<div class="banner__img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-img.png" alt="">
			</div>
			<a href="#work" class="btn--more btn--more_mobile">Подробнее</a>
		</div>
	</section>

	<section class="about">
		<div class="about__container container">
			<div class="about__block">
				<h2 class="about__title h2"><?php the_field('title_1'); ?></h2>
				<p>
					<?php the_field('desc_1'); ?>
				</p>
			</div>
			<div class="about__block">
				<h2 class="about__title h2"><?php the_field('title_2'); ?></h2>
				<p>
					<?php the_field('desc_2'); ?>
				</p>
			</div>
		</div>
	</section>

	<section class="work" id="work">
		<h2 class="work__title h2">Как работать в Базе знаний</h2>
		<div class="work__container container">
			<div class="work__wrap">
				<div class="work__slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide work__slide">
							<div class="work__svg">
								<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M32.5 10C32.5 10.663 32.2366 11.2989 31.7678 11.7678C31.2989 12.2366 30.663 12.5 30 12.5C29.337 12.5 28.7011 12.2366 28.2322 11.7678C27.7634 11.2989 27.5 10.663 27.5 10C27.5 9.33696 27.7634 8.70107 28.2322 8.23223C28.7011 7.76339 29.337 7.5 30 7.5C30.663 7.5 31.2989 7.76339 31.7678 8.23223C32.2366 8.70107 32.5 9.33696 32.5 10Z" fill="#46464B"/>
									<path d="M26.25 0C18.56 0 12.5 6.06 12.5 13.75C12.5 14.7425 12.6 15.74 12.805 16.6875C12.95 17.3625 12.785 17.9475 12.45 18.2825L1.1 29.6325C0.751084 29.981 0.474327 30.3949 0.285573 30.8504C0.09682 31.306 -0.000223141 31.7944 3.85269e-07 32.2875V36.25C3.85269e-07 37.2446 0.395089 38.1984 1.09835 38.9016C1.80161 39.6049 2.75544 40 3.75 40H8.75C9.74456 40 10.6984 39.6049 11.4017 38.9016C12.1049 38.1984 12.5 37.2446 12.5 36.25V35H15C15.663 35 16.2989 34.7366 16.7678 34.2678C17.2366 33.7989 17.5 33.163 17.5 32.5V30H20C20.663 30 21.2989 29.7366 21.7678 29.2678C22.2366 28.7989 22.5 28.163 22.5 27.5V27.05C23.7325 27.385 25.0175 27.5 26.25 27.5C33.94 27.5 40 21.44 40 13.75C40 6.06 33.94 0 26.25 0ZM15 13.75C15 7.44 19.94 2.5 26.25 2.5C32.56 2.5 37.5 7.44 37.5 13.75C37.5 20.06 32.56 25 26.25 25C24.6 25 23.0675 24.7625 21.81 24.1325C21.6194 24.037 21.4076 23.9918 21.1946 24.0013C20.9817 24.0107 20.7747 24.0744 20.5933 24.1864C20.4119 24.2984 20.2622 24.4549 20.1584 24.6411C20.0545 24.8272 20 25.0368 20 25.25V27.5H17.5C16.837 27.5 16.2011 27.7634 15.7322 28.2322C15.2634 28.7011 15 29.337 15 30V32.5H12.5C11.837 32.5 11.2011 32.7634 10.7322 33.2322C10.2634 33.7011 10 34.337 10 35V36.25C10 36.5815 9.8683 36.8995 9.63388 37.1339C9.39946 37.3683 9.08152 37.5 8.75 37.5H3.75C3.41848 37.5 3.10054 37.3683 2.86612 37.1339C2.6317 36.8995 2.5 36.5815 2.5 36.25V32.285C2.50007 31.9541 2.63133 31.6368 2.865 31.4025L14.2175 20.05C15.2975 18.97 15.5225 17.44 15.2475 16.16C15.0807 15.3676 14.9978 14.5598 15 13.75V13.75Z" fill="#46464B"/>
									</svg>
							</div>
							<p class="work__subtitle"><?php the_field('how_title', 'option'); ?></p>
							<p class="work__text">
								<?php the_field('how_text', 'option'); ?>
							</p>
							<a href="<?php echo get_home_url(); ?>/?s" class="btn btn--swiper">
								Начать поиск
							</a>
						</div>

						<div class="swiper-slide work__slide">
							<div class="work__svg">
								<svg width="30" height="32" viewBox="0 0 30 32" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.7207 31.05C6.4207 31.05 6.1707 30.95 5.9707 30.75C5.7707 30.55 5.68737 30.3 5.7207 30L6.7207 23.45H1.1707C0.83737 23.45 0.570703 23.35 0.370703 23.15C0.170703 22.95 0.0707032 22.6833 0.0707032 22.35V21.65C0.0707032 21.3167 0.170703 21.05 0.370703 20.85C0.570703 20.65 0.83737 20.55 1.1707 20.55H7.1207L8.5707 10.75H2.4707C2.13737 10.75 1.8707 10.65 1.6707 10.45C1.4707 10.25 1.3707 9.98333 1.3707 9.65V8.95C1.3707 8.61667 1.4707 8.35 1.6707 8.15C1.8707 7.95 2.13737 7.85 2.4707 7.85H9.0207L10.0207 1.3C10.0874 1 10.204 0.749999 10.3707 0.549998C10.5707 0.349998 10.8207 0.249998 11.1207 0.249998H12.0207C12.3207 0.249998 12.5707 0.349998 12.7707 0.549998C12.9707 0.749999 13.054 1 13.0207 1.3L12.0207 7.85H20.3707L21.3707 1.3C21.4374 1 21.554 0.749999 21.7207 0.549998C21.9207 0.349998 22.1707 0.249998 22.4707 0.249998H23.3707C23.6707 0.249998 23.9207 0.349998 24.1207 0.549998C24.3207 0.749999 24.404 1 24.3707 1.3L23.3707 7.85H28.8207C29.154 7.85 29.4207 7.95 29.6207 8.15C29.8207 8.35 29.9207 8.61667 29.9207 8.95V9.65C29.9207 9.98333 29.8207 10.25 29.6207 10.45C29.4207 10.65 29.154 10.75 28.8207 10.75H22.9707L21.5207 20.55H27.5207C27.854 20.55 28.1207 20.65 28.3207 20.85C28.5207 21.05 28.6207 21.3167 28.6207 21.65V22.35C28.6207 22.6833 28.5207 22.95 28.3207 23.15C28.1207 23.35 27.854 23.45 27.5207 23.45H21.0707L20.1207 30C20.054 30.3 19.9207 30.55 19.7207 30.75C19.5207 30.95 19.2707 31.05 18.9707 31.05H18.0707C17.7707 31.05 17.5207 30.95 17.3207 30.75C17.1207 30.55 17.0374 30.3 17.0707 30L18.0707 23.45H9.7207L8.7707 30C8.70404 30.3 8.5707 30.55 8.3707 30.75C8.1707 30.95 7.9207 31.05 7.6207 31.05H6.7207ZM10.1707 20.55H18.4707L19.9207 10.75H11.6207L10.1707 20.55Z" fill="#46464B"/>
								</svg>
							</div>
							<p class="work__subtitle"><?php the_field('how_title_2', 'option'); ?></p>
							<p class="work__text">
								<?php the_field('how_text_2', 'option'); ?>
							</p>
							<a href="<?php echo get_home_url(); ?>/derevo-tegov" class="btn btn--swiper">
								Перейти в теги
							</a>
						</div>

						<div class="swiper-slide work__slide">
							<div class="work__svg">
								?
							</div>
							<p class="work__subtitle"><?php the_field('how_title_3', 'option'); ?></p>
							<p class="work__text">
								<?php the_field('how_text_3', 'option'); ?>
							</p>
							<button class="btn btn--swiper modal__form">
								Задать вопрос
							</button>
						</div>

					</div>
				</div>
				<div class="work__next"></div>
				<div class="work__prev"></div>
			</div>
		</div>
	</section>

	<section class="allsearch">
		<div class="container">
			<h2 class="allsearch__title h2">Введите ваш запрос</h2>
			<?php echo do_shortcode( '[ivory-search id="32" title="Default Search Form"]' ); ?>
		</div>
	</section>

	<section class="update">
		<div class="update__container container">
			<h2 class="update__title h2">Последние обновления</h2>
			<div class="update__wrap">
				<?php
					$recent_posts = wp_get_recent_posts(2);
					foreach($recent_posts as $post){
					echo '
						<div class="update__block">
							<h3 class="update__subtitle">'.$post["post_title"].'</h3>
							<p class="update__text">
							'.$post["post_excerpt"].'
							</p>
							<a href="' . get_permalink($post["ID"]) . '" class="update__more">Подробнее<span class="update__arrow"></span></a>
						</div> ';
				} ?>
			</div>
		</div>
	</section>

	<div class="tags-cloud tags-cloud--index">
			<div class="tags-cloud__container container">
				<h2 class="tag__title h2">Популярные теги</h2>

				<div class="tags-cloud__wrap">
					<?php wp_tag_cloud('number=30&orderby=count&order=DESC'); ?>
				</div>
			</div>
		</div>
</main>

<?php get_footer(); ?>