<?php
/* 
	Template Name: Products page
*/

	get_header();
 ?>
	<?php while (have_posts()): the_post();?>

<div class="products">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 info">
				<h1>Featured Products</h1>
				<hr>
				<p>Display any products as tabs or accordions with optional grid or carousel mode.Custom products per row per module and per breakpoint.<br>Each module can display products in either grid or list view with different styles per module.</p>
			</div>
		</div>
		
		<div class="row">
			<?php $wpb_all_query=new WP_Query(array('post_type'=>'custom_posts','category_name' =>'products','post_status'=>'publish')); ?>
            <?php if($wpb_all_query->have_posts()){

            	?>
            	<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

	            <div class="col-lg-3 earphone" style="padding: 0px;">
					<div class="image" style="text-align: center;">
						<a href="<?php echo get_the_post_thumbnail_url();?>"><img src="<?php echo get_the_post_thumbnail_url();?>"></a>
					</div>
					<div class="row" style="margin: 0px;">
						<div class="left" style="float: left;margin: 10px;">
							<a href="" style="text-decoration:underline; color: #606060;"><?php echo the_field('items_brand'); ?></a>
						</div>
						<div class="right" style="float: right;margin: 10px;">
							<p>Model <?php echo the_field('model'); ?></p>
						</div>
					</div>
					<div class="row detail" style="margin: 0px;">
						<div class="headphone" style="font-weight: bold;font-size: 18px; margin: 10px;"><?php echo get_the_title();?></div>
						<div class="priceis" style="float: left;margin: 10px;">$<?php echo the_field('actual_price'); ?></div>
						<div class="pricewas" style="text-decoration: line-through; float: left;margin: 10px;">$<?php echo the_field('mark_price'); ?></div>
						<div class="clear"></div>
						<div class="form" style="margin: 10px;">
							<input type="number" name="number" id="number" placeholder="1">
							<button>ADD TO CART</button>
							<span class="glyphicon glyphicon-heart-empty" style="margin-left: 30px; margin-right: 20px;"></span>
							<span class="glyphicon glyphicon-play-circle"></span>
						</div>
					</div>
					<div class="row" style="margin: 0px;">
						<div class="left" style="float: left; margin: 10px;">
							<a href="" style="color:black;"> <span class="glyphicon glyphicon-usd" style="color: green;"></span> Buy Now</a>
						</div>
						<div class="right" style="float: right; margin: 10px;">
							<a href="" title="Do you have Question?" style="color: black;">Question <span  class="glyphicon glyphicon-question-sign" style="color: red;"></span> </a> 
						</div>
						<div class="clear"></div>
					</div>
				</div>

    				<?php endwhile; ?>

            <?php }else{ ?>
            <p><?php echo('sorry,no posts'); ?></p>
            <?php } ?>
			
		</div>
	</div>
</div>




<?php endwhile; ?>

 <?php 

 get_footer();
 ?>