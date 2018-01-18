<?php

if( have_rows('sections') ) :
	while( have_rows('sections') ) : the_row(); 

	if( get_row_layout() == 'section_display' ):
		get_template_part('templates/sections/display');
	endif;

	if( get_row_layout() == 'section_featured' ):
		get_template_part('templates/sections/featured');
	endif;

	if( get_row_layout() == 'section_featurette' ):
		get_template_part('templates/sections/featurette');
	endif;

	if( get_row_layout() == 'section_visual' ):
		get_template_part('templates/sections/visual');
	endif;

	if( get_row_layout() == 'section_brands' ):
		get_template_part('templates/sections/brands');
	endif;

	if( get_row_layout() == 'section_quote' ):
		get_template_part('templates/sections/quote');
	endif;

	if( get_row_layout() == 'section_posts' ):
		get_template_part('templates/sections/posts');
	endif;

	if( get_row_layout() == 'section_maps' ):
		get_template_part('templates/sections/maps');
	endif;

	if( get_row_layout() == 'section_forms' ):
		get_template_part('templates/sections/gravityforms');
	endif;

	if( get_row_layout() == 'section_pricinglists' ):
		get_template_part('templates/sections/pricinglists');
	endif;

	endwhile;
endif;
