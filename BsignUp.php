<!DOCTYPE html>


<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>VSR</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <!--  <link rel="stylesheet" href="cssfile/footer_l.css">-->
    <link rel="stylesheet" href="cssfile/signUp.css">
    <!--  <link rel="stylesheet" type="text/css" href="cssfile/container.css">-->

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <style type="text/css">
        body {
            background-image: url(image/b8.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        
        .confirm {
            background-color: white;
            margin-top: 5px;
        }
        .form_wrap .input_wrap label{

color: #2eebf9f9;
}
    </style>

</head>

<body>

    <!--this is the header callling(nav bar)-->

    <nav type="nav">
        <div class="menu-icon"><span class="fas fa-bars"></span></div>
        <div class="logo">VSR</div>



        <div class="nav-items">
            <li><a href="home.html">Home</a></li>
            <li><a href="help.html">Help</a></li>
            <!--   <li><a href="#">Ticket Book</a></li>-->


            <!-- <li><a href="#">Packages</a></li>-->
            <li><a href="TloginMenu.html">Login</a></li>
            <li><a href="AboutUs.html">About Us</a></li>
            <li><a href="contact_us.html">Contact Us</a></li>
            <li><a href="slide.html">Services</a></li>
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
<div class="confirm">

    <?php
    
    session_start();
    include("Bconnection.php");
    include("Bfunction.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      //something was posted
      $user_name = $_POST['user_name'];
     
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $con_pass=$_POST['cpassword'];
  
  
    
  
  
      if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
      {
          
  
         if($password==$con_pass){
  
          
          //   $password=md5($password);//
  
              //save to database
              $user_id = random_num(20);
              $query = "insert into users (user_id,First_Name,Last_Name,username,email,password) values ('$user_id','$fname','$lname','$user_name','$email','$password')";
  
              mysqli_query($conn,$query);
  
              echo ("<script LANGUAGE='JavaScript'>
      window.alert('Succesfully your Sign Up!!!');
      window.location.href='Buserlogin.php';
      </script>");
  
          }
          else{
  
               echo "Please enter confirm password as previous one!!";
  
            }
      }
      else{
      
           echo "Please enter some valid information!";
  
        }
    }
  ?>
  
  </div>

    <div class="wrapper">
        <div class="registration_form">
            <div class="title">
                Register for VSR BUS Service
            </div>

            <form action="#" method="POST">
                <div class="form_wrap">
                    <div class="input_grp">
                        <div class="input_wrap">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="input_wrap">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lname" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="input_wrap">
                        <label for="email">Email Address</label>
                        <input type="text" id="email" name="email" placeholder="E-mail" required>
                    </div>
                    <div class="input_wrap">
                        <label for="uname">Username</label>
                        <input type="text" id="uname" name="user_name" placeholder="Username" required>
                    </div>
                    <div class="input_wrap">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="password" required>
                    </div>
                    <div class="input_wrap">
                        <label for="Confirm_password">Confirm Password</label>
                        <input type="password" id="password" name="cpassword" placeholder="password" required>
                    </div>

                    <div class="input_wrap">
                        <input type="submit" value="Register Now" class="submit_btn">
                    </div>

                </div>
            </form>
    </div>







</body>

</html>