<?php
/**
 * Render the page sections selected in the Flexible Content field.
 *
 * Layout names use the `section_{name}` convention, allowing each row to map
 * directly to template-parts/section-{name}.php.
 */

if ( have_rows( 'flexible_content' ) ) :
	while ( have_rows( 'flexible_content' ) ) :
		the_row();

		$layout = get_row_layout();

		if ( 0 !== strpos( $layout, 'section_' ) ) {
			continue;
		}

		$section = sanitize_file_name( substr( $layout, strlen( 'section_' ) ) );

		if ( $section ) {
			get_template_part( 'template-parts/section', $section );
		}
	endwhile;
endif;
