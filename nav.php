<!--
Load an icon library to show a hamburger menu (bars) on small screens-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<nav>
<div class="topnav" id="myTopnav">
 <a href="index.php" class="active">Home</a>
 <a href="aboutMe.php">About</a>
 <a href="devBlog">Development Blog</a>
 <a href="#showcase">Showcase</a>
 <a href="#contact">Contact</a>
 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
   <i class="fa fa-bars"></i>
 </a>
</div>
</nav>

<style>

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
