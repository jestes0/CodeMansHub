<html>
<title>
  Codemans Hub
</title>
<head><link rel="stylesheet" type="text/css" href="auctionhub.css">
</head>

<body>
<!-- -->
  <?php
  include 'nav.php'; //Include the navigation bar from the nav.php file.
  ?>
  <!--Main Page Conents-->

<div class="blogbody">
<div class="section">
  <div class="leftcol">
    <div class="placeholder">
      <img src = "https://i.imgur.com/0rwneoi.png"></a>
</div>
  </div>
  <div class=rightcol>
  <h1>Auction Hub Application</h1>
  <h2> Client: All things Possible</h2>
  <h4> Languages: HTML, CSS, JavaScript<br>
       Frameworks: Node.js, React<br>
       Hosted and Database Managed by Google Firebase</h4>

  <p>The Auction Hub Application was a website designed for All Things Possible,
    a non-profit organization located in South Carolina. The goal was to design
    an application that allowed users to create a profile, register an account,
    and bid on auction products. In addition, a volunteer would also have to be
    able to enter products and list actve auctions. Lastly, this app was
    designed to be as user friendly as possible because the users of the app
    were geared towards older indivuduals.</p>

    <p>To accomplish this, me and a team of five people decided to use Google
      Firebase as the primary hosting site and allowed the clients easy access
      to login and datbase features. The application itself was built in Node.js
      and used the React Framework using Git and GitBash for testing. The app was
      primarily coded in Javascript and HTML and used CSS for stylizing.</p>

      <p>My primary duties with the project was to implement the coding for the
      login and registration pages. I used Google Firebase documentation to help
      guide my programming to implement it. A registration page was also Created
    , where a user would enter a email address and a password with other
    information. Then, a script would run making sure that the email was not
    already in use as well as ensuring the password was long enough. The account
    was sent through the Firebase server to ensure the information was valid. Then,
    the account would be successfully created.</p>

</div>
<div class="leftcol">
  <button onclick="location.href='showcase.php'" type="button">Return to Portfolio</button>
</div>

<div class="rightcol">
  <button onclick="window.open('https://github.com/jestes0/Auction-Hub-Application/tree/master/auction-hub-master');" type="button">View Source Code on Github</button>
</div>

</div>
</div>
</body>
</html>
