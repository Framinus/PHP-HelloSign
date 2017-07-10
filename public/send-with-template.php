<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Send Signature Request with Template</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  </head>
  <body>
    <?php
      $request = new HelloSign\TemplateSignatureRequest;
      $request->enableTestMode();
      $request->setTemplateId('1407503f5ee3f690928072acd7265be66b0d4a23');
      $request->setSubject('I sent this with a template & PHP!');
      $request->setSigner('Client', $email, 'Jen');
      $response = $client->sendTemplateSignatureRequest($request);

      print_r($response);
    ?>

  </body>
</html>
