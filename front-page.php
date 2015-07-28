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
		  arrows: false,
		  dots: true,
		  mobileFirst: true,
		  lazyLoad: 'ondemand',
	  });
	});
</script>

<?php while ( have_posts() ) : the_post(); ?>

	<!-- Begin Flexible Content -->

	<?php if( have_rows('slider_guts') ) : ?>

		<div class="home-page-slider">
	    <?php while ( have_rows('slider_guts') ) : ?>

	        <?php the_row(); ?>

	        <?php if( get_row_layout() == 'slider' ) : ?>

				<div class="slide">

					<?php $mobile = wp_get_attachment_image_src(get_sub_field('image'), 'home-portal-mobile'); ?>
					<?php $tablet = wp_get_attachment_image_src(get_sub_field('image'), 'home-portal-tablet'); ?>
					<?php $desktop = wp_get_attachment_image_src(get_sub_field('image'), 'home-portal-desktop'); ?>
					<?php $retina = wp_get_attachment_image_src(get_sub_field('image'), 'home-portal-retina'); ?>

					<?php if( get_sub_field('image') ) : ?>
						<a href="<?php the_sub_field('page_link'); ?>">
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
						</a>
					<?php endif; ?>

					<div class="slide-caption">
						<?php the_sub_field('caption'); ?>
						<a href="<?php the_sub_field('page_link'); ?>">Check it Out</a>
					</div>

				</div>

	        <?php endif; ?>

	    <?php endwhile; ?>

	</div>

	<?php endif; ?>

<!-- End Flexible Content -->

<!-- Begin Shop Portals -->

<?php if( have_rows('portal_content') ) : ?>

	<div class="portal-row">

    <?php while ( have_rows('portal_content') ) : ?>

        <?php the_row(); ?>

        <?php if( get_row_layout() == 'portal' ) : ?>

			<div class="portal shop-portal">

				<?php $home_portal_mobile = wp_get_attachment_image_src(get_sub_field('image'), 'home-portal-mobile'); ?>
				<?php $home_portal_tablet = wp_get_attachment_image_src(get_sub_field('image'), 'home-portal-tablet'); ?>
				<?php $home_portal_desktop = wp_get_attachment_image_src(get_sub_field('image'), 'home-portal-desktop'); ?>
				<?php $home_portal_retina = wp_get_attachment_image_src(get_sub_field('image'), 'home-portal-retina'); ?>

				<?php if( get_sub_field('image') ) : ?>
					<a href="<?php the_sub_field('page_link'); ?>">
						<picture class="portal-image">
							<!--[if IE 9]><video style="display: none"><![endif]-->
							<source
								srcset="<?php echo $home_portal_mobile[0]; ?>"
								media="(max-width: 500px)" />
							<source
								srcset="<?php echo $home_portal_tablet[0]; ?>"
								media="(max-width: 860px)" />
							<source
								srcset="<?php echo $home_portal_desktop[0]; ?>"
								media="(max-width: 1180px)" />
							<source
								srcset="<?php echo $home_portal_retina[0]; ?>"
								media="(min-width: 1181px)" />
							<!--[if IE 9]></video><![endif]-->
							<img srcset="<?php echo $home_portal_desktop[0]; ?>">
						</picture>
					</a>
				<?php endif; ?>

				<div class="portal-link">
					<a href="<?php the_sub_field('page_link'); ?>">
						<?php the_sub_field('title'); ?>
					</a>
				</div>

			</div>

        <?php endif; ?>

    <?php endwhile; ?>

</div>

<?php endif; ?>

<!-- End Shop Portals -->

<!-- Begin Page Lead In -->

<div class="page-lead-in">

	<div class="pinecone-logo">
		<img src="<?php the_field('pinecone_logo'); ?>" />
	</div>

	<div class="page-lead-in-content">
		<h1><?php the_field('lead_in_title'); ?></h1>
		<?php the_field('lead_in_content'); ?>
	</div>

</div>

<!-- End Page Lead In -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
