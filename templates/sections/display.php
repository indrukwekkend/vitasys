<?php // Version: v2.0.1 ?>

<section id="<?= strtolower( str_replace( ' ','-', get_sub_field('title') ) ); ?>" class="display">

  <div class="container">

    <div class="row py-5 text-center">

      <div class="col-12">

        <h1 class="mb-3 <?php the_sub_field('type'); ?>">
          <?php the_sub_field('title'); ?>
        </h1>

        <p class="lead">
          <?php the_sub_field('lead'); ?>
        </p>

      </div>

    </div>

  </div>

</section>
