<?php
include("sub/db.php");
session_start();


if(!isset($_SESSION['email']))
   {
       header("location:login.php");
   }

  
  $email=$_SESSION['email'];
  
  $query = mysqli_query($con,"SELECT * FROM `registration` WHERE `email` = '$email' ");

 
 $row = mysqli_fetch_assoc($query);

if(isset($_POST['update_data']))
{
    $company=$_POST['company'];
    $contact_person=$_POST['contact_person'];
    $address1=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
   
    $feedback=$_POST['feedback'];
   

      
      
    //echo "UPDATE registration SET company='".$company."', contact_person='".$contact_person."', address='".$address1."' WHERE email='".$email."'";
    $a=mysqli_query($con,"UPDATE registration SET company='".$company."', contact_person='".$contact_person."', address='".$address1."', city='".$city."', state='".$state."', zip='".$zip."', feedback='".$feedback."'  WHERE email='".$email."'");
    //mysqli_query($con,"UPDATE registration SET company=\'$company\', contact_person=\'$contact_person\', address=\'$address\', city=\'$city\',state=\'$state\', zip=\'$zip\', feedback=\'$feedback\'  WHERE email= '$email' ");
    header("location:user.php");
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
		<title>Elements - Industrious by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="logout.php">
                Logout <?php  echo @$row['contact_person']; ?></a>
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
            
            <h1>Welcome <?php  echo @$row['contact_person']; ?></h1>
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
									<h2>Account Detail</h2>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<td>Company name:</td>
													<th><input type="text" name="company" value="<?php  echo @$row['company']; ?>"> </th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Contact person:</td>
													<td><input type="text" name="contact_person" value="<?php  echo @$row['contact_person']; ?>"></td>
													
												</tr>
												<tr>
													<td>Address: </td>
													<td><input type="text" name="address" value="<?php  echo @$row['address']; ?>"></td>
													
												</tr>
                                                <tr>
													<td>City:</td>
													<td><input type="text" name="city" value="<?php  echo @$row['city']; ?>"></td>
													
												</tr>
												<tr>
													<td>State:</td>
													<td><input type="text" name="state" value="<?php  echo @$row['state']; ?>"></td>
													
												</tr>
												<tr>
													<td>Zip:</td>
													<td><input type="text" name="zip" value="<?php  echo @$row['zip']; ?>"></td>
													
												</tr>
                                                <tr>
													<td>E-mail:</td>
													<td><input type="text"  value="<?php  echo @$row['email']; ?>" readonly></td>
													
												</tr>
												
												
                                                <tr>
													<td>feedback:</td>
													<td><input type="text" name="feedback" value="<?php  echo @$row['feedback']; ?>"></td>
													
												</tr>
												
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													
												</tr>
											</tfoot>
										</table>
									</div>
									
									</div>

							</div>
							<div class="col-6 col-12-medium">

								
									<ul class="actions">
										<li><button class="button primary" name="update_data" > Update </button></li>
										
								</form>	

									

								

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


            
            
    