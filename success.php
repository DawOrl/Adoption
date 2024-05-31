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
    <title>Pet Store</title>
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
   <header class="header">
    <a href="#" class="logo"><img src="css/img/PetStore.png"> KD LOGO .</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#shop">shop</a>
        <a href="#services">services</a>
        <a href="#plan">plan</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="cart.html" class="fas fa-shopping-cart"></a>
    </div>
    <a href="logout.php" class="btn">Logout</a>
   </header>

   <section class="home" id="home">
    <div class="content">
        <h3><span>hi</span> welcome to our pet shop </h3>
        <a href="#shop" class="btn">shop now</a>
    </div>
   </section>

   <section class="about" id="about">
    <div class="image">
        <img src="css/img/aboutimage.png" alt="">
    </div>
    <div class="content">
        <h3>premium <span>pet food</span> manufacturer</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Libero repellat aut dolore magnam qui perspiciatis?Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Libero repellat aut dolore magnam qui perspiciatis?</p>
        <a href="#" class="btn">read more</a>
    </div>
   </section>

   <section class="shop" id="shop">
    <h1 class="heading">our <span>products </span> </h1>

    <div class="box-container">
        <div class="box">
            <div class="icons">
                <a href="cart.html" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="css/img/zdjecie1.jpg" alt="">
            </div>
            <div class="content">
                <h3>An elegant bed for your pet</h3>
                <p>-high sleeping comfort thanks to the fluffy pillow<br>
                    - non-slip bottom, ensures safety and stability<br>
                    - eco-friendly material, recycled material</p>
                <div class="amount"> $80.00 </div>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="cart.html" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="css/img/zdjecie2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Natural food for your hamster</h3>
                <p>This is a high-quality basic food specially developed for small rodents 
                    tailored to their needs. 40% of cereals create an excellent basis for food for hamsters, 
                    miniature hamsters, rats, mice and gerbils.</p>
                <div class="amount"> $15.00 </div>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="cart.html" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="css/img/zdjecie3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Multifunctional MULTI-LEVEL scratching post for a CAT</h3>
                <p>-Educational value: The ladder supports the motor development of young cats.<br>
                    -Comfortable hiding places: Houses on different levels give cats a sense of security.<br>
                    -Durability and stability: Carefully selected materials ensure the durability of the product.</p>
                <div class="amount"> $120.00 </div>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="cart.html" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="css/img/zdjecie4.jpg" alt="">
            </div>
            <div class="content">
                <h3>Fishing bait</h3>
                <p>-The large package is enough for many hours of fishing.<br>
                    -A bait that will tempt many calm-feeding fish with its aroma<br>
                    -Products intended for use in still waters and rivers.</p>
                <div class="amount"> $10.00 </div>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="cart.html" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="css/img/zdjecie5.jpg" alt="">
            </div>
            <div class="content">
                <h3>A colorful dog chew</h3>
                <p>-The toy is strong and resistant to damage, anti-allergic and safe for animals<br>
                    -The protrusions clean the teeth from tartar and massage the gums.<br>
                    -The perfect way to keep your dog's mind occupied</p>
                <div class="amount"> $5.00 </div>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="cart.html" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="css/img/zdjecie6.jpg" alt="">
            </div>
            <div class="content">
                <h3>Sea-colored velvet collar with metal rings</h3>
                <p>-Elegant design, the collar made of soft velor looks stylish<br>
                    -Thanks to the materials and the adjustable clasp, the collar is comfortable for the dog and does not put pressure on the neck<br>
                    -Metal rings allow you to attach a leash and look modern</p>
                <div class="amount"> $15.00 </div>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="cart.html" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="css/img/zdjecie7.jpg" alt="">
            </div>
            <div class="content">
                <h3>Natural hay for rodents</h3>
                <p>-Hay is completely natural, which is important for the health and well-being of your pet<br>
                    -High quality, hay is carefully selected to meet the nutritional needs of rodents<br>
                    -Teeth stimulation and chewing, hay has an appropriate structure that helps in the natural grinding of teeth</p>
                <div class="amount"> $10.00 </div>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="cart.html" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="css/img/zdjecie8.jpg" alt="">
            </div>
            <div class="content">
                <h3>Eating bowl for your pet</h3>
                <p>-Choose a bowl made of a solid material, it is important that it is resistant to damage and does not tip over easily<br>
                    -Anti-slip bottom - the bowl has rubber or silicone feet that prevent it from sliding<br>
                    -Easy to clean: the bowl is easy to keep clean. This makes it easier to take care of your pet's hygiene</p>
                <div class="amount"> $20.00 </div>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="cart.html" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="css/img/zdjecie9.jpg" alt="">
            </div>
            <div class="content">
                <h3>Turtle aquarium with island</h3>
                <p>-An island for rest is a dry space where the turtle can bask in the sun or hide in the shade<br>
                    -Water Zone - the remaining part of the aquarium provides the right amount of water, which ensures fun and rest for our turtle<br>
                    -Natural materials, the island is made of natural materials such as stones, wood or sand. The turtle will feel like it is in its natural state</p>
                <div class="amount"> $200.00 </div>
            </div>
        </div>
    </div>
   </section>

   <section class="services" id="services">
    <h1 class="heading"> our <span>services </span> </h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-dog"></i>
            <h3>dog boarding</h3>
            <a href="#" class="btn">read more</a>
        </div>
        <div class="box">
            <i class="fas fa-cat"></i>
            <h3>cat boarding</h3>
            <a href="#" class="btn">read more</a>
        </div>
        <div class="box">
            <i class="fas fa-bath"></i>
            <h3>spa & grooming</h3>
            <a href="#" class="btn">read more</a>
        </div>
        <div class="box">
            <i class="fas fa-drumstick-bite"></i>
            <h3>healthy meal</h3>
            <a href="#" class="btn">read more</a>
        </div>
        <div class="box">
            <i class="fas fa-baseball-ball"></i>
            <h3>activity exercise</h3>
            <a href="#" class="btn">read more</a>
        </div>
        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>health care</h3>
            <a href="#" class="btn">read more</a>
        </div>
    </div>
   </section>

   <section class="plan" id="plan">
    <h1 class="heading"> choose a <span>plan</span> </h1>
    <div class="box-container">
        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 1 day </h3>
            <i class="fas fa-bicycle icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span></p>
                <p> pet grooming <span class="fas fa-check"></span></p>
                <p> pet exercise <span class="fas fa-check"></span></p>
                <p> pet meals <span class="fas fa-check"></span></p>
            </div>
            <div class="amount"> <span>$</span>50</div>
            <a href="#" class="btn"> choose plan </a>
        </div>
        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 10 days </h3>
            <i class="fas fa-motorcycle icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span></p>
                <p> pet grooming <span class="fas fa-check"></span></p>
                <p> pet exercise <span class="fas fa-check"></span></p>
                <p> pet meals <span class="fas fa-check"></span></p>
            </div>
            <div class="amount"> <span>$</span>350</div>
            <a href="#" class="btn"> choose plan </a>
        </div>
        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 30 days </h3>
            <i class="fas fa-car-side icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span></p>
                <p> pet grooming <span class="fas fa-check"></span></p>
                <p> pet exercise <span class="fas fa-check"></span></p>
                <p> pet meals <span class="fas fa-check"></span></p>
            </div>
            <div class="amount"> <span>$</span>650</div>
            <a href="#" class="btn"> choose plan </a>
        </div>
    </div>
   </section>

   <section class="contact" id="contact">
    <div class="image">
        <img src="css/img/PetStoreFull.png" alt="">
    </div>
    <form action="">
        <h3>contact us</h3>
        <input type="text" placeholder="your name" class="box">
        <input type="email" placeholder="your email" class="box">
        <input type="number" placeholder="your number" class="box">
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>
   </section>

   <section class="footer">
    <div class="share">
        <a href="#" class="btn"><i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#" class="btn"><i class="fab fa-twitter"></i> twitter </a>
        <a href="#" class="btn"><i class="fab fa-instagram"></i> instagram </a>
        <a href="#" class="btn"><i class="fab fa-linkedin"></i> linkedin </a>
    </div>

    <div class="credit"> created by <span> KD industries </span> | © all rights reserved! </div>
   </section>

    <script src="script.js"></script>
</body>
</html>