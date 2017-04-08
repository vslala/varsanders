<?php
	get_header();
	wp_head();
?>

<div class="container">
	<?php dynamic_sidebar('firstrow-sidebar') ?>
	<div class="row">
		<div class="col-sm-12">
			<section class="category-wrapper wrapper">
				<h1 class="page__heading">TAG: <?= single_tag_title() ?></h1>
			</section>
		</div>
	</div>

	<?php get_template_part('template-parts/singlepost-template') ?>
</div>





<?php
	wp_footer();
	get_footer();
?>