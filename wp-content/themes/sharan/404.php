<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Starting_Theme
 */

get_header(); ?>

<article class="page-404">
	<div class="container page-404__container">
		<h1 class="page-404__h1 text-center">404</h1>
		<div class="page-404__title">Ohh! Page not found</div>
		<div class="page-404__subtitle">The page you requested cannot be found. The page you are looking for <br />might have been removed, had its name changed, or is temporarily unavailable.</div>
		<a class="page-404__btn" href="/">Back to homepage</a>
	</div>
</article>

<?php
get_footer();
