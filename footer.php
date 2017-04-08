<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-4 col-lg-4">
				<div class="footer-section-header">
					About
				</div>
				<div class="footer-section-content">
					<?php the_author_meta ('description', 1); ?>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4">
				<div class="footer-section-header">
					Subscribe to Our Newsletters <br />
					<?= do_shortcode('[mc4wp_form id="29"]'); ?>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4">
				<div class="footer-section-header">
					Share to show love
				</div>
				<div class="footer-section-content">
					<ul class="list-inline">
						<li><a target="_black" href="https://www.facebook.com/varun.shrivastava.3"><i class="fa fa-facebook fa-2x"></i></a></li>
						<li><a target="_black" href="https://twitter.com/vs_shrivastava"><i class="fa fa-twitter fa-2x"></i></a></li>
						<li><a target="_black" href="https://plus.google.com/share?url=<?= get_permalink() ?>"><i class="fa fa-google-plus fa-2x"></i></a></li>
						<li><a target="_black" href="//in.linkedin.com/in/shrivastavarun"><i class="fa fa-linkedin fa-2x"></i></a></li>
						<li><a target="_black" href=""><i class="fa fa-reddit fa-2x"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<hr />
		<div class="row stick-to-bottom">
			<div class="col-sm-12 col-md-12 col-lg-12 clearfix">
				<div class="left-section pull-left">
					copyright &copy; 2016
				</div>
				<div class="right-section pull-right">
					<?php
					 	$args = [
			        		'menu_class' => 'nav navbar-nav footer-menu',
			        		'theme_location' => 'footer-bar'
			        	];
					 	wp_nav_menu ($args); 
					?>
				</div>
			</div>
		</div>
	</div>
</footer>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" defer>
<script type="text/javascript" async defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>