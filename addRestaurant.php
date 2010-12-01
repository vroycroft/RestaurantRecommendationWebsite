<?php

include("header.php");

echo("<font size=4.5 face=Georgia color=black>");

if (!isset($_SESSION['user_id']) || !is_numeric($_SESSION['user_id'])) {
echo("<p><b>Sorry, but you do not have access to this page!
            <br/>You are not a registered administrator.</b></p>");
exit;
}

$checkadmin = mysqli_query($db, "Select admin from Users where user_id=".$_SESSION['user_id']);
$row = mysqli_fetch_array($checkadmin);

$isadmin = $row['admin'];
if ($isadmin != 1) {
echo("<p><b>Sorry, but you do not have access to this page!</b></p>");
exit;
}

if ($_GET['add'] == "yes") {
	// Get The Input
	$name = mysqli_real_escape_string($db, trim($_POST['name']));
	$street_address = mysqli_real_escape_string($db, trim($_POST['street_address']));
	$city = mysqli_real_escape_string($db, trim($_POST['city']));
	$state = mysqli_real_escape_string($db, trim($_POST['state']));
	$zip = mysqli_real_escape_string($db, trim($_POST['zip']));
	$image = mysqli_real_escape_string($db, trim($_POST['image']));
	//$average_user_rating = mysqli_real_escape_string($db, trim($_POST['average_user_rating']));
	$website = mysqli_real_escape_string($db, trim($_POST['website']));
	$price = mysqli_real_escape_string($db, trim($_POST['price']));
	$delivery = mysqli_real_escape_string($db, trim($_POST['delivery']));
	$takeout = mysqli_real_escape_string($db, trim($_POST['takeout']));
	$accommodate_groups = mysqli_real_escape_string($db, trim($_POST['accommodate_groups']));
	$reservations = mysqli_real_escape_string($db, trim($_POST['reservations']));
	$outside_seating = mysqli_real_escape_string($db, trim($_POST['outside_seating']));
	$bar = mysqli_real_escape_string($db, trim($_POST['bar']));
	$kids = mysqli_real_escape_string($db, trim($_POST['kids']));
	$fast_food = mysqli_real_escape_string($db, trim($_POST['fast_food']));
	$steakhouse_influence = mysqli_real_escape_string($db, trim($_POST['steakhouse_influence']));
	$american_influence = mysqli_real_escape_string($db, trim($_POST['american_influence']));
	$middle_eastern_influence = mysqli_real_escape_string($db, trim($_POST['middle_eastern_influence']));
	$asian_influence = mysqli_real_escape_string($db, trim($_POST['asian_influence']));
	$italian_influence = mysqli_real_escape_string($db, trim($_POST['italian_influence']));
	$chinese_influence = mysqli_real_escape_string($db, trim($_POST['chinese_influence']));
	$japanese_influence = mysqli_real_escape_string($db, trim($_POST['japanese_influence']));
	$indian_influence = mysqli_real_escape_string($db, trim($_POST['indian_influence']));
	$french_influence = mysqli_real_escape_string($db, trim($_POST['french_influence']));
	$greek_influence = mysqli_real_escape_string($db, trim($_POST['greek_influence']));
	$mexican_influence = mysqli_real_escape_string($db, trim($_POST['mexican_influence']));
	$vegetarian_influence = mysqli_real_escape_string($db, trim($_POST['vegetarian_influence']));
	$seafood_influence = mysqli_real_escape_string($db, trim($_POST['seafood_influence']));


	$errormess = "";

	// Make Sure All Fields Are Entered
	if ($name == "") {
		$errormess = "Your must fill in all the fields";
	}


	if ($errormess == "") {
		@mysqli_query($db, "Insert into `RestaurantInfo` (name, street_address, city, state, zip, image, website, price, delivery, takeout, accommodate_groups, reservations, outside_seating, bar, kids, fast_food, steakhouse_influence, american_influence, middle_eastern_influence, asian_influence, italian_influence, chinese_influence, japanese_influence, indian_influence, french_influence, greek_influence, mexican_influence, vegetarian_influence, seafood_influence) values ('$name', '$street_address', '$city', '$state', '$zip', '$image', '$website', $price, $delivery, $takeout, $accommodate_groups, $reservations, $outside_seating, $bar, $kids, $fast_food, $steakhouse_influence, $american_influence, $middle_eastern_influence, $asian_influence, $italian_influence, $chinese_influence, $japanese_influence, $indian_influence, $french_influence, $greek_influence, $mexican_influence, $vegetarian_influence, $seafood_influence)");
		echo("Restaurant added successfully.");
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
<p><font size=5><b><u>Add A Restaurant</u></b></font></p>


<form action="addRestaurant.php?add=yes" method="post">
<table border="0" cellpadding="3" cellspacing="0">

<?php

$fields = array("name", "street_address", "city", "state", "zip", "image", "website", "price", "delivery", "takeout", "accommodate_groups", "reservations", "outside_seating", "bar", "kids", "fast_food", "steakhouse_influence", "american_influence", "middle_eastern_influence", "asian_influence", "italian_influence", "chinese_influence", "japanese_influence", "indian_influence", "french_influence", "greek_influence", "mexican_influence", "vegetarian_influence", "seafood_influence");

while (list($key, $fieldname) = each($fields)) {
	echo("<tr><td align=\"right\"><b>$fieldname: </b></td><td align=\"left\"><input type=\"text\" name=\"$fieldname\" value=\"0\"></td</tr>");
}

?>

<tr><td>&nbsp;</td><td align="center"><input type="submit" value="Add"></td></tr>
</table>
</form>

</font>
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