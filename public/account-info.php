<?php
  require __DIR__ . '/../app/src/app.php';
  include('../app/views/header.php');
  $client = new HelloSign\Client($api_key);

  $account = $client->getAccount();
  $info = $account->toArray();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Get Account</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  </head>
  <body>
    <p class="account">
      <b>Account ID: </b><?php print $account->account_id; ?><br>
      <b>Email Address: </b><?php print $account->email_address; ?><br>
      <b>HelloSign Paid Customer: </b>
      <?php
        if ($account->is_paid_hs === true) {
          echo "Yes";
        } else {
          echo "No";
        }
       ?><br>
       <b>HelloFax Paid Customer: </b>
       <?php
         if ($account->is_paid_hf === true) {
           echo "Yes";
         } else {
           echo "No";
         }
        ?><br>
        <b>QUOTAS<br>
          Templates Left: </b><?php if (is_null($account->quotas->templates_left)) {
            print "N/A";
          } else {
            print $account->quotas->templates_left;
          }
          ?><br>
          <b>Signature Requests Left: </b><?php if (is_null($account->quotas->api_signature_requests_left)) {
              print "N/A";
            } else {
              print $account->quotas->api_signature_requests_left;
            }
            ?>
    </p>
    <?php



      $json = json_encode($info, JSON_PRETTY_PRINT);

      // echo $account
      print_r($json);
      echo $account->account_id;

    ?>
  </body>
</html>
