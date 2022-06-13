<?php
include('database_connection.php');
session_start();
if ($_SERVER['HTTPS'] != "on") {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
    exit;
}
?>
<html>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<title>Supply Neighbor</title>
  <style>
		
    body{
    	margin: 0;
      background: white;
      font-family: 'Montserrat', serif;
      overflow-x: hidden;
    }

#logo {position: absolute; margin-left: 20px; margin-top: 7px;} 
    
    .taskbar{
    	width: 100%;
      height: 70px;
      background: #408be6;
    }
    
    .taskbar a{
    	float: right;
  		display: block;
                height: 70px;
  		color: #505050;
  		text-align: center;
  		width: 11%;
  		text-align: center;
  		text-decoration: none;
  		font-size: 20px;
      font-weight: bold;
      margin-top: 25px;
      cursor: pointer;
    }
    
    .taskbar a:hover {
    	color: white;
      transition: 0.5s;
    }
  
  	.show_bg_2 {
  		background-image:
  		linear-gradient(to bottom, rgba(11, 11, 11, 0.52), rgba(7, 7, 7, 0.73)),
  		url('backgroundpic.jpg');
  		color:white;
  		width: 100%;
  		height: 70%;
  		background-size: cover;
		}
    
    .show_bg_2 p{
  		color: white;
                font-size:20px;
                top: 36%;
                  left: 49.5%;
                  position: absolute; 
                  font-weight: bold;

		}
    
                .req a{
  		color: white;
                font-size: 28px;
                text-decoration: none;
                font-weight: bold;
                position: absolute;
                  padding: 14px;
                  text-align: center;
                  top: 27%;
                  right: 52%;
                  background: #81b2ef;
                  border-radius: 10px;
		}
                
                .req a:hover{
  		background: #46698c;
                transition: 0.5s;
		}
                
            
                
                .offer a{
  		color: white;
                font-size:28px;
                text-decoration: none;
                font-weight: bold;
                position: absolute;
                  padding: 14px;
                  padding-left: 30px;
                  padding-right: 30px;
                  text-align: center;
                  top: 27%;
                  left: 52%;
                  background: #61B329;
                  border-radius: 10px;
		}
                
                .offer a:hover{
  		background: #3d7515;
                transition: 0.5s;
		}
    
    .sup{
      position: absolute;   
      width: 50%;
      text-align: center;
      top: 46%;
      left: 25%;
    }
    
    .sup a{
           color: white;
      font-size:30px;
      text-decoration: none;
      font-weight: bold;
    }
        .sup a:hover{
                color: #82C0FF;
              transition: 0.5s;
		}
                
                .my_requests a{
width: 13%;

}


h3{
width: 95%;
display: inline-block;
font-size: 14px;
line-height: 150%;
margin-left: 8%;
margin-top: -10px;
color: gray;
}

h1{
width: 55%;
display: inline-block;
font-size: 14px;
margin-left: 40%;
margin-top: -10px;
line-height: 150%;

}

h2{
margin-left: 8%;
}

h4{
font-size: 25px;
margin-left: 40%;
}

#user_logo{
display: inline-block;
margin-left: 0%;
border-radius: 20px;
margin-top: 10%;
width: 200px;
}

#user_logo2{
display: inline-block;
margin-left: 45%;
margin-top: 45%;
}

img {
  border-radius: 20%;
}

.des1{
position: absolute;
display: inline-block;
width: 60%;
margin-top: 50px;
}

.des2{
position: absolute;
display: inline-block;
width: 100%;
margin-top: 300px;
background: #81b2ef;
left: 0%;
padding-top: 50px;
padding-bottom: 50px;
}

.user_logo {
       display: inline-block;
       float: right;
       margin-top: -80px;
       margin-right: -70px;
       position: relative;
       z-index: -1;
    }

    .user_logo img {
        width: 600px;
        height: 450px;
        margin: 0 0 0 100px;
    }
    
    .user {
       display: inline-block;
       float: lef;
       margin-top: 350px;
       margin-right: -70px;
       position: relative;
       z-index: 1;
    }

    .user img {
        width: 300px;
        height: 200px;
        margin: 0 0 0 100px;
    }
   


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  margin-top: 70px;
  width: 12%;
  right: 0%;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content2 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  margin-top: 70px;
  width: 12%;
  right: 33%;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content3 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  margin-top: 70px;
  width: 12%;
  right: 44%;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  width: 90%;
  padding-top: 15px;
  height: 40px;
  text-decoration: none;
  display: block;
  text-align: left;
  padding-left: 10%;
  margin-top: 0px;
}

.dropdown-content2 a {
  float: none;
  color: black;
  width: 90%;
  padding-top: 15px;
  height: 40px;
  text-decoration: none;
  display: block;
  text-align: left;
  padding-left: 10%;
  margin-top: 0px;
  font-size: 18px;
}

.dropdown-content3 a {
  float: none;
  color: black;
  width: 90%;
  padding-top: 15px;
  height: 40px;
  text-decoration: none;
  display: block;
  text-align: left;
  padding-left: 10%;
  margin-top: 0px;
  font-size: 18px;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown-content2 a:hover {
  background-color: #ddd;
}

.dropdown-content3 a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown2:hover .dropdown-content2 {
  display: block;
}

.dropdown3:hover .dropdown-content3 {
  display: block;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}


.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  z-index: 2;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
         margin-top: 10%;
         margin-left: 33%;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h5 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
  font-size: 30px;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: red;
  cursor: pointer;
}
.popup .content {
  margin-top: -30px;
  line-height: 25px;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}

.fampromise{
 display: inline-block;
 margin-left: 3%;
 border-radius: 0px;
 margin-top: 0px;
}

.as_seen{
 background: white;
 margin-top: -35px;
 height: 100px;
}

h6 {
   width: 100%;
   margin-left: 20%;
   text-align: center; 
   border-bottom: 1.5px solid #000; 
   line-height: 1px;
   margin: 60px 0 20px; 
   border-color: gray;
   } 

h6 span { 
    background:#fff; 
    padding:0 10px; 
    font-size: 17px;
}


hr{
width: 100%;
margin-left: 0%;
margin-top: 0px;
height: 0.5px;
background: gray;
}
	</style>

<body>
<div class="taskbar">
          <div class="dropdown">
    <a class="dropbtn" href="account.php">Account </a>
    <div class="dropdown-content">
      <a href="account.php">Settings</a>
      <a href="logout.php">Login</a>
    </div>
          </div>
        
	<a href="about.php"> About Us </a>
        <a href="contact.php"> Contact </a>
        
          
        <div class="dropdown2">
    <a class="dropbtn2" href="request.php"> Request </a>
    <div class="dropdown-content2">
      <a href="pending_requests.php">My Requests</a>
      <a href="request.php">Submit Request</a>
      <a href="supplies.php">Nearby Requests</a>
    </div>
          </div>
         
         
         <div class="dropdown3">
    <a class="dropbtn3" href="request.php"> Offer </a>
    <div class="dropdown-content3">
      <a href="pending_offers.php">My Offers</a>
      <a href="offer.php">Make Offer</a>
      <a href="supplies-offers.php">Nearby Offers</a>
    </div>
          </div>
        
        <a href="index.php"> Home </a>
        <div id= "logo"> <IMG SRC="logos.png" ALT="some text" WIDTH=250 HEIGHT=50> </div>
        
</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<h5>Important Notice</h5>
		<a class="close" onclick="myFunction()">&times;</a>
		<div class="content">
			Welcome to Supply Neighbor, we are a group of high schoolers that are looking to make a positive impact with the onset of Covid 19. New updates
			will be coming out soon! Please help us by interacting with requests in your area, thank you for using SupplyNeighbor!
		</div>
	</div>
</div>

<div class='show_bg_2'>
	<div class="req"><a href="request.php"> Request Susplies </a></div> <div class="offer"><a href="offer.php"> Offer Supplies </a></div>
        <p>OR</p>
        <div class="sup"><a href="supplies.php"> View Nearby Requests/Offers in Your Area </a></div>
</div>

<div class="as_seen">
        <h6><span>See Who's Talking About Us</span></h6>
        <a href="http://www.familypromisescv.org/" target="_blank"><div class= "fampromise"> <IMG SRC="https://www.wamc.org/sites/wamc/files/styles/x_large/public/201806/family-promise.jpg" ALT="some text" WIDTH=200 HEIGHT=60> </div></a>
        <a href="https://signalscv.com/2020/04/valencia-high-juniors-launch-platform-for-neighborhoods-to-help-each-other-during-quarantine/" target="_blank"><div class= "fampromise"> <IMG SRC="https://signalscv.com/wp-content/uploads/2019/03/Signal-News-logo_eagle_100-years-BANNER.png" ALT="some text" WIDTH=210 HEIGHT=60> </div></a>
        <a href="https://losangeles.cbslocal.com/2020/05/01/coronavirus-valencia-supply-neighbor-giving-back/" target="_blank"><div class= "fampromise"> <IMG SRC="https://www.logaster.com/blog/wp-content/uploads/2020/03/the-2nd-logo-11-1568x445.jpg" ALT="some text" WIDTH=200 HEIGHT=55> </div></a>
        <a href="https://losangeles.cbslocal.com/2020/05/01/coronavirus-valencia-supply-neighbor-giving-back/" target="_blank"><div class= "fampromise"> <IMG SRC="https://upload.wikimedia.org/wikipedia/commons/c/cb/KCAL9.png" ALT="some text" WIDTH=115 HEIGHT=55> </div></a>
        <a href="https://www.latimes.com/california/story/2020-05-09/teen-volunteers-develop-ways-to-help-most-vulnerable-unable-to-help-themselves-during-virus-outbreak" target="_blank"><div class= "fampromise"> <IMG SRC="https://www.nicepng.com/png/full/352-3524144_latimes-los-angeles-times-logo-jpg.png" ALT="some text" WIDTH=180 HEIGHT=60> </div></a>
</div>
<hr>

<div class="des1">
<h2>What is SupplyNeighbor?</h2>
<h3>What would you do if you ran out of toilet paper, but all nearby stores are out of stock? 
Toilet paper, like many other supplies, are necessities for everyday life that have suddenly become very hard to get ahold of 
in this quarantine. SupplyNeighbor is a platform for everyday people to send requests out to people in their community when they 
are unable to find these materials at traditional stores.</h3>
</div>
<div class= "user_logo"> <IMG SRC="https://cdn.dribbble.com/users/1118376/screenshots/3143125/red-sift-house.gif" ALT="some text"> </div> 

<div class= "user"> <IMG SRC="https://i.ya-webdesign.com/images/full-clipart-carton-10.png" ALT="some text"> </div> 
<div class="des2">
<h4>A Sense of Community</h4>
<h1>Requests can range from a few rolls of toilet paper in case of emergency 
to grocery lists that can be taken care of for many people by a single person. This can also include medicinal supplies, as well as hand sanitizers or surgical masks. When one person can give help to his or her entire 
community, it decreases the likelihood of catching corona at public stores and brings together people of a neighborhood.</h1>
</div>




</body>
<script>
function myFunction() {
  var x = document.getElementById("popup1");
  if (x.style.display === "none") {
    x.style.display = "block";
  }else{
   x.style.display = "none";
   
  }
}
</script>
</html>