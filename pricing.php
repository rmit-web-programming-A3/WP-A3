<?php 
		session_start();	// start session
		$pageTitle = "Pricing & Schedule | SILVERADO";	//page title
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
        
        <div id="pricing">        
        <h1 class="schedule-heading">Movie Pricing</h1>
        
        <table>
        	<thead>
            <tr>
            	<th>Seat Type</th>
            	<th>Mon-Tue</th>
           		<th>Wed-Fri<br><span>(1pm only)</span></th>
            	<th>Wed-Fri<br><span>(except 1pm)</span></th>
            	<th>Sat-Sun</th>
            </tr>
            </thead>
            
            <tbody>
            <tr>
            	<td>Standard-Full</td>
            	<td>$12</td>
            	<td>$12</td>
            	<td>$18</td>
            	<td>$18</td>
            </tr>
            
            <tr>
            	<td>Standard-Conc.</td>
            	<td>$10</td>
            	<td>$10</td>
            	<td>$15</td>
            	<td>$15</td>
            </tr>
            
            <tr>
            	<td>Standard-Child</td>
            	<td>$8</td>
            	<td>$8</td>
            	<td>$12</td>
            	<td>$12</td>
            </tr>
            
            <tr>
            	<td>FirstClass-Adult</td>
            	<td>$25</td>
            	<td>$25</td>
            	<td>$30</td>
            	<td>$30</td>
            </tr>
        
            <tr>
            	<td>FirstClass-Child</td>
            	<td>$20</td>
            	<td>$20</td>
            	<td>$25</td>
            	<td>$25</td>
            </tr>
        
            <tr>
            	<td>Beanbag*</td>
            	<td>$20</td>
            	<td>$20</td>
            	<td>$30</td>
            	<td>$30</td>
            </tr>
            </tbody>
            
           
        </table>
        
        <p>*<br>Beanbag price allows up to 2 adults OR 1 adult + 1 child Or up to 3 children. One price fits all!</p>
        
        </div>
        
        <div id="wrapper">	
        
        <h1 class="schedule-heading">Movie Schedule</h1>
            
            <div class="movie">
            <img src="images/up-square.jpg"/>
            <p>UP<br/>
            <span>THE MOVIE</span></p>
           		 <div>
                	<p><span>MONDAY </span></p><p>1pm</p>
                	<p><span>TUESDAY </span></p><p>1pm</p>
                	<p><span>WEDNESDAY </span></p><p>6pm</p>
                    <p><span>THRUSDAY </span></p><p>6pm</p>
                	<p><span>FRIDAY </span></p><p>6pm</p>
                	<p><span>SATURDAY </span></p><p>12pm</p>
                	<p><span>SUNDAY </span></p><p>12pm</p><br/><br>
                    <p><a href="bookings.php#CH">BOOK</a><br/><br/><br/>
            	</div>
            </div>
            
            <div class="movie" >
            <img src="images/fault-square.jpg"/>
            <p>THE FAULT IN<br/>
            <span>OUR STARS</span></p>
            	<div>
                   	<p><span>MONDAY </span></p><p>9pm</p>
                	<p><span>TUESDAY </span></p><p>9pm</p>
                	<p><span>WEDNESDAY </span></p><p>1pm</p>
                    <p><span>THRUSDAY </span></p><p>1pm</p>
                	<p><span>FRIDAY </span></p><p>1pm</p>
                	<p><span>SATURDAY </span></p><p>6pm</p>
                	<p><span>SUNDAY </span></p><p>6pm</p><br/><br>
                    <p><a href="bookings.php#RC">BOOK</a><br/><br/><br/>
            	</div>
            </div>           
       
            
            <div class="movie">
            <img src="images/madmax-square.jpg"/>
            <p>MAD MAX<br/>
            <span>FURY ROAD<span></p>
            	<div>
                	<p><span>WEDNESDAY </span></p><p>9pm</p>
                    <p><span>THRUSDAY </span></p><p>9pm</p>
                	<p><span>FRIDAY </span></p><p>9pm</p>
                	<p><span>SATURDAY </span></p><p>9pm</p>
                	<p><span>SUNDAY </span></p><p>9pm</p><br/><br>
                    <p><a href="bookings.php#AC">BOOK</a><br/><br/><br/>
            	</div>
            </div>       
            
            
            <div class="movie">
            <img src="images/pk-square.jpg"/>
            <p>PK<br/>
            <span>2015</span></p>
            	<div>
               		<p><span>MONDAY </span></p><p>6pm</p>
                	<p><span>TUESDAY </span></p><p>6pm</p>
                	<p><span>SATURDAY </span></p><p>3pm</p>
                	<p><span>SUNDAY </span></p><p>3pm</p><br/><br>
                    <p><a href="bookings.php#AF">BOOK</a><br/><br/><br/>
            	</div>
            </div> 
            
            
        </div><!-- wrapper ends -->
            
        </div><!-- container ends -->
    </main>
    
<?php include("includes/footer.php"); ?>