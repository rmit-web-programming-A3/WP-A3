<?php 				
		session_start();	// start session
		$pageTitle = "Home | SILVERADO"; // page title
		include("includes/head.php");		
?>

<link href="css/slider.css" rel="stylesheet" type="text/css">
<script src="js/ResponsiveSlides.js-master/jquery.min.js"></script>
<script src="js/ResponsiveSlides.js-master/responsiveslides.min.js"></script>
 <script src="js/jquery.chained.min.js"></script>
        
        
<script>
    	
    $(function () {

      // Slideshow 1
      $("#mainSlider").responsiveSlides({
        maxwidth: 800,
        speed: 800
      });

    });
	
	
    $(function () {

      // Slideshow 2
      $("#box1").responsiveSlides({
        maxwidth: 800,
        speed: 2000
      });

    });
	
    $(function () {

      // Slideshow 3
      $("#box2").responsiveSlides({
        maxwidth: 800,
        speed: 300
      });

    });
	
    $(function () {

      // Slideshow 4
      $("#box3").responsiveSlides({
        maxwidth: 800,
        speed: 800
      });

    });
  </script>

</head>

<body>
<?php include("includes/nav.php"); ?>



		<ul class="rslides" id="mainSlider">
  			<li><img src="images/slide1.jpg" alt=""></li>
  			<li><img src="images/slide2.jpg" alt=""></li>
  			<li><img src="images/slide3.jpg" alt=""></li>
  			<li><img src="images/slide4.jpg" alt=""></li>
		</ul>
        
<main>
		<div class="box">
        <ul class="box1" id="box1">
  			<li><img src="images/box12.jpg" alt=""></li>
  			<li><img src="images/box11.jpg" alt=""></li>
  			<li><img src="images/box13.jpg" alt=""></li>
		</ul>
       
        </div>
        
        <div class="box">
        <ul class="box2" id="box2">
  			<li><img src="images/box21.jpg" alt=""></li>
  			<li><img src="images/box22.jpg" alt=""></li>
  			<li><img src="images/box23.jpg" alt=""></li>
		</ul>
        </div>
        
        <div class="box">
        <ul class="box3" id="box3">
  			<li><img src="images/box31.jpg" alt=""></li>
  			<li><img src="images/box32.jpg" alt=""></li>
  			<li><img src="images/box33.jpg" alt=""></li>
		</ul>
        </div>
        
        
</main>

		<article>
<p>The new cinema has all new seating options available, from high-end First Class seats to comfortable Standard Seats, and more affordable Bean Bags.<br/>
We have increased the normal seatings to 40 which have three price options namely Full, Concession and Child pricing.<br/>
The luxurious, beautifully crafted 12 first class seats gives you the ultimated viewing experience, it also has a discounted child pricing.<br/>
13 bean bags can accomodate 2 adults, or an adult and a child or even 3 childrens.
So there is something for everyone, come have a wonderful cinematic experience.
</p>
        </article>

<?php include("includes/footer.php"); ?>
