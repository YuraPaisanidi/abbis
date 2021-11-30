<header class="header">
	<div class="header__container container">
		<a href="<?php echo get_home_url(); ?>" class="header__logo">
			<img src="<?php the_field('logo', 'option'); ?>" alt="">
		</a>
		<div class="header__wrap">
			<div class="header__nav">
				<div class="search__content--mobile">
					<form></form>
						<input type="text" class="search-inp" placeholder="Искать..">
						<button class="search--btn"><a href="#"><svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.02 0c4.973 0 9.02 4.046 9.02 9.02a8.965 8.965 0 01-1.387 4.799l2.76 2.76a2.004 2.004 0 11-2.835 2.834l-2.76-2.76a8.966 8.966 0 01-4.798 1.386C4.046 18.04 0 13.993 0 9.02S4.046 0 9.02 0zm0 16.035a7.023 7.023 0 007.015-7.015A7.023 7.023 0 009.02 2.004 7.023 7.023 0 002.004 9.02a7.023 7.023 0 007.016 7.015z" fill="#FF8515"/></a></svg></button>
					</form>
				</div>
				<div class="header__list">
					<ul>
						<li><a href="http://www.abiss.tw1.ru/" target="_blank">Ассоциация АБИСС</a></li>
						<li><a href="<?php echo get_home_url(); ?>/?s">Задать вопрос</a></li>
						<li><a href="#">Дерево тегов</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</div>
			</div>
			<div class="header__search">
				<div class="search">
					<div class="search__link search__open"><a href="#"><svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.02 0c4.973 0 9.02 4.046 9.02 9.02a8.965 8.965 0 01-1.387 4.799l2.76 2.76a2.004 2.004 0 11-2.835 2.834l-2.76-2.76a8.966 8.966 0 01-4.798 1.386C4.046 18.04 0 13.993 0 9.02S4.046 0 9.02 0zm0 16.035a7.023 7.023 0 007.015-7.015A7.023 7.023 0 009.02 2.004 7.023 7.023 0 002.004 9.02a7.023 7.023 0 007.016 7.015z" fill="#FF8515"/></svg></a></div>
					<div class="search__content">
						<!-- <form>
							<input type="text" class="search-inp" placeholder="Искать..">
							<button class="search--btn"><a href="#"><svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.02 0c4.973 0 9.02 4.046 9.02 9.02a8.965 8.965 0 01-1.387 4.799l2.76 2.76a2.004 2.004 0 11-2.835 2.834l-2.76-2.76a8.966 8.966 0 01-4.798 1.386C4.046 18.04 0 13.993 0 9.02S4.046 0 9.02 0zm0 16.035a7.023 7.023 0 007.015-7.015A7.023 7.023 0 009.02 2.004 7.023 7.023 0 002.004 9.02a7.023 7.023 0 007.016 7.015z" fill="#FF8515"/></a></svg></button>
							<a href="#" class="search--close search__open"><svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1l14 14m0-14L1 15" stroke="#004584" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
						</form> -->
						<?php echo do_shortcode( '[ivory-search id="32" title="Default Search Form"]' ); ?>
					</div>
				</div>
			</div>
			<button class="hamburger" type="button">
				<span class="hamburger__item"></span>
			</button>
		</div>
	</div>
</header>