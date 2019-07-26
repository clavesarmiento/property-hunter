<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Property Hunter Realty | Home </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/styles/bootstrap4/bootstrap.min.css">
<link href="assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="assets/styles/responsive.css">
<link rel="stylesheet" type="text/css" href="assets/styles/css/home.css">
</head>

<body>

<div class="super_container">
	<!-- Home -->
		<div class="home" id="home-slider"></div>

	<!-- Header -->
		<header class="header trans_300" id="main-header"></header>
	<!-- Header -->		
	
	<!-- Search Box -->

	<div class="search_box">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="search_box_outer">
						<div class="search_box_inner">

							<!-- Search Box Title -->
							<div class="search_box_title text-center">
								<div class="search_box_title_inner">
									<div class="search_box_title_icon d-flex flex-column align-items-center justify-content-center"><img src="assets/images/search.png" alt=""></div>
									<span>search your home</span>
								</div>
							</div>


							<!-- Search Form -->
							<form class="search_form" action="GET">
								<div class="search_box_container">
									<ul class="dropdown_row clearfix">
										<li class="dropdown_item dropdown_item_5">
											<div class="dropdown_item_title">Property Type</div>
											<select name="property_type" id="proptype" class="dropdown_item_select">
												<option>-- Property Type --</option>
<?php $sql = "SELECT * from  propertytype ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{       ?>  
												<option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->property_type);?></option>
<?php }} ?>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_5">
											<div class="dropdown_item_title">Property Location</div>
											<select name="property_loc" id="propid" class="dropdown_item_select">
											<option>-- Property Location --</option>
<?php $sql = "SELECT * from  propertyloc ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{       ?>  
												<option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->location_name);?></option>
<?php }} ?>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_5">
											<div class="dropdown_item_title">Property Occupancy</div>
											<select name="property_occ" id="property_occ" class="dropdown_item_select">
												<option>-- Property Occupancy --</option>
<?php $sql = "SELECT * from  occupancy ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{       ?>  
												<option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->occupancy);?></option>
<?php }} ?>
											</select>
										</li>
									</ul>
								</div>

								<div class="search_box_container">
									<ul class="dropdown_row clearfix">
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Bedrooms</div>
											<select name="bedrooms_no" id="bedrooms_no" class="dropdown_item_select">
												<option>Any</option>
												<option>1</option>
												<option>2</option>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Bathrooms</div>
											<select name="bathrooms_no" id="bathrooms_no" class="dropdown_item_select">
												<option>Any</option>
												<option>1</option>
												<option>2</option>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Min Price</div>
											<select name="min_price" id="min_price" class="dropdown_item_select">
												<option>Any</option>
												<option>₱ 100,000</option>
												<option>₱ 250,000</option>
												<option>₱ 500,000</option>
												<option>₱ 750,000</option>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Max Price</div>
											<select name="max_price" id="max_price" class="dropdown_item_select">
												<option>Any</option>
												<option>₱ 100,000</option>
												<option>₱ 250,000</option>
												<option>₱ 500,000</option>
												<option>₱ 750,000</option>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Lot Area</div>
											<select name="lot_area" id="min_sq_ft" class="dropdown_item_select">
												<option>Any</option>
												<option>50 m2</option>
												<option>70 m2</option>
												<option>90 m2</option>
												<option>110 m2</option>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Floor Area</div>
											<select name="floor_area" id="max_sq_ft" class="dropdown_item_select">
												<option>Any</option>
												<option>30 m2</option>
												<option>50 m2</option>
												<option>70 m2</option>
												<option>90 m2</option>
											</select>
										</li>
										<li class="dropdown_item">
											<div class="search_button">
												<input value="search" type="submit" class="search_submit_button">
											</div>
										</li>
									</ul>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Featured Properties -->

	<div class="featured" id="featured-section">
		
	</div>

	<!-- Testimonials -->

	<div class="testimonials"></div>

	<!-- Workflow -->

	<div class="workflow">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3>see how we operate</h3>
						<span class="section_subtitle">What you need to do</span>
					</div>
				</div>
			</div>

			<div class="row workflow_row">
				<div class="workflow_rocket"><img src="assets/images/rocket.png" alt=""></div>

				<!-- Workflow Item -->
				<div class="col-lg-4 workflow_col">
					<div class="workflow_item">
						<div class="workflow_image_container d-flex flex-column align-items-center justify-content-center">
							<div class="workflow_image_background">
								<div class="workflow_circle_outer trans_200"></div>
								<div class="workflow_circle_inner trans_200"></div>
								<div class="workflow_num text-center trans_200"><span>01.</span></div>
							</div>
							<div class="workflow_image">
								<img src="assets/images/workflow_1.png" alt="">
							</div>
							
						</div>
						<div class="workflow_item_content text-center">
							<div class="workflow_title">Choose a Location</div>
							<p class="workflow_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</p>
						</div>
					</div>
				</div>

				<!-- Workflow Item -->
				<div class="col-lg-4 workflow_col">
					<div class="workflow_item">
						<div class="workflow_image_container d-flex flex-column align-items-center justify-content-center">
							<div class="workflow_image_background">
								<div class="workflow_circle_outer trans_200"></div>
								<div class="workflow_circle_inner trans_200"></div>
								<div class="workflow_num text-center trans_200"><span>02.</span></div>
							</div>
							<div class="workflow_image">
								<img src="assets/images/workflow_2.png" alt="">
							</div>
							
						</div>
						<div class="workflow_item_content text-center">
							<div class="workflow_title">Find the Perfect Home</div>
							<p class="workflow_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</p>
						</div>
					</div>
				</div>

				<!-- Workflow Item -->
				<div class="col-lg-4 workflow_col">
					<div class="workflow_item">
						<div class="workflow_image_container d-flex flex-column align-items-center justify-content-center">
							<div class="workflow_image_background">
								<div class="workflow_circle_outer trans_200"></div>
								<div class="workflow_circle_inner trans_200"></div>
								<div class="workflow_num text-center trans_200"><span>03.</span></div>
							</div>
							<div class="workflow_image">
								<img src="assets/images/workflow_3.png" alt="">
							</div>
							
						</div>
						<div class="workflow_item_content text-center">
							<div class="workflow_title">Move in your new life</div>
							<p class="workflow_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Cities -->

	<div class="cities">
		<div class="cities_background"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h3>cities clients prefer</h3>
						<span class="section_subtitle">What you need to do</span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col">

					<!-- Cities Slider -->
		
					<div class="cities_slider_container">
						<div class="owl-carousel owl-theme cities_slider">
							
							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="assets/#">
									<div class="city_image">
										<img src="assets/images/city_1.jpg" alt="">
									</div>
									<div class="city_details"><img src="assets/images/search.png" alt=""></div>
									<div class="city_name"><span>miami</span></div>
								</a>
							</div>

							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="assets/#">
									<div class="city_image">
										<img src="assets/images/city_2.jpg" alt="">
									</div>
									<div class="city_details"><img src="assets/images/search.png" alt=""></div>
									<div class="city_name"><span>dublin</span></div>
								</a>
							</div>

							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="assets/#">
									<div class="city_image">
										<img src="assets/images/city_3.jpg" alt="">
									</div>
									<div class="city_details"><img src="assets/images/search.png" alt=""></div>
									<div class="city_name"><span>vienna</span></div>
								</a>
							</div>

							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="assets/#">
									<div class="city_image">
										<img src="assets/images/city_4.jpg" alt="">
									</div>
									<div class="city_details"><img src="assets/images/search.png" alt=""></div>
									<div class="city_name"><span>marbella</span></div>
								</a>
							</div>

							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="assets/#">
									<div class="city_image">
										<img src="assets/images/city_5.jpg" alt="">
									</div>
									<div class="city_details"><img src="assets/images/search.png" alt=""></div>
									<div class="city_name"><span>new york</span></div>
								</a>
							</div>

							<!-- City Item -->
							<div class="owl-item city_item">
								<a href="assets/#">
									<div class="city_image">
										<img src="assets/images/city_6.jpg" alt="">
									</div>
									<div class="city_details"><img src="assets/images/search.png" alt=""></div>
									<div class="city_name"><span>geneva</span></div>
								</a>
							</div>
							
						</div>
						
						<div class="cities_prev cities_nav d-flex flex-row align-items-center justify-content-center trans_200">
							<img src="assets/images/nav_left.png" alt="">
						</div>

						<div class="cities_next cities_nav d-flex flex-row align-items-center justify-content-center trans_200">
							<img src="assets/images/nav_right.png" alt="">
						</div>

					</div>

				</div>
					
			</div>

		</div>
	</div>

	<!-- Call to Action -->

	<div class="cta_1">
		<div class="cta_1_background" style="background-image:url(assets/images/cta_1.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="cta_1_content d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<h3 class="cta_1_text text-lg-left text-center">Do you want to talk with one of our <span>real estate experts?</span></h3>
						<div class="cta_1_phone">Call now:   +0080 234 567 84441</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>


	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				
				<!-- Footer About -->

				<div class="col-lg-6">
					<div class="footer_col_title">
						<div class="logo_container">
							<a href="assets/index.php">
								<div class="logo">
									<img src="assets/images/logo.png" alt="">
									<span>PROPERTY HUNTER</span>
								</div>
							</a>
						</div>
					</div>
					<div class="footer_social">
						<ul class="footer_social_list">
							<li class="footer_social_item"><a href="assets/#"><i class="fab fa-pinterest"></i></a></li>
							<li class="footer_social_item"><a href="assets/#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="footer_social_item"><a href="assets/#"><i class="fab fa-twitter"></i></a></li>
							<li class="footer_social_item"><a href="assets/#"><i class="fab fa-dribbble"></i></a></li>
							<li class="footer_social_item"><a href="assets/#"><i class="fab fa-behance"></i></a></li>
						</ul>
					</div>
					<div class="footer_about">
						<p>Lorem ipsum dolor sit amet, cons ectetur  quis ferme adipiscing elit. Suspen dis se tellus eros, placerat quis ferme ntum et, viverra sit amet lacus. Nam gravida  quis ferme semper augue.</p>
					</div>
				</div>
			

				<!-- Footer Contact Info -->

				<div class="col-lg-6">
					<div class="footer_col_title">contact info</div>
					<ul class="contact_info_list">
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="assets/images/placeholder.png" alt=""></div></div>
							<div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="assets/images/phone-call.png" alt=""></div></div>
							<div class="contact_info_text">2556-808-8613</div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="assets/images/message.png" alt=""></div></div>
							<div class="contact_info_text"><a href="assets/mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="assets/images/planet-earth.png" alt=""></div></div>
							<div class="contact_info_text"><a href="assets/https://colorlib.com">www.colorlib.com</a></div>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</footer>

	<!-- Credits -->

	<div class="credits">
		<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
	</div>

</div>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/styles/bootstrap4/popper.js"></script>
<script src="assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="assets/plugins/greensock/TweenMax.min.js"></script>
<script src="assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="assets/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/easing/easing.js"></script>
<script src="assets/js/custom.js"></script>

<?php require_once 'components/script/server-script.php'; ?>
</body>

</html>