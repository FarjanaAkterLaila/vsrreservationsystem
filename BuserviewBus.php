<?php 
session_start();

  include("Bconnection.php");
  include("Bfunction.php");

  $user_data = check_login($conn);

?>

<!DOCTYPE html>
<html>
<head>
  <title>user view packages VSR</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
  <style type="text/css">

      body{

      background-image: url("image/1.jpg");
      background-position: center;
      background-size: cover;
      height: 700px;
      background-repeat: no-repeat;
      background-attachment: fixed;

    }
    .adminTopic{
      text-align: center;
      color: #F5B7B1 ;
      

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


    <h1 class="adminTopic">...Booking Your Ticket...</h1>



<?php


?>
<?php

    
    $sqlget="SELECT * FROM route";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>ID</th>
    <th>Via City</th>
    <th>Destination</th>
    <th>Bus Name</th>
    <th>Departure Date</th>
    <th>Departure Time</th>
    <th>Cost</th>
    <th>Booking</th>
    
   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo $row['via_city'];
        echo "</td><td>";
        echo $row['destination'];
        echo "</td><td>";
        echo $row['bus_name'];
        echo "</td><td>";
        echo $row['departure_date'];
        echo "</td><td>";
        echo $row['departure_time'];
        echo "</td><td>";
        echo $row['cost'];
        echo "</td>";
       
          
        ?>

        <td>

        <button style="border:2px solid yellow; border-radius:7px; background-color:red;color:white;">
          <a href="BuserAddBooking.php?id=<?php echo $row['id'];?>">
         
          
          

          Book Now

          </a>

        </button>

        </td></tr>

<?php
       }

       echo "</table>";


?>






</div>

</body>
</html>