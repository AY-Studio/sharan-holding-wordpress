<?php
$eyebrow = get_sub_field( 'eyebrow' );
$heading = get_sub_field( 'heading' );
$content = get_sub_field( 'content' );
$image   = get_sub_field( 'image' );
?>

<section id="fleet" class="fleet section-dark">
	<div class="container">
		<div class="row align-items-center g-5">
			<div class="col-lg-6 fleet-copy">
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

			<?php if ( $image ) : ?>
				<div class="col-lg-6">
					<?php
					echo wp_get_attachment_image(
						$image,
						'full',
						false,
						array(
							'class'   => 'fleet-image',
							'loading' => 'lazy',
						)
					);
					?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
