<?php 
include("sub/db.php");



$email=$_COOKIE['forgot_email'];
$d=mysqli_query($con,"SELECT * FROM `registration` WHERE `email` = '$email' ");

$row = mysqli_fetch_assoc($d);


if(isset($_POST['submit']))
{
    $password=$_POST['pass'];
    $cpassword=$_POST['cpass'];
   
    if($password == $cpassword)
    {
    //echo "UPDATE registration set password = '" . $password . "' WHERE email = '" . $email."' ";
        mysqli_query($con,"UPDATE registration set password = '" . $password . "' WHERE email = '" . $email."' ");
       // echo "UPDATE registration set `password` = " . $password . " WHERE email = " . $email;

        header("location:login.php");
        
    }
    else{
        ?>
    <script type="text/javascript">
   
    alert("Email is not ");
    </script> <?php

    }
	
    
    
    
    

   
    
}

?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>User</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" type="image/png" href="images/d1.png">
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="login.php">
                Log in</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="product.php">product</a></li>

                    <li><a href="Events.php">About us</a></li>
                    <li><a href="generic.php">Contact</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
            
            <h1>Welcome back <?php echo $row['contact_person'];?></h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">

					<!-- Elements -->
                    <div class="row">
							<div class="col-6 col-12-medium">

								

								
									

								<!-- Table -->
									<form method="post" enctype="multipart/formdata">
									<h2 style="font-weight:600;">Password Recovery</h2>

                                    
									<div class="table-wrapper">
										<table>
                                        
											<tbody>
                                            
												<tr>
													<td style="font-weight:700;">Enter New Password:</td>
													<td ><input type="text" style="font-weight:700;" name="pass" required> </td>
													
												</tr>
                                                <tr>
													<td style="font-weight:700;">Confirm Password:</td>
													<td ><input type="text" style="font-weight:700;" name="cpass" required> </td>
													
												</tr>
											
                                            
                                            

									        

								

							
										</table>
                                        <div class="col-6 col-12-medium">

								
<ul class="actions">
    <li><button class="button primary" name="submit" > Submit </button></li>
    
</div>
                                      
									</div></form>
                                    <div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="registration.php">
							Sign Up
						</a>
					</div>
									
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
								<li><a href="#">Home</a></li>
								<li><a href="#">Gallery</a></li>
								<li><a href="#">Online Inventory</a></li>
								<li><a href="#">About us</a></li>
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