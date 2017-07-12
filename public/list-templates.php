<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>List Templates</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>

  </head>
  <body>
    <?php
      $templates = $client->getTemplates();

      foreach($templates as $template){
        echo "<b>" . $template->title . ": </b><a href='get-template.php?template=$template->template_id'>" . $template->getId() . "</a><br />";
      }
    ?>
  </body>
</html>
