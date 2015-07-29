<?php
/**
 * The template for displaying all single posts.
 *
 * @package Wildeor
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<article class="blog-article">

		<div class="article-leading">

			<?php $slider_mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-mobile' ); ?>
			<?php $slider_tablet = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-tablet' ); ?>
			<?php $slider_desktop = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-desktop' ); ?>
			<?php $slider_retina = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-retina' ); ?>

			<picture class="blog-cover-image">
				<!--[if IE 9]><video style="display: none;"><![endif]-->
				<source
					srcset="<?php echo $slider_mobile[0]; ?>"
					media="(max-width: 500px)" />
				<source
					srcset="<?php echo $slider_tablet[0]; ?>"
					media="(max-width: 860px)" />
				<source
					srcset="<?php echo $slider_desktop[0]; ?>"
					media="(max-width: 1180px)" />
				<source
					srcset="<?php echo $slider_retina[0]; ?>"
					media="(min-width: 1181px)" />
				<!--[if IE 9]></video><![endif]-->
				<img srcset="<?php echo $slider_desktop[0]; ?>">
			</picture>

			<div class="meta-container">

				<h1>
					<?php the_title(); ?>
				</h1>
				<div class="entry-meta">
					<em>Posted <?php the_time('F j, Y'); ?></em>
				</div>

			</div>

		</div>

		<div class="entry-content-container">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div>

	</article>

	<?php basis_post_nav(); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
