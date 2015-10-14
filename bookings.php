<<<<<<< HEAD
<?php 
		session_start();	// start session
		$pageTitle = "BOOK YOUR MOVIE | SILVERADO";		//page title
		include("includes/head.php");		
?>

<script src="js/ResponsiveSlides.js-master/jquery.min.js"></script>
<script src="js/jquery.chained.min.js"></script>
<script src="js/tickets.js"></script>
</head>

<body>
<?php include("includes/nav.php"); ?>

<main>
    	
        <div id="container">
        
        <h1 class="heading"></h1>
        
        <div id="wrapper">	
            
            <div class="cover">
            
            </div>
            
            <div class="form">
            <h1>SILVERADO <span>| BOOKINGS</span></h1>
            <h2>make selections</h2>
            
            <form action="http://titan.csit.rmit.edu.au/~e54061/wp/testbooking.php" method="post" id="comments">
               
                          
             <select id="movie" name = "movie" style="visibility:hidden">
                   <option value ="CH">CH</option>
                   <option value ="AC">AC</option>
                   <option value ="AF">AF</option>
                   <option value ="RC">RC</option>
             </select>

                                         
              
              <table style="width:80%">
              <tr>
              <td> <select id="day" name ="day">
                    <option value="mon">Monday</option>
                    <option value="tue">Tuesday</option>
                    <option value="wed">Wednesday</option>
                    <option value="thu">Thursday</option>
                    <option value="fri">Friday</option>
                    <option value="sat">Saturday</option>
                    <option value="sun">Sunday</option>
             </select>
             </td>
                                                
                                                
             <td>
             <select id = "time" name = "time" required="required">
                     <option value="none" class="mon tue wed thu fri sat sun CH AF RC AC">--</option>
                     <option value="12pm" class="CH\sat CH\sun">12pm</option>
                     <option value="1pm" class="CH\mon CH\tue RC\wed RC\thu RC\fri">1pm</option>
                     <option value="3pm" class="AF\sat AF\sun">3pm</option>
                     <option value="6pm" class="AF\mon AF\tue CH\wed CH\thu CH\fri RC\sat RC\sun">6pm</option>
                     <option value="9pm" class="RC\mon RC\tue AC\wed AC\thu AC\fri AC\sat AC\sun">9pm</option>

              </select>
              </td>
              </tr>
              <tr>
              <th>Select Seats</th><th>Price (AUD)</th></tr>
              
              		<tr>
                        <td class="category">Standard Adult</td>
                        <td>
       <input type="number" min="0" step="1" value = 0 class="ticketNo" id="SA" name = "SA">
       <input type="text" value = 0 class="price" id="SAPrice"disabled>
                        </td>
                    </tr>
                                                
                    <tr>
                         <td class="category">Standard Concession</td>
                         <td><input type="number" min="0" value = 0 class="ticketNo" id="SP" name = "SP">
                         <input type="text" value = 0 class="price" id="SPPrice"disabled>
                         </td>
                    </tr>
                                                
                    <tr>
                         <td class="category">Standard Child</td>
                         <td><input type="number" min="0" value = 0 class="ticketNo" id="SC" name = "SC">
                         <input type="text" value = 0 class="price" id="SCPrice"disabled>
                         </td>
                    </tr>
                                                
                    <tr>
                         <td class="category">First Class Adult</td>
                         <td><input type="number" min="0" value = 0 class="ticketNo" id="FA" name = "FA">
                         <input type="text" value = 0 class="price" id="FAPrice"disabled>
                         </td>
                    </tr>
                                                
                    <tr>
                    	 <td class="category">First Class Child</td>
                         <td><input type="number" min="0" value = 0 class="ticketNo" id="FC" name = "FC">
                         <input type="text" value = 0 class="price" id="FCPrice"disabled>
                         </td>
                    </tr>
                                                
                    <tr>
                         <td class="category">Beanbag - 1 Person</td>
                         <td><input type="number" min="0" value = 0 class="ticketNo" id="B1" name = "B1">
                         <input type="text" value = 0 class="price" id="B1Price"disabled>
                         </td>
                    </tr>
                                                
                    <tr>
                         <td class="category">Beanbag - 2 People</td>
                         <td><input type="number" min="0" value = 0 class="ticketNo" id="B2" name = "B2">
                         <input type="text" value = 0 class="price" id="B2Price"disabled>
                         </td>
                    </tr>
                                                
                    <tr>
                         <td class="category">Beanbag - 3 Children</td>
                         <td><input type="number" min="0" value = 0 class="ticketNo" id="B3" name = "B3">
                         <input type="text" value = 0 class="price" id="B3Price"disabled>
                         </td>
                    </tr>
                                                
                    
                                                
                                                
                  </table>
                         
                  <div class="totalButton">
                  
                  <input id="submit" class="submit" type="submit" value="Submit"/>
                  
                               
                  <div class="total">
                  <p> Seats  : </p>
                  <input type="number" min="0" value = 0 class="ticketNo" id="to" disabled>
                  <p> $ </p>
                  <input type="text" value = 0 class="price" id="toPrice" name ="price" readonly>				
                  </div>
                     
          </div><!-- totalButton ends -->
                     </form>
                     
          
            
            </div>
            
        </div><!-- wrapper ends -->
            
        </div><!-- container ends -->
    </main>

=======
<?php 
		session_start();	// start session
		$pageTitle = "BOOK YOUR MOVIE | SILVERADO";		//page title
		include("includes/head.php");		
?>

<script src="js/ResponsiveSlides.js-master/jquery.min.js"></script>
<script src="js/jquery.chained.min.js"></script>
<script src="js/tickets.js"></script>
</head>

<body>
<?php include("includes/nav.php"); ?>

<main>
    	
        <div id="container">
        
        <h1 class="heading"></h1>
        
        <div id="wrapper">	
            
            <div class="cover">
            
            </div>
            
            <div class="form">
            <h1>SILVERADO <span>| BOOKINGS</span></h1>
            <h2>make selections</h2>
            
            <form action="http://titan.csit.rmit.edu.au/~e54061/wp/testbooking.php" method="post" id="comments">
               
                                        
             
            
              
              <select id="movie" name = "movie" style="visibility:hidden">
                   <option value ="CH">CH</option>
                   <option value ="AC">AC</option>
                   <option value ="AF">AF</option>
                   <option value ="RC">RC</option>
             </select>

                                         
              
              <table style="width:80%">
              <tr>
              <td> <select id="day" name ="day">
                    <option value="mon">Monday</option>
                    <option value="tue">Tuesday</option>
                    <option value="wed">Wednesday</option>
                    <option value="thu">Thursday</option>
                    <option value="fri">Friday</option>
                    <option value="sat">Saturday</option>
                    <option value="sun">Sunday</option>
             </select>
             </td>
                                                
                                                
             <td>
             <select id = "time" name = "time" required="required">
                     <option value="none" class="mon tue wed thu fri sat sun CH AF RC AC">--</option>
                     <option value="12pm" class="CH\sat CH\sun">12pm</option>
                     <option value="1pm" class="CH\mon CH\tue RC\wed RC\thu RC\fri">1pm</option>
                     <option value="3pm" class="AF\sat AF\sun">3pm</option>
                     <option value="6pm" class="AF\mon AF\tue CH\wed CH\thu CH\fri RC\sat RC\sun">6pm</option>
                     <option value="9pm" class="RC\mon RC\tue AC\wed AC\thu AC\fri AC\sat AC\sun">9pm</option>

              </select>
              </td>
              </tr>
              <tr>
              <th>Select Seats</th><th>Price (AUD)</th></tr>
              
              		<tr>
                        <td class="category">Standard Adult</td>
                        <td>
       <input type="number" min="0" step="1" value = 0 class="ticketNo" id="SA" name = "SA">
       <input type="text" value = 0 class="price" id="SAPrice"disabled>
                        </td>
                    </tr>
                                                
                    <tr>
                         <td class="category">Standard Concession</td>
                         <td><input type="number" min="0" value = 0 class="ticketNo" id="SP" name = "SP">
                         <input type="text" value = 0 class="price" id="SPPrice"disabled>
                         </td>
                    </tr>
                                                
                    <tr>
                         <td class="category">Standard Child</td>
                         <td><input type="number" min="0" value = 0 class="ticketNo" id="SC" name = "SC">
                         <input type="text" value = 0 class="price" id="SCPrice"disabled>
                         </td>
                    </tr>
                                                
                    <tr>
                         <td class="category">First Class Adult</td>
                         <td><input type="number" min="0" value = 0 class="ticketNo" id="FA" name = "FA">
                         <input type="text" value = 0 class="price" id="FAPrice"disabled>
                         </td>
                    </tr>
                                                
                    <tr>
                    	 <td class="category">First Class Child</td>
                         <td><input type="number" min="0" value = 0 class="ticketNo" id="FC" name = "FC">
                         <input type="text" value = 0 class="price" id="FCPrice"disabled>
                         </td>
                    </tr>
                                                
                    <tr>
                         <td class="category">Beanbag - 1 Person</td>
                         <td><input type="number" min="0" value = 0 class="ticketNo" id="B1" name = "B1">
                         <input type="text" value = 0 class="price" id="B1Price"disabled>
                         </td>
                    </tr>
                                                
                    <tr>
                         <td class="category">Beanbag - 2 People</td>
                         <td><input type="number" min="0" value = 0 class="ticketNo" id="B2" name = "B2">
                         <input type="text" value = 0 class="price" id="B2Price"disabled>
                         </td>
                    </tr>
                                                
                    <tr>
                         <td class="category">Beanbag - 3 Children</td>
                         <td><input type="number" min="0" value = 0 class="ticketNo" id="B3" name = "B3">
                         <input type="text" value = 0 class="price" id="B3Price"disabled>
                         </td>
                    </tr>
                                                
                    
                                                
                                                
                  </table>
                         
                  <div class="totalButton">
                  
                  <input id="submit" class="submit" type="submit" value="Submit"/>
                  
                               
                  <div class="total">
                  <p> Seats  : </p>
                  <input type="number" min="0" value = 0 class="ticketNo" id="to" disabled>
                  <p> $ </p>
                  <input type="text" value = 0 class="price" id="toPrice" name ="price" readonly>				
                  </div>
                     
          </div><!-- totalButton ends -->
                     </form>
                     
          
            
            </div>
            
        </div><!-- wrapper ends -->
            
        </div><!-- container ends -->
    </main>

>>>>>>> origin/master
<?php include("includes/footer.php"); ?>