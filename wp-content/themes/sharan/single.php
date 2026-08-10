<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starting_Theme
 */

get_header(); ?>

	<article id="primary" class="content-area pt-4">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); 

		$read_time = supercupni_read_time($post);
		
		?>

		<?php /* Header renders for EVERY post, not just ones with a featured
		         image — it used to sit inside `if ( has_post_thumbnail() )`, so a
		         post with no image published with no title, no date and no share
		         links at all. */ ?>
			<header class="container page-header">

				<div class="col-lg-8 offset-lg-2">

				<?php
				/**
				 * Back to News, in place of the Yoast breadcrumb.
				 *
				 * The crumb read "Blog > News > Premier Section > {the entire
				 * headline}" — it wrapped onto two lines and its last segment
				 * simply repeated the title sitting directly beneath it. A
				 * breadcrumb earns its keep in a deep hierarchy; news is one level
				 * down, so the only useful move is back to the listing. Same
				 * chevron-left affordance as the team, venue and competition pages.
				 *
				 * Target: the page assigned as the Posts page, falling back to
				 * /news/ if that isn't set.
				 */
				$scni_news_url = get_option( 'page_for_posts' )
					? get_permalink( get_option( 'page_for_posts' ) )
					: home_url( '/news/' );
				?>
				<nav class="scni-post-back" aria-label="Breadcrumb">
					<a class="scni-post-back__link" href="<?php echo esc_url( $scni_news_url ); ?>">
						<i class="fa-sharp fa-solid fa-chevron-left me-1" aria-hidden="true"></i>
						Back to News
					</a>
				</nav>

				<?php
				/* The category the crumb used to carry ("Premier Section") is kept
				   as the tag pill the news cards already use — it's the one bit of
				   the breadcrumb that told you something the title didn't, and it
				   still links to the category archive. */
				$scni_cats = get_the_category();
				$scni_cat  = $scni_cats[0] ?? null;
				?>
				<?php if ( $scni_cat ) : ?>
					<a class="subheading scni-post-category" href="<?php echo esc_url( get_category_link( $scni_cat ) ); ?>">
						<?php echo esc_html( $scni_cat->name ); ?>
					</a>
				<?php endif; ?>

				<?php /* `fadetext`, not `splittext`: the headline is ONE thing, so it
				         fades as one block. Per-line staggering made a title that
				         wraps ("Tickets now on sale for world-class 2026 Budget
				         Energy SuperCupNI") arrive in two instalments, which reads as
				         two separate headings rather than one that happens to wrap. */ ?>
				<?php the_title( '<h1 class="entry-title my-4 mb-md-3 pb-md-4 fadetext">', '</h1>' ); ?>
				
				<div class="d-flex justify-content-between mb-3 mb-lg-3 pb-lg-3 pt-1">

						<div class="me-3 me-lg-5 d-flex entry-meta">
							<?php echo get_the_date('M j, Y'); ?> 

							<div class="px-2">•</div>
					
							<span><?php echo (int) $read_time; ?> min read</span>
						
						</div>
						
						<div class="social-links ms-lg-5 text-left">

						<?php get_template_part( 'template-parts/components/share-links' ); ?>

						</div>

					</div>

				</div><!-- /.col-md-10 offset-md-1 -->

			</header>

		<?php /* Featured image carries NO spacing of its own. The gap to the copy
		         below used to be three stacked spacers — `mb-lg-5 pb-lg-5` here,
		         `mt-lg-5 pt-lg-5` on the container, and `pt-lg-5 mt-lg-5` again on
		         the column — roughly 290px of dead space on desktop. One rule owns
		         it now (`.scni-article`, see _blog.scss). */ ?>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="container scni-article-media animate-on-scroll" data-animation="animate__fadeIn">
				<?php the_post_thumbnail( 'full', array( 'class' => 'w-100' ) ); ?>
			</div>
		<?php endif; ?>

		<div class="container scni-article">

			<div class="row">

				<?php /* `px-5` on mobile pushed the article text 48px in from the
				         page's gutters — further than every other page on the site.
				         The container's own gutters are the rule now. */ ?>
				<div class="col-lg-8 offset-lg-2">

				<?php /* `fadetext` = one fade for the whole block (see functions.js).
				         The body is a single unit to read; fading it line by line
				         would make the reader wait for text already on screen. */ ?>
				<div class="entry-content fadetext"><?php the_content(); ?></div>
					

					<div class="d-flex flex-wrap justify-content-between my-5 pb-5 border-bottom">
						
						<div class="social-links text-lg-start mb-3 mb-lg-0">

						<p class="fw-bold">Share this post</p>

							<?php get_template_part( 'template-parts/components/share-links' ); ?>

						</div>

						<div class="me-3 me-lg-5 d-flex entry-tags align-items-end">
							<?php

							$blog_cat = get_the_tags();
							if ( $blog_cat && ! is_wp_error( $blog_cat ) ) : ?>

								<div class="blog-cats mb-2 mb-lg-0">

										<?php
										$types_list = array();
										foreach ( $blog_cat as $type ) {
											$types_list[] = sprintf(
												'<a href="%1$s"><span class="subheading">%2$s</span></a>',
												esc_url( get_category_link( $type->term_id ) ),
												esc_html( $type->name )
											);
										}
										echo implode( ' ', $types_list );
										?>

								</div>

							<?php endif; ?>
						
						</div>

					</div>

				</div><!-- /.col-md-10 offset-md-1 -->

			</div>

		</div>

			




			

		<?php endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</article><!-- #primary -->

			
	<?php get_template_part( 'template-parts/components/related-news' ); ?>

<?php
get_footer();