<?php

include("header.php");

if ($_GET['signup'] == "yes") {
	// Get The Input
	$first_name = mysqli_real_escape_string($db, trim($_POST['first_name']));
	$last_name = mysqli_real_escape_string($db, trim($_POST['last_name']));
	$username = mysqli_real_escape_string($db, trim($_POST['username']));
	$password = mysqli_real_escape_string($db, trim($_POST['password']));

	$price = $_POST[group1];

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
		@mysqli_query($db, "Insert into `Users` (first_name, last_name, username, password, price) values ('$first_name', '$last_name', '$username', SHA('$password'), $price)");
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
<center>
<b><p><i><font size="5.5" face="Georgia" color="000066">S</font><font size="4.5" face="Georgia">urvey:</p></b></i></font>
</center>

<table border="0" cellpadding="0" cellspacing="0">
<tr><td align="left">How much do you prefer spending per person (on average)?</td></tr>
<tr><td align="left"><input type="radio" name="group1" value="1"> Cheap (Up to $10)</td></tr>
<tr><td align="left"><input type="radio" name="group1" value="2"> Moderate (Up to $30)</td></tr>
<tr><td align="left"><input type="radio" name="group1" value="3"> Expensive (Up to $60)</td></tr>


<tr><td align="left">Do you prefer a restaurant that offers delivery?</td></tr>
<tr><td align="left"><input type="radio" name="group2" value="yesDelivery"> Yes </td></tr>
<tr><td align="left"><input type="radio" name="group2" value="noDelivery"> No </td></tr>

<tr><td align="left">Do you prefer a restaurant that offers takeout?</td></tr>
<tr><td align="left"><input type="radio" name="group3" value="yesTakeout"> Yes </td></tr>
<tr><td align="left"><input type="radio" name="group3" value="noTakeout"> No </td></tr>

<tr><td align="left">Do you prefer a restaurant that can accommodate groups?</td></tr>
<tr><td align="left"><input type="radio" name="group4" value="yesGroups"> Yes </td></tr>
<tr><td align="left"><input type="radio" name="group4" value="noGroup"> No </td></tr>

<tr><td align="left">Do you prefer a restaurant that accepts reservations?</td></tr>
<tr><td align="left"><input type="radio" name="group5" value="yesReservations"> Yes </td></tr>
<tr><td align="left"><input type="radio" name="group5" value="noReservations"> No </td></tr>

<tr><td align="left">Do you prefer a restaurant that has outside seating?</td></tr>
<tr><td align="left"><input type="radio" name="group6" value="yesOutsideSeating"> Yes </td></tr>
<tr><td align="left"><input type="radio" name="group6" value="noOutsideSeating"> No </td></tr>

<tr><td align="left">Do you prefer a restaurant that has a full bar?</td></tr>
<tr><td align="left"><input type="radio" name="group7" value="yesBar"> Yes </td></tr>
<tr><td align="left"><input type="radio" name="group7" value="noBar"> No </td></tr>

<tr><td align="left">Do you prefer a restaurant that is good for kids?</td></tr>
<tr><td align="left"><input type="radio" name="group8" value="yesKids"> Yes </td></tr>
<tr><td align="left"><input type="radio" name="group8" value="noKids"> No </td></tr>

<tr><td align="left">On a scale of 1 to 5, how fast do you want your service to be?</td></tr>
<tr><td align="left"><input type="radio" name="group9" value="speedOne"> 1 (Sluggish) </td></tr>
<tr><td align="left"><input type="radio" name="group9" value="speedTwo"> 2 </td></tr>
<tr><td align="left"><input type="radio" name="group9" value="speedThree"> 3 (Moderate)</td></tr>
<tr><td align="left"><input type="radio" name="group9" value="speedFour"> 4 </td></tr>
<tr><td align="left"><input type="radio" name="group9" value="speedFive"> 5 (Super fast)</td></tr>
<tr> </tr><tr> </tr>
<tr><td align="left">On a scale of 1 to 5, how much do you prefer this type of restaurant?</tr>
<tr><td align="center"><b>Steakhouse</b></td></tr>
<tr><td align="center"><input type="radio" name="group10" value="SteakOne"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group10" value="SteakTwo"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group10" value="SteakThree"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group10" value="SteakFour"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group10" value="SteakFive"> 5 </td></tr>

<tr><td align="center"><b>American</b></td></tr>
<tr><td align="center"><input type="radio" name="group11" value="AmerOne"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group11" value="AmerTwo"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group11" value="AmerThree"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group11" value="AmerFour"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group11" value="AmerFive"> 5 </td></tr>

<tr><td align="center"><b>Middle Eastern</b></td></tr>
<tr><td align="center"><input type="radio" name="group12" value="MEOne"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group12" value="METwo"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group12" value="METhree"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group12" value="MEFour"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group12" value="MEFive"> 5 </td></tr>

<tr><td align="center"><b>Asian</b></td></tr>
<tr><td align="center"><input type="radio" name="group13" value="AsianOne"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group13" value="AsianTwo"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group13" value="AsianThree"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group13" value="AsianFour"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group13" value="AsianFive"> 5 </td></tr>

<tr><td align="center"><b>Italian</b></td></tr>
<tr><td align="center"><input type="radio" name="group14" value="ItalianOne"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group14" value="ItalianTwo"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group14" value="ItalianThree"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group14" value="ItalianFour"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group14" value="ItalianFive"> 5 </td></tr>

<tr><td align="center"><b>Chinese</b></td></tr>
<tr><td align="center"><input type="radio" name="group15" value="ChineseOne"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group15" value="ChineseTwo"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group15" value="ChineseThree"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group15" value="ChineseFour"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group15" value="ChineseFive"> 5 </td></tr>

<tr><td align="center"><b>Japanese</b></td></tr>
<tr><td align="center"><input type="radio" name="group16" value="JapOne"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group16" value="JapTwo"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group16" value="JapThree"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group16" value="JapFour"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group16" value="JapFive"> 5 </td></tr>

<tr><td align="center"><b>Indian</b></td></tr>
<tr><td align="center"><input type="radio" name="group17" value="IndianOne"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group17" value="IndianTwo"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group17" value="IndianThree"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group17" value="IndianFour"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group17" value="IndianFive"> 5 </td></tr>

<tr><td align="center"><b>French</b></td></tr>
<tr><td align="center"><input type="radio" name="group18" value="FrenchOne"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group18" value="FrenchTwo"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group18" value="FrenchThree"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group18" value="FrenchFour"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group18" value="FrenchFive"> 5 </td></tr>

<tr><td align="center"><b>Greek</b></td></tr>
<tr><td align="center"><input type="radio" name="group19" value="GreekOne"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group19" value="GreekTwo"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group19" value="GreekThree"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group19" value="GreekFour"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group19" value="GreekFive"> 5 </td></tr>

<tr><td align="center"><b>Mexican</b></td></tr>
<tr><td align="center"><input type="radio" name="group20" value="MexicanOne"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group20" value="MexicanTwo"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group20" value="MexicanThree"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group20" value="MexicanFour"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group20" value="MexicanFive"> 5 </td></tr>

<tr><td align="center"><b>Vegetarian</b></td></tr>
<tr><td align="center"><input type="radio" name="group21" value="VegOne"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group21" value="VegTwo"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group21" value="VegThree"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group21" value="VegFour"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group21" value="VegFive"> 5 </td></tr>

<tr><td align="center"><b>Seafood</b></td></tr>
<tr><td align="center"><input type="radio" name="group22" value="SeafoodOne"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group22" value="SeafoodTwo"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group22" value="SeafoodThree"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group22" value="SeafoodFour"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group22" value="SeafoodFive"> 5 </td></tr>
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