<!DOCTYPE html>
<?php
include("connect.php"); 
?>
<!--=====================PHP Connection================-->
<html>
	<head>
		<title>Homepage</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/style.css">
		<!--Tab-->
		<link rel="stylesheet" href="css/tab.css">
		<link rel="stylesheet" href="css/button.css">
		<script src="js/tab.js"></script>
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
						<a href="home.html"></a>
					</h1>
				</div>
			</div>
		</header>
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="images/bslide.jpg">
					<div class="caption fadeIn">
						
						
					</div>
				</div>
				<div data-src="images/bslide1.jpg">
					<div class="caption fadeIn">
						
					</div>
				</div>
				<div data-src="images/bslide2.jpg">
					<div class="caption fadeIn">
						
					</div>
				</div>
				<div data-src="images/bslide3.jpg">
					<div class="caption fadeIn">
						
					</div>
				</div>
			</div>
		</div>


                               <!--=Content=-->


		<div class="content">
			<div class="container_12">
				<div class="grid_12">
				    <!--    <div class="clear cl1"></div>
						<h3>cox's bazar</h3>

						<img src="images/seabeach-cox.jpg" alt="" class="img_inner fleft">
					<div class="extra_wrapper">
						<p style="text-align: justify;"><span style="color: #000000;">Cox's Bazar sea beach, the world's longest natural sandy sea beach with its incredible 120 km length. It is the most visited tourist destination in Bangladesh. Every year millions of foreigner and local people come here to enjoy their holidays. You will enjoy sunrise and sunset view very much in this beach because the sea changes color in those time. Warm shark free water is best for swimming and sunbathing. You will enjoy surfing, jogging, cycling in this beach too. It is always crowded by tourists. Near the beach you will find there are hundreds of shops selling souvenirs and beach accessories to the tourists.<br>Here you will find many Buddhist Temples and tribes, colorful Pagodas and delightful sea-food which make Cox’s bazar so special.</span></p>
						-->

					<div class="hilltab">
                             <button class="tablinks" onclick="openCity(event, 'London')">Bandarban</button>
                             <button class="tablinks" onclick="openCity(event, 'Paris')">Rangamati</button>
                             <button class="tablinks" onclick="openCity(event, 'Tokyo')">Go & Stay</button>
                    </div>

                    <div id="London" class="tabcontent">
                       	<div class="grid_11">
                        
									<h3>Bandarban</h3>
									<p style="text-align: justify;"><span style="color: #000000;">
										<?php
							    
							    				$query = "SELECT * FROM `tourist_spot` WHERE spot_id=3";
							        			$result = $conn->query($query);
							        			$row = mysqli_fetch_assoc($result);
							        			
							        			while($row != NULL)
							        			{
								        			$name = $row['info'];
								        			echo"$name";
								                    
								        			$row = mysqli_fetch_assoc($result);
						        				}
				        				?></span>
		        					</p>
                      
			                        <h4>place of attractions</h4>
			                        <img src="images/naf.jpg" alt="" class="img_inner fleft">
								    <div class="extra_wrapper">
									<h6>Nafakhum</h6>
									<br>
									<p style="text-align: justify;"><span>
											<?php
					         
							    				$query = "SELECT * FROM `attraction` WHERE att_name='nafakhum' ";
							        			$result = $conn->query($query);
							        			$row = mysqli_fetch_assoc($result);
							        			
							        			while($row != NULL)
							        			{
								        			$name = $row['att_info'];
								        			echo"$name";
								    				$row = mysqli_fetch_assoc($result);
							        			}
				            				?></span> 
		            				</p>
									<div class="clear cl1"></div>
									<img src="images/boga.jpg" alt="" class="img_inner fleft">
									<h6>Boga Lake</h6>
									<br>
									<p style="text-align: justify;"><span>
										<?php
			         
							    				$query = "SELECT * FROM `attraction` WHERE att_name='boga' ";
							        			$result = $conn->query($query);
							        			$row = mysqli_fetch_assoc($result);
							        			
							        			while($row != NULL)
							        			{
								        			$name = $row['att_info'];
								        			echo"$name";
								    				$row = mysqli_fetch_assoc($result);
							        			}
			            				?></span> 
		            				</p>

			                        <div class="clear cl1"></div>
									<img src="images/nil1.jpg" alt="" class="img_inner fleft">
									<h6>Nilgiri</h6>
									<br>
									<p style="text-align: justify;"><span><?php
			         
							    				$query = "SELECT * FROM `attraction` WHERE att_name='nilgiri' ";
							        			$result = $conn->query($query);
							        			$row = mysqli_fetch_assoc($result);
							        			
							        			while($row != NULL)
							        			{
								        			$name = $row['att_info'];
								        			echo"$name";
								    				$row = mysqli_fetch_assoc($result);
							        			}
			            				?></span> 
		            				</p>

			                        <div class="clear cl1"></div>
									 <img src="images/nil2.jpg" alt="" class="img_inner fleft">
									 <h6>Nilachol</h6>
									 <br>
									<p style="text-align: justify;"><span><?php
			         
							    				$query = "SELECT * FROM `attraction` WHERE att_name='nilachol' ";
							        			$result = $conn->query($query);
							        			$row = mysqli_fetch_assoc($result);
							        			
							        			while($row != NULL)
							        			{
								        			$name = $row['att_info'];
								        			echo"$name";
								    				$row = mysqli_fetch_assoc($result);
							        			}
			            				?></span> 
		            				</p>

			                        <div class="clear cl1"></div>
									 <img src="images/gold.jpg" alt="" class="img_inner fleft">
									 <h6>Golden Temple (Narical Gingira)</h6>
									 <br>
									<p style="text-align: justify;"><span><?php
			         
							    				$query = "SELECT * FROM `attraction` WHERE att_name='goldentemple' ";
							        			$result = $conn->query($query);
							        			$row = mysqli_fetch_assoc($result);
							        			
							        			while($row != NULL)
							        			{
								        			$name = $row['att_info'];
								        			echo"$name";
								    				$row = mysqli_fetch_assoc($result);
							        			}
			            				?></span> 
		            				</p>
					   </div>
			      	</div>
			
                    </div>

                    <div id="Paris" class="tabcontent">
                           <div class="grid_11">
                                <h3>Rangamati</h3>
                                <p style="text-align: justify;"><span style="color: #000000;">
                                <?php
			    
						    				$query = "SELECT * FROM `tourist_spot` WHERE spot_id=4";
						        			$result = $conn->query($query);
						        			$row = mysqli_fetch_assoc($result);
						        			
						        			while($row != NULL)
						        			{
							        			$name = $row['info'];
							        			echo"$name";
							                    
							        			$row = mysqli_fetch_assoc($result);
					        				}
			        				?></span></p>

                                <h4>place of attractions</h4>
                                <div class="clear cl1"></div>
                                <img src="images/sajek.jpg" alt="" class="img_inner fleft">
						        <h6>Shajek and Marissa Vally</h6>
						        <br>
						        <p style="text-align: justify;"><span><?php
         
				    				$query = "SELECT * FROM `attraction` WHERE att_name='sajek' ";
				        			$result = $conn->query($query);
				        			$row = mysqli_fetch_assoc($result);
				        			
				        			while($row != NULL)
				        			{
					        			$name = $row['att_info'];
					        			echo"$name";
					    				$row = mysqli_fetch_assoc($result);
				        			}
            				?></span> </p>

						        <div class="clear cl1"></div>
                                <img src="images/kap.jpg" alt="" class="img_inner fleft">
						        <h6>Kaptai Lake</h6>
						        <br>
						        <p style="text-align: justify;"><span><?php
         
				    				$query = "SELECT * FROM `attraction` WHERE att_name='kaptai' ";
				        			$result = $conn->query($query);
				        			$row = mysqli_fetch_assoc($result);
				        			
				        			while($row != NULL)
				        			{
					        			$name = $row['att_info'];
					        			echo"$name";
					    				$row = mysqli_fetch_assoc($result);
				        			}
            				?></span> </p>

						        <div class="clear cl1"></div>
                                <img src="images/suv.jpg" alt="" class="img_inner fleft">
						        <h6>Shuvolong Falls</h6>
						        <br>
						        <p style="text-align: justify;"><span><?php
         
				    				$query = "SELECT * FROM `attraction` WHERE att_name='shuvolong' ";
				        			$result = $conn->query($query);
				        			$row = mysqli_fetch_assoc($result);
				        			
				        			while($row != NULL)
				        			{
					        			$name = $row['att_info'];
					        			echo"$name";
					    				$row = mysqli_fetch_assoc($result);
				        			}
            				?></span> </p>

						        <div class="clear cl1"></div>
                                <img src="images/trib.jpg" alt="" class="img_inner fleft">
						        <h6>Tribal Museum</h6>
						        <br>
						        <p style="text-align: justify;"><span><?php
         
				    				$query = "SELECT * FROM `attraction` WHERE att_name='trib' ";
				        			$result = $conn->query($query);
				        			$row = mysqli_fetch_assoc($result);
				        			
				        			while($row != NULL)
				        			{
					        			$name = $row['att_info'];
					        			echo"$name";
					    				$row = mysqli_fetch_assoc($result);
				        			}
            				?></span> </p>



                           </div>
                    </div>

                    <div id="Tokyo" class="tabcontent">
                <div class="grid_12">
                <h4>hotel at bandarban</h4>
                   <div class="hotel">
                        <table>
                                <thead>
                                    <tr>
	                                     <th>Hotel</th>
	                                     <th>type</th>
	                                     <th>address</th>
                         			</tr>
                                </thead>
								
								<tbody>

									 	<?php
            		
							    				include("connect.php"); 
							    				$query = "SELECT name,type,address FROM `hotel` WHERE spot_id=3 ";
							        			$result = $conn->query($query);
							        			$row = mysqli_fetch_assoc($result);
							        			
							        			while($row != NULL)
							        			{
									        			$name = $row['name'];
									        			echo"<tr><td>$name</td>";
									                    //echo"<th>&nbsp;&nbsp;</th>";
									        			$typ = $row['type'];
									        			echo"<td>$typ</td>";
									                    //echo"<th>&nbsp;&nbsp;</th>";
									        			$loc = $row['address'];
									        			echo"<td>$loc</td>";
									                    //echo"<th>&nbsp;&nbsp;</th>";
									        			//echo"<br>";
									        			$row = mysqli_fetch_assoc($result);
							        			}
            							?>
								</tbody>
    
                        </table>
                   </div>

                   <h4>hotel at rangamati</h4>

                   <div class="hotel">
                        <table>
                                <thead>
                                    <tr>
                                     <th>Hotel</th>
                                     <th>type</th>
                                    
                                     <th>address</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
            		
							    				
							    				$query = "SELECT name,type,address FROM `hotel` WHERE spot_id=4 ";
							        			$result = $conn->query($query);
							        			$row = mysqli_fetch_assoc($result);
							        			
							        			while($row != NULL)
							        			{
									        			$name = $row['name'];
									        			echo"<tr><td>$name</td>";
									                    //echo"<th>&nbsp;&nbsp;</th>";
									        			$typ = $row['type'];
									        			echo"<td>$typ</td>";
									                    //echo"<th>&nbsp;&nbsp;</th>";
									        			$loc = $row['address'];
									        			echo"<td>$loc</td>";
									                    //echo"<th>&nbsp;&nbsp;</th>";
									        			//echo"<br>";
									        			$row = mysqli_fetch_assoc($result);
							        			}
            							?>
                                </tbody>
    
                        </table>
                   </div>


                   <!--=================bus table==============-->

                   <h4>bus Services for bandarban from dhaka</h4>
                   <div class="bus">
                        <table>
                                <thead>
                                    <tr>
                                     <th>bus</th>
                                     <th>type</th>
                                     <th>fare</th>
                                     <th>Counter</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
            		
							    				
							    				$query = "SELECT name,type,fare,counter FROM `transport` WHERE spot_id=3 ";
							        			$result = $conn->query($query);
							        			$row = mysqli_fetch_assoc($result);
							        			
							        			while($row != NULL)
							        			{
									        			$name = $row['name'];
									        			echo"<tr><td>$name</td>";
									                    //echo"<th>&nbsp;&nbsp;</th>";
									        			$typ = $row['type'];
									        			echo"<td>$typ</td>";
									                    //echo"<th>&nbsp;&nbsp;</th>";
									        			$loc = $row['fare'];
									        			echo"<td>$loc</td>";
									                    //echo"<th>&nbsp;&nbsp;</th>";
									        			//echo"<br>";
									        			$cnt = $row['counter'];
									        			echo"<td>$cnt</td>";
									        			$row = mysqli_fetch_assoc($result);
							        			}
            							?>
                                    
                                </tbody>
    
                        </table>
                   </div>


                   <h4>bus Services for Rangamati from dhaka</h4>
                   <div class="bus">
                        <table>
                                <thead>
                                    <tr>
                                     <th>bus</th>
                                     <th>type</th>
                                     <th>fare</th>
                                     <th>Counter</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
            		
							    				
							    				$query = "SELECT name,type,fare,counter FROM `transport` WHERE spot_id=4 ";
							        			$result = $conn->query($query);
							        			$row = mysqli_fetch_assoc($result);
							        			
							        			while($row != NULL)
							        			{
									        			$name = $row['name'];
									        			echo"<tr><td>$name</td>";
									                    //echo"<th>&nbsp;&nbsp;</th>";
									        			$typ = $row['type'];
									        			echo"<td>$typ</td>";
									                    //echo"<th>&nbsp;&nbsp;</th>";
									        			$loc = $row['fare'];
									        			echo"<td>$loc</td>";
									                    //echo"<th>&nbsp;&nbsp;</th>";
									        			//echo"<br>";
									        			$cnt = $row['counter'];
									        			echo"<td>$cnt</td>";
									        			$row = mysqli_fetch_assoc($result);
							        			}
            							?>
                                    
                                </tbody>
    
                        </table>
                   </div>


                   <h6>if you want to book hotel or find bus just click the following</h6>
                   <div class="clear cl1"></div>
                   <a href="#"><button class="button button1">Hotel</button></a>
                  <a href="https://www.shohoz.com/"><button class="button button2">Bus</button></a>







                </div>


				</div>



			</div>

		</div>

	</div>

<!--====================footer========================-->

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