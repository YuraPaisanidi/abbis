<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package abbis
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<!-- <h2 class="comments-title">
			<?php
			$abbis_comment_count = get_comments_number();
			if ( '1' === $abbis_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'abbis' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $abbis_comment_count, 'comments title', 'abbis' ) ),
					number_format_i18n( $abbis_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2>.comments-title -->

		<?php the_comments_navigation(); ?>

		<div class="team__list">
			<? $comments_query = new WP_Comment_Query;
				$comments = $comments_query->query( 'status=approve' );
				if ( $comments ) {
				foreach ( $comments as $comment ) {
					echo '<div class="team__person"><div class="team__person_img">' . get_avatar( $comment, 250 ); '';
					echo '</div><div class="team__person_info"><p class="team__person_title">' . $comment->comment_author . '</p>';
					// echo '<p class="team__person_subtitle">' . get_the_author_meta('user_description'); '</p>';
					echo '<div class="team__person_text">' . $comment->comment_content . '</div>';
					// echo '<div class="team__person_date">' . $comment->comment_date_gmt . '</div></div></div>';
					echo '<div class="team__person_date">Опубликовано: ' . get_comment_date(); '</div>';
					echo '</div></div>';
			}} ?>

		</div><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'abbis' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
