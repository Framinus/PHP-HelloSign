<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      require_once 'vendor/autoload.php';
      require_once 'api_key.php';

      $client = new HelloSign\Client($api_key);
      $signature_request = $client->getSignatureRequest('fa4d02010c4e3e7c9167c0afbc608b235cbe338b');
      $array = $signature_request->toArray();

      print_r($array)
    ?>
    <br /><br />
    <?php
      print_r($array['signature_request_id']);
    ?>

    <p>
      <form action="action.php" method="post">
        <p>Your name: <input type="text" name="name" placeholder="name" /></p>
        <p>Your age: <input type="text" name="age" placeholder="age" /></p>
        <p><input type="submit" /></p>
      </form>
    </p>
  </body>
</html>
