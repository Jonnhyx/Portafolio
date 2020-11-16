<?php

 $receiving_email_address = "jonnhyxdev@gmail.com";

  $php_email_form = "../assets/vendor/php-email-form/php-email-form.php";
  include($php_email_form);


  $contact = new Email_Form;
  
  $contact->setTo($receiving_email_address);
  $contact->setFrom_name($_POST['name']);
  $contact->setfrom_email($_POST['email']);
  $contact->setsubject($_POST['subject']);
  $contact->setmessage($_POST['message']);
  
  echo $contact->send();

?>
