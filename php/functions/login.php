<?php

	function checkLogin($dbHandler, $params){
			// Wait a bit.
			sleep(3);

			// Reset the logged in status.
			$_SESSION["verified"] = false;

			$username = $params->username;
			$password = $params->password;


			/*if($inputHandling->emptyCheck($data) == true){
				echo ($ajax == true) ? "Velden mogen niet leeg zijn." : "";
				exit();
			}
			else if($inputHandling->checkLength($data, $defaultLengths) == true){
				echo ($ajax == true) ? "Ingevoerde data te lang!" : "";
				exit();
			}*/
			if(1 == 2){
				// validation
			}
			else {
				$username = htmlentities(preg_replace('/\s+/', '', $username));
				$password = htmlentities(preg_replace('/\s+/', '', $password));

				$sql = "SELECT * FROM accounts WHERE accounts_username = :username";
				$data = $dbHandler->handleQuery($sql, array(
					':username' => $username
				));

				if($data !== false){
					$db_password = $data->accounts_password;
					if(password_verify($password, $db_password)){
						// here we need to update the time
						$_SESSION["loggeduserid"] = $data->accounts_id;
						$_SESSION["documentsURL"] = $_SERVER['DOCUMENT_ROOT']."/andalusier/documents/";
						$_SESSION["newsURL"] = $_SERVER['DOCUMENT_ROOT']."/andalusier/newsletters/";


						$sql = "
						UPDATE
						accounts
						SET
						accounts_prev_loggedintime = accounts_loggedintime,
						accounts_loggedintime = now()
						WHERE accounts_id = :id";

						$dbHandler->handleQuery($sql, array(
							':id' => $_SESSION["loggeduserid"]
						));

						$_SESSION["verified"] = true;
						return "loggedin";
					}
				}	else {
					return "Verkeerde gegevens. Probeer het opnieuw.";
				}
		}
	}

?>
