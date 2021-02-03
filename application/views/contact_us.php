<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header') ?>

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
					<h2 class="title">Contact</h2>
				</div> <!-- /.container -->
			</div> <!-- /.theme-inner-banner -->



			<!--
			=====================================================
				Conatact Us
			=====================================================
			-->
			<div class="section-spacing section-spacing-bottom">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 order-md-last">
							<div class="contact-address">
								<h6 class="title">Easy Contact</h6>
								<ul>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<h6>Email:</h6>
										<p>info@yoursite.com </p>
									</li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<h6>+88 (016) 567.890.11</h6>
										<p>Monday–Friday 9am-6pm</p>
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<h6>Address</h6>
										<p>51 Somestreet Cambridge, CB4 3AA, United Kingdom</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-8 col-md-6 order-md-first">
							<div class="google-map">
								<div class="map-canvas"></div>
							</div>
						</div>
					</div>

					<div class="row contact-form">
						<div class="col-lg-9 col-md-8">
							<form action="<?php echo base_url()?>Admin/message" method="post" class="form-validation" autocomplete="off">
								<h5 class="title">Get In Touch With Us</h5>
								<div class="row">
									<div class="col-md-6">
										<input type="text" placeholder="Your Name *" name="name">
									</div>
									<div class="col-md-6">
										<input type="email" placeholder="Your Email *" name="email">
									</div>
									<div class="col-12">
										<input type="text" placeholder="Website url" name="website_url">
									</div>
								</div>
								<textarea placeholder="Type your message" name="message"></textarea>
								<button>Submit Request</button>
							</form>
						</div>
						<div class="col-lg-3 col-md-4">
							<div class="contact-meta-data">
								<h6 class="title">Meta</h6>
								<ul>
									<li><a href="#">Log in</a></li>
									<li><a href="#">Entries RSS</a></li>
									<li><a href="#">Comments RSS</a></li>
									<li><a href="#">WordPress.org</a></li>
									<li><a href="#">Team</a></li>
								</ul>
							</div> <!-- /.contact-meta-data -->
						</div>
					</div>

					<!--Contact Form Validation Markup -->
					<!-- Contact alert -->
					<div class="alert-wrapper" id="alert-success">
						<div id="success">
							<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
							<div class="wrapper">
				               	<p>Your message was sent successfully.</p>
				             </div>
				        </div>
				    </div> <!-- End of .alert_wrapper -->
				    <div class="alert-wrapper" id="alert-error">
				        <div id="error">
				           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
				           	<div class="wrapper">
				               	<p>Sorry!Something Went Wrong.</p>
				            </div>
				        </div>
				    </div> <!-- End of .alert_wrapper -->
				</div>
			</div>
			
			




			<?php $this->load->view('footer'); ?>
			

	        

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
		<!-- isotop -->
		<script type="text/javascript" src="<?php echo base_url()?>asset/vendor/isotope.pkgd.min.js"></script>
		<!-- Validation -->
		<script type="text/javascript" src="<?php echo base_url()?>asset/vendor/contact-form/validate.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>asset/vendor/contact-form/jquery.form.js"></script>
		<!-- Google map js -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjQLCCbRKFhsr8BY78g2PQ0_bTyrm_YXU"></script>
		<script src="<?php echo base_url()?>asset/vendor/sanzzy-map/dist/snazzy-info-window.min.js"></script>

		<!-- Theme js -->
		<script src="<?php echo base_url()?>asset/js/theme.js"></script>
		<script src="<?php echo base_url()?>asset/js/map-script.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>

<!-- Mirrored from www.creativegigs.net/unify/Afiyana Star/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Sep 2020 12:23:20 GMT -->
</html>