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
      $response = $client->getFiles($_GET["request"], ".", HelloSign\SignatureRequest::FILE_TYPE_ZIP);
       ?>

  </body>
</html>
