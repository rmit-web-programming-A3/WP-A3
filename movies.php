<?php 
		include("includes/session.php");
		$pageTitle = "MOVIES | SILVERADO";
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
            <img src="images/the-fault.jpg"/>
            <p>THE FAULT IN<br/>
            <span>OUR STARS</span></p>
            	<div>
                <br/><br/>
                	<p><span>Plot: </span> Two teenage cancer patients begin a life-affirming journey to visit a reclusive author in Amsterdam.</p><br/>
                	<p><span>Director: </span> Josh Boone</p><br/>
                	<p><span>Language: </span>English</p><br/>
                	<p><span>Ratings: </span>PG</p><br/><br/>
                    <p><a href="bookings.php#RC">BOOK</a><br/><br/><br/>
            	</div>
            </div>           
       
            
            <div class="movie">
            <img src="images/mad-max-poster.jpg"/>
            <p>MAD MAX<br/>
            <span>FURY ROAD<span></p>
            <div>
                <br/><br/>
                	<p><span>Plot: </span> A woman rebels against a tyrannical ruler in post apocalyptic Australia in search for her homeland with the help of a group of female prisoners, a psychotic worshiper, and a drifter named Max.</p><br/>
                	<p><span>Director: </span> George Miller</p><br/>
                	<p><span>Language: </span>English</p><br/>
                	<p><span>Ratings: </span>PG</p><br/><br/>
                    <p><a href="bookings.php#AC">BOOK</a><br/><br/><br/>
            	</div>
            </div>       
            
            
            <div class="movie">
            <img src="images/pk-poster.jpg"/>
            <p>PK<br/>
            <span>2015</span></p>
            <div>
                <br/><br/>
                	<p><span>Plot: </span> A stranger in the city asks questions no one has asked before. Known only by his initials, P.K.'s innocent questions and childlike curiosity will take him on a journey of love, laughter and letting-go.</p><br/>
                	<p><span>Director: </span>Rajkumar Hirani</p><br/>
                	<p><span>Language: </span>Hinglish</p><br/>
                	<p><span>Ratings: </span>PG</p><br/><br/>
                    <p><a href="bookings.php#AF">BOOK</a><br/><br/><br/>
            	</div>
            </div> 
            
            
            <div class="movie">
            <img src="images/UP.jpg"/>
            <p>UP<br/>
            <span>THE MOVIE</span></p>
            <div>
                <br/><br/>
                	<p><span>Plot: </span> Seventy-eight year old Carl Fredricksen travels to Paradise Falls in his home equipped with balloons, inadvertently taking a young stowaway.</p><br/>
                	<p><span>Director: </span>Pete Docter</p><br/>
                	<p><span>Language: </span>English</p><br/>
                	<p><span>Ratings: </span>PG</p><br/><br/>
                    <p><a href="bookings.php#CH">BOOK</a><br/><br/><br/>
            	</div>
            </div>
            
        </div><!-- wrapper ends -->
            
        </div><!-- container ends -->
    </main>
    
<?php include("includes/footer.php"); ?>
