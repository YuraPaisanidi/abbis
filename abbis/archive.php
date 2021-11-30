<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>

<section class="result result--tags">
	<div class="result__container container">
		
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
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
							width="48" height="48"
							viewBox="0 0 172 172"
							style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="#ff8515"></path><g fill="#ffffff"><path d="M86.02855,32.39333c-1.59727,-0.00208 -3.21121,0.41294 -4.77815,1.27544l-47.66729,28.31673c-0.74004,0.43779 -1.18978,1.23508 -1.18978,2.09401v9.74667c0,1.34669 1.08984,2.42715 2.43667,2.42715h7.31v43.86c-5.37542,0 -9.74667,4.37179 -9.74667,9.74667v7.31c0,1.34669 1.08984,2.43667 2.43667,2.43667h102.34c1.34683,0 2.43667,-1.08997 2.43667,-2.43667v-7.31c0,-5.37487 -4.37125,-9.74667 -9.74667,-9.74667v-43.86h7.31c1.34683,0 2.43667,-1.08046 2.43667,-2.42715v-9.74667c0,-0.85893 -0.44974,-1.65622 -1.18978,-2.09401l-47.66729,-28.30721c-0.02141,-0.01428 -0.04521,-0.02618 -0.06662,-0.03807c-1.48128,-0.82086 -3.05714,-1.24481 -4.65442,-1.24689zM85.99048,37.26666c0.78049,-0.00178 1.55385,0.20107 2.30341,0.60917l46.43944,27.58383v5.92034h-97.46667v-5.92034l46.40137,-27.56479c0.75908,-0.41761 1.54196,-0.62642 2.32245,-0.6282zM85.99048,47.00381c-5.3778,0 -9.74667,4.37839 -9.74667,9.75618c0,5.3778 4.36887,9.75618 9.74667,9.75618c5.3778,0 9.75618,-4.37839 9.75618,-9.75618c0,-5.3778 -4.37838,-9.75618 -9.75618,-9.75618zM85.99048,51.87715c2.6889,0 4.88285,2.19395 4.88285,4.88285c0,2.6889 -2.19395,4.88285 -4.88285,4.88285c-2.6889,0 -4.87333,-2.19395 -4.87333,-4.88285c0,-2.6889 2.18443,-4.88285 4.87333,-4.88285zM47.01333,76.25333h9.74667v43.86h-9.74667zM61.63333,76.25333h14.62v43.86h-14.62zM81.12667,76.25333h9.74667v43.86h-9.74667zM95.74667,76.25333h14.62v43.86h-14.62zM115.24,76.25333h9.74667v43.86h-9.74667zM42.14,124.98666h2.43667h82.84667h2.43667c2.68652,0 4.87333,2.18681 4.87333,4.87333v4.87333h-97.46667v-4.87333c0,-2.68652 2.18681,-4.87333 4.87333,-4.87333z"></path></g><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"></path><path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"></path></g></svg>
							Есть ответ регулятора</a>
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

		<button class="btn--answer modal__form">
			Задать вопрос
		</button>

	</div>
</section>

<?php get_footer(); ?>
