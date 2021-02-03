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
				<img src="<?php echo base_url()?>asset/images/shape/13.png" alt="" class="bg-shape">
				<img src="<?php echo base_url()?>asset/images/shape/14.png" alt="" class="shape-one">
				<img src="<?php echo base_url()?>asset/images/shape/15.png" alt="" class="shape-two">
				<img src="<?php echo base_url()?>asset/images/shape/16.png" alt="" class="shape-three">
				<div class="container">
					<h2 class="title">Pre-Ballet (4 - 8 years) Video</h2>
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
						<div class="col-xl-9 col-lg-8 col-12 blog-details">
							<div class="single-blog-post">
								<div class="img-box"><img src="<?php echo base_url('uploads/'.$blog->photo)?>"></div>
								<div class="post-meta">
									<ul class="date-meta">
										<li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $blog->date ?></li>
										<li><i class="fa fa-user" aria-hidden="true"></i><?php echo $blog->name ?></li>
										<li><i class="fa fa-comments" aria-hidden="true"></i> Comment  17</li>
									</ul>
									<h2 class="blog-title"><?php echo $blog->details ?>
									<ul class="tags">
										<li><a href="#">dances</a></li>
										<li><a href="#">marketing</a></li>
										<li><a href="#">development</a></li>
									</ul>

									<div class="clearfix bottom-widget">
										<ul class="social-icon">
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
										</ul>

										<ul class="user-data">
											<li><i class="fa fa-comment-o" aria-hidden="true"></i> <a href="#">26 Comment</a></li>
											<li><i class="fa fa-heart-o" aria-hidden="true"></i> <a href="#">36 Like</a></li>
										</ul>
									</div>
								</div> <!-- /.post-meta -->

								<div class="author-text clearfix">
									<img src="<?php echo base_url()?>asset/images/blog/11.jpg" alt="">
									<div class="text">
										<h6 class="name">Mahfuz Riad</h6>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type </p>
									</div>
								</div> <!-- /.author-text -->

								<div class="comment-area">
									<h6 class="title">3 comments</h6>
									<div class="single-comment clearfix">
										<img src="<?php echo base_url()?>asset/images/blog/12.jpg" alt="">
										<div class="comment">
											<h6>Ghost Riad</h6>
											<div class="date">- 12 September 2018</div>
											<p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test</p>
											<a href="#" class="reply">Reply</a>
										</div> <!-- /.commnet -->
									</div> <!-- /.single-comment -->
									<div class="single-comment reply-comment clearfix">
										<img src="<?php echo base_url()?>asset/images/blog/13.jpg" alt="">
										<div class="comment">
											<h6>Mahfuz</h6>
											<div class="date">- 12 September 2018</div>
											<p>Lorem ipsum dolor sit amet</p>
											<a href="#" class="reply">Reply</a>
										</div> <!-- /.commnet -->
									</div> <!-- /.single-comment -->
									<div class="single-comment clearfix">
										<img src="<?php echo base_url()?>asset/images/blog/14.jpg" alt="">
										<div class="comment">
											<h6>Firco hak</h6>
											<div class="date">- 12 September 2018</div>
											<p>qui blandit praesent luptatum zril delenit augue duis dolore te feugait nulla.</p>
											<a href="#" class="reply">Reply</a>
										</div> <!-- /.commnet -->
									</div> <!-- /.single-comment -->
								</div> <!-- /.comment-area -->

								<div class="comment-form">
									<h6 class="title">Post a Comment</h6>
									<form action="#">
										<input type="text" placeholder="Your Name">
										<input type="email" placeholder="Your Email">
										<textarea placeholder="Comment"></textarea>
										<button>Submit</button>
									</form>
								</div> <!-- /.comment-form -->
							</div> <!-- /.single-blog -->
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

		<!-- Theme js -->
		<script src="<?php echo base_url()?>asset/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>

<!-- Mirrored from www.creativegigs.net/unify/dnce/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Sep 2020 12:23:19 GMT -->
</html>