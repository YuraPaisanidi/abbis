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

<div class="modal" id="modal__form">
	<div class="modal__content">
		<button class="close modal__close" type="button">
			<span></span>
			<span></span>
		</button>
		<section class="order">
			<div class="container">
				<div class="order__wrap">
					<h2 class="order__title h2">Задайте вопрос</h2>
					<p class="order__subtitle">Если Вы не нашли ответ на свой
						вопрос, задайте его
						экспертам АБИСС</p>
					<form action="#" method="POST" class="form">
						<div class="form__wrap">
							<div class="form__item">
								<label for="formName" class="form__label">КОНТАКТНОЕ ЛИЦО*</label>
								<input id="formName" type="text" name="name" class="form__input _req _contact">
							</div>
							<div class="form__item">
								<label for="formMail" class="form__label">ВАШ E-MAIL*</label>
								<input id="formMail" type="email" name="mail" class="form__input _req _email">
							</div>
							<div class="form__item">
								<label for="formFund" class="form__label">ВАША ОРГАНИЗАЦИЯ*</label>
								<input id="formFund" type="text" name="fund" class="form__input _req _organization">
							</div>
						</div>

						<div class="form__item form__item_text">
							<label for="formMessage2" class="form__label">ВАШ ВОПРОС*</label>
							<textarea id="formMessage2" name="message" class="form__textarea _req _massage"></textarea>
						</div>

						<div class="form__modal">
							<div class="form__block">
								<div class="form__label form__label--modal">Файл</div>
								<div class="form__file formImgFile">
									<div class="form__file_item">
										<input type="file" name="file" class="formImage form__file_input">
										<label class="formLebel form__file_button"><svg width="18" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_100_323)"><path d="M0 15.153a4.95 4.95 0 011.182-3.295c1.477-1.81 2.934-3.638 4.398-5.46C6.865 4.827 8.091 3.256 9.363 1.7a4.499 4.499 0 011.7-1.322A4.47 4.47 0 0113.176 0c.679.02 1.341.21 1.927.556a6.684 6.684 0 012.029 1.77 4.614 4.614 0 01-.11 5.538 1.071 1.071 0 01-1.47.233 1.045 1.045 0 01-.418-1.092 1.04 1.04 0 01.168-.375c.255-.333.436-.716.533-1.124a2.372 2.372 0 00-.752-2.275 5.516 5.516 0 00-1.143-.834 2.357 2.357 0 00-2.94.647L6.356 8.82l-3.673 4.575a2.435 2.435 0 00-.559 1.847 2.44 2.44 0 00.957 1.675c.301.258.626.488.97.685a2.407 2.407 0 002.973-.692 2800.72 2800.72 0 015.549-6.908.775.775 0 00.113-.894.774.774 0 00-.203-.243 3.552 3.552 0 00-.29-.24.776.776 0 00-1.11.175c-.36.44-.72.892-1.079 1.338-1.483 1.842-2.941 3.69-4.45 5.544a1.08 1.08 0 01-.9.452 1.074 1.074 0 01-.88-.49 1.065 1.065 0 01.078-1.241c.366-.465.738-.918 1.105-1.377a3023.02 3023.02 0 014.405-5.48 2.947 2.947 0 012.26-1.208 2.556 2.556 0 011.445.336 3.4 3.4 0 011.51 1.487 2.858 2.858 0 01-.386 3.23c-1.734 2.178-3.487 4.324-5.202 6.495a5.458 5.458 0 01-1.63 1.5 4.434 4.434 0 01-4.862-.22 6 6 0 01-1.625-1.5A4.477 4.477 0 010 15.153z" fill="#004584"/></g><defs><clipPath id="clip0_100_323"><path fill="#fff" d="M0 0h18v20H0z"/></clipPath></defs></svg></label>
									</div>
									<div class="formPreview form__file_preview"></div>
								</div>
							</div>
							<div class="form__capture">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/capture.png" alt="">
							</div>
						</div>

						<div class="form__personal form__personal--modal">
							<div class="form__btn form__btn--modal">
								<button type="submit" class="btn--form" name="submit">Отправить</button>
							</div>

							<div class="form__agree">
								<p>* обязательно для заполнения</p>
								<div class="form__item">
									<div class="form__checkbox">
										<input id="formAgreement1" checked type="checkbox" name="agreement" class="form__checkbox_input _req">
										<label for="formAgreement1" class="form__checkbox_label"><span>Я соглашаюсь на обработку <a href="#">персональных данных.</a></span></label>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>
</div>