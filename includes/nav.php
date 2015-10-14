<<<<<<< HEAD
<header>

		<div class="container">
        	
            <div class="logoHeader"></div><!-- responsive logo -->
            
            			
			<!-- navigation links -->
			<nav>
            <span class="nav-btn"></span>
            
        	<ul class="nav">
				<li><a href="index.php" class="home">home</a></li>
				<li><a href="movies.php" class="movies">movies</a></li>
				<li><a href="pricing.php" class="pricing">pricing</a></li>
 				<li><a href="contact.php" class="contact">contact</a></li>
 				<li><a href="profile.php" class="profile">profile</a></li>
 				<li><a href="cart.php" class="cart">cart</a></li>
            </ul>
        </nav>
            
        </div>

</header>

        <script>
       
            $('span.nav-btn').click(function ()  {
         
                $('ul.nav').slideToggle();
            })
        
        $(window).resize(function () {
            
            if( $(window).width() > 600) {
                
                $('ul.nav').removeAttr('style');
            }
            
        })
        
        </script>
=======


<header>

		<div class="container">
        	
            <div class="logoHeader"></div><!-- responsive logo -->
            
            			
			<!-- navigation links -->
			<nav>
               	<ul>
				<li><a href="contact.php" class="contact">contact</a></li>
				<li><a href="pricing.php" class="pricing">pricing</a></li>
				<li><a href="movies.php" class="movies">movies</a></li>
				<li><a href="index.php" class="home">home</a></li>
				</ul>
            </nav>
            
        </div>

</header>
>>>>>>> origin/master
