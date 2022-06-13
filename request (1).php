<?php

include('database_connection.php');

session_start();

if(!isset($_SESSION['user_id']))
{
 header("location:login.php");
}

$message = '';

if(isset($_POST["register"]))
{
 $user_id = $_SESSION['user_id'];
 $name = trim($_POST["name"]);
 $phone = trim($_POST["phone"]);
 $email = trim($_POST["email"]);
 $specific_task = trim($_POST["specific_task"]);
 $specific_task2 = trim($_POST["specific_task2"]);
 $specific_task3 = trim($_POST["specific_task3"]);
 $specific_task4 = trim($_POST["specific_task4"]);
 $specific_task5 = trim($_POST["specific_task5"]);
 $specific_task6 = trim($_POST["specific_task6"]);
 $specific_task7 = trim($_POST["specific_task7"]);
 $specific_task8 = trim($_POST["specific_task8"]);
 $specific_task9 = trim($_POST["specific_task9"]);
 $specific_task10 = trim($_POST["specific_task10"]);
 $description = trim($_POST["description"]);
 $area_code = $_SESSION['area_code'];
 $check_query = "
 SELECT * FROM requests
 WHERE name = :name
 ";
 $statement = $connect->prepare($check_query);
 $check_data = array(
  ':name'  => $name
 );
 if($statement->execute($check_data))
 {
   if(empty($name))
   {
    $message .= '<p><label>Name is required</label></p>';
   }
   if(empty($specific_task))
   {
    $message .= '<p><label>Specific supplies is required</label></p>';
   }
   if($message == '')
   {
    $data = array(
     ':name'  => $name,
     ':phone'  => $phone,
     ':email'  => $email,
     ':specific_task'  => $specific_task,
     ':specific_task2'  => $specific_task2,
     ':specific_task3'  => $specific_task3,
     ':specific_task4'  => $specific_task4,
     ':specific_task5'  => $specific_task5,
     ':specific_task6'  => $specific_task6,
     ':specific_task7'  => $specific_task7,
     ':specific_task8'  => $specific_task8,
     ':specific_task9'  => $specific_task9,
     ':specific_task10'  => $specific_task10,
     ':description'  => $description,
     ':area_code' => $area_code,
     ':user_id' => $user_id
    );

    $query = "
    INSERT INTO requests
    (name, phone, email, specific_task, specific_task2, specific_task3, specific_task4, specific_task5, specific_task6, specific_task7, specific_task8, specific_task9, specific_task10, description, area_code, user_id)
    VALUES (:name, :phone, :email, :specific_task, :specific_task2, :specific_task3, :specific_task4, :specific_task5, :specific_task6, :specific_task7, :specific_task8, :specific_task9, :specific_task10, :description, :area_code, :user_id)
    ";
    $statement = $connect->prepare($query);
    if($statement->execute($data))
    {
     $message = "<h4>Request Posted. Click <a href='supplies.php'>HERE</a> to see other requests.</h4>";
    }
    else{
   echo "";
   }
   }
   else{
   echo "";
   }
  }
 }


?>
<html>
  <head>
      <title>Supply Neighbor</title>
    <style>
    body {
      margin: 0;
      font-family: 'Montserrat', serif;
      background: #dee0e3;
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

  .form-group input{
    height: 40px;
    border-radius: 10px;
    display: inline-block;
    width: 93%;
    margin-left: 3%;
    margin-top: 10px;
  }
      
    .form-group select{
    height: 40px;
    border-radius: 10px;
    display: inline-block;
    width: 93%;
    margin-left: 3%;
    margin-top: 10px;
    font-size:20px;
    padding-left: 10px;
    font-family: Montserrat;
  }

  .form-group{
    position: relative;
    left: 15%;
    background: #81b2ef;
    padding: 1%;
    padding-bottom: 2%;
    margin-bottom: 1%;
    width: 70%;
    border-radius: 25px;
  }

  .form-group input[type="text"]
  {
    font-size:20px;
    padding-left: 10px;
    font-family: Montserrat;
    color: black;
  }
  
  input:focus{
  outline: none;
  }

  .form-group textarea[type="text"]
  {
    font-size:20px;
    padding-left: 10px;
    font-family: Montserrat;
  }

  .des textarea{
    height: 120px;
    font-size: 20px;
    border-radius: 10px;
    margin-left: 3%;
    width: 93%;
  }

  h3{
    margin-left: 3%;
    font-size: 24;
    font-weight: bold;
  }

  h2{
    margin-top: -16px;
    margin-left: 3%;
    font-size: 18;
    color: #5c5c5c;
  }
  h1{
    margin-left: 3%;
    font-size: 18;
    color: #5c5c5c;
  }
.panel-heading{
  font-size: 20px;
  text-align: center;
}

.crea input:hover{
  background: white;
  color: #66cc66;
  cursor: pointer;
  transition: 1s;
}

.crea input{
  margin-bottom: 1%;
  background: white;
}

.show_bg_2 {
  background-image:
  linear-gradient(to bottom, rgba(11, 11, 11, 0.52), rgba(7, 7, 7, 0.73)),
  url('home.jpg');
  color:white;
  width: 100%;
  height: 200px;
  background-size: cover;
  margin-bottom: 20px;
}

.show_bg_2 h1{
  position: absolute;
  font-size: 70px;
  top: 8%;
  left: 3%;
  font-weight: bold;
  color:white;
}

label{
  color: red;
  float: middle;
  font-size: 23px;
  margin-left: 300px;
  margin-bottom: 30px;
}

h4{
font-size: 25px;
margin-top: 30px;
margin-left: 30px;
}


.form-group button{
    height: 40px; border-radius: 10px; font-size: 20px; font-weight: bold; background: green; color: white; border-top-style: hidden;
border-left-style: hidden; padding-left: 10px; padding-right: 10px;
}

.form-group button:hover{
background: limegreen;
transition: 0.5s;
cursor: pointer;
}
    </style>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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

      <div class='show_bg_2'>
        <h1>Request a Task or Supplies<h1>
      </div>

  <div class="container">

   <div class="panel panel-default">
      <div class="panel-heading"></div>
    <div class="panel-body">
     <form method="post">
      <span class="text-danger"><?php echo $message; ?></span>
           <div class="form-group">
      <h3>Type</h3>
      <h2>Put in the request type</h2>
      <select id="request_type">
  <option value="supplies">Supplies</option>
  <option value="opel">Grocery List</option>
</select>
            </div>
      <div class="form-group">
       <h3>Name</h3>
       <h2>Put first and last name.</h2>
       <input type="text" name="name" class="form-control" placeholder="ie. John Doe "/>
      </div>
      <div class="form-group">
       <h3>Phone Number</h3>
       <h2>Type in phone number (optional)</h2>
       <input type="text" name="phone" class="form-control" placeholder="ie. 661-123-4567"/>
      </div>
      <div class="form-group">
       <h3>Email</h3>
       <h2>Type in email address (required)</h2>
       <input type="text" name="email" class="form-control" placeholder="ie. someone@myemail.com"/>
      </div>
      <div class="form-group">
       <h3>Specific Service Needed</h3>
       <h2>Put the specifics of your request. Medecinal items, supplies, groceries, etc.</h2>
       <div class="hiddend" style="width: 86%; display: inline-block;"><input type="text" name="specific_task" class="form-control" placeholder="ie. 5 Surgical Masks or 8 Rolls of Toilet Paper"/></div><div class="but" style="display: inline-block;"><button type="button" onclick="myFunction()">Add New</button></div>
       <div class="hidden_fields" style="width: 86%; display: inline-block;"><input type="text" name="specific_task2" class="form-control"></div><div class="but2" style="display: inline-block;"><button type="button" onclick="myFunction2()">Add New</button></div>
       <div class="hidden_fields2" style="width: 86%; display: inline-block;"><input type="text" name="specific_task3" class="form-control" /></div><div class="but3" style="display: inline-block;"><button type="button" onclick="myFunction3()">Add New</button></div>
       <div class="hidden_fields3" style="width: 86%; display: inline-block;"><input type="text" name="specific_task4" class="form-control" /></div><div class="but4" style="display: inline-block;"><button type="button" onclick="myFunction4()">Add New</button></div>
       <div class="hidden_fields4" style="width: 86%; display: inline-block;"><input type="text" name="specific_task5" class="form-control" /></div><div class="but5" style="display: inline-block;"><button type="button" onclick="myFunction5()">Add New</button></div>
       <div class="hidden_fields5" style="width: 86%; display: inline-block;"><input type="text" name="specific_task6" class="form-control" /></div><div class="but6" style="display: inline-block;"><button type="button" onclick="myFunction6()">Add New</button></div>
       <div class="hidden_fields6" style="width: 86%; display: inline-block;"><input type="text" name="specific_task7" class="form-control" /></div><div class="but7" style="display: inline-block;"><button type="button" onclick="myFunction7()">Add New</button></div>
       <div class="hidden_fields7" style="width: 86%; display: inline-block;"><input type="text" name="specific_task8" class="form-control" /></div><div class="but8" style="display: inline-block;"><button type="button" onclick="myFunction8()">Add New</button></div>
       <div class="hidden_fields8" style="width: 86%; display: inline-block;"><input type="text" name="specific_task9" class="form-control" /></div><div class="but9" style="display: inline-block;"><button type="button" onclick="myFunction9()">Add New</button></div>
       <div class="hidden_fields9" style="width: 86%; display: inline-block;"><input type="text" name="specific_task10" class="form-control" /></div>

       
       </div>
        </div>
     </div>
     <div class="form-group">
      <h3>Description</h3>
      <h2>Add any additional information needed.</h2>
      <div class="des">
      <textarea name="description" type="text" placeholder="" cols="30" rows="10"></textarea>
     </div>
     </div>
      <div class="form-group">
        <h1>Double check that all the information above is accurate. Once you press "Request" your request will be added to the forum.</h1>
        <div class="crea">
          <input type="submit" name="register" class="btn btn-info" value="Request" />
      </div>
      </div>
     </form>
    </div>
   </div>
  </div>
    </body>
    <script>
$(".hidden_fields").hide();
$(".hidden_fields2").hide();
$(".hidden_fields3").hide();
$(".hidden_fields4").hide();
$(".hidden_fields5").hide();
$(".hidden_fields6").hide();
$(".hidden_fields7").hide();
$(".hidden_fields8").hide();
$(".hidden_fields9").hide();
$(".but2").hide();
$(".but3").hide();
$(".but4").hide();
$(".but5").hide();
$(".but6").hide();
$(".but7").hide();
$(".but8").hide();
$(".but9").hide();


function myFunction() {
  $(".hidden_fields").show();
  $(".but2").show();
  $(".but").hide();
}

function myFunction2() {
  $(".hidden_fields2").show();
  $(".but3").show();
  $(".but2").hide();
}

function myFunction3() {
  $(".hidden_fields3").show();
  $(".but4").show();
  $(".but3").hide();
}

function myFunction4() {
  $(".hidden_fields4").show();
  $(".but5").show();
  $(".but4").hide();
}

function myFunction5() {
  $(".hidden_fields5").show();
  $(".but6").show();
  $(".but5").hide();
}

function myFunction6() {
  $(".hidden_fields6").show();
  $(".but7").show();
  $(".but6").hide();
}

function myFunction7() {
  $(".hidden_fields7").show();
  $(".but8").show();
  $(".but7").hide();
}

function myFunction8() {
  $(".hidden_fields8").show();
  $(".but9").show();
  $(".but8").hide();
}

function myFunction9() {
  $(".hidden_fields9").show();
  $(".but9").hide();
}
</script>
</html>

