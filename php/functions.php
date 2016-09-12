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

	// when a user wants to logout
	if (isset($_POST["logout"])) {
		$connectionHandling = new connectionHandler();
		$connectionHandling->killSession();
		echo "loggedout";
	}

	// when a user tries to log in
	if (isset($_POST["username"]) && isset($_POST["loginrequest"])) {
		$connectionHandling = new connectionHandler();
		$connectionHandling->Interrupt(3);
		$_SESSION["verified"] = false;

		$ajax = false;
		if(isset($_POST["ajax"]) && $_POST["ajax"] == true){
			$ajax = true;
		}

		$username = $_POST["username"];
		$password = $_POST["password"];

		$inputHandling = new inputHandler();

		$data = (object) ['username' => $username, 'password' => $password];

		if($inputHandling->emptyCheck($data) == true){
			echo ($ajax == true) ? "Velden mogen niet leeg zijn." : "";
			exit();
		}
		else if($inputHandling->checkLength($data, $defaultLengths) == true){
			echo ($ajax == true) ? "Ingevoerde data te lang!" : "";
			exit();
		}
		else {
			$username = htmlentities(preg_replace('/\s+/', '', $username));
			$password = htmlentities(preg_replace('/\s+/', '', $password));

			$sql = "SELECT * FROM accounts WHERE accounts_username = :username";
			$queryObject = array(
				':username' => $username
			);

			$returnedData = $connectionHandling->processQuery($sql, $queryObject);
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
