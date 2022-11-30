<?php 

	session_start();

?>
<?php include("Tconnection.php")?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel VSR</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
<link rel="stylesheet" href="cssfile/signUp.css">
	<style type="text/css">

			body{

		  background-image: url("image/t2.jpg");
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
    #decription{
      width: 100%;
      border-radius: 3px;
      border: 1px solid #9597a6;
      padding: 10px;
      outline: none;
      color: black;
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

   

   <?php 


      

       if(isset($_POST['routeUpdate'])){

       $id=$_POST['id'];
       $via_city=$_POST['Via_city'];
       $destination=$_POST['destination'];
       $train_name=$_POST['train_name'];
       $dep_date=$_POST['departure_date'];
       $dep_time=$_POST['departure_time'];
       $seat=$_POST['seat'];
        $cost=$_POST['cost'];

       $query="UPDATE `route` SET Via_city='$via_city',destination='$destination',train_name='$train_name',departure_date='$dep_date',departure_time='$dep_time',seat='$seat',cost='$cost' where id=$id";


       $query_run=mysqli_query($conn,$query);

      
  

         if($query_run){


           echo ("<script LANGUAGE='JavaScript'>
           window.alert('Route udated sucessfully!!!'); 
           window.location.href='TadminDash.php';
           </script>");


          }

          else{

               echo '<script type="text/javascript">alert("Route not updated!!!")</script>';
           }

           

     }

?>



<div class="sidebar2">



          <div class="wrapper">
  <div class="registration_form">
    <div class="title">
      Train Route Update/Edit
    </div>

    <form action="#" method="POST">
      <div class="form_wrap">

        <div class="input_wrap">
          <label for="title">Id</label>
          <input type="number" id="title" name="id" class="idclass" value="<?php echo $_GET['id'];?>">
        </div>
        
        <div class="input_wrap">
          <label for="title">Via_city</label>
          <input type="text" id="title" name="Via_city" placeholder="Via_city" required>
        </div>


        <div class="input_wrap">
          <label for="title">Destination</label>
          <input type="text" id="title" name="destination" placeholder="Destination" required>
        </div>

         <div class="input_wrap">
          <label for="title">Train Name</label>
          <input type="text" id="title" name="train_name" placeholder="Train Name" required>
        </div>


         <div class="input_wrap">
          <label for="title">Departure Date</label>
          <input type="Date" id="title" name="departure_date" placeholder="Departure Date" class="idclass">
        </div>


         <div class="input_wrap">
          <label for="title">Departure Time</label>
          <input type="Time" id="title" name="departure_time" placeholder="Departure Time" class="idclass">
        </div>
        <div class="input_wrap">
          <label for="title">Seat</label>
          <input type="number" id="title" name="seat" placeholder="seat" class="idclass">
        </div>

          <div class="input_wrap">
          <label for="title">Cost</label>
          <input type="number" id="title" name="cost" placeholder="Cost" class="idclass">
        </div>


        
        <div class="input_wrap">

          <input type="submit" value="Update Route Now" class="submit_btn" name="routeUpdate">

        </div>



      </div>
    </form>
  </div>
</div>




</div>

</body>
</html>