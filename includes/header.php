<?php
	// HEADER
?>
	<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?= isset($page_meta["title"]) ? $page_meta["title"] : "SITE NAME" ?></title>
		<meta name="keywords" content="<?= isset($page_meta["keywords"]) ? $page_meta["keywords"] : "" ?>">
		<meta name="description" content="<?= isset($page_meta["description"]) ? $page_meta["description"] : "" ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0;">
		<meta name="author" content="http://www.aycmedia.com" />
		<link rel="icon" href="favicon.ico" />
		<script async src="js/libs/modernizr-2.6.2.min.js"></script>
		<link href="css/global.css" rel="stylesheet">
	</head>

	<body class="<?php print implode(" ", $body_class); ?>">
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		<header class="left block">
			<div class="container">
				<div class="left quarter logo">
					<a href="index.php"><img src="images/logo.png" /></a>
				</div><!--/third-->
				<div class="right three_quarters">
					<div class="right menu_button icon">&#xf0c9;</div>
					<nav class="right">
						<a href="content.php">Content</a>
						<a href="blog.php">Blog</a>
						<a href="form.php">Form</a>
						<a href="gallery.php">Gallery</a>
						<a href="menu.php">Menu</a>
						<a href="events.php">Events</a>
					</nav>
				</div><!--/two_thirds-->
			</div><!--/container-->
		</header>
<?php
	// END HEADER
?>