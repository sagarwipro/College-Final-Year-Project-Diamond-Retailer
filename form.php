

<?php
mysql_connect("localhost","root","");
mysql_select_db("diamond");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$radio=$_POST['radio'];


	$a = "insert into dia(name,email,radio)values('$name','$email','$radio')";



	//$address=$_POST['address'];
	//$dd=$_POST['dd'];
	//$mm=$_POST['mm'];
	//$yy=$_POST['yy'];
	//$dob=$yy.'-'.$mm.'-'.$dd;
	//$hobby_str = implode(',' , $hobby);

mysqli_query($con,$a);
}

?>
<html>
	<head>
		<title>Diamond</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>

	
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.php">Industrious</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="elements.html">Elements</a></li>
					<li><a href="generic.html">Gallary</a></li>
					<li><a href="login.html">Log in</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>Elements</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">

					<!-- Elements -->
						<div class="row">
							<div class="col-6 col-12-medium">

								<!-- Text -->
									
								<!-- Form -->
									<h3>Form</h3>
									<form method="post" action="#" enctype="multipart/form-data">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="name" id="name" value="" placeholder="Name" />
											</div>
											<div class="col-6 col-12-small">
												<input type="text" name="contactperson" id="email" value="" placeholder="contactperson" />
											</div>
											<div class="email" style="width">
												<input type="email" name="email" id="email" value="" placeholder="Email" />
											</div>
											<!-- Break -->
											
											<!-- Break -->
											<div class="col-4 col-12-small">
												<input type="radio" id="radio-alpha" name="radio" value="heart" checked>
												<label for="radio-alpha">heart</label>
											</div>
											<div class="col-4 col-12-small">
												<input type="radio" id="radio-beta" name="radio">
												<label for="radio-beta">round</label>
											</div>
											<div class="col-4 col-12-small">
												<input type="radio" id="radio-gamma" name="radio">
												<label for="radio-gamma">pear</label>
											</div>
											<!-- Break -->
											<div class="col-6 col-12-small">
												<input type="checkbox" id="checkbox-alpha" name="checkbox">
												<label for="checkbox-alpha">Checkbox alpha</label>
											</div>
											<div class="col-6 col-12-small">
												<input type="checkbox" id="checkbox-beta" name="checkbox" checked>
												<label for="checkbox-beta">round</label>
											</div>
											<!-- Break -->
											<div class="col-12">
												<textarea name="textarea" id="textarea" placeholder="Alpha beta gamma delta" rows="6"></textarea>
											</div>
											<!-- Break -->
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" name="submit" value="Submit Form" class="primary" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
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
							<h3>Accumsan montes viverra</h3>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
						</section>
						<section>
							<h4>Sem turpis amet semper</h4>
							<ul class="alt">
								<li><a href="#">Dolor pulvinar sed etiam.</a></li>
								<li><a href="#">Etiam vel lorem sed amet.</a></li>
								<li><a href="#">Felis enim feugiat viverra.</a></li>
								<li><a href="#">Dolor pulvinar magna etiam.</a></li>
							</ul>
						</section>
						<section>
							<h4>Magna sed ipsum</h4>
							<ul class="plain">
								<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
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