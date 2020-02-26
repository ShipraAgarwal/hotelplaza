<?php

  include_once('connection.php');

  if (isset($_POST['submit'])) {
      $user=$_POST['username'];
      $phone=$_POST['phone'];
      $checkin=$_POST['checkin'];
      $roomtype=$_POST['room'];
//echo $roomtype;
      //die();
      $number=$_POST['number'];
      $email=$_POST['email'];
      $country=$_POST['country'];
      $checkout=$_POST['checkout'];
      $adult=$_POST['adult'];
      $child=$_POST['child'];
      $current=date("d/m/y");

      $result = mysql_query("SELECT * FROM availablerooms");


      if(!filter_var($email,FILTER_VALIDATE_EMAIL))
      {
        $error="invalid email id";
      }
      else if($checkin < $current)
      {
        $error="invalid checkin date";
      }

      else if($checkin > $checkout)
      {
        $error="invalid checkout date";
      }
      else if($roomtype=="1")
      {
           $row = mysql_fetch_array($result, MYSQL_ASSOC);
           $storeArray =  $row['SINGLR'];
           if($storeArray < $number)
           {
             $error="only ".$storeArray." single rooms are available";
          }
          else{
            $storeArray=$storeArray - $number;
              mysql_query("UPDATE availablerooms SET SINGLR=$storeArray");
                mysql_query("insert into booking
                (NAME,EMAIL,PHONE,COUNTRY,CHECKIN,CHECKOUT,ROOM,NUMBER,ADULT,CHILD)
                VALUES ('$user','$email','$phone','$country','$checkin','$checkout','$roomtype','$number','$adult','$child')");
          }
        }

      else if($roomtype=="2")
      {
      
           $row = mysql_fetch_array($result, MYSQL_ASSOC);
           $storeArray =  $row['DOUBLEtype'];
           if($storeArray < $number)
           {
             $error="only ".$storeArray." double rooms are available";
          }
          else{
            $storeArray=$storeArray - $number;
              mysql_query("UPDATE availablerooms SET DOUBLEtype=$storeArray");
                mysql_query("insert into booking
                (NAME,EMAIL,PHONE,COUNTRY,CHECKIN,CHECKOUT,ROOM,NUMBER,ADULT,CHILD)
                VALUES ('$user','$email','$phone','$country','$checkin','$checkout','$roomtype','$number','$adult','$child')");
          }
        }

      else if($roomtype=="3")
      {
           $row = mysql_fetch_array($result, MYSQL_ASSOC);
           $storeArray =  $row['DELUX'];
           if($storeArray < $number)
           {
             $error="only ".$storeArray." delux rooms are available";
          }
          else{
            $storeArray=$storeArray - $number;
              mysql_query("UPDATE availablerooms SET DELUX=$storeArray");
                mysql_query("insert into booking
                (NAME,EMAIL,PHONE,COUNTRY,CHECKIN,CHECKOUT,ROOM,NUMBER,ADULT,CHILD)
                VALUES ('$user','$email','$phone','$country','$checkin','$checkout','$roomtype','$number','$adult','$child')");
          }
        }

    }


?>

<html>
   <head>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.min.js"></script>
     <style>
     body{
        background-image: url("images/body.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
     }
     .book{
        margin-top:1%;
        color:#2d2a47;
     }
     .bookform{
       margin:1%;
     }
     </style>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
                dateFormat: "dd/MM/yy",
                changeMonth: true,
                changeYear: true
    });
  } );
  $( function() {
    $( "#datepicker1" ).datepicker({
      dateFormat: "dd/MM/yy",
      changeMonth: true,
      changeYear: true
    });
  } );
  </script>
   </head>
   <body>
      <div class="container-fluid">
         <div class="row book">
           <div class="col-sm-3"></div>
           <div class="col-sm-6 text-center">
              <h1>BOOK A ROOM</h1>
           </div>
           <div class="col-sm-3"></div>
         </div>
         <div class="row">
           <div class="col-sm-3"></div>
           <div class="col-sm-6">
              <img src="images/hotel3.jpg" class="img-responsive" style="border-radius:8px;"/>
           </div>
           <div class="col-sm-3"></div>
         </div>
         <form method="post" action="" class="row bookform">
           <div class="col-sm-3"></div>
           <div class="col-sm-6 text-center">
             <div class="row">
           <div class="col-sm-6 text-center">
              <input type="text" name="username" placeholder="username" class="form-control" required/></br>
              <input type="text" name="phone" placeholder="phone number" class="form-control" required/></br>
              <input type="text" name="checkin" placeholder="check in" class="form-control" id="datepicker" required/></br>
              <div class="row">
                <div class="col-sm-6">
              <select class="form-control" name="room" required>
                 <option value="">Type Of Room</option>
                 <option value="1">Single Room</option>
                 <option value="2">Double Room</option>
                 <option value="3">Delux Room</option>
              </select>
            </div>
            <div class="col-sm-6">
              <select class="form-control" name="number" required>
                 <option value="">No. Of Room</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
                 <option value="6">6</option>
                 <option value="7">7</option>
                 <option value="8">8</option>
                 <option value="9">9</option>
                 <option value="10">10</option>
              </select>
            </div>
           </div>
         </div>
           <div class="col-sm-6 text-center">
              <input type="text" name="email" placeholder="example@gmail.com" class="form-control" required/ required/></br>
              <input type="text" name="country" placeholder="country" class="form-control" required/></br>
              <input type="text" name="checkout" placeholder="checkout" class="form-control" id="datepicker1" required/></br>
              <div class="row">
                <div class="col-sm-6">
              <select class="form-control" name="adult" required>
                 <option value="">Adults</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3 or 3+</option>
              </select>
            </div>
            <div class="col-sm-6">
              <select class="form-control" name="child" required>
                 <option value="">Children</option>
                 <option value="1">0</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3 or 3+</option>
              </select>
            </div>
           </div>
         </div></div>
       </br>
         <div class="row">

           <div class="col-sm-12">
               <input type="submit" name="submit" value="BOOK NOW !" class="form-control" style="background-color:#211e38;color:white">
           </div>

         </div>
           </div>
           <div class="col-sm-3">
             <p style="color:red">
              <?php
                 if(isset($error)){
                   echo $error;
                 }
               ?>
             </p>
           </div>

         </form>
      </div>
   </body>
</html>
