<section id="<?= strtolower( get_sub_field('title') ); ?>" class="columns">

	<div class="container py-5">

		<div class="row">
			<div class="col-12">
				<h1 class="display-4 mb-4 text-center"><?php the_sub_field('title'); ?></h1>
			</div>
		</div>

		<?php if( have_rows('columns') ): ?>

			<div class="row justify-content-middle">

				<?php  while( have_rows('columns') ) : the_row(); ?>

					<?php get_template_part('templates/sections/parts/column','item'); ?>

				<?php endwhile; ?>

			</div>

		<?php endif; ?>

	</div>

</section>
