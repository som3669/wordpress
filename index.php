
<?php 
get_header();
?>		
 
<div class="post">
	<div class="container">
		
	
				<div class="row">

					<?php 
					$args = array(
				        'post_type' => 'post',
				        'post_status' => 'publish',
				        'posts_per_page' => '3',
				        'paged' => 1,
				    );

					$blog_posts =new WP_Query($args); ?>
            			<?php if($blog_posts ->have_posts()){

            			?>
	            	<?php while ( $blog_posts ->have_posts() ) : $blog_posts ->the_post(); ?>
	            		<h2><?php echo get_the_title(); ?></h2>
						<div class="col-lg-6">
							<p><?php echo get_the_content(); ?></p>
							
						</div>
						<div class="col-lg-6">
							<p><?php echo get_the_content(); ?></p>
						</div>
					<?php endwhile; ?>
					 <div class="loadmore">Load More...</div>
		            <?php }else{ ?>
		            <p><?php echo('sorry,no posts'); ?></p>
		            <?php } ?>
		        </div>
		  </div>
</div>



<script type="text/javascript">
	jQuery(window).scroll(function($) {
    if (jQuery(window).scrollTop() + jQuery(window).height() > jQuery(document).height() – 200 ) {
        var data = {
            'action': 'load_posts_by_ajax',
            'page': page,
            'security': blog.security
        };
 
        $.post(blog.ajaxurl, data, function(response) {
            if($.trim(response) != '') {
                $('.blog-posts').append(response);
                page++;
            } else {
                $('.loadmore').hide();
            }
        });
    }
});
</script>

 <?php 

    get_footer();
     ?>