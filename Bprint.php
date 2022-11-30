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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="cssfile/sidebar.css">
  <link rel="stylesheet" href="cssfile/signUp.css">
  <link rel="stylesheet" href="cssfile/nav.css">
  <style type="text/css">
 
      body{

      background-image: url("image/b8.jpg");
      background-position: center;
      background-size: cover;
      height: 700px;
      background-repeat: no-repeat;
      background-attachment: fixed;

    }
    .alert{
        z-index: 3;
        border-radius: 0px;
    }


    

    #pnr-enquiry{
        height: 80vh;
        background-image: url("assets/img/buscv.jpg");
        background-size: cover;
        background-position: 50% 50%;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    #pnr-form{
        padding: 4rem 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        position: relative;
        z-index: 1;
    }

    #pnr-form form{
        width: 70%;
    }

    #pnr-form input{
        width: 100%;
    }

    #pnr-form::before{
        content: "";
        position: absolute;
        height: 100%;
        width: 100%;
        right: 0%;
        background-color: black;
        border-radius: 10px;
        z-index: -1;
        opacity: 0.5;
    }

    #pnr-form div{
        margin: 1rem auto;
        width: 90%;
    }

    #pnr-form button{
        font-weight: bold;
        font-size: 14px;
        padding: 0.3rem 0.7rem;
        text-transform: uppercase;
        border: 3px solid;
        border-radius: 5px;
        color: #212529;
        background-color: #CCD3DD;
        transition: background-color 400ms;
    }

    #pnr-form button:hover{
        background-color: #ebecee;
        cursor: pointer;
    }
   
    .adminTopic{
      text-align: center;
      color: #fff;
      

    }
    @media only screen and (min-width: 992px){
        /* Alert Message on top of the header */
        .alert{
            position: absolute;
           width: 100%;
            z-index: 3;
            border-radius: 0px;
        }

        .alert-dark{
            width: 50%;
            left: 50%;
            transform: translateX(-50%);
       
        }


        #pnr-enquiry{
            height: 50vh;
        }

        #pnr-form{
            width: 50%;
        }

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
    <li><a href="Bprint.php">Print</a></li>
    <li><a href="Bprofile.php">Profile</a></li>
    <li><a href="Buserlogout.php">logout</a></li>

    </ul>

   

</div>



<?php
    
    
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pnr-search"]))
    {
        $no=$_POST['pnr'];
        $sql = "SELECT * FROM booking WHERE booking_id='$no'";
        $result = mysqli_query($conn, $sql);

        if($num = mysqli_num_rows($result))
        {
            $row = mysqli_fetch_assoc($result);
            $passenger_name=$row['passenger_name'];
            $passenger_mobile=$row['telephone'];
            $seat=$row['booked_seat'];
            $em=$row['email'];
            $bpl=$row['boarding_place'];
            $yd=$row['Your_destination'];
            
            $bc=$row['booking_created'];
            
            
            
            ?>

         <div class="alert alert-dark alert-dismissible fade show" role="alert">
            
            <h4 class="alert-heading">Booking Information!</h4>
            <p>
                <button class="btn btn-sm btn-success"><a href="Bdownload.php?pnr=<?php echo $no; ?>" class="link-light">Download</a></button>
                <button class="btn btn-danger btn-sm" id="deleteBooking" data-bs-toggle="modal" data-bs-target="#deleteModal" data-pnr="<?php echo $pnr;?>" data-seat="<?php echo $booked_seat;?>" data-bus="<?php echo $bus_no; ?>">
                    Delete
                </button>
            </p>
            <hr>
                <p class="mb-0">
                    <ul class="pnr-details">
                        <li>
                            <strong>PNR : </strong>
                            <?php echo $no; ?>
                        </li>
                        <li>
                            <strong>Customer Name : </strong>
                            <?php echo  $passenger_name?>
                        </li>
                        <li>
                            <strong>Customer Phone : </strong>
                            <?php echo $passenger_mobile?>
                        </li>
                        <li>
                            <strong>Booked Seat Number : </strong>
                            <?php echo $seat ?>
                        </li>
                        <li>
                            <strong>Email : </strong>
                            <?php echo $em ?>
                        </li>
                        <li>
                            <strong>Boarding_place : </strong>
                            <?php echo $bpl ?>
                        </li>
                        <li>
                            <strong>Destination : </strong>
                            <?php echo $yd; ?>
                        </li>
                       
                        <li>
                            <strong>Booked Timing : </strong>
                            <?php echo $bc; ?>
                        </li>

                </p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
      <?php
        }
        
    
    
      else
      {
            echo '<div class="my-0 alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Record Doesnt Exist
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }  

    }
?>

        
    
    
        <section id="pnr-enquiry">
            <div id="pnr-form">
                <h2>PNR ENQUIRY</h2>
                <form action="<?php echo $_SERVER["REQUEST_URI"]; ?>" method="POST">
                    <div>
                        <input type="text" name="pnr" id="pnr" placeholder="Enter PNR">
                    </div>
                    <button type="submit" name="pnr-search">Submit</button>
                </form>
            </div>
        </section>
      

    
   
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- External JS -->

</body>
</html>