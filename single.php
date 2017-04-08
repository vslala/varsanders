<?php
	get_header();
	wp_head();
?>

<div class="container">
		<?php dynamic_sidebar('firstrow-sidebar') ?>
		<?php get_template_part('template-parts/singlepost-template') ?>
</div>


<?php
	wp_footer();
	get_footer();
?>