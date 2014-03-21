<div class="content row">
	<div class="col-lg-12">
		<header class="clearfix">
			<nav class="navbar navbar-fixed-top navBar" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url() ?>"><span class="glyphicon glyphicon-remove"></span>
						<span class="glyphicon glyphicon-resize-horizontal"></span>
						<span class="glyphicon glyphicon-remove-sign"></span></a>
					</div><!-- branding -->

					<div class="nav navbar-nav navSearch">
						<form class="navbar-form" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search listings" id="nav-search">
							</div>
						</form>
					</div>
					<ul class="nav navbar-nav">
						<li class="btn-group btn-input dropdown">
							<button type="button" class="btn btn-default dropdown-toggle form-control navButton" data-toggle="dropdown">
								<span data-bind="label"><span data-bind="label" id="search-icon" class="glyphicon glyphicon-list-alt"></span><strong id="search-category"> Categories</strong></span>
							</button>
							<ul class="parentMenu category-dropdown dropdown-menu" role="menu">
								<li class="dropdown dropdown-submenu"><a href="#"><span class="glyphicon glyphicon-phone"></span> Electronics</a>
									<ul class="dropdown-menu">
										<li><a href="#">Cameras</a></li>
										<li><a href="#">Computers & Tablets</a></li>
										<li><a href="#">Monitors</a></li>
										<li><a href="#">Cell Phones & Accessories</a></li>
										<li><a href="#">Television</a></li>
										<li><a href="#">Audio & Accessories</a></li>
									</ul>
								</li>
								<li class="dropdown dropdown-submenu"><a href="#"><span class="glyphicon glyphicon-flag"></span> Sporting</a>
									<ul class="dropdown-menu">
										<li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-tags"></span> Fashion</a></li>
										<li><a href="#">Bikes</a></li>
										<li><a href="#">Sports Wear</a></li>
										<li><a href="#">Sports Gear</a></li>
										<li><a href="#">Excersise & Fitness Gear</a></li>
									</ul>
								</li>
								<li class="dropdown dropdown-submenu"><a href="#"><span class="glyphicon glyphicon-cutlery"></span> Home</a>
									<ul class="dropdown-menu">
										<li><a href="#">Home Improvement & Tools</a></li>
										<li><a href="#">Furniture</a></li>
										<li><a href="#">Beds & Bedding</a></li>
										<li><a href="#">Bath</a></li>
										<li><a href="#">Kitchen & Dining</a></li>
										<li><a href="#">Major Appliances</a></li>
										<li><a href="#">Lamps & Lighting</a></li>
										<li><a href="#">Rugs & Carpets</a></li>
									</ul>
								</li>
								<li class="dropdown dropdown-submenu"><a href="#"><span class="glyphicon glyphicon-resize-full"></span> Just Arrived</a>
									<ul class="dropdown-menu">
										<li><a href="#">Basic Necesseties</a></li>
										<li><a href="#">Cell Phone Plan Takeover</a></li>
										<li><a href="#">Furniture</a></li>
										<li><a href="#">Free</a></li>
									</ul>
								</li>
								<li class="dropdown dropdown-submenu"><a href="#"><span class="glyphicon glyphicon-tags"></span> Fashion</a>
									<ul class="dropdown-menu">
										<li><a href="#">Women</a></li>
										<li><a href="#">Men</a></li>
										<li><a href="#">Kids & Baby</a></li>
										<li><a href="#">Shoes</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Handbags & Accessories</a></li>
										<li><a href="#">Health & Beauty</a></li>
									</ul>
								</li>
								<li class="dropdown dropdown-submenu"><a href="#"><span class="glyphicon glyphicon-dashboard"></span> Vehicles</a>
									<ul class="dropdown-menu">
										<li><a href="#">Bikes</a></li>
										<li><a href="#">Cars & Trucks</a></li>
										<li><a href="#">Motorcyles & Gear</a></li>
										<li><a href="#">Scooters</a></li>
									</ul>
								</li>
								<li class="dropdown dropdown-submenu"><a href="#"><span class="glyphicon glyphicon-headphones"></span> Entertainment</a>
									<ul class="dropdown-menu">
										<li><a href="#">Books</a></li>
										<li><a href="#">DVDs & Movies</a></li>
										<li><a href="#">Music</a></li>
										<li><a href="#">Video Games & Consoles</a></li>
										<li><a href="#">Kid's Toys</a></li>
									</ul>
								</li>
								<li class="dropdown dropdown-submenu"><a href="#"><span class="glyphicon glyphicon-share-alt"></span> Other</a>
									<ul class="dropdown-menu">
										<li><a href="#">Baby</a></li>
										<li><a href="#">Art Supplies</a></li>
										<li><a href="#">Textbooks</a></li>
										<li><a href="#">Musical Instruments & Gear</a></li>
										<li><a href="#">Pet & Supplies</a></li>
										<li><a href="#">Tickets</a></li>
										<li><a href="#">Free</a></li>
										<li><a href="#">Uncategorized</a></li>
									</ul>
								</li>
							</ul>

						</li>
						<li class="btn-group btn-input dropdown">
							<button type="button" class="btn btn-default dropdown-toggle form-control navButton" data-toggle="dropdown">
								<span data-bind="label"><span data-bind="label" class="glyphicon glyphicon-map-marker"></span><span id="parent-location"> Location</span></span>
							</button>
							<ul class="parentMenu location-dropdown dropdown-menu">
								<li class="dropdown dropdown-submenu"><a href="#">Subway Line 1</a>
									<ul class="dropdown-menu" id="dropdown-list">
										<li><a href="#">Daegok</a></li>
										<li><a href="#">Jincheon</a></li>
										<li><a href="#">Wolbae</a></li>
										<li><a href="#">Sangin</a></li>
										<li><a href="#">Wolchon</a></li>
										<li><a href="#">Songhyeon</a></li>
										<li><a href="#">Seongdangmot</a></li>
										<li><a href="#">Daemyeong</a></li>
										<li><a href="#">Anjirang</a></li>
										<li><a href="#">Banyawol</a></li>
										<li><a href="#">Hyeonchungno</a></li>
										<li><a href="#">Yeungnam Univ. Hospital</a></li>
										<li><a href="#">Nat'l Univ. of Education</a></li>
										<li><a href="#">Myeongdeok</a></li>
										<li><a href="#">Banwoldang</a></li>
										<li><a href="#">Jungangno</a></li>
										<li><a href="#">Daegu Station</a></li>
										<li><a href="#">Chilseong Market</a></li>
										<li><a href="#">Sincheon</a></li>
										<li><a href="#">Gaksan</a></li>
										<li><a href="#">Dongdaegu Station</a></li>
										<li><a href="#">Keungogae</a></li>
										<li><a href="#">Ayanggyo</a></li>
										<li><a href="#">Dongchon</a></li>
										<li><a href="#">Haean</a></li>
										<li><a href="#">Bangchon</a></li>
										<li><a href="#">Yonggye</a></li>
										<li><a href="#">Yulha</a></li>
										<li><a href="#">Singi</a></li>
										<li><a href="#">Ansim</a></li>
									</ul>
								</li>
								<li class="dropdown dropdown-submenu"><a href="#">Subway Line 2</a>
									<ul class="dropdown-menu" id="dropdown-list">
										<li><a href="#">Munyang</a></li>
										<li><a href="#">Dasa</a></li>
										<li><a href="#">Daesil</a></li>
										<li><a href="#">Gangchang</a></li>
										<li><a href="#">Keimyung Univ.</a></li>
										<li><a href="#">Seongseo Industrial Complex</a></li>
										<li><a href="#">Igok</a></li>
										<li><a href="#">Yongsan</a></li>
										<li><a href="#">Jukjeon</a></li>
										<li><a href="#">Gamsam</a></li>
										<li><a href="#">Duryu</a></li>
										<li><a href="#">Naedang</a></li>
										<li><a href="#">Bangogae</a></li>
										<li><a href="#">Seomun Market</a></li>
										<li><a href="#">Banwoldang</a></li>
										<li><a href="#">Kyungpook Nat'l Univ. Hospital</a></li>
										<li><a href="#">Daegu Bank</a></li>
										<li><a href="#">Beomeo</a></li>
										<li><a href="#">Suseong-gu Office</a></li>
										<li><a href="#">Manchon</a></li>
										<li><a href="#">Damti</a></li>
										<li><a href="#">Yeonho</a></li>
										<li><a href="#">Daegu Grand Park</a></li>
										<li><a href="#">Gosan</a></li>
										<li><a href="#">Sinmae</a></li>
										<li><a href="#">Sawol</a></li>
										<li><a href="#">Jeongpyeong</a></li>
										<li><a href="#">Imdang</a></li>
										<li><a href="#">Yeungnam Univ.</a></li>
									</ul>
								</li>
								<li class="dropdown dropdown-submenu"><a href="#">Disctricts</a>
									<ul class="dropdown-menu">
										<li><a href="#">Jung-gu</a></li>
										<li><a href="#">Dong-gu</a></li>
										<li><a href="#">Dalseo-gu</a></li>
										<li><a href="#">Seo-gu</a></li>
										<li><a href="#">Nam-gu</a></li>
										<li><a href="#">Buk-gu</a></li>
										<li><a href="#">Suseong-gu</a></li>
									</ul>
								</li>
								<li class="dropdown dropdown-submenu"><a href="#">Military Bases</a>
									<ul class="dropdown-menu">
										<li><a href="#">Camp Henry</a></li>
										<li><a href="#">Camp George</a></li>
										<li><a href="#">Camp Walker</a></li>
									</ul>
								</li>
							</ul> <!-- location dropdown -->
						</li> <!-- location dropdown wrapper -->
						<li>
							<button type="submit" class="btn btn-default navButton">
								<span data-bind="label" class="glyphicon glyphicon-search"></span> Search!
							</button>
						</li>
					</ul>
				</nav> <!-- navbar -->
			</header>
		</div>
	</div>