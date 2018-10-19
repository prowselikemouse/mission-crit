<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>
        </div>

        <div class='mainContent'>

            <div class='racePoster'>

               <?php if( get_field('race_poster') ): ?>

	                <img class='racePoster' src="<?php the_field('race_poster'); ?>" />

                <?php endif; ?>
             </div>


             <div class="entry-content">
               <p class='entryContent'>
                 <?php the_content(); ?>
                 <?php wp_link_pages(array(
                   'before' => '<div class="page-link"> Pages: ',
                   'after' => '</div>'
                 )); ?>

               </p>

           </div><!-- .entry-content -->
         </div>


        <div class='raceResults'>
          <h1> Race Results</h1>
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
            <button>Women's 2017 Final Results</button>
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
            <button>Men's 2017 Final Results</button>
          </div>
          </div>
        </div>
        </div><!-- #post-## -->




      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
