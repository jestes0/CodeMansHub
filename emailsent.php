<html>
<title>
</title>
<head>
<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>

<!--Load Navbar Components.-->
  <?php
  include 'nav.php'; //Include the navigation bar from nav.php.
  ?>
<!--Main Page Conents-->
<br><br><br><br>
  <style>
  body {
    background-color: #82AEB1;
  }
  </style>

<div class="section">

<p style="font-family:verdana; font-size:20px">
  Your email has been successfully sent. <br></p>

<br>
<p style="font-family:verdana">You will be redirected to the homnepage...</p>
</div>

<?php
echo "<script>
   setTimeout(function(){
      window.location.href = 'index.php';
   }, 5000);
</script>"
?>

</body>
</html>
