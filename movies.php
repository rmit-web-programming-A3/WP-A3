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
        	$(this).find('div').slideToggle();
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
            
            <div class="movie" >
            <img src="images/the-fault-poster.jpg" width="100%"/>
            <p>THE FAULT IN<br/>
            <span>OUR STARS</span></p>
            	<div>
                <br/><br/>
                	<p><span>Plot: </span> Two teenage cancer patients begin a life-affirming journey to visit a reclusive author in Amsterdam.</p><br/>
                	<p><span>Director: </span> Josh Boone</p><br/>
                	<p><span>Language: </span>English</p><br/>
                	<p><span>Ratings: </span>PG</p><br/><br/>
                    <iframe src="https://www.youtube.com/embed/9ItBvH5J6ss" frameborder="0" 
                    allowfullscreen>
                    </iframe>
                    
                    <p class="book"><a href="bookings.php#RC">BOOK</a><br/><br/>
            	</div>
            </div>           
       
            
            <div class="movie">
            <img src="images/max-poster.jpg" width="100%"/>
            <p>MAD MAX<br/>
            <span>FURY ROAD<span></p>
            <div>
                <br/><br/>
                	<p><span>Plot: </span> A woman rebels against a tyrannical ruler in post apocalyptic Australia in search for her homeland with the help of a group of female prisoners, a psychotic worshiper, and a drifter named Max.</p><br/>
                	<p><span>Director: </span> George Miller</p><br/>
                	<p><span>Language: </span>English</p><br/>
                	<p><span>Ratings: </span>PG</p><br/><br/>
                    <iframe src="https://www.youtube.com/embed/hEJnMQG9ev8" frameborder="0" 
                    allowfullscreen>
                    </iframe>
                    
                    <p class="book"><a href="bookings.php#RC">BOOK</a><br/><br/>
            	</div>
            </div>         
            
            
            <div class="movie">
            <img src="images/pk-movie-poster.jpg" width="100%"/>
            <p>PK<br/>
            <span>2015</span></p>
            <div>
                <br/><br/>
                	<p><span>Plot: </span> A stranger in the city asks questions no one has asked before. Known only by his initials, P.K.'s innocent questions and childlike curiosity will take him on a journey of love, laughter and letting-go.</p><br/>
                	<p><span>Director: </span>Rajkumar Hirani</p><br/>
                	<p><span>Language: </span>Hinglish</p><br/>
                	<p><span>Ratings: </span>PG</p><br/><br/>
                    <iframe src="https://www.youtube.com/embed/82ZEDGPCkT8" frameborder="0" 
                    allowfullscreen>
                    </iframe>
                    
                    <p class="book"><a href="bookings.php#RC">BOOK</a><br/><br/>
            	</div>
            </div>       
            
            
            <div class="movie">
            <img src="images/up-poster.jpg" width="100%"/>
            <p>UP<br/>
            <span>THE MOVIE</span></p>
            <div>
                <br/><br/>
                	<p><span>Plot: </span> Seventy-eight year old Carl Fredricksen travels to Paradise Falls in his home equipped with balloons, inadvertently taking a young stowaway.</p><br/>
                	<p><span>Director: </span>Pete Docter</p><br/>
                	<p><span>Language: </span>English</p><br/>
                	<p><span>Ratings: </span>PG</p><br/><br/>
                    <iframe src="https://www.youtube.com/embed/ORFWdXl_zJ4" frameborder="0" 
                    allowfullscreen>
                    </iframe>
                    
                    <p class="book"><a href="bookings.php#RC">BOOK</a><br/><br/>
            	</div>
            </div>       
            
        </div><!-- wrapper ends -->
            
        </div><!-- container ends -->
    </main>
    
<?php include("includes/footer.php"); ?>
