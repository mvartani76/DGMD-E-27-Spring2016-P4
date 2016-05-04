<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shores of Glenwood</title>
	<link href='https://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/app.css" />
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  </head>
  <body>
	<div class="wrapper">

		<!-- Replaced header with row div as this seems to allow the header image to stay
			 adjacent to the menu when scaling to the different screen sizes. -->
		<div class="row">
			<img data-interchange="[img/sog-entrance-500.jpg, small], 
				[img/sog-entrance-800.jpg, medium], 
				[img/sog-entrance-1000.jpg, large], 
				[img/sog-entrance-1200.jpg, xlarge]">
			<noscript><img src="img/sog-entrance-800.jpg.jpg"></noscript>
		</div>

		<!-- Flexbox styled navigation menu -->
		<!-- Needed to remove top-bar as it is using flexbox as well and we need to 
		 	 all the flexbox ourselves for this exercise. -->
		<div class="row">
				<ul class="nav-flex">
					<li class="nav-link-flex"><a href="./index.php">Home</a></li>
					<li class="nav-link-flex"><a href="#">About</a></li>
					<li class="nav-link-flex"><a href="./thingstodo.php">Things to Do</a></li>
					<li class="nav-link-flex active"><a href="./photogallery.php">Photo Gallery</a></li>
					<!-- Login/Register is a dropdown menu and contains submenus for Login and Register -->
					<li class="nav-link-flex">
						<a href="">Login/Register</a>
						<div>
	        			<ul class="nav-flex-dropdown">
							<li><a href="./login.php">Login</a></li>
							<li><a href="./register.php">Register</a></li>
						</ul>
						</div>
	    			</li>
					<li class="nav-link-flex"><a href="./contact.php">Contact Us</a></li>
				</ul>
		</div>

		<div class="row photogallery">
			<h2>The Shores of Glenwood Nature Preserve</h2>
			<p>We are very fortunate to have a protected wildlife preserve in our subdivision. This gallery attempts to visually capture the preserve as nature begins to show its beautiful growth for spring. </p>
		</div>
		<div class="row">
			<!-- Set up a flexbox based image gallery that attempts to evenly wrap
				 images in the row. For example, if 4 on top and 2 wrap, the 2 wrapped
				 images will occupy the same width. Similar if only one image wraps.
				 It will occupy the full width. -->
			<div class="photoflexcontainer">
				<div class="photoflexchild">
					<img src="img/preservegallery/nature_preserve1_500x325.jpg">
				</div>
				<div class="photoflexchild">
					<img src="img/preservegallery/nature_preserve2_500x325.jpg">
				</div>
				<div class="photoflexchild">
					<img src="img/preservegallery/nature_preserve3_500x325.jpg">
				</div>
				<div class="photoflexchild">
					<img src="img/preservegallery/nature_preserve4_500x325.jpg">
				</div>
				<div class="photoflexchild">
					<img src="img/preservegallery/nature_preserve5_500x325.jpg">
				</div>
				<!--SVG graphic used to allow animation -->
				<div class="photoflexchild">
					<img class="photoimg7" src="img/preservegallery/nature_preserve7_500x325.svg">
				</div>
				<div class="photoflexchild">
					<img src="img/preservegallery/nature_preserve8_500x325.jpg">
				</div>
				<div class="photoflexchild">
					<img src="img/preservegallery/nature_preserve10_500x325.jpg">
				</div>			
				<div class="photoflexchild">
					<img src="img/preservegallery/nature_preserve12_500x325.jpg">
				</div>																								
			</div>
			<div class="photoflexcontainer">
				<div class="photoflexchild">
					<img src="img/preservegallery/nature_preserve6_500x325.jpg">
				</div>
				<!-- SVG graphic used to allow animation -->
				<div class="photoflexchild flexverticalitem">
					<img class="photoimg9" src="img/preservegallery/nature_preserve9_325x500.svg">
				</div>
				<div class="photoflexchild flexverticalitem">
					<img src="img/preservegallery/nature_preserve11_325x500.jpg">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
	    <footer class="xlarge-12 large-12 medium-12 columns">
	    	<p>&copy; 2016 Shores of Glenwood Neighborhood Association </p>
	    </footer>
	</div>

    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>