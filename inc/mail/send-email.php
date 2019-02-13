<?php

  //response generation function
  $response = "";

  //function to generate response
  function generate_response($type, $message){

    global $response;

    if($type == "success") {
      $response = "<div class='alert alert-success' role='alert'>{$message}</div>";
    }
    else {
      $response = "<div class='alert alert-danger' role='alert'>{$message}</div>";
    }

  }

  //response messages
  $not_human       = "Human verification incorrect. Please try again.";
  $missing_content = "Please complete all required fields.";
  $email_invalid   = "Email address invalid.";
  $message_unsent  = "An error occurred, please try again. If this continues then please report it to <a href='mailto:info@parkerbs.com'>info@parkerbs.com</a>";
  $message_sent    = "Thank you, your application has been submitted.";

  //user posted variables
  $fname   = $_POST['message_fname'];
  $lname   = $_POST['message_lname'];
  $email   = $_POST['message_email'];
  $number  = $_POST['message_number'];
  $message = $_POST['message_text'];
  $human   = $_POST['message_human'];

  // necessary for sending attachment
  move_uploaded_file($_FILES["message_resume"]["tmp_name"], WP_CONTENT_DIR . '/uploads/' . basename($_FILES['message_resume']['name']));

  //php mailer variables
  //$to = get_option('admin_email');
  $to          = "tristan.jarrett@parkerbs.com";
  $subject     = "Application for " . get_the_title() . " at " . get_post_meta($post->ID, 'custom_input', true) . " via the website";
  $headers     = 'From: '. $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";
  $body        = "First name: " . $fname . "\n" . "Last name: " . $lname. "\n" . "Email: " . $email. "\n" . "Contact number: " . $number . "\n" . "Notes: " . $message . "\n";
  $attachments = array(WP_CONTENT_DIR . "/uploads/" . $_FILES["message_resume"]["name"]);

  if(!$human == 0) {
    if($human != 2) {
      generate_response("error", $not_human); //not human!
    }
    else {
      $sent = wp_mail($to, $subject, $body, $headers, $attachments);
      if($sent) {
        generate_response("success", $message_sent); //message sent!
      }
      else {
        generate_response("error", $message_unsent); //message wasn't sent
      }
    }
  }
  elseif($_POST['submitted']) {
    generate_response("error", $missing_content);
  }

?>