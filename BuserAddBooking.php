<?php 
session_start();

  include("Bconnection.php");
  include("Bfunction.php");

  $user_data = check_login($conn);

?>




<!DOCTYPE html>
<html>
<head>
  <title>booking page</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
<link rel="stylesheet" href="cssfile/signUp.css">
  <style type="text/css">

      body{

      background-image: url("image/inside-the-bus-seats-yellow-travel-wallpaper-preview.jpg");
      background-position: center;
      background-size: cover;
      height: 700px;
      background-repeat: no-repeat;
      background-attachment: fixed;

    }
    .adminTopic{
      text-align: center;
      color: #fff;
      

    }

table
{
    width:99%;
    border-collapse: separate !important;
    margin:auto;
    /*/table-layout:fixed;/*/
    text-align:center;
    margin-top:50px;
    background-color: rgb(255, 255, 255);
    border-radius: 10px 10px 0px 0px;

}
table th
{
    border-bottom:2px solid rgb(187, 187, 187);
    padding:10px 0px 10px 0px;
    font-family: "balsamiq_sansitalic" !important;
}
table tr td
{
    border-right: 2px solid rgb(187, 187, 187);
    height: 58px;
    padding: 22px 0px 0px 0px;
    font-family: "monospace;" !important;
    border-bottom: 2px solid rgb(187, 187, 187);
    font-size: 20px;
}
table tr td a
{
    /*background-color: rgb(255, 196, 0);*/
    color: white;
    border-radius: 5px;
    padding: 6px;
    text-decoration: none;
    margin: 10px;
    font-weight: 700;
}

table tr td button:hover
{

  padding: 5px 5px 5px 5px;
  border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    cursor: pointer;
}
button 
{
    padding: 5px 5px 5px 5x;
}
.btnPolicy{

  padding: 5px 5px 5px 5px;
  border: 2px solid yellow;
    border-radius: 7px;
    background-color: red;
    color: white;
    margin-left: 20px;
}

.btnPolicy:hover{

  background:red;
    padding: 7px 7px 7px 7px;
    cursor: pointer;

}
.idclass{

      width: 100%;
      border-radius: 3px;
      border: 1px solid #9597a6;
      padding: 10px;
      outline: none;
      color: black;

    }
    .form_wrap .input_wrap label{

color: #2eebf9f9;
}

  </style>
</head>
<body>
  <input type="checkbox" id="check">

  <label for="check">
<i class="fa fa-bars" id="btn"></i>
<i class="fa fa-times" id="cancle"></i>


  </label>
  <div class="sidebar">
<header><img src="image/a.png">
<p><?php echo $user_data['username'];?></p>
</header>
<ul>



    <li><a href="BuserviewBus.php">Ticket Booking</a></li>
    <li><a href="Bprofile.php">Profile</a></li>
    <li><a href="Bprint.php">Print</a></li>
    <li><a href="Buserlogout.php">logout</a></li>
    </ul>   
</div>



<div class="sidebar2">


    <h1 class="adminTopic">...Get Your Ticket...</h1>





    

<?php



       


  if(isset($_POST['AddBooking'])){


     $passenger=$_POST['passenger_name'];
     $tel=$_POST['tel'];
     $email=$_POST['email'];
     $board_place=$_POST['board_place'];
     $desti=$_POST['Your_destination'];
     $seat=$_POST['booked_seat'];
    $NO=rand();

    


       if($conn->connect_error)
          {
            die('Connection Failed :'.$conn->connect_error);
          }
          else
          {


              $stmt=$conn->prepare("INSERT INTO booking(passenger_name,telephone,email,boarding_place,Your_destination,booking_id,booked_seat) VALUES(?,?,?,?,?,?,?)");
              //table3 is the table name//

              $stmt->bind_param("ssssssi",$passenger,$tel,$email,$board_place,$desti,$NO,$seat);

              $stmt->execute();
           
                         echo ("<script LANGUAGE='JavaScript'>
                 window.alert('Succesfully added!!! and Your Ticket no is $NO');
                 window.location.href='BuserAddPay.php';
                 </script>");
              
              $stmt->close();
              $conn->close();
              }
                
          
      }     
  

   ?>





   
          

          <div class="wrapper">
  <div class="registration_form">
    <div class="title">
    Geting A Ticket...
    </div>

    <form action="#" method="POST">
      <div class="form_wrap">
        
        <div class="input_wrap">
          <label for="title">Passenger Name</label>
          <input type="text" id="title" name="passenger_name" placeholder="Passenger Name" required>
        </div>


        <div class="input_wrap">
          <label for="title">Telephone</label>
          <input type="text" id="title" name="tel" placeholder="Tel" required>
        </div>

        <div class="input_wrap">
          <label for="title">E-mail</label>
          <input type="E-mail" id="title" name="email" placeholder="E-mail" class="idclass" required>
        </div>

        <div class="input_wrap">
          <label for="title">Board Place</label>
          <input type="text" id="title" name="board_place" placeholder="board place" required>
        </div>

        <div class="input_wrap">
          <label for="title">Your destination</label>
          <input type="text" id="title" name="Your_destination" placeholder="Your destination" required>
        </div>

        <div class="input_wrap">
          <label for="title">Seat</label>
          <input type="number" id="title" name="booked_seat" class="idclass">
        </div>
        <div class="input_wrap">
          <input type="submit" value="Booking Now" class="submit_btn" name="AddBooking">

        </div>



      </div>
    </form>
  </div>
</div>


        







</div>

</body>
</html>