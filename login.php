<?php	
		session_start();	// start session
		
		if(isset($_SESSION['user']))
		{
			header('Location: profile.php');
		}
		
		require("includes/db_connection.php");
		$pageTitle = "Log-in | SILVERADO";	//page title
		include("includes/head.php");		
?>
</head>

<body>

<main>
	
    <div class="wrapper">	
    <div class="panel">
    
    <form action="" method="post" >
    <h1>Login   |  <a href="signup.php">Signup</a>
	
    </h1>
    	<input type="email" placeholder="Enter your email" name="email" class="half" value="">
    	<input type="password" name="authenticate" placeholder="Password or 5 digit Secret no" value="">       
           
        <input type="submit" class="button" name="submit">
        
        <h1><a href="index.php" class="arrow">back </a></h1>
    	</form>
        <?php
		echo '<div class="message">';
		echo '<br><br><br><br><br>';
		
		if(isset($_POST['submit']))
		{
		
		
			$email = $_POST['email'];
			$authenticate = $_POST['authenticate'];
			
			if(empty($email)||empty($authenticate))
			{
				echo "You left your credentials empty,<br>please fill them ...";
			}
			else
			{
				$query = "SELECT * FROM user WHERE uEmail='$email' and
				(uPass='$authenticate' OR uSecret='$authenticate') ";
				$result = mysqli_query($connection,$query);
				$row = mysqli_fetch_array($result);
				
			
				if(!$row)
				{
					echo 'Authentication failed!!<br> Enter valid credentials. ';
				}
				else
				{
					$sql= "SELECT * FROM user WHERE uEmail = '$email'";
					$res = mysqli_query($connection,$sql);
					$row2 = mysqli_fetch_array($res);
					
					
					if(!$row2)
				{
					echo 'Authentication failed!!<br> Enter valid credentials. ';
				}
					else
					{
					echo 'You logged in successfully, lets see your profile';	
					
					$query = "select * from user where uEmail = '$email'";
					$res = mysqli_query($connection,$query);
					while($row = mysqli_fetch_array($res))
					{
						$userId = $row['uId'];
					}
					$_SESSION['user'] = $userId;
					
					// force send to profile page, after successful login
					echo '<script type="text/javascript">
           					window.location = "profile.php"
     					 </script>';
					}
				}
					
			}
		}
		echo '</div>';
		
		?>
    <br><br><br><br>
    <a href="index.php"><img class="logo" src="images/silverado-logo-footer.png"></a>
    </div>
    </div>

</main>

</body>
</html>
