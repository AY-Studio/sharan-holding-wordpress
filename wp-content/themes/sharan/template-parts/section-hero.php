<?php
$eyebrow = get_sub_field( 'eyebrow' );
$heading = get_sub_field( 'heading' );
$content = get_sub_field( 'content' );
?>

<section id="home" class="hero d-flex align-items-center text-center">
	<div class="container hero-content">
		<?php if ( $eyebrow ) : ?>
			<p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
		<?php endif; ?>

		<?php if ( $heading ) : ?>
			<h1><?php echo esc_html( $heading ); ?></h1>
		<?php endif; ?>

		<?php if ( $content ) : ?>
			<p class="hero-copy mx-auto"><?php echo nl2br( esc_html( $content ) ); ?></p>
		<?php endif; ?>
	</div>
</section>
