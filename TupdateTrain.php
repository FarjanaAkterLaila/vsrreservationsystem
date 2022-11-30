<?php 

	session_start();

?>
<?php include("Tconnection.php")?>



<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel trains</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
<link rel="stylesheet" href="cssfile/signUp.css">
	<style type="text/css">

			body{

		  background-image: url("image/20.jpg");
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


      

       if(isset($_POST['TrainUpdate'])){

       $id=$_POST['id'];
       $nameOFtrain=$_POST['train_name'];
       $tel=$_POST['tel'];
       

       $query="UPDATE `train` SET train_Name='$nameOFtrain',tel='$tel' where id=$id";


       $query_run=mysqli_query($conn,$query);

      
  

         if($query_run){

           
                                 echo ("<script LANGUAGE='JavaScript'>
                      window.alert('Succesfully Train updated!!!');
                      window.location.href='TManagesTrains.php';
                      </script>");
               


          }

          else{

               echo '<script type="text/javascript">alert("Not Updated!!!")</script>';
           }

           

     }

?>


  

   


<div class="sidebar2">



          <div class="wrapper">
  <div class="registration_form">
    <div class="title">
      Trains Update/Edit
    </div>

    <form action="#" method="POST">
      <div class="form_wrap">

        <div class="input_wrap">
          <label for="title">Id</label>
          <input type="number" id="title" name="id" class="idclass" value="<?php echo $_GET['id'];?>">
        </div>
        
        <div class="input_wrap">
          <label for="title">Train Name</label>
          <input type="text" id="title" name="train_name" placeholder="Train Name" required>
        </div>


        <div class="input_wrap">
          <label for="title">Telephone</label>
          <input type="text" id="title" name="tel" placeholder="Tel" required>
        </div>

       
        <div class="input_wrap">

          <input type="submit" value="Update Train Now" class="submit_btn" name="TrainUpdate">

        </div>



      </div>
    </form>
  </div>
</div>




</div>

</body>
</html>