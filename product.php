    <!DOCTYPE html>
    <html>
    <head>    
    <meta charset="utf-8">
    <title>Urban Charms | Products</title>
    <link rel="stylesheet" href="web.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
 </head>
 <body class="animated fadeIn"  style="animation-delay:1.0s;">
    <div id="middle">
    <h1> Urban Charms
    <hr id="solid">
 </h1>
  <div class="nav"><a target="_blank" href="index.php">Home</a> <a target="_blank" href="product.php">Products</a>
<a target="_blank" href="contact.php">Contact</a>
</div>
<div id = "menu"><span class="hyperlinks"><a target="_blank" href="home.php">Home</a> <a target="_blank" href="product.php">Products</a>
<a target="_blank" href="contact.php">Contact</a></span></div>
    <table >
        <tbody>
            <tr>
                <span id="social2">
                <a class="social1" target="_blank" href="https://twitter.com">
                    <i class="fa fa-twitter fa-lg"></i></a>
                <a class="social2" target="_blank" href="https://facebook.com">
                    <i class="fa fa-facebook fa-lg"></i></a>
                <a class="social3" target="_blank" href="https://instragram.com">
                    <i class="fa fa-instagram fa-lg"></i></a>
                        </span>
                    <span id="social"><a class="social social4" target="_blank" href="https://twitter.com">
                    <i class="fa fa-twitter fa-lg"></i></a>
                <a class="social social4" target="_blank" href="https://facebook.com">
                    <i class="fa fa-facebook fa-lg"></i></a>
                <a class="social social4" target="_blank" href="https://instragram.com">
                    <i class="fa fa-instagram fa-lg"></i></a></span>
            </tr>
        </tbody>
    </table>
</div>
<div id="body">

   <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
   <a href = "https://www.etsy.com/shop/TheUrbanCharms"><div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
   <img  class = "bracelet" src="https://lh3.googleusercontent.com/QVlIHuuWZ52gVfEot_55UEvWRgykPX4jeDH_KgM-yn4SJIrqCJySIvPUaEbvPXYOKDt356m5_u4vA9tNtld24jzcur8sfwZdwn-YOuGoA_soEuwGbHhaqNVI-YrXo7wv71aaMVIlzQ=w2400" style="width:100%">
    <div class = "text1">Autumn Themed Beaded Bracelet</div> 
  </div></a>

   <a href = "https://www.etsy.com/shop/TheUrbanCharms"><div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img class = "bracelet" src="https://lh3.googleusercontent.com/aC2mNMSZ7pV-aeF_fjEM_DzkPfzphR9W2Wc6YYsVukyTUid1swg9OBakzDrqC9VIpktEWaN-zScOV_m6mKx99mb3S-3L_DDcdcZ-cBLEf-ImHoS7oz8UZ5FLRQQhrbSOM2t8hAS3KA=w2400" style="width:100%">
    <div class = "text1">Multi Color Bracelet With Yin Yang Charm</div>

  </div></a>

  <a href = "https://www.etsy.com/shop/TheUrbanCharms"><div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img class = "bracelet" src="https://lh3.googleusercontent.com/IBSVjgCKd4SOM1wP_cigc1SRbP3gUYPgIh95CiciZ41okoGN6cPBCi8honsZjdj4C3pf8dHAYcU0XXksHiz5-4Gj3MAxiRq1WYZieMblYyZCcYcEJOjKZSV-OKFiq2pFhizhZZ9pqg=w2400?source=screenshot.guru" style="width:100%">
    <div class = "text1">Beaded Bracelet with Baby Blue Beads</div>
  </div></a>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
</div>
<div id="body1">
  <div class = "slideshow-container">

 <a href = "https://www.etsy.com/shop/TheUrbanCharms"><div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img class = "bracelet" src="https://lh3.googleusercontent.com/QVlIHuuWZ52gVfEot_55UEvWRgykPX4jeDH_KgM-yn4SJIrqCJySIvPUaEbvPXYOKDt356m5_u4vA9tNtld24jzcur8sfwZdwn-YOuGoA_soEuwGbHhaqNVI-YrXo7wv71aaMVIlzQ=w2400" style="width:100%">
     <div class = "ttext1">Autumn Themed Beaded Bracelet</div> 
</div></a>

 <a href = "https://www.etsy.com/shop/TheUrbanCharms"><div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img class = "bracelet" src= "https://lh3.googleusercontent.com/aC2mNMSZ7pV-aeF_fjEM_DzkPfzphR9W2Wc6YYsVukyTUid1swg9OBakzDrqC9VIpktEWaN-zScOV_m6mKx99mb3S-3L_DDcdcZ-cBLEf-ImHoS7oz8UZ5FLRQQhrbSOM2t8hAS3KA=w2400" style="width:100%"><div class = "ttext1">Multi Color Bracelet With Yin Yang Charm</div>

</div></a>

 <a href = "https://www.etsy.com/shop/TheUrbanCharms"><div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img class = "bracelet" src="https://lh3.googleusercontent.com/IBSVjgCKd4SOM1wP_cigc1SRbP3gUYPgIh95CiciZ41okoGN6cPBCi8honsZjdj4C3pf8dHAYcU0XXksHiz5-4Gj3MAxiRq1WYZieMblYyZCcYcEJOjKZSV-OKFiq2pFhizhZZ9pqg=w2400?source=screenshot.guru" style="width:100%"> <div class = "ttext1">Beaded Bracelet with Baby Blue Beads</div>
 
</div></a>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>


<br>

</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
</div>
    <hr id="solid">
<footer id="footer">
    <div id="subscribe">Sign up for our newsletter!
    <div><form> <label for="name"><b></b></label>
    <input type="text" placeholder="Name" name="name"class="subscribe textarea" required>

    <label for="email" ><b></b></label>
    <input type="text" class="subscribe textarea" placeholder="example@gmail.com" name="email" required>
        <div><button type="button" class="subscribe button">Submit</button></div> <?php
if($_POST["Message"]) {
mail("anshptl21@gmail.com", "Contact form",
$_POST["Insert Your Message"]. "From: anshptl21@gmail.com");
}
?>
</form>
</div>
</div>
</footer>
</body>
</html>
