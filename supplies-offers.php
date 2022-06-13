<?php
include('database_connection.php');
session_start();
if(!isset($_SESSION['user_id']))
{
 header("location:login.php");
}
?>
<html>
    <title>Supply Neighbor</title>
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
        
  <div class='show_bg_2'>
    <h1> Nearby Offers<h1>
  </div>
  
  <div class="feed"><a href="contact.php" >Report Issues/Feedback</a></div>

<div class="tabs">
    <a href= "supplies.php">Requests</a>
    <a href= "supplies-offers.php">Offers</a>
</div>

<?PHP
if (isset($_GET['hello'])) {
$sender = $_SESSION['username'];
$recipient = $_GET['email'];

$subject = "Request Accepted";
$message = "Hello {$_GET['name']}, your request for {$_GET['specific_task']} was accepted by {$_SESSION['username']}. Contact {$_SESSION['username']} to verify the drop-off location and time. When you have recieved your supplies, remember to complete your request by clicking on the \"My Request\" link under the \"Request\" tab on the home screen. Thank you for using SupplyNeighbor.";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "<h5 style='color: green'>Request Accepted!</h5>";
}
else
{
    echo "<h5 style='color: red'>Error: Message not accepted</h5>";
}
}
?>

<?php
  $area_code = substr($_SESSION['area_code'], 0, 3);

    $sql = "SELECT * FROM offers WHERE SUBSTRING(area_code, 1, 3)='$area_code' ORDER BY request_id DESC;";
    $results = mysqli_query($link, $sql);
    $queryResult = mysqli_num_rows($results);

  if ($queryResult>0){
      echo "<h6>Remember to remove your offer by clicking on the \"<a href='pending_offers.php'>My Offers</a>\" tab under the \"Offer\" link once your offer has been completed.</h6>";
    while ($row = mysqli_fetch_assoc($results)){
      echo "<div class= 'requests-box'>
              
                <h1>".$row['name']."</h1> from <h1>".$row['area_code']."</h1> offers:
                
                <div class='acc'><a href='testing.php?request_id=".$row['request_id']."&hello=true&name=".$row['name']."&email=".$row['email']."&specific_task=".$row['specific_task']."'>Accept</a></div>
                
                <div id='emails' class='emails'><span><a href='https://mail.google.com/mail/?view=cm&fs=1&to=".$row['email']."' target='_blank' style='text-decoration: none; float: right; font-size: 16.5px; margin-right: 50px; margin-top: 5px; color: #303030; font-weight: bold;'>Gmail</a></span></div>
                <img src='https://upload.wikimedia.org/wikipedia/commons/4/4e/Gmail_Icon.png' style='width:20px; height: 20px; float: right; margin-right: -80px; margin-top: 5px;'>
                <br><div class='first'><p>-".$row['specific_task']."</p></div>
            ";
      
      if (!empty($row['specific_task2'])) {
        echo "<br><p>-".$row['specific_task2']."</p>";
      }
      if (!empty($row['specific_task3'])) {
        echo "<br><p>-".$row['specific_task3']."</p>";
      }
      if (!empty($row['specific_task4'])) {
        echo "<br><p>-".$row['specific_task4']."</p>";
      }
      if (!empty($row['specific_task5'])) {
        echo "<br><p>-".$row['specific_task5']."</p>";
      }
      if (!empty($row['specific_task6'])) {
        echo "<br><p>-".$row['specific_task6']."</p>";
      }
      if (!empty($row['specific_task7'])) {
        echo "<br><p>-".$row['specific_task7']."</p>";
      }
      if (!empty($row['specific_task8'])) {
        echo "<br><p>-".$row['specific_task8']."</p>";
      }
      if (!empty($row['specific_task9'])) {
        echo "<br><p>-".$row['specific_task9']."</p>";
      }
      if (!empty($row['specific_task10'])) {
        echo "<br><p>-".$row['specific_task10']."</p>";
      }
      
      
      
      
      
      echo "
                <br><h2>Additional Comments:
                ".$row['description']."</h2>
                
             
            </div>";
    }
  }
  else{
    echo "<h5>There are no offers in your area right now!</h5>";
  }
?>



    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    </head>
</body>
</html>
<style>
     body{
      margin: 0;
      background: #dee0e3;
      font-family: 'Montserrat', serif;
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
    
.requests-box{
background: #61B329;
padding-bottom: 10px;
padding-top: 2px;
padding-left: 30px;
font-family: Montserrat;
margin-top: 20px;
width: 70%;
font-size: 20px;
border-radius: 0px 30px 30px 0px;
}

.requests-box .acc a {
    background: green;
padding: 2px;
border-radius: 10px;
float: right;
padding: 10px;
text-decoration: none;
color: white;
font-weight: bold;
margin-right: 18px;
margin-top: -45px;
font-family: 'Montserrat', serif;
font-size: 20px;
border-top-style: hidden;
border-left-style: hidden;
cursor: pointer;
}

.requests-box .acc a:hover{
background: limegreen;
transition: 0.5s;
}

p{
font-size: 23px;
display: inline-block;
margin-bottom: -19px;
}

h1{
font-size: 23px;
font-weight: bold;
display: inline-block;
}

h2{
font-size: 12px;
margin-top: 30px;
color: white;
width: 80%;
}

.show_bg_2 {
  background-image:
  linear-gradient(to bottom, rgba(11, 11, 11, 0.52), rgba(7, 7, 7, 0.73)),
  url('home.jpg');
  color:white;
  width: 100%;
  height: 200px;
  background-size: cover;
  position: absoloute;
  top: 10%;
}

.show_bg_2 h1{
  position: absolute;
  font-size: 70px;
  top: 8%;
  left: 3%;
  font-weight: bold;
  color:white;
}

.first{
    margin-top: -55px;
    margin-bottom: -23px;
}  

h5{
    font-size: 25px;
margin-top: 30px;
margin-left: 30px;
}

h6{
    font-size: 16px;
margin-top: 30px;
margin-left: 30px;
}

.tabs{
  margin-top: 0px;
  font-size: 25px;
  margin-bottom: 50px;
}

.tabs a{
  color: black;
  display: inline-block;
  text-align: center;
  width: 20%;
  padding: 15px;
  margin-left: 20%;
  background: white;
  border-radius: 0px 0px 15px 15px;
  text-decoration: none;
  font-weight: bold;
}

.tabs a:hover{
  color: white;
  background: gray;
}

.feed a{
position: absolute; 
font-size: 17px; top: 13%; right: 0%; background: white; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); text-decoration: none; font-weight: bold; color: black; padding: 12px; border-radius: 10px 0px 0px 10px;
}

.feed a:hover{
background: #9e9e9e;
transition: 1s;
}
</style>