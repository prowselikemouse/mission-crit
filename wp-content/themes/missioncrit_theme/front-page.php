<?php get_header();  ?>

<div class="main">
  <div class="container">

    <!-- Hero -->
    <div class='hero'>
      <h1>REGISTRATION OPENS 3/5</h1>
      *social media links*
      <button>red button</button>
    </div>

    <!-- About  -->
    <div class='about'>
      <div class='aboutText'>
        <h3>about</h3>
        <p>
          Mission Crit is an unsanctioned bicycle criterium held on a short, technical circuit in the Mission District of San Francisco. It is the first race of its kind to win approval from the City of San Francisco. The race pits elite road racers, track cyclists, and bicycle messengers against each other on fixed-gear track bicycles in a fast-paced, high-adrenaline competition.
        </p>
        <a href='#'>VIEW RACE HISTORY ></a>
      </div>
    </div>

    <!-- Instagram Content -->
    <div class='instagram'>
      <div class='image1'>
        INSTA IMAGE ONE
      </div>
      <div class='image2'>
        INSTA IMAGE TWO
      </div>
      <div class='image3'>
        INSTA IMAGE THREE
      </div>
    </div>
    <div class='instagramLink'>
      <a href='#'>FOLLOW US ON INSTAGRAM ></a>
    </div>

    <!-- Race Results -->
    <div class='raceResults'>
      <h1>2017 Race Results</h1>
      <div class='resultsWomen'>
        <h3>women</h3>
        <table>
          <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Team</th>
            <th>Country</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Jane Doe</td>
            <td>SF Fixed</td>
            <td>icon</td>
          </tr>
        </table>
      </div>

      <div class='resultsMen'>
        <h3>men</h3>
        <table>
          <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Team</th>
            <th>Country</th>
          </tr>
          <tr>
            <td>1</td>
            <td>John Deer</td>
            <td>Sunset Cyclers</td>
            <td>icon</td>
          </tr>
        </table>
      </div>
    </div>

    <!-- Sponsers -->
    <div class='sponsors'>
      <h1>SPONSORS</h1>
      Sponsor logo/link, repeated
    </div>

    <!-- Contact -->
    <div class='contact'>
      <h1>CONTACT</h1>
      <form>
        <input type="text" placeholder="NAME" />
        <input type="text" placeholder="EMAIL" />
        <input type="text" placeholder="MESSAGE" />
        <button>Submit</button>
      </form>
      <div class='sponsorsContact'>
        <h3> SPONSOR</h3>
        <p>Wanna help blow up our shit? Email us at</p>
        <a href='mailTo'>sponsors@missioncrit.com</a>
      </div>
      <div class='volunteerContact'>
        <h3>VOLUNTEER</h3>
        <p>
          Want to show your appreciation by donating labor or advice? Let us know how you can help or email us directly at <a href="mailTo">volunteer@missioncrit.com</a>
        </p>
      </div>
      <div class='mainlingList'>
        <p>
          Sign up for the mailing list to get updates abou tthe race/rad bike stuff/etc.
        </p>
        <input type="email" placeholder="MAILING LIST" /><button>Sign Up</button>
      </div>
    </div>
    <div class="content">


      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <div class="race-results">
	        <p><?php the_field('race_results_title'); ?></p>
        	<div class="race-results-01">
        		<p><?php the_field('race_one'); ?></p>
        	</div>
        </div>


      <?php endwhile; // end the loop?>
    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php
get_footer();

?>
