<!DOCTYPE html>
<html>
<head>
	<title>Application form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style2.css"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script language="javascript" src="js/list.js"></script>
    <script language="javascript" src="js/country.js"></script>
    <script src="js/jquery.min.js"></script>


<style type="text/css">
    row3 select{
        width: 249px;
    }
</style>

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
     .navbar-inverse .navbar-nav>li>a {
    color: #dedee6;
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
<body onload="fillCategory();" >
<?php
    //Include database configuration file
    include('config.php');
    
    //Get all country data
    $query = "SELECT * FROM countries  ORDER BY country_name ASC";
    $run_query = mysqli_query($con, $query);
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    ?>


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
</nav>

<form action="spserver.php" class="register" name="drop_list" method="post" enctype="multipart/form-data" >
            <h1>Registration</h1>
            <fieldset class="row2">
                <legend>Personal Details
                </legend>
                <p>
                    <label>Name *
                    </label>
                    <input type="text" name="name" class="long" required="" />
                </p>
                <p>
                    <label>Phone *
                    </label>
                    <input type="text" name="phone" style="width: 128px;" maxlength="10" required="" />
                </p>
               <p>
                    <label>Email *
                    </label>
                    <input type="text" name="email" class="long" required="" />
                </p>
                <p class="row3">
                    <label>Gender *</label>
                      <select name="gender" required="">
                        <option value="0">
                        </option>
                        <option value="1">Male
                        </option>
                        <option value="2">Female
                        </option>
                        <option value="3">Other
                        </option>
                      </select> 
                </p>
                <p>
                    <label>Date of Birth *</label>
                   
                    <input class="year" name="dob" type="text" style="width: 128px;" maxlength="10" required="" />e.g DD/MM/YYYY
                </p>
                <p>
                    <label>Nationality *
                    </label>
                    <select name="nationality" required="">
                        <option value="0">
                        </option>
                        <option value="1">Indian
                        </option>
                    </select>
                </p>
                <p>
                    <label>Status *
                    </label>
                     <select name="status" required="">
                        <option value="">
                        </option>
                        <option value="1">Married
                        </option>
                        <option value="2">Unmarried
                        </option>
                        <option value="3">Student
                        </option>
                      </select>
                </p>
                
               
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information
                </legend>
                <p>
                    <label>Country *
                    </label>
                    <select name="country" id="country" required="">
                    <option value="">Select Country</option>
                        <?php
                        if($count > 0){
                            while($row = mysqli_fetch_array($run_query)){
                                $country_id=$row['country_id'];
                                $country_name=$row['country_name'];
                                echo "<option value='$country_id'>$country_name</option>";
                            }
                        }else{
                            echo '<option value="">Country not available</option>';
                        }
                        ?>
                    </select>
                </p>
                <p>
                    <label>State *
                    </label>
                     <select name="state" id="state" required="">
                        <option value="">Select country first</option>
                     </select>
                </p>
                <p>
                    <label>City *
                    </label>
                    <select name="city" id="city" required="">
                         <option value="">Select state first</option>
                    </select>
                </p>
                <p>
                    <label>Street *
                    </label>
                    <input type="text" name="street" class="long" required="" />
                </p>
                 <p>
                    <label>Pincode *
                    </label>
                    <input type="text" name="pincode" style="width: 128px;" maxlength="6" required="" />
                </p>
                
               
            </fieldset>





             <fieldset class="row1" >
                <legend>Service  Details
                </legend>
                <p>
                    <label>Service Category *
                    </label>
                    <select style="width: 208px;" name="Category" onChange="SelectSubCat();" required="" >
                        <Option value="">Category</option>
                    </select>
                    <label>Service Subcategory *
                    </label>
                    <select style="width: 208px;" id="SubCat" name="SubCat" required="">
                        <Option value="">SubCat</option>
                    </select>
                </p>
                
            </fieldset>

            <fieldset class="row1">
                <legend>Verification  Details
                </legend>
                <p>
                    <label style="margin-left: -40px;">Upload ID *
                    </label>
                    <select name="verID" required="">
                        <option value="">
                        </option>
                        <option value="1">Aadhaar card
                        </option>
                        <option value="2">Driving Lincense
                        </option>
                        <option value="3">PAN Card
                        </option>
                        <option value="4">Passport
                        </option>
                        <option value="5">Voter ID
                        </option>
                      </select>
                      <input style="margin-left: 70px;" type="file" name="idUpload" id="idUpload" required="" accept="image/x-png,image/gif,image/jpeg"/>
                </p>
                <p>
                    <label>Upload Passport Size Photo *
                    </label>
                    <input style="margin-left: 284px;" type="file" name="photoUpload" id="photoUpload" required="" accept="image/x-png,image/gif,image/jpeg"/>
                </p>
            </fieldset>

            
            
            <fieldset class="row4">
                <legend>Terms and Mailing
                </legend>
                <p class="agreement">
                    <input type="checkbox" value="" required="" />
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
                <p class="agreement">
                    <input type="checkbox" value=""  />
                    <label>I want to receive personalized offers by your site</label>
                </p>
                
            </fieldset>
            <div><button type="submit" class="button" name="sp_register">Register &raquo;</button></div>
</form>
</body>
</html>