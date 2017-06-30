<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Get Signature Request</title>
  </head>
  <body>
    <?php
      require_once '../vendor/autoload.php';
      require_once '../api_key.php';

      $client = new HelloSign\Client($api_key);

      $signature_request = $client->getSignatureRequest($_GET["request"]);
      $title = $signature_request->title;

      print_r($signature_request);
    ?>
  </body>
</html>
