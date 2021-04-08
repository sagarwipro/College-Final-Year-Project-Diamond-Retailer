<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
include 'sub/db.php';

$w = mysqli_query($con, "select * from image where type='white' ");
//$row=mysqli_fetch_assoc($w);
$f = mysqli_query($con, "select * from image where type='fancy'");

?>
<html>

<head>
	<title>Gallery</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="icon" type="image/png" href="images/d1.png">
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
	}

	.modal {
		display: none;
		background: #000;
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;

		background-color: rgba(255, 255, 255, 0.8);

	}

	.modal .modal-content {
		position: absolute;
		top: 50%;
		left: 50%;
		margin-top: -120px;
		margin-left: -150px;
		color: #fff;
		width: 50%;

	}

	.modal img,
	.modal span {
		z-index: 10;
		width: 50%;
		height: 50%;


	}
</style>


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
	<div id="heading">
		<h1>Gallery</h1>
	</div>

	<!-- Main -->
	<section id="main" class="wrapper">
		<div class="inner">
			<div class="content">

				<h2>White Daimonds</h2>
				<div id="my-images">
					<?php
                        //count data

                            $i = 0;
                            while ($row = mysqli_fetch_assoc($w)) {
                                if ($i % 4 == 0) {
                                    ?>
					<tr> <?php
                                } ?>
						<td>
							<img src="admin/<?php echo @$row['data']; ?>"
								width="200" height="200">

						</td>

						<?php $i = $i + 1;
                            }
                        ?>


						<h2>Fancy Color Daimonds</h2>
						<?php
                        //count data

                            $i = 0;
                            while ($row = mysqli_fetch_assoc($f)) {
                                if ($i % 4 == 0) {
                                    ?>
					<tr> <?php
                                } ?>
						<td>
							<img src="admin/<?php echo @$row['data']; ?>"
								width="200" height="200">

						</td>

						<?php $i = $i + 1;
                            }
                        ?>



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
					<p><b>Address</b><br />1. GE-4030, 4th Floor, Bharat Diamond Bourse, BKC, Bandra East, Mumbai-400
						051
						Tel : +91 22 42457777 / 09 / Fax : +91 22 23682006
						<br />
						2. Vraj Shila, Kapodra Char Rasta, Varachha Road, Surat-395 006
						Tel : +91 261 2572563 / 64 / 65 Fax : +91 261 2580789
					</p>

					<p><b>Contact</b><br />
						Name : MUKESHBHAI DHAMELIYA<br />
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
<script>
	var images = document.querySelectorAll('#my-images img'),
		modal = document.querySelector('.modal');

	// Loops through the all the images selected...
	images.forEach(function(image) {
		// When the image is clicked...
		image.addEventListener('click', function(event) {
			modal.innerHTML = '<div class="modal-content"><img src="' + event.target.src + '"><br><span>' +
				event.target.alt + '</span></div>';
			modal.style.display = 'block';
		});
	});

	// When the user clicks somewhere in the "modal" area it automatically closes itself
	modal.addEventListener('click', function() {
		this.style.display = 'none';
	});
</script>

</html>