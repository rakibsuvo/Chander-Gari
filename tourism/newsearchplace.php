<!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/newform.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
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
			
				});
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		

	</head>
	<body>
                         
                         <!--=header=-->

		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="all_menu">
							<ul class="sf-menu">
								<li><a href="home.php">HOME</a></li>
								<li><a href="bd.php">BANGLADESH</a></li>
								<li><a href="trip.php">TRIP FINDER</a></li>
								<li><a href="blog.php">COMMUNITY</a></li>
								<li class="current"><a href="contact.php">CONTACTS</a></li>
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

<!--============================content============================-->


<div class="content">
			<div class="container_12">
				<div class="grid_12">

				<?php

include('connect.php');

$rowId = $_GET['rowId'];

$sql = "SELECT * FROM `tourist_spot` WHERE spot_id = '$rowId'";

$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
 while($row != null){

	echo '<div id="London" class="tabcontent">
                       <div class="grid_11">
                        
						<h3>cox\'s bazar</h3>

						
						<p style="text-align: justify;"><span style="color: #000000;"></span></p>
                      
                        <h4>place of attraction</h4>
                        <img src="images/inani.jpg" alt="" class="img_inner fleft">
					    <div class="extra_wrapper">
						<h6>inani beach</h6>
						<br>
						<p style="text-align: justify;"><span>
						
            	</span> </p>
						 <div class="clear cl1"></div>
						 <img src="images/kolatoli.jpg" alt="" class="img_inner fleft">
						 <h6>kolatoli beach</h6>
						 <br>
						<p style="text-align: justify;"><span>Kalatoli point,Cox\'s Bazar<br><br>
                        Kolatoli beach is another attractive beach for the tourist. Every year different ages people come here to take the real taste of taking sea-bath. Visitor\'s can taking sea bath, driving sea ski boat, can take fresh and apealing various kind of sea foods. Walking beside the sea shore on moonlit night is always pleasent for all aged tourist. A slow paced life - most work happens in the morning and evening, whereas midday is reserved for drying rice and fish.</span> </p>

                        <div class="clear cl1"></div>
						 <img src="images/laboni.jpg" alt="" class="img_inner fleft">
						 <h6>Laboni beach</h6>
						 <br>
						<p style="text-align: justify;"><span>Laboni Point, Cox\'s Bazar Beach<br><br>
                        Laboni Beach is the main beach of Cox\'s Bazar. At here we can easily enjoy the scenic beauty of Bay of Bengal. Its a place for enjoyment, many people come here including the foreigners. The beach is well appreciated during sunsets and sunrise, where people can witness the sea as it changes its colors twice in a day.Visitors can sunbathe, surf, jog, cycle, and swim. It is best for swimming and relaxation.It is a nice place for our tourism. So, come &lets enjoy the beauty of Laboni Beach.</span> </p>

                        <div class="clear cl1"></div>
						 <img src="images/him.jpg" alt="" class="img_inner fleft">
						 <h6>Himchori Waterfall</h6>
						 <br>
						<p style="text-align: justify;"><span>Cox\'s Bazar Marine Dr, Cox\'s Bazar<br><br>
                        There are Many places to visit for the tourists in Cox’s Bazar. One of them is Himchari. Himchari is famous for warm water waterfall.The wanderfill waterfall of Himchari is a very attractive scene.The waterfall from the green hill is relatively marvelous to look at. Whatever, in the winter it Quails. In the rainy season in it is really marvelous and full waterfall could be enjoyed. Here you get beautiful hilltop resort centre where you can stay for relaxing and can enjoy the shore of the Bay of Bengal.</span> </p>

                        <div class="clear cl1"></div>
						 <img src="images/martin.jpg" alt="" class="img_inner fleft">
						 <h6>Saint Martins Island (Narical Gingira)</h6>
						 <br>
						<p style="text-align: justify;"><span>Saint martin, cox\'s bazar<br><br>
                        St. Martin Island- The only Coral Island of Bangladesh is located in the Bay of Bengal surrounded by huge black stone.There are also various type of shruips, lobstar, King crab and rare species of giant crab can be found in an ideal habitat. This island is specially attracted the natural scientists to be a safe refuge for hatching of different type of sea turtles like olive ridley turtle, Hocksbill turtle, leatherback turtle and loggerhead turtle.</span> </p>
					   </div>
				      </div>
			
                    </div>';
	$row = mysqli_fetch_assoc($result);

}
?>


				</div>
			</div>
</div>





                         <!--footer-->

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


