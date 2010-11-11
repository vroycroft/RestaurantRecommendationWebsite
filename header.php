<?php

session_start();

include "db_connect.php";

// Menu Background Function
function bgtype($pagename, $navname) {
$filename = $_SERVER['REQUEST_URI'];
if (stristr($filename, $pagename) !== FALSE) {
	echo("onclick=\"window.location.href='".$pagename."'\" onMouseOver=\"this.style.background='url(".$navname."2.jpg)'\" onMouseOut=\"this.style.background='url(".$navname."2.jpg)'\" background=\"".$navname."2.jpg\"");
} else {
	echo("onclick=\"window.location.href='".$pagename."'\" onMouseOver=\"this.style.background='url(".$navname."2.jpg)'\" onMouseOut=\"this.style.background='url(".$navname."1.jpg)'\" background=\"".$navname."1.jpg\"");
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
            <tr><td align="center" valign="top" width="180">              
            <br /><br /><br />

<!-- Main Menu -->
<table border=1 bordercolor=gray cellpadding=0 cellspacing=0 width="180">
<tr><td align=center height=50 <?php bgtype("index.php", "home"); ?>>&nbsp;</td></tr></tr>
<tr><td align=center height=50 <?php bgtype("login.php", "login"); ?>>&nbsp;</td></tr>
<tr><td align=center height=50 <?php bgtype("signup.php", "signup"); ?>>&nbsp;</td></tr>
<tr><td align=center height=50 <?php bgtype("addRestaurant.php", "addrestaurant"); ?>>&nbsp;</td></tr>
</table>
<!-- End Main Menu -->

                </td><td width="100%" align="center">
            
              <p>&nbsp;</p>