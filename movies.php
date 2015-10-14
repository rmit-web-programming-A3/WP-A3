<?php 
		session_start();	// start session
		require("includes/db_connection.php");
		$pageTitle = "SHOWCASE | SILVERADO";	//page title
		include("includes/head.php");		
?>

		<script src="js/ResponsiveSlides.js-master/jquery.min.js"></script>
        
		<script>
			$(function() {
    		$('.movie').click(function() {
        	$(this).find('.stuff').slideDown();
    		});
			});
			
			$(function() {
    		$('.showmore').click(function() {
        	$(this).find('.trailer').slideToggle();
    		});
			});
		</script>

</head>

<body>
<?php include("includes/nav.php"); ?>

<main>
    	
        <div id="container">
        
        <h1 class="heading"></h1>
        
        <div id="wrapper">	
            
        <?php
	
		$query = mysqli_query($connection,"select * from movies");
	 
		$no = 1;
		while($row = mysqli_fetch_array($query))
		{
		echo '<div class="movie">';
		echo '<img src="' . $row['mPoster'] . '" width="100%" class="aaa"/>';
		echo '<p>' . $row['mTitle'] . '</p>';
		
		echo '<div class="stuff">
             <br/><br/>';
		echo '<p><span>Plot: </span>' . $row['mDescription'].'</p><br/>';
		echo '<p><span>Director: </span>'. $row['mDirector'].'</p><br/>';
		echo '<p><span>Language: </span>'. $row['mLang'].'</p><br/>';
		echo '<p><span>Ratings: </span>'. $row['mRating'].'</p><br/>';
		
		echo '<div class="showmore">';
		echo '<p class="readmore">Watch trailer and screening</p>';
		echo '<div class="trailer">';
		echo '<iframe src="'. $row['mTrailer'] .'" 
			  frameborder="0" allowfullscreen>
              </iframe>';  
			
			
 			$string = 'time_m';
			$time = $string.$no;
			$no++;
			
			
			 $query2 = mysqli_query($connection,'select * from screenings');
             while($row2 = mysqli_fetch_array($query2))
			 {
			 echo '<p><span>'. $row2['day']. '</span></p><p>'.$row2[$time].'</p>';
             }//second while loop ends
			 $movietype = $row['mTitle'];
			 echo '</div></div>';
			 echo '<br><br>';			
			 echo '<p class="book"><a href="bookings.php#'.$row['mType'].'">BOOK</a></p><br><br>';
			 echo '</div></div>';
			 } //first while loop ends
	
		?>      
            
        </div><!-- wrapper ends -->
            
        </div><!-- container ends -->
    </main>
    
<?php include("includes/footer.php"); ?>
