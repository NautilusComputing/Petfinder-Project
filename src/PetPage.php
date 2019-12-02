<?php
$options = array("Database"=>'PetfinderDatabase', "UID"=>"IT353F904", "PWD"=>"bell35");
$conn = sqlsrv_connect('itkmssql', $options);
if($conn===false)
{
	die(print_r(sqlsrv_errors(), true));
}
else
{
	//echo "Connected Successfully. <br/>";
}

//myID is passed in from search page (not sure how?)
	$myID = 0009;
	$name = SELECT petName FROM petTable WHERE petID = $myID;
	$breed = SELECT breed FROM petTable WHERE petID = $myID;
	$age = SELECT age FROM petTable WHERE petID = $myID;
	$gender = SELECT gender FROM petTable WHERE petID = $myID;
	$size = SELECT size FROM petTable WHERE petID = $myID;
	$goodWith = SELECT goodWith FROM petTable WHERE petID = $myID;
	$coatLength = SELECT coatLength FROM petTable WHERE petID = $myID;
	$careAndBehavior = SELECT careAndBehavior FROM petTable WHERE petID = $myID;
	$color = "Fur Color";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pet for adoption</title>
	
	<link href="stylesheets/main.css" rel="stylesheet">
	<link href="bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">

	<!-- <script src="https://use.fontawesome.com/ade8605918.js"></script> -->
	<link href="fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
</head>
<body>
	<header>
		<div id="topHeaderRow" >
			<div class="container">
				<div class="row">
					<nav class="navbar navbar " role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle Navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse navbar-exl-collapse">
							<ul class="nav navbar-nav">
								<li class="navbar-text"><img src="images/petfinderLogo.png" alt="PetFinder Logo" style="width:128px;"></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Breeds<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Dogs</a></li>
										<li><a href="#">Cats</a></li>                   
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">About Pet Adoption</a></li>
										<li><a href="#">Dog Care</a></li>
										<li><a href="#">Cat Care</a></li>
										<li><a href="#">All Pet Care</a></li>
										<li><a href="#">Helping Pets</a></li>
										<li><a href="#">Videos</a></li>
									</ul>
								</li>
								<div class="col-md-4 pull-right">
								<li>
									<form class="form-inline" role="search">
										<div class="input-group">
											<label class="sr-only">Search</label>
											<input type="text" class="form-control" placeholder="Search" name="search" width="256px">
											<span class="input-group-btn">
												<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
											</span>
										</div>
									</form>
								</li>
								</div>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
		
	</div>
	</header>

	<!--MIDDLE SECTION, THE MAIN BULK OF THE PAGE GOES HERE--> 
<div id="body" style="background-color:whitesmoke">	
	<div id="AdoptPhotoRow" class="row center" style="background-color:black;">
		<img style="display:block;margin-left:auto;margin-right:auto;height:500px;width:auto;" src=<?php ?> alt="Pet Photo">
	</div>
	
	<div id="PetsAvailable" class="row center">
		<div class="col-md-1"></div>
		
		<div style="background-color:white;margin-right:10px;" id="PetInfoBox" class="col-md-6">
			<h1><?php echo $name ?></h1>
			<h5 style="padding:10px;"><?php echo $breed ?> * Normal, IL</h5>
			<div id="BasicInfoRow" style="border-top:1px solid gray;padding:10px;">
				<?php echo $age." * ".$gender." * ".$size." * ".$color ?>
			</div>
			<div id="AboutRow" style="border-top:1px solid gray;">
				<h3>About</h3>
				<h5>COAT LENGTH</h5>
					<p><?php echo $coatLength ?></p>
				<h5>GOOD WITH</h5>
					<p><?php echo $goodWith ?></p>
				<h5>HEALTH</h5>
					<p>Spayed / neutered<p>
			</div>
			<div id="MeetRow" style="border-top:1px solid gray;">
				<h3>Meet <?php echo $name ?></h3>
				<p><?php echo $careAndBehavior ?></p>
			</div>	
		</div>
		
		<div style="background-color:blueviolet;" id="PetInfoPanel" class="col-md-4">
			<div class="text-center">
				<button style="width:100%;margin:10px;border:2px solid;background-color:white;color:blueviolet;" class="btn" type="button">ASK ABOUT HOLLY</button>
				<p></p>
				<button style="width:100%;margin:10px;border:2px solid;border-color:white;background-color:blueviolet;color:white;" class="btn" type="button"><i class="far fa-heart"></i> FAVORITE HOLLY</button>
			</div>
			<div style="margin:10px;" class="btn-group text-center btn-block">
				<button style="width:50%;border:2px solid;border-color:indigo;background-color:blueviolet;color:white;"
					class="btn" type="button">SPONSOR</button>
				<button style="width:50%;border:2px solid;border-color:indigo;background-color:blueviolet;color:white;" 
					class="btn" type="button"><i class="fas fa-share"></i> SHARE</button>
			</div>
		</div>
		
		<div class="col-md-1"></div>
	</div>
	
	<!--Thumbnails for dog and cat adoption articles-->
	<div id="ArticlesRow" class="row center">
		<div id="DogAdoptArticles" class="col-md-6">
			<div class="img-thumbnail text-center">
				<img src="images/Baxter.jpg" alt="Dog Adoption Articles Photo">
				<div>
					<h4>Dog Adoption Articles</h4>
					<p>Learn more about caring for your new dog.</p>
					<button class="btn btn-default" type="button">Read More</button>
				</div>
			</div>
		</div>
		<div id="CatAdoptArticles" class="col-md-6">
			<div class="img-thumbnail text-center">
				<img src="images/OrangeKitten.jpg" alt="Cat Adoption Articles Photo">
				<div>
					<h4>Cat Adoption Articles</h4>
					<p>Helpful insights on what to expect.</p>
					<button class="btn btn-default" type="button">Read More</button>
				</div>
			</div>
		</div>
	</div>
	
		<!--Pets available ('near you' not implemented here)-->
	<div id="PetsAvailable" class="row center">
		<h2 class="text-center">Other Cats Available for Adoption</h2>
		<div class="col-md-1"></div>
		
		<div  id="Avalible1"  class="col-md-2">
			<div class="img-thumbnail text-center">
				<img class="img-responsive" src="images/Missy.jpg" alt="Missy Adoption Photo">
				<div>
					<h3>Missy</h3>
				</div>
			</div>
		</div>
		<div id="Avalible2" class="col-md-2">
			<div class="img-thumbnail text-center">
				<img class="img-responsive" src="images/Nacho.jpg" alt="Nacho Adoption Photo">
				<div>
					<h3>Nacho</h3>
				</div>
			</div>
		</div>
		<div id="Avalible3" class="col-md-2">
			<div class="img-thumbnail text-center">
				<img class="img-responsive" src="images/Spirit.jpg" alt="Spirit Adoption Photo">
				<div>
					<h3>Spirit</h3>
				</div>
			</div>
		</div>
		<div id="Avalible4" class="col-md-2">
			<div class="img-thumbnail text-center">
				<img class="img-responsive" src="images/Shadow.jpg" alt="Shadow Adoption Photo">
				<div>
					<h3>Shadow</h3>
				</div>
			</div>
		</div>
		<div id="MoreAvailable" class="col-md-2">
			<div class="img-thumbnail text-center">
				<img class="img-responsive" src="fontawesome-free-5.11.2-web/svgs/solid/paw.svg" alt="Reese's Adoption Photo">
				<div>
					<h3>See More</h3>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>	
	<!--End Middle Section-->
	
	<footer id="footer">

		<div class="row">
			<div class="col-md-2">
				<p><a href="#"><img id="petfinderFooterLogo" src="images/petfinderFooterLogo.png" alt="PetFinder White Text Logo"></a></p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-2">
	            <h5 class="bold">ABOUT PETFINDER</h5>
	            <ul class="list-unstyled text-small">
	              <li><a class="text-muted" href="#">About Petfinder</a></li>
	              <li><a class="text-muted" href="#">FAQs</a></li>
	              <li><a class="text-muted" href="#">Partnerships</a></li>
	              <li><a class="text-muted" href="#">Terms of Service</a></li>
	              <li><a class="text-muted" href="#">Mobile Site & Apps</a></li>
	              <li><a class="text-muted" href="#">Petfinder Foundation</a></li>
	              <li><a class="text-muted" href="#">Free Wdgets & Graphics</a></li>
	              <li><a class="text-muted" href="#">Pres</a></li>
	              <li><a class="text-muted" href="#">For Devlopers</a></li>
	              <li><a class="text-muted" href="#">Contact Us</a></li>
	            </ul>
          	</div>
          	<div class="col-md-2">
	            <h5 class="bold">PET ADOPTION</h5>
	            <ul class="list-unstyled text-small">
	              <li><a class="text-muted" href="#">Dog Adoption</a></li>
	              <li><a class="text-muted" href="#">Cat Adoption</a></li>
	              <li><a class="text-muted" href="#">Other Pet Adoption</a></li>
	              <li><a class="text-muted" href="#">Search Adoption Organizations</a></li>
	              <li><a class="text-muted" href="#">Pet-Adoption Stories</a></li>
	              <li><a class="text-muted" href="#">Local Adoption Events</a></li>
	              <li><a class="text-muted" href="#">Shelters & Resources</a></li>
	            </ul>
          	</div> 	
          	<div class="col-md-2">
	            <h5 class="bold">PET CARE TOPICS</h5>
	            <ul class="list-unstyled text-small">
	              <li><a class="text-muted" href="#">Dog Care</a></li>
	              <li><a class="text-muted" href="#">Dog Breeds</a></li>
	              <li><a class="text-muted" href="#">Cat Care</a></li>
	              <li><a class="text-muted" href="#">Cat Breeds</a></li>
	              <li><a class="text-muted" href="#">All Pet Care</a></li>
	              <li><a class="text-muted" href="#">Pet Care Videos</a></li>
	              <li><a class="text-muted" href="#">Helping Pets</a></li>
	            </ul>
          	</div>

          	<div class="col-md-2" id="footerSiteWords">
          		 <h5 class="bold">SITEMAP</h5>
          		 <h5 class="bold">PRIVACY POLICY</h5>
          		 <h5 class="bold">ABOUT OUR ADS</h5>
				 <h5 class="bold">SHELTER & RESCUE LOGIN</h5>
				 <h5 class="bold">SHELTER & RESCUE REGISTRATION</h5>	
          	</div>

          	<div class="col-md-2">
          		<p class="text-muted">To get the latest on ped adoption and pet care, sign up for the Petfinder newsletter.</p>
          		<button class="bold" id="footerSignUpButton">SIGN UP</button>
          	</div>
        </div>
        
        <div class="row" id="footerBottom">
        	<div class=".col-12 .col-md-8">
        		<p class="thinText">&#169;2019 Petfinder.com  All trademarks are owned by Soci&eacute;t&eacute;des Produits Nesti&eacute; S.A.,
        		or used with permission. <i class="fab fa-facebook-f"></i> <i class="fab fa-twitter"></i> <i class="fab fa-instagram"></i> 
        		<i class="fab fa-youtube"></i> <i class="fab fa-pinterest-p"></i></p>
        	</div>
        </div>

	</footer>
</body>
</html>
