<section id="<?= strtolower( str_replace( ' ','-', get_sub_field('title') ) ); ?>" class="cards bg-light">

	<div class="container py-4">

    <div class="row pb-3 text-center">

      <div class="col-12">

        <h1 class="mb-3 display-4">
          <?php the_sub_field('title'); ?>
        </h1>

        <p class="lead">
          <?php the_sub_field('subtitle'); ?>
        </p>

      </div>

    </div>

		<?php if( have_rows('items') ): ?>

			<div class="row card-deck mb-4 justify-content-middle">

				<?php  while( have_rows('items') ) : the_row(); ?>

					<?php get_template_part('templates/sections/parts/cards','item'); ?>

				<?php endwhile; ?>

			</div>

		<?php endif; ?>

	</div>

</section>
