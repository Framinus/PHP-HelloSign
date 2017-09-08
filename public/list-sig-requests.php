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
    <title>List Signature Requests</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  </head>
  <body>
    <?php
      $signature_requests = $client->getSignatureRequests(1);
      print_r($signature_requests);
    ?>
  </body>
</html>
