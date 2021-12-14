<?php
/* Template name: Политика конфидециальности */
?>

<?php get_header(); ?>

<main class="main">

	
	<section class="policy">
		<div class="crumbs">
			<div class="container">
				<ul>
					<li><a href="<?php echo get_home_url(); ?>/">Главная</a></li>
					<li><p><?php the_title(); ?></p></li>
				</ul>
			</div>
		</div>

		<div class="policy__container container">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<h2 class="h2 policy__title"><?php the_title(); ?></h2>

					<?php the_content(); ?>

				<?php endwhile; ?>
				<?php endif; ?>

		</div>
	</section>

</main>

<?php
get_sidebar();
get_footer();
