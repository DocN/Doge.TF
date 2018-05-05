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
	if(isset($_SESSION['T2SteamAuth'])) {
		$loggedOn = TRUE;
		$login = "<div id=\"login\"><a href=\"?logout\">Logout</a></div>";
		$steam = json_decode(file_get_contents("cache/{$_SESSION['T2SteamID64']}.json"));
		$steamAvatar = $steam->response->players[0]->avatarfull;
		$steamUsername = $steam->response->players[0]->personaname;
		$steamID64 = $steam->response->players[0]->steamid;
	}
	function frontPage() {
		echo "<span id=\"textmenu\" style=\"float:left;color:#EEEEEE\";>My Account</span>\n"; 
		echo "</div>\n"; 
		echo "<div id=\"content\" style=\"background-color:#EEEEEE;height:500PX;width:1000px;float:left;\">\n"; 
		echo "\n"; 
		echo "\n"; 
		echo "\n"; 
	
		echo $_SESSION['WalletID'];
		echo "\n"; 
		echo "\n"; 
		echo "\n"; 
		echo "</div>\n"; 
		echo "\n"; 
		echo "</div>\n"; 
		echo "\n"; 
		echo "\n"; 
	}

	if(isset($_GET['logout'])){
		unset($_SESSION['T2SteamAuth']);
		unset($_SESSION['T2SteamID64']);	
		header("Location: index.php");
	}

	$balance = intialWallet();
	$page = "My Account";
	printHeader($loggedOn,$steamAvatar, $steamUsername, $steamID64,$balance,$page);
	frontPage();
	printFooter();
?>
