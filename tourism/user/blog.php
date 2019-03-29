<!DOCTYPE html>
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
    $id = $row['user_id'];
    $name = $row['name'];
    
    $email = $row['email'];
?>
<html lang="en">
	<head>
		<title>Community</title>
		
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/button.css">
		<link rel="stylesheet" href="css/profile.css">
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

						   			if(isset($_POST['Btn'])){
						   				// echo $_POST['com'];
						   				//echo $_POST['commentBody'];
						   			
						   				if($_POST['commentBody'] != ""){


						   					$timestamp = time()+3600*6;
								      		$dt = gmdate("Y/m/d H:i:s",$timestamp);


											$sqlComment = "INSERT INTO `comments`(`post_id`, `u_id`, `body`, `time`) VALUES ('".$_POST['commId']."', '$id','".$_POST['commentBody']."' , '$dt')";

											$resC = $conn->query($sqlComment);
											mysqli_close($conn);
											$conn = null;
						   				}

						   			}

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
							       
							        <form action = "" method = "post">
								        <textarea  rows="6" cols="70" name= "commentBody"> </textarea><br>
								        <button type="button" class="button button1" name= "likeBtn">Like</button>
								        <button type="submit" class="button button2" name="Btn">Comment</button>
								        
								        
								        <input type= "hidden" name="commId" value="'.$r['id'].'" />

								       
							        </form>';

							        include('connect.php');

							        $sqlCom = "SELECT * FROM `comments`, users WHERE comments.u_id = users.user_id and post_id = '".$r['id']."' order by time DESC ";
							        $ressC= $conn->query($sqlCom);
							        $rowC = mysqli_fetch_assoc($ressC);
							        while($rowC != null){
							        echo '
							       
							        <div >
							          <h4>'.$rowC['name'].' </h4><small>'.$rowC['time'].'</small>
							          <p>'.$rowC['body'].'</p>
							          <br>
							        </div>';
							        $rowC = mysqli_fetch_assoc($ressC);
							        }

				     			 
					     			
							        
							        echo '</div>
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

					<!-- <h6>Join us now</h6> -->
					<br>
					

                    	<!-- <a href="../logout.php">Logout</a> -->
                    	<div id="London" class="w3tabcontent">
                       			<div class="grid_5">
                       				<form action="/action_page.php">
									  <div class="container">
										    <label><b>Username</b></label>
										    <input type="text" placeholder="Enter Username" name="uname" required>

										    <label><b>Password</b></label>
										    <input type="password" placeholder="Enter Password" name="psw" required>
									        
										    <button type="submit">Login</button>
										    <input type="checkbox" checked="checked"> Remember me
									  </div>

									  <div class="container" style="background-color:#f1f1f1">
										    <button type="button" class="cancelbtn">Cancel</button>
										    <span class="psw"><a href="#">Forgot password?</a></span>
									  </div>
									</form>
								</div>  <!--====end grid5===-->
						</div> <!--====end login=====-->

						<div id="Paris" class="w3tabcontent">
                       			<div class="grid_5">
                       				<form action="" method="POST" style="border:1px solid #ccc">
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
											    </center>
										    </div>
										  </div>
									</form>
								</div>  <!--====end grid5===-->
						</div> <!--====end sign up=====-->

					<?php
				       include("connect.php");
				       //echo "Database Connected";
				      

				    if(isset($_POST['signUp'])){
				     // echo "\nSignup prassed";
				        if(($_POST['password']==$_POST['con_pass'])){

				          $Username = $_POST['name'];

				          // $image = addslashes($_FILES['image']['tmp_name']);
				          // //$image = addslashes($_FILES['image']['name']);
				          // $image = file_get_contents($image);
				          // $image = base64_encode($image);
				          
				         
				            
				          

				          

				        $sql = "INSERT INTO `users`(`name`, `email`, `password`)
				        VALUES ( '$Username', '".$_POST['email']."', '".$_POST['password']."')";
				        
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
				            $passErr = "* Passwords Don't Match";
				        }
				        echo $error;
				    }

				 ?>
                   
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