<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Embedded Template</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>

  </head>
  <body>
    <?php
      $request = new HelloSign\Template();
      $request->enableTestMode();
      $request->setClientId($client_id);
      $request->addFile('corgi.jpg');
      $request->setTitle('Embedded Template from PHP');
      $request->addSignerRole('Client');

      $response = $client->createEmbeddedDraft($request);

      $edit_url = $response->getEditUrl();
      echo $edit_url;

      include('iframe.php');
    ?>


  </body>
</html>
