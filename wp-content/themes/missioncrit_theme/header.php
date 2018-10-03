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
	    <h1>
	      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
	        <?php bloginfo( 'name' ); ?>
	      </a>
	    </h1>
		</div>

		<div class='hamNav'>
			HAMNAV
			<ul>
				<li>Home</li>
				<li>History</li>
				<ul>
					<li>2018 - Mission Crit 5</li>
					<li>2017 - Mission Crit 4</li>
					<li>2016 - Mission Crit 3</li>
					<li>2015 - Mission Crit 2</li>
					<li>2014 - Mission Crit 1</li>
				</ul>
				<li>Race Info</li>
				<li>Race Rules</li>
				<li>SHOP</li>
				<li>Sponsors</li>
				<li>Contact</li>
				<li>Register</li>
				<li>Volunteer</li>
			</ul>
		</div>

  </div><!-- /.container -->
</header><!--/.header-->
