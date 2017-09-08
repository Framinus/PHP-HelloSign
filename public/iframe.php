<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>iFrame</title>
    <script type="text/javascript" src="https://s3.amazonaws.com/cdn.hellosign.com/public/js/hellosign-embedded.LATEST.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>

  </head>
  <body>
    <?php if (isset($sign_url)) {
      $url = $sign_url;
    } elseif (isset($edit_url)) {
      $url = $edit_url;
    } elseif (isset($claim_url)) {
      $url = $claim_url;
    } ?>

    <script>
      HelloSign.init('513c9bcded6de4e70ffca114573540d9');
      HelloSign.open({
          url: "<?php echo $url; ?>",
          debug: true,
          allowCancel: true,
          skipDomainVerification: true,
          uxVersion: 2,
          container: document.getElementById("embeddedhs"),
          messageListener: function(eventData) {
            console.log(eventData);
          }
        });
    </script>

  </body>
</html>
