        <?php
                
include ("header.php");

                $name = $_POST['username'];
                $pw = $_POST['password'];

                $query = "SELECT * FROM Users WHERE username = '$name' AND password = '$pw';";
                $result = mysqli_query($db, $query)
                        or die("Error querying database.");

                $confirmation = mysqli_num_rows($result);

                if ($confirmation == 0){
                        echo "<p>Incorrect username or password. Please try again by clicking the link below.</p>\n";

			echo "<p><a href='login.php'>Log In</a></p>";
                }else{

			$_SESSION['username'] = $name;
			$_SESSION['password'] = $pw;

			echo "<p>Welcome, {$_SESSION['username']}</p>\n";
			
                }
        ?>

Restaurants closest to your survey answers:

<?php
$username = $_SESSION['username'];
//echo "username: $username";	

$query = "SELECT * FROM `Users` WHERE 
		username = '$username';";

	$result = mysqli_query($db, $query) 
		or die("Error Querying Database 1");

$numOfRows = mysqli_num_rows($result);	



$userAnswers[0] = mysqli_fetch_array($result);
//echo "<li>{$userAnswers[0]['username']}</li>";
//echo "<li>{$userAnswers[0]['price']}</li>";





$query = "SELECT name, price, delivery, takeout, accommodate_groups,
reservations, outside_seating, bar, kids, fast_food,
steakhouse_influence, american_influence, middle_eastern_influence,
asian_influence, italian_influence, chinese_influence,
japanese_influence, indian_influence, french_influence,
greek_influence, mexican_influence, vegetarian_influence,
seafood_influence FROM $table;";

$result = mysqli_query($db, $query) 
		or die("Error Querying Database");

$numOfRestaurants = mysqli_num_rows($result);	


$restaurantVectors[] = array();

if ($numOfRestaurants == 0) {
	echo "<h1>No results matched your search!</h1>";
} else {
 
for($i=0; $i<$numOfRestaurants; ++$i) {

$restaurantVectors[$i] = mysqli_fetch_array($result);
}


//echo "<li>RV: {$restaurantVectors[$i]['name']}</li>";

for ($m = 0; $m <$numOfRestaurants; ++$m) {
	$totalDistance = 0;
	$numOfAttributes = 22;

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

		

		$totalDistance = abs($restaurantToComparePrice - $userAnswers[0]['price']) + abs($restaurantToCompareDelivery - $userAnswers[0]['delivery']) +
abs($restaurantSearchedTakeOut - $userAnswers[0]['takeout']) + abs($restaurantSearchedGroups - $userAnswers[0]['accommodate_groups']) + abs($restaurantSearchedReservations - $userAnswers[0]['reservations']) +
abs($restaurantSearchedOutsideSeating - $userAnswers[0]['outside_seating']) + abs($restaurantSearchedBar - $userAnswers[0]['bar']) +
abs($restaurantSearchedKids - $userAnswers[0]['kids']) + abs($restaurantSearchedFF - $userAnswers[0]['fast_food']) + abs($restaurantSearchedSteak - $userAnswers[0]['steakhouse_influence']) +
abs($restaurantSearchedAmer - $userAnswers[0]['american_influence']) + abs($restaurantSearchedME - $userAnswers[0]['middle_eastern_influence']) + abs($restaurantSearchedAsian - $userAnswers[0]['asian_influence']) +
abs($restaurantSearchedItal - $userAnswers[0]['italian_influence'])+ abs($restaurantSearchedChin - $userAnswers[0]['chinese_influence']) + abs($restaurantSearchedJap - $userAnswers[0]['japanese_influence']) +
abs($restaurantSearchedIndian - $userAnswers[0]['indian_influence']) + abs($restaurantSearchedFrench - $userAnswers[0]['french_influence']) +
abs($restaurantSearchedGreek - $userAnswers[0]['greek_influence']) + abs($restaurantSearchedMex - $userAnswers[0]['mexican_influence']) + abs($restaurantSearchedVeg - $userAnswers[0]['vegetarian_influence']) +
abs($restaurantSearchedSeaFood - $userAnswers[0]['seafood_influence']);

$distances[$m][0] = $restaurantToCompareName;
$distances[$m][1] = $totalDistance;

}

//echo "<p>{$distances[$m][0]} = {$distances[$m][1]}</p>";


//$minDistance = $distances[0][1];
$minDistance = 100;
//echo "min dist 1: $minDistance";
//echo "<p>{$distances[1][1]}, {$distances[2][1]}, {$distances[3][1]}</p>";

for($n=1; $n<$numOfRestaurants-1; $n++)
{
$distToCompare = $distances[$n][1];
//echo "distToCompare: $distToCompare";	

if($distToCompare < $minDistance)
	{
		
		$minDistance = $distances[$n][1];
		//echo "min dist in if: $minDistance";
	}
}

//echo "min dist: $minDistance";
//echo "numOfRest: $numOfRestaurants";

for($n=0; $n<$numOfRestaurants; ++$n)
{
	if($distances[$n][1] == $minDistance)
	{
		echo "<h2>{$distances[$n][0]}</h2>";
	}
}




	
}
?>

User Recommended Restaurants:



