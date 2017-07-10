<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Send Signature Request</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  </head>
  <body>
    <?php
      $request = new HelloSign\SignatureRequest;
      $request->enableTestMode();
      $request->setTitle('Test with PHP App');
      $request->setSubject('I sent this with PHP!');
      $request->addSigner($email, 'Jen', 0);
      $request->addFileUrl('http://www.samplewords.com/wp-content/uploads/2010/08/General-Contract-Agreement.pdf');
      $response = $client->sendSignatureRequest($request);

      print_r($response);
    ?>

  </body>
</html>
