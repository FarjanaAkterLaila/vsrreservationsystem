<?php
  
  include("Bconnection.php");
        $no= $_GET['pnr'];
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
            
            
            
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Document</title>
    <style>
        li{
            list-style-type: none;
            padding-left: 0;
        }
        body{
            background-image: url("image/b8.jpg");
      background-position: center;
      background-size: cover;
      height: 700px;
      background-repeat: no-repeat;
      background-attachment: fixed;
        }
        h3{
            image: url("image/trainlogo.png");
        }
      
    </style>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong style="color:#C0392B ;">V S R</strong>
                        <br>
                       ZIP 4103
                        
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                   
                    <p>
                        <em><b>Booked On:</b> <br><?php echo $bc; ?></em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h4><b>PNR CODE:</b> <?php echo $no; ?></h5>
                    <h2 style="color:#550774;">Bus Ticket Details</h2>
                </div>
                </span>
                <table class="table table-hover table-striped">
                    
                    <tbody>
                       <tr>
                            
                            <td class="col-md-6"><em><b>Customer Name:</b></em></h4></td>
                           
                            <td class="col-md-6 text-center"><?php echo $passenger_name; ?></td>
                          
                        </tr> 
                        <tr>
                          
                            <td class="col-md-6"><em><b>Contact Details:</b></em></h4></td>
                    
                            <td class="col-md-6 text-center"><?php echo  $passenger_mobile; ?></td>
                           
                        </tr> 

                      <tr>
                            
                            <td class="col-md-6"><em><b>Boarding place:</b></em></h4></td>
                    
                            <td class="col-md-6 text-center"><?php echo $bpl; ?></td>
                           
                        </tr> 

                      <tr>
                           
                            <td class="col-md-6"><em><b>Destination:</b></em></h4></td>
                    
                            <td class="col-md-6 text-center"><?php echo  $yd; ?></td>
                           
                        </tr> 
                      

                        <tr>
                           
                            <td class="col-md-6"><em><b>Seat Number:</b></em></h4></td>
                    
                            <td class="col-md-6 text-center"><?php echo $seat; ?></td>
<!--                            
                        </tr>
                            <tr>
                           
                            <td class="col-md-6"><em><b>Departure Date:</b></em></h4></td>
                    
                            <td class="col-md-6 text-center"><?php echo $dep_date; ?></td>
                           
                        </tr>  -->

                        <!-- <tr>
                            
                            <td class="col-md-6"><em><b>Departure Time:</b></em></h4></td>
                    
                            <td class="col-md-6 text-center"><?php echo $dep_time; ?></td>
                           
                        </tr> -->

                    </tbody>
                </table>
               <div>
                    <h3 style="text-align:center;color:#154360; ">
                        Thank you for your order.
    </h3>
                    
                </div> 

                
            </div>
        </div>
    </div>

    <div style="margin-top: 3rem;">    
        <button class="btn btn-primary btn-lg">Print</button>
    </div>

<script>
const printBtn = document.querySelector("button");

printBtn.addEventListener("click", () => window.print());
</script>

<style>
    body {
    margin-top: 20px;
}
</style>
</body>
</html>