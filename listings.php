<!DOCTYPE html>
<html lang="en">
<head>
<title>Property Hunter Realty | Listings </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The Estate Teplate">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/listings_styles.css">
<link rel="stylesheet" type="text/css" href="styles/listings_responsive.css">
</head>

<body>

<div class="super_container">
	
	<!-- Home -->
	<div class="home">
		<!-- Image by: https://unsplash.com/@jbriscoe -->
		<div class="home_background" style="background-image:url(images/listings.jpg)"></div>
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_title">
							<h2>listings</h2>
						</div>
						<div class="breadcrumbs">
							<span><a href="index.php">Home</a></span>
							<span><a href="#"> Search</a></span>
							<span><a href="listings.php"> Listings</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Header -->

	<header class="header trans_300">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_container d-flex flex-row align-items-center trans_300">

						<!-- Logo -->

						<div class="logo_container">
							<a href="index.php">
								<div class="logo">
									<img src="images/logo.png" alt="">
									<span>PROPERTY HUNTER</span>
								</div>
							</a>
						</div>
						
						<!-- Main Navigation -->

						<nav class="main_nav">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php">home</a></li>
								<li class="main_nav_item"><a href="about.php">about us</a></li>
								<li class="main_nav_item"><a href="listings.php">listings</a></li>
								<li class="main_nav_item"><a href="contact.php">contact</a></li>
							</ul>
						</nav>
						
						<!-- Phone Home -->

						<div class="phone_home text-center">
							<span>+0080 234 567 84441</span>
						</div>
						
						<!-- Hamburger -->

						<div class="hamburger_container menu_mm">
							<div class="hamburger menu_mm">
								<i class="fas fa-bars trans_200 menu_mm"></i>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Menu -->

		<div class="menu menu_mm">
			<ul class="menu_list">
				<li class="menu_item">
					<div class="container">
						<div class="row">
							<div class="col">
								<a href="index.html">home</a>
							</div>
						</div>
					</div>
				</li>
				<li class="menu_item">
					<div class="container">
						<div class="row">
							<div class="col">
								<a href="about.php">about us</a>
							</div>
						</div>
					</div>
				</li>
				<li class="menu_item">
					<div class="container">
						<div class="row">
							<div class="col">
								<a href="listings.php">listings</a>
							</div>
						</div>
					</div>
				</li>
				<li class="menu_item">
					<div class="container">
						<div class="row">
							<div class="col">
								<a href="contact.php">contact</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>

	</header>

	<!-- Listings -->

	<div class="listings">
		<div class="container">
			<div class="row">
				
				<!-- Search Sidebar -->

				<div class="col-lg-4 sidebar_col">
					<!-- Search Box -->

					<div class="search_box">

						<div class="search_box_content">

							<!-- Search Box Title -->
							<div class="search_box_title text-center">
								<div class="search_box_title_inner">
									<div class="search_box_title_icon d-flex flex-column align-items-center justify-content-center"><img src="images/search.png" alt=""></div>
									<span>search your home</span>
								</div>
							</div>

							<!-- Search Form -->
							<form class="search_form" action="#">
								<div class="search_box_container">
									<ul class="dropdown_row clearfix">
										<li class="dropdown_item">
											<div class="dropdown_item_title">Property Type</div>
											<select name="property_type" id="keywords" class="dropdown_item_select">
												<option>Any</option>
												<option>Keyword 1</option>
												<option>Keyword 2</option>
											</select>
										</li>
										<li class="dropdown_item">
											<div class="dropdown_item_title">Property Location</div>
											<select name="property_loc" id="property_ID" class="dropdown_item_select">
												<option>Any</option>
												<option>ID 1</option>
												<option>ID 2</option>
											</select>
										</li>
										<li class="dropdown_item">
											<div class="dropdown_item_title">Property Occupancy</div>
											<select name="property_occ" id="property_status" class="dropdown_item_select">
												<option>Any</option>
												<option>Status 1</option>
												<option>Status 2</option>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_half">
											<div class="dropdown_item_title">Bedrooms no</div>
											<select name="bedrooms_no" id="bedrooms_no" class="dropdown_item_select">
												<option>Any</option>
												<option>1</option>
												<option>2</option>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_half">
											<div class="dropdown_item_title">Bathrooms no</div>
											<select name="bathrooms_no" id="bathrooms_no" class="dropdown_item_select">
												<option>Any</option>
												<option>1</option>
												<option>2</option>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_half">
											<div class="dropdown_item_title">Min Price</div>
											<select name="min_price" id="min_price" class="dropdown_item_select">
												<option>Any</option>
												<option>$10000</option>
												<option>$20000</option>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_half">
											<div class="dropdown_item_title">Max Price</div>
											<select name="max_price" id="max_price" class="dropdown_item_select">
												<option>Any</option>
												<option>$1000000</option>
												<option>$2000000</option>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_half">
											<div class="dropdown_item_title">Min Sq Ft</div>
											<select name="min_sq_ft" id="min_sq_ft" class="dropdown_item_select">
												<option>Any</option>
												<option>Any</option>
												<option>Any</option>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_half">
											<div class="dropdown_item_title">Max Sq Ft</div>
											<select name="max_sq_ft" id="max_sq_ft" class="dropdown_item_select">
												<option>Any</option>
												<option>Any</option>
												<option>Any</option>
											</select>
										</li>
									</ul>
								</div>

								<div class="search_features_container">
									<div class="search_features_trigger">
									</div>

									<div class="search_button">
										<input value="search" type="submit" class="search_submit_button">
									</div>
								</div>
							</form>
						</div>	
					</div>
				</div>

				<!-- Listings -->

				<div class="col-lg-8 listings_col">

					<!-- Listings Item -->

					<div class="listing_item">
						<div class="listing_item_inner d-flex flex-md-row flex-column trans_300">
							<div class="listing_image_container">
								<div class="listing_image">
									<!-- Image by: https://unsplash.com/@breather -->
									<div class="listing_background" style="background-image:url(images/listing_1.jpg)"></div>
								</div>
								<div class="featured_card_box d-flex flex-row align-items-center trans_300">
									<img src="images/tag.png" alt="https://www.flaticon.com/authors/lucy-g">
									<div class="featured_card_box_content">
										<div class="featured_card_price_title trans_300">For Sale</div>
										<div class="featured_card_price trans_300">$540,000</div>
									</div>
								</div>
							</div>
							<div class="listing_content">
								<div class="listing_title"><a href="listings_single.html">House in West California</a></div>
								<div class="listing_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>
							</div>
						</div>
					</div>

					<!-- Listings Item -->

					<div class="listing_item">
						<div class="listing_item_inner d-flex flex-md-row flex-column trans_300">
							<div class="listing_image_container">
								<div class="listing_image">
									<!-- Image by: https://unsplash.com/@jbriscoe -->
									<div class="listing_background" style="background-image:url(images/listing_2.jpg)"></div>
								</div>
								<div class="featured_card_box d-flex flex-row align-items-center trans_300">
									<img src="images/tag.png" alt="https://www.flaticon.com/authors/lucy-g">
									<div class="featured_card_box_content">
										<div class="featured_card_price_title trans_300">For Sale</div>
										<div class="featured_card_price trans_300">$540,000</div>
									</div>
								</div>
							</div>
							<div class="listing_content">
								<div class="listing_title"><a href="listings_single.html">Villa in Milano</a></div>
								<div class="listing_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>
							</div>
						</div>
							
					</div>

					<!-- Listings Item -->

					<div class="listing_item">
						<div class="listing_item_inner d-flex flex-md-row flex-column trans_300">
							<div class="listing_image_container">
								<div class="listing_image">
									<!-- Image by: https://unsplash.com/@aahubs -->
									<div class="listing_background" style="background-image:url(images/listing_3.jpg)"></div>
								</div>
								<div class="featured_card_box d-flex flex-row align-items-center trans_300">
									<img src="images/tag.png" alt="https://www.flaticon.com/authors/lucy-g">
									<div class="featured_card_box_content">
										<div class="featured_card_price_title trans_300">For Sale</div>
										<div class="featured_card_price trans_300">$540,000</div>
									</div>
								</div>
							</div>
							<div class="listing_content">
								<div class="listing_title"><a href="listings_single.html">Villa in West Barcelona</a></div>
								<div class="listing_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>
							</div>
						</div>
					</div>

					<!-- Listings Item -->

					<div class="listing_item">
						<div class="listing_item_inner d-flex flex-md-row flex-column trans_300">
							<div class="listing_image_container">
								<div class="listing_image">
									<!-- Image by: https://unsplash.com/@pperkins -->
									<div class="listing_background" style="background-image:url(images/listing_4.jpg)"></div>
								</div>
								<div class="featured_card_box d-flex flex-row align-items-center trans_300">
									<img src="images/tag.png" alt="https://www.flaticon.com/authors/lucy-g">
									<div class="featured_card_box_content">
										<div class="featured_card_price_title trans_300">For Sale</div>
										<div class="featured_card_price trans_300">$540,000</div>
									</div>
								</div>
							</div>
							<div class="listing_content">
								<div class="listing_title"><a href="listings_single.html">Villa in Milano</a></div>
								<div class="listing_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>
							</div>
						</div>
					</div>

					<!-- Listings Item -->

					<div class="listing_item">
						<div class="listing_item_inner d-flex flex-md-row flex-column trans_300">
							<div class="listing_image_container">
								<div class="listing_image">
									<!-- Image by: https://unsplash.com/@breather -->
									<div class="listing_background" style="background-image:url(images/listing_5.jpg)"></div>
								</div>
								<div class="featured_card_box d-flex flex-row align-items-center trans_300">
									<img src="images/tag.png" alt="https://www.flaticon.com/authors/lucy-g">
									<div class="featured_card_box_content">
										<div class="featured_card_price_title trans_300">For Sale</div>
										<div class="featured_card_price trans_300">$540,000</div>
									</div>
								</div>
							</div>
							<div class="listing_content">
								<div class="listing_title"><a href="listings_single.html">Villa in West Barcelona</a></div>
								<div class="listing_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.</div>
								<div class="rooms">

									<div class="room">
										<span class="room_title">Bedrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/bedroom.png" alt=""></div>
											<span class="room_number">4</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Bathrooms</span>
										<div class="room_content">
											<div class="room_image"><img src="images/shower.png" alt=""></div>
											<span class="room_number">3</span>
										</div>
									</div>

									<div class="room">
										<span class="room_title">Area</span>
										<div class="room_content">
											<div class="room_image"><img src="images/area.png" alt=""></div>
											<span class="room_number">7100 Sq Ft</span>
										</div>
									</div>

								</div>

								<div class="room_tags">
									<span class="room_tag"><a href="#">Hottub</a></span>
									<span class="room_tag"><a href="#">Swimming Pool</a></span>
									<span class="room_tag"><a href="#">Garden</a></span>
									<span class="room_tag"><a href="#">Patio</a></span>
									<span class="room_tag"><a href="#">Hard Wood Floor</a></span>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

			<div class="row">
				<div class="col clearfix">
					<div class="listings_nav">
						<ul>
							<li class="listings_nav_item active"><a href="#">01.</a></li>
							<li class="listings_nav_item"><a href="#">02.</a></li>
							<li class="listings_nav_item"><a href="#">03.</a></li>
						</ul>
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
							<a href="index.php">
								<div class="logo">
									<img src="images/logo.png" alt="">
									<span>PROPERTY HUNTER</span>
								</div>
							</a>
						</div>
					</div>
					<div class="footer_social">
						<ul class="footer_social_list">
							<li class="footer_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-behance"></i></a></li>
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
							<div><div class="contact_info_icon"><img src="images/placeholder.png" alt=""></div></div>
							<div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/phone-call.png" alt=""></div></div>
							<div class="contact_info_text">2556-808-8613</div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/message.png" alt=""></div></div>
							<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/planet-earth.png" alt=""></div></div>
							<div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>
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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/listings_custom.js"></script>
</body>

</html>