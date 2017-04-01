<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>M&M - Animal Facts: Fishes</title>
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
							<li class="active">Fishes</li>						
						</ol>

						<div class="page-header">
							<center><h2>🐱 Fish Facts 🐱</h2></center>
						</div>
					</div>
					<p><img class="img-responsive thumbnail" src="media/fishes.jpg"/></p>
					<p>Cats are very intelligent, very independent animal. They only do what they feel like doing, when they feel like doing it. 
					They will not hesitate to demand whatever they want, be it food, play, or to be left alone. Cats have different personalities, 
					some are the quiet type, while some meow all the time, some are fussy and very selective about food and people and some will eat
					anything and want attention from every person. Some like to be held and to sit on laps and some are loners and do not want much to do with people. 
					When a cat wants to get your attention it will either endlessly meow at you, rub against your leg or follow you around. Some cats are smarter than others, 
					some really seem to be paying attention to the world around them watching, listening and taking in all that is going on as if they really understand it all. Cats are simply fascinating.</p>
					<h4>🐱 Cats have complex brains 🐱</h4>
					<p>Cat brains are small, accounting for just 0.9 percent of their body mass. But according to modern Psychology today, "the brains of cats have an amazing surface 
					folding and a structure that is about 90 percent similar to humans." The cerebral cortex—the part of the brain that's responsible 
					for cognitive information processing is more complex in cats than in most animals, and cats have some 300 million neurons, as compared 
					to 160 million in dogs. Also the most advanced supercomputer in 2010 performed 80 times slower than a cat's brain! Talk about brain power! </p>
					<h4>🐱 Impressive short-term memory 🐱</h4>
					<p>Short-term memories typically fade away in about a minute, but in a study published in Current Biology in 2007, scientists determined that cats' short-term memory 
					of certain things lasts 10 minutes. The scientists tested it by stopping cats after their forelegs, but not their hindlegs, had cleared an obstacle. 
					They distracted the cat with food and then waited to see how long the cats would remember having stepped over the obstacle. The cats remembered for 
					about 10 minutes and would bring their hind legs up where they remembered an obstacle, even if it had been removed.</p>
					<h4>🐱 Some cats illnesses are similar to humans 🐱</h4>
					<p>Cats are susceptible to more than 250 hereditary disorders, and many of them are similar to diseases that humans get. A genetic defect in a cat's DNA can 
					cause retinitis pigmentosa, a disease that also affects 1 in 5000 humans, and Feline Immunodeficiency Virus is a genetic relative of HIV.
					Felines even have their own form of Alzheimer’s Disease, and, like us, they can get overweight and obese.</p>
					<h4>🐱 Their spots came from a particular gene 🐱</h4>
					<p>Back then, scientists didn't know how cats both big and small came by their distinctive blotched patterns. But a 2012 study pointed to a gene that scientists called Taqpep.
					Blotched cats had mutations on both copies of the gene, while striped cats did not. They also discovered that patterned markings are caused by variations in another gene, Edn3, 
					and are expressed at high levels in the darkly colored hair cells. The scientists believe that early in a cat's development, the Taqpep gene establishes a periodic pattern for stripes or a 
					spotted or blotched pattern by determining the level of Edn3 presented in each skin area.</p>
					<h4>🐱 Cats know exactly what they want to get from you 🐱</h4>
					<p>According to a 2009 study, they do it by mimicking babies crying. Cats that want food will make an urgent cry or meowing sound in the 220 to 520-hertz frequency range 
					while purring at a lower frequency. Babies also cry in this frequency range (usually between 300 and 600 hertz), and humans find it difficult to ignore. Another annoying 
					behavior that cats use to get their way is herding darting between and rubbing on their owner's legs while they walk. While cats are certainly not bred to be 
					herding animals like some dogs, they do learn to direct human behavior and motion when their behavior is reinforced.</p>
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
					<a href="animal-facts-dogs.php" class="list-group-item">
						<h4 class="list-group-item-heading">Dogs</h4>
					</a>
					<a href="animal-facts-fishes.php" class="list-group-item active">
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