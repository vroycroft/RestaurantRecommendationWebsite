<?php

include("header.php");

if ($_GET['signup'] == "yes") {
	// Get The Input
	$first_name = mysqli_real_escape_string($db, trim($_POST['first_name']));
	$last_name = mysqli_real_escape_string($db, trim($_POST['last_name']));
	$username = mysqli_real_escape_string($db, trim($_POST['username']));
	$password = mysqli_real_escape_string($db, trim($_POST['password']));

	$errormess = "";

	// Make Sure All Fields Are Entered
	if ($first_name == "" || $last_name == "" || $username == "" || $password == "") {
		$errormess = "Your must fill in all the fields";
	}

	// Check If username Exists
	$checkexists = mysqli_query($db, "Select COUNT(*) AS num from `Users` where username='$username'");
	$exists = mysqli_fetch_array($checkexists);
	if ($exists['num'] > 0) {
		$errormess = "Your username is already registered";
	}


	if ($errormess == "") {
		@mysqli_query($db, "Insert into `Users` (first_name, last_name, username, password) values ('$first_name', '$last_name', '$username', '$password')");
		echo("Account created successfully. <p><a href='login.php'>Login</a> to get started!</p>");
		include("footer.php");
		exit;
	} else {
		echo($errormess);
		include("footer.php");
		exit;
	}
}

?>
<center>
<b><p><i><font size="5.5" face="Georgia" color="000066">S</font><font size="4.5" face="Georgia">ignup:</p></b></i></font>

<form action="signup.php?signup=yes" method="post">
<table border="0" cellpadding="3" cellspacing="0">
<tr><td align="right"><b><i><font size="4.5" face="Georgia" color="CC6600">F</font><font size="3.5" face="Georgia">irst</font></b></i><b><i><font size="4.5" face="Georgia" color="CC6600"> N</font><font size="3.5" face="Georgia">ame:</font></b></i></td><td align="left"><input type="text" name="first_name" value=""></td</tr>
<tr><td align="right"><b><i><font size="4.5" face="Georgia" color="CC6600">L</font><font size="3.5" face="Georgia">ast</font></b></i><b><i><font size="4.5" face="Georgia" color="CC6600"> N</font><font size="3.5" face="Georgia">ame:</font></b></i></td><td align="left"><input type="text" name="last_name" value=""></td</tr>
<tr><td align="right"><b><i><font size="4.5" face="Georgia" color="CC6600">U</font><font size="3.5" face="Georgia">sername:</font></b></i><b></td><td align="left"><input type="text" name="username" value=""></td</tr>
<tr><td align="right"><b><i><font size="4.5" face="Georgia" color="CC6600">P</font><font size="3.5" face="Georgia">assword:</font></b></i><b></td><td align="left"><input type="password" name="password" value=""></td</tr>
</table></center>

<br/><hr/>

<table border="0" cellpadding="0" cellspacing="0">
<tr>How much do you prefer spending per person (on average)?</tr>
<tr><input type="radio" name="group1" value="Cheap"> Cheap (Up to $10)</tr>
<tr><input type="radio" name="group1" value="Moderate"> Moderate (Up to $30)</tr>
<tr><input type="radio" name="group1" value="Expensive"> Expensive (Up to $60)</tr>


<tr>Do you prefer a restaurant that offers delivery?</tr>
<tr><input type="radio" name="group2" value="yesDelivery"> Yes </tr>
<tr><input type="radio" name="group2" value="noDelivery"> No </tr>

<tr>Do you prefer a restaurant that offers takeout?</tr>
<tr><input type="radio" name="group3" value="yesTakeout"> Yes </tr>
<tr><input type="radio" name="group3" value="noTakeout"> No </tr>

<tr>Do you prefer a restaurant that can accommodate groups?</tr>
<tr><input type="radio" name="group4" value="yesGroups"> Yes </tr>
<tr><input type="radio" name="group4" value="noGroup"> No </tr>

<tr>Do you prefer a restaurant that accepts reservations?</tr>
<tr><input type="radio" name="group5" value="yesReservations"> Yes </tr>
<tr><input type="radio" name="group5" value="noReservations"> No </tr>

<tr>Do you prefer a restaurant that has outside seating?</td></tr>
<tr><input type="radio" name="group6" value="yesOutsideSeating"> Yes </tr>
<tr><input type="radio" name="group6" value="noOutsideSeating"> No </tr>

<tr>Do you prefer a restaurant that has a full bar?</td></tr>
<tr><input type="radio" name="group7" value="yesBar"> Yes </tr>
<tr><input type="radio" name="group7" value="noBar"> No </tr>

<tr>Do you prefer a restaurant that is good for kids?</tr>
<tr><input type="radio" name="group8" value="yesKids"> Yes </tr>
<tr><input type="radio" name="group8" value="noKids"> No </tr>

<tr>On a scale of 1 to 5, how fast do you want your service to be?</tr>
<tr><input type="radio" name="group9" value="speedOne"> 1 </tr>
<tr><input type="radio" name="group9" value="speedTwo"> 2 </tr>
<tr><input type="radio" name="group9" value="speedThree"> 3 </tr>
<tr><input type="radio" name="group9" value="speedFour"> 4 </tr>
<tr><input type="radio" name="group9" value="speedFive"> 5 </tr>

<tr>On a scale of 1 to 5, how much do you prefer this type of restaurant?</tr>
<tr>Steakhouse<input type="radio" name="group10" value="SteakOne"> 1 </tr>
<tr><input type="radio" name="group10" value="SteakTwo"> 2 </tr>
<tr><input type="radio" name="group10" value="SteakThree"> 3 </tr>
<tr><input type="radio" name="group10" value="SteakFour"> 4 </tr>
<tr><input type="radio" name="group10" value="SteakFive"> 5 </tr>

<tr>American</tr>
<tr><input type="radio" name="group11" value="AmerOne"> 1 </tr>
<tr><input type="radio" name="group11" value="AmerTwo"> 2 </tr>
<tr><input type="radio" name="group11" value="AmerThree"> 3 </tr>
<tr><input type="radio" name="group11" value="AmerFour"> 4 </tr>
<tr><input type="radio" name="group11" value="AmerFive"> 5 </tr>

<tr>Middle Eastern</tr>
<tr><input type="radio" name="group12" value="MEOne"> 1 </tr>
<tr><input type="radio" name="group12" value="METwo"> 2 </tr>
<tr><input type="radio" name="group12" value="METhree"> 3 </tr>
<tr><input type="radio" name="group12" value="MEFour"> 4 </tr>
<tr><input type="radio" name="group12" value="MEFive"> 5 </tr>

<tr>Asian</tr>
<tr><input type="radio" name="group13" value="AsianOne"> 1 </tr>
<tr><input type="radio" name="group13" value="AsianTwo"> 2 </tr>
<tr><input type="radio" name="group13" value="AsianThree"> 3 </tr>
<tr><input type="radio" name="group13" value="AsianFour"> 4 </tr>
<tr><input type="radio" name="group13" value="AsianFive"> 5 </tr>

<tr>Italian</tr>
<tr><input type="radio" name="group14" value="ItalianOne"> 1 </tr>
<tr><input type="radio" name="group14" value="ItalianTwo"> 2 </tr>
<tr><input type="radio" name="group14" value="ItalianThree"> 3 </tr>
<tr><input type="radio" name="group14" value="ItalianFour"> 4 </tr>
<tr><input type="radio" name="group14" value="ItalianFive"> 5 </tr>

<tr>Chinese</tr>
<tr><input type="radio" name="group15" value="ChineseOne"> 1 </tr>
<tr><input type="radio" name="group15" value="ChineseTwo"> 2 </tr>
<tr><input type="radio" name="group15" value="ChineseThree"> 3 </tr>
<tr><input type="radio" name="group15" value="ChineseFour"> 4 </tr>
<tr><input type="radio" name="group15" value="ChineseFive"> 5 </tr>

<tr>Japanese</tr>
<tr><input type="radio" name="group16" value="JapOne"> 1 </tr>
<tr><input type="radio" name="group16" value="JapTwo"> 2 </tr>
<tr><input type="radio" name="group16" value="JapThree"> 3 </tr>
<tr><input type="radio" name="group16" value="JapFour"> 4 </tr>
<tr><input type="radio" name="group16" value="JapFive"> 5 </tr>

<tr>Indian</tr>
<tr><input type="radio" name="group17" value="IndianOne"> 1 </tr>
<tr><input type="radio" name="group17" value="IndianTwo"> 2 </tr>
<tr><input type="radio" name="group17" value="IndianThree"> 3 </tr>
<tr><input type="radio" name="group17" value="IndianFour"> 4 </tr>
<tr><input type="radio" name="group17" value="IndianFive"> 5 </tr>

<tr>French</tr>
<tr><input type="radio" name="group18" value="FrenchOne"> 1 </tr>
<tr><input type="radio" name="group18" value="FrenchTwo"> 2 </tr>
<tr><input type="radio" name="group18" value="FrenchThree"> 3 </tr>
<tr><input type="radio" name="group18" value="FrenchFour"> 4 </tr>
<tr><input type="radio" name="group18" value="FrenchFive"> 5 </tr>

<tr>Greek</tr>
<tr><input type="radio" name="group19" value="GreekOne"> 1 </tr>
<tr><input type="radio" name="group19" value="GreekTwo"> 2 </tr>
<tr><input type="radio" name="group19" value="GreekThree"> 3 </tr>
<tr><input type="radio" name="group19" value="GreekFour"> 4 </tr>
<tr><input type="radio" name="group19" value="GreekFive"> 5 </tr>

<tr>Mexican</tr>
<tr><input type="radio" name="group20" value="MexicanOne"> 1 </tr>
<tr><input type="radio" name="group20" value="MexicanTwo"> 2 </tr>
<tr><input type="radio" name="group20" value="MexicanThree"> 3 </tr>
<tr><input type="radio" name="group20" value="MexicanFour"> 4 </tr>
<tr><input type="radio" name="group20" value="MexicanFive"> 5 </tr>

<tr>Vegetarian</tr>
<tr><input type="radio" name="group21" value="VegOne"> 1 </tr>
<tr><input type="radio" name="group21" value="VegTwo"> 2 </tr>
<tr><input type="radio" name="group21" value="VegThree"> 3 </tr>
<tr><input type="radio" name="group21" value="VegFour"> 4 </tr>
<tr><input type="radio" name="group21" value="VegFive"> 5 </tr>

<tr>Seafood</tr>
<tr><input type="radio" name="group22" value="SeafoodOne"> 1 </tr>
<tr><input type="radio" name="group22" value="SeafoodTwo"> 2 </tr>
<tr><input type="radio" name="group22" value="SeafoodThree"> 3 </tr>
<tr><input type="radio" name="group22" value="SeafoodFour"> 4 </tr>
<tr><input type="radio" name="group22" value="SeafoodFive"> 5 </tr>
</table>
<table>
<tr><td>&nbsp;</td><td align="center"><input type="submit" value="Create Account"></td></tr>
</table>
</form>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</center>");

<?php
include("footer.php");
exit;
?>