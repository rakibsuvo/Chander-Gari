<!DOCTYPE html>
<html>
	<head>
		<title>Homepage</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/button.css">
		<link rel="stylesheet" href="css/newsearch.css">
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
	<body>
<!--==============================header=================================-->
		<div class="triphead">
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="all_menu">
							<ul class="sf-menu">
								<li><a href="home.php">HOME</a></li>
								<li><a href="bd.php">BANGLADESH</a></li>
								<li class="current"><a href="trip.php">TRIP FINDER</a></li>
								<li><a href="blog.php">COMMUNITY</a></li>
								<li><a href="contact.php">CONTACTS</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="home.php"></a>
					</h1>
					<div class="grid_12">
					 	
					 	<div class="clear cl1"></div>
					    <div class="clear cl1"></div>
					    <div class="clear cl1"></div>
					    <div class="clear cl1"></div>
					    <div class="trip_heading">
						<h4>find your perfect time and place with us</h4>
						<a href="#box"><button class="tripbutton tripbutton2">click</button></a>
						</div>

					</div>
				</div>
			</div>
		</div>
		
		

		<div class="content">
			<div class="container_12">
				<div class="grid_12">

						<div class="clear cl1"></div>
					    <div class="clear cl1"></div>

						<div id="box">
			  				<div class="searching">
			  				<form action="" method="POST">
			    				<input type="search" id="search" name="search" placeholder="Search..." autocomplete="off" />
			    				<button class="icon" name="go" >go<i class="fa fa-search"></i></button>

			    				<div id="searchInContainer">
			                	<input type="radio" name="check" value="month" id="searchSite" checked />
			               		<label for="searchSite" id="siteNameLabel">month</label>
			                
			                	<input type="radio" name="check" value="spot_name" id="searchWeb" />
			                	<label for="searchWeb">place</label>
								</div>
								</form>
			  				</div>
						</div>
						<?php


							include('connect.php');

							if(isset($_POST['go'])){

								$search = $_POST['search'];
								$radio = $_POST['check'];

								if($radio == "month"){
									$sql = "SELECT * FROM `tourist_spot` WHERE month like '%$search%'";
									$result = $conn->query($sql);
					        		$row = mysqli_fetch_assoc($result);
					        		if($row != null){
					        		while($row != null){

					        			if($row['spot_id'] == 1 || $row['spot_id'] == 2){
					        				echo '<p><a href= "seabeach.php">'.$row['spot_name'].'  </a></p>';
					        			}
					        			else if($row['spot_id'] == 3 || $row['spot_id'] == 4){
					        				echo '<p><a href= "hilltrack.php">'.$row['spot_name'].'  </a></p>';
					        			}
					        			else if($row['spot_id'] == 5 ){
					        				echo '<p><a href= "mangrove.php">'.$row['spot_name'].'  </a></p>';
					        			}

					        			
					        			$row = mysqli_fetch_assoc($result);
					        		}
					        	}
					        	else
					        	{
					        		 echo "<script>
					                        alert('No match found.');
					                        window.location.href='trip.php';
					                    </script>";
					        	}
								}
								else{
									$sql = "SELECT * FROM `tourist_spot` WHERE spot_name like '%$search%'";
									$result = $conn->query($sql);
					        		$row = mysqli_fetch_assoc($result);
					        		if($row != null){
					        		while($row != null){

					        			if($row['spot_id'] == 1 || $row['spot_id'] == 2){
					        				echo '<p><a href= "seabeach.php">'.$row['spot_name'].'  </a></p>';
					        			}
					        			else if($row['spot_id'] == 3 || $row['spot_id'] == 4){
					        				echo '<p><a href= "hilltrack.php">'.$row['spot_name'].'  </a></p>';
					        			}
					        			else if($row['spot_id'] == 5 ){
					        				echo '<p><a href= "mangrove.php">'.$row['spot_name'].'  </a></p>';
					        			}
					        			$row = mysqli_fetch_assoc($result);
					        		}
					        	}
					        	else
					        	{
					        		 echo "<script>
				                        alert('No match found.');
				                        window.location.href='userprofile.php';
				                    </script>";
					        	}
								}

							}




							?>

				</div>
			</div>

		</div>

<!--==============================footer================================-->

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