<html>
<title>
  Codemans Hub
</title>
<head>
  <link rel="stylesheet" type="text/css" href="index.css">

<!--Load Navbar Components.-->
  <?php
  include 'nav.php'; //Include the navigation bar from nav.php.
  ?>
</head>

<body>
<!--Main Page Conents-->
<div class="leftcol">
</div>

<div class="rightcol">
<div class="header">
 CodeMan's Hub
</div>
</div>

<div class="leftcol">
  <div class="image">
    <div id = "animated-example" class = "animated fadeIn">
    <img src= "https://image.flaticon.com/icons/png/512/90/90603.png" width=auto; height=auto;>
  </div>

</div>
</div>

<div class="rightcol">
  <div class="maintext">
 <p>Welcome to the home of a man who loves to code.</p>
 <p> I mean, who doesn't love programming?</p>
</div>

<div class="section">
    <div class="left">
  <p>More About Me</p>
</div>
<div class="right">
  <button onclick="location.href='aboutMe.php'" type="button">Check it Out!</button>
</div>
</div>

<div class="section">
  <div class="left">
  <p>View My Portfolio</p>
</div>

  <div class="right">
    <button onclick="location.href='showcase.php'" type="button">Check it Out!</button>
</div>
</div>

<div class="section">
  <div class="left">
  <p>Reach Out to Me</p>
</div>

  <div class="right">
    <button onclick="location.href='contact.php'" type="button">Check it Out!</button>
</div>
</div>
</div>
<br>
</body>
</html>
