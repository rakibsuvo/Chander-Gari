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
		

                                        <!--=Content=-->

		<div class="content"><div class="ic"></div>
			<div class="container_12">
				<div class="grid_5">
					<h3>CONTACT INFO</h3>
					<div class="map">
						<div class="clear"></div>
						<figure>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1535.4003451953838!2d90.36987558675071!3d23.753867654441866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf51b82f50d3%3A0x3e37e452e46e2e5f!2sUnited+International+University+(Campus+2)!5e0!3m2!1sen!2s!4v1492676678967" allowfullscreen></iframe>
						</figure>
						<address>
							<p>House - 80, Road - 8/A,<br>
                               Satmasjid Road,<br>
                               Dhanmondi, Dhaka-1209,<br>
                               Bangladesh.
                            </p>
                            <p>01914001470<br>
                               +88(02) 9125913-6<br>
                               info@uiu.ac.bd
                            </p>

						</address>
					</div>
				</div>

				<?php

				include ('connect.php');

				if(isset($_POST['submitBtn'])){

					$sql = "INSERT INTO `contact`( `name`, `email`, `phone`, `message`) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['phn']."', '".$_POST['commentBody']."' )";
					$res = $conn->query($sql);
					mysqli_close($conn);
					
				
				if(!$res) {
	                echo "<script>
	                        alert('Message not sent.');
	                        window.location.href='contact.php';
	                    </script>";
            		}		
		            else{
		                echo "<script>
		                        alert('Congrats your message has been sent.');
		                        window.location.href='contact.php';
		                    </script>";    
		            }
		            }
		   			$conn = null;
		   		


				?>
				
				<div class="grid_6 prefix_1">
					<h3>GET IN TOUCH</h3>
					<div class="container">  
                         <form id="contact" action="" method="post">
                         <fieldset>
                         <input placeholder="Your name" type="text" name="name" tabindex="1" required autofocus>
                         </fieldset>
                         <fieldset>
                         <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
                         </fieldset>
                         <fieldset>
                         <input placeholder="Your Phone Number (optional)" type="tel" name="phn" tabindex="3" required>
                         </fieldset>
                         
                         <fieldset>
                         <textarea placeholder="Type your message here...." tabindex="5" name="commentBody" required></textarea>
                         </fieldset>
                         <fieldset>
                         <button name="submitBtn" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                         </fieldset>
                         </form>
                    </div>
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