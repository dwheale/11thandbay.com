<?php
/**
 * The template for displaying the restaurant menu
 * Template Name: Visit Page
 *
 * @package wt_11bay
 */

$reservation_request = get_field('reservation_request');
$visit_image = get_field('visit_image');
$reservation_request_form = get_field('reservation_request_form');
$sunday_hours = get_field('sunday_hours');
$monday_hours = get_field('monday_hours');
$tuesday_hours = get_field('tuesday_hours');
$wednesday_hours = get_field('wednesday_hours');
$thursday_hours = get_field('thursday_hours');
$friday_hours = get_field('friday_hours');
$saturday_hours = get_field('saturday_hours');


get_header();
?>

  <section id="visit-intro" data-type="background" data-speed="2">
	  
      <article>
		  <div class="parallax-container">
        <h2 class="parallax-title"><?php single_post_title(); ?></h2><!-- /.parallax-title -->
			  
			  </div>
      </article>
	  
  </section><!-- /#visit-intro -->

  <section id="reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center">
          <?php if(!empty($reservation_request)) :  ?>
            <?php echo $reservation_request ?>
          <?php endif; ?>
          <div class="narrow-image">
          <?php if(!empty($visit_image)) :  ?>
            <img class="narrow-image" src="<?php echo $visit_image['url'] ?>" alt="<?php echo $visit_image['alt'] ?>">
          <?php endif; ?>
            
          </div><!-- /.narrow-image -->
          <a href="/menu" class="btn btn-outline-secondary"> VIEW OUR MENU</a>
        </div><!-- /.col-md-6 -->
        <div class="col-md-6">
          <div class="row reservation-form-container">
            <?php if(!empty($reservation_request_form)) :  ?>
              <?php echo do_shortcode($reservation_request_form); ?>
            <?php endif; ?>
          </div><!-- /.row -->
        </div><!-- /.col-md-6 -->
      </div><!-- /.row -->
      <div class="row">
        <div class="col-md-6">
          <h2 class="text-center">Hours</h2>
          <p class="text-center">
              <div class="tg-wrap">
                <table class="tg">
                  <tr>
                    <td class="tg-dvpl">Sunday</td>
                    <td class="tg-us36"><?php echo $sunday_hours ?></td>
                  </tr>
                  <tr>
                    <td class="tg-dvpl">Monday</td>
                    <td class="tg-us36"><?php echo $monday_hours ?></td>
                  </tr>
                  <tr>
                    <td class="tg-dvpl">Tuesday</td>
                    <td class="tg-us36"><?php echo $tuesday_hours ?></td>
                  </tr>
                  <tr>
                    <td class="tg-dvpl">Wednesday</td>
                    <td class="tg-us36"><?php echo $wednesday_hours ?></td>
                  </tr>
                  <tr>
                    <td class="tg-dvpl">Thursday</td>
                    <td class="tg-us36"><?php echo $thursday_hours ?></td>
                  </tr>
                  <tr>
                    <td class="tg-dvpl">Friday</td>
                    <td class="tg-us36"><?php echo $friday_hours ?></td>
                  </tr>
                  <tr>
                    <td class="tg-dvpl">Saturday</td>
                    <td class="tg-us36"><?php echo $saturday_hours ?></td>
                  </tr>
                </table>
              </div>
        </div><!-- /.col-6 -->
        <div class="col-6">
          <h2 class="text-center">Location</h2><!-- /.text-center -->
          <p class="text-center"><a href="https://goo.gl/maps/CYqDvHBsbD42">1050 Bay Avenue, Columbus, GA 31901</a></p>
          <iframe width="600" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJBc-th7vNjIgRadenNJWFLEQ&key=AIzaSyC2Gk_BJTfR-fZIpKQvGA6ZYA0tKtJMY0Y
" allowfullscreen></iframe>
        </div><!-- /.col-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section>

<?php
get_footer();
?>