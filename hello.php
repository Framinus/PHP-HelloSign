<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Test</title>
    <link rel="stylesheet" type="text/css" href="style.css"></link>
  </head>
  <body>
    <h2>
      PHP HelloSign Example
    </h2>

    <div>
      <h3>What would you like to do?</h3>
      <h4>Account Information</h4>
      <ul>
        <li><a href="/account/info.php">Get Account</a></li>
      </ul>

      <h4>Signature Requests</h4>
      <ul>
        <li><form name="signature" action="/signature-requests/get-request.php" method="get">
          <input type="text" name="request" placeholder="signature request id">
          <input type="submit">
        </form></li>
      </ul>
    </div>
  </body>
</html>
