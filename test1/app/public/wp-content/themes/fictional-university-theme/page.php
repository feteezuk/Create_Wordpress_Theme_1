<?php
//Bring Global header into the "PAGES"
	get_header();

	while(have_posts()) {
		the_post(); ?>
		<h1>THIS IS A PAGE, NOT A POST</h1>
	<h2><?php the_title(); ?> </h2>
	<p><?php the_content(); ?></p>
	
	
	<?php 
	}

//Bring Global footer into the Pages
	get_footer();

?>