<?php

/* Template Name: Race History

*/
get_header();  ?>

<div class="main">
  <div class="container">
    <?php if(have_rows('race_years')):
      while (have_rows('race_years')) : the_row();
        $racePoster = get_sub_field('race_poster');
        $raceTitle = get_sub_field('race_year_title');
      ?>
      <div class="individualRaces">
        <div class="racePoster">
          <img src='<?php echo $racePoster['url']; ?>'>
          <div class="raceTitle">
            <?php echo $raceTitle; ?>
          </div>

        </div>

      </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>

<?php
get_footer();

?>
