<?php get_header(); ?>

<div class="search__top container">
	<div class="crumbs">
			<ul>
				<li><a href="<?php echo get_home_url(); ?>">Главная</a></li>
				<li><a href="<?php echo get_home_url(); ?>/?s">Результаты поиска</a></li>
			</ul>
	</div>
	
	<div class="search-filter">
		<label>Отсортировано:</label>
		<a href="#" id="sortDate" onclick="sortResult()">по дате</a>
		<a href="#" id="sortRelev" onclick="sortResult()">по релевантности</a>
	</div>
</div>



<section class="result">
	<div class="result__container container">

		<h2 class="result__title h2">Результаты поиска</h2>
			<?php echo do_shortcode( '[ivory-search id="32" title="Default Search Form"]' ); ?>

		<div class="result__form_number">
			Найдено: 
			<span>
			<?php
				global $wp_query;
				echo $wp_query->found_posts;
			?>
			</span>
		</div>
		
		<?php
			if (have_posts()) :
			while (have_posts()) : the_post();
			?>
				<div class="result__item">
					<h3 class="h3"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
					<div class="result__text">
						<p><?php the_excerpt() ?></p>
					</div>
					<div class="result__edit">
						<div>
							<?php if( have_rows('comment') ): ?>
								<?php while( have_rows('comment') ): the_row(); ?>
									<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
									width="48" height="48"
									viewBox="0 0 172 172"
									style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="#ff8515"></path><g fill="#ffffff"><path d="M86.02855,32.39333c-1.59727,-0.00208 -3.21121,0.41294 -4.77815,1.27544l-47.66729,28.31673c-0.74004,0.43779 -1.18978,1.23508 -1.18978,2.09401v9.74667c0,1.34669 1.08984,2.42715 2.43667,2.42715h7.31v43.86c-5.37542,0 -9.74667,4.37179 -9.74667,9.74667v7.31c0,1.34669 1.08984,2.43667 2.43667,2.43667h102.34c1.34683,0 2.43667,-1.08997 2.43667,-2.43667v-7.31c0,-5.37487 -4.37125,-9.74667 -9.74667,-9.74667v-43.86h7.31c1.34683,0 2.43667,-1.08046 2.43667,-2.42715v-9.74667c0,-0.85893 -0.44974,-1.65622 -1.18978,-2.09401l-47.66729,-28.30721c-0.02141,-0.01428 -0.04521,-0.02618 -0.06662,-0.03807c-1.48128,-0.82086 -3.05714,-1.24481 -4.65442,-1.24689zM85.99048,37.26666c0.78049,-0.00178 1.55385,0.20107 2.30341,0.60917l46.43944,27.58383v5.92034h-97.46667v-5.92034l46.40137,-27.56479c0.75908,-0.41761 1.54196,-0.62642 2.32245,-0.6282zM85.99048,47.00381c-5.3778,0 -9.74667,4.37839 -9.74667,9.75618c0,5.3778 4.36887,9.75618 9.74667,9.75618c5.3778,0 9.75618,-4.37839 9.75618,-9.75618c0,-5.3778 -4.37838,-9.75618 -9.75618,-9.75618zM85.99048,51.87715c2.6889,0 4.88285,2.19395 4.88285,4.88285c0,2.6889 -2.19395,4.88285 -4.88285,4.88285c-2.6889,0 -4.87333,-2.19395 -4.87333,-4.88285c0,-2.6889 2.18443,-4.88285 4.87333,-4.88285zM47.01333,76.25333h9.74667v43.86h-9.74667zM61.63333,76.25333h14.62v43.86h-14.62zM81.12667,76.25333h9.74667v43.86h-9.74667zM95.74667,76.25333h14.62v43.86h-14.62zM115.24,76.25333h9.74667v43.86h-9.74667zM42.14,124.98666h2.43667h82.84667h2.43667c2.68652,0 4.87333,2.18681 4.87333,4.87333v4.87333h-97.46667v-4.87333c0,-2.68652 2.18681,-4.87333 4.87333,-4.87333z"></path></g><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"></path><path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"></path></g></svg>
									Есть ответ регулятора
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<p>Изменено: <span><?php the_modified_date() ?></span></p>
					</div>
				</div>
			<?php endwhile; ?>
		<?php
			else :
			echo "Извините по Вашему результату ничего не найдено";
			endif;
		?>

		<?php wptuts_pagination(); ?>

		<section class="how">
			<div class="how__container container">
				<div class="how__wrap">
					<div class="how__item">
						<div class="work__svg">
							?
						</div>
						<p class="work__subtitle"><?php the_field('how_title', 'option'); ?></p>
						<p class="work__text">
							<?php the_field('how_text', 'option'); ?>
						</p>
						<a href="<?php echo get_home_url(); ?>/?s" class="btn btn--swiper modal__form">
							Задать вопрос
						</a>
					</div>

					<div class="how__item">
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

				</div>
			</div>
		</section>

	</div>
</section>

<script>
	const sortByRelevBtn = document.querySelector('#sortRelev');
	const sortByDateBtn = document.querySelector('#sortDate');
	const sortByRelevLink = '&orderby=post_relevance&order=desc';

	const checkWindowUrl = () => {
		if(window.location.href.includes('post_relevance')) {
			document.querySelector('#sortRelev').classList.add('active')
		} else {
			document.querySelector('#sortDate').classList.add('active')
		}
	}

	checkWindowUrl();

	const sortResult = () => {
		let currentUrl = window.location.href;

		if(event.target.id === 'sortRelev') {
			let sortByRelevUrl = currentUrl + sortByRelevLink;
			sortByRelevBtn.href = sortByRelevUrl;
		}
		if(event.target.id === 'sortDate') {
			currentUrl = currentUrl.replace('orderby=post_relevance&order=desc');
			sortByDateBtn.href = currentUrl;
		}

	}
</script>

<?php get_footer(); ?>