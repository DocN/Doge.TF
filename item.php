<?php
	//start session 
	session_start();
	include "config.php";
	include "header.php";
	include "footer.php";
	include "wallet.php";
	include "dogecaller.php";
	
	//print front page featured items lower end 
	$loggedOn = FALSE;
	$sku = $_GET["sku"];
	$itemInfo = "";

	if(isset($_SESSION['T2SteamAuth'])) {
		$loggedOn = TRUE;
		$login = "<div id=\"login\"><a href=\"?logout\">Logout</a></div>";
		$steam = json_decode(file_get_contents("cache/{$_SESSION['T2SteamID64']}.json"));
		$steamAvatar = $steam->response->players[0]->avatarfull;
		$steamUsername = $steam->response->players[0]->personaname;
		$steamID64 = $steam->response->players[0]->steamid;
	}
	function frontPage($sku,$itemInfo) {
		if($sku === NULL) {
			echo "<span id=\"textmenu\" style=\"float:left;color:#EEEEEE\";>Item:</span>\n"; 
		}
		else {
			echo "<span id=\"textmenu\" style=\"float:left;color:#EEEEEE\";>Item: {$itemInfo['name']}</span>\n"; 
		}
		echo "</div>\n"; 
		if($sku === NULL) {
			echo "<h1 style=\"color:#EEEEEE\";>An error has occured: No SKU Provided</h1>";
		}
		else {
			echo "<div id=\"content\" style=\"background-color:#EEEEEE;height:500PX;width:1000px;float:left;\">\n"; 
			echo "\n"; 
			echo "\n"; 
			echo "\n"; 
			echo "\n"; 
			echo "\n"; 
			echo "\n"; 
			echo "</div>\n"; 
			echo "\n"; 
			echo "</div>\n"; 
			echo "\n"; 
			echo "\n"; 
		}

		

	}

	if(isset($_GET['logout'])){
		unset($_SESSION['T2SteamAuth']);
		unset($_SESSION['T2SteamID64']);	
		header("Location: index.php");
	}
	if($sku != NULL) {
		//get item information
		$con=mysqli_connect("{$url}","{$username}","{$password}","{$database}");
		// Check connection
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$result = mysqli_query($con,"SELECT * FROM items");

		while($row = mysqli_fetch_array($result))
		{
			//collect all information about item
			if($row['sku'] == $sku) {
				$itemInfo = $row;
			}
		}
		mysqli_close($con);
	}

	

	$balance = intialWallet();
	$page = "{$itemInfo['name']}";
	printHeader($loggedOn,$steamAvatar, $steamUsername, $steamID64,$balance, $page);
	frontPage($sku,$itemInfo);

	printFooter();
?>
