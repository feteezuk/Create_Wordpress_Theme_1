<?php
	//Bring Global header into the posts pages
	get_header();

	while(have_posts()) {
		the_post(); ?>
	<h2><?php the_title(); ?> </h2>
	<p><?php the_content(); ?></p>
	
	
	<?php 
	}
	//Bring Global footer into the posts pages
	get_footer();

?>