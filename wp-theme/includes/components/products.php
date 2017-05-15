<?php
	//product query
	$query = array(
		'post_type' => 'producto',
		'posts_per_page' => -1);
?>
	
	<div class="product-list">
		

		<?php
			query_posts( $query );
			while(have_posts()):the_post();
		?>
		
		<div class="product" id="producto-<?php the_ID(); ?>">

			<div class="container">
				<div class="image-pr">
					<?php the_post_thumbnail('full'); ?>
				</div>

				<div class="desc-prod">
					
					<h2><?php the_title(); ?></h2>

					<div class="menu-side">
						<h3 data-toggle="collapse" data-target="#uso-<?php the_ID(); ?>">¿Qué es? <i class="fa fa-caret-down" aria-hidden="true"></i></h3>
						<div id="uso-<?php the_ID(); ?>" class="collapse">
								<?php echo types_render_field('uso'); ?>
						</div>

						<h3 data-toggle="collapse" data-target="#diferente-especial-<?php the_ID(); ?>">¿Qué lo hace diferente y especial?  <i class="fa fa-caret-down" aria-hidden="true"></i></h3>
						<div id="diferente-especial-<?php the_ID(); ?>" class="collapse">
								<?php echo types_render_field('diferente-especial'); ?>
						</div>

						<h3 data-toggle="collapse" data-target="#como-usa-<?php the_ID(); ?>">¿Cómo se usa?  <i class="fa fa-caret-down" aria-hidden="true"></i></h3>
						<div id="como-usa-<?php the_ID(); ?>" class="collapse">
								<?php echo types_render_field('como-usa'); ?>
						</div>

						<h3 data-toggle="collapse" data-target="#resultados-esperados-<?php the_ID(); ?>">¿Cuáles son los resultados esperados?  <i class="fa fa-caret-down" aria-hidden="true"></i></h3>
						<div id="resultados-esperados-<?php the_ID(); ?>" class="collapse">
								<?php echo types_render_field('resultados-esperados'); ?>
						</div>

						<h3 data-toggle="collapse" data-target="#componentes-<?php the_ID(); ?>">Componentes  <i class="fa fa-caret-down" aria-hidden="true"></i></h3>
						<div id="componentes-<?php the_ID(); ?>" class="collapse">
								<?php echo types_render_field('componentes'); ?>
						</div>
					</div>
				</div>
			</div>

		</div>	
			

		<?php
			endwhile;
			wp_reset_query();
		?>
	</div>