<?php

include "db_connect.php";

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
	Background-color: #C0C4CD;
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

<body topmargin="0">

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
            <tr><td align="left" valign="top" width="150">              
            <br /><br /><br />

<!-- Main Menu -->
<table border=1 bordercolor=gray cellpadding=3 cellspacing=0 width="150">
<tr><td align=center <?php bgtype("/index.php"); ?>>&nbsp;&nbsp;<a href="index.php">Home</a>&nbsp;&nbsp;</td></tr></tr>
<tr><td align=center <?php bgtype("/login.php"); ?>>&nbsp;&nbsp;<a href="login.php">Login</a>&nbsp;&nbsp;</td></tr>
<tr><td align=center <?php bgtype("/signup.php"); ?>>&nbsp;&nbsp;<a href="signup.php">Signup</a>&nbsp;&nbsp;</td></tr>
<tr><td align=center <?php bgtype("/page3.php"); ?>>&nbsp;&nbsp;<a href="index.php">Page3</a>&nbsp;&nbsp;</td></tr>
<tr><td align=center <?php bgtype("/page4.php"); ?>>&nbsp;&nbsp;<a href="index.php">Page4</a>&nbsp;&nbsp;</td></tr>
</table>
<!-- End Main Menu -->

                </td><td width="100%" align="center">
            
              <p>&nbsp;</p>