<?php session_start();?>
<html>
<head>
<title>
Computer Garage
</title>
<link rel="stylesheet"href="css/bootstrap.css">
<meta name="viewport"content="width=device-width,initial-scale=1.0">


<!-- Styling Files -->
<?php 
require_once("extfiles.php");
?>



<script src="https://kit.fontawesome.com/a076d05399.js">
    </script>
</head>



<body>




<!-- navigation bar -->
<?php 
require_once("header.php");
?>



<div class="sectionimages">


<div class="partright"id="pr">
        <p class="lead "style="font-size:10vh;"><b>
    MacBook Air</b></p>
<p class="lead "style="font-size:6vh;">
Available Here
<br><br>
<a href=""style="font-size:4vh;"class="maclink">
Shop Now ></a>
</p>
    </div>



<div class="partleft">
<img src="assets/sc11.jpg"style="height:100vh;object-fit:cover;width:100%;"id="img1">
<img src="assets/sc9.jpg"style="height:100vh;object-fit:cover;width:100%;"id="img2">
<img src="assets/sc7.jpg"style="height:100vh;object-fit:cover;width:100%;"id="img3">
<img src="assets/sc7.jpg"style="height:100vh;object-fit:cover;width:100%;"id="img4">
<img src="assets/sc6.jpg"style="height:100vh;object-fit:cover;width:100%;"id="img5">
    </div>
    
</div>






<br><br><br><br>

<div class="section-1"style="background-color:white;position:relative;">

<div class="container"id="one"style="text-align:center;">
<br><br>
We sell Computers all around the World.
We have immense variety of Computers,Laptops,Keyboard,Speakers and so many other Products.
</div>


<div class="container" align="center"style="margin-top:50px;padding:10px;border-radius:10px;">
<div class="row">
    <div class="col-sm">
        <div class="lead text-center"><span class="underlined">Desktops<span></div><br>
       <img src="assets/pc.png"width="64%">
       <br><br>
       Whether you are a student or a professional, have a great experience with a super functional and sleek desktop. Enjoy the speed of advanced processors.
        The highly configured RAM lets you do all your work in an instant. Enjoy outstanding displays on the highly configured screens.<br><br><br><a href="showsubcat.php?catid=18"class="buylinks">Visit ></a>
    </div>
    <div class="col-sm">
    <div class="lead text-center"><span class="underlined">LAPTOPS</span></div><br>
    <img src="assets/laptop.png"width="90%">
       <br><br>
       In today's tech-driven world, getting by without a laptop appears nearly impossible. The gadget is required for everything in work-from-home culture,
        whether it's joining a zoom meeting or responding to emails. These portable PCs have become necessary not only for professionals, but also for students.<br><br><a href="showsubcat.php?catid=19"class="buylinks">Visit ></a>
    </div>
    
</div>
</div>
<div class="container"style="margin-top:100px;"><hr width="100%" color="black"" /></div>

<div class="container lead text-center"id="section2"style="padding:10px;border-radius:10px;">
    <span class="underlined"style="font-weight:900;font-size:30px;">OTHER PRODUCTS</span>
    <div class="row">
    <div class="col-sm">
        <div class="lead text-center"><span class="underlined">Keyboards<span></div><br>
       <img src="assets/keyboard1.png"width="98%">
       <br>
       Browse here for Keyboard the one you like the most, and get it delivered to your doorstep hassle-free.<br><br><a href="#"class="buylinks">Buy Now ></a>
    </div>
    <div class="col-sm">
    <div class="lead text-center"><span class="underlined">Mouse</span></div><br>
    <img src="assets/mouse.png"width="65%">
       <br>
    Best Quality Wired and Wireless Mouse available. Grab the best deals from the best companies.<br><br><a href="#"class="buylinks">Buy Now ></a>
    </div>
    <div class="col-sm">
    <div class="lead text-center"><span class="underlined">Headphones</span></div><br>
    <img src="assets/headphones.png"width="50%">
       <br>
       Listen to music the way you should
Feel the music. Don’t just feel it.Feel the rhythm <br><br><a href="#"class="buylinks">Buy Now ></a>
    </div>
    <div class="row">
    <div class="col-sm">
        <div class="lead text-center"><span class="underlined">Speakers<span></div><br>
       <img src="assets/speaker.png"width="60%">
       <br>
       Great speaker deals in store for you
Best brands available, solid sounds guaranteed <br><br><a href="#"class="buylinks">Buy Now ></a>
    </div>
    <div class="col-sm">
    <div class="lead text-center"><span class="underlined">SSD</span></div><br>
    <img src="assets/ssd.png"width="60%">
       <br>
    Browse the best SSD's in the market with One Year + guarantee. <br><br><a href="#"class="buylinks">Buy Now ></a>
    </div>
    <div class="col-sm">
    <div class="lead text-center"><span class="underlined">RAM Sticks</span></div><br>
    <img src="assets/ramstick.png"width="100%">
       <br>
    Speed-up your PC by installing the RAM Sticks available in different sizes. <br><br><a href="#"class="buylinks">Buy Now ></a>
    </div>
</div>
</div>
</div>


<div align="center"style="padding:10px;margin:20px;text-decoration:none;margin-top:80px">
  <a class="viewmorebtn"href="#"style="">View More</a>
</div>

<br><br><br>


<!-- Footer -->
<?php 
require_once("footer.php");
?>



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
