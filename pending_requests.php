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
    <h1> My Requests<h1>
  </div>

<?php
  $user_id = $_SESSION['user_id'];

    $sql = "SELECT * FROM requests WHERE user_id='$user_id'";
    $results = mysqli_query($link, $sql);
    $queryResult = mysqli_num_rows($results);

  if ($queryResult>0){
    while ($row = mysqli_fetch_assoc($results)){
      echo "<div class= 'requests-box'>
              
                
                
                <a href='pending_requests.php?request_id=".$row['request_id']."&hello=true'>Complete</a>
                
                <br><p>-".$row['specific_task']."</p>
                <br><h2>Additional Comments:
                ".$row['description']."</h2>
                
             
            </div>";
    }
  }
  else{
    echo "<h3>You have not made any requests yet! Click <a href='request.php'>HERE</a> to submit a request.</h3>";
  }
  
 

  if (isset($_GET['hello'])) {
    $request_id = $_GET['request_id'];
    $data = array(
                ':request_id'  => $request_id
              );

              $query = "
              DELETE FROM requests
              WHERE request_id='$request_id'
              ";
              $statement = $connect->prepare($query);
              if($statement->execute($data))
              {
               $message = "<label>You Left This Class</label>";
              }
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
background: #81b2ef;
padding-bottom: 10px;
padding-top: 2px;
padding-left: 30px;
font-family: Montserrat;
margin-top: 20px;
width: 70%;
font-size: 20px;
border-radius: 0px 30px 30px 0px;
}

.requests-box a{
background: green;
padding: 2px;
border-radius: 10px;
float: right;
padding: 10px;
text-decoration: none;
color: white;
font-weight: bold;
margin-right: 18px;
margin-top: 15px;
font-family: 'Montserrat', serif;
font-size: 20px;
border-top-style: hidden;
border-left-style: hidden;
cursor: pointer;
}

.requests-box a:hover{
background: limegreen;
transition: 0.5s;
}

p{
font-size: 23px;
display: inline-block;
margin-top: -3px;
}

h1{
font-size: 23px;
font-weight: bold;
display: inline-block;
}

h2{
font-size: 12px;
color: #5e5e5e;
}

h3{
font-size: 25px;
margin-top: 30px;
margin-left: 30px;
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
</style>