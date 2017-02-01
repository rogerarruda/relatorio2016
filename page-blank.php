<?php /* Template Name: Página branca */ ?>
<?php get_header('blank'); ?>

<?php
	// Start the Loop.
	while ( have_posts() ) : the_post();
	
		//get_template_part( 'content', 'page' );
		the_content();
		
	endwhile;
?>

	</main><!-- #main -->

<?php get_footer('blank'); ?>
