<?php
$heading = get_sub_field( 'heading' );
$content = get_sub_field( 'content' );
?>

<section class="testimonials section-light text-center">
	<div class="container">
		<div class="section-heading mx-auto">
			<?php if ( $heading ) : ?>
				<h2><?php echo esc_html( $heading ); ?></h2>
			<?php endif; ?>

			<?php if ( $content ) : ?>
				<?php echo wp_kses_post( $content ); ?>
			<?php endif; ?>

			<div class="review-logos">
				<a
					href="https://www.google.com/search?q=sharaan+executive+transport+reviews&sca_esv=4055421c27a6c95c&rlz=1C5CHFA_enGB1099GB1099&sxsrf=APpeQnseExcdjLU3EwKBrDU9OVP6bHPhwg%3A1786092316712&ei=HJt1apmCK6inhbIP8Nq7qA0&biw=2105&bih=1132&ved=0ahUKEwiZgMuwkI6WAxWoU0EAHXDtDtUQ4dUDCBA&uact=5&oq=sharaan+executive+transport+reviews&gs_lp=Egxnd3Mtd2l6LXNlcnAiI3NoYXJhYW4gZXhlY3V0aXZlIHRyYW5zcG9ydCByZXZpZXdzMgcQABiABBgNMgsQABiABBiKBRiGAzILEAAYgAQYigUYhgMyCBAAGIAEGKIEMgUQABjvBTIFEAAY7wUyBRAAGO8FMggQABiABBiiBEijElCWCljREXACeAGQAQCYAXygAdMFqgEDMi41uAEDyAEA-AEBmAIJoALkBcICChAAGEcY1gQYsAPCAgYQABgWGB7CAggQABiJBRiiBJgDAOIDBRIBMSBAiAYBkAYCkgcDNC41oAfFK7IHAzIuNbgH4QXCBwMyLjfIBwuACAE&sclient=gws-wiz-serp#lrd=0x644bacaa1f982781:0x69c5417c0d3fef72,1"
					target="_blank"
					aria-label="Google Reviews"
				>
					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/google-reviews.png' ); ?>"
						alt="Google Reviews"
					/>
				</a>
				<a
					href="https://www.tripadvisor.co.uk/Attraction_Review-g186476-d28117340-Reviews-Sharan_Executive_Transport-Castlewellan_County_Down_Northern_Ireland.html"
					target="_blank"
					aria-label="Tripadvisor"
				>
					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/tripadvisor.png' ); ?>"
						alt="Tripadvisor"
					/>
				</a>
				<a
					href="https://www.trustpilot.com/review/sharanexecutive.com"
					target="_blank"
					aria-label="Trustpilot"
				>
					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/trustpilot.png' ); ?>"
						alt="Trustpilot"
					/>
				</a>
			</div>
		</div>

		<?php if ( have_rows( 'testimonials' ) ) : ?>
			<div class="swiper review-grid" aria-label="Customer reviews">
				<div class="swiper-wrapper">
					<?php while ( have_rows( 'testimonials' ) ) : ?>
						<?php
						the_row();
						$quote  = get_sub_field( 'quote' );
						$author = get_sub_field( 'author' );
						?>
						<figure class="swiper-slide">
							<img
								class="stars"
								src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/stars.svg' ); ?>"
								alt="5 stars"
							/>
							<?php if ( $quote ) : ?>
								<blockquote><?php echo esc_html( $quote ); ?></blockquote>
							<?php endif; ?>
							<?php if ( $author ) : ?>
								<figcaption>— <?php echo esc_html( $author ); ?></figcaption>
							<?php endif; ?>
						</figure>
					<?php endwhile; ?>
				</div>
				<button class="review-button review-button-prev" type="button" aria-label="Previous review"></button>
				<button class="review-button review-button-next" type="button" aria-label="Next review"></button>
				<div class="review-pagination"></div>
			</div>
		<?php endif; ?>
	</div>
</section>
