<?php
    get_header();
    wp_head();
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php 
				if (have_posts()): 
					while (have_posts()) : the_post(); 
			?>
			<section class="wrapper">
                <article class="post">
                        <h1 class="page__heading"><?= get_the_title() ?></h1>
                    <hr />
                    <?php 
                        if (has_post_thumbnail ()) :
                    ?>
                    <div class="section-cover">
                        <img src="<?= the_post_thumbnail_url ('large') ?>" class="responsive-img thumnail-img" alt="">
                    </div>
                    <?php endif; ?>
                    <div class="post__content">
                        <?php the_content(); ?>
                    </div>
                </article>
                
            </section>
			<?php endwhile;endif; ?>
		</div>
	</div>
</div>



<?php
    wp_footer();
    get_footer();
?>