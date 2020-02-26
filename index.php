<!doctype html>
<?php
  include_once('connection.php');

  if(isset($_POST['submit']))
  {
    $user=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $passlen=strlen($pass);
    $query="SELECT * FROM newsletter where EMAIL='$email'";
    $result = mysql_query($query);
    if(empty($user))
    {
      $msg="enter your name";
    }
    else if(empty($email))
    {
      $msg="enter your email";
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
	      $msg="please enter a valid email ";
    }

    else if(empty($pass))
    {
      $msg="choose a password";
    }
    else if($passlen < 8)
    {
      $msg="password should be atleast 8 character long";
    }
    else if(mysql_num_rows($result)>0)
    {
      $msg="This email id already exists";
    }
    else {
    mysql_query("insert into newsletter(NAME,EMAIL,PASSWORD) VALUES ('$user','$email','$pass')");

    }
  }
?>
<html lang="en_US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Website for the hotel plaza">
      <meta name="keywords" content="HTML,CSS,jquery,JavaScript">
       <meta name="author" content="Shipra Agarwal">
       <title>HOTEL PLAZA</title>

       <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="style.css">
       <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
       <script src="js/bootstrap.min.js"></script>
       <script src="js/jquery.min.js"></script>
       <link href="https://fonts.googleapis.com/css?family=Mogra" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Rakkas" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
   </head>
   <body>
     <div class="container-fluid">
       <div class="row toplogo">

         <div class="col-sm-12"><img src="images/logo1.png" class="logoimg"/></div>

       </div>
        <div class="row" height="900px">
           <div class="col-sm-12 content">
             <nav class="navbar navbar-inverse" style="border:none">
               <ul class="nav navbar-nav" style="width:55%;left:31%">
                 <li><a href="index.php">HOME</a></li>
                  <li><a href="hotel.php">HOTEL</a></li>
                  <li><a href="#">RESORT</a></li>
                  <li><a href="#">RESTAURANT</a></li>

                  <li><a href="#contact">CONTACT</a></li>
               </ul>
             </nav>
               <div class="logo row">
                 <h1 class="col-sm-11" style="  margin-top:-20px;">HOTEL <span>PLAZA<span></h1>
                   <div class="col-sm-1"></div>
              </div>
              <div class="row tagline" style="top:5%;">
                 <p class="col-sm-12">Stay Like Home</p>
              </div>
              <div class="row gallery" style="  top:5%;">
                <!--<div class="col-sm-2"></div>-->
                <div class="col-sm-12 menu " id="top">
                  <img src="images/hotel3.jpg" alt="hotel image" class="mySlides" id="image">
                  <img src="images/hotel2.jpg" alt="hotel image" class="mySlides" id="image">
                  <img src="images/resort1.jpg" alt="hotel image" class="mySlides" id="image">
                  <img src="images/resort3.jpg" alt="hotel image" class="mySlides" id="image">
                  <img src="images/restaurent.jpg" alt="hotel image" class="mySlides" id="image">
                  <img src="images/restaurent2.jpg" alt="hotel image" class="mySlides" id="image">

                </div>
                <!--<div class="col-sm-1"></div>-->
              </div>
              <div class="row offersection" style="top:6%;">
                 <div class="col-sm-12"><h3 style="font-size:220%">FEATURED OFFERS</h3></div>
              </div>

              <div class="row offercontent" style="top:6%;">
                 <div class="col-sm-2 col-xs-4"><img src="images/offer1.jpg" class="offerimg1 img-responsive"></br><a href="#" style="color:white">Book Early and Stay Late</a></div>
                 <div class="col-sm-2 col-xs-4"><img src="images/offer4.jpg" class="offerimg2 img-responsive"></br><a href="#" style="color:white;position:relative;left:0">Packages</a></div>
                 <div class="col-sm-2 col-xs-4"><img src="images/offer5.jpg" class="offerimg3 img-responsive"></br><a href="#" style="color:white;position:relative;left:0;">Gold Membership</a></div>
                 <div class="col-sm-6 col-xs-2"><h3 class="servicehead">Our Services</h3>
                  <div class="servicetext">
                    We provide the customers beautiful bedrooms , stunning resorts and amazing restaurants.
                    customers get best of the hotel and reception staff. Our hotel has unique services, staff and WiFi throughout the hotel.
                  </div>


                 </div>
              </div>
           </div>

        </div>
        <div class="row contactsection" id="contact">
            <div class="col-sm-1"></div>
            <div class="col-sm-4">
                <h3 class="contacthead text-center">Sign Up for our Newsletter</h3>
                <h5 class="subhead text-center">Daily News and Best Deals</h5>
              <form method="post" action="">
              </br></br><input type="text" name="name" placeholder="Full Name" class="form-control" style="background:transparent;border:1px solid white;color:white">
            </br></br><input type="text" name="email" placeholder="Email" class="form-control" style="background:transparent;border:1px solid white;color:white">
          </br></br><input type="password" name="pass" placeholder="Password" class="form-control" style="background:transparent;border:1px solid white;color:white">
        </br></br><input type="submit" name="submit" value="SEND" class="form-control" style="background:transparent;border:1px solid #fc9e5a;color:white;font-weight:bold">
      <p style="color:red">
        <?php
           if(isset($msg))
           {
             echo $msg;
           }
        ?>
    </p>
      </form></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-4">
               <h3 class="contacthead text-center">Contact With Us</h3></br></br>
               <h5 class="contacthead text-left"><span style="color: #fc9e5a">Phone:</span> <font size="4px">(+91)7345829037</font></h5>
               <h5 class="contacthead text-left"><span style="color: #fc9e5a">Email:</span> <font size="4px">info@hotelplaza.com</font></h5>
               <h5 class="contacthead text-left"><span style="color: #fc9e5a">Address:</span> <font size="4px">1F/2A Thornhil Road,Allahabd UP</font></h5>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.412499165811!2d81.85302411426964!3d25.4578980273231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399acaa2d335862f%3A0x386171c63acc815c!2s1%2C+Thornhill+Rd%2C+Darbhanga+Colony%2C+George+Town%2C+Allahabad%2C+Uttar+Pradesh+211002!5e0!3m2!1sen!2sin!4v1498551925897"  height="175px" frameborder="0" class="map" allowfullscreen></iframe>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <footer class="row last">
            <div class="col-sm-12">
               <h5 class="text-center" style="color:white">2017 Hotel Plaza : All rights are reserved | Design by: <font color="#fc9e5a">Shipra Agarawal</font></h5>
            </div>
        </footer>

     </div>
     <script>
       var slideIndex = 0;
    carousel();
    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        setTimeout(carousel, 3000); // Change image every 2 seconds
    }
   </script>
   </body>
</html>
