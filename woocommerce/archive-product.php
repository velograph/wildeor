<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<div class="banner-image">
			<?php $shop_banner_mobile = wp_get_attachment_image_src( get_post_thumbnail_id( 8 ), 'shop-banner-mobile' ); ?>
			<?php $shop_banner_tablet = wp_get_attachment_image_src( get_post_thumbnail_id( 8 ), 'shop-banner-tablet' ); ?>
			<?php $shop_banner_desktop = wp_get_attachment_image_src( get_post_thumbnail_id( 8 ), 'shop-banner-desktop' ); ?>
			<?php $shop_banner_retina = wp_get_attachment_image_src( get_post_thumbnail_id( 8 ), 'shop-banner-retina' ); ?>

			<picture>
				<!--[if IE 9]><video style="display: none;"><![endif]-->
				<source
					srcset="<?php echo $shop_banner_mobile[0]; ?>"
					media="(max-width: 500px)" />
				<source
					srcset="<?php echo $shop_banner_tablet[0]; ?>"
					media="(max-width: 860px)" />
				<source
					srcset="<?php echo $shop_banner_desktop[0]; ?>"
					media="(max-width: 1180px)" />
				<source
					srcset="<?php echo $shop_banner_retina[0]; ?>"
					media="(min-width: 1181px)" />
				<!--[if IE 9]></video><![endif]-->
				<img srcset="<?php echo $shop_banner_desktop[0]; ?>">
			</picture>
		</div>

		<?php do_action( 'woocommerce_archive_description' ); ?>

		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * woocommerce_before_shop_loop hook
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				// do_action( 'woocommerce_before_shop_loop' );
			?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>


					<?php while ( have_posts() ) : the_post(); ?>

						<?php if ($i == 0 || $i % 3 == 0) { ?>
							<div class="portal-row">
						<?php }; ?>

						<div class="portal shop-portal">
							<?php $portal_mobile = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'medium'); ?> <!-- portal-mobile -->
							<?php $portal_tablet = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'medium'); ?> <!-- portal-tablet -->
							<?php $portal_desktop = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'medium'); ?> <!-- portal-desktop -->
							<?php $portal_retina = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'medium'); ?> <!-- portal-retina -->

							<a href="<?php the_permalink(); ?>">
								<picture class="portal-image">
									<!--[if IE 9]><video style="display: none"><![endif]-->
									<source
										srcset="<?php echo $portal_mobile[0]; ?>"
										media="(max-width: 500px)" />
									<source
										srcset="<?php echo $portal_tablet[0]; ?>"
										media="(max-width: 860px)" />
									<source
										srcset="<?php echo $portal_desktop[0]; ?>"
										media="(max-width: 1180px)" />
									<source
										srcset="<?php echo $portal_retina[0]; ?>"
										media="(min-width: 1181px)" />
									<!--[if IE 9]></video><![endif]-->
									<img srcset="<?php echo $portal_desktop[0]; ?>">
								</picture>
							</a>

							<div class="portal-link">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</div>
						</div>

						<?php
						  $i++;
						  if ($i % 3 == 0){echo "</div>";} ?>

						<?php // wc_get_template_part( 'content', 'product' ); ?>

					<?php endwhile; // end of the loop. ?>


			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<?php get_footer( 'shop' ); ?>
