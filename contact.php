<html>
<title>
  Codemans Hub
</title>
<head>
  <link rel="stylesheet" type="text/css" href="contact.css">
</head>

<body>
<!--Load navigation bar from nav.php-->
  <?php

  include 'nav.php';
  ?>

  <div class="header">
    <h1>Contact</h1>
  </div>

<!--Form Designed to enter in contact information.-->
<div class="section">

<h2>Contact Form</h2>
<p>Need to get into contact with me? Great, Just fill out the form below.</p>
<div class="form">
<div class="labels">

<div class="row">
  <form action = "<?=$_SERVER['PHP_SELF']?>" method="POST">
  <div class="labelcol">
    <label for="FName">Name</label>
  </div>

  <div class="inputcol">
    <input type="text" id="FName" name="FName" placeholder="First Name" style="width: 200px">
    <input type="text" id="LName" name="LName" placeholder="Last Name" style="width: 200px">
  </div>
</div>

<div class="row">
  <div class="labelcol">
    <label for="Email">Email</label>
  </div>

  <div class="inputcol">
    <input type="text" id="Email" name="Email" placeholder="Email Address">
  </div>
</div>

<div class="row">
  <div class="labelcol">
    <label for="Phone">Phone</label>
  </div>

  <div class="inputcol">
    <input type="text" id="Phone" name="Phone" placeholder="Phone Number" maxlength="10">
  </div>
  </div>

<div class="row">
  <div class="labelcol">
    <label for="Message">Message (Limit 2000 characters.)</label>
  </div>

  <div class ="inputcol">
    <input type="text" id="Message" name="Message" placeholder="Message..." maxlength = "2000" style="height:200px">
  </div>
</div>

<div class="row">
  <input type="submit" value="Submit" name="SubmitButton">
</div>
</div>
</form>
</div>

<?php

$error = 0;

if (isset($_POST['SubmitButton'])) {

//-------------------Get First NameName from form.------------------
$FName = $_POST['FName'];
// did they really enter something?
if (strlen($FName) == 0) {
  $error = 1;
}


//-------------------Get First NameName from form.------------------
$LName = $_POST['LName'];
// did they really enter something?
if (strlen($LName) == 0) {
  $error = 1;
}

// -----------------------Get Email------------------------
$Email = $_POST['Email'];
//did they really enter something?
if (strlen($Email) == 0) {
  $error = 1;
}

// --------------------Get Phone Number--------------------

$Phone = $_POST['Phone'];
if (strlen($Phone) == 0) {
  $error = 1;
}


// --------------------Get Message--------------------

$Message = $_POST['Message'];
if (strlen($Message) == 0) {
  $error = 1;
}

if ($error != 0) {
$errormsg = "<h2>Please fill out the entire form before submitting. Thank you.</h2>";
$pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL'])
&&($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0'
||  $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache');

if($pageRefreshed == 1){
}else{
    //enter code here
    echo $errormsg;
}
}

else {

  print "Submitting Email...";
  $to = "jestes29706@gmail.com";
  $subject = "Website Response from User." + $FName;
  $msg = $Message;

  mail($to,$subject,$msg);

  echo "<script>
          setTimeout(function() {
              window.location = 'emailsent.php';
          }, 100);
      </script>";
}


}

?>
</div>



</body>

</html>
