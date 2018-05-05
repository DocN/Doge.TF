<?php
	function intialWallet() {
		include "API/dogeapikey.php";
		session_start();
		$steamID = $_SESSION['T2SteamID64'];
		$getLabel = getLabelAddress($steamID);
		$_SESSION['WalletID'] = $getLabel;
		//grab wallet amount
		$balance = getBalance($steamID);
		//check for errors and report if any
		if($balance == "-1") {
			mail('ryan@doge.tf', 'Error Problem with user {$steamID64}', "balance displacement");
		}
		return $balance;
	}
?>