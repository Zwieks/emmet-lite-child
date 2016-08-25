<?php
/*
YARPP Template: List with date
Description: This template returns the related posts as a comma-separated list and date.
Author: Ronald Zwiers
*/
?>

<h3>Meer nieuws</h3>

<?php if (have_posts()):
	$postsArray = array();
	while (have_posts()) : the_post();
		$postsArray[] = '<div class="more-news-item"><date class="date">'.get_the_time('d F Y').'</date><a href="'.get_permalink().'" rel="bookmark">'.get_the_title().'</a></div><!-- ('.get_the_score().')-->';
	endwhile;

echo implode(', '."\n",$postsArray); // print out a list of the related items, separated by commas
else:?>

<?php endif; ?>
