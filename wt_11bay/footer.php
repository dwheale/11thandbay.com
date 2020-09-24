<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wt_11bay
 */

$sunday_hours = get_field('sunday_hours');
$monday_hours = get_field('monday_hours');
$tuesday_hours = get_field('tuesday_hours');
$wednesday_hours = get_field('wednesday_hours');
$thursday_hours = get_field('thursday_hours');
$friday_hours = get_field('friday_hours');
$saturday_hours = get_field('saturday_hours');

?>

<?php wp_footer(); ?>

<footer>
    <div class="container footer-card text-center">
      <p>Stay in the know! Sign Up for our newsletter!</p>
      <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#subscribe-modal">SIGN UP</button>
      <br>
      <img class="horizontal-line" src="<?php bloginfo('template_directory') ?>/assets/img/menu_line_horizontal.png" alt="">
      <br>
      <p>Treat your friends or family to a special dinner at 11th and Bay!</p>
      <a href="http://11thandbay.cardfoundry.com" class="btn btn-outline-secondary">GIFT CARDS</a>
    </div>
    <!-- /.footer-card -->
    <div class="sitemap col-12 text-center">
      <div class="row-md">
        <ul>
          <li>
            <a href="/about">ABOUT</a>
          </li> |
          <li>
            <a href="/menu">MENU</a>
          </li> |
          <li>
            <a href="/visit">VISIT</a>
          </li> |
          <li>
            <a href="/employment">EMPLOYMENT</a>
          </li>
        </ul>
      </div>
      <!-- /.row-md -->
    </div>
    <div class="social-icons text-center">
      <div class="row-md">
        <ul>
          <li>
            <a href="https://facebook.com/11thandbay" class="badge social facebook">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/11thandbay" class="badge social twitter">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li>
            <a href="https://instagram.com/11thandbay" class="badge social instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="https://www.tripadvisor.com/Restaurant_Review-g34859-d7256936-Reviews-11th_and_Bay_Southern_Table-Columbus_Georgia.html"
              class="badge social tripadvisor">
              <i class="fa fa-tripadvisor"></i>
            </a>
          </li>
        </ul>
        <p>
          <a href="https://goo.gl/maps/CYqDvHBsbD42">1050 Bay Avenue, Columbus, GA 31901</a> |
          <a href="tel:7069400202">706-940-0202</a> |
          <a href="mailto:info@11thandbay.com">info@11thandbay.com</a>
        </p>
      </div>
      <!-- /.row-md -->
    </div>
    <div class="footer-info text-center">
      <p>
        <a href="/privacy-policy">Privacy Policy</a> | Copyright &copy; <?php echo date("Y"); ?> 11th and Bay Ventures, Inc. All Rights Reserved.
      </p>

      <p>Powered by Whealetech, LLC</p>
    </div>
  </footer>

  <!-- HOURS MODAL
	================================================== -->
  <div id="hours-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>
          <!-- /.close -->
          <div class="container wt-modal-body">
            <h4 class="text-center">
              Our Hours
            </h4>
            <!-- /.text-center -->
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
            </p>
            <!-- /.text-center -->
          </div>
          <!-- /.container -->
        </div>
        <!-- /.modal-body -->
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <!-- PRIVACY POLICY MODAL
	================================================== -->
  <div class="modal fade" id="subscribe-modal" tabindex="-1" aria-labelledby="Subscribe Modal" aria-hidden="true" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title" id="subscribe-modal">
            <i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>

        </div>
        <!-- modal-header -->

        <div class="modal-body">
          <p>Find out when all the fun is happening. Be the first to see our latest events</p>

          <form method="post" action="https://11thandbay.com/?na=s" onsubmit="return newsletter_check(this)" class="form-inline" role="form">
            <div class="form-group">
              <label class="sr-only" for="subscribe-name">Your name</label>
              <input type="text" name="nn" class="form-control" id="subscribe-name" placeholder="Your name">
            </div>
            <div class="form-group">
              <label class="sr-only" for="subscribe-email">and your email</label>
              <input type="text" name="ne" class="form-control" id="subscribe-email" placeholder="and your email">
            </div>
            <input type="submit" class="btn btn-outline-secondary" value="Subscribe!">
          </form>

          <hr>

          <p>
            <small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. No Spam. Just
              good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small>
          </p>
        </div>
        <!-- modal-body -->

      </div>
      <!-- modal-content -->
    </div>
    <!-- modal-dialog -->
  </div>
  <!-- /#privay-modal.modal fade -->

</body>

<!-- SCRIPT FILES
  ================================================================ -->
<!-- Placed at the end of the document so that pages load faster -->
<script src="<?php bloginfo('template_directory') ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/main.js"></script>

</html>