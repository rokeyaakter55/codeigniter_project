<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('header'); ?>

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
				<img src="<?php  echo base_url() ?>asset/images/shape/13.png" alt="" class="bg-shape">
				<img src="<?php  echo base_url() ?>asset/images/shape/14.png" alt="" class="shape-one">
				<img src="<?php  echo base_url() ?>asset/images/shape/15.png" alt="" class="shape-two">
				<img src="<?php  echo base_url() ?>asset/images/shape/16.png" alt="" class="shape-three">
				<div class="container">
					<h2 class="title">Faq</h2>
				</div> <!-- /.container -->
			</div> <!-- /.theme-inner-banner -->



			<!--
			=====================================================
				FAQ Section
			=====================================================
			-->
			<div class="section-spacing section-spacing-bottom faq-section">
				<div class="container">
					<div class="theme-title-one text-center">
						<h2 class="main-title">frequently asked question</h2>
					</div> <!-- /.theme-title-one -->

					<div class="row">
						<div class="col-lg-6">
							<div class="title">Do I need a web hosting account?</div>
							<p>No. All Afiyana Star plans include secure, unlimited hosting for your digital content. Site uses the best servers and networks to ensure your site is reliable and fast.</p>
							<div class="title">Are there any transaction fees?</div>
							<p>When you sell your products using the built-in payments in Kajabi, we don’t charge you a transaction fee. You can keep all the money you charge for your products aside from the standard Stripe merchant processing fee of 2.9% + 30 cents per transaction.</p>
							<div class="title">What happens if I want to cancel?</div>
							<p>If you ever decide that Name site isn’t the best digital content platform for your business, you can easily cancel your account.</p>
						</div>
						<div class="col-lg-6">
							<div class="title">Can I use my own domain?</div>
							<p>Yes. Your site can use an existing domain name that you own and we also provide a free mogh.com domain name.</p>
							<div class="title">Can I change my plan later on?</div>
							<p>Absolutely. You can upgrade or downgrade your plan at any time.</p>
							<div class="title">Is there a money back guarantee?</div>
							<p>Yes! If you cancel your account within the first 30 days, and you would like a refund, please let us know and we’ll happily issue you a refund.</p>
						</div>
					</div>
				</div>
			</div>
			
			


		


		<?php $this->load->view('footer') ?>

	        

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