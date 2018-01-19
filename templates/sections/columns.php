<section id="<?= strtolower( str_replace( ' ','-', get_sub_field('title') ) ); ?>" class="columns">

	<div class="container py-4">

    <?php if( get_field('title') ): ?>
      <div class="row py-5 text-center">

        <div class="col-12">

          <h1 class="mb-3 display-4">
            <?php the_sub_field('title'); ?>
          </h1>

        </div>

      </div>
    <?php endif; ?>

		<?php if( have_rows('items') ): ?>

			<div class="row justify-content-middle">

				<?php  while( have_rows('items') ) : the_row(); ?>

					<?php get_template_part('templates/sections/parts/columns','item'); ?>

				<?php endwhile; ?>

			</div>

		<?php endif; ?>

	</div>

</section>
