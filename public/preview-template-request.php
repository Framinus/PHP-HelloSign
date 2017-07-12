<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Preview Embedded Signature Request with Template</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  </head>
  <body>
    <h3>Preview Embedded Signature Request with Template</h3>
    <?php
      $template_id = $_GET["template"];

      $baseReq = new HelloSign\TemplateSignatureRequest();
      $baseReq->setTemplateId($template_id);
      $baseReq->enableTestMode();
      $baseReq->setSigner('Client', 'jen.young@hellosign.com', 'Jen');
      $baseReq->setSigningRedirectUrl('http://www.google.com');
      $baseReq->setRequesterEmailAddress('jen.young+1@hellosign.com');

      $request = new HelloSign\EmbeddedSignatureRequest($baseReq);
      $request->setClientId($client_id);
      $request->enableTestMode();
      $request->setEmbeddedSigning();

      $response = $client->createUnclaimedDraftEmbeddedWithTemplate($request);

      $claim_url = $response->claim_url;

      include('iframe.php');
    ?>

  </body>
</html>
