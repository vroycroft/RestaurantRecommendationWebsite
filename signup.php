<?php

include("header.php");

?>
<center>
<p><b>Signup</b></p>


<form action="signup.php" method="post">
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