<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title> Urban Charms | Home </title>
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
<strong><div class = "body home" > <div class = "header">The Urban Charms</div>is a new jewelry shop that creates handmade beaded braclets and earing for both men and women. Our bracelets include a variety of colors and themes that make our brand so unique. Our bracelet designs are minimalistic, so that they are not too overpowering, yet elegant, so they are a great fit for anyone. See some of our bracelets on our prodoucts page 
<hr class="hr1">
<button class="mybutton"><a href="product.html" target="_blank">Our Products</a></button></div>
	<strong><div class = "home"><div class = "header">We Sell</div> with certain principles in mind: fast, free shipping, safe shopping and low prices. On all of our products we always have free 3-5 business day shipping rates, and we always offer gift wrapping. We also always have low prices so you can enjoy quaility jewlery at a low price. To learn more, visit our FAQS. <hr class="hr1"> 
<button class="mybutton"><a href="https://www.etsy.com/shop/TheUrbanCharms" target="_blank">FAQS and Product Reviews</a></button>
</div>
	<div class="body home"><div class ="header">Where Do We</div>sell? We sell on Etsy, and soon will be selling on eBay and other platforms. We like to diversify how we sell not only to spread our products, but to make it easier for our customers to find us and buy from us. Check out our shop! <hr class="hr1"> <button class="mybutton"><a href="https://www.etsy.com/shop/TheUrbanCharms" target="_blank">The Urban Charms</a></button></div>
</div>
<div id = "body1">
	<div class = "body1 home" >hello</div>
	<div class="body1 home">hello</div>
	<div class="body1 home">hello</div>
</div>
<hr id ="solid">
<footer id="footer">
	<div id="subscribe">Sign up for our newsletter!
	<div><form> <label for="name"><b></b></label>
    <input type="text" placeholder="Name" name="name"class="subscribe textarea" required>

    <label for="email" ><b></b></label>
    <input type="text" class="subscribe textarea" placeholder="example@gmail.com" name="email" required>
       <div> <button type="button" class="subscribe button">Submit</button></div> <?php
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
