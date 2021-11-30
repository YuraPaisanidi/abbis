<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package abbis
 */

get_header();
?>

	<main id="primary" class="site-main">

	<?php 
	$tags = wp_get_post_tags($post->ID);
	if ($tags) {
		 $tag_ids = array();
		 foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
		 $args=array(
		 'tag__in' => $tag_ids, // Сортировка происходит по тегам (меткам)
		 'orderby'=>rand, // Добавляем условие сортировки рандом (случайный подбор)
		 'caller_get_posts'=>1, // Запрещаем повторение ссылок
		 'post__not_in' => array($post->ID),
		 'showposts'=>6 // Цифра означает количество выводимых записей
		 );
		 $my_query = new wp_query($args);
		 if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) {
					$my_query->the_post();
				?>

					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"></a>

				<?php
			}
		}
		 wp_reset_query();
	}
?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
