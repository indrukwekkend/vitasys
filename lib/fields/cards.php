<?php
/*
* Title:           Cards layout
* Description:     Displays up to 4 columns of content in the form of cards
* Docs:            http://getbootstrap.com/docs/4.0/components/card/
* Version:         v1.0.0
*
* Field Map:
* title (text)
* items (repeater)
* - title (text)
* - content (text)
*
* Files:
* templates/sections/cards.php
* templates/sections/parts/cards-item.php
*/

add_action('acf/init', function(){

  acf_add_local_field_group(array(
    'key' => 'group_cards',
    'title' => __('Cards'),
    'fields' => array(
      array(
        'key' => 'field_cards_title',
        'label' => 'Titel',
        'name' => 'title',
        'type' => 'text',
        'instructions' => '',
      ),
      array(
        'key' => 'field_cards_subtitle',
        'label' => 'Ondertitel',
        'name' => 'subtitle',
        'type' => 'text',
        'instructions' => '',
      ),
      array(
        'key' => 'field_cards_items',
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
            'key' => 'field_cards_subtitle',
            'label' => 'Ondertitel',
            'name' => 'subtitle',
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
    'description' => __('Layout: Cards'),
  ));
});
