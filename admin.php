<?php
	include "config.php";
	include "administratorList.php";
	//start session data
	//if the user is not an administrator block them out
	session_start();

	//load values from session
	if(isset($_SESSION['T2SteamAuth'])) {
		$steam = json_decode(file_get_contents("cache/{$_SESSION['T2SteamID64']}.json"));
		$accountID = $steam->response->players[0]->steamid;
	}
	//check admin boolean
	$checkAdmin = FALSE;
	//check list of valid administrators, if you're one of them open login page
	foreach($administrators as &$value) {
		if($value == $accountID) {
			$checkAdmin = TRUE;
		}
	}
	if($checkAdmin == TRUE) {
		$_SESSION['administrator'] =  $_SESSION['T2SteamID64'];
		echo "<center>";
		echo "<h1>Welcome to Administrator Panel <BR> {$steam->response->players[0]->personaname}</h1> <BR>";
		echo "<img src=\"{$steam->response->players[0]->avatarfull}\" />";
		//open login form 
		
		echo "<form action=\"login.php\" method=\"post\"/>";
		echo "<table border=\"0\">";
		echo "<tr><td>Username:</td> <td><input type=\"text\" name=\"user\"></td></tr>";
		echo "<tr><td>Password:</td> <td><input type=\"password\" name=\"password\"></td></tr>";
		echo "<tr><td><input type=\"submit\"></td></tr>";
		echo "</table>";
		echo "</form>";
		echo "</center>";
	}
	else {
		echo "No login detected";
	}
?>
