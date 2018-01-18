<?php
/*
* Title:           Columns layout
* Description:     Displays up to 4 columns of content
* Docs:            https://getbootstrap.com/docs/4.0/layout/grid/
* Version:         v2.0.0
*
* Field Map:
* title (text)
* items (repeater)
* - title (text)
* - content (text)
*
* Files:
* templates/sections/columns.php
* templates/sections/parts/columns-item.php
*/

add_action('acf/init', function(){

  acf_add_local_field_group(array(
    'key' => 'group_columns',
    'title' => __('Columns'),
    'fields' => array(
      array(
        'key' => 'field_columns_title',
        'label' => 'Titel',
        'name' => 'title',
        'type' => 'text',
        'instructions' => '',
      ),
      array(
        'key' => 'field_columns_items',
        'label' => 'Kolom',
        'name' => 'items',
        'type' => 'repeater',
        'instructions' => '',
        'collapsed' => 'field_column_item_title',
        'min' => 0,
        'max' => 0,
        'layout' => 'block',
        'button_label' => 'Kolom toevoegen',
        'sub_fields' => array(
          array(
            'key' => 'field_column_item_title',
            'label' => 'Titel',
            'name' => 'title',
            'type' => 'text',
            'instructions' => '',
          ),
          array(
            'key' => 'field_column_item_content',
            'label' => 'Tekst',
            'name' => 'content',
            'type' => 'wysiwyg',
            'instructions' => '',
            'tabs' => 'all',
            'toolbar' => 'basic',
            'media_upload' => 0,
            'delay' => 1,
          ),
        ),
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
    'description' => __('Layout: Columns'),
  ));
});
