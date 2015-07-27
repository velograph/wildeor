<?php
/**
 * The template for displaying all single posts.
 *
 * @package Wildeor
 */

get_header(); ?>

	<div class="content-container">

		<?php while ( have_posts() ) : the_post(); ?>

			<article class="blog-article">

				<div class="article-leading">

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

				</div>

				<?php echo get_template_part('partials/entry', 'content'); ?>

			</article>

			<?php basis_post_nav(); ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
