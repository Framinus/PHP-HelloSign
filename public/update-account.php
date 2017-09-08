<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');

  $account = $client->getAccount();
  $info = $account->toArray();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update Account</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  </head>
  <body>
    <p class="account">
      <?php
      $account->setCallbackUrl('www.testfromphp.com');
      $response = $client->updateAccount($account);

      print_r($response);
      ?>
  </body>
</html>
