<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>VSR Login</title>
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />



    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-image: url(image/b11.jfif);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        
        .sign_up {
            font-size: 20px;
        }
        
        .sign_up:hover {
            background-color: #fff;
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
            <li><a href="BloginMenu.html">Login</a></li>
            <li><a href="AboutUs.html">About Us</a></li>
            <li><a href="contact_us.html">Contact Us</a></li>
            <!-- <li><a href="slide.html">Services</a></li>-->
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
     session_start();
     
         include("Bconnection.php");
         include("Bfunction.php");
     
     
         if($_SERVER['REQUEST_METHOD'] == "POST")
         {
             //something was posted
             $user_name = $_POST['user_name'];
             $password = $_POST['password'];
     
             if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
             {
     
                 //read from database
                 $query = "select * from users where username = '$user_name' limit 1;";
                 $result = mysqli_query($conn, $query);
     
                 if($result)
                 {
                     if($result && mysqli_num_rows($result) > 0)
                     {
     
                         $user_data = mysqli_fetch_assoc($result);
                         
                         if($user_data['password'] === $password)
                         {
     
                             $_SESSION['user_id'] = $user_data['user_id'];
                             header("Location:BuserviewBus.php");
                             die;
                         }
                     }
                 }
                 
                 echo "wrong username or password!";
             }else
             {
                 echo "wrong username or password!";
             }
         }
     
     ?>
    <div class="login-box">
        <img src="image/avatar.png" class="avatar">
        <h1>Login For VSR</h1>
        <form method="post">
            <p>Username</p>
            <input type="text" name="user_name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login" value="Login">
            <a href="BsignUp.php">sign up</a>&nbsp&nbsp&nbsp
            <a href="#">Forget Password</a>
        </form>


    </div>
</body>

</html>