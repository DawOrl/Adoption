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
    <link rel="stylesheet" href="css/page.css">
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
                    <li><a href="#" class="link active">Home</a></li>
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
        <!--Main Page Start-->
        <div class="main-content" id="main">
            <!--Home Section Start-->
            <section class="home section" id="home">
                <div class="container">
                    <div class="row">
                        <div class="home-info">
                            <h3 class="hello padd-15">Hello, our names are <br><span class="name">Konrad Mech</span> and <span class="name">Dawid Orłowski</span></h3>
                            <h3 class="about-us padd-15">We're <span class="typing">IT Students!</span></h3>
                            <p class="padd-15">We would like to show you the design of our website, which focuses on the adoption 
                                of abandoned animals with the possibility of financial support for shelters and 
                                organizations cooperating with us.</p>
                            <h4 class="please-login padd-15">Please Login to see entire page!</h4>
                        </div>
                        <div class="home-img">
                            <img src="css/img/dog.webp" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!--Home Section End-->
            <!--About Section Start-->
            <section class="home section" id="home">
                <div class="container">
                    <div class="row">
                        <div class="home-info">
                            <h3 class="hello padd-15">Hello, our names are <br><span class="name">Konrad Mech</span> and <span class="name">Dawid Orłowski</span></h3>
                            <h3 class="about-us padd-15">We're <span class="typing">IT Students!</span></h3>
                            <p class="padd-15">We would like to show you the design of our website, which focuses on the adoption 
                                of abandoned animals with the possibility of financial support for shelters and 
                                organizations cooperating with us.</p>
                            <h4 class="please-login padd-15">Please Login to see entire page!</h4>
                        </div>
                        <div class="home-img">
                            <img src="css/img/dog.webp" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!--About Section End-->
            <!--Adopt Section Start-->
            <section class="home section" id="home">
                <div class="container">
                    <div class="row">
                        <div class="home-info">
                            <h3 class="hello padd-15">Hello, our names are <br><span class="name">Konrad Mech</span> and <span class="name">Dawid Orłowski</span></h3>
                            <h3 class="about-us padd-15">We're <span class="typing">IT Students!</span></h3>
                            <p class="padd-15">We would like to show you the design of our website, which focuses on the adoption 
                                of abandoned animals with the possibility of financial support for shelters and 
                                organizations cooperating with us.</p>
                            <h4 class="please-login padd-15">Please Login to see entire page!</h4>
                        </div>
                        <div class="home-img">
                            <img src="css/img/dog.webp" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!--Adopt Section End-->
            <!--Contact Section Start-->
            <section class="home section" id="home">
                <div class="container">
                    <div class="row">
                        <div class="home-info">
                            <h3 class="hello padd-15">Hello, our names are <br><span class="name">Konrad Mech</span> and <span class="name">Dawid Orłowski</span></h3>
                            <h3 class="about-us padd-15">We're <span class="typing">IT Students!</span></h3>
                            <p class="padd-15">We would like to show you the design of our website, which focuses on the adoption 
                                of abandoned animals with the possibility of financial support for shelters and 
                                organizations cooperating with us.</p>
                            <h4 class="please-login padd-15">Please Login to see entire page!</h4>
                        </div>
                        <div class="home-img">
                            <img src="css/img/dog.webp" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!--Contact Section End-->
        <!--Main Page End-->
        </div>
        <footer>© 2024 OrlMech. All Rights Reserved.</footer>
    </div>
</body>
</html>