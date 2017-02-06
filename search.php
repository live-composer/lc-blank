<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://livecomposerplugin.com/themes/
 *
 * @package LC Blank
 */

get_header();
$url = admin_url( 'post-new.php?post_type=dslc_templates' );
?>

	<div class="align-center">
		You can <a href="<?php echo $url; ?>">create design</a> for this archive page in the Live Composer. <a href="<?php echo $url; ?>">WP Admin > Live Composer > Templates.</a>
	</div>

<?php get_footer(); ?>
