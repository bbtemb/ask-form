<?php
  $name = htmlspecialchars($_POST['name']);
  $phone  = htmlspecialchars($_POST['phone']);
  $email  = htmlspecialchars($_POST['email']);

  echo  $name, ' ', $phone,' ', $email;
?>