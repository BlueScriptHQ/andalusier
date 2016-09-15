<?php

	// when a user wants to logout
	if (isset($_POST["logout"])) {
		$connectionHandling = new connectionHandler();
		$connectionHandling->killSession();
		echo "loggedout";
	}

	function checkLogin(PDO $conn, $params){

			// Wait a bit.
			sleep(3);

			// Reset the logged in status.
			$_SESSION["verified"] = false;

			$ajax = false;

			if(isset($_POST["ajax"]) && $_POST["ajax"] == true){
				$ajax = true;
			}

			$username = $params->username;
			$password = $params->password;

			// $inputHandling = new inputHandler();

			/*if($inputHandling->emptyCheck($data) == true){
				echo ($ajax == true) ? "Velden mogen niet leeg zijn." : "";
				exit();
			}
			else if($inputHandling->checkLength($data, $defaultLengths) == true){
				echo ($ajax == true) ? "Ingevoerde data te lang!" : "";
				exit();
			}*/
			if(1 == 2){

			}
			else {
				$username = htmlentities(preg_replace('/\s+/', '', $username));
				$password = htmlentities(preg_replace('/\s+/', '', $password));

				$sql = "SELECT * FROM accounts WHERE accounts_username = :username";
				$queryObject = array(
					':username' => $username
				);


				// connection handler

				if($returnedData != false){
					$db_password = $returnedData["accounts_password"];
					if($inputHandling->compareHash($password, $db_password)){
						if($ajax == true) {
							// here we need to update the time
							$_SESSION["loggeduserid"] = $returnedData["accounts_id"];
	            $_SESSION["documentsURL"] = $_SERVER['DOCUMENT_ROOT']."/andalusier/documents/";
							$sql = "UPDATE
			        accounts
			        SET
			        accounts_prev_loggedintime = accounts_loggedintime,
							accounts_loggedintime = now()
			        WHERE accounts_id = :id";
							$queryObject = array(
								':id' => $_SESSION["loggeduserid"]
							);
							$connectionHandling->processQuery($sql, $queryObject);

							$_SESSION["verified"] = true;
							echo "loggedin";
							exit();
						}
						else { $_SESSION["verified"] = true; header("Location: ../index.php"); }
					} else {
						echo ($ajax == true) ? "Verkeerde gegevens. Probeer het opnieuw." : "";
						exit();
					}
				}
				else {
					echo ($ajax == true) ? "Verkeerde gegevens. Probeer het opnieuw." : "";
					exit();
				}
		}
	}

?>
