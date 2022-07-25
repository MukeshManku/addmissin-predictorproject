<html>
<head>
<title> College Admission</title>
<link rel="stylesheet" href="style.css" type="text/css">


</head>
<body>
<div id="nav">
        <ul>
         
              <li><a href="index.php">HOME</a></li>
              <li><a href="about.php">ABOUT</a></li>
              <li><a href="std_login.php">STUDENT</a></li>
			  <li><a href="admin_login.php">ADMIN</a></li>
        </ul>
    </div>
<marquee><font color="blue"><h1>College Admission predictor</h1></font></marquee>



<div class="slideshow-container">
<div class="mySlides fade">
  <img src="img/rcr.jpg" width="1000" height="435">
</div>
<div class="mySlides fade">
  <img src="img/x.jpg" width="1000" height="435">
</div>
<div class="mySlides fade">
  <img src="img/m.jpg" width="1000" height="435">
</div>
<div class="mySlides fade">
  <img src="img/n.jpg" width="1000" height="435">
</div>
<div class="mySlides fade">
  	<img src="img/d.jpg" width="1000" height="435">
</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
</div>
 </div>
 <div id="footer_devloper">
      <p>Designed & Maintained by: <i>Mukesh Kumar Manku.</i></p>
      </div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1000); // Change image every 1 seconds
}
</script>
   
</body>
</html>
