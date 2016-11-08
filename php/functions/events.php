<?php

  function getEvents($dbHandler){
    $structure = "";
    $sql = "SELECT DATE_FORMAT(logs_date, '%d-%m-%Y %H:%i:%s') AS logs_date, logs_content FROM logs ORDER BY logs_date ASC LIMIT 50";
    $data = $dbHandler->handleQuery($sql, false, true, PDO::FETCH_OBJ);
    if(empty($data) || $data === 0){
      return "<tr>
          <td></td>
          <td>Momenteel geen gebeurtenissen in de database.</td>
      <tr>";
    }

    foreach ($data as $key => $value) {
      $structure.= "
        <tr>
    				<td>".$value->logs_date."</td>
    				<td>".$value->logs_content."</td>
    		<tr>";
    }
    return $structure;
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

  function emptyLog($dbHandler){
  	$sql = "TRUNCATE logs";
  	$data = $dbHandler->handleQuery($sql, false);
  }
?>
