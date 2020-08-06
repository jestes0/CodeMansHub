<html>
<title>
  Codemans Hub
</title>
<head>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Ubuntu">

<!-- Call navbar for page.-->
  <?php
    include 'nav.php';
  ?>
</head>

<!--Main Page Conents-->
<body>

<!--Load Navbar Components.-->
<!-- Insert Logo onto the Index Page -->
<img src="/images/CodemanLogo.png" alt="Codeman_Logo" class="logoimg">

<h1>"The home of a man who loves to code."</h1>

<div class="desktopbreak">
</div>

<div class="row">
<div class="sectionright">
  <div class="sectionhead">
  More About Me
</div>
<div class="textdesc">
    Learn more about the man behind the CodeMan. A description about how I became
    interested with Software Development and the journey to get where I am today.
</div>
  <button onclick="location.href='aboutMe.php'" type="button">Read More</button>
</div>

<div class="sectionleft">
  <div class="sectionhead">
  View My Portfolio
</div>
  <div class="textdesc">
      Check out my online Portfolio, which details some of my most notable
      projects I have worked on in college and beyond.
  </div>
    <button onclick="location.href='showcase.php'" type="button">View Portfolio</button>
</div>

<div class="sectionright">
  <div class="sectionhead">
  Contact Me
</div>
  <div class="textdesc">
      If you want to contact me, please follow the link to be directed to a form
      to reach me via Email.
  </div>
    <button onclick="location.href='contact.php'" type="button">Contact!</button>
</div>
</div>

<br>
</body>
</html>
