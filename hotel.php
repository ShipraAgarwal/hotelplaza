<!doctype html>
<html>
   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="Website for the hotel plaza-book rooms">
     <meta name="keywords" content="HTML,CSS,jquery,JavaScript">
      <meta name="author" content="Shipra Agarwal">
      <title>HOTEL PLAZA</title>
      <link rel="stylesheet" type="text/css" href="style1.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   </head>
   <body>
      <div class="container-fluid">
        <div class="row logo">
           <div class="col-sm-12"><img src="images/logo1.png" class="logoimg"/></div>
        </div>
        <div class="row">
           <div class="col-sm-12 content">
             <nav class="navbar navbar-inverse row" style="border:none">
               <ul class="nav navbar-nav col-sm-12" style="width:55%;left:33%;">
                 <li><a href="index.php">HOME</a></li>
                  <li><a href=hotel.php>HOTEL</a></li>
                  <li><a href="#">RESORT</a></li>
                  <li><a href="#">RESTAURANT</a></li>

                  <li><a href="index.php">CONTACT</a></li>
               </ul>
             </nav>
             <div class="row" id="top">
               <div class="col-sm-12 menu welcome" id="wel">
                  <h3 style="color:white;">Welcome to HOTEL PLAZA</h3>
                  <p style="color:white;">Hotel Plaza is a grand family residence situated right in the UP, INDIA.
                    Our boutique hotel blends tradition and inventiveness with the timeless art of hospitality,
                    offering a discreet address for people who insist on the finer things in life, on quiet elegance
                     and effortlessly generous service.Here, every gesture and every consideration recognises you as
                      a truly special guest and indeed, an eminent member of the family.</br>This is PLAZA….and a truly
                      grand family residence.We also have a beautiful and stunning Resort and an amazing restuarant too.
                    </p>
               </div>
             </div>
             <div class="row availability">
                 <div class="col-sm-3 wrap text-center"><h4 style="font-size:200%;font-weight:bold;">CHECK AVAILABILITY</h4></div>
                 <div class="col-sm-1"></div>
                 <div class="col-sm-2 one"><h5 style="color:white;font-size:150%;margin-top:20%;">ROOM TYPE</h5>
                     <input type="text" name="" placeholder="Select a room type" class="form-control"></input></div>
                 <div class="col-sm-2 two"><h5 style="color:white;font-size:150%;margin-top:20%;">ARRIVAL DATE</h5>
                     <input type="text" name="" placeholder="Select date" class="form-control"></input></div>
                 <div class="col-sm-2 three"><h5 style="color:white;font-size:150%;margin-top:20%;">DEPARTURE DATE</h5>
                     <input type="text" name="" placeholder="Select date" class="form-control"></input></div>
                 <div class="col-sm-2 text-center check"><h4 style="font-size:200%;font-weight: bold;">CHECK</h4></div>

             </div>

           </div>
        </div>
        <div class="row rooms">
           <div class="col-sm-4 singleroom">
              <img src="images/single.jpg" alt="" class="img-responsive">
              <p class="head">SINGLE ROOMS</p>
              <p style="font-size:20px;">From Rs.5999</p>
              <p style="font-size:18px;">Single Bed</p>
              <p style="font-size:18px;">15m<sup>2</sup></p>
              <i class="fa fa-bath" style="font-size:20px;color:black;"></i>
              <i class="fa fa-phone" style="font-size:20px;color:black;"></i>
              <i class="material-icons" style="font-size:22px;color:black;">wifi</i>
              <a href="book.php" target="_blank"><input type="button" class="form-control book-room" value="BOOK" style="background-color:black;color:white"></a>

           </div>
           <div class="col-sm-4 doubleroom">
             <img src="images/double.jpg" alt="" class="img-responsive">
             <p class="head">DOUBLE ROOMS</p>
             <p style="font-size:20px;">From Rs.9999</p>
             <p style="font-size:18px;">Queen-Size Bed</p>
             <p style="font-size:18px;">25m<sup>2</sup></p>
             <i class="fa fa-bath" style="font-size:20px;color:black;"></i>
             <i class="fa fa-phone" style="font-size:20px;color:black;"></i>
             <i class="material-icons" style="font-size:22px;color:black;">wifi</i>
             <i class="material-icons" style="font-size:22px;color:black;">tv</i>
             <a href="book.php" target="_blank"><input type="button" class="form-control book-room" value="BOOK" style="background-color:black;color:white"></a>
           </div>
           <div class="col-sm-4 deluxroom">
             <img src="images/delux.jpg" alt="" class="img-responsive">
             <p class="head">DELUX ROOMS</p>
             <p style="font-size:20px;">From Rs.19999</p>
             <p style="font-size:18px;">King-Size Bed</p>
             <p style="font-size:18px;">40m<sup>2</sup></p>
             <i class="fa fa-bath" style="font-size:20px;color:black;"></i>
             <i class="fa fa-phone" style="font-size:20px;color:black;"></i>
             <i class="material-icons" style="font-size:22px;color:black;">wifi</i>
             <i class="material-icons" style="font-size:22px;color:black;">tv</i>
             <i class="material-icons" style="font-size:22px;color:black;">restaurant</i>
             <i class="	fa fa-glass" style="font-size:20px;color:black;"></i>
             <a href="book.php" target="_blank"><input type="button" class="form-control book-room" value="BOOK" style="background-color:black;color:white"></a>
           </div>
        </div>
        <div class="row aboutcontainer">
           <div class="col-sm-3"></div>
           <div class="col-sm-6">
                <h3 class="text-center">ABOUT OUR ROOMS</h3>
                <p class="text-left">
                   Make yourself at home is our slogan. We provide the best beds and an amazing staff.
                   You will be served by the best room services.There's a stunning washroom attached with the rooms.
                </p>
               <p>
                  You will be provided by a high speed free wifi and throughout the hotel including your rooms. Our
                  hotel is completely air-conditioned.
               </p>
           </div>
           <div class="col-sm-3"></div>
        </div>
        <footer class="row last">
            <div class="col-sm-12">
               <h5 class="text-center" style="color:white">2017 Hotel Plaza : All rights are reserved | Design by: <font color="#fc9e5a">Shipra Agarawal</font></h5>
            </div>
        </footer>
      </div>

   </body>
</html>
