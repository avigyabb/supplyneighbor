<?php
include('database_connection.php');

session_start();

$message = '';

if(isset($_SESSION['user_id']))
{
 header('location:home.php');
}

if(isset($_POST["login"]))
{
 $query = "
   SELECT * FROM login
    WHERE username = :username
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
    array(
      ':username' => $_POST["username"]
     )
  );
  $count = $statement->rowCount();
  if($count > 0)
 {
  $result = $statement->fetchAll();
    foreach($result as $row)
    {
      if(password_verify($_POST["password"], $row["password"]))
      {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['area_code'] = $row['area_code'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['bio'] = $row['bio'];
        $sub_query = "
        INSERT INTO login_details
        (user_id)
        VALUES ('".$row['user_id']."')
        ";
        $statement = $connect->prepare($sub_query);
        $statement->execute();
        $_SESSION['login_details_id'] = $connect->lastInsertId();
        header("location:home.php");
      }
      else
      {
       $message = "<label>Wrong Password</label>";
      }
    }
 }
 else
 {
  $message = "<label>Wrong Email</label>";
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
   <h3 align="center">Log into Supply Neighbor</a></h3><br />
   <br />
   <div id="login-form-wrap">
   <div class="panel panel-default">
      <h2>Login</h2>
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
          <div class= "loginbutton">
       <input type="submit" name="login" class="btn btn-info" value="Login" />
     </div>
      </p>
      </div>
      <div id="create-account-wrap">
        <p>Not a member? <a href="register.php">Create Account</a><p>
      </div>
     </form>
    </div>
   </div>
  </div>
  </div>
</div>


    </body>
  <style>
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
  	margin: 1% auto;
  	text-align: center;
  	padding:20px 0 0 0;
  	border-radius: 4px;
  	box-shadow: 0px 30px 50px 0px rgba(0, 0, 0, 0.2);
    outline-width: medium;
  }
  #login-form {
  	padding:0 60px;
  }
  input {
  	display: block;
  	box-sizing: border-box;
  	width: 100%;
  	outline: none;
  	height: 60px;
  	line-height: 60px;
  	border-radius: 4px;
  }
  input[type="text"],
  input[type="password"]{
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

  input[type="submit"] {
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
    height: 130%;
    background-size: cover;
  }

  h3{
    color: white;
  }

  .loginbutton input{
    background: #5abf5d;
  }

  .loginbutton input:hover{
    background: #54b357;
  }
  </style>
</html>