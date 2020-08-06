<!--

File Name: devblog.php
Creator: Johnathan Estes
Purpose: Displays information about the website owner.

-->

<html>
<title>
  Codemans Hub
</title>
<head>
  <link rel="stylesheet" type="text/css" href="devformat.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Ubuntu">

<?php
include 'nav.php'; //Include the navigation bar from the nav.php file.

?>
</head>

<body>

<!-- Create Page Header-->
<div class="abouthead">
  <h1>Development Blog</h1>
</div>

<!-- Creates a row of items to align columns evenly. -->
<div class="row">

<!-- Creates the leftmost column -->
<div class="leftcol">

  <div class="leftsection">

    <!-- Blog content Starts -->
    <h2>CodeMan Website Update: August 5th<h2>
    <h6>Posted 5 August, 2020, Updated 2:41 P.M.</h6>
    <div class="placeholder" style:"height:300px;">
    </div>

    <!-- Creates Blog Content -->
    <p>Hello everyone! I know updates have slowed, but I have plansin the works!

    The following list of changes include:
    <div class = "listitems">
      <ul>
        <li><b>Dev Blog: </b> Added August content</li>
        <li><b>Dev Blog: </b>Adjusted navagation to include July.</li>
        <li><b>General: </b>New Landing Page with adjusted font styles</li>
        <li><b>Home: </b>Updated UI Design and fixed Navbar bug with page</li>
        <li><b>About Me: </b>Updated UI Design and added GitHub link</li>
        <li><b>Devblog: </b>Updated Design UI and font to make it easier to read</li>
        <li><b>Devblog: </b>Fixed bug with content not being centered</li>
        <li><b>Portfolio: </b>Redesigned Landing Page</li>
        <li><b>Portfolio: </b>Updated SubPage design and made content easy to read.</li>
      </ul>
    </div>

    <p>Once I update the Contact page and add more subcontent, the website will be complete.
       Thank you for visiting the Hub!</p>
  </div>
</div>

  <!----------------------------------------------------------------------------->

<div class="rightcol">
  <h2 style="text-align: center;">Archives<h2>
    <div class = "listitems">
      <ul>
        <li><a href="devblogAug2020.php">August 2020</a></li>
        <li><a href="devblog.php">July 2020</a></li>
    </div>
</div>
</div>

</body>
</html>
