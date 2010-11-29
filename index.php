<?php

include("header.php");

?>

<HTML>

<BODY>

<br/>
<b><p><font size="6.5" face="Georgia" color="000066">R</font><font size="4.5" face="Georgia">estaurants currently in the database:</p></b></font>

<?php
$query = "SELECT restaurant_id, name FROM $table ORDER BY name";
$result = mysqli_query($db, $query)
or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
$restaurant_id = $row['restaurant_id'];
$name = $row['name'];

$firstLetter = substr($name, 0, 1);
$theRest = substr($name, 1, strlen($name)-1);

echo "<li><i><a href=\"restaurantSearch.php?restaurant_id=$restaurant_id\"><font size=5 face=Georgia color=000066>$firstLetter</font><font size=4 face=Georgia color=CC6600>$theRest</a></i></li></font>";

//echo "<li>$name</li>";
}
?>

</BODY>
</HTML>
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