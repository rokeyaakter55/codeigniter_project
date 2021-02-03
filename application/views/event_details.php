<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header'); ?>


	<body>
		<div class="main-page-wrapper">

			
		
			<?php $this->load->view('left_menu'); ?>
			<div class="theme-inner-banner">
				<img src="<?php echo base_url() ?>asset/images/shape/13.png" alt="" class="bg-shape">
				<img src="<?php echo base_url() ?>asset/images/shape/14.png" alt="" class="shape-one">
				<img src="<?php echo base_url() ?>asset/images/shape/15.png" alt="" class="shape-two">
				<img src="<?php echo base_url() ?>asset/images/shape/16.png" alt="" class="shape-three">
				<div class="container">
					<h2 class="title">Event details</h2>
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
										<img src="<?php echo base_url() ?>asset/images/shape/25.png" alt="" class="shape-one">
										<div class="theme-title-one">
											<h2 class="main-title"><?php echo $events->title ?> </h2>
										</div> <!-- /.theme-title-one -->
										<p><?php echo $events->details ?></p>
										<a href="#" class="button-one">Free</a>
									</div> <!-- /.text-wrapper -->
								</div>
								<div class="col-lg-6 order-lg-first"><img src="<?php echo base_url('uploads/'.$events->photo) ?>" alt="" class="event-img"></div>
							</div>

							<div class="row event-bottom-data">
								<div class="col-md-6">
									<div class="details-box">
										<h6 class="box-title">Event Details</h6>
										<table>
											<tr>
												<td>Start:</td>
												<td><?php echo $events->start_time; ?></td>
											</tr>
											<tr>
												<td>End:</td>
												<td><?php echo $events->end_time; ?></td>
											</tr>
											<tr class="color-fix">
												<td>Cost:</td>
												<td>Free</td>
											</tr>
											<tr class="color-fix">
												<td>Category :</td>
												<td><?php echo $events->category; ?></td>
											</tr>
										</table>
									</div> <!-- /.details-box -->
								</div>
								<div class="col-md-6">
									<div class="details-box">
										<h6 class="box-title">Event Details</h6>
										<table>
											<tr>
												<td>Address:</td>
												<td><?php echo $events->address; ?></td>
											</tr>
											<tr class="color-fix">
												<td>Venue:</td>
												<td><?php echo $events->venue; ?></td>
											</tr>
											<tr class="color-fix">
												<td>Link:</td>
												<td>http://envato.com</td>
											</tr>
										</table>
									</div> <!-- /.details-box -->
								</div>

								<div class="col-12">
									<div class="row no-gutters details-box">
										<div class="col-lg-5">
											<div class="clearfix">
												<h6 class="box-title">ORGANIZER</h6>
												<table>
													<tr>
														<td>Name:</td>
														<td><?php echo $events->organizer_name; ?></td>
													</tr>
													<tr>
														<td>Tainer:</td>
														<td><?php echo $events->organizer_trainer; ?></td>
													</tr>
													<tr class="color-fix">
														<td>Phone:</td>
														<td><?php echo $events->organizer_phone; ?></td>
													</tr>
													<tr class="color-fix">
														<td>Email :</td>
														<td><?php echo $events->organizer_email; ?></td>
													</tr>
												</table>
											</div> <!-- /.clearfix -->
										</div>
										<div class="col-lg-7"><img src="<?php echo base_url() ?>asset/images/shape/map.png" alt="" class="map"></div>
									</div>
								</div>
							</div> <!-- /.event-bottom-data -->
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
						<h2 class="main-title">Related Events</h2>
					</div> <!-- /.theme-title-one -->
					<div class="main-wrapper">
						<img src="images/shape/23.png" alt="" class="shape">
						<div class="table-responsive event-table">
							  <table class="table">
								    <tr>
								    	<td class="date">21 September 2018 </td>
								    	<td class="time">Sunday at 4:00 pm - 8:30 pm</td>
								    	<td class="title">Renowned Dance Masters</td>
								    	<td class="check-button"><a href="#">Check Event</a></td>
								    </tr>
							  </table>
						</div> <!-- /.event-table -->
						<div class="table-responsive event-table">
							  <table class="table">
								    <tr>
								    	<td class="date">21 September 2018 </td>
								    	<td class="time">Sunday at 4:00 pm - 8:30 pm</td>
								    	<td class="title">DFW for graduate earnings vs cost</td>
								    	<td class="check-button"><a href="#">Check Event</a></td>
								    </tr>
							  </table>
						</div> <!-- /.event-table -->
						<div class="table-responsive event-table">
							  <table class="table">
								    <tr>
								    	<td class="date">23 September 2018 </td>
								    	<td class="time">Sunday at 4:00 pm - 8:30 pm</td>
								    	<td class="title">Texas Woman’s is a public university </td>
								    	<td class="check-button"><a href="#">Check Event</a></td>
								    </tr>
							  </table>
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


		


			<?php $this->load->view('footer');?>
			

	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="<?php echo base_url() ?>asset/vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="<?php echo base_url() ?>asset/vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo base_url() ?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Camera Slider -->
		<script src='<?php echo base_url() ?>asset/vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
	    <script src='<?php echo base_url() ?>asset/vendor/Camera-master/scripts/jquery.easing.1.3.js'></script> 
	    <script src='<?php echo base_url() ?>asset/vendor/Camera-master/scripts/camera.min.js'></script>
	    <!-- menu  -->
		<script src="<?php echo base_url() ?>asset/vendor/menu/src/js/jquery.slimmenu.js"></script>
		<!-- AOS js -->
		<script src="<?php echo base_url() ?>asset/vendor/aos-next/dist/aos.js"></script>
		<!-- owl.carousel -->
		<script src="<?php echo base_url() ?>asset/vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script src="<?php echo base_url() ?>asset/vendor/jquery.appear.js"></script>
		<script src="<?php echo base_url() ?>asset/vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="<?php echo base_url() ?>asset/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- js countdown -->
		<script type="text/javascript" src="<?php echo base_url() ?>asset/vendor/countdown-2.2.0/jquery.countdown.min.js"></script>

		<!-- Theme js -->
		<script src="<?php echo base_url() ?>asset/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>