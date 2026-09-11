<?php
$eyebrow = get_sub_field( 'eyebrow' );
$heading = get_sub_field( 'heading' );
$content = get_sub_field( 'content' );
$link    = get_sub_field( 'link' );

static $services_section_instance = 0;
$services_section_instance++;
$service_galleries = array();
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
				<?php $service_index = 0; ?>
				<?php while ( have_rows( 'services' ) ) : ?>
					<?php
					the_row();
					$service_index++;
					$image           = get_sub_field( 'image' );
					$service_heading = get_sub_field( 'heading' );
					$service_content = get_sub_field( 'content' );
					$gallery         = array_values( array_filter( (array) get_sub_field( 'gallery' ) ) );
					$modal_id        = sprintf( 'service-gallery-%d-%d', $services_section_instance, $service_index );

					if ( $gallery ) {
						$service_galleries[] = array(
							'id'      => $modal_id,
							'heading' => $service_heading,
							'images'  => $gallery,
						);
					}
					?>
					<article class="col-md-6 col-xl-4 service-card my-3 my-lg-5 g-lg-5">
						<?php if ( $gallery ) : ?>
							<a
								class="service-card-link"
								href="#<?php echo esc_attr( $modal_id ); ?>"
								data-bs-toggle="modal"
								aria-label="<?php echo esc_attr( sprintf( __( 'View gallery for %s', 'sharan' ), $service_heading ?: __( 'this service', 'sharan' ) ) ); ?>"
							>
						<?php endif; ?>

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

						<?php if ( $gallery ) : ?>
							</a>
						<?php endif; ?>
					</article>
				<?php endwhile; ?>
			</div>

			<?php foreach ( $service_galleries as $service_gallery ) : ?>
				<div
					class="modal fade service-gallery-modal"
					id="<?php echo esc_attr( $service_gallery['id'] ); ?>"
					tabindex="-1"
					aria-labelledby="<?php echo esc_attr( $service_gallery['id'] ); ?>-title"
					aria-hidden="true"
				>
					<div class="modal-dialog modal-xl modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h2 class="modal-title" id="<?php echo esc_attr( $service_gallery['id'] ); ?>-title">
									<?php echo esc_html( $service_gallery['heading'] ?: __( 'Service gallery', 'sharan' ) ); ?>
								</h2>
								<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="<?php esc_attr_e( 'Close', 'sharan' ); ?>"></button>
							</div>
							<div class="modal-body">
								<div class="swiper service-gallery" aria-label="<?php echo esc_attr( sprintf( __( '%s image gallery', 'sharan' ), $service_gallery['heading'] ?: __( 'Service', 'sharan' ) ) ); ?>">
									<div class="swiper-wrapper">
										<?php foreach ( $service_gallery['images'] as $gallery_image ) : ?>
											<div class="swiper-slide">
												<?php
												echo wp_get_attachment_image(
													$gallery_image,
													'full',
													false,
													array(
														'class'   => 'service-gallery-slide-image',
														'loading' => 'lazy',
													)
												);
												?>
											</div>
										<?php endforeach; ?>
									</div>

									<?php if ( count( $service_gallery['images'] ) > 1 ) : ?>
										<button class="service-gallery-button service-gallery-button-prev" type="button" aria-label="<?php esc_attr_e( 'Previous image', 'sharan' ); ?>"></button>
										<button class="service-gallery-button service-gallery-button-next" type="button" aria-label="<?php esc_attr_e( 'Next image', 'sharan' ); ?>"></button>
										<div class="service-gallery-pagination"></div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
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
