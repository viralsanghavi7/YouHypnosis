<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
<img src="<?php echo $url ?>" class="img-fluid" />
	<div class="entry-content blog-col">

<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	<p class="date"> <?php echo get_the_date(); ?> </p>

		<?php //twentysixteen_excerpt(); ?>

		<?php


 $char_limit = 200; //character limit 
    $content = $post->post_content; //contents saved in a variable
      echo substr(strip_tags($content), 0, $char_limit); 


			/* translators: %s: Name of current post */
			//the_content( sprintf(
				//__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				//get_the_title()
			//) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
		<a class="readmore-btn" href="<?php the_permalink(); ?>"> Read more </a>
	</div><!-- .entry-content -->
	<!-- <footer class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer> -->
</article>
