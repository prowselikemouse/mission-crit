<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>

          
          <?php

          $image = get_field('race_poster');
          $size = 'full'; // (thumbnail, medium, large, full or custom size)

          if( $image ) {

	           echo wp_get_attachment_image( $image, $size );

           }

           ?>
          <h3>Race Report</h3>
          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->
        </div><!-- #post-## -->

        <div class='raceResults'>
          <h1>2017 Race Results</h1>
          <div class='raceTables'>

          <div class='resultsWomen'>
            <h3>Women</h3>
            <?php if(have_rows('women')):
              while (have_rows('women')) : the_row();
                $rank = get_sub_field('rank');
                $name = get_sub_field('name');
                $team = get_sub_field('team');
                $country = get_sub_field('country');

              ?>
              <table>
                <tr>
                  <td>
                    <?php echo $rank; ?>
                  </td>
                  <td>
                    <?php echo $name; ?>
                  </td>
                  <td>
                    <?php echo $team; ?>
                  </td>
                  <td>
                    <?php echo $country; ?>
                  </td>
                </tr>
              </table>
            <?php endwhile; ?>
            <?php endif; ?>
            <button>View Full Women's Race Results</button>
          </div>

          <div class='resultsMen'>
            <h3>Men</h3>
            <?php if(have_rows('men')):
              while (have_rows('men')) : the_row();
                $rank = get_sub_field('rank');
                $name = get_sub_field('name');
                $team = get_sub_field('team');
                $country = get_sub_field('country');

              ?>

              <table>
                <tr>
                  <td>
                    <?php echo $rank; ?>
                  </td>
                  <td>
                    <?php echo $name; ?>
                  </td>
                  <td>
                    <?php echo $team; ?>
                  </td>
                  <td>
                    <?php echo $country; ?>
                  </td>
                </tr>
              </table>
            <?php endwhile; ?>
            <?php endif; ?>
            <button>View Full Men's Race Results</button>
          </div>
        </div>
        </div>

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->



      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
