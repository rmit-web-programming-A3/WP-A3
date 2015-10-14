<?php 
		session_start();	// start session
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
        
        
        <div id="coupon">        
        <h1 class="schedule-heading">Enter a valid coupon code |</h1>
        
        <form action="" method="post">
     	<input type="text" name="coupon" value="" 
        pattern="^([0-9]{5}[-]){2}?[A-Z]{2}$" 
        title="Our coupons looks like 12345-56789-AB" 
        placeholder="Enter your coupon here" required>
        <input type="submit" type="submit" class="button">
        </form>
        </div>
        
        
            
        </div><!-- container ends -->
    </main>
    
<?php include("includes/footer.php"); ?>