 <!DOCTYPE html>
<html lang="en">
	
<?php $this->load->view('header');?>

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



			<!-- 
			=============================================
				Theme Main Menu 
			============================================== 
			-->
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
					<h2 class="title">Blog List</h2>
				</div> <!-- /.container -->
			</div> <!-- /.theme-inner-banner -->

			<!--
			=====================================================
				Blog List
			=====================================================
			-->
			<div class="section-spacing section-spacing-bottom">
				<div class="container">
					<div class="row">
						<div class="col-xl-9 col-lg-8 col-12 blog-list">
							<div class="single-blog-post">
								<?php foreach ($blog as $k) { ?>
								<div class="img-box"><img src="<?php echo base_url('uploads/'.$k->photo)?>"> </div>
								<div class="post-meta">
									<ul class="date-meta">
										<li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $k->date?></li>
										<li><i class="fa fa-user" aria-hidden="true"></i> <?php echo $k->name?></li>
										<li><i class="fa fa-comments" aria-hidden="true"></i> Comment  17</li>
									</ul>
									<h2 class="blog-title"><a href="<?php echo base_url().'Front/blog_details/'.$k->id ?>"><?php echo $k->details?> <br>
									<a href="<?php echo base_url().'Front/blog_details/'.$k->id ?>" class="read-more">Read More</a>
								</div> 
								<?php } ?><!-- /.post-meta -->
							</div> <!-- /.single-blog -->
							

							<div class="theme-pagination">
								<ul>
									<li class="active"><a href="#">01</a></li>
									<li><a href="#">02</a></li>
									<li><a href="#">03</a></li>
									<li><a href="#">04</a></li>
								</ul>
							</div>
						</div> <!-- /.blog-list -->

						<div class="col-xl-3 col-lg-4 col-md-6 col-12 theme-siddebar">
							<div class="sidebar-data sidebar-search">
								<form action="#">
									<input type="text" placeholder="Search">
									<button><i class="fa fa-search" aria-hidden="true"></i></button>
								</form>
							</div> <!-- /.sidebar-search -->
							<div class="sidebar-data sidebar-list">
								<ul>
									<li class="active"><a href="#">Corporate <span>12</span></a></li>
									<li><a href="#">Latest News <span>09</span></a></li>
									<li><a href="#">Web Design <span>13</span></a></li>
									<li><a href="#">Performance <span>15</span></a></li>
									<li><a href="#">Dance Studio <span>17</span></a></li>
									<li><a href="#">Life Style <span>05</span></a></li>
								</ul>
							</div> <!-- /.sidebar-list -->
							<div class="sidebar-data sidebar-recent-post">
								<ul>
									<li>
										<div class="tag">TRANSPARENT BUSINESS</div>
										<a href="#" class="title">Engagement beyond the boardroom</a>
										<div class="date">May 2018</div>
										<a href="#" class="read-more">Read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
									</li>
									<li>
										<div class="tag">TRANSPARENT BUSINESS</div>
										<a href="#" class="title">Engagement beyond the boardroom</a>
										<div class="date">May 2018</div>
										<a href="#" class="read-more">Read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
									</li>
								</ul>
							</div> <!-- /.sidebar-recent-post -->
							<div class="sidebar-key">
								<h6 class="key-title">Staff Contacts</h6>
								<ul>
									<li>
										<a href="#">Steven J. Joffe</a>
										<p>Senior Managing Director</p>
									</li>
									<li>
										<a href="#">Larry Portal</a>
										<p>Senior Managing Director</p>
									</li>
								</ul>
							</div> <!-- /.sidebar-key -->
						</div> <!-- /.theme-siddebar -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div>
			
			



			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="theme-footer-one">
				<img src="<?php echo base_url()?>asset/images/shape/11.png" alt="" class="shape-one">
				<img src="<?php echo base_url()?>asset/images/shape/12.png" alt="" class="shape-two">
				<div class="subscribe-form">
					<div class="container">
						<div class="row">
							<div class="col-lg-8"><h2>Be in the know with the latest update from <span>Dancerio</span></h2></div>
							<div class="col-lg-4">
								<form action="#">
									<input type="email" placeholder="Enter your e-mail">
									<button><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div> <!-- /.subscribe-form -->
				<div class="top-footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-sm-6 col-12 about-widget">
								<a href="index-2.html" class="logo"><img src="<?php echo base_url()?>asset/images/logo/logo.png" alt=""></a>
								<p>Join Dancers Around The World Learning On Dancerio, Start Improving your dance skills today. </p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.about-widget -->
							<div class="col-xl-3 col-lg-3 col-sm-6 col-12 footer-news">
								<h5 class="title">Latest News</h5>
								<ul>
									<li>
										<a href="blog-details.html">Discover systematic ways to develop</a>
										<div class="date">21 August, 2018  /  Business</div>
									</li>
									<li>
										<a href="blog-details.html">Install our mobile app on a smartphone</a>
										<div class="date">21 August, 2018  /  Business</div>
									</li>
								</ul>
							</div> <!-- /.footer-recent-post -->
							<div class="col-lg-2 col-sm-6 col-12 footer-list">
								<h5 class="title">Navigate</h5>
								<ul>
									<li><a href="#">About us</a></li>
									<li><a href="#">Customer</a></li>
									<li><a href="#">Member Forum</a></li>
									<li><a href="#">Collection</a></li>
									<li><a href="#">Events Calendar</a></li>
								</ul>
							</div> <!-- /.footer-list -->
							<div class="col-xl-3 col-lg-2 col-sm-6 col-12 footer-information">
								<h5 class="title">Contact Info</h5>
								<ul>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i> 201 Stokes Isle Apt. 896, New York 10010, United State</li>
									<li><i class="fa fa-phone" aria-hidden="true"></i> (+880)1 616481</li>
									<li><i class="fa fa-envelope" aria-hidden="true"></i> info@yourdomain.com</li>
								</ul>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-footer -->
				<div class="bottom-footer">
					<div class="container">
						<p>Copyrights 2018 © Unifytheme</p>
					</div>
				</div> <!-- /.bottom-footer -->
			</footer> <!-- /.theme-footer-one -->
			

	        

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

<!-- Mirrored from www.creativegigs.net/unify/dnce/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Sep 2020 12:23:17 GMT -->
</html>