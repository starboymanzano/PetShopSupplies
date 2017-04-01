<?php
	session_start();
	include("includes/dbinfo.inc.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>M&M Pet Supplies - Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- If computer has running through internet
		<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="custom-css/custom.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	-->
	
	<!-- If computer doesn't access internet -->
	    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="custom-css/custom.css">
	    <script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
	    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #ECECEC;">
			<nav class="navbar navbar-inverse lewis-header">
		<div class="container">
			<!--logo -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-left"><img src="media/header.png"></a>
			</div>
			<!--menu-items -->
			<div class="collapse navbar-collapse" id="mainNavBar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
				
					<!--drop down menu -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#contact" data-toggle="modal">Contact</a></li>
							<li><a href="#">Feedbacks</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Gallery</a></li>
						</ul>
					</li>

					<li><a href="#">Shop</a></li>
					
					<li>
						<form role="search" class="navbar-form col-xs-12">
							<input type="search" class="form-control" placeholder="Search from shop"/>
							<input type="button" class="btn btn-primary" value="Search"/>
						</form>
					</li>
					 
				</ul>

				<!--right align -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Cart</a></li>

					<!--drop down menu -->
					<?php 
						if (!isset($_SESSION['cust_user'])) {
	    					echo "<li><a href='#login' data-toggle='modal'>Login/Register</a></li>";
						 } else {
						 	echo "<li class='dropdown'>
							<a href='#'' class='dropdown-toggle' data-toggle='dropdown'>Hi, " . $_SESSION['cust_user'] . "<span class='caret'></span></a>
							<ul class='dropdown-menu'>
							<li><a href='myaccount.php'>Account Page</a></li>
							<li><a href='logout.php'>Logout</a></li>
							</ul>
							</li>";
						 }
					 ?>
				</ul>

			</div>
		</div>
	</nav>

	<div class="container">
	<div class="row">
		<div class="col-lg-7">
			<div class="jumbotron" style="background-color: #DADFE1;">
				<h2>Welcome to M&M Pet Supplies</h2>
				<p>M&M Pet Supplies is an online store that sells the needs of Birds, Dogs, Cats and even fishes.</p>
				<a class="btn btn-primary" href="shop.php">Get a pet now!</a> <strong>or</strong> 

				<?php  
					if(isset($_SESSION['cust_user'])) {
						echo "<a class='btn btn-info' href='myaccount.php'>Edit your account information</a>";
					} else {
						echo "<a class='btn btn-info' href='#login' data-toggle='modal'>Log in</a>";
					}
				?>

			</div>
		</div>
		<div class="col-lg-5">
			<div id="myCarousel" class="carousel slide" style="border: 1px solid gray;">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="2" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="3" class="active"></li>
		</ol>

		<div class="carousel-inner">
			<div class="item active">
				<img src="media/carousel/01-birds.jpg" alt="Bird" class="img-responsive"/>
				<div class="carousel-caption">
					<h3>Bird Supplies</h3>
					<p>Available at our shop <a href="shop.php" class="label label-danger">Click here</a></p>
				</div>
			</div>
			<div class="item">
				<img src="media/carousel/02-cats.jpg" alt="Cat" class="img-responsive"/>
				<div class="carousel-caption">
					<h3>Cat Supplies</h3>
					<p>Available at our shop <a href="shop.php" class="label label-danger">Click here</a></p>
				</div>
			</div>
			<div class="item">
				<img src="media/carousel/03-dogs.jpg" alt="Dog" class="img-responsive"/>
				<div class="carousel-caption">
					<h3>Dog Supplies</h3>
					<p>Available at our shop <a href="shop.php" class="label label-danger">Click here</a></p>
				</div>
			</div>
			<div class="item">
				<img src="media/carousel/04-fish.jpg" alt="Fish" class="img-responsive"/>
				<div class="carousel-caption">
					<h3>Fish Supplies</h3>
					<p>Available at our shop <a href="shop.php" class="label label-danger">Click here</a></p>
				</div>
			</div>
		</div>

		<a class="carousel-control left" href="#myCarousel" data-slide="prev">
			<span class="icon-prev"></span>
		</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="next">
			<span class="icon-next"></span>
		</a>
	</div>
		</div>
	</div>
	<!--End of Div Container-->
	</div>
	
	<div class="container">
	<h2><strong>Facts about animals</strong></h2>
		<div class="row">
			<div class="col-md-3" style="border: 1px solid #DADFE1; border-radius: 6px; padding-bottom: 10px;">
				<h3><b>Birds</b></h3>
				<p><img class="img-responsive index-img" src="media/index-birds.jpg" alt="Bird"></p>
				<p>The domestic dog (Canis lupus familiaris or Canis familiaris) is a member of genus Canis (canines) that forms part of the wolf-like canids, and is the most widely abundant carnivore. The dog and the extant gray wolf are sister taxa, with modern wolves not closely related to the wolves that were first domesticated. The dog was the first domesticated species and has been selectively bred over millennia for various behaviors, sensory capabilities, and physical attributes.</p>
				<a href="animal-facts-birds.php" class="btn btn-default">Read more...</a>
			</div>
			<div class="col-md-3" style="border: 1px solid #DADFE1; border-radius: 6px; padding-bottom: 10px;">
				<h3><b>Cats</b></h3>
				<p><img class="img-responsive index-img" src="media/index-cats.jpg" alt="Cat"></p>
				<p>Cats are very intelligent, very independent animal. They only do what they feel like doing, when they feel like doing it. 
					They will not hesitate to demand whatever they want, be it food, play, or to be left alone. Cats have different personalities, 
					some are the quiet type, while some meow all the time, some are fussy and very selective about food and people and some will eat
					anything and want attention from every person. Some like to be held and to sit on laps and some are loners and do not want much to do with people...</p>
				<a href="animal-facts-cats.php" class="btn btn-default">Read more...</a>
			</div>
			<div class="col-md-3" style="border: 1px solid #DADFE1; border-radius: 6px; padding-bottom: 10px;">
				<h3><b>Dogs</b></h3>
				<p><img class="img-responsive index-img" src="media/index-dogs.jpg" alt="Dog"></p>
				<p>Dogs long association with humans has led dogs to be uniquely attuned to human behavior 
					and they are able to thrive on a starch-rich diet that would be inadequate for other canid species.
					Dogs vary widely in shape, size and colours. Dogs perform many roles for people, such as hunting, herding, 
					pulling loads, protection, assisting police and military, companionship and, more recently, aiding handicapped...</p>
				<a href="animal-facts-dogs.php" class="btn btn-default">Read more...</a>
			</div>
			<div class="col-md-3" style="border: 1px solid #DADFE1; border-radius: 6px; padding-bottom: 10px;">
				<h3><b>Fishes</b></h3>
				<p><img class="img-responsive index-img" src="media/index-fishes.jpg" alt="Fish"></p>
				<p>Reptiles are tetrapod (four-limbed vertebrate) animals in the class Reptilia, comprising today's turtles, crocodilians, snakes, amphisbaenians, lizards, tuatara, and their extinct relatives. The study of these traditional reptile orders, historically combined with that of modern amphibians, is called herpetology.</p>
				<a href="animal-facts-fishes.php" class="btn btn-default">Read more...</a>
			</div>
		</div>
		<br/>
	</div>

	<div class="modal fade" id="login" role="dialog">
	<div class="modal-dialog">
				<div class="modal-content">
					<form role="form" class="form-horizontal" method="post">
					<div class="modal-header">
						<h4 style="margin-left: 10px;">Login to M&M Pet Supplies</h4>
					</div>
					
					<div class="modal-body">
					<div class="alert alert-info">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>Don't have an account? Register <a href="registration.php">here</a>
					</div>
						<div class="input-group input-group-lg">
			 			 <span class="input-group-addon" id="sizing-addon1">@</span>
			  			<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" name="cust_user" required>
					</div><br/>			
					<div class="input-group input-group-lg">
			 			 <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-lock"></span></span>
			  			<input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" name="cust_pass" required>
					</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" name="submit">Login</button>
						<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
					</div>
				</form>
				</div>
			</div>
		</div>
		
		<?php 
			if(!isset($_POST['cust_user']) || !isset($_POST['cust_pass'])) {
					//No codes to run
				} else {
					$c = oci_pconnect(ORA_CON_UN,ORA_CON_PW,ORA_CON_DB);
					$s = oci_parse($c, 'SELECT cust_user FROM customer WHERE cust_user = :cust_user_bv AND cust_pass = :cust_pass_bv');
					oci_bind_by_name($s, ":cust_user_bv", $_POST['cust_user']);
					oci_bind_by_name($s, ":cust_pass_bv", $_POST['cust_pass']);
					oci_execute($s);
					$r = oci_fetch_array($s, OCI_ASSOC);

					if ($r) {
						$_SESSION['cust_user'] = $_POST['cust_user'];
							echo "<script>window.open('shop.php','_self')</script>";
							oci_close($c);
					}
					 else {
					 	echo "<script>alert('Invalid Username or Password!')</script>";
					 	oci_close($c);

					 } 

				}
		?>


	<?php /* Page Footer */ include("includes/footer.php"); ?>

	<?php /* Modal contact Form */ include("includes/contact_form.php"); ?>

</body>
</html>