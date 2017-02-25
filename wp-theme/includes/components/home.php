<?php

	//Query for homepage
	$query = new WP_Query(array('pagename' => 'home' ));
	while($query->have_posts()):$query->the_post();
?>

	<div class="main-banner">
		<?php the_post_thumbnail('full'); ?>
		<div class="mobile-banner">
			<?php echo types_render_field("banner-mobile");?>
		</div>
	</div>

	<div class="container about">
		<div class="col-md-6 about-img">
			<figure style="background-image: url('<?php echo types_render_field("imagen-nosotros", array("raw" => "true")); ?>')">
				<h2>Nosotros</h2>
			</figure>
		</div>

		<div class="col-md-6 about-txt">
			<?php the_content(); ?>
		</div>
	</div>

<?php
	endwhile;
	wp_reset_query();
?>