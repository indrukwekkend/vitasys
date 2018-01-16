<footer class="container-fluid bg-dark">

	<div class="row">
		<div class="col-12 pb-4 pt-3">
			<?php
                wp_nav_menu(array(
                    'menu' => 'primary_navigation',
                    'theme_location' => 'primary_navigation',
                    'depth' => 2,
                    'container' => 'div',
                    'container_id' => 'footer_navigation',
                    'menu_class' => 'nav justify-content-center',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker()
                ));
            ?>
		</div>
	</div>

	<div class="row px-5 pb-5">

		<div class="col-6 text-left">
			<p class="text-muted"><small>Copyright &copy; <?= date('Y') ?> <a href="https://indrukwekkend.nl/" title="Indrukwekkend B.V.">Indrukwekkend B.V.</a></small></p>
		</div>

		<div class="col-6 text-right">
			<p class="text-muted"><small>Realisatie: <a href="https://indrukwekkend.nl/" title="Indrukwekkend">Indrukwekkend</a></small></p>
		</div>

	</div>

</footer>
