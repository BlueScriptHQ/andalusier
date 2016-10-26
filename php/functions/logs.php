<?php
function emptyLog($dbHandler){
	$sql = "TRUNCATE * FROM logs";
	$data = $dbHandler->handleQuery($sql, false);

  return "Het is gelukt";
}

?>
