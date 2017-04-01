<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>M&M - Animal Facts: Dogs</title>
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
					<li><a href="index.php">Home</a></li>
				
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

					<li><a href="#">Cart</a></li>
					<!--drop down menu -->
					<?php 
						if (!isset($_SESSION['cust_user'])) {
	    					echo "<li><a href='checkout.php''>Login/Register</a></li>";
						 } else {
						 	echo "<li class='dropdown'>
							<a href='#'' class='dropdown-toggle' data-toggle='dropdown'>My Account <span class='caret'></span></a>
							<ul class='dropdown-menu'>
							<li><a href='myaccount.php'>Account Page</a></li>
							<li><a href='logout.php'>Logout</a></li>
							</ul>
							</li>";
						 }
					 ?>
				</ul>

				<!--right align -->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<form role="search" class="navbar-form col-xs-12">
							<input type="search" class="form-control" placeholder="Search from shop"/>
							<input type="button" class="btn btn-primary" value="Search"/>
						</form>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<div class="margin-panel panel panel-default">
					
					<div class="panel-body">
						
						<ol class="breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li class="disabled">Animal Facts</li>
							<li class="active">Dogs</li>						
						</ol>
						
						<div class="page-header">
							<center><h2>🐾 Dog Facts 🐾</h2></center>
						</div>
					</div>
					<p><img class="img-responsive thumbnail" src="media/dogs.jpg"/></p>
					<p>Dogs long association with humans has led dogs to be uniquely attuned to human behavior 
					and they are able to thrive on a starch-rich diet that would be inadequate for other canid species.
					Dogs vary widely in shape, size and colours. Dogs perform many roles for people, such as hunting, herding, 
					pulling loads, protection, assisting police and military, companionship and, more recently, aiding handicapped 
					individuals. This influence on human society has given them the sobriquet "man's best friend".</p>
					<h4>🐾 Dogs are smarter than you think 🐾</h4>
					<p>Dogs understand our behavioral and physical cues,
					pups are used to cuddling up to their owners when they are sad or sick. 
					We also know that dogs talk to us, and each other, via physical cues, 
					like the tilt of a head or the wag of a tail. 
					A study by Duke University professor Brian Hare found that dogs are wise at interpreting gestures. 
					In the study, (kind of a Dog IQ test, really) a researcher would hide a treat under one of two cups, 
					then point to the one with the treat inside. More often than not, the pup chose the correct cup, 
					even when both cups smelled like treats. 
					The dogs also interpreted subtle cues, like a head tilt or even a stare. What’s really cool is that, 
					according to studies, dogs are better at this than babies and chimps. It truly is amazing! </p>
					<h4>🐾 Dogs hear things humans can't 🐾</h4>
					<p>Dogs hear at a wider range of frequencies than humans. The low end of the range is similar to humans 
					(humans hear down to about 20 Hertz, or cycles per second, dogs are at about 40 Hz). But at the high end, they are quite different. 
					Humans hear to about 23 KHz or 23,000 Hz (kilohertz = 1000 x Hz) but dogs can hear up to 45 KHz! 
					Although as dogs age they may become deaf and some dogs are born deaf. When dogs become aware of a sound they've heard their ears will prick up and move around.
					Part of the reason why dogs can hear better than humans is that their ears have more mobility which enable it to maximize its ability to ear. 
					The shape of a dog's ear also helps it hear more proficiently. As we cup our ears, some dogs ears are already in that position. 
					A German Shepherd, for example, has upright curved ears which helps it to maximize sound.</p>
					<h4>🐾 Dogs "smell" our emotions 🐾</h4>
					<p> A dog’s sense of smell is approximately one million times more sensitive than ours. Dogs probably experience us as a composite smell “picture” as unique and complex as our visual likeness. 
					Subtle changes in a person’s scent are obvious to a dog, just as you might notice a person has lost some weight or got a new haircut.
					This may be one way that dogs detect illness. When you are sick, your metabolism changes and different chemicals appear in your breath. 
					A dog can sense this. Changes in breath chemicals may be one way that seizure-alert dogs recognize that a person is about to have a seizure.</p>
					<h4>🐾 A 1 year old puppy is as physically mature as a 12 year-old human 🐾</h4>
					<p>Obviously, different breeds age a little differently, large breeds age faster than the small ones. Nowadays, a better understanding of how dogs age reveals that the over 
					simplistic rule of multiplying the dog’s age by seven to obtain the human age equivalent, is very inaccurate. Consider for instance that small dogs 
					tend to live much longer than larger dogs. More than a matter of size, longevity seems to be a matter of weight. Indeed, it was found that dogs 
					weighing under 30 pounds are the ones blessed with some of the longest lifespans. A pint-sized Chihuahua can easily live up to 17 years; whereas, 
					an Irish wolfhound lives barely up to 11! Aside from breeds, individual factors such as weight, diet and the overall role of genetics which may 
					have quite an impact on longevity. Gender, plays also a role considering that female dogs seem to tend to live a little longer than male dogs.</p>
					<h4>🐾 Dogs love their owners more than themselves! 🐾</h4>
					<p> Some people would say dog are loyal just because they depend on us for food and shelter, so they have to be nice to us. But when you see how dogs react when 
					their humans and canine friends come back after they've been gone for a long time or when they don't come back at all, you know it's about more than food.
					Dogs are naturally affectionate, their instinct is to want to bond. Dogs that fight or attack have been conditioned by humans to be that way. 
					Dogs want to love and be loved, which deep down is what all of us want. They want to be part of a pack, contribute to their pack, and protect their fellow pack members.
					The friendship between man and dog has gone back thousands of years. Dogs didn't become "man's best friend" for no reason. They give us unconditional love every day.</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="list-group">
					<h3><strong>Animal Facts</strong></h3>
					<a href="animal-facts-birds.php" class="list-group-item">
						<h4 class="list-group-item-heading">Birds</h4>
					</a>
					<a href="animal-facts-cats.php" class="list-group-item">
						<h4 class="list-group-item-heading">Cats</h4>
					</a>
					<a href="animal-facts-dogs.php" class="list-group-item active">
						<h4 class="list-group-item-heading">Dogs</h4>
					</a>
					<a href="animal-facts-fishes.php" class="list-group-item">
						<h4 class="list-group-item-heading">Fishes</h4>
					</a>
				</div>
				<img src="media/ads.gif"/>
			</div>
		</div>
	</div>

	<?php /* Page Footer */ include("includes/footer.php"); ?>

	<?php /* Modal contact Form */ include("includes/contact_form.php"); ?>

</body>
</html>