<html>
<header>
<!--
Load an icon library to show a hamburger menu (bars) on small screens-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<img src="https://i.imgur.com/CnqvXCK.png" alt="Codemanlogo"
class ="logo" style="width:300px;height:50px;">
<div class="container">
<nav>
  <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="aboutMe.php">About</a></li>
  <li><a href="devBlog.php">Development Blog</a></li>
  <li><a href="showcase.php">Portfolio</a></li>
  <li><a href="contact.php">Contact</a></li>
</ul>
</nav>
</div>

<style>

header {
  background: #668586;
}

header::after {
  content: " ";
  display: table;
  clear: both;
}

.container {
  width: 80%;
  margin: 0 auto;
}

.logo {
  float: left;
  margin: 10px 30px;
}

nav {
float: left;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

nav li {
  display: inline-block;
  margin-left: 0px;
  padding-top: 25px;
  position: relative;
}

nav li::after {
  content: "|";
  float: right;
  color: #ffffff;
  padding: 2px 60px;
}

nav li:last-child::after {
  display: none;
}

nav a {
color: #ffffff;
 float: left;
 display: block;
 font-weight: bold;
 text-decoration: none;
 font-size: 20px;
}

nav a:hover {
  color: #111;
}

body {
  margin: 0;
  font-family: 'Candara' , sans-serif;
}
</style>
</header>
</html>
