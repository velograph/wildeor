<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Wildeor
 */

get_header(); ?>

<script>
	jQuery(document).ready(function(){
	  jQuery('.home-page-slider').slick({
	  });
	});
</script>

	<div id="primary" class="content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<!-- Begin Flexible Content -->

			<?php if( have_rows('slider_guts') ) : ?>

				<div class="home-page-slider">
			    <?php while ( have_rows('slider_guts') ) : ?>

			        <?php the_row(); ?>

			        <?php if( get_row_layout() == 'slider' ) : ?>

						<div class="slide">

							<?php $mobile = wp_get_attachment_image_src(get_sub_field('image'), 'mobile'); ?>
							<?php $tablet = wp_get_attachment_image_src(get_sub_field('image'), 'tablet'); ?>
							<?php $desktop = wp_get_attachment_image_src(get_sub_field('image'), 'desktop'); ?>
							<?php $retina = wp_get_attachment_image_src(get_sub_field('image'), 'retina'); ?>

							<?php if( get_sub_field('image') ) : ?>
								<picture class="home-featured-image">
									<!--[if IE 9]><video style="display: none"><![endif]-->
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
							<?php endif; ?>

							<?php the_sub_field('caption'); ?>

							<?php the_sub_field('page_link'); ?>

						</div>

			        <?php endif; ?>

			    <?php endwhile; ?>

			</div>

			<?php endif; ?>

		<!-- End Flexible Content -->

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
