<?php /* Template Name: Single Post Template */ ?>



<div class="row">
			<div class="col-sm-9">

			<article class="post-wrapper post">
				<?php 
					if (have_posts()) : 
						while (have_posts()) : the_post(); 
				?>

					
					<h1 class="post__title"><?= the_title() ?></h1>
					<hr>
					<div class="post__info">
						<div class="row">
							<div class="col-sm-1">
								<?= get_avatar( get_the_author_meta( 'ID' ), 62, '', '', ['class'=> 'img-responsive img-square '] ); ?>
							</div>
							<div class="col-sm-3">
								<ul class="list-group">
									<li class=" post__author">by <?php the_author(); ?></li>
	                        		<li class=" post__category">In <a href="<?= get_the_category()[0]->slug ?>"><?= get_the_category()[0]->name; ?></a></li>
								</ul>
							</div>
							<div class="col-sm-6">
								<div class="post__date pull-right"><?= get_the_date() ?></div>
							</div>
						</div>
					</div>
					<img class="img img-responsive" src="<?= the_post_thumbnail_url('large') ?>">
					<p class="post__content"><?= the_content() ?></p>
					
				


				<?php 
					endwhile;
					endif;
				?>
			</article>
			</div>
			<div class="col-md-3">
				<section class="widget-wrapper">
					<?php dynamic_sidebar ('singlepage-sidebar'); ?>			
				</section>
			</div>
		</div>
	
	<div class="row">
		<div class="colsm-12 col-md-8 col-lg-8">
			<!-- ------------- LOAD COMMENT TEMPLATE ---------- -->
		    <?php comments_template(); ?>
		</div>
	</div>