<!DOCTYPE html>
<html>
    <title>Supply Neighbor</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<style>
body {
  font-family: Montserrat, serif;
  margin: 0;
}

html {
  box-sizing: border-box;
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
  width: 100%;
  padding-top: 15px;
  height: 55px;
  text-decoration: none;
  display: block;
  text-align: left;
  padding-left: 10%;
  margin-top: 0px;
}

.dropdown-content2 a {
  float: none;
  color: black;
  width: 100%;
  padding-top: 15px;
  height: 55px;
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
  width: 100%;
  padding-top: 15px;
  height: 55px;
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

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 20%;
  margin-left: 8.3%
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
background-image:
  		linear-gradient(to bottom, rgba(11, 11, 11, 0.52), rgba(7, 7, 7, 0.73)),
  		url('group.jpeg');
                background-size: 100% 100%;
  padding: 80px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
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
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

h2{
  width: 100%;
  margin-left: 0%;
  margin-top: 3%;
  margin-bottom: 3%;
  text-align: center;
  font-size: 20px;
  font-weight: normal;
  line-height: 30px;
}

.bout{
  width: 50%;
  margin-left: 25%;
  margin-top: 3%;
  margin-bottom: 3%;
  text-align: center;
  font-size: 20px;
  font-weight: normal;
  line-height: 30px;
}

.what h3{
  padding-left: 53%;
  padding-right: 15%;
  padding-bottom: 3%;
  text-align: left;
  display: inline-block;
  font-weight: normal;
  line-height: 30px;
  font-size: 15px;
}

h4{
  padding-top: 5%;
  padding-left: 53%;
  text-align: left;
  font-weight: normal;
  font-size: 30px;
}

.what{
   width: 100%;
   height: 600px;
   background: #b8d3ff;
}

.what img{
        width: 300px;
        height: 500px;
        margin-top: 60px;
        margin-left: 20%;
    }
    
    .what_text{
    margin-top: -580px;
    }
   
</style>
</head>
<body>
<div class="taskbar">
          <div class="dropdown">
    <a class="dropbtn" href="account.php">Account </a>
    <div class="dropdown-content">
      <a href="account.php">Settings</a>
      <a href="logout.php">Logout</a>
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
        
        <a href="home.php"> Home </a>
        <div id= "logo"> <IMG SRC="logos.png" ALT="some text" WIDTH=250 HEIGHT=50> </div>
        
</div>

<div class="about-section">
  <h1>We Are Supply Neighbor</h1>
  <p>Supply Neighbor is a platform that allows members of a neighborhood to support one another during this time of need.</p>
  <p>Neighbors can request for supplies on a forum where it can be seen by large amounts of people in their area, and in turn, receive help 
within a short amount of time.</p>
</div>

<div class="bout">22 million people have lost their jobs due to the coronavirus. Many families are living in stress and fear as to how they can keep
up with piling costs of materials and supplies. We at Supply Neighbor have committed ourselves to building a platform where those who 
either cannot afford supplies, or are afraid to travel to traditional stores can quickly and easily receive help from those in the nearby 
area.
</div>

<div class="what">
<img class="what__image" src="haydenlee.jpg">
<div class="what_text">
<h4>What We Do</h4>
<h3>Our team at Supply Neighbor invite you all to join and support us in this endeavor. If you have a surplus of a certain type of item and 
would be willing to spare some to neighbors in need, please consider creating an account on the website. If you are already planning to 
go to a store to pick up supplies or groceries for yourself and would also be willing to pick up a few items requested by your neighbors, 
your help would be truly appreciated. Let us work together to make this collaboration tool a success and in the process of doing so, 
help build and promote a sense of community, kindness, and support for each other.</h3>
</div>
</div> 

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="avibasnet4.jpg" alt="Jane" style="width: 100%; height: 190px;">
      <div class="container">
        <h2>Avi Basnet</h2>
        <p class="title">Site Designer & Founder</p>
        <p>Avi Basnet is a Junior at Valencia High School and looks to be a Computer Sci Major. He also competes in swim and plays basketball.</p>
        <p>avigyabb@gmail.com</p>
        <p><a href="contact.php"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="nickmoy3.jpg" alt="Mike" style="width:100%; height: 190px;">
      <div class="container" >
        <h2>Nick Moy</h2>
        <p class="title">Project Coordinator & Founder</p>
        <p>Nick attends Valencia High school and is interested in various sciences. He hopes to major in Biochem in college.</p>
        <p>njmnjm624@gmail.com</p>
        <p><a href="contact.php"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="haydenlee3.jpg" alt="John" style="width:100%; height: 190px;">
      <div class="container">
        <h2>Hayden Lee</h2>
        <p class="title">Supply Manager & Founder</p>
        <p>Hayden is a Junior at Valencia High School aspiring to major in Aerospace Engineering, who loves basketball and lacrosse.</p>
        <p>haydenylee@gmail.com</p>
        <p><a href="contact.php"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <img src="fabionunez2.jpg" alt="Jane" style="width:100%; height: 190px;">
      <div class="container">
        <h2 style="font-size: 19px;">Fabio Nunez Del Prado</h2>
        <p class="title">Communication Director & Founder</p>
        <p>Fabio seeks to major as an Automotive or Computer Engineer in college. He loves drafting and playing lacrosse.</p>
        <p style="font-size: 14px;">nunezdelpradofabio@gmail.com</p>
        <p><a href="contact.php"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="josephlee.png" alt="Mike" style="width:100%; height:190px;">
      <div class="container">
        <h2>Joseph Lee</h2>
        <p class="title">Media Administrator & Founder</p>
        <p>Joseph Lee is a Junior at Valencia High. He is on varsity lacrosse, and is an aspiring mechanical engineer.</p>
        <p>josephjrlee25@gmail.com</p>
        <p><a href="contact.php"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
  </div>
  

</body>
</html>
