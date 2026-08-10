<?php
$eyebrow = get_sub_field( 'eyebrow' );
$heading = get_sub_field( 'heading' );
$content = get_sub_field( 'content' );
$link    = get_sub_field( 'link' );
?>

<section id="services" class="services section-light">
	<div class="container">
		<div class="section-heading mx-auto text-center">
			<?php if ( $eyebrow ) : ?>
				<p class="eyebrow text-gold"><?php echo esc_html( $eyebrow ); ?></p>
			<?php endif; ?>

			<?php if ( $heading ) : ?>
				<h2><?php echo esc_html( $heading ); ?></h2>
			<?php endif; ?>

			<?php if ( $content ) : ?>
				<?php echo wp_kses_post( $content ); ?>
			<?php endif; ?>
		</div>

		<?php if ( have_rows( 'services' ) ) : ?>
			<div class="row g-5 mx-auto service-grid">
				<?php while ( have_rows( 'services' ) ) : ?>
					<?php
					the_row();
					$image           = get_sub_field( 'image' );
					$service_heading = get_sub_field( 'heading' );
					$service_content = get_sub_field( 'content' );
					?>
					<article class="col-md-6 col-xl-4 service-card my-3 my-lg-5 g-lg-5">
						<?php if ( $image ) : ?>
							<div class="service-card-image">
								<?php
								echo wp_get_attachment_image(
									$image,
									'full',
									false,
									array( 'loading' => 'lazy' )
								);
								?>
							</div>
						<?php endif; ?>

						<?php if ( $service_heading ) : ?>
							<h3><?php echo esc_html( $service_heading ); ?></h3>
						<?php endif; ?>

						<?php if ( $service_content ) : ?>
							<?php echo wp_kses_post( $service_content ); ?>
						<?php endif; ?>
					</article>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

		<?php if ( $link ) : ?>
			<div class="text-center mt-5">
				<a
					class="btn btn-outline-dark btn-sharan"
					href="<?php echo esc_url( $link['url'] ); ?>"
					<?php if ( ! empty( $link['target'] ) ) : ?>target="<?php echo esc_attr( $link['target'] ); ?>" rel="noopener noreferrer"<?php endif; ?>
				>
					<?php echo esc_html( $link['title'] ); ?>
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>
