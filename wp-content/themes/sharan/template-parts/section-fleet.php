<?php
$eyebrow        = get_sub_field( 'eyebrow' );
$heading        = get_sub_field( 'heading' );
$content        = get_sub_field( 'content' );
$button         = get_sub_field( 'button' );
$image          = get_sub_field( 'image' );
$image_position = get_sub_field( 'image_position' );
$padding_top    = get_sub_field( 'padding_top' );
$padding_bottom = get_sub_field( 'padding_bottom' );
$image_is_left  = 'left' === $image_position;

$section_classes = array( 'fleet', 'section-dark' );

if ( $padding_top ) {
	$section_classes[] = 'pt-0';
}

if ( $padding_bottom ) {
	$section_classes[] = 'pb-0';
}
?>

<section id="fleet" class="<?php echo esc_attr( implode( ' ', $section_classes ) ); ?>">
	<div class="container">
		<div class="row align-items-center <?php if(!$image) : ?> justify-content-center text-center<?php endif; ?> g-5">

			<?php if ( $image ) : ?>
				<div class="col-lg-6<?php echo $image_is_left ? ' order-lg-1' : ''; ?> d-lg-none">
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

			<div class="col-lg-6 fleet-copy<?php echo $image_is_left ? ' order-lg-2' : ''; ?> ">
				<?php if ( $eyebrow ) : ?>
					<p class="eyebrow text-gold"><?php echo esc_html( $eyebrow ); ?></p>
				<?php endif; ?>

				<?php if ( $heading ) : ?>
					<h2><?php echo esc_html( $heading ); ?></h2>
				<?php endif; ?>

				<?php if ( $content ) : ?>
					<?php echo wp_kses_post( $content ); ?>
				<?php endif; ?>

				<?php if ( $button ) : ?>
					<a
						class="btn"
						href="<?php echo esc_url( $button['url'] ); ?>"
						<?php if ( ! empty( $button['target'] ) ) : ?>target="<?php echo esc_attr( $button['target'] ); ?>" rel="noopener noreferrer"<?php endif; ?>
					>
						<?php echo esc_html( $button['title'] ); ?>
					</a>
				<?php endif; ?>

			</div>

			<?php if ( $image ) : ?>
				<div class="col-lg-6<?php echo $image_is_left ? ' order-lg-1' : ''; ?> d-none d-lg-block">
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
