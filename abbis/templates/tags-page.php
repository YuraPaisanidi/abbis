<?php
/* Template name: Страница тегов */
?>

<?php get_header(); ?>


<section class="tags-cloud">
	<div class="tags-cloud__container container">
		<h2 class="h2 tags-cloud__title">Дерево тегов</h2>

		<div class="tags-cloud__wrap">
			<?php wp_tag_cloud(''); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>