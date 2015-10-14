<?php 
		session_start();	// start session
		
		
		if(isset($_SESSION['user']))
		{
			header('Location: profile.php');
		}
		
		require("includes/db_connection.php");
		$pageTitle = "Sign Up | SILVERADO";	//page title
		include("includes/head.php");		
?>
</head>

<body>

<main>
	
    <div class="wrapper">	
	
    <div class="panel">
    
    <form action="" method="post" >
    <h1>Signup   |  <a href="login.php">Login</a>
	
    </h1>
    	<input type="text" placeholder="Name" name="name" class="half"
        pattern="^([a-zA-Z]+(?:\.)?(?:(?:'| )[a-zA-Z]+(?:\.)?)*)$"
        title="small and CAPS letters are allowed with spaces, punctuations followed by letter can be put for Irish names" required >
    	<input type="hidden" value="<?php $secretNo = rand(11111,99999); ?>" placeholder="Username" >
        <!-- ^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$
        ^\(?(\+?61|0)4\)?[ ]?[0-9]?[ ]?[0-9]?[ ]?[0-9]?[ ]?[0-9]?[ ]?[0-9]?[ ]?[0-9]?[ ]?[0-9]?[ ]?[0-9]$
         works little closer aswell   -->
    	<input type="email" name="email" placeholder="Email" value="" required>
    	<input type="text" name="phone" placeholder="Enter phone number" 
        pattern="^\(?(\+61|0)4\)?([ ]?[0-9]){8}$" title="start with +614 or (04) or 04" value="" required>
        <input type="password" name="pass" placeholder="Password" required >   
        <input type="password" name="repass" placeholder="Re-enter Password" required >        
           
        <input type="submit" class="button" name="submit">
        
        <h1><a href="index.php" class="arrow">back </a></h1>
    	</form>
        <?php
		echo '<div class="message">';
		echo '<br><br><br><br><br>';
		
		
		
		if(isset($_POST['submit']))
		{
				
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$pass = $_POST['pass'];
			$repass = $_POST['repass'];
		
			if(empty($name)||empty($email)||empty($phone)||empty($repass)||empty($pass))
			{
				echo "you left your credentials empty, please fill them again...";
			}
			elseif($pass != $repass)
			{
				echo "your passwords didn't matched";	
			}
			else{
		
			$sql = "INSERT INTO user (uName, uEmail, uPhone, uSecret, uPass)". 
				   "VALUES('$name', '$email', '$phone', '$secretNo', '$pass')";
					
			$result = mysqli_query($connection,$sql);
			
			if(!$result)
			{
				echo 'database error';	
			}
			else
			{
				echo 'account created successfully, we have created a 5 digit secret number for you, you can find it after your first login, you can use this number in combination with your email to login aswell.';
			}
					
			}
		}
		echo '</div>';
		
		?>
    
    <a href="index.php"><img class="logo" src="images/silverado-logo-footer.png"></a>
    </div>
    </div>

</main>

</body>
</html>
