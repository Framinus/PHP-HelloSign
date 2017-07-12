<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
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

      foreach($signature_requests as $sig){
        echo "<b>" . $sig->title . ": </b><a href='get-sig-request.php?request=$sig->signature_request_id'>" . $sig->signature_request_id . "</a><br />";
      }
    ?>
  </body>
</html>
