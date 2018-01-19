<?php
/*
* Title:           Visual layout
* Description:     Displays a row with a background image
* Version:         v2.0.0
*
* Field Map:
* image (image url)
*
* Files:
* templates/sections/visual.php
*/

add_action('acf/init', function(){

  acf_add_local_field_group(array(
    'key' => 'group_visual',
    'title' => __('Afbeelding'),
    'fields' => array(
      array(
        'key' => 'field_image',
        'label' => __('Afbeelding'),
        'name' => 'image',
        'type' => 'image',
        'instructions' => __('Kies een afbeelding'),
        'return_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
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
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 0,
    'description' => __('Layout: Visual'),
  ));
});
