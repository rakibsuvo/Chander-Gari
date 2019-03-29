
<?php


	session_start();
	
	if(!empty($_SESSION['type']=='user')){
		//echo "hello";
	}else{
		header('location: ../index.php');
	}

	$u_email = $_SESSION['email'];
	include("connect.php"); 
    
    $query = "SELECT * FROM `users` WHERE email = '$u_email'";
    $result = $conn->query($query);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    
    $email = $row['email'];
?>


<html>
	<head>
		<title><?php echo $name; ?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/dropdown.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
	
		<script>
			$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
				});
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		

	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		<header>
							<div class="dropdown">
									<img src="images/avatar.png" class="userimg" >
	  								<div class="dropdown-content">
									  	<a href="userprofile.php">profile</a>
									    <a href="../logout.php">Logout</a>
									    <a href="#">settings</a>
									    
									</div>
							</div>
			<div class="container_12">
								
				<div class="grid_12">

					<div class="menu_block">
						<nav class="all_menu">
							<ul class="sf-menu">
								<li class="current"><a href="home.php">HOME</a></li>
								<li><a href="bd.php">BANGLADESH</a></li>
								<li><a href="trip.php">TRIP FINDER</a></li>
								<li><a href="blog.php">COMMUNITY</a></li>
								<li><a href="contact.php">CONTACTS</a></li>	

							</ul>
							
						</nav>
						<div class="clear"></div>
					</div>
					

				<div class="grid_12">
					<h1>
						<a href="home.php"></a>
					</h1>
				</div>
			</div>
		</header>
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="images/slide-bon.jpg">
					<div class="caption fadeIn">
						<h2>SUNDARBAN</h2>
						<a href="mangrove.php">LEARN MORE</a>
					</div>
				</div>
				<div data-src="images/slide-cox.jpg">
					<div class="caption fadeIn">
						<h2>COX'S BAZAR</h2>
						<a href="seabeach.php">LEARN MORE</a>
					</div>
				</div>
				<div data-src="images/slide-bandor.jpg">
					<div class="caption fadeIn">
						<h2>BANDARBAN</h2>
						<a href="hilltrack.php">LEARN MORE</a>
					</div>
				</div>
				<div data-src="images/slide-sylhet.jpg">
					<div class="caption fadeIn">
						<h2>SYLHET</h2>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
			</div>
		</div>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<img src="images/ban_img1.jpg">
						<div class="label">
							<div class="title">FILL THE HILL</div>
							<a href="hilltrack.php">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/cox.jpg">
						<div class="label">
							<div class="title">ELEGANT SEA</div>
							<a href="seabeach.php">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/shundarban.jpg">
						<div class="label">
							<div class="title">MIGHTY MANGROVE</div>
							<a href="mangrove.php">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/sylhet.jpg">
						<div class="label">
							<div class="title">land of tea</div>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/arc.jpg">
						<div class="label">
							<div class="title">Archeology</div>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="images/village.jpg">
						<div class="label">
							<div class="title">village beauty</div>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
				<div class="clear"></div>

				<div class="grid_6">
				<h3>Videos</h3>
				     <iframe width="460" height="315" src="https://www.youtube.com/embed/QNUSIOMb6vI" frameborder="0" allowfullscreen></iframe> 
				</div>

				<div class="grid_5">
				<div class="grid_5 prefix_1">
					<h3>Welcome</h3>
					<img src="images/lolo.png" alt="" class="img_inner fleft">
					<div class="extra_wrapper">
						<p style="text-align: justify;"><span>Ever decided to plan a trip on holidays, but spent a lot of time finding best travel deals?</span> </p>
						


					</div>
					<br>
					<p style="text-align: justify;"><span>want to go Cox's bazar, Sylhet, Sundarban, Bandarban, Rangamati, or any other popular places in Bangladesh, but having trouble finding accommodations, transportation, foods, attractions, and activities?
					Well, I've faced the same problems too. And I decided to help fix it. So I've created chandergari.com, an online travel website providing all kind of info about trip.We provide information about places where to visit, where to eat and things to do, along with travel related blogs, news and tips from fellow travellers. Chandergari.com is one handy guide for travellers, so start planning for your next holiday through us now!</span></p>
					
					
				</div>
				</div>
				
				
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="#" class="fa fa-facebook"><img src="images/fb.png"></a>
						<a href="#" class="fa fa-twitter"><img src="images/twt.png"></a>
						<a href="#" class="fa fa-google-plus"><img src="images/gplus.png"></a>
					</div>
					<div class="myname">
						Created by Suvo
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>

