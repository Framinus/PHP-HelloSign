<div>
  <h3>What would you like to do?</h3>
  <h4>Account Information</h4>
  <ul>
    <li><a href="account-info.php">Get Account</a></li>
  </ul>

  <h4>Signature Requests</h4>
  <ul>
    <li>Get signature request: <form name="signature" action="get-sig-request.php" method="get">
      <input type="text" name="request" placeholder="signature request id">
      <input type="submit">
    </form></li>
    <li>
      <a href="list.php">List signature requests</a>
    </li>
    <li>
      <a href="send-request.php">Send Signature Request</a>
    </li>
    <li>
      <a href="send-with-template.php">Send Signature Request with Template</a>
    </li>
    <li>Download signature request: <form name="signature" action="download.php" method="get">
      <input type="text" name="request" placeholder="signature request id">
      <input type="submit">
    </form></li>
  </ul>
  <h4>Embedded Signing</h4>
  <ul>
    <li><a href="embedded-sig-request.php">Send Embedded Signature Request</a></li>
    <li><a href="embedded-template-request.php">Send Embedded Signature Request with Template</a></li>
  </ul>
  <h4>Embedded Templates</h4>
  <ul>
    <li><a href="embedded-template.php">Create embedded template</a></li>
  </ul>
</div>
