<html>
<title>
  CodeMan's Hub- Portfolio
</title>

<!-- Header -->

<head>

  <!-- Call stylesheets for page.-->
  <link rel="stylesheet" type="text/css" href="showcase.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Ubuntu">

  <!-- Call navbar for page.-->
  <?php
    include 'nav.php';
  ?>
</head>

<!-- Main Page Conents -->
<body>

<!-- Page Header -->
<div class="abouthead">
  <h1>Portfolio Showcase</h1>
</div>

<!-- Create row of objects. -->
<div class="row">

  <!-- Create left aligned object. -->
  <div class="leftsection">
    <h2>Auction Hub Application</h2>
    <img src = "https://i.imgur.com/0rwneoi.png">
    <p>My Senior Capstone Project from College.</p>
    <div class = "buttonhold">
      <button onclick="location.href='auctionhub.php'" type="button">
      Read More...</button>
    </div>
  </div>

  <!-- Create right aligned object. -->
  <div class="rightsection">
    <h2>CodeMan's Hub</h2>
    <img src = "codingproject.jpg">
    <p>Vioew what went into the creation of the website.</p>
    <div class = "buttonhold">
      <button onclick="location.href='codeman.php'" type="button">
      Coming Very Soon!</button>
    </div>
  </div>
</div>

</body>
</html>
