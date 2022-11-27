<?php

    if (isset($_POST['submit'])) {
        $name = $_POST['fname'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $mailFrom = $_POST['email'];
    }

        $mailTo = "henryjamesribano27@yahoo.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an e-mail from ".$name.".\n\n".$address.".\n\n".$contact.".\n\n".$mailFrom;
    
        mail($mailTo, $txt, $headers);
        header("Location: index.php?mailsend");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="C:\Users\user\Downloads\henwilogo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link 
        rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css"
    >

    <script src="https://kit.fontawesome.com/f284e8c7c2.js" crossorigin="anonymous"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>HENWI</title>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
    <body>
        <section class="header" id="home">  
                <div class="banner" id="navbar">
                    <nav>
                        <a href="index.html"><img src="logo.png" class="logo"></a>
                        <div class="navbar" id="navBar">
                            <i class="fa fa-times" onclick="hideMenu()"></i>
                            <ul id="menu">
                                <li><a href="#home">HOME</a></li>
                                <li><a href="#about">ABOUT</a></li> 
                                <li><a href="#certificates">CERTIFICATES</a></li>
                                <li><a href="#skills">SKILLS</a></li>
                                <li><a href="#contact">CONTACT</a></li>
                            </ul>
                            
                        </div>
                            <i class="fa fa-bars" onclick="showMenu()"></i>
                    </nav>
                </div>
<div class="text-box">
    <h1>HENWI</h1>
    <p>Future Full-Stack <br> Developer</p>
    <a href="" class="hero-btn">Visit my social media!</a>
</div>
        </section>

<!-- About Section -->
<section class="about" id="about">
    <div class="container">
        <div class="image-wrapper" data-aos="fade-down">
            <h1><i>ABOUT <span>ME</span></i></h1>
            <img class="img1" src="images/side.jpg" alt="" style="width: 20%;">
            <img class="img2" src="images/front.jpg" alt="" style="width: 25%;">
            <img class="img3" src="images/laptop.jpg" alt="" style="width: 20%;">
        </div>
        <div class="intro">
            <div class="self">
                <h5>Hi! I'm</h5>
                <h1>Henry James Ribano</h1>
                <h3>19 years old and I'm from the <span>Philippines</span></h3>
                <h5 class="school">2ND YEAR BSIT - <span>LEMERY COLLEGES</span></h5>
            </div>
            <div class="details">
                <p>
                    I'm studying and doing some front-end development<br> right now. I'd like to learn more about
                    web development<br> and get some tips from an experienced web developer.
                </p>
            </div>
        </div>
    </div>
</section>

<!-------- Certificates -------->
<section class="certificates" id="certificates">
    <div data-aos="zoom-in">
        <h1>My Certificates</h1>
        <p>Here are some of my certificates:</p>
    </div>

    <div class="row">
        <div class="cert-col">
            <div data-aos="fade-up">
                <img src="images/htmlcert.jpg" style="width: 100%; border: 2px solid #3A8891; border-radius: 5px;">
            </div>
        </div>

        <div class="cert-col"> 
            <div data-aos="fade-down">
                <img src="images/webdevcert.jpg" style="width: 100%; border: 2px solid #3A8891; border-radius: 5px;">
            </div>
        </div>
    </div>
</section>


<!-------- Specialties -------->

<section class="skills" id="skills">
    <div data-aos="zoom-in">
        <h1>My Skills</h1>
        <p>Here are some of my skills:</p>
    </div>

    <div class="row">
        <div class="skill-col">
            <div data-aos="fade-up">
                <img src="images/html.png" style="width: 50%;">
            </div>
        </div>

        <div class="skill-col"> 
            <div data-aos="fade-down">
                <img src="images/css.png" style="width: 50%;">
            </div>
        </div>

        <div class="skill-col"> 
            <div data-aos="fade-up">
                <img src="images/js.png" style="width: 85%;">
            </div>
        </div>
    </div>
</section>
<!-------- CONTACT -------->
<section class="contact" id="contact">
    <h1>Contact</h1>
    <div class="box">
        <div class="content">
            <h2>Get in touch</h2>
            <form method="POST" action="contact-form-handler.php">
                <div class="inputBox">
                    <input type="text" name="fname" required="required">
                    <span>Full Name</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="address" required="required">
                    <span>Address</span>
                </div>
                <div class="inputBox">
                    <input type="tel" name="contact" required="required">
                    <span>Contact Number</span>
                </div>
                <div class="inputBox">
                    <input type="email" name="email" required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="submit" id="submit" value="SUBMIT">
                </div>
            </form>
        </div>
    </div>
</section>
<!-------- JS CODE --------->
<script>
    var navBar = document.getElementById("navBar");
    function showMenu(){
        navBar.style.right = "0";
    }
    function hideMenu(){
        navBar.style.right = "-200px";
    }
</script>

<!-------- AOS JS -------->
<script>
    AOS.init();
</script>

<!-------- sticky nav js -------->
<script>
   var navbar = document.getElementById("navbar");
   var menu = document.getElementById("menu");

   window.onscroll = function(){
        if(window.pageYOffset >= menu.offsetTop){
            navbar.classList.add("sticky");}
        else{
            navbar.classList.remove("sticky");
        }
   }
</script>

    </body>
</html>