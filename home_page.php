<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:./login/login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/1a28c72721.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home.css">
    <title>MiniProject</title>
</head>

<body>
    
    <section>
        
              <video id="background-video" autoplay loop muted poster="https://www.youtube.com/watch?v=s5Af8dF-1pE&t=243s">
                <source src="./image/myVideo.mp4" type="video/mp4">
                </video>
            <center>
                <div id="navbarItems">
                    <nav>
                        <span id="span1" >SocialHelp<i>.com</i></span>
                        <ul id="sideMenu">
                            <li><a class="navBar" href="./home_page.php">Home</a></li>
                            <li><a class="navBar" href="./product/upload.php">Lost And Found</a></li>
                            <li><a class="navBar" href="./product/product.php">Products</a></li>
                            <li><a class="navBar" href="./imgupload/index.php">Upload</a></li>
                            <li><a class="navBar" href="./about/about.php">About</a></li>
                            <li><a class="navBar" href="./Feedback/index.html"target="_blank">Feedback</a></li>
                            <li><a class="navBar" href="./login/logout.php">Logout</a></li>

                            <i class="fa-solid fa-xmark" onclick="closeMenu()"></i>

                        </ul>
                        <i class="fa-solid fa-bars" onclick="openMenu()"></i>
                    </nav>
                    <img id="avtar" src="./image/logo.jpg" alt="Login" onclick="Login()">
                </div>
            </center>
            <span class="span3"><marquee behavior="scroll" direction="left" >Welcome to our Website </marquee> </span>
            <span class="span3"><marquee behavior="scroll" direction="right">We deals with <b> Lost and Found </b>items</marquee> </span>

            <div id="container1">
                <div id="container1-width">
                    <div id="container1-content">
                        <i><em style="color: rgb(0, 19, 128);font-size: 42px;">SocialHelp.com</em>
                            <i style="color: rgb(0, 0, 0); font-size: 25px;">is to help people especially students as well as Teachers to track their lost items or can buy second-hand products<br>
                                In day-to-day scenarios, we always see such cases where student lose their important stuff.<br>
                            The project is built at the administrative end and thus only the administrator is guaranteed access. <br>
                            The main purpose of this project is to aid anyone inside the college premise who has lost any important thing.</i>


                    </div>
                    <br>
                </div>

            </div>
        </div>
        <div id="about">
            <div id="about-content">
                <span style="color: rgb(20, 20, 20); font-weight:bold; font-size:40px ">About SocialHelp</span><br><br>
                <div style="color:rgb(0, 0, 0);font-weight:bold; font-size:22px;">The purpose of this project is to develop a front-end along with a Database, where students can browse for Lost and Found Items, Second Hand Products, and Review System.
                    There is an official Mail System for this to report but many students who find such items fail to return them, In such cases therefore we will try to fix it.
                    !</div><br>
                <i class="fa-sharp fa-solid fa-circle-check"></i>
                <span style="margin-right: 50px;font-size: 20px;">Brilient Client Service</span><br>
                <i class="fa-sharp fa-solid fa-circle-check"></i>
                <span style="margin-right: 50px;font-size: 20px;">User Experience</span><br>
                <i class="fa-sharp fa-solid fa-circle-check"></i>
                <span style="margin-right: 110px;font-size: 20px;">24/7 Support</span><br>
                <i class="fa-sharp fa-solid fa-circle-check"></i>
                <span style="margin-right: 50px;font-size: 20px;">Free Consultations</span><br>
                <i class="fa-sharp fa-solid fa-circle-check"></i>
                <span style="margin-right: 50px;font-size: 20px;">Quick Tips and Advice</span><br>
                <br>
                <button type="button" id="more-about-us" onclick="moreAboutUs()">More About Us</button>
            </div>
            <div id="about-img"></div>
        </div>

        <div id="footer">
            <div id="footer-content">
                <div id="handlers">
                    <span id="span1">SocialHelp<i>.com</i></span><br><br>
                    <div style="color: white; margin-left: 10px;">
                        *“Social Help and Networking“ is a Web based application that works within a centralized network. It is mainly focused on scenarios to solve real world life based problems like if anyone’s item is lost like it can be a key,wallet,earpods etc.

                    </div>
                    <i class="fa-brands fa-square-facebook"></i>
                    <i class="fa-brands fa-square-twitter"></i>
                    <i class="fa-brands fa-square-instagram"></i>
                    <i class="fa-brands fa-square-youtube"></i>
                </div>
                <div class="links-and-info">
                    <h1 style="color: rgb(255, 255, 255);">Quick Links</h1><br>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                        <a class="a-tag" href="./home_page.html">Home</a></div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                        <a class="a-tag" href="./product/upload.php">Lost And Found</a></div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                        <a class="a-tag" href="./product/product.php">Products</a></div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                        <a class="a-tag" href="./imgupload/index.php">Upload</a></div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                        <a class="a-tag" href="./about/about.html">About</a></div>
                    
                </div>
                <div class="links-and-info" style="width: 280px;">
                    <h1 style="color: white;">Contact Info</h1><br>
                    <div style="display: flex; justify-content:space-between; word-wrap: break-word;">
                        <i class="fa-solid fa-location-dot"></i>
                        <span class="contact-info">H-Block Near Gla Mathura  (281406)  </span>
                    </div>
                    <br>
                    <hr><br>
                    <div>
                        <i class="fa-sharp fa-solid fa-phone"></i>
                        <span class="contact-info">(+91) 914085594</span>
                    </div>
                    <br>
                    <hr><br>
                    <div>
                        <i class="fa-solid fa-envelope"></i>
                        <span class="contact-info">socialhelp998@gmail.com</span>
                    </div>
                </div>
            </div>
            <br><br>

        </div>
    </section>


</body>
<script>
    function openMenu() {
        document.getElementById("sideMenu").style.right = "0";
    }

    function closeMenu() {
        document.getElementById("sideMenu").style.right = "-200px";
    }

    function Login() {
        window.open('UserLogin.html');
    }

    function Logout() {
        window.open('UserLogout.html');
    }

    function moreAboutUs() {
        window.open('About.html');
    }

   

</script>

</html>