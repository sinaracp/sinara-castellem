<?php
  if(isset($_POST['submit'])) {
    $to = "contato@sinaracastellem.com";
    $name_field = $_POST['name'];
    $email_field = $_POST['email'];
    $phone_field = $_POST['phone'];
    $message = $_POST['message'];
    $headers[] = "Content-Type: text/plain; charset=UTF-8"
    $headers[] = "From: Contato do Site <contato@sinaracastellem.com>";

    $subject = "Mensagem de $name_field/$email_field";
    $body = "From: $name_field\nE-Mail: $email_field\n\n Mensagem:\n $message";

    echo "Email foi enviado para $to!";
    mail($to, $subject, $body, $headers);
  } else {
    echo "blarg!";
  }
?>
