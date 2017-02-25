<?php

	//Query for homepage
	$query = new WP_Query(array('pagename' => 'contactanos' ));
	while($query->have_posts()):$query->the_post();
?>
	
	<header>
		<h2><?php the_title(); ?></h2>
	</header>
	<div class="contact">
		<?php the_content(); ?>
	</div>

<?php
	endwhile;
	wp_reset_query();
?>