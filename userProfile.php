<?php

session_start();
include ("header.php");

                $name = $_POST['username'];
                $pw = $_POST['password'];


                $query = "SELECT * FROM Users WHERE username = '$name' AND password = SHA('$pw');";
                $result = mysqli_query($db, $query)
                        or die("Error querying database.");
$row = mysqli_fetch_array($result);
$firstName = $row['first_name'];
$user_id = $row['user_id'];

                $confirmation = mysqli_num_rows($result);

                if ($confirmation == 0){
                     echo "<p><center><b><i><font size=4 face=Georgia color=000066>Incorrect username or password. <br/>";
		   echo "Please try again by clicking the link below.</font></p></b></i><br/>";
		   echo "<p><center><b><i><font size=4 face=Georgia color=000066><a href='login.php'>Log In</a></b></i></center></p>";                
                }else{

			$_SESSION['username'] = $name;
			$_SESSION['password'] = $pw;
			$_SESSION['user_id'] = $user_id;
			
			$firstLetterOfName = substr($firstName, 0, 1);
 			$theRestOfName = substr($firstName,  1, strlen($firstName)-1);
			echo "<p><center><b><i><font size=7 face=Georgia color=000066>W</font><font size=6 face=Georgia>elcome, </font><font size=7 face=Georgia color=000066>$firstLetterOfName</font><font size=6 face=Georgia>$theRestOfName !</font></p></b></i>\n";
?>
<hr/>
<br/>  
<p><center><b><font size=5 face=Georgia color=000066>Restaurant(s) closest to your survey answers:</font>
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
abs($restaurantToCompareTakeOut - $userAnswers[0]['takeout']) + abs($restaurantToCompareGroups - $userAnswers[0]['accommodate_groups']) + abs($restaurantToCompareReservations - $userAnswers[0]['reservations']) +
abs($restaurantToCompareOutsideSeating - $userAnswers[0]['outside_seating']) + abs($restaurantToCompareBar - $userAnswers[0]['bar']) +
abs($restaurantToCompareKids - $userAnswers[0]['kids']) + abs($restaurantToCompareFF - $userAnswers[0]['fast_food']) + abs($restaurantToCompareSteak - $userAnswers[0]['steakhouse_influence']) +
abs($restaurantToCompareAmer - $userAnswers[0]['american_influence']) + abs($restaurantToCompareME - $userAnswers[0]['middle_eastern_influence']) + abs($restaurantToCompareAsian - $userAnswers[0]['asian_influence']) +
abs($restaurantToCompareItal - $userAnswers[0]['italian_influence'])+ abs($restaurantToCompareChin - $userAnswers[0]['chinese_influence']) + abs($restaurantToCompareJap - $userAnswers[0]['japanese_influence']) +
abs($restaurantToCompareIndian - $userAnswers[0]['indian_influence']) + abs($restaurantToCompareFrench - $userAnswers[0]['french_influence']) +
abs($restaurantToCompareGreek - $userAnswers[0]['greek_influence']) + abs($restaurantToCompareMex - $userAnswers[0]['mexican_influence']) + abs($restaurantToCompareVeg - $userAnswers[0]['vegetarian_influence']) +
abs($restaurantToCompareSeaFood - $userAnswers[0]['seafood_influence']);

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
		echo "<h2><i><font color=CC6600>{$distances[$n][0]}</font></i></h2>";
	}
}




	
}
?>

<hr/>
<p><center><b><font size=5 face=Georgia color=000066>User(s) you are closest to:</font></b>


<?php
//$username = $_SESSION['username'];
//echo "username: $username";	

//$query = "SELECT * FROM `Users` WHERE 
		//username = '$username';";

	//$result = mysqli_query($db, $query) 
		//or die("Error Querying Database 1");

//$numOfRows = mysqli_num_rows($result);	



//$userAnswers[0] = mysqli_fetch_array($result);
//echo "<li>{$userAnswers[0]['username']}</li>";
//echo "<li>{$userAnswers[0]['price']}</li>";





$query = "SELECT username, first_name, last_name, price, delivery, takeout, accommodate_groups,
reservations, outside_seating, bar, kids, fast_food,
steakhouse_influence, american_influence, middle_eastern_influence,
asian_influence, italian_influence, chinese_influence,
japanese_influence, indian_influence, french_influence,
greek_influence, mexican_influence, vegetarian_influence,
seafood_influence FROM Users;";

$result = mysqli_query($db, $query) 
		or die("Error Querying Database");

$numOfUsers = mysqli_num_rows($result);	


$userVectors[] = array();

if ($numOfUsers == 0) {
	echo "<h1>No results matched your search!</h1>";
} else {
 
for($i=0; $i<$numOfUsers; ++$i) {

$userVectors[$i] = mysqli_fetch_array($result);
//echo "<li>user vector: {$userVectors[$i]['username']}</li>";
}




for ($m = 0; $m <$numOfUsers; ++$m) {
	$totalDistance = 0;
	$numOfAttributes = 22;

		$userToCompareUserName = $userVectors[$m]['username'];
$userToCompareFirstName = $userVectors[$m]['first_name'];
$userToCompareLastName = $userVectors[$m]['last_name'];
		$userToComparePrice = $userVectors[$m]['price'];
		$userToCompareDelivery= $userVectors[$m]['delivery'];
		$userToCompareTakeOut = $userVectors[$m]['takeout'];
		$userToCompareGroups = $userVectors[$m]['accommodate_groups'];
		$userToCompareReservations = $userVectors[$m]['reservations'];
		$userToCompareOutsideSeating = $userVectors[$m]['outside_seating'];
		$userToCompareBar = $userVectors[$m]['bar'];
		$userToCompareKids= $userVectors[$m]['kids'];
		$userToCompareFF = $userVectors[$m]['fast_food'];
		$userToCompareSteak = $userVectors[$m]['steakhouse_influence'];
		$userToCompareAmer = $userVectors[$m]['american_influence'];
		$userToCompareME= $userVectors[$m]['middle_eastern_influence'];
		$userToCompareAsian= $userVectors[$m]['asian_influence'];
		$userToCompareItal = $userVectors[$m]['italian_influence'];
		$userToCompareChin = $userVectors[$m]['chinese_influence'];
		$userToCompareJap = $userVectors[$m]['japanese_influence'];
		$userToCompareIndian = $userVectors[$m]['indian_influence'];
		$userToCompareFrench = $userVectors[$m]['french_influence'];
		$userToCompareGreek = $userVectors[$m]['greek_influence'];
		$userToCompareMex = $userVectors[$m]['mexican_influence'];
		$userToCompareVeg = $userVectors[$m]['vegetarian_influence'];
		$userToCompareSeaFood = $userVectors[$m]['seafood_influence'];
//echo "$userToCompareUserName, $userToCompareTakeOut, $userToCompareAmer";

		

		$totalDistance = abs($userToComparePrice - $userAnswers[0]['price']) + abs($userToCompareDelivery - $userAnswers[0]['delivery']) +
abs($userToCompareTakeOut - $userAnswers[0]['takeout']) + abs($userToCompareGroups - $userAnswers[0]['accommodate_groups']) + abs($userToCompareReservations - $userAnswers[0]['reservations']) +
abs($userToCompareOutsideSeating - $userAnswers[0]['outside_seating']) + abs($userToCompareBar - $userAnswers[0]['bar']) +
abs($userToCompareKids - $userAnswers[0]['kids']) + abs($userToCompareFF - $userAnswers[0]['fast_food']) + abs($userToCompareSteak - $userAnswers[0]['steakhouse_influence']) +
abs($userToCompareAmer - $userAnswers[0]['american_influence']) + abs($userToCompareME - $userAnswers[0]['middle_eastern_influence']) + abs($userToCompareAsian - $userAnswers[0]['asian_influence']) +
abs($userToCompareItal - $userAnswers[0]['italian_influence'])+ abs($userToCompareChin - $userAnswers[0]['chinese_influence']) + abs($userToCompareJap - $userAnswers[0]['japanese_influence']) +
abs($userToCompareIndian - $userAnswers[0]['indian_influence']) + abs($userToCompareFrench - $userAnswers[0]['french_influence']) +
abs($userToCompareGreek - $userAnswers[0]['greek_influence']) + abs($userToCompareMex - $userAnswers[0]['mexican_influence']) + abs($userToCompareVeg - $userAnswers[0]['vegetarian_influence']) +
abs($userToCompareSeaFood - $userAnswers[0]['seafood_influence']);

$userDistances[$m][0] = $userToCompareUserName;
$userDistances[$m][1] = $totalDistance;
$userDistances[$m][2] = $userToCompareFirstName;
$userDistances[$m][3] = $userToCompareLastName;

//echo "totalDist: $totalDistance";
//echo "<p>{$userDistances[$m][0]} = {$userDistances[$m][1]}</p>";

}




//$minDistance = $distances[0][1];
$minDistance = 100;
//echo "min dist 1: $minDistance";
//echo "<p>{$distances[1][1]}, {$distances[2][1]}, {$distances[3][1]}</p>";

//echo "$numOfUsers";

for($n=0; $n<$numOfUsers; $n++)
{
	if($userDistances[$n][0] != $username)
	{
//echo "n: $n";		
$distToCompare = $userDistances[$n][1];
		//echo "distToCompare: $distToCompare";	

		if($distToCompare < $minDistance)
		{
			
			$minDistance = $userDistances[$n][1];
			//echo "min dist in if: $minDistance";
		}
	}

	//echo "min dist: $minDistance";
	//echo "numOfRest: $numOfRestaurants";
}

	for($n=0; $n<$numOfUsers; ++$n)
	{
		if($userDistances[$n][1] == $minDistance)
		{
			echo "<h2><i><font color=cc6600>{$userDistances[$n][2]}</font></i></h2>";
		}
	}


echo "<hr></hr>";
echo "<h2><b><font color=000066>Calculated Distances:</h2></font></b>";

for($n=0; $n<$numOfUsers; ++$n)
{
	if($userDistances[$n][0] != $username)
	{
		echo "</b><i><font color=cc6600>{$userDistances[$n][0]} = {$userDistances[$n][1]}</font></i><br/>";
	}
}

	
}
}
?>
			
                
   



