<?php  get_header();
	if ( have_posts() ) {
		while ( have_posts() ) {
		the_post();
?>

	<!-- Single Post Content -->
	<?php require_once('components/single-post.inc.php'); ?>
	<!-- ./Single Post Content  -->

<?php
		} // end while
	} // end if
	get_footer();
?>