<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cancel Signature Request</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  </head>
  <body>
    <h3>Cancel Signature Request</h3>
    <?php
      $response = $client->cancelSignatureRequest($_GET["request"]);
      print_r($response);
       ?>

  </body>
</html>
