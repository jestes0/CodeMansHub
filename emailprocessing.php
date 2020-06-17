<?php

$error = 0;

//-------------------Get Name from form.------------------
$Name = $_POST['Name'];
// did they really enter something?
if (strlen($Name) == 0) {
  $error = 1;
}

else {
  echo "Name: ", $Name, nl2br("\r\n");
}

// -----------------------Get Email------------------------
$Email = $_POST['Email'];
//did they really enter something?
if (strlen($Email) == 0) {
  $error = 1;
}

else {
  echo "Email: ", $Email, nl2br("\r\n\n");
}

// --------------------Get Phone Number--------------------

$Phone = $_POST['Phone'];
if (strlen($Phone) == 0) {
  $error = 1;
}

else {
  echo "Phone: ", $Phone, nl2br("\r\n\n");
}

// --------------------Get Message--------------------

$Message = $_POST['Message'];
if (strlen($Message) == 0) {
  $error = 1;
}

else {
  echo "Message: ", $Message, nl2br("\r\n\n");
}

if ($error != 0) {
        echo "Please enter valid information.";
}


else {
  echo "Submitting Email...";
}

$to = "jestes29706@gmail.com";
$subject = "Website Response from User." + $Name;
$msg = $Message;

mail($to,$subject,$msg);
?>
