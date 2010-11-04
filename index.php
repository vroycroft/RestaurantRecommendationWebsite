<?php

include("header.php");

?>

<HTML>

<BODY>

<br/>
Restaurants:

<?php
$query = "SELECT name FROM $table";
$result = mysqli_query($db, $query)
or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
$name = $row['name'];

echo "<li>$name</li>";
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