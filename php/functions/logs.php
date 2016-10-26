<?php
function emptyLog($dbHandler){
	$sql = "TRUNCATE logs";
	$data = $dbHandler->handleQuery($sql, false);
}

?>
