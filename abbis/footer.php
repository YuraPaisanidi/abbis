<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ruzfoods
 */

?>

		<?php get_template_part( 'parts/footer' ); ?>

		<?php wp_footer();?>

		
		<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
		<script>
			const hideModalThanks = () => {
				const modalThanks = document.querySelector('#modal__thanks');
				modalThanks.classList.add('hidden');
				document.querySelector('.modal').classList.remove('active');
			}
		</script>

	</body>
</html>