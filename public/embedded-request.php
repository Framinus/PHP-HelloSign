<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Embedded Requesting</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>

  </head>
  <body>
    <?php
      $request = new HelloSign\SignatureRequest;
      $request->enableTestMode();
      $request->setRequesterEmail('jen.young@hellosign.com');
      $request->addFile('corgi.jpg');

      $draft_request = new HelloSign\UnclaimedDraft($request, $client_id);
      $draft_request->setIsForEmbeddedSigning(true);

      $response = $client->createUnclaimedDraft($draft_request);

      $claim_url = $draft_request->getClaimUrl();
      // echo $draft_request->c;
      include('iframe.php');
    ?>

  </body>
</html>
