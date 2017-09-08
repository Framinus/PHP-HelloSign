<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add User Access to Template</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  </head>
  <body>
    <h3>Add User Access to Template</h3>
    <?php
        $response = $client->addTemplateUser($_GET["template"], $_GET["email"]);

        print_r($response);
    ?>

  </body>
</html>
