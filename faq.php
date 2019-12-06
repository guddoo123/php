<!DOCTYPE html>
<html lang="en">
<head>
  <title>QuickJob.com </title>
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
        <li ><a href="index2.php">HOME</a></li>
        <li ><a href="services.php">SERVICES</a></li>
        <li class="active"><a href="faq.php">FAQ</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><span style="font-size: 30px;color: #9d9d9d;">&#124;</span></li>
        <li> <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
        
  </ul>
    </div>
  </div>
</nav>


  


<div class="container" style=" position: relative;text-align: center;color: white; width: 100% ; padding-right: 0px;padding-left: 0px;">
  <img src="images/banner.jpg" alt="Snow" style="width:100%; height: 250px;">
  
  <div class="centered" style="position: absolute;top: 60%;left: 50%;transform: translate(-50%, -50%);">
    <h1 style="text-transform: uppercase; font-weight: 800;"><span style="padding-top: 10px;color: yellow;">FAQ</span></h1>
    <p> <u style="color: yellow;">   _______________   </u>  </p>
 </div>
</div>


<main class="main-wapper" >

<section class="content-section white-bg" style="margin-top: 70px; margin-bottom: 30px;">
  <div class="container">
  
  <div class="clearfix"></div>
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
          1. How can I reach QuickJob.com? 
        </a>
      </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
        <div class="panel-body">
         <p> <p>You can reach us through QuickJob.com platforms (Website and mobile) anytime, send us an email on help@QuickJob.in,&nbsp;or call us at +91-86 0662 2277 for queries, job requests, job reschedule, and feedback.&nbsp;</p>

<p>We suggest you to use QuickJob.com app for all types communication. We have enabled&nbsp;all possible options to serve you better.&nbsp;&nbsp;&nbsp;</p>

<p>&nbsp;</p>
 </p>
        </div>
      </div>
    </div>
  
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
          2. I don’t have an account in QuickJob.com. Can I still request a job? 
        </a>
      </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
        <div class="panel-body">
         <p> <p>QuickJob.com prefers to serve the registered customers. We suggest you to register in QuickJob.com which will help us to reduce the fake job requests and to make available the offers that suit your requirements. &nbsp;The information gathered during registration enables us to serve you on time. This is also to ensure safety and security of both customers and service providers.&nbsp;</p>
 </p>
        </div>
      </div>
    </div>
  
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
          3. What’s the time limit for cancellation and rescheduling of service request? 
        </a>
      </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
        <div class="panel-body">
         <p> <p>You can cancel or reschedule the job anytime through QuickJob.com platforms (website/mobile application/customer care number). You are allowed to cancel/reschedule the requests before 30 minutes (in case of scheduled service) of the scheduled time and before 10 minutes in case of on-time job without cancellation/inconvenience&nbsp;fee.&nbsp;</p>
 </p>
        </div>
      </div>
    </div>
  
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
          4. How do I ensure the credibility of service provider?  
        </a>
      </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
        <div class="panel-body">
         <p> <p>QuickJob.com assures your safety and security while deliver the service at your place. We have the group of most trusted service providers from your city to deliver the service,&nbsp;each service partner is on-boarded after strict background verification (Criminal and behavioral) by our team. Photo of service expert assigned to deliver the job will be available in the application, please check &#39;<strong>Order History</strong>&#39; page.&nbsp;</p>

<p>If you feel any concern regarding the assigned service provider, please contact us immediately, you can use the &#39;<strong>Call Us</strong>&#39; button on the side bar.&nbsp;</p>
 </p>
        </div>
      </div>
    </div>
  
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
          5. How to escalate my concerns/complaints? 
        </a>
      </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
        <div class="panel-body">
         <p> <p>You can raise your concerns/complaints through our platforms (Website and mobile) &nbsp;in the order history page or mail us via help@QuickJob.in. We will respond to your queries/concerns/complaints within 24 hours via mail/call. For refund/cancellation related queries, read our &lsquo;Cancellation/Refund Policy&rsquo;.</p>
 </p>
        </div>
      </div>
    </div>
  
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
          6. How do I pay the service provider? 
        </a>
      </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
        <div class="panel-body">
         <p> <p>You can pay the service provider either by cash or&nbsp;online payment options (Paytm, Citrus, Net-banking, Debit/Credit card). You can select the payment mode while book the service. You will&nbsp;receive the detailed invoice in your registered email id on completion of job. Invoice will also be available in the &quot;<strong>My Receipts</strong>&quot; page of&nbsp;application/website. Refund is applicable only on online payments.&nbsp;</p>
 </p>
        </div>
      </div>
    </div>
  
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
          7. Is my personal information safe with QuickJob.com? 
        </a>
      </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
        <div class="panel-body">
         <p> <p>Yes. Your information is secure with QuickJob.com. We do not share your personal information with third party and only selected QuickJob.com members can access the customer information. For further details, read &lsquo;QuickJob.com Privacy Policy&rsquo;.</p>
 </p>
        </div>
      </div>
    </div>
  
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
          8. How can I register and work as a QuickJob.com? 
        </a>
      </h4>
      </div>
      <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
        <div class="panel-body">
         <p> <p>You can register in&nbsp;QuickJob.com platform (Web/mobile app) or contact us at +91 86 0662 2277| +91 484 650 2277 (Service provider support number). QuickJob.com Expert Support team will contact you for documentation on registration completion.You can&nbsp;download our QuickJob.com Expert App from &nbsp;and register with your service area and skills.&nbsp;</p>

<p>Please share your ID card, address proof and two passport size photos for verification procedure. You will receive your username and password on your registered mobile number after successful completion of background verification. You can sign in to the application and join our QuickJob.com Expert team.&nbsp;</p>

<p>&nbsp;</p>
 </p>
        </div>
      </div>
    </div>
  
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
          9. What should I do if my account gets deducted and payment not reflected in my QuickJob.com profile? 
        </a>
      </h4>
      </div>
      <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
        <div class="panel-body">
         <p> <p>If the money gets deducted from the user&nbsp;account and the payment is not reflected in the application, you are requested to contact the QuickJob.com customer care support at +91 86 0662 2277 or mail at help@QuickJob.in. Your payment will be reflected within 48 hours if the transaction is successfull at the payment gateway service provider side. If your payment status&nbsp;is not updated in the given time frame, please contact the bank for further enqueries,&nbsp;QuickJob.com does&nbsp;not take responsibility technical issue at bank end and on such cases payment will reflect in your bank account as per Bank&#39;s TAT. &nbsp;</p>
 </p>
        </div>
      </div>
    </div>
  
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
          10. How to redeem the deals? Is there any charge associated with deal? 
        </a>
      </h4>
      </div>
      <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
        <div class="panel-body">
         <p> <p>QuickJob.com offers free deals to users as part of loaylty campaign. This deals must be redeemed within specified timeframe at partner shops, deals can be availed on terms and conditions given. Users must show the deals active at the merchant counter before availing service. You can contact QuickJob.com customer care (+91 9115511928) for in case you face any problem in availing deals or redeeming deals at merchant locations.&nbsp;</p>
 </p>
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
     <p style="margin-top: 50px;">Come and join the QuickJob.com Experts Team to offer quality service experience to our customers.</p>
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
                  <div><h2>QuickJob.com</h2></div>
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
                            <p style="color: rgba(255, 255, 255, 0.4);">Copyrights &copy; 2019 All Rights Reserved by QuickJob.com. <a href="term.php">Terms of Services </a> <span style="font-size: 20px">&#124;</span>  <a href="privacy.php">Privacy Policy</a></p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
      </center

</body>
</html>