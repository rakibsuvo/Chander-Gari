<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Community</title>
		
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="user/css/button.css">
		<link rel="stylesheet" href="user/css/profile.css">
		<link rel="stylesheet" href="css/dropdown.css">
		<link rel="stylesheet" href="css/w3login.css">
		<link rel="stylesheet" href="css/w3signup.css">
		<link rel="stylesheet" href="css/w3tab.css">
		<script src="js/jquery.js"></script>
		<script src="js/w3tab.js"></script>
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
                       
      <!--=====================header======================-->

		<header>
		    				
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="all_menu">
							<ul class="sf-menu">
								<li><a href="home.php">HOME</a></li>
								<li><a href="bd.php">BANGLADESH</a></li>
								<li><a href="trip.php">TRIP FINDER</a></li>
								<li class="current"><a href="blog.php">COMMUNITY</a></li>
								<li><a href="contact.php">CONTACTS</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="home.php">
							
						</a>
					</h1>
				</div>
			</div>
		</header>
		
                    
                    <!--====================================Content=========================================-->

		<div class="content"><div class="ic"></div> 
			<div class="container_12">
				<div class="grid_7">
					<h3>Recent Posts</h3>
									<?php
									include('connect.php');
						   		$q = "SELECT * FROM `post`,users where post.u_id = users.user_id and category = '".$_GET['cat']."' order by time DESC ";
				    			$re = $conn->query($q);
				    			$r = mysqli_fetch_assoc($re);
								
				    			while($r != null){
				        		echo '
				        			<div class="post-profile">
							        <span class="post-time">'.$r['time'].'</span>
							        <div class="username">'.$r['name'].'</div><br>
							        
							        <p>'.$r['body'].'</p>
							        <br>
							          
							            <div clas="img-bottom">
							              <img src="data:image;base64,' .$r['image'].'" style="width:100%" alt="Northern Lights" class="w3-margin-bottom"  alt="" > 
							            </div>
							            
							        
							        <br>
							       
							        <form action = "" method = "post">
								        <textarea  rows="6" cols="70" name= "commentBody"> </textarea><br>
								        <button type="button" class="button button1" name= "likeBtn">Like</button>
								        <button type="button" class="button button2" name="Btn">Comment</button>
								        
								        <input type= "hidden" name="postId" value="'.$r['id'].'"
								        <input type= "hidden" name="commId" value="'.$r['id'].'" />

								       
							        </form>
							        <br>
							        <br>
							        </div>
							        <hr>';
							        $r = mysqli_fetch_assoc($re);
							    }
							    ?>
				</div>
				<div class="grid_3 prefix_1">
					<h3>Catagories</h3>
					<ul class="list">
						<li><a href="category.php?cat=hill track">Hill Track </a></li>
						<li><a href="category.php?cat=sea beach">Sea beach </a></li>
						<li><a href="#">Tea estate </a></li>
						<li><a href="category.php?cat=forest">Forest </a></li>
						<li><a href="#">Archeological Place</a></li>
		
					</ul>
				</div>
				
            </div>
		</div>

                         <!--=footer=-->

		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="https://www.facebook.com" class="fa fa-facebook"><img src="images/fb.png"></a>
						<a href="#" class="fa fa-twitter"><img src="images/twt.png"></a>
						<a href="#" class="fa fa-google-plus"><img src="images/gplus.png"></a>
					</div>
					<div class="myname">
						Created by suvo
					</div>
				</div>
			</div>
		</footer>
		
	</body>
</html>