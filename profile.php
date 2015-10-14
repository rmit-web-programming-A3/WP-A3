<?php 
		session_start();	// start session
		
		$userid = $_SESSION['user'];
		
		if(empty($_SESSION['user']))
		{					
		// force send to login page
		header('Location:login.php');
		}
		
		require("includes/db_connection.php");
		$pageTitle = "My Profile | SILVERADO";	//page title
		include("includes/head.php");		
?>

		<script src="js/ResponsiveSlides.js-master/jquery.min.js"></script>
        
		<script>
			$(function() {
    		$('.movie').click(function() {
        	$(this).find('div').slideToggle();
    		});
			});
		</script>

</head>

<body>
<?php include("includes/nav.php"); ?>

<main>
    	
        <div id="container">
        
        
        <div id="pricing">        
        <h1 class="schedule-heading">Welcome |
        <a href="logout.php">&nbsp;&nbsp;click to logout</a></h1>
        
     
        
        <table>   
		<?php
			 $sql = "SELECT * FROM user WHERE uId = '$userid'";
			 $query2 = mysqli_query($connection,$sql);
			 while($row2 = mysqli_fetch_array($query2))
			 {
				$name = $row2['uName'];
				$email = $row2['uEmail'];
				$phone = $row2['uPhone'];
				$secretNo = $row2['uSecret'];		
			 }			
	
        	echo '<thead>';
            echo '<tr>';
            echo	'<th>&nbsp;Details</th>';
            echo	'<th></th>';
            echo '</tr>';
            echo '</thead>';
            
            echo '<tbody>';
            
			echo '<tr>';
            echo	'<td>Name</td>';
            echo	'<td>'.$name.'</td>';
            echo '</tr>';
			
			echo '<tr>';
            echo	'<td>Email</td>';
            echo	'<td>'.$email.'</td>';
            echo '</tr>';
			
			echo '<tr>';
            echo	'<td>Phone</td>';
            echo	'<td>'.$phone.'</td>';
            echo '</tr>';
			
			echo '<tr>';
            echo	'<td>Secret no</td>';
            echo	'<td>'.$secretNo.
					'&nbsp;( 5 digit number for login )</td>';
            echo '</tr>';
      
            echo '</tbody>';
			
			?>
            
            </table>
        
        </div>
        
        <div id="wrapper">	
        
        <h1 class="schedule-heading">Have a look at some movies...</h1>
            
            
            <div class="movie">
            <img src="images/up-square.jpg"/>
            <p>UP<br/>
            <span>THE MOVIE</span></p>
           		 <div>
             <?php   
			 $query = mysqli_query($connection,'select * from screenings');
             while($row = mysqli_fetch_array($query)){
			 echo '<p><span>'. $row['day']. '</span></p><p>'.$row['time_m4'].'</p>';
             }
			 ?>
                    <br/><br/><p><a href="bookings.php#CH">BOOK</a><br/><br/><br/>
            	</div>
            </div>
            
            <div class="movie" >
            <img src="images/fault-square.jpg"/>
            <p>THE FAULT IN<br/>
            <span>OUR STARS</span></p>
            	<div>
             <?php 
			 $query = mysqli_query($connection,'select * from screenings');
			 while($row = mysqli_fetch_array($query)){
			 echo '<p><span>'. $row['day']. '</span></p><p>'.$row['time_m1'].'</p>';
             }
			?>
                    <br/><br/><p><a href="bookings.php#RC">BOOK</a><br/><br/><br/>
            	</div>
            </div>           
       
            
            <div class="movie">
            <img src="images/madmax-square.jpg"/>
            <p>MAD MAX<br/>
            <span>FURY ROAD<span></p>
            	<div>
             <?php    
			 $query = mysqli_query($connection,'select * from screenings');
             while($row = mysqli_fetch_array($query)){
			 echo '<p><span>'. $row['day']. '</span></p><p>'.$row['time_m3'].'</p>';
             }
			?>
                <br/><br/><p><a href="bookings.php#AC">BOOK</a><br/><br/><br/>
            	</div>
            </div>       
            
            
            <div class="movie">
            <img src="images/pk-square.jpg"/>
            <p>PK<br/>
            <span>2015</span></p>
            	<div>
             <?php  
			 $query = mysqli_query($connection,'select * from screenings'); 
             while($row = mysqli_fetch_array($query)){
			 echo '<p><span>'. $row['day']. '</span></p><p>'.$row['time_m2'].'</p>';
             }
			 ?>
                    <br/><br/><p><a href="bookings.php#AF">BOOK</a><br/><br/><br/>
            	</div>
            </div> 
            
            
        </div><!-- wrapper ends -->
            
        </div><!-- container ends -->
    </main>
    
<?php include("includes/footer.php"); ?>