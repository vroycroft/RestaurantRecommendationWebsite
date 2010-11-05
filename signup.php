<?php

include("header.php");

if ($_GET['signup'] == "yes") {
	// Get The Input
	$first_name = mysqli_real_escape_string($db, trim($_POST['first_name']));
	$last_name = mysqli_real_escape_string($db, trim($_POST['last_name']));
	$username = mysqli_real_escape_string($db, trim($_POST['username']));
	$password = mysqli_real_escape_string($db, trim($_POST['password']));

	$errormess = "";

	// Make Sure All Fields Are Entered
	if ($first_name == "" || $last_name == "" || $username == "" || $password == "") {
		$errormess = "Your must fill in all the fields";
	}

	// Check If username Exists
	$checkexists = mysqli_query($db, "Select COUNT(*) AS num from `Users` where username='$username'");
	$exists = mysqli_fetch_array($checkexists);
	if ($exists['num'] > 0) {
		$errormess = "Your username is already registered";
	}


	if ($errormess == "") {
		@mysqli_query($db, "Insert into `Users` (first_name, last_name, username, password) values ('$first_name', '$last_name', '$username', '$password')");
		echo("Account created successfully. <p><a href='login.php'>Login</a> to get started!</p>");
		include("footer.php");
		exit;
	} else {
		echo($errormess);
		include("footer.php");
		exit;
	}
}

?>
<center>
<p><b>Signup</b></p>


<form action="signup.php?signup=yes" method="post">
<table border="0" cellpadding="3" cellspacing="0">
<tr><td align="right"><b>First Name: </b></td><td align="left"><input type="text" name="first_name" value=""></td</tr>
<tr><td align="right"><b>Last Name: </b></td><td align="left"><input type="text" name="last_name" value=""></td</tr>
<tr><td align="right"><b>Username: </b></td><td align="left"><input type="text" name="username" value=""></td</tr>
<tr><td align="right"><b>Password: </b></td><td align="left"><input type="password" name="password" value=""></td</tr>
<tr><td>&nbsp;</td><td align="center"><input type="submit" value="Create Account"></td></tr>
</table>
</form>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</center>");

<?php
include("footer.php");
exit;
?>