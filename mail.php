<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$phone = $_POST['number'];
$option = $_POST['select'];
$to = "thesantakidz102@gmail.com";
$subject = "Enquiry From website";


//Message Body..
$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
$message .= "<tr><td><strong>E-mail:</strong> </td><td>" . $mail . "</td></tr>";
$message .= "<tr><td><strong>Contact:</strong> </td><td>" . $phone . "</td></tr>";
$message .= "<tr><td><strong>Option:</strong> </td><td>" . $option . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";


//headers..
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers = 'From: info@shreyainternationalschool.com' . "\r\n" .
  $headers .= 'Cc: digiconnectonline@gmail.com' . "\r\n";


//mail it...
if ($phone != NULL) {
  mail($to, $subject, $message, $headers);
  ?>
  <script language="javascript" type="text/javascript">
    alert('Thank you for the message. We will contact you shortly.');
    window.location = 'index.html';
  </script>
<?php

} else { ?>
  <script language="javascript" type="text/javascript">
    alert('Message failed. Please, send an email to info@shreyainternationalschool.com');
  </script>
<?php
}
header('Location: index.html');
?>