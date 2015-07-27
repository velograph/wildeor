<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Wildeor
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php echo get_template_part('partials/entry', 'content'); ?>

	<?php $mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'mobile' ); ?>
	<?php $tablet = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'tablet' ); ?>
	<?php $desktop = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'desktop' ); ?>
	<?php $retina = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'retina' ); ?>

	<picture>
		<!--[if IE 9]><video style="display: none;"><![endif]-->
		<source
			srcset="<?php echo $mobile[0]; ?>"
			media="(max-width: 500px)" />
		<source
			srcset="<?php echo $tablet[0]; ?>"
			media="(max-width: 860px)" />
		<source
			srcset="<?php echo $desktop[0]; ?>"
			media="(max-width: 1180px)" />
		<source
			srcset="<?php echo $retina[0]; ?>"
			media="(min-width: 1181px)" />
		<!--[if IE 9]></video><![endif]-->
		<img srcset="<?php echo $desktop[0]; ?>">
	</picture>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
