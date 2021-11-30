<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
