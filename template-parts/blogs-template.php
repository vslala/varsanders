<?php /* Template Name: BlogsTemplate */ ?>




<div class="row">
		<div class="col-sm-12 col-md-8">
			<?php 
				$count = 0;
				if (have_posts()) :
			        while (have_posts()) : the_post();
			    		$count++;
			?>

			<article class="post-wrapper post">
				<div class="row">
					<div class="col-sm-12">
						<a href="<?= get_the_permalink() ?>"><img class="img img-responsive" src="<?= the_post_thumbnail_url('large') ?>"></a>
					</div>
					<div class="col-sm-12 col-md-6">
						<h1 class="post__title"><a href="<?= get_the_permalink() ?>"><?= the_title(); ?></a></h1>
						<div class="line-br"></div>
						<br />
						<div class="post__hashtag">
							<?php
								foreach (get_the_tags() as $tag) :
							?>

							<a href="<?= $tag->slug ?>">
								<label class="label label-primary">#<?= $tag->name ?></label>
							</a>

							<?php endforeach; ?>
						</div>
					</div>
					<div class="col-sm-12 col-md-6">
						<?php
							if ( function_exists( 'sharing_display' ) ) {
							    sharing_display( '', true );
							}
							 
							if ( class_exists( 'Jetpack_Likes' ) ) {
							    $custom_likes = new Jetpack_Likes;
							    echo $custom_likes->post_likes( '' );
							}
						?>
						<p class="post__date"><?= the_date() ?></p>
						<p><span class="post__excerpt"><?= get_the_excerpt(); ?></span></p>
						<p><a class="post__link-text" href="<?= get_the_permalink() ?>">Read More >></a></p>
						<p>
							<?php
								if ( function_exists( 'sharing_display' ) ) {
								    sharing_display( '', true );
								}
								 
								if ( class_exists( 'Jetpack_Likes' ) ) {
								    $custom_likes = new Jetpack_Likes;
								    echo $custom_likes->post_likes( '' );
								}
							?>
						</p>
					</div>
				</div>
			</article>


			<?php 

					endwhile;
				endif;
			?>

			<!-- Pagenation -->
			<div class="row">
				<div class="col-sm-12">
					<div class="wrapper">
						<?php
							if(function_exists('wp_paginate')) { 
					            wp_paginate(); 
					         }
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<section class="widget-wrapper">
				<?php dynamic_sidebar ('frontpage-sidebar'); ?>			
			</section>
				
		</div>
	</div>