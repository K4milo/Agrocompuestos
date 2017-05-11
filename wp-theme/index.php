<?php get_template_part('includes/header'); ?>

<div class="container-fluid">
  <div class="row" id="home">
	<!--home-->
	<?php get_template_part('includes/components/home'); ?>  
    
  </div><!-- /.row -->

  <div class="row" id="productos">
	<!--product-icons-->
	<?php get_template_part('includes/components/icons'); ?>  
    
  </div><!-- /.row -->

  <div class="row" id="product-list">
	<!--product-list-->
	<?php get_template_part('includes/components/products'); ?>      
    
  </div><!-- /.row -->

  <div class="row" id="centro">
	<!--contact form-->
	<?php get_template_part('includes/components/tabs'); ?>     
    
  </div><!-- /.row -->

  <div class="row" id="contacto">
	<!--contact form-->
	<?php get_template_part('includes/components/contact'); ?>     
    
  </div><!-- /.row -->


</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
