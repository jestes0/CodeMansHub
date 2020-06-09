<!--
Load an icon library to show a hamburger menu (bars) on small screens-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<nav>
<div class="topnav" id="myTopnav" align="center">
 <a href="index.php" class="active">Home</a>
 <a href="aboutMe.php">About</a>
 <a href="devBlog.php">Development Blog</a>
 <a href="showcase.php">Showcase</a>
 <a href="contact.php">Contact</a>
 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
   <i class="fa fa-bars"></i>
 </a>
</div>
</nav>

<style>
/* Add a black background color to the top navigation */
.topnav {
 background-color: #222;
 overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
 float: left;
 display: block;
 color: #f2f2f2;
 text-align: center;
 padding: 14px 40px;
 text-decoration: none;
 font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
 background-color: #ddd;
 color: black;
}

/* Add an active class to highlight the current page */
.topnav a.active {
 background-color: #4c9daf;
 color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
 display: none;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 750px) {
 .topnav a:not(:first-child) {display: none;}
 .topnav a.icon {
   float: right;
   display: block;
 }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 750px) {
 .topnav.responsive {position: relative;}
 .topnav.responsive a.icon {
   position: absolute;
   right: 0;
   top: 0;
 }
 .topnav.responsive a {
   float: none;
   display: block;
   text-align: center;
 }
}

</style>

<script>
  /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
