<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Send Embedded Signature Request</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>

  </head>
  <body>
    <div id="embeddedhs">
    </div>
    <?php
      $request = new HelloSign\SignatureRequest;
      $request->enableTestMode();
      $request->setTitle('Test with PHP App');
      $request->addSigner($email, 'Jen', 0);
      $request->addFile('corgi.jpg');

      $embedded_request = new HelloSign\EmbeddedSignatureRequest($request, $client_id);
      $response = $client->createEmbeddedSignatureRequest($embedded_request);

      $signatures = $response->getSignatures();
      $signature_id = $signatures[0]->getId();

      $embedded = $client->getEmbeddedSignUrl($signature_id);
      $sign_url = $embedded->getSignUrl();

      include('iframe.php');
    ?>

  </body>
</html>
