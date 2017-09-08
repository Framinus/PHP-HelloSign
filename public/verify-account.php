<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Verify Account</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>

  </head>
  <body>
    <?php
      echo $client->isAccountValid('jen.young@hellosign.com');


     ?>
  </body>
</html>
