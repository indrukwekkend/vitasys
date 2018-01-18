<?php
/**
 * Advanced Custom Fields
 */
namespace Roots\Sage\Fields;

$sage_includes = [
	'lib/fields/pricing.php',     // Prijslijsten
];
foreach ( $sage_includes as $file ) {
	if ( ! $filepath = locate_template( $file ) ) {
		trigger_error( sprintf( __( 'Error locating %s for inclusion', 'sage' ), $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
unset( $file, $filepath );

add_action('acf/init', function(){

  acf_add_local_field_group(array(
  	'key' => 'group_layouts',
  	'title' => 'Layouts',
  	'fields' => array(
  		array(
  			'key' => 'field_layouts',
  			'label' => 'Layouts',
  			'name' => 'layouts',
  			'type' => 'flexible_content',
  			'instructions' => '',
  			'layouts' => array(

          /*====== Pricing ======*/
          'layout_pricing' => array(
            'key' => 'layout_pricing',
            'name' => 'pricing',
            'label' => 'Prijslijsten',
            'display' => 'block',
            'sub_fields' => array(
              array(
              	'key' => 'field_clone_pricing',
              	'label' => 'Clone Prijslijsten',
              	'name' => 'clone_pricing',
              	'type' => 'clone',
              	'clone' => array(
              		0 => 'group_pricing',
              	),
              	'display' => 'seamless',
              	'layout' => 'block',
              ),
            ),
          ),


        ),
  			'button_label' => __('Voeg layout toe'),
  		),
  	),
  	'location' => array(
  		array(
  			array(
  				'param' => 'post_type',
  				'operator' => '==',
  				'value' => 'page',
  			),
  		),
  	),
  	'menu_order' => 0,
  	'position' => 'normal',
  	'style' => 'seamless',
  	'label_placement' => 'top',
  	'instruction_placement' => 'label',
  	'active' => 1,
  ));
});
