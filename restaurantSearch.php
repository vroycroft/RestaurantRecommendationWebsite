<?php 

session_start();

include ("header.php"); 

$query = "SELECT name, price, average_user_rating, delivery, takeout, accommodate_groups,
reservations, outside_seating, bar, kids, fast_food,
steakhouse_influence, american_influence, middle_eastern_influence,
asian_influence, italian_influence, chinese_influence,
japanese_influence, indian_influence, french_influence,
greek_influence, mexican_influence, vegetarian_influence,
seafood_influence FROM $table;";

$result = mysqli_query($db, $query) 
		or die("Error Querying Database");

$numOfRestaurants = mysqli_num_rows($result);	

//echo "<li>$numOfRestaurants</li>";

$restaurantVectors[] = array();

if ($numOfRestaurants == 0) {
	echo "<h1>No results matched your search!</h1>";
} else {
 
for($i=0; $i<$numOfRestaurants; ++$i) {

$restaurantVectors[$i] = mysqli_fetch_array($result);


//echo "<li>RV: {$restaurantVectors[$i]['name']}</li>";


}




}

	$restaurantSearched = mysqli_real_escape_string($db, trim($_POST['searchRestaurant'])); 
	$query = "SELECT * FROM $table WHERE 
		name LIKE '%$restaurantSearched%' ORDER BY name;";

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
		$image = $row['image'];
		$average_user_rating = $row['average_user_rating'];
		$website = $row['website'];
		$delivery = $row['delivery'];
		
$firstLetter = substr($name, 0, 1);
$theRest = substr($name, 1, strlen($name)-1);

echo "<b><i><font size=8 face=Georgia color=cc6600>$firstLetter</font><font size=6 face=Georgia>$theRest</i></b></font><br/>";

//echo "<h1>$name</h1>";


echo "<b><font size=3 face=Georgia color=000066>$street_address </b></font><br/>";
echo "<b><font size=3 face=Georgia color=000066>$city, $state $zip </b></font><br/>";
echo "<b><font size=3 face=Georgia color=000066>Website: <a href='$website' target='_blank'>$website</a> </font></b><br/><br/>";
echo "<br><img src =\"$image\" style = \"width: 350px; height: 275 px;\"/><br/>";
if (isset($_SESSION['user_id']) && $_SESSION['user_id']>0) {
	$_SESSION['restaurant_id'] = $row['restaurant_id'];
	include("starcode.php");
}
echo "<br/>";
echo "Average User Rating: $average_user_rating <br/>";
}
echo "<hr/>";
echo "<b><font size=5 face=Georgia color=000066>You may also like: </font></b><br/>";

$k = 0;


for($j=0; $j<$numOfRestaurants; ++$j) {

	$nameToCompareTo = $restaurantVectors[$j]['name'];
	//echo "nameToCompareTo: $nameToCompareTo";
	

	if(ucfirst($restaurantSearched) == $restaurantVectors[$j]['name'])
	{
		//echo"$restaurantSearched found";
		//store all the attributes of this restaurant
		$restaurantSearchedPrice = $restaurantVectors[$j]['price'];
		$restaurantSearchedDelivery= $restaurantVectors[$j]['delivery'];
		$restaurantSearchedTakeOut = $restaurantVectors[$j]['takeout'];
		$restaurantSearchedGroups = $restaurantVectors[$j]['accommodate_groups'];
		$restaurantSearchedReservations = $restaurantVectors[$j]['reservations'];
		$restaurantSearchedOutsideSeating = $restaurantVectors[$j]['outside_seating'];
		$restaurantSearchedBar = $restaurantVectors[$j]['bar'];
		$restaurantSearchedKids= $restaurantVectors[$j]['kids'];
		$restaurantSearchedFF = $restaurantVectors[$j]['fast_food'];
		$restaurantSearchedSteak = $restaurantVectors[$j]['steakhouse_influence'];
		$restaurantSearchedAmer = $restaurantVectors[$j]['american_influence'];
		$restaurantSearchedME= $restaurantVectors[$j]['middle_eastern_influence'];
		$restaurantSearchedAsian= $restaurantVectors[$j]['asian_influence'];
		$restaurantSearchedItal = $restaurantVectors[$j]['italian_influence'];
		$restaurantSearchedChin = $restaurantVectors[$j]['chinese_influence'];
		$restaurantSearchedJap = $restaurantVectors[$j]['japanese_influence'];
		$restaurantSearchedIndian = $restaurantVectors[$j]['indian_influence'];
		$restaurantSearchedFrench = $restaurantVectors[$j]['french_influence'];
		$restaurantSearchedGreek = $restaurantVectors[$j]['greek_influence'];
		$restaurantSearchedMex = $restaurantVectors[$j]['mexican_influence'];
		$restaurantSearchedVeg = $restaurantVectors[$j]['vegetarian_influence'];
		$restaurantSearchedSeaFood = $restaurantVectors[$j]['seafood_influence'];
		$k = $j; //this is to know where the restaurant is in the 2-d array
		//echo "<p>k:$k</p>";

	}



}

for ($m = 0; $m <$numOfRestaurants; ++$m) {
	$totalDistance = 0;
	$numOfAttributes = 22;
	if ($m != $k) 
	{
		$restaurantToCompareName = $restaurantVectors[$m]['name'];
		$restaurantToComparePrice = $restaurantVectors[$m]['price'];
		$restaurantToCompareDelivery= $restaurantVectors[$m]['delivery'];
		$restaurantToCompareTakeOut = $restaurantVectors[$m]['takeout'];
		$restaurantToCompareGroups = $restaurantVectors[$m]['accommodate_groups'];
		$restaurantToCompareReservations = $restaurantVectors[$m]['reservations'];
		$restaurantToCompareOutsideSeating = $restaurantVectors[$m]['outside_seating'];
		$restaurantToCompareBar = $restaurantVectors[$m]['bar'];
		$restaurantToCompareKids= $restaurantVectors[$m]['kids'];
		$restaurantToCompareFF = $restaurantVectors[$m]['fast_food'];
		$restaurantToCompareSteak = $restaurantVectors[$m]['steakhouse_influence'];
		$restaurantToCompareAmer = $restaurantVectors[$m]['american_influence'];
		$restaurantToCompareME= $restaurantVectors[$m]['middle_eastern_influence'];
		$restaurantToCompareAsian= $restaurantVectors[$m]['asian_influence'];
		$restaurantToCompareItal = $restaurantVectors[$m]['italian_influence'];
		$restaurantToCompareChin = $restaurantVectors[$m]['chinese_influence'];
		$restaurantToCompareJap = $restaurantVectors[$m]['japanese_influence'];
		$restaurantToCompareIndian = $restaurantVectors[$m]['indian_influence'];
		$restaurantToCompareFrench = $restaurantVectors[$m]['french_influence'];
		$restaurantToCompareGreek = $restaurantVectors[$m]['greek_influence'];
		$restaurantToCompareMex = $restaurantVectors[$m]['mexican_influence'];
		$restaurantToCompareVeg = $restaurantVectors[$m]['vegetarian_influence'];
		$restaurantToCompareSeaFood = $restaurantVectors[$m]['seafood_influence'];

		

		$totalDistance = abs($restaurantToComparePrice - $restaurantSearchedPrice) + abs($restaurantToCompareDelivery - $restaurantSearchedDelivery) +
abs($restaurantSearchedTakeOut - $restaurantToCompareTakeOut) + abs($restaurantSearchedGroups - $restaurantToCompareGroups) + abs($restaurantSearchedReservations - $restaurantToCompareReservations) +
abs($restaurantSearchedOutsideSeating - $restaurantToCompareOutsideSeating) + abs($restaurantSearchedBar - $restaurantToCompareBar) +
abs($restaurantSearchedKids - $restaurantToCompareKids) + abs($restaurantSearchedFF - $restaurantToCompareFF) + abs($restaurantSearchedSteak - $restaurantToCompareSteak) +
abs($restaurantSearchedAmer - $restaurantToCompareAmer) + abs($restaurantSearchedME - $restaurantToCompareME) + abs($restaurantSearchedAsian - $restaurantToCompareAsian) +
abs($restaurantSearchedItal - $restaurantToCompareItal)+ abs($restaurantSearchedChin - $restaurantToCompareChin) + abs($restaurantSearchedJap - $restaurantToCompareJap) +
abs($restaurantSearchedIndian - $restaurantToCompareIndian) + abs($restaurantSearchedFrench - $restaurantToCompareFrench) +
abs($restaurantSearchedGreek - $restaurantToCompareGreek) + abs($restaurantSearchedMex - $restaurantToCompareMex) + abs($restaurantSearchedVeg - $restaurantToCompareVeg) +
abs($restaurantSearchedSeaFood - $restaurantToCompareSeaFood);

$distances[$m][0] = $restaurantToCompareName;
$distances[$m][1] = $totalDistance;

//echo "<p>{$distances[$m][0]} = {$distances[$m][1]}</p>";




	}
}

//$minDistance = $distances[0][1];
$minDistance = 100;
//echo "min dist 1: $minDistance";
//echo "<p>{$distances[1][1]}, {$distances[2][1]}, {$distances[3][1]}</p>";

for($n=1; $n<$numOfRestaurants-1; $n++)
{
$distToCompare = $distances[$n][1];
//echo "distToCompare: $distToCompare";	

if(($distToCompare < $minDistance) and ($n != $k))
	{
		
		$minDistance = $distances[$n][1];
		//echo "min dist in if: $minDistance";
	}
}

//echo "min dist: $minDistance";

for($n=0; $n<$numOfRestaurants; ++$n)
{
	if($distances[$n][1] == $minDistance)
	{
		echo "<b><i><font size=5 face=Georgia color=cc6600>{$distances[$n][0]}</i></font></b><br/>";
	}
}

echo "<hr></hr>";
echo "<b><font size=3 face=Georgia color=000066>Calculated Distances:</b></font><br/>";

for($n=0; $n<$numOfRestaurants; ++$n)
{
	if($n != $k)
	{
		echo "<i><font size=3 face=Georgia color=cc6600>{$distances[$n][0]} = {$distances[$n][1]}<br/></font>";
	}
}


}

include("footer.php");
 
?>