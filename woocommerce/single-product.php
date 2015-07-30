<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
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
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="banner-image">
				<?php $shop_banner_mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'shop-banner-mobile' ); ?>
				<?php $shop_banner_tablet = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'shop-banner-tablet' ); ?>
				<?php $shop_banner_desktop = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'shop-banner-desktop' ); ?>
				<?php $shop_banner_retina = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'shop-banner-retina' ); ?>

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

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<?php get_footer( 'shop' ); ?>
