<?php

  // response generation function
  $response = "";

  // function to generate response
  function generate_response($type, $message) {

    global $response;

    if($type == "success") {
      $response = "<div class='alert alert-success' role='alert'>{$message}</div>";
    }
    else {
      $response = "<div class='alert alert-danger' role='alert'>{$message}</div>";
    }

  }

  // response messages
  $not_human       = "Human verification incorrect. Please try again.";
  $missing_content = "Please complete all required fields.";
  $email_invalid   = "Email address invalid.";
  $message_unsent  = "An error occurred, please try again. If this continues then please report it to <a href='mailto:info@parkerbs.com'>info@parkerbs.com</a>";
  $message_sent    = "Thank you, your message has been sent successfully. We will be in touch soon.";

  // user posted variables
  $fname   = $_POST['message_fname'];
  $lname   = $_POST['message_lname'];
  $email   = $_POST['message_email'];
  $number  = $_POST['message_number'];
  $branch  = $_POST['message_branch'];
  $account  = $_POST['message_account'];
  $acc_no  = $_POST['message_acc_no'];
  $message = $_POST['message_text'];
  $human   = $_POST['message_human'];

  // php mailer variables
  $to          = $branch;
  $subject     = "Message from " . $fname . " " . $lname . " via the website";
  $headers     = 'From: '. $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";
  $body        = "First name: " . $fname . "\n" . "Last name: " . $lname. "\n" . "Email: " . $email. "\n" . "Contact number: " . $number . "\n" . "Has an account: " . $account . "\n" . "Account number: " . $acc_no . "\n" . "Message: " . $message . "\n";

  if(!$human == 0) {
    if($human != 2) {
      generate_response("error", $not_human); // not human!
    }
    else {
      $sent = wp_mail($to, $subject, $body, $headers);
      if($sent) {
        generate_response("success", $message_sent); // message sent!
      }
      else {
        generate_response("error", $message_unsent); // message wasn't sent
      }
    }
  }
  elseif($_POST['submitted']) {
    generate_response("error", $missing_content);
  }

?>
