<?php
include "db_connect.php";
?>

<HTML>

<style  TYPE="text/css">
    BODY {
	
}
</style>

<BODY>
<CENTER>
<h1>Welcome to the Restaurant Recommendation Website!</h1>
</CENTER>
<br/>
<form action="restaurantSearch.php" method="post">
		<input type="text" name="searchrestaurant" value = "Enter a restaurant..." onFocus="if (value == 'Enter a restaurant...') {value=''}" onBlur="if (value== '') {value='Enter a restaurant...'}">
                <input name="submit" type="submit" value="Search">
		</form>
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