<head>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<script src="https://use.fontawesome.com/20ab91acc4.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
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
<section id="contact">

  <h1 class="section-header" style="color: black;">CONTACT</h1>
  <p style="text-align: center; margin-bottom: 50px;">SupplyNeighbor is here to help. We look forward to hearing from you!</p>

  <div class="contact-wrapper">

      <!----------------

      CONTACT PAGE LEFT

      ----------------->

    <form class="form-horizontal" role="form" method="POST" action="mailto:supplyneighbor@gmail.com">

      <div class="form-group">
        <div class="name1">
          <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="">
        </div>
      </div>

      <div class="form-group">
        <div class="email1">
          <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="">
        </div>
      </div>

      <textarea class="text1" rows="15" placeholder="MESSAGE" name="message"></textarea>

        <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
        <div class="button">
          <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
        </div>

      </button>

    </form>
      <div class="direct-contact-container">

        <ul class="contact-list">
          <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Valencia | CA</span></i></li>

          <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-661-645-8495" title="Give me a call">661-645-8495</a></span></i></li>

          <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:supplyneighbor@gmail.com" title="Send me an email">supplyneighbor@gmail.com</a></span></i></li>

        </ul>

        <hr>
        <ul class="social-media-list">
          <a href="https://www.youtube.com/channel/UCzEA6lqUJQOJNtRzFqJqRQg?" target="_blank" class="contact-icon">
          <li>
            <i class="fa fa-youtube" aria-hidden="true"></i>
          </li>
          </a>
          <a href="https://twitter.com/supplyneighbor" target="_blank" class="contact-icon">
          <li>
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </li>
          </a>
          <a href="https://www.instagram.com/supplyneighbor/" target="_blank" class="contact-icon">
          <li>
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </li>
          </a>
          <a href="https://www.facebook.com/supplyneighborcommunity" target="_blank" class="contact-icon">
          <li>
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </li>
          </a>
        </ul>
        <hr>

        <div class="copyright">&copy; ALL RIGHTS RESERVED</div>

      </div>

  </div>

</section>
</body>
<style>
html {
width: 100%;
height: 100%;
clip: auto;
position: absolute;
overflow-x: hidden;
}


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
  left: 56%;
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


#contact {
  width: 100%;
  height: 100vh;
  background-color: #dee0e3;;
  overflow: hidden;
  padding-bottom: 200px;
}

.section-header {
  text-align: center;
  margin: 0 auto;
  padding-top: 50px;
  margin-bottom: 50px;
  font: 300 60px 'Raleway', sans-serif;
  letter-spacing: 6px;
  color: #fff;
  margin-bottom: 25px;
}

.contact-wrapper {
  margin: 0 auto;
  padding-top: 20px;
  position: relative;
  max-width: 800px;
}

/* Begin Left Contact Page */
.form-horizontal {
  float: left;
  max-width: 400px;
  font-family: 'Raleway';
  font-weight: 400;
  margin-top: 30px;
}

.form-control, textarea {
  max-width: 400px;
  background-color: #e0e0e0;
  color: #fff;
  letter-spacing: 1px;
}

.send-button {
  margin-top: 10px;
  height: 34px;
  width: 95%;
  overflow: hidden;
  transition: all .2s ease-in-out;
  margin-right: 30px;
}

.button i{
  margin-top: 5px;
}
.button {
  width: 400px;
  height: 34px;
  transition: all .2s ease-in-out;
}

.send-text {
  display: block;
  margin-top: 20px;
  font: 400 14px 'Raleway', sans-serif;
  letter-spacing: 2px;
  text-align: center;
}

.button:hover {
  transform: translate3d(0px, -29px, 0px);
  cursor: pointer;
}

/* Begin Right Contact Page */
.direct-contact-container {
  max-width: 400px;
  float: right;
  margin-top: 5px;
}

/* Location, Phone, Email Section */
.contact-list {
  list-style-type: none;
  margin-left: -30px;
  padding-right: 20px;
}

.list-item {
  line-height: 4;
  color: black;
}

.contact-text {
  font: 300 18px 'Raleway', sans-serif;
  letter-spacing: 1.9px;
  color: black;
}

.place {
  margin-left: 62px;
}

.phone {
  margin-left: 56px;
}

.gmail {
  margin-left: 53px;
}

.contact-text a {
  color: black;
  text-decoration: none;
  transition-duration: 0.2s;
}

.contact-text a:hover {
  color: #fff;
  text-decoration: none;
}


/* Social Media Icons */
.social-media-list {
  position: relative;
  font-size: 2.3rem;
  text-align: center;
  width: 100%;
}

.social-media-list li a {
  color: #fff;
}

.social-media-list i{
  margin-top: 15px;
}

.social-media-list li {
  position: relative;
  top: 0;
  left: -20px;
  display: inline-block;
  height: 70px;
  width: 70px;
  margin: 10px auto;
  line-height: 70px;
  border-radius: 50%;
  color: #fff;
  background-color: #444444;
  cursor: pointer;
  transition: all .2s ease-in-out;
}

.social-media-list li:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 70px;
  height: 70px;
  line-height: 70px;
  border-radius: 50%;
  opacity: 0;
  box-shadow: 0 0 0 1px #fff;
  transition: all .2s ease-in-out;
}

.social-media-list li:hover {
  background-color: black;
}

.social-media-list li:hover:after {
  opacity: 1;
  transform: scale(1.12);
  transition-timing-function: cubic-bezier(0.37,0.74,0.15,1.65);
}

.social-media-list li:hover a {
  color: black;
}

.copyright {
  font: 200 14px 'Raleway', sans-serif;
  color: black;
  letter-spacing: 1px;
  text-align: center;
}

hr {
  border-color: black ;
}

/* Begin Media Queries*/
@media screen and (max-width: 760px) {
    #contact {
        height: 1000px;
    }
  .section-header {
    font-size: 65px;
  }
  .direct-contact-container, .form-horizontal {
    float: none;
    margin: 10px auto;
  }
  .direct-contact-container {
    margin-top: 60px;
    max-width: 300px;
  }
  .social-media-list li {
    height: 60px;
    width: 60px;
    line-height: 60px;
  }
  .social-media-list li:after {
    width: 60px;
    height: 60px;
    line-height: 60px;
  }
}

@media screen and (max-width: 569px) {
  #contact {
    height: 1200px;
    }
  .section-header{
    font-size: 50px;
  }
  .direct-contact-container, .form-wrapper {
    float: none;
    margin: 0 auto;
  }
  .form-control, textarea {
    max-width: 340px;
    margin: 0 auto;
  }

  .name, .email, textarea {
    width: 280px;
  }
  .direct-contact-container {
    margin-top: 60px;
    max-width: 280px;
  }
  .social-media-list {
    left: 0;
  }
  .social-media-list li {
    height: 55px;
    width: 55px;
    line-height: 55px;
    font-size: 2rem;
  }
  .social-media-list li:after {
    width: 55px;
    height: 55px;
    line-height: 55px;
  }

}

@media screen and (max-width: 410px) {
  .send-button {
    width: 99%;
  }
}

.name1 input{
  width: 95%;
  height: 5%;
  border-radius: 15px;
  margin-bottom: 5%;
  color: black;
  background: white;
}

.name1 input[type=text]{
  padding: 12px 10px;
  font-size: 15px;
}

.email1 input{
  width: 95%;
  height: 5%;
  border-radius: 15px;
  margin-bottom: 5%;
  color: black;
  background: white;
}

.email1 input[type=email]{
  padding: 12px 10px;
  font-size: 15px;
}

textarea{
  width: 95%;
  height: 30%;
  border-radius: 15px;
  color: black;
  background: white;
}

.text1 {
  padding: 12px 10px;
  font-size: 15px;
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
  right: 36%;
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

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown-content2 a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown2:hover .dropdown-content2 {
  display: block;
}
</style>
