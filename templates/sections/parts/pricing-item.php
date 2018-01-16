<?php
use Roots\Sage\Extras;
?>

<?php if( get_sub_field('image') ): ?>

	<div class="row">
		<div class="col my-3 text-center">
			<?= Extras\DOM_image( get_sub_field('image'), 'menukaart', 'img-fluid rounded' ); ?>
		</div>
	</div>

<?php endif; ?>

<?php if( have_rows('items') ): ?>

	<?php  while( have_rows('items') ) : the_row(); ?>

		<div class="row align-items-center pt-1 pb-3">

			<div class="col-1 text-center">
				<strong><?php the_sub_field('number'); ?>.</strong>
			</div>

			<div class="col col-md-9">

				<div class="row">
					<div class="col">
						<strong><?php the_sub_field('label'); ?></strong>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<small class="text-muted"><?php the_sub_field('description'); ?></small>
					</div>
				</div>

			</div>

			<div class="col col-md-2 text-right">
				&euro; <?php the_sub_field('price'); ?>
			</div>

		</div>

	<?php endwhile; ?>

<?php endif; ?>
