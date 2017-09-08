<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Account</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  </head>
  <body>
    <?php
      $account = $client->createAccount(
        new HelloSign\Account(
          'jen.young@hellosign.com'
          )
        );

        print_r($account);
    ?>
  </body>
</html>
