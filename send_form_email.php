<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "sherryandkevan@gmail.com";
 
    $email_subject = "RSVP";
 
     
 
     
  /*
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists

    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 */
    $name = $_POST['name']; // required
    $guestpref0 = $_POST['guestpref0'];
    $guest1_name = $_POST['guest1_name'];
    $guestpref1 = $_POST['guestpref1'];
    $guest2_name = $_POST['guest2_name'];
    $guestpref2 = $_POST['guestpref2'];
    $guest3_name = $_POST['guest3_name'];
    $guestpref3 = $_POST['guestpref3'];
    $guest4_name = $_POST['guest4_name'];
    $guestpref4 = $_POST['guestpref4'];
    $guest5_name = $_POST['guest5_name'];
    $guestpref5 = $_POST['guestpref5'];
    $guest0 = $_POST['guest0'];
    $guest1 = $_POST['guest1'];
    $guest2 = $_POST['guest2'];
    $guest3 = $_POST['guest3'];
    $guest4 = $_POST['guest4'];
    $guest5 = $_POST['guest5'];



    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required


 
 /*   $error_message = "";
 
  $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
*/ 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href","<",">");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)." Attending:".clean_string($guest0)."\n";
    $email_message .= "Food Choice: ".clean_string($guestpref0)."\n";
    $email_message .= "Guest 1: ".clean_string($guest1_name)." Attending:".clean_string($guest1)."\n";
    $email_message .= "Guest 1 Food Choice: ".clean_string($guestpref1)."\n";
    $email_message .= "Guest 2: ".clean_string($guest2_name)." Attending:".clean_string($guest2)."\n";
    $email_message .= "Guest 2 Food Choice: ".clean_string($guestpref2)."\n";
    $email_message .= "Guest 3: ".clean_string($guest3_name)." Attending:".clean_string($guest3)."\n";
    $email_message .= "Guest 3 Food Choice: ".clean_string($guestpref3)."\n";
    $email_message .= "Guest 4: ".clean_string($guest4_name)." Attending:".clean_string($guest4)."\n";
    $email_message .= "Guest 4 Food Choice: ".clean_string($guestpref4)."\n";
    $email_message .= "Guest 5: ".clean_string($guest5_name)." Attending:".clean_string($guest5)."\n";
    $email_message .= "Guest 5 Food Choice: ".clean_string($guestpref5)."\n";    
    $email_message .= "Guest Names: ".clean_string($guest_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 

 
}
 
?>