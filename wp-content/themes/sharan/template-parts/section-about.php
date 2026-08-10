<?php
$eyebrow = get_sub_field( 'eyebrow' );
$heading = get_sub_field( 'heading' );
$content = get_sub_field( 'content' );
$link    = get_sub_field( 'link' );
?>

<section id="about" class="intro-cta section-dark d-flex align-items-center text-center">
	<div class="container content-narrow">
		<?php if ( $eyebrow ) : ?>
			<p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
		<?php endif; ?>

		<?php if ( $heading ) : ?>
			<h2><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>

		<?php if ( $content ) : ?>
			<?php echo wp_kses_post( $content ); ?>
		<?php endif; ?>

		<?php if ( $link ) : ?>
			<a
				class="btn btn-outline-light btn-sharan mt-5"
				href="<?php echo esc_url( $link['url'] ); ?>"
				<?php if ( ! empty( $link['target'] ) ) : ?>target="<?php echo esc_attr( $link['target'] ); ?>" rel="noopener noreferrer"<?php endif; ?>
			>
				<?php echo esc_html( $link['title'] ); ?>
			</a>
		<?php endif; ?>
	</div>
</section>
