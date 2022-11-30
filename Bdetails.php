
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>VSR Reservation system</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer_l.css">
    <!--  <link rel="stylesheet" type="text/css" href="cssfile/container.css">-->
    <link rel="stylesheet" href="cssfile/login.css">
    <link rel="stylesheet" a href="css\font-awesome.min.css">
   
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    


    <style type="text/css">


       body{
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                background-image: url(image/7.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                background-position: center;

            }
            .sign_up{

                font-size: 20px;

            }
            .sign_up:hover{

                background-color: #fff;
                

            }
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.about-sec{
    display: flex;
    padding: 3rem 0;
    width: 100%;
    justify-content: center;
  /*  background: #2c3e50;*/
  background: rgba(1, 2, 2, 0.5);
    margin-top: 106px;
}
.about-img{
    width: 250px;
    height: 250px;
    margin: 0 3rem;
}
.about-img img{
    height: 100%;
    width: 100%;
}
.about-intro{
    color: #fff;
    width: 400px;
    height: 250px;
    border-left: 3px solid #00b894;
    padding-left: 2rem;
    margin: 0 3rem;
}
.about-intro p{
    margin-top: 1.5rem;
    font-size: 14px;
    opacity: .7;
}
@media only screen and (max-width: 900px) {
    .about-sec{
        flex-direction: column;
        align-items: center;
    }
    .about-img{
        width: 80%;
    }
    .about-intro{
        width: 100%;
        height: 100%;
        border-top: 3px solid #00b894;
        border-left: none;
        padding: 1rem;
        margin-top: 2rem;
    }
    .about-intro h3,p{
        width: 80%;
    }
    .about-intro p{
        font-size: 12px;
    }




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
    color: black;
}
table tr td
{
    border-right: 2px solid rgb(187, 187, 187);
    height: 58px;
    padding: 22px 0px 0px 0px;
    font-family: "monospace;" !important;
    border-bottom: 2px solid rgb(187, 187, 187);
    font-size: 22px;
    color: black;
}
table tr td a
{
    background-color: rgb(255, 196, 0);
    color: black;
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
.topic_bus{
    text-align: center;
    color: #CB440A;
}


     

      
    </style>

  </head>
  <body>




  

        <nav type="nav">
            <div class="menu-icon"><span class="fas fa-bars"></span></div>
            <div class="logo" style="color:red;">VSR
                <span>BUS</span>
            </div>



            <div class="nav-items">
                <li><a href="home.html">Home</a></li>
                <li><a href="help.html">Help</a></li>
                <!--   <li><a href="#">Ticket Book</a></li>-->

                <!--<li><a href="Choice.html">V.Choice</a></li>-->
                <!-- <li><a href="#">Packages</a></li>-->
                <li><a href="BloginMenu.html">Login</a>
                    <a href="BsignUp.php">/Sign Up</a></li>
                <li><a href="Bdetails.php">Details</a></li>
                <li><a href="contact_us.html">Contact Us</a></li>
                <!--<li><a href="slide.html">Services</a></li>-->
            </div>
            <div class="search-icon"><span class="fas fa-search"></span></div>
            <div class="cancel-icon"><span class="fas fa-times"></span></div>

            <form action="#">
                <input type="search" class="search-data" placeholder="Search" required>
                <button type="submit" class="fas fa-search"></button>
            </form>


        </nav>

        <script>
            const menuBtn = document.querySelector(".menu-icon span");
            const searchBtn = document.querySelector(".search-icon");
            const cancelBtn = document.querySelector(".cancel-icon");
            const items = document.querySelector(".nav-items");
            const form = document.querySelector("form");
            menuBtn.onclick = () => {
                items.classList.add("active");
                menuBtn.classList.add("hide");
                searchBtn.classList.add("hide");
                cancelBtn.classList.add("show");
            }
            cancelBtn.onclick = () => {
                items.classList.remove("active");
                menuBtn.classList.remove("hide");
                searchBtn.classList.remove("hide");
                cancelBtn.classList.remove("show");
                form.classList.remove("active");
                cancelBtn.style.color = "#ff3d00";
            }
            searchBtn.onclick = () => {
                form.classList.add("active");
                searchBtn.classList.add("hide");
                cancelBtn.classList.add("show");
            }
        </script>





<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "busbooking_vsr";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
else{
	//echo "connected";//
}
?>

<h1 class="topic_bus"> ...Our Buses...</h1>

<?php

    
    $sqlget="SELECT * FROM Bus";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>ID</th>
    <th>Bus_name</th>
    <th>Tel Number</th>
    
   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo $row['Bus_Name'];
        echo "</td><td>";
        echo $row['Tel'];
        echo "</td>";
        
       
          
        ?>

       

        </tr>

<?php
       }

       echo "</table>";


?>
<h1 class="topic_bus"> ...Our Route Services...</h1>

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
    <th>Seat</th>
    <th>Cost</th>
  
   
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
        echo $row['seat'];
        echo "</td><td>";
         echo $row['cost'];
        echo "</td>";
       
          
        ?>

        </tr>

<?php
       }

       echo "</table>";


?>
<br><br><br>

  </body>
</html>
