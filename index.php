<!DOCTYPE html>
<html>
<head>
	<title>Car for Hire</title>

	<style type="text/css">
		
.llm{
		text-align: center;
        background-color: lightgreen;
        color: white;
	}
.p1{
	font-size: 40px;
}
.p4{
        font-size: 26px;
}
.lln{
	    text-align: center;
	    background-color: #DAF7A6;
	    color: black;
}	
.p2{
	font-size: 40px;
}
.p5{
        font-size: 26px;
}
.button{
	color: green;
	padding: 20px;
	text-align: center;
	display: inline-block;
	font-size: 20px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 70px;
}

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 3s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 3s;
}

@keyframes fade {
  from {opacity: 0.1} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

	</style>


</head>
<body>

    <?php
        require_once 'header.php';
    ?>
<br>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/image.jpg" style="width:100%">
  <div class="text">Yeh pata nhi kya hai</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/city.jpg" style="width:100%">
  <div class="text">Jaipur City</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/car3.jpg" style="width:100%">
  <div class="text">Our Cars</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<h6><br>
    <?php
        require_once 'form.php';
    ?>
 	
</h6>
<br>
<div class="llm">
	<p class="p1">Reserve a car Today!</p>
	<p class="p4">If you are looking to reserve a vehicle,we would love to here from you!</p>
	<br><a href="book.php"><button class="button" style="background-color: white;">Book Now</button></a>
</div>
<br>
<div class="lln">
	<p class="p2">Great Service and Great Vehicles</p>
	<p class="p5">After a long flight, nobody wants to have to deal with rude staff and unkempt vehicles. When you choose the services of Wheels-UP you can expect to deal with a great staff of friendly people who are eager to serve you.<br><br>
		We will rent to anyone 21 years older. We also welcome customers who who look to pay with cash, no credit cheak required! International drivers licenses accepted!</p>
   <br><a href="explore.php"><button class="button" style="background-color: white;">Explore Now</button></a>
	
</div>

<h6>
    <?php
        require_once 'footer.php';
    ?>
</h6>
</body>
</html>