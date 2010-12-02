<?php

include("header.php");

if ($_GET['edit'] == "yes") {
	// Get The Input
	$price = $_POST[group1];
	$delivery = $_POST[group2];
 	$takeout = $_POST[group3];
	$groups = $_POST[group4];
 	$reservations = $_POST[group5];
	$outsideSeating = $_POST[group6];
	$bar = $_POST[group7];
	$kids = $_POST[group8];
 	$speed = $_POST[group9];
	$steakhouse = $_POST[group10];
	$american = $_POST[group11];
	$middleEastern = $_POST[group12];
	$asian = $_POST[group13];
	$italian = $_POST[group14];
 	$chinese = $_POST[group15];
	$japanese = $_POST[group16];
	$indian = $_POST[group17];
	$french = $_POST[group18];
	$greek = $_POST[group19];
	$mexican = $_POST[group20];
 	$vegetarian = $_POST[group21];
	$seafood = $_POST[group22];

	$errormess = "";


	if ($errormess == "") {
		@mysqli_query($db, "Update `Users` set price=$price, delivery=$delivery, takeout=$takeout, accommodate_groups=$accommodate_groups, reservations=$reservations, outside_seating=$outside_seating, bar=$bar, kids=$kids, fast_food=$fast_food, steakhouse_influence=$steakhouse_influence, american_influence=$american_influence, middle_eastern_influence=$middle_eastern_influence, asian_influence=$asian_influence, italian_influence=$italian_influence, chinese_influence=$chinese_influence, japanese_influence=$japanese_influence, indian_influence=$indian_influence, french_influence=$french_influence, greek_influence=$greek_influence, mexican_influence=$mexican_influence, vegetarian_influence=$vegetarian_influence, seafood_influence=$seafood_influence where where user_id='".$_SESSION['user_id']."'") or die(mysqli_error());
		echo("<p>Your survey results have been updated!</p>");
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

<form action="survey.php?edit=yes" method="post">
<center>
<b><p><i><font size="5.5" face="Georgia" color="000066">S</font><font size="4.5" face="Georgia">urvey:</p></b></i></font>
</center>

<font size="2" face="Georgia" color="black">

<table border="0" cellpadding="0" cellspacing="0">

<tr><td align="left"><b>How much do you prefer spending per person (on average)?</b></td></tr>
<tr><td align="left"><input type="radio" name="group1" value="1"> Cheap (Up to $10)</td></tr>
<tr><td align="left"><input type="radio" name="group1" value="2"> Moderate (Up to $30)</td></tr>
<tr><td align="left"><input type="radio" name="group1" value="3"> Expensive (Up to $60)</td></tr>


<tr><td align="left"><b>Do you prefer a restaurant that offers delivery?</b></td></tr>
<tr><td align="left"><input type="radio" name="group2" value="1"> Yes </td></tr>
<tr><td align="left"><input type="radio" name="group2" value="0"> No </td></tr>

<tr><td align="left"><b>Do you prefer a restaurant that offers takeout?</b></td></tr>
<tr><td align="left"><input type="radio" name="group3" value="1"> Yes </td></tr>
<tr><td align="left"><input type="radio" name="group3" value="0"> No </td></tr>

<tr><td align="left"><b>Do you prefer a restaurant that can accommodate groups?</b></td></tr>
<tr><td align="left"><input type="radio" name="group4" value="1"> Yes </td></tr>
<tr><td align="left"><input type="radio" name="group4" value="0"> No </td></tr>

<tr><td align="left"><b>Do you prefer a restaurant that accepts reservations?</b></td></tr>
<tr><td align="left"><input type="radio" name="group5" value="1"> Yes </td></tr>
<tr><td align="left"><input type="radio" name="group5" value="0"> No </td></tr>

<tr><td align="left"><b>Do you prefer a restaurant that has outside seating?</b></td></tr>
<tr><td align="left"><input type="radio" name="group6" value="1"> Yes </td></tr>
<tr><td align="left"><input type="radio" name="group6" value="0"> No </td></tr>

<tr><td align="left"><b>Do you prefer a restaurant that has a full bar?</b></td></tr>
<tr><td align="left"><input type="radio" name="group7" value="1"> Yes </td></tr>
<tr><td align="left"><input type="radio" name="group7" value="0"> No </td></tr>

<tr><td align="left"><b>Do you prefer a restaurant that is good for kids?</b></td></tr>
<tr><td align="left"><input type="radio" name="group8" value="1"> Yes </td></tr>
<tr><td align="left"><input type="radio" name="group8" value="0"> No </td></tr>

<tr><td align="left"><b>On a scale of 1 to 5, how fast do you want your service to be?</b></td></tr>
<tr><td align="left"><input type="radio" name="group9" value="1"> 1 (Sluggish) </td></tr>
<tr><td align="left"><input type="radio" name="group9" value="2"> 2 </td></tr>
<tr><td align="left"><input type="radio" name="group9" value="3"> 3 (Moderate)</td></tr>
<tr><td align="left"><input type="radio" name="group9" value="4"> 4 </td></tr>
<tr><td align="left"><input type="radio" name="group9" value="5"> 5 (Super fast)</td></tr>
<tr> </tr><tr> </tr>
<tr><td align="left"><b>On a scale of 1 to 5, how much do you prefer this type of restaurant?</b></tr>
<tr><td align="center"><b>Steakhouse</b></td></tr>
<tr><td align="center"><input type="radio" name="group10" value="1"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group10" value="2"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group10" value="3"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group10" value="4"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group10" value="5"> 5 </td></tr>

<tr><td align="center"><b>American</b></td></tr>
<tr><td align="center"><input type="radio" name="group11" value="1"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group11" value="2"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group11" value="3"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group11" value="4"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group11" value="5"> 5 </td></tr>

<tr><td align="center"><b>Middle Eastern</b></td></tr>
<tr><td align="center"><input type="radio" name="group12" value="1"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group12" value="2"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group12" value="3"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group12" value="4"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group12" value="5"> 5 </td></tr>

<tr><td align="center"><b>Asian</b></td></tr>
<tr><td align="center"><input type="radio" name="group13" value="1"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group13" value="2"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group13" value="3"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group13" value="4"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group13" value="5"> 5 </td></tr>

<tr><td align="center"><b>Italian</b></td></tr>
<tr><td align="center"><input type="radio" name="group14" value="1"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group14" value="2"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group14" value="3"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group14" value="4"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group14" value="5"> 5 </td></tr>

<tr><td align="center"><b>Chinese</b></td></tr>
<tr><td align="center"><input type="radio" name="group15" value="1"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group15" value="2"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group15" value="3"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group15" value="4"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group15" value="5"> 5 </td></tr>

<tr><td align="center"><b>Japanese</b></td></tr>
<tr><td align="center"><input type="radio" name="group16" value="1"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group16" value="2"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group16" value="3"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group16" value="4"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group16" value="5"> 5 </td></tr>

<tr><td align="center"><b>Indian</b></td></tr>
<tr><td align="center"><input type="radio" name="group17" value="1"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group17" value="2"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group17" value="3"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group17" value="4"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group17" value="5"> 5 </td></tr>

<tr><td align="center"><b>French</b></td></tr>
<tr><td align="center"><input type="radio" name="group18" value="1"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group18" value="2"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group18" value="3"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group18" value="4"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group18" value="5"> 5 </td></tr>

<tr><td align="center"><b>Greek</b></td></tr>
<tr><td align="center"><input type="radio" name="group19" value="1"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group19" value="2"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group19" value="3"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group19" value="4"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group19" value="5"> 5 </td></tr>

<tr><td align="center"><b>Mexican</b></td></tr>
<tr><td align="center"><input type="radio" name="group20" value="1"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group20" value="2"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group20" value="3"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group20" value="4"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group20" value="5"> 5 </td></tr>

<tr><td align="center"><b>Vegetarian</b></td></tr>
<tr><td align="center"><input type="radio" name="group21" value="1"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group21" value="2"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group21" value="3"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group21" value="4"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group21" value="5"> 5 </td></tr>

<tr><td align="center"><b>Seafood</b></td></tr>
<tr><td align="center"><input type="radio" name="group22" value="1"> 1 </td></tr>
<tr><td align="center"><input type="radio" name="group22" value="2"> 2 </td></tr>
<tr><td align="center"><input type="radio" name="group22" value="3"> 3 </td></tr>
<tr><td align="center"><input type="radio" name="group22" value="4"> 4 </td></tr>
<tr><td align="center"><input type="radio" name="group22" value="5"> 5 </td></tr>
</table>
<table>
<tr><td>&nbsp;</td><td align="center"><input type="submit" value="Submit Survey"></td></tr>
</table>
</form>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</center>

<?php
include("footer.php");
exit;
?>