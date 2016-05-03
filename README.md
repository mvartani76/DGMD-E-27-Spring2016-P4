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

## CSS4 Grids
## CSS Animation and SVG
