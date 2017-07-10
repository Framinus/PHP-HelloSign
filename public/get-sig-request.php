<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Get Signature Request</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  </head>
  <body>
    <h3>Get Signature Request</h3>
    <?php
      $signature_request = $client->getSignatureRequest($_GET["request"]);

      echo "<b>Signature Request ID: </b>" . $signature_request->signature_request_id . "<br />";
      echo "<b> Signature Request Title: </b>" . $signature_request->title . "<br />";

      echo "<p>";
      print_r($signature_request);
      echo "</p>";

       ?>

  </body>
</html>
