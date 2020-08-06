<!--

File Name: auctionhub.php
Creator: Johnathan Estes
Purpose: Displays information about the Auction Hub Project.

-->

<html>
<title>
  Codemans Hub
</title>

<!-- Include stylesheet and Google fonts-->
<head>
  <link rel="stylesheet" type="text/css" href="auctionhub.css">
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

<br><br>
<div class="row">

  <div class="content">

    <!-- Create Body Header-->
    <div class="abouthead">
      <h1>Auction Hub Application</h1>
    </div>

    <!-- Create  Image Section-->
    <div class="leftsection">
      <img src = "auction_hub.PNG">
    </div>

    <!-- Create  Content Section-->
    <div class="rightsection">

      <h2> Client: All things Possible</h2>

      <h4>Languages: HTML,CSS,JavaScript<br>
          Frameworks:Node.js, React.js<br>
          Database: NoSQL, JavaScript
      </h4>

      <p>CodeMan's Hub is the website I created to show off my skills as a developer.
         Unlike my school projects, I had to develop a deeper understanding of what
         makes a good website. It required me to reconsider early designs that I
         had created and find a better way to do things. This leads into the
         design that I have implemented today.
      </p>

      <p>The website was built using HTML and CSS and the primary groundwork, mostly
        for simpicity purposes. CSS was used to provide advanced styling to all
        webpage elements. PHP is used primarily for server-side script processing,
        such as processing the contact form and validating form contents, but also
        allows code readability by providing a simpler import of file contents.
        JavaScript is used somewhat throughout, though most JavaScript has been
        implemented for front-end scripting, such as preventing access to specific
        elements to prevent webpage issues.

      </aside>
      </p>

      <p>I still have a lot of ideas and am working on implementing new features.
        I want to use Sessions with PHP next to work with form processing. Also,
        I plan to continue improving the design and utilize advanced JavaScript
        techniques. No matter what I choose, I want to make this website succeed.
      </p>
    </div>
  </div>
</div>
    <div class="row">

      <!-- Creates Buttons for redirect and returning-->
      <div class="content">
      <div class = "buttonhold">
        <button onclick="location.href='showcase.php'" type="button">
        Return to Portfolio</button>
    </div>
      <div class = "buttonhold">
        <button onclick="window.open('https://github.com/jestes0/Auction-Hub-Application/tree/master/auction-hub-master'
        ,'_blank')" type="button" >
        View on GitHub</button>
    </div>
  </div>
  </div>
  <br><br>
</body>
</html>
