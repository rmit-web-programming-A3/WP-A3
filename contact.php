<?php 

		include("includes/session.php");
		$pageTitle = "CONTACT US | SILVERADO";
		include("includes/head.php");		
?>

</head>

<body>
<?php include("includes/nav.php"); ?>

	<main>
    	
        <div id="container">
        
        <h1 class="heading"></h1>
        
        <div id="wrapper">	
            
            <div class="form">
            
            <form action="http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php" 
            method="post" id="comment">
            
            	<label>write to us</label><br/><br/><br/>
            	<select name="subject">
					<option value="enquiry">General Enquiry</option>
					<option value="group">Group and Corporate Bookings</option>
					<option value="complaints">Suggestions and Complaints</option>
				</select>
                <br/>
                <input type="email" placeholder="Enter Your Email ID" required name="email"/>
                <br/>
                <textarea id="messagebox" name="message" required></textarea>
                <br/>
                <input class="button" type="submit" value="Submit"/>
            
            </form><!-- from ends here -->
            
            </div><!-- form div ends -->
            
            <div class="nowplaying">
            
            </div>
            
            <div class="contact">
            	
                <h1 style="margin-top:80px;">ADDRESS</h1>
                <p>342 Silver Street, Nostalmia,
				Werribee, VIC 3030,
				Australia
                </p>
                
                <h1 style="margin-top:120px;">Phone</h1>
                <p style="margin-top:-5px;">0 455 555 554
                </p>
            </div>
            
        </div><!-- wrapper ends -->
            
        </div><!-- container ends -->
    </main>

<?php include("includes/footer.php"); ?>