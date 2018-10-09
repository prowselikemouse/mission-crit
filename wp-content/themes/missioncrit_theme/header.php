<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
		<div class='logoAndTitle'>

			<div class='logo'>
				<img src="<?php bloginfo('template_directory'); ?>/images/mission-crit-logo.png" />
			</div>
	    <h1 class="title">
	      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
	        <?php bloginfo( 'name' ); ?>
	      </a>
	    </h1>
		</div>

		<div class='hamNav'>
			HAMNAV
			<ul>
				<li><a href="<?php echo home_url( '/' ); ?>">Home</a></li>
				<li><a href="">History</li>
				<ul>
					<li><a href="">2018 - Mission Crit 5</a></li>
					<li><a href="">2017 - Mission Crit 4</a></li>
					<li><a href="">2016 - Mission Crit 3</a></li>
					<li><a href="">2015 - Mission Crit 2</a></li>
					<li><a href="">2014 - Mission Crit 1</a></li>
				</ul>
				<li><a href="">Race Info</a></li>
				<li><a href="">Race Rules</a></li>
				<li><a href="">SHOP</a></li>
				<li><a href="">Sponsors</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="">Register</a></li>
				<li><a href="">Volunteer</a></li>
			</ul>
		</div>

  </div><!-- /.container -->
</header><!--/.header-->
