<?php
include('database_connection.php');

session_start();

$message = '';

if(isset($_SESSION['user_id']))
{
 header('location:index.php');
}

if(isset($_POST["register"]))
{
 $username = trim($_POST["username"]);
 $password = trim($_POST["password"]);
 $area_code = trim($_POST["area_code"]);
 $accept_terms = trim($_POST["accept_terms"]);
 $check_query = "
 SELECT * FROM login
 WHERE username = :username
 ";
 $statement = $connect->prepare($check_query);
 $check_data = array(
  ':username'  => $username
 );
 if($statement->execute($check_data))
 {
  if($statement->rowCount() > 0)
  {
   $message .= '<p><label>Email already taken</label></p>';
  }
  else
  {
   if(empty($username))
   {
    $message .= '<p><label>Email is required</label></p>';
   }
   if(empty($accept_terms))
   {
    $message .= '<p><label>Must accept terms and conditions</label></p>';
   }
   if(empty($password))
   {
    $message .= '<p><label>Password is required</label></p>';
   }
   else
   {
    if($password != $_POST['confirm_password'])
    {
     $message .= '<p><label>Password not match</label></p>';
    }
   }
   if($message == '')
   {
    $data = array(
     ':username'  => $username,
     ':password'  => password_hash($password, PASSWORD_DEFAULT),
     ':area_code' => $area_code
    );

    $query = "
    INSERT INTO login
    (username, password, area_code)
    VALUES (:username, :password, :area_code)
    ";
    $statement = $connect->prepare($query);
    if($statement->execute($data))
    {
     $message = "<label>COMPLETED. LOGIN <a href='login.php'>HERE</a></label>";
    }
   }
  }
 }
}

?>

<html>
    <head>
        <title>Supply Neighbor</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    </head>
    <body>
  <div class='show_bg_2'>
        <div id="container">
   <br />

   <h3 align="center">Welcome to Supply Neighbor</a></h3><br />
   <br />
   <div id="login-form-wrap">
   <div class="panel panel-default">
      <h2>Create An Account</h2>
    <div class="panel-body">
     <form id="login-form" method="post">
      <div class="text-danger"><?php echo $message; ?></div>
      <div class="form-group">
       <p>
          <input type="text" name="username" placeholder="Email" class="form-control" required />
        </p>
      </div>
      <div class="form-group">
          <p>
       <input type="password" name="password" placeholder="Password" class="form-control" required />
     </p>
      </div>
      <div class="form-group">
        <p>
       <input type="password" name="confirm_password" placeholder="Re-Enter Password" class="form-control" />
        </p>
      </div>
       <div class="form-group">
        <p>
       <input type="text" name="area_code" placeholder="5 Digit Zip Code" class="form-control" />
        </p>
      </div>
      
      <span class="checkbox"><input title="Please tick" name="accept_terms" type="checkbox" class="required" id="js-accept-terms" /></span> <span title="Please tick" style="font-size:18px;">I accept the </span>  <a href="term.php" title="Opens in a new tab" style="font-size:18px; color: #303030;">terms &amp; conditions</a>
      
      <div class="form-group">
        <p>
          <div class= "loginbutton">
       <input type="submit" name="register" class="btn btn-info" value="Register" />
     </div>
      </p>
      </div>
      <div id="create-account-wrap">
        <p>Already Have An Account? <a href="login.php">Sign In</a><p>
      </div>
     </form>
    </div>
   </div>
  </div>
  </div>
</div>


    </body>
  <style>
  html {
  width: 100%;
  height: 100%;
  clip: auto;
  position: absolute;
  }
  body {
  	background-color: #9f9da7;
  	font-size: 1.6rem;
  	font-family: "Montserrat";
  	color: #2b3e51;
    margin: 0px;
  }
  .text-danger{
    color: red;
  }
  h2 {
  	font-weight:300;
  	text-align:center;
        margin-top: 10px;
  }
  p {
  	position: relative;
  }
  a,
  a:link,
  a:visited,
  a:active {
  	color:#3ca9e2;
  	transition: all 0.2s ease;
  	&:focus,
  	&:hover {
  		color:#329dd5;
  		transition: all 0.2s ease;
  	}
  }
  #login-form-wrap {
  	background: rgba(255, 255, 255, 0.5);
  	width: 35%;
  	margin: -3% auto;
  	text-align: center;
  	padding:20px 0 0 0;
  	border-radius: 4px;
  	box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);
    outline-width: medium;
  }
  #login-form {
  	padding:0 60px;
  }
  p input {
  	display: block;
  	box-sizing: border-box;
  	width: 100%;
  	outline: none;
  	height: 50px;
  	line-height: 60px;
  	border-radius: 4px;
  }
  p input[type="text"],
  p input[type="password"]{
  	width: 100%;
  	padding: 0 0 0 10px;
  	margin: 0;
  	color: #8a8b8e;
  	border: 1px solid #c2c0ca;
  	font-family: "Montserrat";
  	font-size: 16px;
  	appearance: none;
  	position: relative;
  	display: inline-block;
    color: black;
  	background: #eeedf1;
  	&:focus {
  		border-color:#3ca9e2;
  		&:invalid  {
  			color:#cc1e2b;
  			border-color:#cc1e2b;
  		}
  	}
  	&:valid ~ .validation {
  		display:block;
  		border-color:#0C0;
  		span {
  			background: #0C0;
  			position:absolute;
  			border-radius: 6px;
  			&:first-child {
  				top: 30px;
  				left: 14px;
  				width: 20px;
  				height: 3px;
  				transform: rotate(-45deg);
  			}
  			&:last-child {
  				top: 35px;
  				left: 8px;
  				width: 11px;
  				height: 3px;
  				transform: rotate(45deg);
  			}
  		}
  	}
  }
  .validation {
  	display:none;
  	position: absolute;
  	content: " ";
  	height:60px;
  	width:30px;
  	right:15px;
  	top:0px;
  }

  p input[type="submit"] {
  	border: none;
  	display:block;
  	background-color: #3ca9e2;
  	color: #fff;
  	font-weight: bold;
  	text-transform:uppercase;
  	cursor: pointer;
  	transition: all 0.2s ease;
  	font-size: 18px;
  	position: relative;
  	display: inline-block;
  	cursor: pointer;
  	text-align: center;
  	&:hover {
  		background-color:#329dd5;
  		transition: all 0.2s ease;
  	}
  }
  #create-account-wrap {
  	background-color:#eeedf1;
  	color:#8a8b8e;
  	font-size:14px;
  	width:100%;
  	padding:10px 0;
  	border-radius: 0 0 4px 4px;
  }
  .show_bg_2 {
    background-image:
    linear-gradient(to bottom, rgba(11, 11, 11, 0.52), rgba(7, 7, 7, 0.73)),
    url('https://s3-us-west-1.amazonaws.com/stapler.fischerhomes.com/resources/219487/large/_MG_8934.jpg');
    width: 100%;
    height: 145%;
    background-size: cover;
  }

  h3{
    color: white;
  }

  .loginbutton input{
    background: #5abf5d;
    display: block;
  	box-sizing: border-box;
  	width: 100%;
  	outline: none;
  	height: 50px;
  	line-height: 60px;
  	border-radius: 4px;
        border: none;
  	display:block;
  	color: #fff;
  	font-weight: bold;
  	text-transform:uppercase;
  	cursor: pointer;
  	transition: all 0.2s ease;
  	font-size: 18px;
  	position: relative;
  	display: inline-block;
  	cursor: pointer;
  	text-align: center;

  .loginbutton input: hover{
    background: #54b357;
  }
  
  .checkbox input{
  font-size: 12px;
  }
  </style>
</html>