<!DOCTYPE html>
<!DOCTYPE html>
<html>
 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 	  <link rel="stylesheet" href="web.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <title>Urban Charms | Contact</title>
 </head>
 <body class="animated fadeIn"  style="animation-delay:1.0s;">
    <div id="middle">
    <h1> Urban Charms
    <hr id="solid">
 </h1>
  <div class="nav"><a target="_blank" href="index.php">Home</a> <a target="_blank" href="product.php">Products</a>
<a target="_blank" href="contact.php">Contact</a>
</div>
<div id = "menu"><span class="hyperlinks"><a target="_blank" href="index.php">Home</a> <a target="_blank" href="product.php">Products</a>
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
</div>
<div id="body">
<div class="contact">
    <div><form> 
        <label for="name"><b>Name</b></label>
    <input type="name" name="name" class= "text" placeholder="Due to technical issues, please email us at our email, theurbancharms@gmail.com or contact us through Etsy at https://www.etsy.com/shop/TheUrbanCharms" required>

    <label for="email" ><b>Email</b></label>
    <input type="text" class="text" name="email" require placeholder="Due to technical issues, please email us at our email, theurbancharms@gmail.com or contact us through Etsy at https://www.etsy.com/shop/TheUrbanCharms">

    <label for="name">Message</label>  
    <textarea type = "text" class="text" name=Message required rows="4" cols="50" placeholder="Due to technical issues, please email us at our email, theurbancharms@gmail.com or contact us through Etsy at https://www.etsy.com/shop/TheUrbanCharms"></textarea>
    <button type="button" class="btn">Submit</button>
</form>
</div>
</div>
</div>
<div id="body1">
<div class="contact">
    <div><form>
<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Name" name="name" class="text" required>

    <label for="email" ><b>Email</b></label>
    <input type="text" class="text" placeholder="example@gmail.com" name="email" required>

    <label for="text">Message</label>  
    <textarea type = "text" class="text" placeholder="Message" name= Message required rows="4" cols="50"></textarea>
    <div><button type=”submit” class="btn">Submit<button></div>
     <?php
if($_POST["Message"]) {
mail("anshptl21@gmail.com", "Contact form",
$_POST["Insert Your Message"]. "From: anshptl21@gmail.com");
}
?>
</form>
</div>
</div>
</div>
<hr id="solid">
<footer id="footer">
<div id="subscribe">Sign up for our newsletter!
    <div><form action = "mailto:minute.bracelets@gmail.com"> <label for="name"><b></b></label>
    <input type="text" placeholder="Name" name="name"class="subscribe textarea" required>

    <label for="email" ><b></b></label>
    <input type="text" class="subscribe textarea" placeholder="example@gmail.com" name="email" required>
       <div> <button type="button" class="subscribe button">Submit</button></div
>
      <?php
if($_POST["Message"]) {
mail("anshptl21@gmail.com", "Contact form",
$_POST["Insert Your Message"]. "From: anshptl21@gmail.com");
}
?></form>
</div>
</div>
</footer>

</body>
<html>
