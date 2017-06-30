<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Get Account</title>
  </head>
  <body>
    <?php
      require_once '../vendor/autoload.php';
      require_once '../api_key.php';

      $client = new HelloSign\Client($api_key);

      $account = $client->getAccount();
      $info = $account->toArray();

      $json = json_encode($info, JSON_PRETTY_PRINT);
      print_r($json);

    ?>  
  </body>
</html>
