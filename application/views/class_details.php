<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header', FALSE); ?>
	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader">
					<span class="loader-inner"></span>
				</div>
			</div>
<div class="top-header-section">
				<header class="theme-main-menu dark-color clearfix">
				  <?php $this->load->view('left_menu') ?>
				</header> 
			</div> 
			<div class="theme-inner-banner">
				<img src="<?php echo base_url() ?>asset/images/shape/13.png" alt="" class="bg-shape">
				<img src="<?php echo base_url() ?>asset/images/shape/14.png" alt="" class="shape-one">
				<img src="<?php echo base_url() ?>asset/images/shape/15.png" alt="" class="shape-two">
				<img src="<?php echo base_url() ?>asset/images/shape/16.png" alt="" class="shape-three">
				<div class="container">
					<h2 class="title"><?php echo $classes->title ?></h2>
				</div> <!-- /.container -->
			</div> <!-- /.theme-inner-banner -->
			
			


			<!--
			=====================================================
				Class Details
			=====================================================
			-->
			<div class="section-spacing section-spacing-bottom our-class-details">
				<div class="container">
					<img src="<?php echo base_url('uploads/'.$classes->photo) ?>" height="700" width="800" alt="" class="main-img">
					<h2 class="title"><?php echo $class_details->content_title?></h2>
					<p><?php echo $class_details->content_details_1?></p>
					<div class="row img-gallery">
						<div class="col-md-6"><img src="<?php echo base_url() ?>asset/images/class/10.jpg" alt=""></div>
						<div class="col-md-6"><img src="<?php echo base_url() ?>asset/images/class/11.jpg" alt=""></div>
					</div>
					<div class="row">
						<div class="col-lg-7 col-md-6">
							<h6 class="sub-title"><?php echo $class_details->content_details_2?></p>
							<div class="who-can-attend">
								<div class="theme-title-one">
									<h2 class="main-title">Class attend video?</h2>
								</div> <!-- /.theme-title-one -->
								<a data-fancybox="" href="<?php echo $class_details->video_link?>" class="play-video fancybox"> <span class="flaticon-003-play-button"></span></a>
							</div>
						</div>
						<div class="col-lg-5 col-md-6"><img src="<?php echo base_url() ?>asset/images/class/12.jpg" alt=""></div>
					</div>

					<div class="class-schedule">
						<div class="row">
							<?php foreach ($class_schedule as $k) {
								 ?>
							<div class="col-md-6">

								<div class="schedule-table clearfix">
									<div class="date">
										<strong><?php
									$date=date_create($k->date);
								echo date_format($date,"d");
									?></strong>
										<span class="month"><?php
									$date=date_create($k->date);
								echo date_format($date,"F");
									?></span>
									</div> <!-- /.date -->
									<div class="info">
										<div class="duration"><?php echo $k->duration ?></div>
										<h6 class="class-ttile"><a href="#"><?php echo $k->task ?></a></h6>
										<div class="time"><?php echo $k->time.' ' .$k->trainer ?></div>
									</div> <!-- /.info -->
								</div> <!-- /.schedule-table -->
								
								
							
							</div>
						<?php } ?>
							
						</div>
					</div>

					<div class="class-banner">
						<i class="flaticon-005-gymnast icon"></i>
						<img src="<?php echo base_url() ?>asset/images/shape/21.png" alt="" class="shape">
						<h2>You will love coming to our dance class...</h2>
						<a href="<?php echo base_url('Front/class_booking') ?>" class="schedul-button">Schedule Class</a>
					</div> <!-- /.class-banner -->
				</div>
			</div> <!-- /.our-class-details -->

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

		<!-- Theme js -->
		<script src="<?php echo base_url()?>asset/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>