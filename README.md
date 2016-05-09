#DGMD-E-27-Spring2016-P4

This is the fourth assignment for DGMD E-27.

#Source Code

The code consists of the following files:

##Source HTML/php:
**index.php** - This is the landing page for the site. The header image is now contained in a div and uses interchange to swap for the various screen sizes. There is a main section that has some text describing the site and neighborhood as well as some responsive images that also use interchange. There is also a sidebar that incorporates a weather widget using the openweather API.

**photogallery.php** - This is a page for showing various neighborhood photo albums which could be accessed by clicking on the image. Only the pond image links to a gallery (thepondgallery.php. There is no weather sidebar on this page.

**thepondgallery.php** - This is a gallery page containing various photos of the neighborhood pond. This file incorporates the Orbit JavaScript based widget.

**thenaturepreserve.php** - This is another gallery page containing various photos of the nature preserve. This file incorporates the flexbox container/child code as well as some SVG/CSS animation.

**thingstodo.php** - This is a page for showing pictures of things to do in the city where my neighborhood resides. This page also shows the column swapping when going from desktop to mobile portrait mode as described in the week 3 videos. This page also uses more media queries around the end points for the typical media queries to maximize the image sizes for the appropriate screen widths.

**contact.php/login.php/register.php** - These are all form based php files with the weather widget side bar on the right side.

##SASS Source Files:
**app.scss** - This is the default foundation sass file that links in all the other partial sass files..<br>

##SASS Partial Files:
###Forms
**_formstyle.scss** - Stylings for the various forms in the site.<br>
**_form_variables.scss** - Sass variables used in formstyle partial.<br>
**_form_extends.scss** - Extends used in the formstyle partial.<br>
**_form_mixins.scss** - Mixins used in the formstyle partial.<br>
###Thingstodo
**_thingstodo.scss** - Stylings for the thingstodo page.<br>
**_thingstodo_variables.scss** - Sass variables used in the thingstodo partial.<br>
**_thingstodo_mixins.scss** - Mixins used in the thingstodo partial.<br>
###Weather
**_weather-style.scss** - Stylings for the weather sidebar.<br>
**_weather_variables.scss** - Variables used in the weather sidebar partial.<br>
**_weather_mixins.scss** - Mixins used in the weather sidebar partial.<br>
###Nature Preserve
**_naturepreserve.scss** - Stylings specific to the nature preserve gallery.<br>
###CSS4 Grid Specific
**_css4grid.scss** - Stylings specific to setting up the CSS4 grids.<br>
###General
**_helper_functions.scss** Some helper functions for other mixin files.<br>
**_styles.scss** - General stylings for site pages.<br>
**_variables.scss** - Variables for site pages.<br>
**_mixins.scss** - Mixins for the site pages.<br>
**_overrides.scss** - Foundation overrides in a specific file in order to find easier.<br>
**_settings.scss** - This is the default settings sass file that has some project specific modifications.<br>

## Generated CSS Files:
As everything is incorporated as partials, there is only one generated css file with regards to the work that I am doing.
**app.css** - This stylesheet contains all the styles from the foundation files as well as my own specific stylings.<br>

##JS Source Files (not including associated js needed for foundation):
**openWeather.js** - jQuery code snippet from Michael Lynch (http://michaelynch.com) distributed under MIT license to access the OpenWeather API.<br>

# Assignment Specific Topics
## Browser/Operating System
I primarily used a Google Chrome browser (Version 48.0.2564.116 m) running on a Windows 10 (64 bit) machine and Safari running on an Apple iPhone 6s plus (iOS 9.2.1).
## Site background
I am using the responsive website I built from Assignment 1, added SASS to in Assignment 2, and then added Foundation to in Assignment 3 as a starting point for this assignment.<br>
The URL for Assignment 1 is: http://dgmd-e27-p1.mikevartanian.me/index.php<br>
The URL for Assignment 2 is: http://dgmd-e27-p2.mikevartanian.me/index.php<br>
The URL for Assignment 3 is: http://dgmd-e27-p3.mikevartanian.me/index.php<br>
The comments and code for Assignment 1 are located in GitHub here: https://github.com/mvartani76/DGMD-E-27-Spring2016-P1<br>
The comments and code for Assignment 2 are located in GitHub here: https://github.com/mvartani76/DGMD-E-27-Spring2016-P2<br>
The comments and code for Assignment 3 are located in GitHub here: https://github.com/mvartani76/DGMD-E-27-Spring2016-P3<br>

## Flexbox
### Flexbox Froggy
I completed level 24 of the flexbox froggy game and the screenshot is attached.
### Flexbox Based Web Page
The link for the flexbox based web page is: http://dgmd-e27-p4.mikevartanian.me/thenaturepreserve.php<br><br>
My flexbox implementation enables a simple gallery and a responsive navigation menu.<br><br>
#### Simple Flexbox Gallery
One portion is a flexbox based gallery of the neighborhood nature preserve. The gallery is set up such that if an additional item is not going to fit in a given row, it will be added underneath but take up 100% of the row below So if it is just one item, that item would take up 100% but if it was two items, each would take 50%.<br><br>
The html code for the flexbox based gallery starting on **line 54** of **thenaturepreserve.php** is shown below.
```HTML
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
```
The css for the **photoflexcontainer** starts on **line 58** of **_naturepreserve.scss** and is shown below.
```SCSS
/* Configure the flexbox gallery container: */
/* Flex direction is row and wrap is enabled */
.photoflexcontainer {
	padding: 3px;
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
}
```
The css for the **photoflexchild** starts on **line 67** of **_naturepreserve.scss** and is shown below.
```SCSS
/* Configure the flexbox child item */
.photoflexchild {
	flex: auto;
	width: 300px;
	margin: 3px;

	perspective: 500px;
}
```
#### Flexbox Navigation Menu
The source code for the simple flexbox based navigation menu starts on **line 27** of **thenaturepreserve.php** in the code snippet below.
```HTML
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
		<li class="nav-link-flex login_reg">
			<a href="#">Login/Register</a>
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
```
The css code for nav-flex and nav-link-flex for non-mobile phone portrait widths is shown below.<br><br>
From **line 1** of **_naturepreserve.scss**.
```SCSS
.nav-flex {
    display: flex;
    list-style-type: none;
    padding: 0;
	// Needed to set margin to 0 to get the menu aligned
    margin: 0;
    background-color: $secondary-background-color;

    li {
        justify-content: center;
        a {
            text-decoration: none;
            align-self: center;
            color: white;
			font-family: 'Lato', sans-serif;
			background-color: $secondary-background-color;
        }
    }
}
```
From **line 21** of **_naturepreserve.scss**.
``` SCSS
.nav-link-flex {
    display: flex;
    padding: 0 5px;
    //position: relative;
    flex-direction: column;

    &:hover {
        background-color: $secondary-background-color;

        a {
            color: $menu-toggle-hover-active-color;
            text-decoration: none;
            
            &+ div {
                display: block;
            }
        }
        
    }

    a {

        &+ div {
            box-shadow: 0 3px 1px rgba(0,0,0,.05);
            display: none;
            font-size: 1rem;
            position: absolute;
            width: 195px;
        }
    }
}
```
From **line 53** of **_naturepreserve.scss**.
```SCSS
.nav-flex-dropdown {
	list-style-type: none;
	background-color: $secondary-background-color;
}
```
The typography of **nav-link-flex** is adjusted over different media queries..<br><br>
The menu becomes vertical in mobile-phone portrait widths and the css for nav-link and nav-link-flex are shown below.
```SCSS
.nav-flex {
	padding-top: 0;
	flex-wrap: nowrap;
	-webkit-flex-wrap: nowrap;
	flex-direction: column;
	-webkit-flex-direction: column;
	background-color: $secondary-background-color;
}
```
``` SCSS
.nav-link-flex {
        width: 90%;
        background-color: $secondary-background-color;
        border-radius: 5px;
        margin-bottom: 5px;
        margin-left: auto;
        margin-right: auto;
        font-size: 22px;
        padding: 5px;

        &:hover {
		background-color: $secondary-background-color;

        	a {
	                color: $menu-toggle-hover-active-color;
	                text-decoration: none;
            
                	&+ div {
                    		display: none;
			}
		}
        
	}
}
```
In order to emulate an "accordion" type menu in the vertical mode (mobile portrait width), the following jQuery code was added starting on **line 114** of **thenaturepreserve.php** as shown below.
```HTML
	<script>
	    /*jQuery for creating psuedo accordion only in mobile portrait mode*/
		$(document).ready(function(){
			var menu_inserted = false;
			$(".login_reg").click(function(){
				// Only Insert Additional <li>'s if in mobile portrait width
				if ($(window).width() <= 480){
					if (menu_inserted == false){
						$('<li class="nav-link-flex tmp-li"><a href="./login.php">Login</a></li><li class="nav-link-flex tmp-li"><a href="./register.php">Register</a></li>').insertAfter('.login_reg');
						menu_inserted = true;
					}
					else if (menu_inserted == true){
						$(".tmp-li").remove();
						menu_inserted = false;
					}
				}
			})
		})
	</script>
```
## CSS4 Grids
### Source Files Using CSS4 Grids
The source files using CSS4 Grids are:<br>
**contact.php** - http://dgmd-e27-p4.mikevartanian.me/contact.php<br>
**login.php** - http://dgmd-e27-p4.mikevartanian.me/login.php<br>
**register.php** - http://dgmd-e27-p4.mikevartanian.me/register.php<br>
**index.php** - http://dgmd-e27-p4.mikevartanian.me/index.php<br>
**photogallery.php** - http://dgmd-e27-p4.mikevartanian.me/photogallery.php<br>
**thingtodo.php** - http://dgmd-e27-p4.mikevartanian.me/thingstodo.php<br>

### Parent wrappers
**index.php** uses the **.indexwrapper** as the parent grid file as shown starting on **line 36** of **_css4grid.scss** in the code snippet below.
```SCSS
/* Define the grid for the home page (index.php) */
/* Grid is four column. The header, menu, and footer are all full width (100%) */
/* The content area is 75% while the weather sidebar is 25% */
/* This applies for non mobile phone portrait screen widths */
.indexwrapper {
	width: $wrapper-width;
	max-width: $wrapper-max-width;
	margin: 0 auto;
	float: none;
	background-color: $body-background-color;

	display: grid;
	grid-gap: 0px;
	grid-template-columns: 25% 25% 25% 25%;
	grid-template-areas:
	"header header header header"
	"menu menu menu menu"
	"content content content outside-w-wrapper"
	"footer footer footer footer";
}
```
The form files, **login.php**, **register.php**, and **contact.php** use the **.formwrapper** as the parent grid file as shown starting on **line 57** of **_css4grid.scss** in the code snippet below.
```SCSS
/* Define the grid for the form pages */
/* Grid is four column. The header, menu, and footer are all full width (100%) */
/* The content area is 75% while the weather sidebar is 25% */
/* This applies for non mobile phone portrait screen widths */
.formwrapper {
	width: $wrapper-width;
	max-width: $wrapper-max-width;
	margin: 0 auto;
	float: none;
	background-color: $body-background-color;	

	display: grid;
	grid-gap: 0px;
	grid-template-columns: 25% 25% 25% 25%;
	grid-template-areas:
	"header header header header"
	"menu menu menu menu"
	"content content content outside-w-wrapper"
	"footer footer footer footer";
}
```
**photogallery.php** uses the **.photowrapper** as the parent grid file as shown starting on **line 102** of **_css4grid.scss** in the code snippet below.
```SCSS
/* Define the grid for the photo page (thingstodo.php) */
/* Grid is four columns. The header, menu, photogallery, and footer are all full width (100%) */
/* The individual photos are 25% each */
/* These widths apply for all except mobile phone landscape and portrait screen widths */
.photowrapper {
	width: $wrapper-width;
	max-width: $wrapper-max-width;
	margin: 0 auto;
	float: none;
	background-color: $body-background-color;

	display: grid;
	grid-gap: 0px;
	grid-template-columns: 25% 25% 25% 25%;
	grid-template-areas:
	"header header header header"
	"menu menu menu menu"
	"photogallery photogallery photogallery photogallery"
	"photo1 photo2 photo3 photo4"
	"footer footer footer footer";
}
```
Finally **thingstodo.php** uses the **.thingstodowrapper** as the parent grid file as shown starting on **line 78** of **_css4grid.scss** in the code snippet below.
```SCSS
/* Define the grid for the thingstodo page (thingstodo.php) */
/* Grid is four column. The header, menu, and footer are all full width (100%) */
/* The content area is 50% while the regular and weather sidebars are 25% */
/* This applies for non mobile phone portrait screen widths */

/* Note that in the non-mobile portrait screen sizes that the sidebar section is shown
   before (or to the left of) the sidebar (township information) */
.thingstodowrapper {
	width: $wrapper-width;
	max-width: $wrapper-max-width;
	margin: 0 auto;
	float: none;
	background-color: $primary-background-color;

	display: grid;	
	grid-gap: 0px;
	grid-template-columns: 25% 25% 25% 25%;
	grid-template-areas:
	"header header header header"
	"menu menu menu menu"
	"sidebar content content outside-w-wrapper"
	"footer footer footer footer";
}
```

### Named Grid Areas
The named grid areas used in the parent wrappers above are defined starting on **line 3** of **_css4grid.scss** as shown below.
```SCSS
/* Create the named grid areas for ease of readibility when defining the grids */ 
.header {
	grid-area: header;
}
.css4menu {
	grid-area: menu;
}
.outside-w-wrapper {
	grid-area: outside-w-wrapper;
}
.content {
	grid-area: content;
}
.photogallery {
	grid-area: photogallery;
}
.photo1 {
	grid-area: photo1;
}
.photo2 {
	grid-area: photo2;
}
.photo3 {
	grid-area: photo3;
}
.photo4 {
	grid-area: photo4;
}
.footer {
	grid-area: footer;
	justify-self: stretch;
}
```

### Media Queries
Media queries are used with the CSS4 grids to primarily change the column widths to 100% in the mobile portrait screen width.<br><br>
The css4 grid for **photogallery.php** uses two media queries; one to set the column widths to 50% in mobile landscape screen width to have the number of photo columns change from four (4) to two (2) and the other to set the column width to 100% in mobile portrait screen width similar to the others.<br><br>

#### Change Four Columns to Two in Mobile Landscape
The code below starting on **line 128** of **_css4grid.scss** changes the css4 grid from four (4) columns to two (2) columns in the code snippet below. 
```SCSS
/* Change the column width to 50% as we want to have two photos per
   "row" in this screen width. */
.photowrapper {
	grid-template-columns: 50%;
	grid-template-areas:
	"header header"
	"menu menu"
	"photogallery photogallery"
	"photo1 photo2"
	"photo3 photo4"
	"footer footer";
}
```

#### Change Two Columns to One in Mobile Portrait
The code below starting on **line 176** of **_css4grid.scss** changes the css4 grid from two (2) columns to one (1) columns in the code snippet below.
```SCSS
.photowrapper {
	grid-template-columns: 100%;
	grid-template-areas:
	"header"
	"menu"
	"photogallery"
	"photo1"
	"photo2"
	"photo3"
	"photo4"
	"footer";
}
```

The css4 grid for **thingstodo.php** is a bit different in that the order of the grid changes in mobile portrait mode as shown starting on **line 164** of **_css4grid.scss** in the code snippet below.
```SCSS
 /* Note that in the mobile portrait screen sizes that the content section is shown
    before the sidebar (township information) */
.thingstodowrapper {
	grid-template-columns: 100%;
	grid-template-areas:
	"header"
	"menu"
	"content"
	"sidebar"
	"footer";
}
```
If we compare the above code snippet with the original, non-mobile portrait screen width ordering, we see that the "content" and "sidebar" order has changed. The original thingstodo wrapper starting on **line 78** of **_css4grid.scss** is shown below.
```SCSS
/* Define the grid for the thingstodo page (thingstodo.php) */
/* Grid is four column. The header, menu, and footer are all full width (100%) */
/* The content area is 50% while the regular and weather sidebars are 25% */
/* This applies for non mobile phone portrait screen widths */

/* Note that in the non-mobile portrait screen sizes that the sidebar section is shown
   before (or to the left of) the sidebar (township information) */
.thingstodowrapper {
	width: $wrapper-width;
	max-width: $wrapper-max-width;
	margin: 0 auto;
	float: none;
	background-color: $primary-background-color;

	display: grid;	
	grid-gap: 0px;
	grid-template-columns: 25% 25% 25% 25%;
	grid-template-areas:
	"header header header header"
	"menu menu menu menu"
	"sidebar content content outside-w-wrapper"
	"footer footer footer footer";
}
```
As we see when comparing the two, "sidebar" is displayed first (or to the left of "content") in non-mobile-portrait screen width and then displayed second (or below "content") in mobile portrait screen width.<br><br>
Please note that not including a grid item in the grid-item-area does not prevent it from being displayed so I needed to add a `display: none` for the weather wrapper in the mobile portrait screen width as shown starting on **line 189** of **_css4grid.scss** in the code snippet below.
```SCSS
/* Do not display the weather sidebar in mobile phone portrait screen width */
.outside-w-wrapper {
	display: none;
}
```

## CSS Animation and SVG
First note that in order to enable the 3D effects, I needed to set the perspective of the parent element as shown from **line 67** of **_naturepreserve.scss** in the code snippet below.
```
/* Configure the flexbox child item */
.photoflexchild {
	flex: auto;
	width: 300px;
	margin: 3px;

    perspective: 500px;
}
```
The perspective is set to 500px.

### 3D transformation on an element (using perspective)
As shown above, I set the perspective of the parent element to 500px. I defined a 3D transformation of an image in the flexbox gallery as shown starting on **line 88** of **_naturepreserve.scss** in the code snippet below.
```SCSS
.photoimg7:hover {
	transform: rotateY(360deg);
}
```
As you can see the in above code snippet, the image is rotated 360 degrees around the Y-axis.<br><br>
The image that is affected is shown starting on **line 75** of **thenaturepreserve.php** as shown below.
```HTML
<!--SVG graphic used to allow animation -->
<div class="photoflexchild">
	<img class="photoimg7" src="img/preservegallery/nature_preserve7_500x325.svg">
</div>
```
### 1 second transition
I used a 1 second transition for the 3D transformation above and it is shown starting on **line 82** of **_naturepreserve.scss** in the code snippet below.
```SCSS
/* Perform 3D rotation (along Y axis) of SVG image */
/* When the user hovers over the image */
.photoimg7 {
    transition: all 1s ease-in-out 0.25s;
}
```
### @keyframe animation
The keyframe animation is declared in **_naturepreserve.scss** and the page incorporating it is **thenaturepreserve.php**.<br><br>
The keyframe declaration starts on **line 92** of **_naturepreserve.scss** and is shown in the code snippet below.
```SCSS
/* Keyframe implementation that scales the image down, rotates it */
/* both along the X and Z 3D axis, and then scales the image back up. */
@keyframes squish-and-rotate {
    12.5% { transform: scale(0.75);
            animation-timing-function: ease-in-out;}
    25% {   transform: scale(0.625);
            transform: rotateX(180deg);
            animation-timing-function: ease-in-out;}
    50% {   transform: scale(0.5);
            animation-timing-function: ease-in-out;}
    75% {   transform: scale(0.625);
            transform: rotateZ(180deg);        
            animation-timing-function: ease-in-out;}
    87.5% { transform: scale(0.75);
            animation-timing-function: ease-in-out;}            
    100% {  transform: scale(1);
            animation-timing-function: ease-in-out;}
}
```
As can be seen from the code snippet above, using percentage values, the keyframe animation scales the image down, rotates in 3d along the X and Z axis, and then scales the image back up to the original size.<br><br>
The keyframe animation starts when the mouse hovers over the photoimg9 picture. The css code snippet starts at **line 111** of **_naturepreserve.scss** as shown below.
```
/* Start the keyframe animation when the mouse hovers over the photoimg9 picture */
.photoimg9:hover {
    animation-name: squish-and-rotate;
    animation-duration: 5s;
}
```
The image that is affected is shown starting on **line 93** of **thenaturepreserve.php** as shown below.
```HTML
<!-- SVG graphic used to allow animation -->
<div class="photoflexchild flexverticalitem">
	<img class="photoimg9" src="img/preservegallery/nature_preserve9_325x500.svg">
</div>
```
### Manipulation of one internal element of an SVG element on hover or via other animation technique
The manipulation of one internal element of an SVG element on hover is shown in the contact form file, http://dgmd-e27-p4.mikevartanian.me/contact.php. The SVG element is a tree in the lower right of the page underneath the weather side bar.<br><br>
The color of the trunk and the leaves is transitioned from the original color to another color when hovering over the indiviual internal elements, keeping the other element the same. For example, when hovering over the tree leaves, only the tree leaves color changes and not the trunk color. Similarly, only the trunk color is changed when hovering over the tree trunk.<br><br>
The SVG code is placed inline in the source file using the php command `file_get_contents()` to improve readibility as shown starting on **line 150** of **contact.php** in the code snippet below.
```HTML
<div>
	<!-- Load in the tree-simple SVG using php to improve readibility -->
	<?php echo file_get_contents("./img/tree-simple.svg"); ?>
</div>
```
The source for **tree-simple.svg** is also shown below.
```HTML
<svg id="tree-simple" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1243.36 1215.18">
  <title>tree-simple</title>
  <path id="leaves" d="M496,569.77c-0.92,0-2.5,4.11-3.05,5.62A59.89,59.89,0,0,1,484.8,590c-2.6,3.18-3,3.32-12,3.94-8.14.57-10.32,1.15-17.38,4.65-8.47,4.2-12.51,4.83-18.08,2.81-3-1.08-3.55-1-5.82,1.17-3.24,3-3.17,4.11.48,7.36,2,1.75,3,3.62,3,5.42,0,3.83-1,5-5.45,6.45-2.93,1-4.09,2-4.65,4.11-1.22,4.61-2.73,5.69-7.95,5.69-5.71,0-6.55.92-4.48,4.92,2.31,4.47,2,5.71-3.17,11.21s-5.67,5.59-15,2.76c-3.47-1.05-4.65-1-6.75.09-1.4.75-2.55,1.9-2.55,2.56a9.26,9.26,0,0,1-2,3.71c-1.52,1.94-3.28,2.68-7.62,3.22-5,.63-6.26.39-11.27-2.19-5.28-2.72-6.28-2.88-16.34-2.69-8.16.16-11-.13-11.87-1.19a5,5,0,0,0-3.44-1.4c-3.1,0-8,8-8.84,14.27-0.73,5.74-3,10.47-6.39,13.11-2.33,1.84-2.44,2.34-1.82,8.59,0.58,5.88.42,6.86-1.37,8.48-1.64,1.48-2.93,1.7-6.79,1.15-13.8-2-14.63-1.85-19,2.71-3.26,3.42-5.63,4.72-12.89,7.07-4.89,1.59-9.78,3.5-10.87,4.25-3.3,2.29-7.39,1.66-10.68-1.63s-4.91-3.66-8.18-1.52c-1.79,1.17-3.43,1.29-7.87.57a35.94,35.94,0,0,1-7.45-1.87,66.52,66.52,0,0,0-9.35-2.71,81.67,81.67,0,0,1-12.95-4.27c-5-2.34-5.85-2.44-11-1.37-6.08,1.26-9.53,4.25-8.67,7.53,0.53,2-1.83,7.65-3.21,7.65-0.43,0-2.55,1.65-4.72,3.67a26.94,26.94,0,0,1-7.41,4.9c-2.39.85-3.75,2.11-4.38,4.08a15.72,15.72,0,0,1-2.46,4.63c-1.8,2.07-9.26,4.3-17.5,5.23a46.45,46.45,0,0,0-11.28,3.08c-6.92,3.06-12.31,3-19.92-.1-4.69-1.93-7-2.34-10.64-1.86q-14.62,1.92-20.14-15.2l-2.22-6.92L80,715.62c-4.77-.55-19.36-8.93-21.05-12.1-0.49-.91-2.58-2-4.65-2.36A92.68,92.68,0,0,1,42,697c-7.44-3-9.21-3.35-14.08-2.8-5.36.61-5.67,0.51-8.25-2.56A10.12,10.12,0,0,1,17,684.62c0-4.45-3.25-10.61-6.07-11.5-2.66-.85-3.83-3.39-5.38-11.77A68,68,0,0,0,2,649c-2.14-4.87-2.17-5.27-.61-8.4,2-4,2-6.87.11-9.42A9.9,9.9,0,0,1,0,626.1c0-4.44,5.9-15.56,9.24-17.43,1.51-.84,4.77-3.93,7.24-6.85,3.85-4.56,4.47-5.91,4.34-9.4-0.12-3.16.35-4.5,2.12-5.93a8.34,8.34,0,0,1,4.2-1.85c2.88,0,3.56-3,1.13-5-1.14-.92-3.46-4.43-5.16-7.8-2.36-4.68-4.13-6.73-7.49-8.7-6.42-3.76-8.93-10-8-19.88,0.47-5.14.28-8-.61-9.69C5.22,530.31,5.54,525.94,8,519.3c1.32-3.54,3.18-6.38,5-7.7a9.88,9.88,0,0,0,3.53-4.45c0.71-2.85,12.6-14.51,14.79-14.51,0.85,0,2.08-1,2.74-2.25a38.1,38.1,0,0,1,3.65-5.22c2.19-2.63,2.4-3.61,1.88-8.58-0.81-7.71-1.05-8.13-6.32-10.93A85.52,85.52,0,0,1,25,460.52c-3.52-2.55-8.84-10.58-10.5-15.87a21.27,21.27,0,0,0-2.72-5.1c-1.7-2.3-1.87-3.79-1.41-12a56.41,56.41,0,0,0-.94-15.79c-1.87-8.18-1.07-12.58,2.81-15.42,1.64-1.2,5-5.34,7.54-9.19a87.83,87.83,0,0,1,9.54-12c4.56-4.53,5.37-4.94,9.31-4.77s4.61-.18,7.46-3.73c3.41-4.25,9.41-7.24,12.75-6.37s12-1.63,15.13-4.3a29.29,29.29,0,0,1,6.29-3.84c2.86-1.2,3.8-2.43,5.6-7.37,1.19-3.27,2.83-6.49,3.65-7.17a5.94,5.94,0,0,0,1.49-4c0-3.22,3.9-8.32,7.82-10.21,2.36-1.14,2.64-1.78,2.35-5.39-0.26-3.28.19-4.65,2.25-6.87a9.49,9.49,0,0,0,2.57-5.56c0-3.36,2.26-5.83,6-6.58,3.24-.65,9.57-9.08,10.57-14.1,0.58-2.91,0-3.76-7.57-11.4-4.51-4.54-9-9.85-10-11.8a22.81,22.81,0,0,0-3.92-5.45,7,7,0,0,1-.64-9.15c2-2.71,1.88-4.93-.69-9.41l-2.22-3.86,2.51-3.53c4.17-5.86,7.58-8,12.53-7.8,3.56,0.13,5.29-.49,9.26-3.34,2.69-1.93,6.06-3.51,7.5-3.51,2,0,2.94-.76,4.08-3.51,2-4.87,6-6.31,9.71-3.54s5.17,2.62,15.71-1.45c10-3.86,12.8-4.22,15.7-2,2.68,2,4.81,1.88,6.94-.47,1.2-1.33,3.08-2,5.59-2,2.86,0,3.93-.47,4.39-1.94,0.34-1.07,3.63-3.61,7.32-5.64a76.64,76.64,0,0,0,8.45-5.21,4.94,4.94,0,0,0,.29-7.16c-0.8-.89-2.59-5-4-9l-2.51-7.43,2-3.43c2.14-3.62,1.95-6.14-.45-6.14s-11.68-5.24-12.76-7.25c-1.28-2.38-.18-9.3,1.79-11.27a9.06,9.06,0,0,1,3.91-2l4.88-1c1.34-.28,4.48-2.26,7-4.41,4.43-3.83,9.53-5.86,11.58-4.59,0.57,0.35,3.62-.89,6.77-2.77,8-4.76,18-7.29,22.67-5.74a22.73,22.73,0,0,0,9.14.47c3.9-.49,6.34-0.3,8.05.62,3.74,2,10.56-.71,11.75-4.66,1.83-6.09,2.68-7.48,5.17-8.43,1.9-.72,3.35-0.57,5.57.57,4.6,2.38,11.38,1,16.79-3.37a59.94,59.94,0,0,1,10-6.24c6.76-3.2,15.37-12.84,17.2-19.26,1.51-5.29,3.3-7.41,6.94-8.21S346,63.84,346,59.86c0-2.16,1.66-5,6.08-10.35,8.48-10.28,9.49-11,13.61-10.27,2.76,0.52,3.9.19,5.94-1.73,2.33-2.2,3.54-2.41,16.19-2.87,7.52-.28,15.39-0.1,17.49.39,3.69,0.86,7,.3,15.18-2.56,6.46-2.27,8-2.11,12.84,1.28,2.56,1.81,4.66,3.6,4.66,4,0,1.84,3.5,1.8,5.47-.06,1.19-1.12,6-3.43,10.59-5.14,7.58-2.79,9.87-3.16,22.72-3.59,12.28-.41,14.65-0.24,16.87,1.22,2.06,1.35,3.08,1.47,5,.59,3.72-1.7,11-1.32,21.4,1.09a72.47,72.47,0,0,0,15.41,2c6.18-.22,18.25,2,24.72,4.54,3,1.16,4,2.28,5.07,5.62,0.85,2.55,2.32,4.62,3.8,5.35,1.33,0.65,9.77,2.88,18.74,5l16.32,3.78,4.43-4.83c4.78-5.2,6-5.44,13.18-2.5,3.39,1.39,3.44,1.38,21.76-4.76,5.78-1.94,18.05-4.34,22.16-4.34a11,11,0,0,1,6.07,2,11,11,0,0,0,6.29,2,22.89,22.89,0,0,1,7.36,1.51c3.37,1.41,4,1.36,9.37-.66,10.39-3.92,18.86-2.88,22.17,2.74L719,52.84l6.89-.69c6.65-.67,7-0.6,8.58,1.89a10.28,10.28,0,0,0,5.54,3.62A29.32,29.32,0,0,1,748.26,62a101.7,101.7,0,0,0,11.62,7.14L767.16,73l8.17-1.28a66.42,66.42,0,0,0,12.55-3.17,25.41,25.41,0,0,1,5.62-1.88,8.67,8.67,0,0,0,3.62-1.87A17.88,17.88,0,0,1,804,62.19a53.74,53.74,0,0,0,16.9-5.95C826.54,53,839.09,53.67,852,58c9.5,3.18,10.59,3.35,13.11,2.05,3.56-1.84,5.85-1.79,11.08.23,4.84,1.87,10.77,7,10.77,9.28,0,2.73,5.15,11.82,9.1,16.06,3,3.21,4,5.22,4.5,9.07,0.82,6.15,6.07,13.35,10.91,14.95a11,11,0,0,1,5,3.65c1.36,2.07,2.26,2.46,4.83,2.08,3.65-.55,16.09,2.46,22.66,5.49a43.86,43.86,0,0,0,10.48,2.85c4.87,0.63,6.4,1.3,8.22,3.61,4.42,5.58,5.33,6.33,7.69,6.33,1.5,0,3.58,1.35,5.56,3.6,3,3.36,3.12,4,2.51,8.84-0.64,5.13-.59,5.26,2.37,6.49,3.16,1.31,4.56,3.89,7.51,13.83,1.25,4.2,2.9,6.57,8.21,11.75,6.08,5.93,7,6.49,10.92,6.49a11.06,11.06,0,0,1,6.81,2,11.11,11.11,0,0,0,5.89,2c2.9,0,4.24,1,10.06,7.51,7.27,8.14,9.34,13,8.19,19.14-0.87,4.63-3.6,7.35-7.38,7.35-4.32,0-1.23,4.93-.41,10.89,0.58,4.24,4.52.92,2.38,9.21-2,7.71-4.26,2-4.37,7.38,5.19,0.81-4.68,7,1.12,7.31,1.46-1.12,12,2.68,12.87,7,1.18,1,16,6.54,19.63,8.42,1,0.49,2.4,2.44,3.18,4.33,1,2.42,2.26,3.61,4.25,4,6.17,1.33,11.39,3.75,13.31,6.18,2.54,3.23,2.66,11.17.39,25.54-2.12,13.44-2.13,13.85-.38,14.78,10.88,5.81,13.66,5.85,18.59.26,4.2-4.78,10.74-5.67,16.9-2.3,4.17,2.28,4.22,2.28,9.85.51l5.66-1.78,6.25,3c7,3.36,17.82,5.94,27.89,6.6a24.36,24.36,0,0,1,11,2.92,42.54,42.54,0,0,0,9.23,3.65c10.2,2.45,17.18,7.37,20,14.09,1.22,2.93,1.25,4.29.19,8.48a16.44,16.44,0,0,0-.41,8c1.33,4.64,1,7.71-1.14,11.77a17.28,17.28,0,0,0-2,5.16c0,0.78-1.12,2.76-2.5,4.4a10.09,10.09,0,0,0-2.5,6.47c0,3.77,1.19,4.71,6,4.71,3.51,0,4.58,1.3,6.11,7.37a15.39,15.39,0,0,0,4.68,8,28.56,28.56,0,0,1,5.26,6.67,13.1,13.1,0,0,0,4.3,4.87c3,1.63,5.85,7.53,5.53,11.63s0.44,5,5.67,7c3.78,1.44,4.64,2.28,5.43,5.33,1.07,4.1,0,11.26-2,13.7a10.66,10.66,0,0,1-3.76,2.54c-2.05.78-2.32,1.38-1.79,4,0.88,4.39-2.65,10.34-7.29,12.27-5.49,2.29-13.79,10.77-15,15.33-2.73,10.13-2.77,9.93,2.43,12.37,8.5,4,13.32,13.48,10.06,19.79-1.08,2.1-1.55,5.21-1.4,9.37,0.35,9.88-3.55,14.52-11.13,13.24-3.59-.61-4.44-0.34-7.55,2.39-3.51,3.08-4.55,3.48-12,4.62-10.5,1.61-15.64,1.64-18.86.12a9.94,9.94,0,0,0-5.53-1,13.94,13.94,0,0,1-6.2-.71c-3.69-1.22-4.1-1.15-6.48,1.08s-3.56,2.41-12.1,2.6c-11.5.26-13.83-.5-15.76-5.12-1.67-4-3.44-4.45-6.06-1.55-1.54,1.7-1.7,3.06-1.12,9.47,1.07,11.79-2.61,16.43-10.19,12.84-3.15-1.49-3.77-1.49-8.06,0-2.56.91-5.6,1.39-6.77,1.08-1.35-.36-4.1.54-7.58,2.51-4.74,2.68-7.35,3.3-19.88,4.74-15.48,1.79-27.12,1.88-35.92.29-5.63-1-24.68.23-32,2.11a14.8,14.8,0,0,1-7.5-.2c-5.36-1.49-19.23-.39-28,2.21-14.15,4.22-17,4.94-19.62,4.94-1.47,0-5.25,1.35-8.38,3s-6.36,3-7.16,3-2.67,1.31-4.15,2.92c-3.2,3.47-24.31,14.64-29.52,15.61-7,1.32-10.16-.85-11.63-8-0.5-2.45-1.26-3.1-4.4-3.75-4.68-1-12.07-5.1-16.45-9.2-3.25-3-3.51-3.09-15-3.43s-11.74-.3-14.12,2.25c-1.89,2-3.38,2.59-6.78,2.59-5.65,0-13.9,4.14-16.12,8.08-1.86,3.31-4.78,4.44-9.17,3.57-2.1-.42-4.45.22-8.34,2.26-4.75,2.5-6.94,2.94-17.79,3.59-6.8.41-13.5,1.22-14.87,1.8s-6.1,1.1-10.5,1.16a126.6,126.6,0,0,0-13.81,1c-5.05.75-6.16,0.61-8.5-1.12s-9.38-3.48-14.19-3.57a34.89,34.89,0,0,0-6.23,1.32c-4.43,1.26-4.92,1.21-7.71-.86-1.64-1.21-4.78-8.08-5.57-8.08-87.58-19.18-199.49-44-199.49-44h0Z" transform="translate(0 -28.74)" fill="#538C19"/>
  <path id="trunk" d="M541,1243.53a1.33,1.33,0,0,1,.89-1.06c0.49-.18,9.74-19,20.56-41.79,17.29-36.44,19.73-42.19,20.14-47.5,0.26-3.32,1.13-22.47,1.93-42.54s2.61-63.57,4-96.65l2.55-60.15-3-23.35c-1.65-12.84-7.52-58.67-13-101.85-10-78.16-10.08-78.76-21.82-139.07L541.43,629l-15.23-24L511,581l-8-4.82c-4.39-2.65-8-5.15-8-5.55a10,10,0,0,1,1.85-3.11,24.62,24.62,0,0,0,3.1-6.2c0.69-2.1,1.78-4,2.42-4.27s3.14-2.92,5.55-5.93c4.19-5.25,7.17-6.75,8.65-4.36,0.45,0.73,2.52.91,6,.5,5.09-.6,5.37-0.5,8.36,2.91a44.2,44.2,0,0,1,5.21,7.75c4.22,8.42,9.75,12.18,19.9,13.57,4.34,0.59,6.81,1.55,8.77,3.37a19.23,19.23,0,0,0,14.38,5.69c12.48-.09,15.7.56,19.11,3.83,3.69,3.55,10.5,6.21,16,6.23,2.56,0,7.08-1.7,14.46-5.47l10.74-5.48L642,582a16.68,16.68,0,0,0,4.26,2.94c2.58,0.9,7.44-1.14,9.24-3.89,0.87-1.33,2.45-2.43,3.49-2.43s5.65-1.81,10.23-4,9.22-3.9,10.32-3.75,2.8,1.93,4,4.37a58.85,58.85,0,0,0,4.34,7.26c2.13,2.91,2.26,3.75,1.52,9.92-1.3,10.82-.48,14.43,4.26,18.77,4,3.7,4.8.25-6.1,27.83l-6.66,16.87L680,670.51c-1.14,18.62-1.13,45.68,0,73.26l0.91,21.63L698,863.77c16.74,96.31,17.55,100.43,38.64,196.37l21.53,98,16.8,41c9.24,22.55,16.35,44.09,16.12,44.5s-18,0-39.54,0c-19.51,0-44.53-.27-70.69-0.27-39.66,0-139.83,1.13-139.83.16h0Z" transform="translate(0 -28.74)" fill="#654321"/>
</svg>
```

The style code that performs this transition is shown starting on **line 52** of **_weather-style.scss** in the code snippet below.
```SCSS
/* Transition Properties for SVG Element */
#tree-simple {
	margin: 0 auto;
}

/* Transition the fill color */
#trunk, #leaves {
	transition: fill 1s ease-in-out 0.5s;
}

/* Set the fill color to transition to for the leaves ID */
#tree-simple > #leaves:hover {
	fill: #D9AF27;
}

/* Set the fill color to transition to for the trunk ID */
#tree-simple > #trunk:hover {
	fill: #ED8F00;
}
```
