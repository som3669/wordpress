<?php 

	/* 
		Template Name: Gallery page
	*/

		get_header();
?>

<?php while (have_posts()): the_post();?>

	<footer>
	<div class="gallery">
			<div class="container-fluid">
				<div class="row gallery_heading">
					<h1>Improved Gallery Module</h1>
					<hr>
				</div>
				<div class="row gallery_info">
					<p>The Gallery module supports images,videos and can also act as banners that can point to any other parts or open other Popup modules.<br>Create different modules with images,videos,banners or a combination of all.Add your modules on any page in any grid format. </p>	
				</div>
				<div class="row images">
					<div class="col-lg-1 photo">
					  <img src="<?php echo get_bloginfo('template_url'); ?>/images/girl.png">
					</div>
					<div class="col-lg-1 photo ">
					  <img src="<?php echo get_bloginfo('template_url'); ?>/images/bird.png">
					</div>
					<div class="col-lg-1 photo  ">
					  <img src="<?php echo get_bloginfo('template_url'); ?>/images/sale.png">
					</div>
					<div class="col-lg-1 photo ">
					  <img src="<?php echo get_bloginfo('template_url'); ?>/images/leaf.png">
					</div>
					<div class="col-lg-1 photo  ">
					  <img src="<?php echo get_bloginfo('template_url'); ?>/images/shoe.png">
					</div>
					<div class="col-lg-1 photo">
					  <img src="<?php echo get_bloginfo('template_url'); ?>/images/hair.png">
					</div>
					<div class="col-lg-1 photo  ">
					  <img src="<?php echo get_bloginfo('template_url'); ?>/images/jeans.png">
					</div>
					<div class="col-lg-1 photo ">
					  <img src="<?php echo get_bloginfo('template_url'); ?>/images/jacket.png">
					</div>
					<div class="col-lg-1 photo ">
					  <img src="<?php echo get_bloginfo('template_url'); ?>/images/glass.png">
					</div>
				</div>
			</div>
		</div>
	</footer>
<?php endwhile; ?>




<?php

		get_footer();
 ?>