<?php // Version: v1.0.0 ?>

<section id="<?= strtolower( get_sub_field('title') ); ?>" class="cards">

	<div class="container py-5">

		<div class="row">
			<div class="col-12 text-center">
				<h1 class="display-4"><?php the_sub_field('title'); ?></h1>
        <p class="lead"><?php the_sub_field('subtitle'); ?></p>
			</div>
		</div>

		<?php if( have_rows('items') ): ?>

			<div class="row card-deck justify-content-middle">

				<?php  while( have_rows('items') ) : the_row(); ?>

					<?php get_template_part('templates/sections/parts/cards','item'); ?>

				<?php endwhile; ?>

			</div>

		<?php endif; ?>

	</div>

</section>
