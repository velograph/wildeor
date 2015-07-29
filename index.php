<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wildeor
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<article class="blog-article">

			<a href="<?php the_permalink(); ?>">

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
			</a>

			<div class="meta-container">

				<h1>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h1>

			</div>

			</a>

		</article>

	<?php endwhile; ?>

	<?php basis_paging_nav(); ?>

<?php else : ?>

	<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

<?php get_footer(); ?>
