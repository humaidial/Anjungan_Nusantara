<!DOCTYPE html>
<html lang="en">
<head>
<title>Anjungan_Nusantara</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Anjungan shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/phone.png" alt=""></div>(031) - 8894850</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/mail.png" alt=""></div><a href="mailto:humaidialmasmed@gmail.com">humaidialmasmed@gmail.com</a></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									<li>
										<a href="#">Indonesia<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">English</a></li>
											<li><a href="#">Spanish</a></li>
											<li><a href="#">Japanese</a></li>
										</ul>
									</li>
									<li>
										<a href="#">IDR rupiahs<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">$ US dollar</a></li>
											<li><a href="#">EUR Euro</a></li>
											<li><a href="#">GBP British Pound</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="top_bar_user">
								<div class="user_icon"><img src="images/user.svg" alt=""></div>
								<div><a href="<?php echo base_url()?>Register">Register</a></div>
								<div><a href="#">Sign in</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="index.html">Anjungan<br>Nusantara</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-4 order-lg-1 order-2 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">All Categories</a></li>
													<li><a class="clc" href="shop.html">Accesories</a></li>
													<li><a class="clc" href="shop.html">Culinary</a></li>
													<li><a class="clc" href="shop.html">Fashion</a></li>
													<li><a class="clc" href="shop.html">Handmade</a></li>
													<li><a class="clc" href="shop.html">Jewelry</a></li>
													<li><a class="clc" href="shop.html">Leather Products</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-6 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="images/heart.png" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="#">Wishlist</a></div>
									<div class="wishlist_count">1</div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="images/cart.png" alt="">
										<div class="cart_count"><span>1</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="cart.html">Cart</a></div>
										<div class="cart_price">Rp 100.000</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">categories</div>
								</div>

								<ul class="cat_menu">
									<li class="hassubs">
										<a href="#">Accesories<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="hassubs">
												<a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Culinary<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="hassubs">
												<a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Fashion<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="hassubs">
												<a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Handmade<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="hassubs">
												<a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Jewelry<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="hassubs">
												<a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Leather Products<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="hassubs">
												<a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="index.html">Home<i class="fas fa-chevron-down"></i></a></li>
									<li class="hassubs">
										<a href="#">Super Deals<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Discount Up To 20%<i class="fas fa-chevron-down"></i></a>
											</li>
											<li><a href="#">Free Shiping<i class="fas fa-chevron-down"></i></a>
											</li>
											<li><a href="#">Gebyar UKM<i class="fas fa-chevron-down"></i></a>
											</li>
											<li><a href="#">Flash Sale<i class="fas fa-chevron-down"></i></a>
											</li>
										</ul>
									</li>
									
									<li class="hassubs">
										<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu HP-->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							<ul class="page_menu_nav">
								<li class="page_menu_item has-children">
									<a href="#">Language<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Indonesia<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Currency<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">IDR Rupiahs<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item">
									<a href="#">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Disount Up To 20%</a></li>
										<li><a href="#">Free Shiping<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Gebyar UKM<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Flash Sale<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Pages<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">shop<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">products<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">blog<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">blog post<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">regular post<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">cart<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
							</ul>
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>(031) - 8894850</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">humaidialmasmed@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
	
	<!-- Banner -->

	<div class="banner">
		<div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="images/banner_product1.png" alt=""></div>
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						<h1 class="banner_text">new era of umkm</h1>
						<div class="banner_price"><span>IDR 125K</span>IDR 100K</div>
						<div class="banner_product_name">Tas Rajut Handmade</div>
						<div class="button banner_button"><a href="product.html">Shop Now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<!-- Deals of the week -->

	<div class="deals_featured">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
					
					<!-- Deals -->

					<div class="deals">
						<div class="deals_title">Deals of the Week</div>
						<div class="deals_slider_container">
							
							<!-- Deals Slider -->
							<div class="owl-carousel owl-theme deals_slider">
								
								<!-- Deals Item -->
								<div class="owl-item deals_item">
									<div class="deals_image"><img src="images/banner_product1.png" alt=""></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="shop.html">Handmade</a></div>
											<div class="deals_item_price_a ml-auto">IDR 125K</div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
											<div class="deals_item_price ml-auto">IDR 100K</div>
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Available: <span>6</span></div>
												<div class="sold_title ml-auto">Already sold: <span>28</span></div>
											</div>
											<div class="available_bar"><span style="width:83%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Hurry Up</div>
												<div class="deals_timer_subtitle">Offer ends in:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer1_hr" class="deals_timer_hr"></div>
														<span>hours</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_min" class="deals_timer_min"></div>
														<span>mins</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_sec" class="deals_timer_sec"></div>
														<span>secs</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Deals Item -->
								<div class="owl-item deals_item">
									<div class="deals_image"><img src="images/banner_product1.png" alt=""></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="shop.html">Handmade</a></div>
											<div class="deals_item_price_a ml-auto">IDR 125K</div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
											<div class="deals_item_price ml-auto">IDR 100K</div>
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Available: <span>6</span></div>
												<div class="sold_title ml-auto">Already sold: <span>28</span></div>
											</div>
											<div class="available_bar"><span style="width:83%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Hurry Up</div>
												<div class="deals_timer_subtitle">Offer ends in:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer2_hr" class="deals_timer_hr"></div>
														<span>hours</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer2_min" class="deals_timer_min"></div>
														<span>mins</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer2_sec" class="deals_timer_sec"></div>
														<span>secs</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Deals Item -->
								<div class="owl-item deals_item">
									<div class="deals_image"><img src="images/banner_product1.png" alt=""></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="shop.html">Handmade</a></div>
											<div class="deals_item_price_a ml-auto">IDR 125K</div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
											<div class="deals_item_price ml-auto">IDR 100K</div>
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Available: <span>6</span></div>
												<div class="sold_title ml-auto">Already sold: <span>28</span></div>
											</div>
											<div class="available_bar"><span style="width:83%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Hurry Up</div>
												<div class="deals_timer_subtitle">Offer ends in:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer3_hr" class="deals_timer_hr"></div>
														<span>hours</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer3_min" class="deals_timer_min"></div>
														<span>mins</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer3_sec" class="deals_timer_sec"></div>
														<span>secs</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>

						<div class="deals_slider_nav_container">
							<div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
							<div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
						</div>
					</div>
					
					<!-- Featured -->
					<div class="featured">
						<div class="tabbed_container">
							<div class="tabs">
								<ul class="clearfix">
									<li class="active">Featured</li>
									<li>On Sale</li>
									<li>Best Rated</li>
								</ul>
								<div class="tabs_line"><span></span></div>
							</div>

							<!-- Product Panel -->
							<div class="product_panel panel active">
								<div class="featured_slider slider">

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/banner_product1.png" alt=""></a></div>
											<div class="product_content">
												<div class="product_price discount">IDR 100K<span>IDR 125K</span></div>
												<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 200K</div>
												<div class="product_name"><div><a href="product.html">Kalung Handmade</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button active">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 25K</div>
												<div class="product_name"><div><a href="product.html">Bumbu Rempah</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price discount">IDR 100K<span>IDR 125K</span></div>
												<div class="product_name"><div><a href="product.html">Tas Rajut Batik</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 100K</div>
												<div class="product_name"><div><a href="product.html">Lemari Ukir</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 50K</div>
												<div class="product_name"><div><a href="product.html">Lukisan Wajah</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 200K</div>
												<div class="product_name"><div><a href="product.html">Jamu Nyonya 1kg</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

								</div>
								<div class="featured_slider_dots_cover"></div>
							</div>

							<!-- Product Panel -->

							<div class="product_panel panel">
								<div class="featured_slider slider">

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/banner_product1.png" alt=""></div>
											<div class="product_content">
												<div class="product_price discount">IDR 100K<span>IDR 125K</span></div>
												<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 200K</div>
												<div class="product_name"><div><a href="product.html">Kalung Handmade</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button active">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 25K</div>
												<div class="product_name"><div><a href="product.html">Bumbu Rempah</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price discount">IDR 100K<span>IDR 125K</span></div>
												<div class="product_name"><div><a href="product.html">Tas Rajut Batik</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 100K</div>
												<div class="product_name"><div><a href="product.html">Lemari Ukir</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 50K</div>
												<div class="product_name"><div><a href="product.html">Lukisan Wajah</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 200K</div>
												<div class="product_name"><div><a href="product.html">Jamu Nyonya 1kg</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

								</div>
								<div class="featured_slider_dots_cover"></div>
							</div>

							<!-- Product Panel -->

							<div class="product_panel panel">
								<div class="featured_slider slider">

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/banner_product1.png" alt=""></div>
											<div class="product_content">
												<div class="product_price discount">IDR 100K<span>IDR 125K</span></div>
												<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 200K</div>
												<div class="product_name"><div><a href="product.html">Kalung Handmade</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button active">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 25K</div>
												<div class="product_name"><div><a href="product.html">Bumbu Rempah</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price discount">IDR 100K<span>IDR 125K</span></div>
												<div class="product_name"><div><a href="product.html">Tas Rajut Batik</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 100K</div>
												<div class="product_name"><div><a href="product.html">Lemari Ukir</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 50K</div>
												<div class="product_name"><div><a href="product.html">Lukisan Wajah</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 200K</div>
												<div class="product_name"><div><a href="product.html">Jamu Nyonya 1kg</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount">-25%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

									<!-- Slider Item -->
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/" alt=""></div>
											<div class="product_content">
												<div class="product_price">IDR 75K</div>
												<div class="product_name"><div><a href="product.html">Gelang Tangan</a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>

								</div>
								<div class="featured_slider_dots_cover"></div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Popular Categories -->

	<div class="popular_categories">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="popular_categories_content">
						<div class="popular_categories_title">Popular Categories</div>
						<div class="popular_categories_slider_nav">
							<div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
							<div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
						</div>
						<div class="popular_categories_link"><a href="shop">full catalog</a></div>
					</div>
				</div>
				
				<!-- Popular Categories Slider -->

				<div class="col-lg-9">
					<div class="popular_categories_slider_container">
						<div class="owl-carousel owl-theme popular_categories_slider">

							<!-- Popular Categories Item -->
							<div class="owl-item">
								<div class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="images/popular_1.png" alt=""></div>
									<div class="popular_category_text"><a href="shop.html">Accesories</a></div>
								</div>
							</div>

							<!-- Popular Categories Item -->
							<div class="owl-item">
								<div class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="images/popular_2.png" alt=""></div>
									<div class="popular_category_text"><a href="shop.html">Culinary</a></div>
								</div>
							</div>

							<!-- Popular Categories Item -->
							<div class="owl-item">
								<div class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="images/popular_3.png" alt=""></div>
									<div class="popular_category_text"><a href="shop.html">Fashion</a></div>
								</div>
							</div>

							<!-- Popular Categories Item -->
							<div class="owl-item">
								<div class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="images/popular_4.png" alt=""></div>
									<div class="popular_category_text"><a href="shop.html">Handmade</a></div>
								</div>
							</div>

							<!-- Popular Categories Item -->
							<div class="owl-item">
								<div class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="images/popular_5.png" alt=""></div>
									<div class="popular_category_text"><a href="shop.html">Jewelry</a></div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->

	<div class="banner_2">
		<div class="banner_2_background" style="background-image:url(images/banner_2_background.jpg)"></div>
		<div class="banner_2_container">
			<div class="banner_2_dots"></div>
			<!-- Banner 2 Slider -->

			<div class="owl-carousel owl-theme banner_2_slider">

				<!-- Banner 2 Slider Item -->
				<div class="owl-item">
					<div class="banner_2_item">
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col-lg-4 col-md-6 fill_height">
									<div class="banner_2_content">
										<div class="banner_2_category">Handmade</div>
										<div class="banner_2_title">Tas Rajut Handmade</div>
										<div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
										<div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
										<div class="button banner_2_button"><a href="shop.html">Explore</a></div>
									</div>
									
								</div>
								<div class="col-lg-8 col-md-6 fill_height">
									<div class="banner_2_image_container">
										<div class="banner_2_image"><img src="images/banner_product1.png" alt=""></div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>

				<!-- Banner 2 Slider Item -->
				<div class="owl-item">
					<div class="banner_2_item">
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col-lg-4 col-md-6 fill_height">
									<div class="banner_2_content">
										<div class="banner_2_category">Handmade</div>
										<div class="banner_2_title">Tas Rajut Handmade</div>
										<div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
										<div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
										<div class="button banner_2_button"><a href="shop.html">Explore</a></div>
									</div>
									
								</div>
								<div class="col-lg-8 col-md-6 fill_height">
									<div class="banner_2_image_container">
										<div class="banner_2_image"><img src="images/banner_product1.png" alt=""></div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>

				<!-- Banner 2 Slider Item -->
				<div class="owl-item">
					<div class="banner_2_item">
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col-lg-4 col-md-6 fill_height">
									<div class="banner_2_content">
										<div class="banner_2_category">Handmade</div>
										<div class="banner_2_title">Tas Rajut Handmade</div>
										<div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
										<div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
										<div class="button banner_2_button"><a href="shop.html">Explore</a></div>
									</div>
									
								</div>
								<div class="col-lg-8 col-md-6 fill_height">
									<div class="banner_2_image_container">
										<div class="banner_2_image"><img src="images/banner_product1.png" alt=""></div>
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Hot New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Hot New Arrivals</div>
							<ul class="clearfix">
								<li class="active">Featured</li>
								<li>Jewelry</li>
								<li>Fashion</li>
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
							<div class="col-lg-9" style="z-index:1;">

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/banner_product1.png" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
										<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

								<!-- Product Panel -->
								<div class="product_panel panel">
									<div class="arrivals_slider slider">

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
										<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

								<!-- Product Panel -->
								<div class="product_panel panel">
									<div class="arrivals_slider slider">

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
										<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>

										<!-- Slider Item -->
										<div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="product.html"><img src="images/" alt=""></a></div>
												<div class="product_content">
													<div class="product_price">IDR 125K</div>
													<div class="product_name"><div><a href="product.html">Tas Rajut Handmade</a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button"><a href="product.html">Add to Cart</a></button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount"></li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

							</div>

							<div class="col-lg-3">
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"><a href="product.html"><img src="images/banner_product1.png" alt=""></a></div>
										<div class="arrivals_single_content">
											<div class="arrivals_single_category"><a href="shop.html">Fashion</a></div>
											<div class="arrivals_single_name_container clearfix">
												<div class="arrivals_single_name"><a href="product.html">Tas Rajut</a></div>
												<div class="arrivals_single_price text-right">IDR 125K</div>
											</div>
											<div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<form action="#"><button class="arrivals_single_button"><a href="product.html">Add to Cart</a></button></form>
										</div>
										<div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
										<ul class="arrivals_single_marks product_marks">
											<li class="arrivals_single_mark product_mark product_new">new</li>
										</ul>
									</div>
								</div>
							</div>

						</div>
								
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Best Sellers -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Hot Best Sellers</div>
							<ul class="clearfix">
								<li></li>
								<li></li>
								<li></li>
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>

						<div class="bestsellers_panel panel active">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/banner_product1.png" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

							</div>
						</div>

						<div class="bestsellers_panel panel">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

							</div>
						</div>

						<div class="bestsellers_panel panel">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><a href="product.html"><img src="images/" alt=""></a></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category">Fashion</a></div>
											<div class="bestsellers_name"><a href="product.html">Tas Rajut Handmade</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">IDR 100K<span>IDR 125K</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

							</div>
						</div>
					</div>
						
				</div>
			</div>
		</div>
	</div>

	

	<!-- Reviews -->

	<div class="reviews">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="reviews_title_container">
						<h3 class="reviews_title">Latest Reviews</h3>
						<div class="reviews_all ml-auto"><a href="#">view all <span>reviews</span></a></div>
					</div>

					<div class="reviews_slider_container">
						
						<!-- Reviews Slider -->
						<div class="owl-carousel owl-theme reviews_slider">
							
							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="images/banner_product1.png" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Humaidi Al</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 day ago</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="images/" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Humaidi Al</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 day ago</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="images/" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Humaidi Al</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 day ago</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="images/" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Humaidi Al</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 day ago</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="images/" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Humaidi Al</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 day ago</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

							<!-- Reviews Slider Item -->
							<div class="owl-item">
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><img src="images/" alt=""></div></div>
									<div class="review_content">
										<div class="review_name">Humaidi Al</div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 day ago</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
							</div>

						</div>
						<div class="reviews_dots"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Recently Viewed -->

	<div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">Recently Viewed</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">
						
						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">
							
							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/banner_product1.png" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">IDR 100K<span>IDR 125K</span></div>
										<div class="viewed_name"><a href="#">Tas Rajut</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">IDR 125K</div>
										<div class="viewed_name"><a href="#">Kalung Handmade</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">IDR 125K</div>
										<div class="viewed_name"><a href="#">Kalung Handmade</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">IDR 125K</div>
										<div class="viewed_name"><a href="#">Kalung Handmade</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">IDR 275K<span>IDR 300K</span></div>
										<div class="viewed_name"><a href="#">Kalung Emas Murni</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">IDR 125K</div>
										<div class="viewed_name"><a href="#">Kalung Handmade</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Brands -->

	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">
						
						<!-- Brands Slider -->

						<div class="owl-carousel owl-theme brands_slider">
							
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_1.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_2.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_3.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_4.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_5.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_6.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_7.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_8.jpg" alt=""></div></div>

						</div>
						
						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="index.html">Anjungan</a></div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">(031) - 8894850</div>
						<div class="footer_contact_text">
							<p>9, Jalan Soekarno Hatta</p>
							<p>Lowokwaru, Malang 65141</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-1">
					<div class="footer_column">
						<div class="footer_title">Anjungan<br>Nusantara</div>
						<ul class="footer_list">
							<li><a href="shop.html">About Us</a></li>
							<li><a href="shop.html">Carrier</a></li>
							<li><a href="shop.html">News</a></li>
							<li><a href="shop.html">All Brands</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Buyer<br><br></div>
						<ul class="footer_list">
							<li><a href="shop.html">Cara Berbelanja</a></li>
							<li><a href="shop.html">Metode Pembayaran</a></li>
							<li><a href="shop.html">Lihat Promo</a></li>
							<li><a href="shop.html">Produk Terkini</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Seller<br><br></div>
						<ul class="footer_list">
							<li><a href="#">Berjualan di Anjungan.com</a></li>
							<li><a href="#">Seller Center</a></li>
							<li><a href="#">Super Seller</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Help<br><br></div>
						<ul class="footer_list">
							<li><a href="#">Hubungi Kami</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Customer Services</a></li>
							<li><a href="#">Returns / Exchange</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Product Support</a></li>
						</ul>
					</div>
				</div>	

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i  aria-hidden="true"></i> by <a href="https://instagram.com/masmed__" target="_blank">Masmed</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>