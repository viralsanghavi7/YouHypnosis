<?php

/**

 * The template for displaying all single posts and attachments

 *

 * @package WordPress

 * @subpackage Twenty_Sixteen

 * @since Twenty Sixteen 1.0

 */



get_header(); ?>

<div class="internalBanner"><img src="http://localhost:8888/youhypnosis/wp-content/uploads/2019/10/internal-banner2-1.jpg" class="img-fluid"><div class="container"><header class="entry-header"> <h1 class="entry-title"> <?php the_title(); ?> </h1></header></div></div>

<div id="primary" class="content-area">

  <div class="container">

    <main id="main" class="site-main" role="main">

      <div class="row">

        <div class="col-lg-8 col-md-8">

          <div class="contentSection">

            <?php

		// Start the loop.

		while ( have_posts() ) : the_post();



			// Include the single post content template.

			get_template_part( 'template-parts/content', 'single' );



			// If comments are open or we have at least one comment, load up the comment template.

			if ( comments_open() || get_comments_number() ) {

				comments_template();

			}



			if ( is_singular( 'attachment' ) ) {

				// Parent post navigation.

				the_post_navigation( array(

					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),

				) );

			} elseif ( is_singular( 'post' ) ) {

				// Previous/next post navigation.

				//the_post_navigation( array(

					//'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .

						//'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .

						//'<span class="post-title">%title</span>',

					//'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .

						//'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .

						//'<span class="post-title">%title</span>',

				//) );

			}



			// End of the loop.

		endwhile;

		?>

          </div>

        </div>

        <div class="col-lg-4 col-md-4">

          <div class="sidebarSection"> 

            

            <!--<div class="widget">



</div>-->

            

            <?php get_sidebar(); ?>

          </div>

        </div>

      </div>

    </main>

    <!-- .site-main --> 

  </div>

  <!-- .content-area --> 

</div>

<?php get_footer(); ?>

