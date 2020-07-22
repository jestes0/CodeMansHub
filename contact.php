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
<br><br><br><br><br><br><br><br><br><br>

<!--Main Page Conents-->
<h3>Would you like to reach out to me?</h3>
<p>No problem! Just fill out the form below and I will get back to you within 24 hours.

<!--Create Format for Form Bars.-->
<style>
input[type=text]:focus {
  width: 50%;
  padding: 10px;
  margin: 8px 0;
  border: 2px solid #333;
  box-sizing: border-box;
}
</style>

<!--Form Designed to enter in contact information.-->
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

<p>Please Submit the form using the button above. I hope to speak with you soon!

</body>
</html>
