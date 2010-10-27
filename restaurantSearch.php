<?php 
include "db_connect.php"; 

	$band = mysqli_real_escape_string($db, trim($_POST['searchRestaurant'])); 
	$query = "SELECT name FROM $table WHERE 
		name LIKE '%$band%' ORDER BY name;";

	$result = mysqli_query($db, $query) 
		or die("Error Querying Database"); 

$countrows = mysqli_num_rows($result);
if ($countrows == 0) {
	echo "<h1>No results matched your search!</h1>";
} else {

echo "<table boarder =1>";  

	while($row = mysqli_fetch_array($result)) {
		$id = $row['band_id'];
		$name = $row['name']; 
		$street_address = $row['street_address'];  
		$city = $row['city']; 
		$state = $row['state'];
		$genre = $row['genre'];
		$members = $row['members'];
		
echo "
<b><h1><a href='index.php?page=bandpage.php&id=$id'>$name<h1></a></h1></b>
<tr>
<p><font size = '5'><b>Members: </b></font>$members </p>
<p><font size = '5'><b>Location: </b></font>$street_address <br>$city, $state </p>
<p><font size = '5'><b>Genres: </b></font>$genre </p>
<br><br>
</tr>\n"; 
}
}
echo "</table>";

mysqli_close($db); 
?>