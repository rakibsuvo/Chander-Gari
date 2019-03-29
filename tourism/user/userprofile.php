<!--=======================Session==========================-->
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


<html>
	<head>
		<title>Homepage</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/button.css">
		<link rel="stylesheet" href="css/newsearch.css">
		<link rel="stylesheet" href="css/dropdown.css">
		<link rel="stylesheet" href="css/profile.css">
		
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
<!--file upload <script>
		document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};</script>-->
		

	</head>
	<body>
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
								<li><a href="home.php">HOME</a></li>
								<li><a href="bd.php">BANGLADESH</a></li>
								<li><a href="trip.php">TRIP FINDER</a></li>
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
				</div>
			</div>
		</header>
		
		
<!--====================content========================-->
		<div class="content">
			<div class="container_12">
			<div class="grid_12">
				<div class="lcolumn">
					
					<div class="profile">
	        			<div class="profile-body">
	         					<div class="w3-center">
							         <p><img src="images/avatar.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
							         <hr>
							         <p><?php echo $name; ?></p>
							         <br>
							         <p><?php echo $email; ?></p>
							         <br>
							         <p></p>
							         <br>
		    					</div>
	       				</div>
	      			</div>
				</div>
				<br>
				<br>
				
                <div class="rcolumn">
                <div class="w3-col m12">
			          <div class="profile">
			            <div class="post-padding">
			            <form id="blogpost" action="" method="post" enctype="multipart/form-data">
			              <h9 class="post-opacity">Share your feel</h9>
					              <!-- <form id="blogpost" action="" method="post"> -->

					              		<div class="field">
					                         <textarea  name="postBody" rows="6" cols="65"></textarea>
					                    </div>
					                    
					              <!-- </form> -->
					              <select id="catagory" name="place">
									      <option value="hill track">hill track</option>
									      <option value="sea beach">sea beach</option>
									      <option value="forest">forest</option>
									    </select>
					              <!-- <input type="file" class="buttonCustom buttonCustom2" name="image" /> -->
								  <input id="aa" type="file" name="image" >
								  <button type="submit" class="buttonpost button2" name="submitPost">Post</button>
								  
								
								<!--<div class="fileUpload btn btn-primary">
								    <span>Upload</span>
								    <input type="file" class="upload" />
								</div>-->
								</form>
						</div>
			          </div>
        		</div>

        		<?php

				include ('connect.php');

				if(isset($_POST['submitPost'])){

					// if(getimagesize($_FILES['image']['tmp_name']) == false){
					// 	$image = null;
					// }
					// else{
					$image = addslashes($_FILES['image']['tmp_name']);
			          //$image = addslashes($_FILES['image']['name']);
			        $image = file_get_contents($image);
			        $image = base64_encode($image);
			    //}
			    $timestamp = time()+3600*6;
			      $dt = gmdate("Y/m/d H:i:s",$timestamp);


				$sql = "INSERT INTO `post`(`u_id`, `body`, `category`, `image`, `time`) VALUES ('$id','".$_POST['postBody']."', '".$_POST['place']."', '$image', '$dt')";

				$res = $conn->query($sql);
				mysqli_close($conn);
				if(!$res) {
	                echo "<script>
	                        alert('Not uploaded.');
	                        window.location.href='userprofile.php';
	                    </script>";
            		}		
		            else{
		                echo "<script>
		                        alert('Post uploaded.');
		                        window.location.href='userprofile.php';
		                    </script>";    
		            }
		   			$conn = null;
		   		}

		   		
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
		   		$q = "SELECT * FROM `post` WHERE u_id = '$id' order by time DESC ";
    			$re = $conn->query($q);
    			$r = mysqli_fetch_assoc($re);
				
    			while($r != null){
        		echo '
        			<div class="post-profile">
			        <span class="post-time">'.$r['time'].'</span>
			        <div class="username">'.$name.'</div><br>
			        
			        <p>'.$r['body'].'</p>
			        <br>
			          
			            <div clas="img-bottom">
			              <img src="data:image;base64,' .$r['image'].'" style="width:100%"  class="w3-margin-bottom"  alt="" > 
			            </div>
			            
			        
			        <br>
			       
			        <form action = "" method = "post">
				        <textarea  rows="6" cols="70" name= "commentBody" autocomplete="off"> </textarea><br>
				        <button type="submit" class="button button1" name= "likeBtn">Like</button>
				        <button type="submit" class="button button2" name="Btn">Comment</button>
				        
				        <input type= "hidden" name="postId" value="'.$id.'" >
				        <input type= "hidden" name="commId" value="'.$r['id'].'" >

				       
			        </form>
			        ';
			        
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

     			 
     			echo '</div>';
     			 $r = mysqli_fetch_assoc($re);
     			}

     			 ?>
     			 
      

                </div>
                </div>

			</div>

		</div>




<!--=======================footer======================-->
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