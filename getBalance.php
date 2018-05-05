<?php

	function getBalance($balance) {
		//create variables for storing account data
		include "config.php";
		session_start();		
		if(isset($_SESSION['T2SteamAuth'])) {
			$steam = json_decode(file_get_contents("cache/{$_SESSION['T2SteamID64']}.json"));
		}
		$balance = "0";
		$accountID = $steam->response->players[0]->steamid;
		$dogeAdd = "none";
		

		//create connection to database
		$con=mysqli_connect("{$url}","{$username}","{$password}","{$database}");

		//check if connection is established
		if(mysqli_connect_errno()) {
			echo "failed to connect to database";
		}
		else {
			//debug test
			$result = mysqli_query($con, "SELECT * FROM account");
			$checkExists = FALSE;
			while($row = mysqli_fetch_array($result)) {
				if($row['UserID'] == $accountID) {
					$checkExists = TRUE;
				}
			}
			$result = mysqli_query($con, "SELECT * FROM account");
			if($checkExists == TRUE) {
				while($row = mysqli_fetch_array($result)) {
					if($row['UserID'] == $accountID) {
						$balance = $row['Balance'];
					}
				}		
			}
			else {
				//create id 
				mysqli_query($con, "INSERT INTO account (UserID, Balance, DogeAddress)
				VALUES ('$accountID', $balance, '$dogeAdd')");
			}

		}

		//close connection after grabbing data from db
		mysqli_close($con);
		return $balance;
	}
?>
