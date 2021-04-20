<?php
include (get_template_directory().'/fonts/setup.php');
function web_site_script(){
    //stylesheet
    wp_enqueue_style('main_style',get_stylesheet_uri());
    wp_enqueue_style('style_file',get_template_directory_uri().'/css/style.css');
    //javascript
   // wp_enqueue_script( 'jquery-3.3.1.min.js', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array (), 1.1, true);

}
//attach with action hook
add_action("wp_enqueue_scripts","web_site_script");


function register_menu(){
    //menu register code
    register_nav_menus( 
        array(
            'primary_menu'=>_('primary Menu'),
            'footer_menu'=>_('Footer Menu')
        )

        );
}
//attach with action hook
add_action('init','register_menu');





function owt_theme_supports(){

   add_theme_support("post-thumbnails");
   //images size
   add_image_size("small-thumbnail",120,90,true); // 120 wide 90 tall
   add_image_size("banner-image",700,350,true);

   // post formats
   add_theme_support("post-formats",array("aside","gallery","link"));
}

// functions used to show thumbnail image:
the_post_thumbnail('small-thumbnail');

add_action("after_setup_theme","owt_theme_supports");



function blog_scripts() {
    // Register the script
    wp_register_script( 'custom-script', get_stylesheet_directory_uri(). 'assets/js/custom.js', array('jquery'), false, true );
 
    // Localize the script with new data
    $script_data_array = array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'security' => wp_create_nonce( 'load_more_posts' ),
    );
    wp_localize_script( 'custom-script', 'blog', $script_data_array );
 
    // Enqueued script with localized data.
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'blog_scripts' );

add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');



function load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts', 'security');
    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => '2',
        'paged' => $paged,
    );
    $blog_posts = new WP_Query( $args );
    ?>
 
    <?php if ( $blog_posts->have_posts() ) : ?>
        <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
        <?php endwhile; ?>
        <?php
    endif;
 
    wp_die();
}
?>