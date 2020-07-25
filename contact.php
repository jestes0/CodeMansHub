<html>
<title>
  Codemans Hub
</title>
<head>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link rel="stylesheet" type="text/css" href="contact.css">
</head>

<body>
<!--Load navigation bar from nav.php-->
  <?php
  include 'nav.php';
  ?>

    <h1>Contact</h1>

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
    <input type="text" id="Email" name="Email" placeholder="Email Address" style="width: 500px">
  </div>
</div>

<div class="row">
  <div class="labelcol">
    <label for="Phone">Phone</label>
  </div>

  <div class="inputcol">
    <input type="text" id="Phone" name="Phone" placeholder="Phone Number" maxlength="10" style="width: 250px">
  </div>
  </div>

<div class="row">
  <div class="labelcol">
    <label for="Message">Message</label>
  </div>

  <div class="row">
  <div class ="inputcol">
    <textarea id="Message" name="Message" placeholder="Message... Limit 2000 Characters"
    maxlength = "2000" style="height:200px"></textarea>
</div>
</div>

<br>
<div class="g-recaptcha" data-sitekey="6LfwmLUZAAAAAI4FtWneh7Q2us9J_MxNNkkYKbsT"></div>

<div class="row">
  <input type="submit" value="Submit" name="SubmitButton">
</div>
</div>
</form>
</div>

<?php

$postData = $statusMsg = '';
$status = 'error';

// If the form is submitted
if(isset($_POST['submit'])){
    $postData = $_POST;

    // Validate form fields
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){

        // Validate reCAPTCHA box
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
            // Google reCAPTCHA API secret key
            $secretKey = '6LfwmLUZAAAAANTBckuggesJyP-je_dQ5PnMdNg3';

            // Verify the reCAPTCHA response
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']);

            // Decode json data
            $responseData = json_decode($verifyResponse);

            // If reCAPTCHA response is valid
            if($responseData->success){
                // Posted form data
                $name = !empty($_POST['name'])?$_POST['name']:'';
                $email = !empty($_POST['email'])?$_POST['email']:'';
                $message = !empty($_POST['message'])?$_POST['message']:'';

                // Send email notification to the site admin
                $to = 'admin@example.com';
                $subject = 'New contact form have been submitted';
                $htmlContent = "
                    <h1>Contact request details</h1>
                    <p><b>Name: </b>".$name."</p>
                    <p><b>Email: </b>".$email."</p>
                    <p><b>Message: </b>".$message."</p>
                ";

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                // More headers
                $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";

                // Send email
                @mail($to,$subject,$htmlContent,$headers);

                $status = 'success';
                $statusMsg = 'Your contact request has submitted successfully.';
                $postData = '';
            }else{
                $statusMsg = 'Robot verification failed, please try again.';
            }
        }else{
            $statusMsg = 'Please check on the reCAPTCHA box.';
        }
    }else{
        $statusMsg = 'Please fill all the mandatory fields.';
    }
}


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
  $subject = "Website Response from: " . $FName . $LName;
  $msg = $Message;
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
</div>



</body>

</html>
