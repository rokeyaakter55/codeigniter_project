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
			<div class="section-spacing section-spacing-bottom">
				<div class="portfolio-section">
					<div class="container">
						<div class="theme-title-one text-center">
							<h2 class="main-title">We’ve done lot’s of work, Let’s Check <br>some from here</h2>
						</div> <!-- /.theme-title-one -->

						<ul class="isotop-menu-wrapper">
							<li class="is-checked" data-filter="*">All Work</li>
							<li data-filter=".creative">Creative Movement</li>
							<li data-filter=".ballet">Ballet</li>
							<li data-filter=".tap">Tap</li>
							<li data-filter=".jazz">Jazz</li>
							<li data-filter=".hiphop">Hip-Hop</li>
						</ul>


						<div id="isotop-gallery-wrapper" class="row">
							<div class="grid-sizer"></div>
							<div class="isotop-item ballet creative">
								<div class="single-item">
									<img src="<?php echo base_url()?>asset/images/portfolio/1.jpg" alt="Image">
									<div class="hover-content">
										<div>
											<h3>Musical Theatre</h3>
											<p>Dance / Music</p>
										</div>
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-item -->
							</div> <!-- /.isotop-item -->
							<div class="isotop-item tap jazz ballet">
								<div class="single-item">
									<img src="<?php echo base_url()?>asset/images/portfolio/2.jpg" alt="Image">
									<div class="hover-content">
										<div>
											<h3>Musical Theatre</h3>
											<p>Dance / Music</p>
										</div>
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-item -->
							</div> <!-- /.isotop-item -->
							<div class="isotop-item tap jazz hiphop">
								<div class="single-item">
									<img src="<?php echo base_url()?>asset/images/portfolio/3.jpg" alt="Image">
									<div class="hover-content">
										<div>
											<h3>Musical Theatre</h3>
											<p>Dance / Music</p>
										</div>
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-item -->
							</div> <!-- /.isotop-item -->
							<div class="isotop-item ballet jazz">
								<div class="single-item">
									<img src="<?php echo base_url()?>asset/images/portfolio/4.jpg" alt="Image">
									<div class="hover-content">
										<div>
											<h3>Musical Theatre</h3>
											<p>Dance / Music</p>
										</div>
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-item -->
							</div> <!-- /.isotop-item -->
							<div class="isotop-item ballet jazz tap">
								<div class="single-item">
									<img src="<?php echo base_url()?>asset/images/portfolio/6.jpg" alt="Image">
									<div class="hover-content">
										<div>
											<h3>Musical Theatre</h3>
											<p>Dance / Music</p>
										</div>
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-item -->
							</div> <!-- /.isotop-item -->
							<div class="isotop-item  creative hiphop">
								<div class="single-item">
									<img src="<?php echo base_url()?>asset/images/portfolio/5.jpg" alt="Image">
									<div class="hover-content">
										<div>
											<h3>Musical Theatre</h3>
											<p>Dance / Music</p>
										</div>
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-item -->
							</div> <!-- /.isotop-item -->
							<div class="isotop-item full-column creative hiphop">
								<div class="single-item">
									<img src="<?php echo base_url()?>asset/images/portfolio/7.jpg" alt="Image">
									<div class="hover-content">
										<div>
											<h3>Musical Theatre</h3>
											<p>Dance / Music</p>
										</div>
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-item -->
							</div> <!-- /.isotop-item -->
						</div> <!-- /#isotop-gallery-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.portfolio-section -->
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
		<!-- isotop -->
		<script type="text/javascript" src="<?php echo base_url()?>asset/vendor/isotope.pkgd.min.js"></script>

		<!-- Theme js -->
		<script src="<?php echo base_url()?>asset/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>