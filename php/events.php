<?php

  session_start();
  // Libaries
  require "assets/generals.php";

  require "assets/config/defaults.php";

  require "assets/classes/connection_class.php";
  require "assets/classes/user_class.php";
  require "assets/classes/input_class.php";

  error_reporting(0);

  // Allow ERRORS to be shown.
  dev_mode(true);

  if(isset($_POST["requestEvents"]) && $_POST["requestEvents"] == true){
    $eventsHandling =  new connectionHandler();
    $sql = "SELECT DATE_FORMAT(logs_date, '%d-%m-%Y %H:%i:%s') AS logs_date, logs_content FROM logs ORDER BY logs_date DESC LIMIT 100";
    $data = $eventsHandling->processQuery($sql);

    if(empty($data) || $data == 0){
      echo "
      <tr>
          <td></td>
          <td>Momenteel geen gebeurtenissen in de database.</td>
      <tr>";
      die();
    }

    foreach ($data as $key => $value) {
      echo "
        <tr>
    				<td>".$value->logs_date."</td>
    				<td>".$value->logs_content."</td>
    		<tr>";
    }
  }

  if(isset($_GET["requestEventsDownload"])){


    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename='."logboek ".date('d-m-Y').".csv");

    $output = fopen('php://output', 'w');


    fputcsv($output, array('Datum en tijd', 'Gebeurtenis'), ';', ' ');

    $sql = "SELECT logs_date, logs_content FROM logs ORDER BY logs_date DESC";

    $results = $conn->query($sql);
    $results = $results->fetchAll();

    for ($i=0; $i < count($results); $i++) {
      foreach ($results[$i] as $key => $value) {
        if(is_int($key)) {
          unset($results[$i][$key]);
        }
      }
    }

    foreach ($results as $row) {
      fputcsv($output, $row, ';', ' ');
    }

  }
?>
