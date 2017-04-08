<?php
	get_header();
	wp_head();
?>

<div class="container">
	<?php dynamic_sidebar('firstrow-sidebar') ?>

	<?php get_template_part('template-parts/blogs-template'); ?>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-9">
			
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

<?php
	wp_footer();
	get_footer();
?>