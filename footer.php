</main>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4">
        <h5>ABOUT US</h5>
        <ul class="footer-menu">
          <li><a href="#">About us</a></li>
          <li><a href="#">Training & Safety</a></li>
          <li><a href="#">Our Guides</a></li>
          <li><a href="#">Office Team</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3 col-md-4">
        <h5>USEFUL INFO</h5>
        <ul class="footer-menu">
          <li><a href="#">Pickup Locations</a></li>
          <li><a href="#">Terms of Payment</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Difficulty Levels</a></li>
          <li><a href="#">Where to Find Us</a></li>
        </ul>
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3 col-md-4">
        <h5>CONTACT US</h5>
        <address>
        GFXPARTNER INC.<br>
        30 Aarhus, Denmark<br>
        Phone: 123 456 7890<br>
        <a href="#">info@gfxpartner.com</a>
        </address>
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3">
        <h5>LANGUAGE & CURRENCY</h5>
        <div class="language dropdown selectdrop"> <a href="#" data-toggle="dropdown" class="selection">English <span>(United States)</span><span class="arrow"><i class="fa fa-angle-down"></i></span></a>
          <ul class="dropdown-menu">
            <li><a>Portugues <span>(Brazil)</span></a></li>
            <li><a>Spanish <span>(Mexican)</span></a></li>
            <li><a>French <span>(France)</span></a></li>
          </ul>
        </div>
        <!-- end language -->
        <div class="currency dropdown selectdrop"> <a href="#" data-toggle="dropdown" class="selection">USD<span class="arrow"><i class="fa fa-angle-down"></i></span></a>
          <ul class="dropdown-menu">
            <li><a>EUR</a></li>
            <li><a>TRY</a></li>
            <li><a>RUB</a></li>
          </ul>
        </div>
        <!-- end currency -->
      </div>
      <!-- end col-3 -->
      <div class="col-12">
        <ul class="social-media">
          <li><a href="#"><i class="fa fa-tripadvisor"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        </ul>
      </div>
      <!-- end col-12 -->
      <div class="col-12"> <span class="copyright">&copy; GFXPARTNER</span> </div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</footer>

<!-- JS FILES -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
	// PRELOADER
		(function($) {
			$(window).on("load", function(){
				$("body").addClass("page-loaded");
			});

      $(".datepicker__input").daterangepicker({
        autoUpdateInput: false,
        locale: {
          cancelLabel: 'Clear'
      }
      });

      $('.datepicker__input').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
      });

      $('.datepicker__input').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
      });


		})(jQuery)
</script>
<script src="<?php echo get_template_directory_uri();?>/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/scripts.js"></script>
</body>
</html>