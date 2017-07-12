<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Get Template</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  </head>
  <body>
    <h3>Get Template</h3>
    <?php
      $template = $client->getTemplate($_GET["template"]);

      print_r($template);
      echo "<p>";
      echo "<b>Template ID: </b>" . $template->getId();
      echo "<br><b>Template Title: </b>" . $template->title;

       ?>

  </body>
</html>
