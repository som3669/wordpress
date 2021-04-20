<?php 

function rcb_setup_theme(){
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
}
add_action('after_setup_theme','rcb_setup_theme');


?>