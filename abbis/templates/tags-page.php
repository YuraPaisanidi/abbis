<?php
/* Template name: Страница тегов */
?>

<?php get_header(); ?>


<section class="post-content">
    <?php if( !has_post_thumbnail() ): ?>
        <h1 class="title ularge bordered bold"><?php the_title(); ?></h1>
    <?php endif; ?>
	<div class="tags">
        <?php
        $tags        = get_tags( 'orderby=name&order=ASC' );
        $capital     = '';
        $i           = 0;
        $cols_number = 3; // Количество колонок
        $cut         = ceil( count( $tags ) / $cols_number );
        $cutter      = $cut;
        $letter_i    = 0;
        $output      = '<div class="column">';
        foreach ( $tags as $tag ) {
            $i ++;
            $firstletter = mb_substr( $tag->name, 0, 1 );
            $firstletter = mb_strtoupper($firstletter);
            if ( $firstletter != $capital ) {
                $letter_i ++;
                if ( $letter_i != 1 ) {
                    $output .= '</ul>';
                }
                if ( $i > $cutter ) {
                    $output .= '</div><div class="column">';
                    $cutter = $cutter + $cut;
                }
                $capital = $firstletter;
                $output .= '<h4>' . $capital . '</h4><ul>';
            }
            $term = get_term_by( 'id', (int) $tag->term_id, 'post_tag' );
            $output .= '<li><a href="' . get_term_link( (int) $tag->term_id, 'post_tag' ) . '">' . $tag->name . '</a> (' . $term->count . ')</li>';
        }
        echo $output . '</ul></div>';
        ?>
    </div>

    <div class="clear"></div>
</section>

<?php get_footer(); ?>