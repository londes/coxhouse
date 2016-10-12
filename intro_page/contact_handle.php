<?php
    $name = $_POST['form-name'];
    $phone_number= $_POST['form-number'];
    $email = $_POST['form-email'];
    $message = $_POST['form-request'];
    $human = $_POST['human'];

    $from = 'From: Cox House Lifting Website';
    $to = 'rcox342@gmail.com';
    $subject = 'Contact Submitted via Website';
    $body = "From: $name\n Number: $phone_number\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
      if ($name != '' && $email != '') {
        if ($human == '4') {
            if (mail ($to, $subject, $body, $from)) {
	             echo '<p>Your message has been sent!</p>';
	          } else {
	             echo '<p>Something went wrong, go back and try again!</p>';
	          }
	      } else if ($_POST['submit'] && $human != '4') {
	         echo '<p>You answered the anti-spam question incorrectly!</p>';
	      }
      } else {
        echo '<p>You need to fill in all required fields!!</p>';
      }
    }
?>
