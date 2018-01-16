<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('templates/head'); ?>

  <body <?php body_class(); ?>>

    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('Je gebruikt een <strong>verouderde</strong> browser. Doe elke ontwikkelaar een plezier en <a href="http://browsehappy.com/">installeer een recente browser</a>', 'sage'); ?>
      </div>
    <![endif]-->

    <?php do_action('get_header'); ?>

    <?php get_template_part('templates/header'); ?>

    <main role="main">

      <?php include Wrapper\template_path(); ?>

    </main>

    <?php if( have_rows('sections') ) : ?>
      <?php while( have_rows('sections') ) : the_row(); ?>

      <?php if( get_row_layout() == 'section_display' ): ?>
        <?php get_template_part('templates/sections/display'); ?>
      <?php endif;?>

      <?php if( get_row_layout() == 'section_featured' ): ?>
        <?php get_template_part('templates/sections/featured'); ?>
      <?php endif;?>

      <?php if( get_row_layout() == 'section_featurette' ): ?>
        <?php get_template_part('templates/sections/featurette'); ?>
      <?php endif;?>

      <?php if( get_row_layout() == 'section_visual' ): ?>
        <?php get_template_part('templates/sections/visual'); ?>
      <?php endif;?>

      <?php if( get_row_layout() == 'section_brands' ): ?>
        <?php get_template_part('templates/sections/brands'); ?>
      <?php endif;?>

      <?php if( get_row_layout() == 'section_quote' ): ?>
        <?php get_template_part('templates/sections/quote'); ?>
      <?php endif;?>

      <?php if( get_row_layout() == 'section_posts' ): ?>
        <?php get_template_part('templates/sections/posts'); ?>
      <?php endif;?>

      <?php if( get_row_layout() == 'section_maps' ): ?>
        <?php get_template_part('templates/sections/maps'); ?>
      <?php endif;?>

      <?php if( get_row_layout() == 'section_forms' ): ?>
        <?php get_template_part('templates/sections/gravityforms'); ?>
      <?php endif;?>

      <?php if( get_row_layout() == 'section_pricinglists' ): ?>
        <?php get_template_part('templates/sections/pricinglists'); ?>
      <?php endif;?>

      <?php endwhile;?>
    <?php endif;?>

    <?php do_action('get_footer'); ?>

    <?php get_template_part('templates/footer');?>

    <?php wp_footer(); ?>

  </body>

</html>
