<footer class="footer">
	<div class="footer__container container">
		<a href="#" class="footer__logo_mobile">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_white.svg" alt="">
		</a>
		<div class="footer__block">
			<a href="#" class="footer__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_white.svg" alt="">
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
				<a href="#">Ассоциация АБИСС</a>
				<a href="#">Задать вопрос</a>
				<a href="#">Дерево тегов</a>
			</div>
		</div>
		<div class="footer__search">
			<form action="">
				<input type="text" placeholder="Искать..">
				<button><svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.02 0c4.973 0 9.02 4.046 9.02 9.02a8.965 8.965 0 01-1.387 4.799l2.76 2.76a2.004 2.004 0 11-2.835 2.834l-2.76-2.76a8.966 8.966 0 01-4.798 1.386C4.046 18.04 0 13.993 0 9.02S4.046 0 9.02 0zm0 16.035a7.023 7.023 0 007.015-7.015A7.023 7.023 0 009.02 2.004 7.023 7.023 0 002.004 9.02a7.023 7.023 0 007.016 7.015z" fill="#FF8515"/></svg></button>
			</form>
		</div>
	</div>
	<div class="footer__line"></div>
	<p class="footer__abiss">© 2006-2021 ABISS. Все права защищены.</p>
</footer>