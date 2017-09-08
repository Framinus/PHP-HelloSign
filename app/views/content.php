<div>
  <h3>
    What would you like to do?
  </h3>
  <h4>
    Account Information
  </h4>
  <ul>
    <li>
      <a href="account-info.php">Get Account</a>
    </li>
    <li>
      <a href="update-account.php">Update Account</a>
    </li>
    <li>
      <a href="create-account.php">Create Account</a>
    </li>
    <li>
      <a href="verify-account.php">Verify Account</a>
    </li>
  </ul>

  <h4>
    Signature Requests
  </h4>
  <ul>
    <li>
      Get signature request:
      <form name="signature" action="get-sig-request.php" method="get">
        <input type="text" name="request" placeholder="signature request id">
        <input type="submit">
      </form>
    </li>
    <li>
      <a href="list-sig-requests.php">List signature requests</a>
    </li>
    <li>
      <a href="send-request.php">Send Signature Request</a>
    </li>
    <li>
      <a href="send-with-template.php">Send Signature Request with Template</a>
    </li>
    <li>
      Download signature request:
      <form name="signature" action="download.php" method="get">
        <input type="text" name="request" placeholder="signature request id">
        <input type="submit">
      </form>
    </li>
    <li>
      <a href="reminder.php">Send Reminder</a>
    </li>
    <li>
      Cancel signature request:
      <form name="signature" action="cancel.php" method="get">
        <input type="text" name="request" placeholder="signature request id">
        <input type="submit">
      </form>
    </li>
  </ul>
  <h4>
    Templates
  </h4>
  <ul>
    <li>Get template:
      <form name="template" action="get-template.php" method="get">
        <input type="text" name="template" placeholder="template id">
        <input type="submit">
      </form>
    </li>
    <li>
      <a href="list-templates.php">List Templates</a>
    </li>
    <li>
      Add User Access to Template:
      <form name="template" action="add-template-access.php" method="get">
        <input type="text" name="template" placeholder="template id"><br>
        <input type="text" name="email" placeholder="email address">
        <input type="submit">
      </form>
    </li>
  </ul>
  <h4>Embedded Signing</h4>
  <ul>
    <li>
      <a href="embedded-sig-request.php">Send Embedded Signature Request</a>
    </li>
    <li>
      <a href="embedded-template-request.php">Send Embedded Signature Request with Template</a>
    </li>
  </ul>
  <h4>Embedded Templates</h4>
  <ul>
    <li>
      <a href="embedded-template.php">Create embedded template</a>
    </li>
    <li>
      Edit template:
      <form name="template" action="edit-embedded-template.php" method="get">
        <input type="text" name="template" placeholder="template id">
        <input type="submit">
      </form>
    </li>
    <li>
      Preview signature request with template:
      <form name="template" action="preview-template-request.php" method="get">
        <input type="text" name="template" placeholder="template id">
        <input type="submit">
      </form>
    </li>
  </ul>
  <h4>
    Embedded Requesting
  </h4>
  <ul>
    <li><a href="embedded-request.php">Embedded Request</a></li>
  </ul>
</div>
