<?php
include("sub/db.php");

?>
<html>
	<head>
		<title>Events</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="icon" type="image/png" href="images/d1.png">

		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="login.php">Log in</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
				<li><a href="index.php">Home</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="product.php">Product</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="about.php">About us</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>Events</h1>
			</div>

		<!-- Main -->
		<div class="panel-body" style="
    padding: 100;">

								<!-- Image -->
								<h2></h2>
									<h2 align="center"></h2>
									
										
										<table align="center">
										<?php 
						//count data
						$f=mysqli_query($con,"select * from events ");
                        
                        	$i=0;
                            while ($row = mysqli_fetch_assoc($f))
                            { ?>
                                
                                 
                                    <td>
                                    <div ><img  src="admin/<?php echo @$row['image']; ?>" width="180" height="170"></div>
                                    </td>
									<td style="vertical-align: middle;">
									<div class="content" style="font-size:22">Event Name: <?php echo @$row['name']; ?></div>
                                    <div class="content"  style="font-size:22">Event Description:<?php echo @$row['des']; ?></div>
                                    </td>
									<tr>
                                
                                    <?php $i=$i+1;
                            }
                        ?>
						
											
									</table>		
										</div>
									</div>
									

							
									

							</div>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
		<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
                        	<h3><i class="fa fa-diamond"> Amrut Exports</i></h3>
							<p><b>Address</b><br />1. GE-4030, 4th Floor, Bharat Diamond Bourse, BKC, Bandra East, Mumbai-400 051
Tel : +91 22 42457777 / 09 / Fax : +91 22 23682006
<br />
2. Vraj Shila, Kapodra Char Rasta, Varachha Road, Surat-395 006
Tel : +91 261 2572563 / 64 / 65 Fax : +91 261 2580789</p>
									
							<p><b>Contact</b><br />
                            Name :   MUKESHBHAI DHAMELIYA<br />
 						    Email : mukesh8803@gmail.com<br />
   							Phone No. : +91 9879508803</p>
									
						</section>
						<section>
							<h4>Menu</h4>
							<ul class="alt">
							<li><a href="index.php">Home</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="product.php">Product</a></li>
							<li><a href="events.php">Events</a></li>
							<li><a href="about.php">About us</a></li>
							
								
							</ul>
						</section>
						<section>
							
							<ul class="plain">
								<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						@2018 Amrut Exports
					</div>
				</div>
			</footer>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>