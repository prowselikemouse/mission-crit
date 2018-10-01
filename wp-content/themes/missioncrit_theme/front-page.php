<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      	The Front PAge
      	<img src="<?php echo hackeryou_featured_image_url($post) ?>">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <div class="race-results">
	        <p><?php the_field('race_results_title'); ?></p>
        	<div class="race-results-01">
        		<p><?php the_field('race_one'); ?></p>
        	</div>
        </div>


      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>