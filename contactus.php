<?php session_start();?>
<html>
    <head>
        <title>
            Contact Us
        </title>
        <?php require_once("extfiles.php"); ?>
<style>





.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
 
}

.title {
  color: grey;
  font-size: 18px;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  margin-bottom:-20px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}
.sociallinksbtn{
    padding:5px;
}
.sociallinksbtn:hover {
  opacity: 0.7;
}
.button:hover{
    opacity: 0.7; 
    text-decoration:none;
    color:white;
}
.col-sm:hover{
    background-color:white;
    color:black;
    opacity:1;

}

.fbtn{
    padding:10px;
    border-radius:4px;
    border-style:solid;
}
</style>


    </head>
<body>
    <?php require_once("header.php"); ?>

    <br><br><br><br>
    <div class="container lead">
    <h1 class="display-4"align="center">Feedback</h1>
    <form name="feedback">
    <table align="center" border="0px"class="feedback">
 <tr>
    <td><input type="text"placeholder="Your Name"name="personnanme"size="30%"style="height: 40px;"class="form-control">
</td>
</tr>

<tr>
<td><input type="text"placeholder="Your Email"name="personemail"size="30%"style="height: 40px;"class="form-control">
</td>
</tr>
<tr>
<td><input type="text"placeholder="Subject"name="personsub"size="30%"style="height: 40px;"class="form-control">
</td>
</tr>
<tr>
<td><textarea placeholder="Type Your Message Here*"name="personemail"rows="4" cols="28"class="form-control"></textarea>
</td>
</tr>
<tr align="center">
<td><input type="submit"name="fbtn"value="Submit"class="fbtn btn-success">
</td>
</tr>
</table>
</form>
    </div>




    <h1 class="display-4"align="center">OUR TEAM</h1>
<br><br>
    <div class="row">
    <div class="col-sm">
    <div class="card">
  <img src="assets/dev1.jpg" alt="Manpreet Singh" style="width:100%">
  <h1>Manpreet Singh</h1>
  <p class="title">CEO & Founder</p>
  <p>India</p>
  <div style="margin: 24px 0;">
    <a href="#"class="sociallinksbtn"><img src="assets/instagram.png"width="10%"></a> 
    <a href="#"class="sociallinksbtn"><img src="assets/snapchat.png"width="10%"></a>  
    <a href="#"class="sociallinksbtn"><img src="assets/facebook.png"width="10%"></a>  
    <a href="#"class="sociallinksbtn"><img src="assets/twitter.png"width="10%"></a> 
  </div>
  <p><a class="button"href="www.manpreetsingh10720@gmail.com">Contact</a></p>
</div>
    </div>
    <div class="col-sm">
    <div class="card">
  <img src="assets/dev2.jpeg" alt="Jatin Sharma" style="width:100%;height:320px;">
  <h1>Jatin Sharma</h1>
  <p class="title">Enginner</p>
  <p>India</p>
  <div style="margin: 24px 0;">
    <a href="#"class="sociallinksbtn"><img src="assets/instagram.png"width="10%"></a> 
    <a href="#"class="sociallinksbtn"><img src="assets/snapchat.png"width="10%"></a>  
    <a href="#"class="sociallinksbtn"><img src="assets/facebook.png"width="10%"></a>  
    <a href="#"class="sociallinksbtn"><img src="assets/twitter.png"width="10%"></a> 
  </div>
  <p><a class="button"href="#">Contact</a></p>
</div>
    </div>
    <div class="col-sm">
    <div class="card">
  <img src="assets/dev1.jpg" alt="John" style="width:100%">
  <h1>Manpreet Singh</h1>
  <p class="title">CEO & Founder</p>
  <p>India</p>
  <div style="margin: 24px 0;">
    <a href="#"class="sociallinksbtn"><img src="assets/instagram.png"width="10%"></a> 
    <a href="#"class="sociallinksbtn"><img src="assets/snapchat.png"width="10%"></a>  
    <a href="#"class="sociallinksbtn"><img src="assets/facebook.png"width="10%"></a>  
    <a href="#"class="sociallinksbtn"><img src="assets/twitter.png"width="10%"></a> 
  </div>
  <p><a class="button"href="#">Contact</a></p>
</div>
    </div>
    <div class="col-sm">
    <div class="card">
  <img src="assets/dev1.jpg" alt="John" style="width:100%">
  <h1>Manpreet Singh</h1>
  <p class="title">CEO & Founder</p>
  <p>India</p>
  <div style="margin: 24px 0;">
    <a href="#"class="sociallinksbtn"><img src="assets/instagram.png"width="10%"></a> 
    <a href="#"class="sociallinksbtn"><img src="assets/snapchat.png"width="10%"></a>  
    <a href="#"class="sociallinksbtn"><img src="assets/facebook.png"width="10%"></a>  
    <a href="#"class="sociallinksbtn"><img src="assets/twitter.png"width="10%"></a> 
  </div>
  <p><a class="button"href="#">Contact</a></p>
</div>
    </div>
    
</div>




    <br><br><br><br>
    <?php require_once("footer.php"); ?>
</body>
</html>