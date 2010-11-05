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