<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>

	<!-- Bootstrap CDN -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
	<!-- Custom Stylesheet -->
      <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/style.css">
       <?php wp_head(); ?>
</head>
<body>

<?php include 'template-parts/navbar.php' ?>

