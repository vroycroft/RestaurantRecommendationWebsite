<?php

include "db_connect.php"; 

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

echo "<li>$numOfRestaurants</li>";

$restaurantVectors[] = array();

if ($numOfRestaurants == 0) {
	echo "<h1>No results matched your search!</h1>";
} else {
 
//$i = 0;
for($i=0; $i<$numOfRestaurants; ++$i) {
$restaurantVectors[$i] = mysqli_fetch_array($result);

echo "<li>{$restaurantVectors[$i]['name']}</li>";

//populate the restaurant vectors array
//$restaurantVectors[$i][0] = $row['name'];
//$restaurantVectors[$i][1] = $row['price'];
//$restaurantVectors[$i][2] = $row['delivery'];

//$i = $i + 1;

//echo "<li>{$restaurantVectors[$i][0]}</li>";
}




}

// Menu Background Function
function bgtype($pagename) {
$filename = $_SERVER['REQUEST_URI'];
if (stristr($filename, $pagename) !== FALSE) {
	echo("bgcolor=#DDDDDD");
} else {
	echo("onMouseOver=\"hoveron(this)\" onMouseOut=\"hoveroff(this)\" bgcolor=\"#EEEEEE\"");
}

}
// End Menu Background Function

?>
<html>
<head>
<title>Restaurant Site</title>

<style  TYPE="text/css">
    BODY {
	Background-color: #ffffff;
	background-image: url(background.jpg);
	background-repeat:repeat-x; 
	background-position:top;
}
    <!--

a            { color: black; text-decoration: none;}
a:visited    { color: black; text-decoration: none;}
a:hover      { color: blue; text-decoration: underline;}
    -->
</style>

</head>

<body bgcolor="skyblue" topmargin="0">

<script language="JavaScript">
<!--
function hoveron(cell) {
  cell.style.background='#DDDDDD'
}
function hoveroff(cell) {
  cell.style.background='#EEEEEE'
}
// -->
</script>

<table width="720" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td><img src="header.jpg" width="720" height="300"></td>
  </tr>
  <tr>
    <td width="720" height="50" background="searchbar.jpg" align="center">
    <form style="margin:0px" action="restaurantSearch.php" method="post">
    <input type="text" name="searchRestaurant">
    <input type="submit" value="GO">
    </form>    
    </td>
  </tr>
  <tr>
    <td valign="top"> 
      <div align="center">
        <table width="720" border="0" cellspacing="0" cellpadding="1">
          <tr>
            <td align="center" background="body.jpg">
            <table width="700" border="0" cellpadding="5" cellspacing="0">
            <tr><td align="left" width="150">              


<!-- Main Menu -->
<table border=1 bordercolor=gray cellpadding=3 cellspacing=0 width="150">
<tr><td align=center <? bgtype("/index.php"); ?>>&nbsp;&nbsp;<a href="index.php">Home</a>&nbsp;&nbsp;</td></tr></tr>
<tr><td align=center <? bgtype("/page1.php"); ?>>&nbsp;&nbsp;<a href="index.php">Page1</a>&nbsp;&nbsp;</td></tr>
<tr><td align=center <? bgtype("/page2.php"); ?>>&nbsp;&nbsp;<a href="index.php">Page2</a>&nbsp;&nbsp;</td></tr>
<tr><td align=center <? bgtype("/page3.php"); ?>>&nbsp;&nbsp;<a href="index.php">Page3</a>&nbsp;&nbsp;</td></tr>
<tr><td align=center <? bgtype("/page4.php"); ?>>&nbsp;&nbsp;<a href="index.php">Page4</a>&nbsp;&nbsp;</td></tr>
</table>
<!-- End Main Menu -->

                </td><td width="100%" align="center">
            
              <p>&nbsp;</p>