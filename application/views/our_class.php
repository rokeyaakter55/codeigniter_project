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
				<img src="<?php echo base_url()?>asset/images/shape/13.png" alt="" class="bg-shape">
				<img src="<?php echo base_url()?>asset/images/shape/14.png" alt="" class="shape-one">
				<img src="<?php echo base_url()?>asset/images/shape/15.png" alt="" class="shape-two">
				<img src="<?php echo base_url()?>asset/images/shape/16.png" alt="" class="shape-three">
				<div class="container">
					<h2 class="title">Our Class</h2>
				</div> <!-- /.container -->
			</div> <!-- /.theme-inner-banner -->
			
			


			<!--
			=====================================================
				Our Classes
			=====================================================
			-->
			<div class="section-spacing our-classes">
				<div class="main-container">
					<div class="row">
						<?php foreach ($classes as $k ) { ?>
							
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="single-block">
								<div class="img-box"><img src="<?php echo base_url('uploads/'.$k->photo)?>" alt=""></div>
								<div class="text">
									<ul class="clearfix">
										<li><i class="fa fa-calendar" aria-hidden="true"></i> October 20, 2018</li>
										<li><i class="fa fa-clock-o" aria-hidden="true"></i> 4:30 pm -7:30Pm </li>
									</ul>
									<h6><?php echo $k->title ?></a></h6>
									<p><?php echo $k->details ?> </p>
									<a href="<?php echo base_url('Front/class_details/'.$k->id) ?>" class="theme-button-two">Explore more <span></span></a>
								</div>
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<?php } ?>
					</div> <!-- /.row -->
				</div> <!-- /.main-container -->
			</div> <!-- /.our-classes -->


			


			<!-- 
			=============================================
				Who Can Attend
			============================================== 
			-->
			<div class="section-spacing">
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




			<!-- 
			=============================================
				Our feature One
			============================================== 
			-->
			<div class="section-spacing section-spacing-bottom our-feature-one">
				<img src="<?php echo base_url()?>asset/images/shape/1.png" alt="" class="shape">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="theme-title-one">
								<h6 class="upper-title">OUTSTANDING performance </h6>
								<h2 class="main-title">Afiyana Star Academy offers quality dance instruction done with care</h2>
							</div> <!-- /.theme-title-one -->
							<a href="#" class="theme-button-one button--tamaya color-one" data-text="Learn More"><span>Learn More</span></a>
						</div> <!-- /.col- -->
						<div class="col-lg-6">
							<div class="single-block" data-aos="fade-up" data-aos-delay="150">
								<h6>Pre-Ballet </h6>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.</p>
							</div>
							<div class="single-block" data-aos="fade-up" data-aos-delay="250">
								<h6>Musical Theatre</h6>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.our-feature-one -->




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