<!--

File Name: contact.php
Creator: Johnathan Estes
Purpose: Displays information about the website owner.

-->

<html>
<title>
  Codemans Hub
</title>

<head>
  <!-- Imports styles. -->
  <link rel="stylesheet" type="text/css" href="contact.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Ubuntu">
  <!-- Imports the script necessary to run Google ReCaptcha. -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- Include the navigation bar from nav.php.-->

  <?php
    include 'nav.php';

  ?>

</head>

<body>


<!-- PHP Form Processing -->
<?php

$fNameError = $emailError = $msgError = "";

if (isset($_POST['SubmitButton'])) {

//-------------------Get First Name from Form details.------------------

//Was something really entered?
if (empty($_POST["FName"])) {
  $fNameError = "* First Name is required.";
}

else {
  $FName = $_POST['FName'];

}

// -----------------------Get Email from Form details.-----------------
if (empty($_POST["Email"])) {
  $emailError = "* Email is required.";
}

else {
  $Email = $_POST['Email'];
}

// --------------------Get Phone Number--------------------

$Phone = $_POST['Phone'];

// --------------------Get Message--------------------
if (empty($_POST["Message"])) {
  $msgError = "* Message field is required.";
}

else {
  $Message = $_POST['Message'];
}
//--------------------------------------------

//--------------------------------------------
if (!empty($_POST["FName"]) && !empty($_POST["Email"])
&& !empty($_POST["Message"])){

  print "Submitting Email...";
  $to = "jestes29706@gmail.com";
  $subject = "Website Response from: " . $FName . $LName;
  $msg = $Message . "\n". "Phone Number for Contact:" . $Phone;

  $headers = 'From: ' . $Email;

  mail($to,$subject,$msg,$headers);

  echo "<script>
          setTimeout(function() {
              window.location = 'emailsent.php';
          }, 100);
      </script>";
}

}

?>

<div class="content">

<!-- Create Body Header-->
<div class="abouthead">
  <h1>Contact</h1>
</div>


<div class="row">
  <!--Initiate the form to process within the same page.-->
  <form action = "<?=$_SERVER['PHP_SELF']?>" method="POST">

  <!-- Create the Form column for A Users Name. -->
  <div class="inputcol">
    <label for="FName">Name *</label>
    <input type="text" id="FName" name="FName" placeholder="Full Name">
    <br><span class = "error"><?php echo $fNameError;?></span><br>

  </div>
</div>

  <div class="row">
    <div class="inputcol">
      <label for="Email">Email *</label>
      <input type="text" id="Email" name="Email" placeholder="Email Address">
      <br><span class = "error"><?php echo $emailError;?></span><br>
    </div>
  </div>

  <div class="row">
    <div class="inputcol">
      <label for="Phone">Phone </label>
      <input type="text" id="Phone" name="Phone" placeholder="Phone Number" maxlength="10">
      <br>
    </div>
    </div>

<div class="desktopbreak">
</div>
  <div class="row">
    <div class="inputcol">
      <label for="Message">Message *</label><br>

      <textarea id="Message" name="Message" placeholder="Message... Limit 2000 Characters"
      maxlength = "2000"></textarea>
      <br><span class = "error"><?php echo $msgError;?></span><br>
    </div>
  </div>

  <div class="row">
    <input type="submit" value="Submit" name="SubmitButton">
  </div>

</div>

</body>

</html>
