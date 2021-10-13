<?php 

function university_files() {
	//Load all the css files here
	wp_enqueue_style("university_main_styles", get_stylesheet_uri() );
	
}

//Give add_action(arg1, arg2).
//
add_action("wp_enqueue_scripts", "university_files");

 ?>