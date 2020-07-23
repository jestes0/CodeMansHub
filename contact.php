<html>
<title>
  Codemans Hub
</title>
<head><link rel="stylesheet" type="text/css" href="navstyle.css">
</head>

<body>
<!--Load navigation bar from nav.php-->
  <?php
  include 'nav.php';
  ?>

  <div class="header">
    <h1>Contact</h1>
  </div>

<!--Main Page Conents-->
<h2>Would you like to reach out to me?</h2>
<p>No problem! Just fill out the form below and I will get back to you within 24 hours.

<!--Create Format for Form Bars.-->
<style>
.header {
  padding: 5px;
  font-size: 32px;
  text-align: center;
  color: #ffffff;
  background: rgba(0, 0, 0, 0.5);
}

.section {
  background: rgba(255, 255, 255, 0.75);
  margin-top: 25px;
  margin-left: 25px;
  padding: 10px;
  width: 80%;
}

.form {
  padding: 40px;
}
body {
  background-color: #82AEB1;
}
</style>

<!--Form Designed to enter in contact information.-->
<div class="form">
<form action = "emailprocessing.php" method="POST">
  <label for="Name">Name:</label><br>
  <input type="text" id="Name" name="Name"><br>
  <label for="Email">Email:</label><br>
  <input type="text" id="Email" name="Email"><br>
  <label for="Phone">Phone:</label><br>
  <input type="text" id="Phone" name="Phone"><br>
  <label for="Message">Message:</label><br>
  <input type="text" id="Message" name="Message"><br><br>
  <input type="submit" value="Submit">
</form>
</div>

<p>Please Submit the form using the button above. I hope to speak with you soon!

</body>
</html>
