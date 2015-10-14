<?php	
		session_start();	// start session
		
		
		if(!isset($_SESSION['user']))
		{
			header('Location: login.php');
		}
		
		session_destroy();
		require("includes/db_connection.php");
		$pageTitle = "Log-out | SILVERADO";	//page title
		include("includes/head.php");		
?>
</head>

<body>

<main>
	
    <div class="wrapper">	
    <div class="panel">
    
    
    <h1>Logged out successfully  |  <a href="login.php">Login here</a> </h1>
    	<br><br>
        <h1><a href="index.php" class="arrow">go to home </a></h1>
    <p style="text-align:left"><img id="logo" src="images/silverado-logo-footer.png"></p>
    </div>
    </div>

</main>

</body>
</html>
