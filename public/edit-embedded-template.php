<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Embedded Template</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  </head>
  <body>
    <h3>Edit Embedded Template</h3>
    <?php
      $template_id = $_GET["template"];
      $response = $client->getEmbeddedEditUrl($template_id);
      $edit_url = $response->edit_url;

      include('iframe.php');
    ?>

  </body>
</html>
