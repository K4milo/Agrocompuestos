<?php
	//product query
	$query = array(
		'post_type' => 'producto',
		'posts_per_page' => -1);
?>
	
	<div class="container product-icons">
		<div class="col-md-4 title">
			<h2>Productos</h2>
		</div>

		<?php
			query_posts( $query );
			while(have_posts()):the_post();
		?>
			
			<div class="col-md-4 item">
				<h3><?php the_title(); ?></h3>
				<figure>
					<?php echo types_render_field('icono')?>
				</figure>
				<a href="#producto-<?php the_ID(); ?>">Conocer Más</a>
			</div>

		<?php
			endwhile;
			wp_reset_query();
		?>
	</div>