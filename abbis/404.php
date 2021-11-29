<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package abbis
 */

get_header();
?>

<section class="error404">
	<div class="container">

		<div class="error404__description">
			<h1 class="error404__title h1"><?php esc_html_e( 'Cтраница не найдена "404"', 'schoolstudy' ); ?></h1>
			<div class="error404__btn">
				<a href="<?php echo get_home_url(); ?>">На главную</a>
			</div>
		</div>

	</div>
</section>

<?php
get_footer();
