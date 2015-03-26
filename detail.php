<?
	// HOME PAGE

	// page vars
	$page_meta = array(
		"title" => "Detail",
		"keywords" => "",
		"description" => ""
	);
	$body_class = array(
		"page" => "pg_detail",
		"site_section" => "detail",
		"layout" => ""
	);
	$slides = array(
		array(
			'image' => 'http://placehold.it/1200x300',
			'title' => 'First Title',
			'subtitle' => 'A Very Long and Silly Subtitle That Should Break the Theme',
			'copy' => '<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.</p>',
			'link_url' => '#',
			'link' => 'Learn More'
		),
		array(
			'image' => 'http://placehold.it/1200x300',
			'title' => 'Second Title',
			'subtitle' => 'Another Subtitle',
			'copy' => '<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.</p>',
			'link_url' => '#',
			'link' => 'Read More'
		),
		array(
			'image' => 'http://placehold.it/1200x300',
			'title' => 'Third Title',
			'subtitle' => 'Yet Another Subtitle',
			'copy' => '<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.</p>',
			'link_url' => '#',
			'link' => 'More'
		)
	);
	$event = array(
		'image' => 'http://placehold.it/346x239',
		'title' => 'Event Title',
		'subtitle' => 'Event Subtitle',
		'event_date' => 'Thursday, March 26th, 2015',
		'excerpt' => 'Donec sed odio dui. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet',
		'url' => 'detail.php'
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

	extract($event);
?>
	<section class="spacing detail block">
		<div class="container">
			<article class="content block">
				<div class="right third image" style="padding: 0 0 25px 50px;"><img src="<?php echo $image; ?>" /></div><!--/image-->
				<h1>Testing</h1>
				<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus.</p>
				<p>Cras mattis consectetur purus sit amet fermentum. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod.</p>
				<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum.</p>
				<p>Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Donec sed odio dui. Curabitur blandit tempus porttitor.</p>
				<ul>
					<li>Donec ullamcorper nulla non metus auctor fringilla.</li>
					<li>Nulla vitae elit libero, a pharetra augue.</li>
					<li>Aenean lacinia bibendum nulla sed consectetur.</li>
					<li>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</li>
				</ul>
				<p>Cras mattis consectetur purus sit amet fermentum. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod.</p>
				<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum.</p>
				<p>Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Donec sed odio dui. Curabitur blandit tempus porttitor.</p>
				<blockquote>
					Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Donec sed odio dui. Curabitur blandit tempus porttitor.
				</blockquote>
				<p>Cras mattis consectetur purus sit amet fermentum. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod.</p>
				<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum.</p>
				<p>Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla. Donec id elit non mi porta gravida at eget metus. Donec sed odio dui. Curabitur blandit tempus porttitor.</p>
			</article><!--/block-->
			<div class="links block">
				<div class="left half">
					<a href="blog.php">Back to Blog</a>
				</div><!--/half-->
				<div class="right half">

				</div><!--/half-->
			</div><!--/details-->
		</div><!--/container-->
	</section>
	<section class="block">
		<div class="container">
		</div><!--/container-->
	</section><!--/block-->
<?php
	include("includes/footer.php");
?>