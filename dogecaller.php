<?php


function getBalance($steamID) {
	include "API/dogeapikey.php";
	$balance = file_get_contents("https://dogeapi.com//wow/v2/?api_key={$dogeAPIKey}&a=get_user_balance&user_id={$steamID}{$developerID}");
	$balance = json_decode($balance);
	$balance = $balance->data->balance;
	if(is_numeric($balance) == "is numeric") {
		return $balance;
	}
	else {
		return "-1";
	}
	
}

function getLabelAddress($steamID) {
	include "API/dogeapikey.php";
	file_get_contents("https://dogeapi.com/wow/v2/?api_key={$dogeAPIKey}&a=create_user&user_id={$steamID}{$developerID}");
	$walletAddress = file_get_contents("https://dogeapi.com/wow/v2/?api_key={$dogeAPIKey}&a=get_user_address&user_id={$steamID}{$developerID}");
	$walletAddress = json_decode($walletAddress);
	return $walletAddress->data->address;
}
?>
