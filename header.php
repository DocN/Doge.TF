<?php 

function printHeader($seaActive,$avatar,$username,$steamID64,$balance, $page) {
	echo "<head>\n"; 
	echo "<title>{$page} - Doge.TF</title>\n"; 
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/menu.css\">\n"; 
	echo "</head>\n"; 
	echo "<body background=\"black.jpg\">\n"; 
	echo "<center>\n"; 
	echo "<div id=\"container\" style=\"width:1000px\">\n"; 
	echo "\n"; 
	echo "<div id=\"header-left\" style=\"float:left;width:500px;height:150px;\">\n"; 
	echo "	<img src=\"banner.png\" height=\"150px\" width=\"500px\"/>\n"; 
	echo "</div>\n"; 
	echo "<div id=\"header-right\" style=\"background-color:#0A0E1D;float:right;width:496px;height:146px;border:2px solid;border-radius:10px;\">\n"; 

	if($seaActive == TRUE) {
		echo "<div id =\"margin\" style=\"float:left;height:20px;width:496px;\"></div>\n"; 
		echo "<div id =\"margin\" style=\"float:left;height:126px;width:20px;\"></div>\n"; 
		echo "\n";
		echo "<div id=\"avatar\" style=\"float:left;\">";
		echo "<img src=\"{$avatar}\" height=\"100px\" width=\"100px\"/>";
		echo "</div>\n";
		echo "<div id=\"text\" style=\"float:left;margin-left:20px;\"> \n"; 
		echo "<div id=\"username\" style=\"float:left;color:#EEEEEE\">{$username}</div></br>";
		echo "<div id=\"steamid64\" style=\"float:left;color:#EEEEEE\">ID: {$steamID64}</div></br>";
		echo "<div id=\"balance\" style=\"float:left;color:#EEEEEE\">Balance(D): {$balance}</div></br>";
		echo "<div id=\"login\" style=\"float:left;color:#EEEEEE\"><a href=\"?logout\">Logout</a></div>";
		echo "</div>\n";
	}
	else {
		echo "</br>\n"; 
		echo "<a href=\"?login\"><BR><img src=\"signin.png\"/></a>"; 	
	}

	
	echo "</div>\n"; 
	echo "<div id=\"menu\" style=\"background-color:#0A0E1D;float:left;height:35px;width:996px;border:2px solid;border-radius:4px;margin-top:10px;margin-bottom:10px;position:relative;\">\n"; 
	echo "\n"; 
	echo "\n"; 
	echo "<div id='cssmenu' style=\"float:left;position:absolute; top:0px;\">\n"; 
	echo "<ul>\n"; 
	echo "   <li class='active'><a href='index.php'><span>Doge.TF</span></a></li>\n"; 
	echo "   <li class='active'><a href='index.php'><span>Hats</span></a></li>\n"; 
	echo "   <li class='active'><a href='index.php'><span>Stranges</span></a></li>\n"; 
	echo "   <li class='active'><a href='index.php'><span>Weapons</span></a></li>\n"; 
	echo "   <li class='active'><a href='index.php'><span>Misc</span></a></li>\n"; 
	if($seaActive == TRUE) {
		echo "   <li class='active'><a href='account.php'><span>My Account</span></a></li>\n"; 
	}
	echo "   <li class='last'><a href='#'><span>Support</span></a></li>\n"; 

	echo "</ul>\n"; 
	echo "</div>\n"; 
	echo "</div>\n"; 
	echo "\n"; 
	echo "<div id=\"barcontent\" style=\"background-color:#0A0E1D;height:20px;width:996px;float:left;border:2px solid;border-top-left-radius:5px;border-top-right-radius:5px;\">\n";
}

?>
