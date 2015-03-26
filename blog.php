<?
	// HOME PAGE

	// page vars
	$page_meta = array(
		"title" => "Blog",
		"keywords" => "",
		"description" => ""
	);
	$body_class = array(
		"page" => "pg_blog",
		"site_section" => "blog",
		"layout" => ""
	);
	$slides = array(
		array(
			'image' => 'http://placehold.it/1200x300',
			'title' => 'Articles',
			'subtitle' => 'A Very Long and Silly Subtitle That Should Break the Theme',
			'copy' => '<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.</p>',
			'link_url' => '#',
			'link' => 'Learn More'
		),
		array(
			'image' => 'http://placehold.it/1200x300',
			'title' => 'Articles',
			'subtitle' => 'Another Subtitle',
			'copy' => '<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.</p>',
			'link_url' => '#',
			'link' => 'Read More'
		),
		array(
			'image' => 'http://placehold.it/1200x300',
			'title' => 'Articles',
			'subtitle' => 'Yet Another Subtitle',
			'copy' => '<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.</p>',
			'link_url' => '#',
			'link' => 'More'
		)
	);
	$articles = array(
		array(
			'image' => 'http://placehold.it/180x135',
			'title' => 'Article Title',
			'subtitle' => 'Article Subtitle',
			'date' => 'Thursday, March 26th, 2015',
			'excerpt' => 'Donec sed odio dui. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet',
			'url' => 'detail.php'
		),
		array(
			'image' => 'http://placehold.it/180x135',
			'title' => 'Article Title',
			'subtitle' => 'Article Subtitle',
			'date' => 'Thursday, March 26th, 2015',
			'excerpt' => 'Donec sed odio dui. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet',
			'url' => 'detail.php'
		),
		array(
			'image' => 'http://placehold.it/180x135',
			'title' => 'Article Title',
			'subtitle' => 'Article Subtitle',
			'date' => 'Thursday, March 26th, 2015',
			'excerpt' => 'Donec sed odio dui. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet',
			'url' => 'detail.php'
		),
		array(
			'image' => 'http://placehold.it/180x135',
			'title' => 'Article Title',
			'subtitle' => 'Article Subtitle',
			'date' => 'Thursday, March 26th, 2015',
			'excerpt' => 'Donec sed odio dui. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet',
			'url' => 'detail.php'
		),
		array(
			'image' => 'http://placehold.it/180x135',
			'title' => 'Article Title',
			'subtitle' => 'Article Subtitle',
			'date' => 'Thursday, March 26th, 2015',
			'excerpt' => 'Donec sed odio dui. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet',
			'url' => 'detail.php'
		),
		array(
			'image' => 'http://placehold.it/180x135',
			'title' => 'Article Title',
			'subtitle' => 'Article Subtitle',
			'date' => 'Thursday, March 26th, 2015',
			'excerpt' => 'Donec sed odio dui. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet',
			'url' => 'detail.php'
		)
	);
	include("includes/header.php");
	if( !empty($slides) ) :
?>
	<section class="banner block">
		<div class="slides">
<?php
		foreach($slides as $slide) :
			extract($slide);
?>
			<div class="slide">
				<div class="image"><img src="<?php echo $image; ?>"/></div><!--/image-->
				<div class="text">
					<div class="content">
						<div class="container">
							<h1 class="title"><?php echo $title; ?></h1>
							<h2 class="subtitle"><?php echo $subtitle; ?></h2>
							<?php echo $copy; ?>
							<a href="<?php echo $link_url; ?>"><?php echo $link; ?></a>
						</div><!--/container-->
					</div><!--/content-->
				</div><!--/text-->
			</div><!--/slide-->
<?php
		endforeach;
?>
		</div><!--/slides-->
	</section>
<?php
	endif;
?>
	<section class="spacing Article_list block">
		<div class="container">
			<div class="left four_fifths content">
				<h2>Upcoming Articles</h2>
<?php
	if( !empty($articles) ) :
?>
			<div class="list">
<?php
		foreach( $articles as $article ) :
			extract($article);
?>
				<article class="block">
					<div class="right fifth image"><img src="<?php echo $image; ?>" /></div><!--/image-->
					<div class="left four_fifths content">
						<h3><?php echo $title; ?></h3>
						<h4><?php echo $subtitle; ?></h4>
						<p class="date"><?php echo $date; ?></p>
						<p><?php echo $excerpt; ?>...<a href="<?php echo $url; ?>">read more</a></p>
					</div><!--/content-->
				</srticle>
<?php
		endforeach;
?>
			</div><!--/list-->
<?php
	endif;
?>
			</div><!--/two_thirds-->
			<div class="right fifth side">
				<div class="content block">
					<h4>Categories</h4>
					<ul>
						<li><a href="#">Category</a></li>
						<li>
							<a href="#">Category</a>
							<ul>
								<li><a href="#">Subcategory</a></li>
								<li><a href="#">Subcategory</a></li>
							</ul>
						</li>
						<li><a href="#">Category</a></li>
						<li><a href="#">Category</a></li>
						<li><a href="#">Category</a></li>
						<li>
							<a href="#">Category</a>
							<ul>
								<li><a href="#">Subcategory</a></li>
							</ul>
						</li>
						<li><a href="#">Category</a></li>
					</ul>
				</div><!--/block-->
				<div class="content block">
					<h4>Tags</h4>
					<p><a href="#">Ornare</a>, <a href="#">Fusce</a>, <a href="#">Magna</a>, <a href="#">Ipsum</a>, <a href="#">Cras</a></a>
				</div><!--/block-->
			</div><!--/side-->
		</div><!--/container-->
	</section>
	<section class="block">
		<div class="container">
		</div><!--/container-->
	</section><!--/block-->
<?php
	include("includes/footer.php");
?>