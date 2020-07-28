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
<!-- Imports the script necessary to run Google ReCaptcha. -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Imports the about.css stylesheet. -->
<link rel="stylesheet" type="text/css" href="contact.css">
</head>

<body>
  <!-- Include the navigation bar from nav.php.-->
  <?php
  include 'nav.php';
  ?>

  <!-- Creates the website header. -->

<?php

$fNameError = $lNameError = $emailError = $msgError = "";

$captcha="";
$error = 0;



if (isset($_POST['SubmitButton'])) {

//-------------------Get First Name from Form details.------------------

//Was something really entered?
if (empty($_POST["FName"])) {
  $fNameError = "* First Name is required.";
}

else {
  $FName = $_POST['FName'];

}

//-------------------Get Last Name from Form details.------------------

//Was something really entered?
if (empty($_POST["LName"])) {
  $lNameError = "* Last Name is required.";
}

else {
  $LName = $_POST['LName'];
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
if (!empty($_POST["FName"]) && !empty($_POST["LName"]) && !empty($_POST["Email"])
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


<!--Creates section for a contact form.-->
<div class="section">

<h3>Need to get into contact with me? Great, Just fill out the form below.

* Indicates a required field.</h3>

<!--Create the contact form.-->
<div class="form">
<div class="labels">

<div class="row">

  <!--Initiate the form to process within the same page.-->
  <form action = "<?=$_SERVER['PHP_SELF']?>" method="POST">
  <div class="inputcol">
    <label for="FName">Name *</label><br>

    <input type="text" id="FName" name="FName" placeholder="First Name" style="width: 200px">
    <input type="text" id="LName" name="LName" placeholder="Last Name" style="width: 200px">
    <br><span class = "error"><?php echo $fNameError;?></span>
    <span class = "error"><?php echo $lNameError;?></span><br><br>
  </div>
</div>

<div class="row">
  <div class="imputcol">
    <label for="Email">Email *</label><br>
    <input type="text" id="Email" name="Email" placeholder="Email Address" style="width: 405px">
    <br><span class = "error"><?php echo $emailError;?></span><br><br>
  </div>
</div>

<div class="row">
  <div class="inputcol">
    <label for="Phone">Phone (Optional)</label><br>

    <input type="text" id="Phone" name="Phone" placeholder="Phone Number" maxlength="10" style="width: 250px">
    <br><br>
  </div>
  </div>

<div class="row">
  <div class="inputcol">
    <label for="Message">Message *</label><br>

    <textarea id="Message" name="Message" placeholder="Message... Limit 2000 Characters"
    maxlength = "2000" style="height:200px"></textarea>
    <br><span class = "error"><?php echo $msgError;?></span><br><br>

</div>
</div>

<br>

<!--Initializes the Captcha Public Key.-->
<div class="g-recaptcha" data-sitekey="6LfwmLUZAAAAAI4FtWneh7Q2us9J_MxNNkkYKbsT"></div>

<div class="row">
  <input type="submit" value="Submit" name="SubmitButton">
</div>
</div>
</form>
</div>

</div>



</body>

</html>
