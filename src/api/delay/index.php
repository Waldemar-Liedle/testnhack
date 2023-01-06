<?php
  $interval = 0;
  $type = "default";
  $seconds = intval($_GET["seconds"]);
  
  if ($seconds > 0) {
    $interval = $seconds;
    $type = "custom";
  }
  
  sleep($interval);
    
  $response = [
    "seconds" => $interval,
    "type" => $type
  ];
  
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode($response);
?>