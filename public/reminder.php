
<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Send Reminder</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  </head>
  <body>
    <?php
      $response = $client->requestEmailReminder('f4e043c5ee1a5fb4ff2361f26295029532b5dd42', 'jen.young@hellosign.com', 'Jen');

      print_r($response);
     ?>
  </body>
</html>
