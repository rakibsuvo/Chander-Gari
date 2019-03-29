<?php
						session_start();
						    include("connect.php");
						if(isset($_POST['login'])){
							$email=$_POST['u_email'];
							$pass=$_POST['u_pass'];
								$password = $pass;
						  $query = "SELECT * FROM `users` WHERE '$email'= email AND '$password'= password ";
						  $result = $conn->query($query);
						  $row = mysqli_fetch_assoc($result);
						  $type = $row['type'];
						  if (mysqli_num_rows($result) > 0) {
						      
							if( $type == 'admin'){
						      $_SESSION['email'] = $row['email'];
						      $_SESSION['password'] = $row['password'];
						      $_SESSION['type'] = 'admin';
						      header('location: admin/admin_home.php');
						    }	
						    elseif($type == 'user'){
						      $_SESSION['email'] = $row['email'];
						      $_SESSION['password'] = $row['password'];
						      $_SESSION['type'] = 'user';
						      
						        header('location: user/userprofile.php');
						      
						    }                     
							   
						  } else {
						    echo "<script>
						            alert('invalid user email or password ');
						            window.location.href='blog.php';
						          </script>";
						    }
						}
						?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Community</title>
		
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/button.css">
		<link rel="stylesheet" href="user/css/profile.css">
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
						   		$q = "SELECT * FROM `post`,users where post.u_id = users.user_id order by time DESC ";
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
							              <img src="data:image;base64,' .$r['image'].'" style="width:100%"  class="w3-margin-bottom"  alt="" > 
							            </div>
							            
							        
							        <br>
							       
							        
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
				
					<div class="clear cl1"></div>
					<h6>Join us now</h6>
					<br>
						<div class="w3tab">
                             <button class="tablinks" onclick="openCity(event, 'London')">login</button>
                             <button class="tablinks" onclick="openCity(event, 'Paris')">signup</button>
                             
                    	</div>

                    


                    	<div id="London" class="w3tabcontent">
                       			<div class="grid_5">
                       				<form action="" method="post">
									  <div class="container">
										    <label><b>Email</b></label>
										    <input type="email" placeholder="Enter Email" name="u_email" required>

										    <label><b>Password</b></label>
										    <input type="password" placeholder="Enter Password" name="u_pass" required>
									        
										    <button type="submit" name = "login">Login</button>
										    <input type="checkbox" checked="checked"> Remember me
									  </div>

									  <div class="container" style="background-color:#f1f1f1">
										    <!-- <button type="button" class="logcancelbtn">Cancel</button> -->
										    
									  </div>
									</form>
								</div>  <!--====end grid5===-->
						</div> <!--====end login=====-->



					<?php
				       include("connect.php");
				       //echo "Database Connected";
				      

				    if(isset($_POST['signup'])){
				     // echo "\nSignup prassed";
				        if(($_POST['password']==$_POST['con_pass'])){

				          //$Username = $_POST['name'];

				          // $image = addslashes($_FILES['image']['tmp_name']);
				          // //$image = addslashes($_FILES['image']['name']);
				          // $image = file_get_contents($image);
				          // $image = base64_encode($image);
				          
				         
				            
				          echo  $_POST['name']."', '".$_POST['email']."', '".$_POST['password'];

				          

				        $sql = "INSERT INTO `users` (`name`, `email`, `password`,type)
				        VALUES ( '".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."','user')";
				        
				        ///////
				        $res = $conn->query($sql);
				        mysqli_close($conn);
				            if(!$res) {
				                echo "<script>
				                        alert('Not registered. May br registered.');
				                        window.location.href='blog.php';
				                    </script>";
				            }
				            else{
				                echo "<script>
				                        alert('Welcome! you are now registered.');
				                        window.location.href='blog.php';
				                    </script>";    
				            }
				            $conn = null;
				        }
				        else{
				             echo "* Passwords Don't Match";
				        }
				        echo $error;
				    }

				 ?>

						<div id="Paris" class="w3tabcontent">
                       			<div class="grid_5">
                       				<form action="" method="post" style="border:1px solid #ccc">
										  <div class="container">
										    <label><b>Name</b></label>
										    <input type="text" placeholder="Enter Name" name="name" required>
										    <label><b>Email</b></label>
										    <input type="email" placeholder="Enter Email" name="email" required>
    										
										    <label><b>Password</b></label>
										    <input type="password" placeholder="Enter Password" name="password" required>

										    <label><b>Repeat Password</b></label>
										    <input type="password" placeholder="Repeat Password" name="con_pass" required>
										    <!-- <input type="checkbox" checked="checked"> Remember me -->
										    

										    <div class="clearfix">
										    	<center>
											      <!-- <button type="button" class="cancelbtn">Cancel</button> -->
											      <button type="submit" name="signup" class="signupbtn">Sign Up</button>
											      <!-- <input type="text" placeholder="Enter Name" name="name" required> -->
											    </center>
										    </div>
										  </div>
									</form>
								</div>  <!--====end grid5===-->
						</div> <!--====end sign up=====-->

					
                   
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