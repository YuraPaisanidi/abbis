<footer class="footer">
	<div class="footer__container container">
		<a href="<?php echo get_home_url(); ?>" class="footer__logo_mobile">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/logo_white.svg" alt="">
		</a>
		<div class="footer__block">
			<a href="<?php echo get_home_url(); ?>" class="footer__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/logo_white.svg" alt="">
			</a>
			<div class="footer__contact">
				<p class="footer__contact_title">Контакты:</p>
				<a href="<?php the_field('address_url', 'option'); ?>" target="_blank">
					<svg width="13" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.157 0A6.164 6.164 0 000 6.157c0 4.213 5.51 10.398 5.744 10.66.22.244.605.244.825 0 .235-.262 5.744-6.447 5.744-10.66A6.164 6.164 0 006.157 0zm0 9.254a3.101 3.101 0 01-3.098-3.097 3.101 3.101 0 013.098-3.098 3.101 3.101 0 013.097 3.098 3.101 3.101 0 01-3.097 3.097z" fill="#fff"/></svg>
					<?php the_field('address', 'option'); ?>
				</a>
				<a href="tel:<?php the_field('tel_url', 'option'); ?>">
					<svg width="15" height="15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_1_102)"><path d="M14.664 11.854l-2.317-2.316c-.461-.46-1.225-.446-1.703.032l-1.167 1.167-.23-.129C8.51 10.2 7.5 9.64 6.44 8.579 5.375 7.514 4.815 6.504 4.405 5.766l-.125-.225.783-.782.385-.386c.478-.478.492-1.242.031-1.703L3.163.353c-.46-.46-1.225-.446-1.703.032l-.653.657.018.018c-.22.279-.402.601-.538.949-.126.33-.204.646-.24.962C-.259 5.507.9 7.824 4.045 10.97c4.347 4.347 7.85 4.019 8.002 4.003.329-.04.644-.118.965-.243a3.76 3.76 0 00.945-.535l.014.012.662-.647c.477-.479.49-1.243.03-1.704z" fill="#fff"/></g><defs><clipPath id="clip0_1_102"><path fill="#fff" d="M0 0h15v15H0z"/></clipPath></defs></svg>
					Тел.: <?php the_field('tel', 'option'); ?></a>
				<a href="mailto:<?php the_field('email', 'option'); ?>">
					<svg width="15" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 0h12c.825 0 1.5.652 1.5 1.449v8.693c0 .797-.675 1.449-1.5 1.449h-12c-.825 0-1.5-.652-1.5-1.449V1.449C0 .652.675 0 1.5 0zm6.795 6.042L13.2 3.079a.615.615 0 00.3-.522c0-.485-.547-.775-.975-.521L7.5 5.07 2.475 2.036c-.428-.254-.975.036-.975.521 0 .21.113.406.3.522l4.905 2.963a1.53 1.53 0 001.59 0z" fill="#fff"/></svg>
					E-mail: <?php the_field('email', 'option'); ?></a>
			</div>

			<div class="footer__nav">
				<a href="https://www.abiss.ru/" target="_blank">Ассоциация АБИСС</a>
				<a href="#" class="modal__form">Задать вопрос</a>
				<a href="<?php echo get_home_url(); ?>/derevo-tegov">Дерево тегов</a>
			</div>
		</div>
		<div class="footer__search">
			<?php echo do_shortcode( '[ivory-search id="101" title="footer_search"]' ); ?>
			<div class="footer__link">
				<a href="https://www.facebook.com/abissassociate/" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="">
				</a>
			</div>
		</div>
	</div>
	<div class="footer__line"></div>
	<p class="footer__abiss">© 2006-2021 АБИСС. Все права защищены.</p>
</footer>

<div class="modal" id="modal__form">
	<div class="modal__content">
		<button class="close modal__close" type="button">
			<span></span>
			<span></span>
		</button>
		<section class="order">
			<div class="container">
				<?php echo do_shortcode( '[caldera_form id="CF61c093d00e9b5"]' ); ?>
			</div>
		</section>
	</div>
</div>

<div class="modal" id="modal__contact">
	<div class="modal__content modal__content--contact">
		<button class="close modal__close" type="button">
			<span></span>
			<span></span>
		</button>
		<div class="modal__contacts">
			<h2 class="order__title h2">Контакты</h2>
			<div class="modal__contacts_phone">
				<svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.07 2.927C13.164-.977 6.833-.976 2.928 2.93-.977 6.835-.976 13.167 2.93 17.072A10 10 0 1017.07 2.928zM15.145 13.93l-.002.002v-.004l-.506.504a2.667 2.667 0 01-2.517.72 8.859 8.859 0 01-2.573-1.154 11.888 11.888 0 01-2.03-1.636A11.974 11.974 0 016 10.52a9.331 9.331 0 01-1.14-2.307 2.667 2.667 0 01.667-2.723l.593-.594a.423.423 0 01.599 0h.001L8.593 6.77a.423.423 0 01.002.598l-.002.002-1.1 1.1A.897.897 0 007.4 9.637c.398.546.838 1.06 1.317 1.537a12.784 12.784 0 001.733 1.457.903.903 0 001.153-.1l1.064-1.08a.423.423 0 01.6 0l1.876 1.88a.423.423 0 01.002.598z" fill="#FF8515"/></svg>
				<a href="tel:<?php the_field('tel_url', 'option'); ?>"><?php the_field('tel', 'option'); ?></a>
			</div>
			<div class="modal__contacts_mail">
				<svg width="20" height="15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2 0h16c1.1 0 2 .844 2 1.875v11.25C20 14.156 19.1 15 18 15H2c-1.1 0-2-.844-2-1.875V1.875C0 .844.9 0 2 0zm9.06 7.819l6.54-3.835c.25-.15.4-.403.4-.675 0-.628-.73-1.003-1.3-.675L10 6.563 3.3 2.634c-.57-.328-1.3.047-1.3.675 0 .272.15.525.4.675L8.94 7.82c.65.384 1.47.384 2.12 0z" fill="#FF8515"/></svg>
				<a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modal__thanks">
	<div class="modal__form modal__content modal__content--thanks">
		<button class="close modal__close" type="button">
			<span></span>
			<span></span>
		</button>

		<h2 class="h2">Спасибо, ваш запрос принят!</h2>
		<p class="order__subtitle">В ближайшее время вы получите ответ на указаный вами адрес електронной почты</p>
	</div>
</div>