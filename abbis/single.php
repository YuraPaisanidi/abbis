<!-- <?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package abbis
 */

get_header();
?>

	<div class="crumbs">
		<div class="container">
			<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
		</div>
	</div>

	<section class="team">
		<div class="container">
			<div class="team__answer">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>

			<div class="tag tag--team">
				<div class="tag__list">
				<?php the_tags( '', ''); ?>
				</div>
			</div>

			<div class="bank">
				<div class="bank__icon">
					<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
						width="48" height="48"
						viewBox="0 0 172 172"
						style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="#ff8515"></path><g fill="#ffffff"><path d="M86.02855,32.39333c-1.59727,-0.00208 -3.21121,0.41294 -4.77815,1.27544l-47.66729,28.31673c-0.74004,0.43779 -1.18978,1.23508 -1.18978,2.09401v9.74667c0,1.34669 1.08984,2.42715 2.43667,2.42715h7.31v43.86c-5.37542,0 -9.74667,4.37179 -9.74667,9.74667v7.31c0,1.34669 1.08984,2.43667 2.43667,2.43667h102.34c1.34683,0 2.43667,-1.08997 2.43667,-2.43667v-7.31c0,-5.37487 -4.37125,-9.74667 -9.74667,-9.74667v-43.86h7.31c1.34683,0 2.43667,-1.08046 2.43667,-2.42715v-9.74667c0,-0.85893 -0.44974,-1.65622 -1.18978,-2.09401l-47.66729,-28.30721c-0.02141,-0.01428 -0.04521,-0.02618 -0.06662,-0.03807c-1.48128,-0.82086 -3.05714,-1.24481 -4.65442,-1.24689zM85.99048,37.26666c0.78049,-0.00178 1.55385,0.20107 2.30341,0.60917l46.43944,27.58383v5.92034h-97.46667v-5.92034l46.40137,-27.56479c0.75908,-0.41761 1.54196,-0.62642 2.32245,-0.6282zM85.99048,47.00381c-5.3778,0 -9.74667,4.37839 -9.74667,9.75618c0,5.3778 4.36887,9.75618 9.74667,9.75618c5.3778,0 9.75618,-4.37839 9.75618,-9.75618c0,-5.3778 -4.37838,-9.75618 -9.75618,-9.75618zM85.99048,51.87715c2.6889,0 4.88285,2.19395 4.88285,4.88285c0,2.6889 -2.19395,4.88285 -4.88285,4.88285c-2.6889,0 -4.87333,-2.19395 -4.87333,-4.88285c0,-2.6889 2.18443,-4.88285 4.87333,-4.88285zM47.01333,76.25333h9.74667v43.86h-9.74667zM61.63333,76.25333h14.62v43.86h-14.62zM81.12667,76.25333h9.74667v43.86h-9.74667zM95.74667,76.25333h14.62v43.86h-14.62zM115.24,76.25333h9.74667v43.86h-9.74667zM42.14,124.98666h2.43667h82.84667h2.43667c2.68652,0 4.87333,2.18681 4.87333,4.87333v4.87333h-97.46667v-4.87333c0,-2.68652 2.18681,-4.87333 4.87333,-4.87333z"></path></g><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"></path><path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"></path></g></svg>
					<p>Комментарий регулятора</p>
				</div>
				<div class="bank__block">
					<div class="bank__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bank.png" alt="">
					</div>
					<div class="bank__text">
						<p class="bank__text_title">Банк России</p>
						<p class="bank__text_text">текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст</p>
						<a href="#">Полный текст документа</a>
					</div>
				</div>
			</div>

			<div class="team__comment">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/preds.svg" alt="">
				<p>Комментарии консультантов</p>
			</div>

			<div class="team__list">
				<div class="team__person">
					<div class="team__person_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/person.jpg" alt="">
					</div>
					<div class="team__person_info">
						<div class="team__person_title">
							Безгодов Евгений
						</div>
						<div class="team__person_subtitle">
							исполнительный директор и сооснователь компании Deiteriy.
						</div>
						<div class="team__person_text">
							Специализируется на исследовании вопросов менеджмента информационной безопасности и управления соответствием требованиям национальных и международных стандартов. Является автором публикаций в периодических профессиональных изданиях. Имеет практический опыт обеспечения информационной безопасности коммерческих организаций. Обладает профессиональными статусами CISA, CISM, PCI QSA, PCI QPA, аудитор СТО БР ИББС и 382-П.
						</div>
					</div>
				</div>

				<div class="team__person">
					<div class="team__person_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/person2.jpg" alt="">
					</div>
					<div class="team__person_info">
						<div class="team__person_title">
							Малинин Юрий
						</div>
						<div class="team__person_subtitle">
							председатель Ассоциации РОСЭУ, председатель комитета по образованию в области информационной безопасности Ассоциации Защиты Информации, член совета директоров ассоциации «РусКрипто»
						</div>
						<div class="team__person_text">
							С 2001 года занимает пост директора Академии Информационных Систем. Инициатор и организатор ряда новых учебных программ, тренингов, семинаров, всероссийских и международных конференций по тематике «Информационная безопасность», «Информационные технологии», «Электронный документооборот» и другие.
						</div>
					</div>
				</div>

				<div class="team__person">
					<div class="team__person_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/person3.jpg" alt="">
					</div>
					<div class="team__person_info">
						<div class="team__person_title">
							Прищеп Станислав
						</div>
						<div class="team__person_subtitle">
							руководитель направления систем управления информационной безопасности компании STEP LOGIC
						</div>
						<div class="team__person_text">
							Более 15 лет работает в сфере информационной и сетевой безопасности. В разное время занимал должности аналитика, консультанта, архитектора и инженера по ИБ в различных банках и системных интеграторах. В компании STEP LOGIC руководит направлением систем мониторинга и управления информационной безопасностью.
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="order">
		<div class="container">
			<div class="order__wrap">
				<h2 class="order__title h2">Оставить заявку</h2>
				<p class="order__subtitle">Если вы не согласны с нашими экспертами либо хотите присоединиться к<br> экспертизе ассоциации, оставьтк заявку и мы с Вами свяжемся</p>
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
						<label for="formMessage2" class="form__label">СООБЩЕНИЕ*</label>
						<textarea id="formMessage2" name="message" class="form__textarea _req _massage"></textarea>
					</div>

					<div class="form__personal">
						<div class="form__btn">
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

<?php get_footer(); ?> -->