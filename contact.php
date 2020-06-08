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

  <!--Main Page Conents-->

<h3>Would you like to reach out to me?</h3>
<p>No problem! Just fill out the form below and I will get back to you within 24 hours.

<form>
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

<p>Form is a work in progress. This feature is being worked on (See DevBlog!).

</body>
</html>
