<?php
/**
 * Template Name: Portfolio
 *
 *
 */

get_header(); ?>
<div class="photobanner"> 
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<?php
			while ( have_posts() ) : the_post();
				
				get_template_part( 'template-parts/page/content', 'page' );

			

			endwhile; // End of the loop.
			?>
			
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
</div><!--photobanner-->

<?php get_footer();
