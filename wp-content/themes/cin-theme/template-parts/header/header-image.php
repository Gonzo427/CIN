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
<?php	if (  twentyseventeen_is_frontpage()   ) :
echo '<div class="custom-header">';

	echo '<div class="custom-header-media">'; ?>
			<?php the_custom_header_markup(); ?>

<?php	echo '</div>'; ?>


	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

<?php  ?>

<?php
	//global $post;
	//$post = $wp_query->get_queried_object();
	//$post = get_theme_mod( 'dropdownpages', '#' );

	$post = get_theme_mod( 'dropdownpages-1', '#' );
	$pagename1 = get_post_field( 'post_name', get_post() );

	$post = get_theme_mod( 'dropdownpages-2', '#' );
	$pagename2 = get_post_field( 'post_name', get_post() );


	/*echo '<div class="cta-btns">';
	echo '<a href=" ' . $pagename1 . ' " class="btn slideUp">';
	echo get_theme_mod( 'button_1', 'Button 1' );
	echo '</a>';
	echo '<a href=" ' . $pagename2 . ' " class="btn slideUp">';
	echo get_theme_mod( 'button_2', 'Button 2' );
	echo '</a>';
	echo '</div>';*/


endif;
	
echo '</div>';
?>