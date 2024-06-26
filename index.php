<?php
    session_start();
    include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body id="LoginForm">
    <div class="wrapper">
        <!--NAV MENU-->
        <nav>
            <div class="nav-logo">
                <a href="#" onclick="showhome()">KD LOGO .</a>
            </div>
            
            <div class="nav-button">
                <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
                <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
           </div>
            <div class="nav-menu-btn">
               <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>
        <!--FORM BOX-->
        <div class="form-box hidden" id="box">
            <!--Login-->
            <div class="login-container" id="login">
            <form id="formLogin" action="login.php" method="post">
                <div class="top">
                    <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                    <header>Login</header>
                </div>
                <div class="input-box">
                    <input type="text" value="<?php if(isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" class="input-field" name="username" placeholder="Username or Email">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" value="<?php if(isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" class="input-field" name="password" placeholder="Password">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" name="login" value="Sign In">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="login-check" name="remember" value="<?php if(isset($_COOKIE["user"]) && isset($_COOKIE["pass"])){echo "checked";}?>">
                        <label for="login-check"> Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Forgot password?</a></label>
                    </div>
                </div>
                <span><?php 
                    if(isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                    }
                    unset($_SESSION['message']);
                ?></span>
            </form>
            </div>
            <!--Register-->
            <div class="register-container" id="register">
            <form id="formRegister" action="" method="post">
                <div class="top">
                    <span>Have An account? <a href="#" onclick="login()">Login</a></span>
                    <header>Sign Up</header>
                </div>
                <div class="two-forms">
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Firstname">
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Lastname">
                        <i class="bx bx-user"></i>
                    </div>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Email">
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Password">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" value="Register" onclick="submitData()">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="register-check">
                        <label for="register-check">Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Terms & conditions</a></label>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <!--Form box END-->
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
                            <img src="css/img/PetStoreFull.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!--Home Section End-->
        <!--Main Page End-->
        </div>
        <footer>© 2024 OrlMech. All Rights Reserved.</footer>
    </div>
    <script src="login.js"></script>
</body>
</html>