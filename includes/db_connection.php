<<<<<<< HEAD
<?php 

	// connecting to a database
	
	//set server name : In this case I have a localhost and bluehost server
	$server = 'localhost';
	
	if($server == 'localhost')
	{
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';	
	$database = 'webprogramming';
	
	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$database);
	
		if(!$connection)
		{
			die("There's a database connection error ". mysqli_connect_error());
		}
	}
	
	elseif($server == 'bluehost'){
	$dbhost = 'localhost';
	$dbuser = 'ojasvigr_ankit';
	$dbpass = 'ankit@rmit';	
	$database = 'ojasvigr_webprogramming';
	
	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$database);
	
		if(!$connection)
		{
			die("There's a database connection error ". mysqli_connect_error());
		}
	}
	
	
=======
<?php

	// connection to database
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'vacationhouse';
	
	$connection = mysql_connect($dbhost, $dbuser, $dbpass)
	or die("failed to connect");
	
	$
	
	 

>>>>>>> origin/master
?>