<?php 

	session_start();

?>
<?php include("Tconnection.php")?>



<!DOCTYPE html>
<html>
<head>
  <title>Routes adding</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
<link rel="stylesheet" href="cssfile/signUp.css">
	<style type="text/css">

			body{

		  background-image: url("image/t9.jpg");
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
    .form_wrap .submit_btn:hover{

      color:#fff;
      font-weight: 600;

    }
    .idclass{

      width: 100%;
      border-radius: 3px;
      border: 1px solid #9597a6;
      padding: 10px;
      outline: none;
      color: black;

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
<header><img src="image/avatar.png">
<p><?php echo $_SESSION['username']; ?></p>
</header>
<ul>

 <li><a href="TadminDash.php">Manage Routes</a></li>
    <li><a href="TManagesTrains.php">Manage Trains</a></li>
    <li><a href="TBookingManage.php">Booking People</a></li>
    <li><a href="TPaymentManage.php">Transaction</a></li>
    <li><a href="TadminLogout.php">logout</a></li>

    </ul>


</div>



<div class="sidebar2">


        <?php 


  if(isset($_POST['routeAdd'])){

     $via_city=$_POST['via_city'];
     $destination=$_POST['destination'];
     $train_name=$_POST['train_name'];
     $dep_date=$_POST['departure_date'];
     $dep_time=$_POST['departure_time'];
     $seat=$_POST['seat'];
     $cost=$_POST['cost'];
    

    


       if($conn->connect_error)
          {
            die('Connection Failed :'.$conn->connect_error);
          }
          else
          {

         
              $stmt=$conn->prepare("INSERT INTO route(via_city,destination,train_name,departure_date,departure_time,seat,cost) VALUES(?,?,?,?,?,?,?)");
              //table3 is the table name//

              $stmt->bind_param("ssssssi",$via_city,$destination,$train_name,$dep_date, $dep_time,$seat,$cost);

              $stmt->execute();
              
               echo '<script type="text/javascript">alert("Route add successfully")</script>';
               


              
              $stmt->close();
              $conn->close();
              }
                
          
      }     
  

   ?>




          <div class="wrapper">
  <div class="registration_form">
    <div class="title">
      Routes adding
    </div>

    <form action="#" method="POST">
      <div class="form_wrap">
        
        <div class="input_wrap">
          <label for="title">Via City</label>
          <input type="text" id="title" name="via_city" placeholder="Via_city" required>
        </div>

        <div class="input_wrap">
          <label for="title">Destination</label>
          <input type="text" id="title" name="destination" placeholder="Destination" required>
        </div>


        <div class="input_wrap">
          <label for="title">Train Name</label>
          <input type="text" id="title" name="train_name" placeholder="Train Name"  required>
        </div>

        <div class="input_wrap">
          <label for="title">Departure Date</label>
          <input type="date" id="title" name="departure_date" placeholder="Date of Departure" class="idclass" required>
        </div>

        <div class="input_wrap">
          <label for="title">Departure Time</label>
          <input type="Time" id="title" name="departure_time" placeholder="Time of Departure" class="idclass" required>
        </div>
        <div class="input_wrap">
          <label for="title">Seat</label>
          <input type="text" id="title" name="seat" placeholder="Seat" class="idclass" required>
        </div>
        <div class="input_wrap">
          <label for="title">Cost</label>
          <input type="text" id="title" name="cost" placeholder="Cost" class="idclass" required>
        </div>
        
        
        <div class="input_wrap">
          <input type="submit" value="Add Route Now" class="submit_btn" name="routeAdd">

        </div>



      </div>
    </form>
  </div>
</div>




</div>

</body>
</html>