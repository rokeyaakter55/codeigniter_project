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
					<h2 class="title">Class Booking</h2>
				</div> <!-- /.container -->
			</div> <!-- /.theme-inner-banner -->
<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form action="bookingData" method="post">
							<div class="form-group">
								<span class="form-label">Class Name</span>
								  <select name="title" id="id" class="form-control">

              <option value="">--Select Category--</option>

            <?php foreach($classes as $c):
            	// var_dump($c);exit();?>

    <option value="<?php echo $c->title?>"><?php echo $c->title;?>//selected set value here</option>
   <?php endforeach;?>

            </select>
								
							</div>
							<div class="form-group">
								<span class="form-label">Name</span>
								<input class="form-control" name="name" type="text" placeholder="Enter your name">

							</div>
							<div class="form-group">
								<span class="form-label">Email</span>
								<input class="form-control" name="email" type="email" placeholder="Enter your Email">
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" name="phone" type="tel" placeholder="Enter you Phone">
							</div>
							<div class="form-group">
								<span class="form-label">Address</span>
								<input class="form-control" name="address" type="text" placeholder="Enter you Address">
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Age</span>
										<input class="form-control" name="age" type="number" required>
									</div>
								</div>
							<div class="col-md-6">
								<div class="form-group">
									<span class="form-label">Gender</span>
									Male<input class="form-control" type="radio" name="gender" value="male"><br>
									Female<input class="form-control" type="radio" name="gender" value="female">
								</div>
							</div>
							</div>
							<div class="form-group">
								<button class="btn btn-success">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->


			
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