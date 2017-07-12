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
    <?php
      $request = new HelloSign\TemplateSignatureRequest;
      $request->enableTestMode();
      $request->setTemplateId('ed91535b3da4700975d8ee56df2240dcb1fc023f');
      $request->setSubject('Test Template with PHP App');
      $request->setSigner('Client', $email, 'Jen');

      $embedded_request = new HelloSign\EmbeddedSignatureRequest($request, $client_id);
      $response = $client->createEmbeddedSignatureRequest($embedded_request);

      $signatures = $response->getSignatures();
      $signature_id = $signatures[0]->getId();

      $embedded = $client->getEmbeddedSignUrl($signature_id);
      $sign_url = $embedded->getSignUrl();
    ?>

    <a href="iframe.php?url=<?php echo $sign_url ?>">Sign Document</a>

  </body>
</html>
