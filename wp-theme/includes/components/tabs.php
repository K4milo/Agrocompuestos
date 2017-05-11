<div class="centros">
	<header>
		<h2>Centro de Conocimiento</h2>
	</header>
	<?php

		//Query for homepage
		$query = new WP_Query(array('pagename' => 'home' ));
		while($query->have_posts()):$query->the_post();
	?>

	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#video">Videos</a></li>
		<li><a data-toggle="tab" href="#menu1">Fotos</a></li>
	</ul>

	<div class="tab-content">
		<div id="video" class="tab-pane fade in active">
			<?php echo types_render_field('video-iframe'); ?>
		</div>
		<div id="menu1" class="tab-pane fade">
			<ul class="slider-bottom">
				<li><?php echo do_shortcode('[types field="imagenes-centro" separator="</li><li>"][/types]'); ?> </li>
			</ul>
		</div>
	</div>


	<?php
		endwhile;
		wp_reset_query();
	?>
</div>