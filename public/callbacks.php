<?php
  echo "Hello API Event Received";

  $data = json_decode($_POST["json"]);

  $event_type = $data->event->event_type;

  switch ($event_type) {
    case "signature_request_viewed":
      echo "SIGNATURE REQUEST VIEWED!";
      break;
    case "signature_request_signed":
      echo "SIGNATURE REQUEST SIGNED!";
      break;
    case "signature_request_downloadable":
      echo "SIGNATURE REQUEST DOWNLOADABLE";
      break;
    case "signature_request_sent":
      echo "SIGNATURE REQUEST SENT";
      break;
    case "signature_request_all_signed":
      echo "SIGNATURE REQUEST ALL SIGNED";
      break;
  }

 ?>
