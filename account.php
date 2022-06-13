<?php
include('database_connection.php');
session_start();
if(!isset($_SESSION['user_id']))
{
 header("location:login.php");
}
?>

<html>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<title>Supply Neighbor</title>
  <style>
		
    body{
    	margin: 0;
      background: #dee0e3;
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



.settings{
  background: #81b2ef;
  position: absolute;
  top: 100px;
  right: 25%;
  width: 50%;
  height: 100%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 10px;
}

.formgroup input{
  height: 40px;
  border-radius: 10px;
  display: inline-block;
  width: 50%;
  margin-left: 3%;
  margin-top: 10px;
}

.formgroup input[type="text"]
{
  font-size:19px;
  padding-left: 10px;
  font-family: 'Montserrat', serif;
  color: black;
}

.formgroup input::placeholder
{
  color: black;
}

.formgroup textarea::placeholder
{
  color: black;
}

.formgroup textarea[type="text"]
{
  font-size:17px;
  padding-left: 10px;
  padding-right: 10px;
  font-family: Montserrat;
  color: black;
}

.des textarea{
  height: 240px;
  font-size: 15px;
  width: 50%;
  float: left;
  border-radius: 10px;
  margin-left: 3%;
  margin-top: 10px;
}

h3{
  margin-bottom:0px;
  font-size: 16;
  font-weight: bold;
  margin-left: 3%;
  float: left;
  width: 13%;
}

.crea input:hover{
background: limegreen;
cursor: pointer;
transition-duration: 1s;
}

.crea input{
position: absolute;
bottom: 15%;
right: 25%;
width: 50%;
font-family: Montserrat;
border: none;
font-weight: bold;
}

h1{
  margin-left: 3%;
}

h2{
font-size: 25px;
margin-top: 30px;
margin-left: 30px;
}
	</style>

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

<?php
if(isset($_POST["register"]))
            {
                $group_chats = "SELECT * FROM login WHERE user_id='$_SESSION[user_id]'";
           	$cResult = mysqli_query($link, $group_chats);
           	$cQueryResult = mysqli_num_rows($cResult);

           if ($cQueryResult>0){
             $name = trim($_POST["name"]);
             $username = trim($_POST["username"]);
             $area_code = trim($_POST["area_code"]);
             $bio = strtolower(trim($_POST["bio"]));
             if (empty($name)){
               $name = $_SESSION['name'];
             }
             else{
               $_SESSION['name'] = $name; 
             }
             
             if (empty($username)){
               $username = $_SESSION['username'];
             }
             else{
               $_SESSION['username'] = $username; 
             }
             
             if (empty($bio)){
               $bio = $_SESSION['bio'];
             }
             else{
               $_SESSION['bio'] = $bio; 
             }
             
             if (empty($area_code)){
               $area_code = $_SESSION['area_code'];
             }
             else{
               $_SESSION['area_code'] = $area_code; 
             }
             
             $sql=mysqli_query($link, "UPDATE login SET name='$name',username='$username',bio='$bio',area_code='$area_code' where user_id = '$_SESSION[user_id]'");
             if($sql)
             {
               echo "<h2>Changes Saved!</h2>";
            }
            else
            {
              echo "There was an error in your request";
            }
          }
          else{
             echo "There was an error in your request";
           }
          }
       		 ?>

<div class="settings">
        <h1>My Account</h1>
     <form method="post">
      <span class="text-danger"><?php echo $message; ?></span>
      <div class="formgroup">
       <h3>Name</h3>
       <input type="text" name="name" class="form-control" placeholder="<?php echo $_SESSION['name'];?>">
      </div>
      <div class="formgroup">
       <h3>Email</h3>
       <input type="text" name="username" class="form-control" placeholder="<?php echo $_SESSION['username'];?>"/>
      </div>
      <div class="formgroup">
       <h3>Zip Code</h3>
       <input type="text" name="area_code" class="form-control" placeholder="<?php echo $_SESSION['area_code'];?>"/>
     </div>
     <div class="formgroup">
      <h3>Bio</h3>
      <div class="des">
      <textarea name="bio" type="text" placeholder="<?php echo $_SESSION['bio'];?>" cols="30" rows="10" wrap="hard"></textarea>
     </div>
     </div>
      <div class="formgroup">
        <div class="crea">
          <input type="submit" name="register" class="btn btn-info" value="Save Changes" />
      </div>
      </div>
     </form>




</body>

</html>