<!DOCTYPE html>
<html lang="en">
<head>
  <title>QuickQuick </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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

/* end search css  */


/* nav and slider  */

.navbar-inverse{
  background-color: #2222229e;
}

.carousel-caption h3{
  font-size: 40px;
}

.carousel-caption p{
  font-size: 20px;
}

/* end */








/* see all sertvices */
.white-bg {
    background: #fff;
}

.Services, .feature-area, .testmonial, .area-served, .content-section {
    position: relative;
    z-index: 2;
    padding: 60px 0px;
}

.yellow-text {
    color: #ffca08;
}

.Services h2, .feature-area h2, .how-it-works h2,  .testmonial h2, .deal-right-slide h2, .offer-right h2, .tab-pane h2, .modal-content h2, .head-style {
    font-family: "bebas_neueregular";
    font-size: 60px;
    margin-top: 0px;
}

.Services-lead {
    padding-left: 60px;
}

.Services-dot {
    padding: 0px;
    margin: 0px;
}

.Services-dot li {
    margin-top: 20px;
    list-style: none;
    display: inline-block;
    width: 15px;
    height: 15px;
    background: #ffca08;
    margin-right: 10px;
    border-radius: 50%;
}


.list-group-item {
    border: none !important;
}


.list-group-item a, .cbp-rfgrid li a {
    min-height: 120px;
    display: block;
}

a {
    -webkit-transition: all .2s ease;
    -moz-transition: all .2s ease;
    -ms-transition: all .2s ease;
    -o-transition: all .2s ease;
    transition: all .2s ease;
    outline: 0;
}

.list-group-item IMG {
    max-width: 50%;
}

IMG.displayed {
    margin-left: auto;
    margin-right: auto;
    display: block;
    margin: 0 auto;
}

.list-group-item h4 {
    font-weight: 400;
    font-size: 14px;
}

.list-group {
    padding-left: 0;
    margin-bottom: 20px;
}
/* end */






/* Testimonial slider */
.Services   {
    position: relative;
    z-index: 2;
    padding: 60px 0px;
}

.testmonial {
    background: #fff;
}

#fade-quote-carousel.carousel {
    padding-bottom: 60px;
}

#fade-quote-carousel.carousel .carousel-indicators {
    bottom: 10px;
}

#fade-quote-carousel.carousel .carousel-indicators > li {
    background-color: #ffca08;
    border: none;
}



#fade-quote-carousel blockquote {
    border: none;
}

#fade-quote-carousel.carousel .carousel-inner .item {
    opacity: 0;
    -webkit-transition-property: opacity;
    -ms-transition-property: opacity;
    transition-property: opacity;
}


#fade-quote-carousel.carousel .carousel-inner .active {
    opacity: 1;
    -webkit-transition-property: opacity;
    -ms-transition-property: opacity;
    transition-property: opacity;
}
/* ends */





  </style>
</head>
<body>

<nav class="navbar navbar-inverse"  style="position: sticky; top:0; z-index:8; height: 80px; ">
  <div class="container-fluid" style="    padding-top: 6px;">
    <div class="navbar-header" style="margin-top: -16px; height: 85px;">
      <img src="images/logo3.png" alt="Quickjob-logo" title="QuickJob" "/>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="float: right; padding-top: 17px;">
      <ul class="nav navbar-nav">
        <li><a href="index2.php">HOME</a></li>
        <li><a href="services.php">SERVICES</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li class="active"><a href="about.php">ABOUT</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><span style="font-size: 30px;color: #9d9d9d;">&#124;</span></li>
        <li > <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
        
  </ul>
    </div>
  </div>
</nav>


  


<div class="container" style=" position: relative;text-align: center;color: white; width: 100% ; padding-right: 0px;padding-left: 0px;">
  <img src="images/banner.jpg" alt="Snow" style="width:100%; height: 250px;">
  
  <div class="centered" style="position: absolute;top: 60%;left: 50%;transform: translate(-50%, -50%);">
    <h1 style="text-transform: uppercase; font-weight: 800;">A<span style="padding-top: 10px;color: yellow;">BOUT U</span>S</h1>
    <p> <u style="color: yellow;">   _______________   </u>  </p>
 </div>
</div>









<!--Services Start-->
<section class="Services white-bg">
  <div class="container" style="border-top: 1px solid #424242;">
    <div class="row">
      <div class="col-sm-5"><span class="text-uppercase yellow-text">Most popular</span>
        <h2>SERVICES</h2>
        <p class="Services-lead">Joboy brings the best of Home Maintenance and repair, Utility, Lifestyle, Health, Beauty services and local shopping to the customer, right where they are, all through a single application.</p>
        <ul class="Services-dot">
          <li></li>
          <li></li>
          <li></li>
        </ul>
        <div class="text-center" style="margin-top:20px;"> <a href="service" class="btn btn-default"  style="border-radius: 40px;padding-left: 40px;padding-right: 40px; padding-top: 10px;padding-bottom: 10px;     background-color: #ffca08;">See All Services</a> </div>
      </div>
      <div class="col-sm-7">
        <ul class="list-group">
                         <li class="list-group-item col-xs-6 col-sm-3 text-center">
               

               <a href='https://joboy.in/service/rate/general-ac-service-kochi'>
               <img src='https://joboy.in/category_icon/d94d4df56de7ac495b6b0b071d3f1d3b.png' class="displayed img-responsive"  alt=""/>
               <h4>AC SERVICE</h4>
               </a>
               </li>




                         <li class="list-group-item col-xs-6 col-sm-3 text-center">
               

               <a href='https://joboy.in/service/rate/chair-cleaning-in-cochin '>
               <img src='https://joboy.in/category_icon/640c5b372c2508197bd3ff9c71de87d7.png' class="displayed img-responsive"  alt=""/>
               <h4>CHAIR CLEANING</h4>
               </a>
               </li>




                         <li class="list-group-item col-xs-6 col-sm-3 text-center">
               

               <a href='https://joboy.in/service/rate/electrician-in-kochi'>
               <img src='https://joboy.in/category_icon/b83ef0dddbf38161e3f9560f9d327c7b.png' class="displayed img-responsive"  alt=""/>
               <h4>ELECTRICIAN</h4>
               </a>
               </li>




                         <li class="list-group-item col-xs-6 col-sm-3 text-center">
               

               <a href='https://joboy.in/service/rate/carwash-kochi'>
               <img src='https://joboy.in/category_icon/9940c1ffdaab560adfd01edf153c3b6c.png' class="displayed img-responsive"  alt=""/>
               <h4>CAR WASH</h4>
               </a>
               </li>




          </ul><ul class='list-group'>               <li class="list-group-item col-xs-6 col-sm-3 text-center">
               

               <a href='https://joboy.in/service/rate/plumber-in-kochi'>
               <img src='https://joboy.in/category_icon/d4b0b7b555f3f45567ea47244cdfa08a.png' class="displayed img-responsive"  alt=""/>
               <h4>PLUMBER</h4>
               </a>
               </li>




                         <li class="list-group-item col-xs-6 col-sm-3 text-center">
               

               <a href='https://joboy.in/service/rate/sofa-cleaning-kochi'>
               <img src='https://joboy.in/category_icon/ae56366ed0276fae220cfbb2d815894a.png' class="displayed img-responsive"  alt=""/>
               <h4>SOFA CLEANING</h4>
               </a>
               </li>




                         <li class="list-group-item col-xs-6 col-sm-3 text-center">
               

               <a href='https://joboy.in/service/rate/house-deep-cleaning-kochi'>
               <img src='https://joboy.in/category_icon/c0e76cc4f5a70704019ed2bfa8c3cc39.png' class="displayed img-responsive"  alt=""/>
               <h4>DEEP CLEANING</h4>
               </a>
               </li>




                         <li class="list-group-item col-xs-6 col-sm-3 text-center">
               

               <a href='https://joboy.in/service/rate/washing-service-in-kochi'>
               <img src='https://joboy.in/category_icon/15f37377e6ec3b15bd508fa5b34933bc.png' class="displayed img-responsive"  alt=""/>
               <h4>WASH AND FOLD</h4>
               </a>
               </li>




               
        </ul>
      </div>
    </div>
  </div>
</section>
<!--Services ends--> 







<section class="testmonial" style="background:#eee;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
       
        <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000"> 
          <ol class="carousel-indicators">
            <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
            <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
          
          </ol>
          <div class="carousel-inner">

            <div class="active item" style="text-align: justify;">
             <h3>Why you should use Joboy?</h3>
        
              <blockquote>
                <p>JOBOY brings more than 75 services under one umbrella with a wide network of verified and experienced service professionals, ensuring on-time and quality service delivery.We offer transparent rates, 24x7 service delivery and a upto 60 days service warranty, keeping customer satisfaction as the baseline for each of our services. We give you the liberty to book services on the go in 30 seconds that enables you to book a service wherever you are, in a theatre, while shopping, in the metro, or in your office. Our product management and analytics team work towards bringing best experience to end users in terms of easy and fast service booking, minimum service delivery time, while ensuring your safety. </p>

<p>The PCI-DSS compliant JOBOY Platform provides the user with convenience to make utility bill payments, broadband and cable TV bills, school fees, local event bookings, joining hands with the payment digitalization attempts of our nation. JOBOY currently offers multiple payment options for services and shopping, such as Paytm Wallet, Citrus Wallet, Credit/Debit Card, Net-banking, Unified Payment Interface (UPI) and Cash on Delivery. 

              </p>
              </blockquote>
             
            </div>

            <div class="item" style="text-align: justify;">
            <h3>JOBOY Store</h3>
              <blockquote>
                <p>Our integrated online store provides homemade products, customised clothings from branded boutiques, and genuine leather products, and much more. It is a unique attempt to promote locally available brands to reach more customers via the JOBOY platform.</p>

                <p>With our in-house delivery service JOBOY Express Delivery, all our merchants can deliver online orders to customers on the same day and get more business within their city, or in other cities where JOBOY offers services.

              </p>
              </blockquote>
              
            </div>

            <div class="item" style="text-align: justify;">
            <h3>JOBOY Express Delivery</h3>
              <blockquote>
                <p>JOBOY’s in-house delivery framework is designed to ensure on-time pickup and delivery on the JOBOY platform. Services such as on-demand pickup and delivery within city limits, documents and cheque collection, cake delivery, bouquet delivery, and doorstep laundry and drycleaning services, help customers avoid unnecessary trips in city traffic, and leave the transit effort to JOBOY.  Our 24x7 delivery team delights customers with midnight cake/bouquet delivery for their precious occasions, which is quiet unusual in cities like Kochi, Thrissur and Thiruvanathpuram. </p>

                <p>The service has been designed to provide convenient pickup and delivery options to the working population, so that they can book service as per their work schedule, while saving their time for their other priorities</p>
              </blockquote>
           
            </div>

           
          </div>
        </div>
        
        
      </div>
      
    </div>
  </div>
 
</section>









<section class="area-served" style="background-color: #ffca08; height: 190px;">
  <div class="container">
    <div class="col-sm-4">
      <h2 style="font-family: bebas_neueregular; font-size: 47px; margin-top: 70px;">AREAS <span style="color: #fff">SERVED</span></h2>
    </div>
    <div class="col-sm-8">
      <div class="content">
        <div class="simple-marquee-container" style="font-size: 15px; margin-top: 67px;">
          <marquee>  PUNJAB     <span style="font-size: 25px"> &#124; </span>
            KOLKATA      <span style="font-size: 25px">&#124;</span>
          BANGLORE      <span style="font-size: 25px"> &#124; </span>
       KERELA     <span style="font-size: 25px"> &#124;</span>
     DELHI    <span style="font-size: 25px"> &#124; </span>
    AGRA    <span style="font-size: 25px"> &#124; </span>
  RAJSTHAN    <span style="font-size: 25px"> &#124; </span>
 PATNA     </marquee>
        </div>
      </div>
    </div>
  </div>
</section>



<div class="container" style=" position: relative;text-align: center;color: white; width: 100% ; padding-right: 0px; padding-left: 0px; ">
  <img src="images/footer-back.jpg" alt="Snow" style="width:100%; ">
  <div class="container" style="background: #ffca08; top:0;">
  <div class="centered" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);  ">
    <h3 style="text-transform: uppercase; font-weight: 800;">Are you a service provider?</h3>
     <p style="margin-top: 50px;">Come and join the QuickQuick Experts Team to offer quality service experience to our customers.</p>
          <br>
          <button type="button" class="btn btn-default" href="#" style="color: #333; background-color: #ffca08;">Join Us</button>
  </div>
 </div>
</div>


 <!--====================================================
                      FOOTER
======================================================--> 
    <footer style="background: #252525; color: rgba(255, 255, 255, 0.4);"> 
        <div id="footer-s1" class="footer-s1">
          <div class="footer">
            <div class="container">
              <div class="row">
                <!-- About Us -->
                <div class="col-md-3 col-sm-6 ">
                  <div><h2>QuickQuick</h2></div>
                  <ul class="list-unstyled comp-desc-f">
                     <li><p>Businessbox is a corporate business theme. You can customize what ever you think to make your website much better from your great ideas. </p></li> 
                  </ul><br> 
                </div>
                <!-- End About Us -->

                <!-- Recent News -->
                <div class="col-md-3 col-sm-6 ">
                  <div class="heading-footer"><h2>Useful Links</h2></div>
                  <ul class="list-unstyled link-list">
                    <li><a href="about.html">HOME </a><i class="fa fa-angle-right"></i></li> 
                    <li><a href="project.html">SERVICES</a><i class="fa fa-angle-right"></i></li> 
                    <li><a href="careers.html">ABOUT</a><i class="fa fa-angle-right"></i></li> 
                    <li><a href="faq.html">FAQ</a><i class="fa fa-angle-right"></i></li> 
                    <li><a href="contact.html">CONTACT</a><i class="fa fa-angle-right"></i></li> 
                  </ul>
                </div>
                <!-- End Recent list -->

                <!-- Recent Blog Entries -->
                <div class="col-md-3 col-sm-6 ">
                  <div class="heading-footer"><h2>Recent Post Entries</h2></div>
                  <ul class="list-unstyled thumb-list">
                    <li>
                      <div class="overflow-h">
                        <a href="#">Praesent ut consectetur diam.</a>
                        <small>02 OCT, 2017</small>
                      </div>
                    </li>
                    <li>
                      <div class="overflow-h">
                        <a href="#">Maecenas pharetra tellus et fringilla.</a>
                        <small>02 OCT, 2017</small>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- End Recent Blog Entries -->

                <!-- Latest Tweets -->
                <div class="col-md-3 col-sm-6">
                  <div class="heading-footer"><h2>Get In Touch</h2></div>
                  <address class="address-details-f">
                    25, Dist town Street, Logn <br>
                    California, US <br>
                    Phone: 800 123 3456 <br>
                    Fax: 800 123 3456 <br>
                    Email: <a href="mailto:info@Businessbox.com" class="">info@Businessbox.com</a>
                  </address>  
                  <ul class="list-inline social-icon-f top-data">
                    <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                    <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                    <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 
                  </ul>
                </div>
                <!-- End Latest Tweets -->
              </div>
            </div><!--/container -->
          </div> 
        </div>

      
    </footer>


<center>
        <div id="footer-bottom" style=" background-color: rgba(0, 0, 0, 0.8); padding: 30px 0; ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="footer-copyrights">
                            <p style="color: rgba(255, 255, 255, 0.4);">Copyrights &copy; 2019 All Rights Reserved by QuickQuick. <a href="term.php">Terms of Services </a> <span style="font-size: 20px">&#124;</span>  <a href="privacy.php">Privacy Policy</a></p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
      </center

</body>
</html>