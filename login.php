<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
       padding-bottom: 270px;
    }
  }

.carousel-caption {
      
       margin-bottom: 270px;
    }

   



  .yellow-bg {
    background: #ffca08;


}







/*search box css start here*/
.search-sec{
    padding: 5rem;
        margin-top: -171px;
}
.search-slt{
    display: block;
    width: 100%;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #55595c;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
.wrn-btn{
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    text-transform: capitalize;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
@media (min-width: 992px){
    .search-sec{
        position: relative;
        top: 0px;
        z-index: 7;
        background: rgba(26, 70, 104, 0.51);
    }
}

@media (max-width: 992px){
    .search-sec{
        background: #1A4668;
    }
}



.navbar-inverse{
  background-color: #2222229e;
}

.carousel-caption h3{
  font-size: 40px;
}

.carousel-caption p{
  font-size: 20px;
}

.input-group input {
  height: 30px;
  width: 165%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}

  </style>
</head>
<body style="background-image: url(images/local.jpg);">

<nav class="navbar navbar-inverse"  style="position: sticky; top:0; z-index:8; height: 80px; ">
  <div class="container-fluid" style="    padding-top: 6px;">
    <div class="navbar-header" style="margin-top: -16px; height: 85px;">
      <img src="images/logo3.png" alt="Quickjob-logo" title="QuickJob"/>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="float: right; padding-top: 17px;">
      <ul class="nav navbar-nav">
        <li><a href="index2.php">HOME</a></li>
        <li><a href="services.php">SERVICES</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><span style="font-size: 30px;color: #9d9d9d;">&#124;</span></li>
        <li class="active"> <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
        
  </ul>
    </div>
  </div>
</nav>





  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>