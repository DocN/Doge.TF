<?php
	include "openid.php";
	include "apikey.php";
	include "config.php";
	include "header.php";
	include "footer.php";
	include "config.php";
	include "dogecaller.php";
	include "wallet.php";



	$OpenID = new LightOpenID("http://www.Doge.TF");
	$loggedOn = false;
	$steamAvatar = "";
	$steamUsername = "";
	$steamID64 = "";
	$balance = "0.000000000000";
	//print front page featured items lower end 
	function frontPage() {
		echo "<span id=\"textmenu\" style=\"float:left;color:#EEEEEE\";>Featured Items</span>\n"; 
		echo "</div>\n"; 
		echo "<div id=\"content\" style=\"background-color:#EEEEEE;height:900PX;width:1000px;float:left;\">\n"; 
		echo "\n"; 
		echo "\n"; 
		echo "\n"; 
		/*
		echo "<div id=\"itemTable1\" style=\"float:left;height:250px;width:206.25px;margin-left:50px;margin-top:50px;\">\n"; 
		echo "<div id=\"image\" style=\"background-color:#2580a2;height:175px;width=206.25px;border-top-left-radius:5px;border-top-right-radius:5px;\"></div>\n"; 
		echo "<div id=\"addCart\" style=\"background-color:#0A0E1D;height:75px;width=206.25px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;\"></div>\n"; 
		echo "</div>\n"; 
		echo "\n"; 
		echo "\n"; 
		echo "<div id=\"itemTable1\" style=\"float:left;height:250px;width:206.25px;margin-left:25px;margin-top:50px;\">\n"; 
		echo "<div id=\"image\" style=\"background-color:#2580a2;height:175px;width=206.25px;border-top-left-radius:5px;border-top-right-radius:5px;\"></div>\n"; 
		echo "<div id=\"addCart\" style=\"background-color:#0A0E1D;height:75px;width=206.25px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;\"></div>\n"; 
		echo "</div>\n"; 
		echo "\n"; 
		echo "<div id=\"itemTable1\" style=\"float:left;height:250px;width:206.25px;margin-left:25px;margin-top:50px;\">\n"; 
		echo "<div id=\"image\" style=\"background-color:#2580a2;height:175px;width=206.25px;border-top-left-radius:5px;border-top-right-radius:5px;\"></div>\n"; 
		echo "<div id=\"addCart\" style=\"background-color:#0A0E1D;height:75px;width=206.25px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;\"></div>\n"; 
		echo "</div>\n"; 
		echo "\n"; 
		echo "<div id=\"itemTable1\" style=\"float:left;height:250px;width:206.25px;margin-left:25px;margin-right:50px;margin-top:50px;\">\n"; 
		echo "<div id=\"image\" style=\"background-color:#2580a2;height:175px;width=206.25px;border-top-left-radius:5px;border-top-right-radius:5px;\"></div>\n"; 
		echo "<div id=\"addCart\" style=\"background-color:#0A0E1D;height:75px;width=206.25px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;\"></div>\n"; 
		echo "</div>\n"; 
		echo "\n"; 
		echo "<div id=\"itemTable1\" style=\"float:left;height:250px;width:206.25px;margin-left:50px;margin-top:25px;\">\n"; 
		echo "<div id=\"image\" style=\"background-color:#2580a2;height:175px;width=206.25px;border-top-left-radius:5px;border-top-right-radius:5px;\"></div>\n"; 
		echo "<div id=\"addCart\" style=\"background-color:#0A0E1D;height:75px;width=206.25px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;\"></div>\n"; 
		echo "</div>\n"; 
		echo "\n"; 
		echo "\n"; 
		echo "<div id=\"itemTable1\" style=\"float:left;height:250px;width:206.25px;margin-left:25px;margin-top:25px;\">\n"; 
		echo "<div id=\"image\" style=\"background-color:#2580a2;height:175px;width=206.25px;border-top-left-radius:5px;border-top-right-radius:5px;\"></div>\n"; 
		echo "<div id=\"addCart\" style=\"background-color:#0A0E1D;height:75px;width=206.25px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;\"></div>\n"; 
		echo "</div>\n"; 
		echo "\n"; 
		echo "<div id=\"itemTable1\" style=\"float:left;height:250px;width:206.25px;margin-left:25px;margin-top:25px;\">\n"; 
		echo "<div id=\"image\" style=\"background-color:#2580a2;height:175px;width=206.25px;border-top-left-radius:5px;border-top-right-radius:5px;\"></div>\n"; 
		echo "<div id=\"addCart\" style=\"background-color:#0A0E1D;height:75px;width=206.25px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;\"></div>\n"; 
		echo "</div>\n"; 
		echo "\n"; 
		echo "<div id=\"itemTable1\" style=\"float:left;height:250px;width:206.25px;margin-left:25px;margin-right:50px;margin-top:25px;\">\n"; 
		echo "<div id=\"image\" style=\"background-color:#2580a2;height:175px;width=206.25px;border-top-left-radius:5px;border-top-right-radius:5px;\"></div>\n"; 
		echo "<div id=\"addCart\" style=\"background-color:#0A0E1D;height:75px;width=206.25px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;\"></div>\n"; 
		echo "</div>\n"; 
		echo "\n"; 
		echo "<div id=\"itemTable1\" style=\"float:left;height:250px;width:206.25px;margin-left:50px;margin-top:25px;\">\n"; 
		echo "<div id=\"image\" style=\"background-color:#2580a2;height:175px;width=206.25px;border-top-left-radius:5px;border-top-right-radius:5px;\"></div>\n"; 
		echo "<div id=\"addCart\" style=\"background-color:#0A0E1D;height:75px;width=206.25px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;\"></div>\n"; 
		echo "</div>\n"; 
		echo "\n"; 
		echo "\n"; 
		echo "<div id=\"itemTable1\" style=\"float:left;height:250px;width:206.25px;margin-left:25px;margin-top:25px;\">\n"; 
		echo "<div id=\"image\" style=\"background-color:#2580a2;height:175px;width=206.25px;border-top-left-radius:5px;border-top-right-radius:5px;\"></div>\n"; 
		echo "<div id=\"addCart\" style=\"background-color:#0A0E1D;height:75px;width=206.25px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;\"></div>\n"; 
		echo "</div>\n"; 
		echo "\n"; 
		echo "<div id=\"itemTable1\" style=\"float:left;height:250px;width:206.25px;margin-left:25px;margin-top:25px;\">\n"; 
		echo "<div id=\"image\" style=\"background-color:#2580a2;height:175px;width=206.25px;border-top-left-radius:5px;border-top-right-radius:5px;\"></div>\n"; 
		echo "<div id=\"addCart\" style=\"background-color:#0A0E1D;height:75px;width=206.25px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;\"></div>\n"; 
		echo "</div>\n"; 
		echo "\n"; 
		echo "<div id=\"itemTable1\" style=\"float:left;height:250px;width:206.25px;margin-left:25px;margin-right:50px;margin-top:25px;\">\n"; 
		echo "<div id=\"image\" style=\"background-color:#2580a2;height:175px;width=206.25px;border-top-left-radius:5px;border-top-right-radius:5px;\"></div>\n"; 
		echo "<div id=\"addCart\" style=\"background-color:#0A0E1D;height:75px;width=206.25px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;\"></div>\n"; 
		echo "</div>\n"; 
		*/
		echo "\n"; 
		echo "\n"; 
		echo "\n"; 
		echo "</div>\n"; 
		echo "\n"; 
		echo "</div>\n"; 
		echo "\n"; 
		echo "\n"; 
	}

	//start session 
	session_start();
	//check if account is logged on
	if(!$OpenID->mode) {
		if(isset($_GET['login'])) {
			$OpenID->identity = "http://steamcommunity.com/openid";
			header("Location: {$OpenID->authUrl()}");
		}
		//if not ask for auth 
		if(!isset($_SESSSION['T2SteamAuth'])){
			$login = "<div id= \"?login\"> Welcome Guest Testing <a href=\"?login\"><BR><img src=\"http://cdn.steamcommunity.com/public/images/signinthroughsteam/sits_large_noborder.png\"/></a><BR> to Doge Coin Test.</div>";
		}
	}
	elseif($OpenID->mode == "cancel") {
		echo "User has canceled login authentication.";
	}
	else {
		if(!isset($_SESSION['T2SteamAuth'])) {
			$_SESSION['T2SteamAuth'] = $OpenID->validate() ? $OpenID->identity : null;
			$_SESSION['T2SteamID64'] = str_replace("http://steamcommunity.com/openid/id", "" , $_SESSION['T2SteamAuth']);

			if($_SESSION['T2SteamAuth'] !== null) {
				$steam64 = str_replace("http://steamcommunity.com/openid/id", "", $_SESSION['T2SteamAuth']);
				$profile = file_get_contents("http://api.steampowered.com/IsteamUser/GetPlayerSummaries/v0002/?key={$key}&steamids={$steam64}");
				$buffer = fopen("cache/{$steam64}.json", "w+");
				fwrite($buffer, $profile);
				fclose($buffer);
			}

			header("Location: index.php");
		}
	}
if(isset($_SESSION['T2SteamAuth'])) {
	$loggedOn = TRUE;
	$login = "<div id=\"login\"><a href=\"?logout\">Logout</a></div>";
	$steam = json_decode(file_get_contents("cache/{$_SESSION['T2SteamID64']}.json"));
	$steamAvatar = $steam->response->players[0]->avatarfull;
	$steamUsername = $steam->response->players[0]->personaname;
	$steamID64 = $steam->response->players[0]->steamid;
}

	if(isset($_GET['logout'])){
		unset($_SESSION['T2SteamAuth']);
		unset($_SESSION['T2SteamID64']);	
		header("Location: index.php");
	}

	$balance = intialWallet();
	$page = "Home";
	printHeader($loggedOn,$steamAvatar, $steamUsername, $steamID64,$balance,$page);
	frontpage();
	printFooter();


?>