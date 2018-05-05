<?php
	session_start();
	$steam = json_decode(file_get_contents("cache/{$_SESSION['T2SteamID64']}.json"));

	echo "<img src=\"{$steam->response->players[0]->avatarfull}\" />";
?>
