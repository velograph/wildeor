<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Wildeor
 */
?>

	</div><!-- #content -->

	<footer class="footer-top footer-row">

		<!-- Begin Partner Logos -->

		<?php if( have_rows('partner_logos', 27) ) : ?>

			<div class="partner-logos">

			<?php while ( have_rows('partner_logos', 27) ) : ?>

				<?php the_row(); ?>

				<?php if( get_row_layout() == 'partner' ) : ?>

					<div class="partner">

						<a href="<?php the_sub_field('partner_link', 27); ?>">
							<img src="<?php the_sub_field('logo', 27); ?>" />
						</a>

					</div>

				<?php endif; ?>

			<?php endwhile; ?>

		</div>

		<?php endif; ?>

		<!-- End Partner Logos -->

	</footer>

	<footer class="footer-bottom footer-row">

		<div class="footer-row">

			<div class="footer-section footer-logo">
				<img src="<?php the_field('text_logo_dark', 27); ?>" />
			</div>

			<div class="footer-section mailing-signup">
				Mailing List
			</div>

			<div class="footer-section site-info">
				<?php // echo get_template_part('partials/social', 'media'); ?>
				&copy; <?php the_time('Y'); ?>
				<div class="built-by">
					Built by <a href="http://velograph.net" target="_blank">Velograph</a>
				</div>
			</div>

		</div>

		<!-- End Footer -->

		<!-- <div class="footer-row site-info">
			&copy; <?php the_time('Y'); ?>
		</div> -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
