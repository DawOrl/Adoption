<?php 
    session_start();
    if(!isset($_SESSION['id']) || (trim ($_SESSION['id']) == '')) {
        header('index.php');
        exit();
    }
    include('conn.php');
    $query=mysqli_query($conn,"select * from user where user_id='".$_SESSION['id']."' ");
    $row=mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body id="LoginForm">
    <div class="wrapper">
        <!--NAV MENU-->
        <nav>
            <div class="nav-logo">
                <p>KD LOGO .</p>
            </div>
            <div class="nav-menu">
                <ul>
                    <li><a href="#" class="link">Home</a></li>
                    <li><a href="#" class="link">About</a></li>
                    <li><a href="#" class="link">Adopt</a></li>
                    <li><a href="#" class="link">Contact</a></li>
                </ul>
            </div>
            <div class="nav-button">
                <button class="btn white-btn"><a href="logout.php">Logout</a></button>
           </div>
            <div class="nav-menu-btn">
               <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>
    </div>
</body>
</html>