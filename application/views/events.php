<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header')?>

	<body>
		<div class="top-header-section">
				<header class="theme-main-menu dark-color clearfix">
				  <?php $this->load->view('left_menu') ?>
				</header> 
			</div> 
			<div class="theme-inner-banner">
				<img src="<?php echo base_url()?>asset/images/shape/13.png" alt="" class="bg-shape">
				<img src="<?php echo base_url()?>asset/images/shape/14.png" alt="" class="shape-one">
				<img src="<?php echo base_url()?>asset/images/shape/15.png" alt="" class="shape-two">
				<img src="<?php echo base_url()?>asset/images/shape/16.png" alt="" class="shape-three">
				<div class="container">
					<h2 class="title">Our Events</h2>
				</div> <!-- /.container -->
			</div> <!-- /.theme-inner-banner -->



			<!--
			=====================================================
				Event Details
			=====================================================
			-->
			<div class="section-spacing">
				<div class="event-details">
					<div class="event-uppper-text">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 order-lg-last">
									<div class="text-wrapper">
										<img src="<?php echo base_url()?>asset/images/shape/25.png" alt="" class="shape-one">
										<div class="theme-title-one">
											<h2 class="main-title">Classical Odissi Friday performance </h2>
										</div> <!-- /.theme-title-one -->
										<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
										<div class="date">/  25 September 2018</div>
										<!-- <a href="<?php //echo base_url() ?>" class="button-one">View More</a> -->
										<div id="count" class="clearfix row"></div>
									</div> <!-- /.text-wrapper -->
								</div>
								<div class="col-lg-6 order-lg-first"><img src="<?php echo base_url()?>asset/images/shape/22.png" alt="" class="event-img"></div>
							</div>
						</div>
					</div> <!-- /.event-uppper-text -->
				</div> <!-- /.event-details -->
			</div>
			
			


			<!--
			=====================================================
				Our Event
			=====================================================
			-->
			<div class="section-spacing our-event">
				<div class="container">
					<div class="theme-title-one text-center">
						<h2 class="main-title">Our Most of The Popular <br>Events</h2>
					</div> <!-- /.theme-title-one -->
					<div class="main-wrapper">
						<img src="<?php echo base_url()?>asset/images/shape/23.png" alt="" class="shape">
	<div class="table-responsive event-table">
							<?php foreach ($events as $k) {
								?>
							  <table class="table">
								    <tr>
								    	
<td class="date"><?php $date = $k->st_time;echo date('Y-F-d', strtotime($date)); ?> </td>

								    	<td class="time">
								    		<?php 
								    	$date = $k->st_time;
								    	echo date('D H:i A', strtotime($date)); ?>-
								    	<?php 
								    	$date1 = $k->end_time;
								    	echo date('H:i A', strtotime($date1)); ?>
								    		
								    	</td>
								    	<td class="title"><?php echo $k->title ?></td>
								    	<td class="check-button"><a href="<?php echo base_url('Front/events_details/'.$k->id) ?>">Check Event</a></td>
								    </tr>
							  </table>
							<?php } ?>
						</div> <!-- /.event-table -->
						
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.section-spacing -->



			<!-- 
			=============================================
				Who Can Attend
			============================================== 
			-->
			<div class="section-spacing section-spacing-bottom">
				<div class="who-can-attend">
					<div class="container">
						<div class="row">
							<div class="col-lg-5">
								<div class="theme-title-one">
									<h2 class="main-title">Who can attend?</h2>
								</div> <!-- /.theme-title-one -->
								<a data-fancybox="" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-video fancybox"> <span class="flaticon-003-play-button"></span></a>
							</div>
							<div class="col-lg-7">
								<div class="text">
									<p>Our mission is to INSPIRE each individual and instill an appreciation and love for the beautiful art of DANCE as well as the joy of PERFORMANCE. Voted ‘Best of Clark County 2016’ and CONVENIENTLY located in Salmon Creek, </p>
									<p>Dance Fusion SPECIALIZES in Ballet, Tap, Jazz, Contemporary, Hip Hop, Lyrical, Theater, Acro and Fitness for ages 3 to ageless!</p>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- /.who-can-attend -->
			</div>


		

<?php $this->load->view('footer', FALSE); ?>
	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="<?php echo base_url()?>asset/vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="<?php echo base_url()?>asset/vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo base_url()?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Camera Slider -->
		<script src='<?php echo base_url()?>asset/vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
	    <script src='<?php echo base_url()?>asset/vendor/Camera-master/scripts/jquery.easing.1.3.js'></script> 
	    <script src='<?php echo base_url()?>asset/vendor/Camera-master/scripts/camera.min.js'></script>
	    <!-- menu  -->
		<script src="<?php echo base_url()?>asset/vendor/menu/src/js/jquery.slimmenu.js"></script>
		<!-- AOS js -->
		<script src="<?php echo base_url()?>asset/vendor/aos-next/dist/aos.js"></script>
		<!-- owl.carousel -->
		<script src="<?php echo base_url()?>asset/vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script src="<?php echo base_url()?>asset/vendor/jquery.appear.js"></script>
		<script src="<?php echo base_url()?>asset/vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="<?php echo base_url()?>asset/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- js countdown -->
		<script type="text/javascript" src="<?php echo base_url()?>asset/vendor/countdown-2.2.0/jquery.countdown.min.js"></script>

		<!-- Theme js -->
		<script src="<?php echo base_url()?>asset/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
<script>
	  var countTo= $("#count");
            if(countTo.length) {
              countTo.countdown('<?php $date = $k->date;
								    	echo date('Y-m-d', strtotime($date));  ?>', function(event) {
                var $this = $(this).html(event.strftime(''
                  + '<div class="col-3"><div class="wrapper"><span>days%!d</span> <h3>%D</h3> </div></div> '
                  + '<div class="col-3"><div class="wrapper"><span>Hours</span> <h3>%H</h3> </div></div> '
                  + '<div class="col-3"><div class="wrapper"><span>Minutes</span> <h3>%M</h3> </div></div>'
                  + '<div class="col-3"><div class="wrapper"><span>Seconds</span> <h3>%S</h3> </div></div>'));
              });
            }
            var countTo= $("#count1");
            if(countTo.length) {
              countTo.countdown('<?php $date = $k->date;
								    	echo date('Y-m-d', strtotime($date));  ?>', function(event) {
                var $this = $(this).html(event.strftime(''
                  + '<div class="col-3"><div class="wrapper"><span>days%!d</span> <h3>%D</h3> </div></div> '
                  + '<div class="col-3"><div class="wrapper"><span>Hours</span> <h3>%H</h3> </div></div> '
                  + '<div class="col-3"><div class="wrapper"><span>Minutes</span> <h3>%M</h3> </div></div>'
                  + '<div class="col-3"><div class="wrapper"><span>Seconds</span> <h3>%S</h3> </div></div>'));
              });
            }
</script>