<?php

// cHECK IF USER COMMING FROM a REQUEST
if(isset($_POST['submit'])){

  // Assign Variabels
  $name =filter_var($_POST['username'],FILTER_SANITIZE_STRING);
  $mail =filter_var( $_POST['email'],FILTER_VALIDATE_EMAIL);
  $phone =filter_var( $_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
  $msg =filter_var($_POST['message'],FILTER_SANITIZE_STRING);
  

$mailTo = 'Baderw20@hotmail.com';

$subject = 'A New Message Received From ' .$name;

$htmlContent = '<h2> Email Request Received </h2>
<p> <b>Client Name: </b> ' .$name . '</p>
<p> <b>Email: </b> ' .$mail . '</p>
<p> <b>Phone Number: </b> ' .$phone . '</p>
<p> <b>The Message: </b> ' .$msg . '</p>';


$headers = "Form: " .$name . "<". $mail . ">";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$result= mail($mailTo, $subject, $htmlContent , $headers);

if($result){
    $success = "Send it!";
}else{
    $No = "no send";
}






  // Creating Array Of Errors
//   $formErrors = array();
//   if(strlen($name)<=2){
//     $formErrors[] = "- The name must be larger than <strong>2</strong> Characters.";
//   }
//   if(strlen($mail)<=2){
//     $formErrors[] = "- Please write your <strong>email</strong>.";
//   }
//   if(strlen($phone)<10 || strlen($phone)>10){
//     $formErrors[] = "- The Phone number must be <strong>10</strong> Number.";
//   }
//   if(strlen($msg)<10){
//     $formErrors[] = "- The message must be larger than <strong>10</strong> Characters.";
//   }

// if no errors send the email [mail(to , subject , message,header,parameters)]
// if(empty($formErrors)){
// $to = "baderw20@hotmail.com";

// $headers = 'Form: ' . $mail . '\r\n';
// $subject = 'Contant From';
// if (mail($to, $subject ,$msg, $headers)){
//      echo 'yes';
// }
// }
}
?>
