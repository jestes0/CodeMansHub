<html>
<title>
  Codemans Hub
</title>
</head>
<body>

<!--Load Navbar Components.-->
  <?php
  include 'nav.php'; //Include the navigation bar from nav.php.
  ?>
<!--Main Page Conents-->
  <style>

  .section {
    background: rgba(255, 255, 255, 0.75);
    width: 75%;
    margin-top: 25px;
    padding: 20px;
    float: right;
    font-size: 28px;
    font-weight: bold;
    display: inline-block;
    border-radius: 4px;
  }

  .section:after {
    content: "";
    display: table;
    clear: both;
  }
  .animated {
   background-image: url(/css/images/logo.png);
   background-repeat: no-repeat;
   background-position: left top;
   -webkit-animation-duration: 4s;
   animation-duration: 4s;
   -webkit-animation-fill-mode: both;
   animation-fill-mode: both;
}

@-webkit-keyframes fadeIn {
   0% {opacity: 0;}
   100% {opacity: 1;}
}

@keyframes fadeIn {
   0% {opacity: 0;}
   100% {opacity: 1;}
}

.fadeIn {
   -webkit-animation-name: fadeIn;
   animation-name: fadeIn;
}

.left {
  float: left;
}

.right {
  float: right;
}

  .leftcol {
    float: left;
    width: 50%;
    margin-top: 15px;
  }

  .rightcol {
    float: right;
    width: 50%;
    margin-top: 15px;
  }

  .header {
    padding: 5px;
    font-size: 60px;
    margin-top: 50px;
    margin-right: 350px;
    text-align: right;
    font-weight: bold;
    color: #ffffff;
   }

   .maintext {
     padding: 5px;
     font-size: 30px;
     margin-top: 25px;
     margin-left: 200px;
     text-align: left;
     font-weight: bold;
     color: #ffffff;
   }

   .image {
     width: 50%;
     height: auto;
     margin-top: 200px;
     margin-left: 200px;
   }

   .row:after {
     content: "";
     display: table;
     clear: both;
   }


   button{
     color: #444444;
     padding: 10px 10px;
     border: none;
     border-radius: 3px;
     cursor: pointer;
     width: 300px;
     height: 50px;
     margin-top: 20px;
     margin-right: 50px;
     font-size: 18px;
   }

   button:hover {
     background-color: #aaaaaa;
   }


  body {
    background-color: #82AEB1;
  }
  </style>
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
  <p>Check Out My Portfolio</p>
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
