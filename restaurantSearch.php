<?php 
include "db_connect.php"; 
include("header.php");

	$restaurant = mysqli_real_escape_string($db, trim($_POST['searchRestaurant'])); 
	$query = "SELECT * FROM $table WHERE 
		name LIKE '%$restaurant%' ORDER BY name;";

	$result = mysqli_query($db, $query) 
		or die("Error Querying Database"); 

$countrows = mysqli_num_rows($result);
if ($countrows == 0) {
	echo "<h1>No results matched your search!</h1>";
} else {
 

	while($row = mysqli_fetch_array($result)) {
		$name = $row['name'];
		$street_address = $row['street_address'];
		$city = $row['city'];
		$state = $row['state'];
		$zip = $row['zip'];
		$average_user_rating = $row['average_user_rating'];
		$website = $row['website'];
		$delivery = $row['delivery'];
		

echo "<li>$name</li>";
echo "<li>$street_address</li>";
echo "<li>$city</li>";
echo "<li>$state</li>";
echo "<li>$zip</li>";
echo "<li>$average_user_rating</li>";
echo "<li>$website</li>";
echo "<li>$delivery</li>";

for($i=0; $i<$numOfRestaurants; ++$i) {

if(ucfirst(searchRestaurant) == $restaurantVectors[$i]['name'])
{
	echo"<li>found<li>";
}



}

}
}




mysqli_close($db); 
?>