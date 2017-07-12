<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>iFrame</title>
    <script type="text/javascript" src="https://s3.amazonaws.com/cdn.hellosign.com/public/js/hellosign-embedded.LATEST.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>

  </head>
  <body>
    <?php if (defined($sign_url)) {
      $url = $sign_url;
    } else {
      $url = $edit_url;
    } ?>

    <script>
      HelloSign.init('513c9bcded6de4e70ffca114573540d9');
      HelloSign.open({
          url: "<?php echo $url; ?>",
          allowCancel: true,
          uxVersion: 2,
          debug: true,
          skipDomainVerification: true,
          messageListener: function(eventData) {
            console.log(eventData);
          }
        });
    </script>
  </body>
</html>
