<section class="index">

	<?php get_template_part('templates/header', 'page'); ?>

	<?php if (!have_posts()) : ?>

		<div class="alert alert-warning" role="warning">

			<?php _e('Helaas, er zijn (nog) geen berichten om te lezen :(', 'sage'); ?>

		</div>

		<?php get_search_form(); ?>

	<?php endif; ?>

	<?php while (have_posts()) : the_post(); ?>

		<?php get_template_part('templates/content', get_post_type() ? get_post_type() : get_post_format()); ?>

	<?php endwhile; ?>

	<?php the_posts_navigation(); ?>

</section>
