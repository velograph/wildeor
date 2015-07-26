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

	<footer class="footer" role="contentinfo">

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

		<!-- Begin Footer -->

		<div class="footer-row">

			<div class="footer-section">
				<img src="<?php the_field('pinecone_logo'); ?>" />
			</div>

			<div class="footer-section">
				Mailing List
			</div>

			<div class="footer-section">
				<?php echo get_template_part('partials/social', 'media'); ?>
			</div>

		</div>

		<!-- End Footer -->

		<div class="footer-row site-info">
			&copy; <?php the_time('Y'); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
