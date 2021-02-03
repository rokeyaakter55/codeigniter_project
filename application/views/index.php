<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header'); ?>

	<body>
		<div class="main-page-wrapper">
			<!-- <div id="loader-wrapper">
				<div id="loader">
					<span class="loader-inner"></span>
				</div>
			</div> -->
			<div class="top-header-section">
				<header class="theme-main-menu dark-color clearfix">
				  <?php $this->load->view('left_menu') ?>
				</header> 
			</div> 

						<div id="theme-main-banner" class="banner-one">
				<div data-src="<?php echo base_url('uploads/'.$banner->image)?>">
					<div class="camera_caption">
						<div class="container">
							<h1 class="wow fadeInUp animated"><?php echo $banner->heading?></h1>
							<p class="wow fadeInUp animated" data-wow-delay="0.5s"><?php echo $banner->paragraph?></p>
							<a data-fancybox="" href="<?php echo $banner->video?>" class="play-video fancybox wow fadeInRight animated" data-wow-delay="0.8s"> <span class="flaticon-003-play-button"></span>Play Now Video </a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				
				
			</div> 
			<div class="section-spacing our-feature-one">
				<img src="<?php echo base_url('asset/images/shape/'.$outstanding->image) ?>" alt="" class="shape">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="theme-title-one">
								<h6 class="upper-title"><?php echo $outstanding->name ?> </h6>
								<h2 class="main-title"><?php echo $outstanding->heading ?></h2>
							</div> <!-- /.theme-title-one -->
							<a href="<?php echo base_url('Front/about_us') ?>" class="theme-button-one button--tamaya color-one" data-text="Learn More"><span>Learn More</span></a>
						</div> <!-- /.col- -->
						<div class="col-lg-6">
							<div class="single-block" data-aos="fade-up" data-aos-delay="150">
								<h6><?php echo $outstanding->ballet ?></h6>
								<p><?php echo $outstanding->paragraph ?></p>
							</div>
							<div class="single-block" data-aos="fade-up" data-aos-delay="250">
								<h6><?php echo $outstanding->theatre ?></h6>
								<p><?php echo $outstanding->paragraph ?></p>
							</div>
						</div>
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.our-feature-one -->


			<!-- 
			=============================================
				About Us
			============================================== 
			-->
			<div class="section-spacing about-us">
				<img src="<?php base_url() ?>asset/images/shape/3.png" alt="" class="shape-two">
				<div class="main-container clearfix">
					<div class="inner-container left-content">
						<img src="<?php base_url() ?>asset/images/shape/2.png" alt="" class="shape" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="150">
						<div class="inner-col">
							<div class="img-box">
								<div class="dot" data-aos="fade-up" data-aos-delay="150"></div>
								<div class="dot" data-aos="fade-up" data-aos-delay="350"></div>
								<div class="dot" data-aos="fade-up" data-aos-delay="550"></div>
								<div class="dot" data-aos="fade-up" data-aos-delay="750"></div>
								<img src="<?php echo base_url('uploads/'.$global->image) ?>" alt="">
							</div> <!-- /.img-box -->
						</div> <!-- /.inner-col -->
					</div> <!-- /.inner-container -->

					<div class="inner-container right-content">
						<div class="wrapper">
							<div class="theme-title-one">
								<h6 class="upper-title"><?php echo $global->name ?></h6>
								<h2 class="main-title"><?php echo $global->heading ?></h2>
							</div> <!-- /.theme-title-one -->
							<p><?php echo $global->paragraph ?></p>
							<ul class="ceo-info clearfix">
								<li><img src="<?php echo base_url('uploads/'.$global->p_sign) ?>" alt=""></li>
								<li class="info">
									<img src="<?php echo base_url('uploads/'.$global->p_image) ?>" alt="" class="ceo-image">
									<div class="name">
										<h6><?php echo $global->p_name ?></h6>
										<p><?php echo $global->p_designation ?></p>
									</div>
								</li>
							</ul>
							<a href="<?php echo base_url('Front/about_us') ?>" class="read-more">Read More About Us</a>
						</div> <!-- /.wrapper -->
					</div> <!-- /.inner-container -->
				</div> <!-- /.main-container -->
			</div> <!-- /.about-us -->


			<!-- 
			=============================================
				Our Service
			============================================== 
			-->
			<div class="section-spacing">
				<div class="our-services">
					<img src="<?php base_url() ?>asset/images/shape/5.png" alt="" class="shape-one">
					<img src="<?php base_url() ?>asset/images/shape/6.png" alt="" class="shape-two">
					<div class="container">
						<div class="theme-title-two">
							<h2 class="main-title">Service platform</h2>
							<p>We provide all kind of financial service with expert advisor</p>
							<a href="<?php echo base_url('Front/our_class') ?>" class="theme-button-one button--tamaya color-one" data-text="See all Services"><span>See all Services</span></a>
						</div> <!-- /.theme-title-two -->

						<div class="row">
							<?php foreach ($service as $k) { ?>
							<div class="col-lg-4">
								<div class="service-block">
									<div class="num"><i class="<?php echo $k->icon ?>"></i> <span><?php echo $k->number ?></span></div>
									<h6><?php echo $k->heading ?></h6>
									<p><?php echo $k->paragraph ?></p>
									<!-- <a href="#" class="theme-button-two">Get More <span></span></a> -->
								</div> <!-- /.service-block -->
							</div>
							<?php } ?>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.our-services -->
			</div>


			<!-- 
			=============================================
				Our Fact
			============================================== 
			-->
			<div class="section-spacing">
				<div class="our-fact">
					<div class="container">
						<div class="row">
							<div class="col-lg-6"><h2 class="main-title"><?php echo $best_dance->heading ?></h2></div>
							<div class="col-lg-6"><p><?php echo $best_dance->paragraph ?></p></div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-12">
								<div class="counter-section">
									<div class="row">
										<div class="col-sm-6">
											<div class="single-counter-box">
							        			<h2 class="number"><span class="timer" data-from="0" data-to="<?php echo $best_dance->trainer_number ?>" data-speed="1200" data-refresh-interval="5">0</span>+</h2>
							        			<p><?php echo $best_dance->trainer ?></p>
							        		</div> <!-- /.single-counter-box -->
										</div>
										<div class="col-sm-6">
											<div class="single-counter-box">
							        			<h2 class="number"><span class="timer" data-from="0" data-to="<?php echo $best_dance->client_number ?>" data-speed="1200" data-refresh-interval="5">0</span>+</h2>
							        			<p><?php echo $best_dance->client ?></p>
							        		</div> <!-- /.single-counter-box -->
										</div>
										<div class="col-sm-6">
											<div class="single-counter-box">
							        			<h2 class="number"><span class="timer" data-from="0" data-to="<?php echo $best_dance->winner_number ?>" data-speed="1200" data-refresh-interval="5">0</span>+</h2>
							        			<p><?php echo $best_dance->winner ?></p>
							        		</div> <!-- /.single-counter-box -->
										</div>
										<div class="col-sm-6">
											<div class="single-counter-box">
							        			<h2 class="number"><span class="timer" data-from="0" data-to="<?php echo $best_dance->features_number ?>" data-speed="1200" data-refresh-interval="5">0</span>+</h2>
							        			<p><?php echo $best_dance->features ?></p>
							        		</div> <!-- /.single-counter-box -->
										</div>
									</div>
								</div> <!-- /.counter-section -->
							</div> <!-- /.col- -->

							<div class="col-lg-6 col-12">
								<div class="strategy-section">
									<div class="row">
										<div class="col-sm-6 strategy-block">
											<div>
												<div class="icon"><i class="<?php echo $best_dance->icon_1 ?>"></i></div>
												<h6><?php echo $best_dance->heading_2 ?></h6>
												<p><?php echo $best_dance->paragraph_2 ?></p>
											</div>
										</div> <!-- /.strategy-block -->
										<div class="col-sm-6 strategy-block">
											<div>
												<div class="icon"><i class="<?php echo $best_dance->icon_2 ?>"></i></div>
												<h6><?php echo $best_dance->heading_3 ?></h6>
												<p><?php echo $best_dance->paragraph_3 ?></p>
											</div>
										</div> <!-- /.strategy-block -->
									</div> <!-- /.row -->
								</div> <!-- /.strategy-section -->
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.our-fact -->
			</div> 


			<!--
			=====================================================
				Our Classes
			=====================================================
			-->
			<div class="section-spacing our-classes">
				<div class="container">
					<div class="theme-title-two">
						<h2 class="main-title">Class platform</h2>
						<p>We provide all kind of financial service with expert advisor</p>
						<a href="<?php echo base_url('Front/our_class') ?>" class="theme-button-one button--tamaya color-one" data-text="See all Class"><span>See all Class</span></a>
					</div> <!-- /.theme-title-two -->
				</div> <!-- /.container -->
				<div class="main-container">
					<div class="class-slider">
						<?php foreach ($classes as $k) { ?>
						<div class="item">
							<div class="single-block">
								<div class="img-box"><img src="<?php echo base_url('uploads/'.$k->photo) ?>" alt=""></div>
								<div class="text">
									<ul class="clearfix">
										<li><i class="fa fa-calendar" aria-hidden="true"></i> October 20, 2018</li>
										<li><i class="fa fa-clock-o" aria-hidden="true"></i> 4:30 pm -7:30Pm </li>
									</ul>
									<h6><?php echo $k->title ?></h6>
									<p><?php echo $k->details ?></p>
									<a href="<?php echo ('Front/class_details/'.$k->id) ?>" class="theme-button-two">Explore more <span></span></a>
								</div>
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<?php } ?>
					</div> <!-- /.row -->
				</div> <!-- /.main-container -->
			</div> <!-- /.our-classes -->




			<!--
			=====================================================
				Short Banner 
			=====================================================
			-->
			<div class="section-spacing">
				<div class="short-banner">
					<h2><?php echo $online_dance->heading ?></h2>
					<a href="<?php echo base_url('Front/class_booking')?>" class="button-style">Start Dance TODAY</a>
					<img src="<?php echo base_url('uploads/'.$online_dance->image) ?>" alt="" class="shape-one">
					<img src="<?php echo base_url('uploads/'.$online_dance->image_2) ?>" alt="" class="shape-two">
				</div> <!-- /.short-banner -->
			</div> 



			<!--
			=====================================================
				Client Slider
			=====================================================
			-->
			<div class="section-spacing">
				<div class="client-section">
					<div class="theme-title-one text-center">
						<h6 class="upper-title">Testimonials</h6>
						<h2 class="main-title">What Our Customers <br>Are Saying!!</h2>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						

						<div class="client-slider">
							<?php foreach ($testimonials as $k) {  ?>
							<div class="item">
								<div class="text-wrapper">
									<p><?php echo $k->paragraph ?></p>
									<img src="<?php echo base_url('uploads/'.$k->p_image) ?>" alt="">
									<h6><?php echo $k->p_name ?></h6>
									<span><?php echo $k->p_designation ?></span>
								</div>
							</div>
							<?php } ?>
						</div> <!-- /.client-slider -->
					
					</div> <!-- /.wrapper -->
				</div> <!-- /.client-section -->
			</div>


			<!--
			=====================================================
				Our Team
			=====================================================
			-->
			<div class="section-spacing">
				<div class="our-team">
					<img src="<?php base_url() ?>asset/images/shape/1.png" alt="" class="shape">
					<div class="container">
						<div class="theme-title-two">
							<h2 class="main-title">Executive Team</h2>
							<p>All We Do Begins With Your Story and Ends With Your Success!</p>
							<!-- <a href="#" class="theme-button-two">See all members <span></span></a> -->
						</div> <!-- /.theme-title-two -->
					</div> <!-- /.container -->

					<div class="main-content">
						<div class="team-slider">
							<?php foreach ($team as $k) { ?>
							<div class="item">
								<div class="single-team-member">
									<div class="img-box">
										<img src="<?php echo base_url('uploads/'.$k->image) ?>" alt="">
										<ul>
											<li><a href="<?php echo $k->facebook ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="<?php echo $k->pinter ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="<?php echo $k->skype ?>"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
											<li><a href="<?php echo $k->twitter ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div> <!-- /.img-box -->
									<div class="text">
										<h6><?php echo $k->name ?></h6>
										<p><?php echo $k->designation ?></p>
									</div> <!-- /.text -->
								</div> <!-- /.single-team-member -->
							</div>
						<?php } ?>
							
							
							
						</div> <!-- /.team-slider -->
					</div> <!-- /.main-content -->
				</div> <!-- /.our-team -->
			</div>


			<!--
			=====================================================
				Our Event
			=====================================================
			-->
			<div class="section-spacing our-event">
				<div class="container">
					<div class="theme-title-one text-center">
						<h6 class="upper-title">Events</h6>
						<h2 class="main-title">Our Most of The Popular <br>Events</h2>
					</div> <!-- /.theme-title-one -->
					<div class="main-wrapper">
						<img src="<?php base_url() ?>asset/images/shape/23.png" alt="" class="shape">
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
			=====================================================
				Latest Articles
			=====================================================
			-->
			<div class="section-spacing">
				<div class="latest-articles">
					<div class="overlay">
						<div class="container">
							<div class="theme-title-two">
								<h2 class="main-title">Latest articles</h2>
								<p> Latest articles covering news,politics, current events, and culture with detailed analysis and commentary.</p>
								<!-- <a href="blog.html" class="theme-button-two">See all articles<span></span></a> -->
							</div> <!-- /.theme-title-two -->
						</div> <!-- /.container -->
					</div> <!-- /.overlay -->

					<div class="main-content">
						<div class="articles-slider">
							<?php foreach ($blog as $kk )  { 
									//var_dump($k);exit();
									?>
							<div class="item">
								
								<div class="single-block">
									<div class="img-box">
										<img src="<?php echo base_url()?>asset/images/blog/<?php echo $kk->photo ?>" height="450" weight="450" alt="">
										<div class="hover-content">
											<h6><a href="<?php echo base_url().'Front/blog_details/'.$k->id ?>"><?php echo $kk->title?></a></h6>
											<div class="date"><?php echo $kk->date?></div>
										</div>
									</div>
								</div> 
								
							</div>
							<?php } ?><
							
							
						</div> <!-- /.articles-slider -->
					</div> <!-- /.main-content -->
				</div> <!-- /.latest-articles -->
			</div> <!-- /.latest-articles -->
			<!-- 
			=============================================
				Partner Logo
			============================================== 
			-->
			<div class="partent-logo-section">
				<div class="container">
					<div id="partner-logo">
						<div class="item"><img src="<?php base_url() ?>asset/images/logo/1.png" alt="logo"></div>
						<div class="item"><img src="<?php base_url() ?>asset/images/logo/2.png" alt="logo"></div>
						<div class="item"><img src="<?php base_url() ?>asset/images/logo/3.png" alt="logo"></div>
						<div class="item"><img src="<?php base_url() ?>asset/images/logo/4.png" alt="logo"></div>
					</div>
				</div>
			</div> <!-- /.partent-logo-section -->
			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<?php $this->load->view('footer'); ?>
			
	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="<?php base_url() ?>asset/vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="<?php base_url() ?>asset/vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php base_url() ?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Camera Slider -->
		<script src='<?php base_url() ?>asset/vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
	    <script src='<?php base_url() ?>asset/vendor/Camera-master/scripts/jquery.easing.1.3.js'></script> 
	    <script src='<?php base_url() ?>asset/vendor/Camera-master/scripts/camera.min.js'></script>
	    <!-- menu  -->
		<script src="<?php base_url() ?>asset/vendor/menu/src/j<?php base_url() ?>s/jquery.slimmenu.js"></script>
		<!-- AOS js -->
		<script src="<?php base_url() ?>asset/vendor/aos-next/dist/aos.js"></script>
		<!-- owl.carousel -->
		<script src="<?php base_url() ?>asset/vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script src="<?php base_url() ?>asset/vendor/jquery.appear.js"></script>
		<script src="<?php base_url() ?>asset/vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="<?php base_url() ?>asset/vendor/fancybox/dist/jquery.fancybox.min.js"></script>

		<!-- Theme js -->
		<script src="<?php base_url() ?>asset/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>