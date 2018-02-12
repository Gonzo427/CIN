<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

		<div class="custom-header-media">
			<?php the_custom_header_markup(); ?>

		</div>



	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

<?php	if (  twentyseventeen_is_frontpage()   ) :

	echo '<div class="cta-btns">';
	echo	'<a href="/join" class="btn">Join the Network</a>';
	echo	'<a href="/apply" class="btn">Apply for Funding</a>';
	echo '</div>';

endif;
	?>
</div><!-- .custom-header -->
