<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:../login/login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2f9175e59f.js" crossorigin="anonymous"></script>
    <title>About</title>
    
    <link rel="stylesheet" href="about.css">
</head>

<body>
    <div class="s-layout">
        <nav class="navbar">
            <div class="content">
              <div class="logo">
                <a href="#">Buy N Sell</a>
              </div>
              <ul class="menu-list">
                <div class="icon cancel-btn">
                  <i class="fas fa-times"></i>
                </div>
                <li><a href="../home_page.php">Home</a></li>
                <li><a href="../product/upload.php">Lost and Found</a></li>
                <li><a href="../product/product.php">Product</a></li>
                <li><a href="../imgupload/index.php">Upload</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="../Feedback/index.html"  target=”_blank”>Feedback</a></li>
              </ul>
              <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
              </div>
            </div>
          </nav>
>
        <body>
            <div class="container">
                <div class="team_container">
                    <div class="text">Meet Our Team</div>
                </div>
                <div class="row">
                    <div class="profile-card">
                        <div class="profile-content">
                            <div class="profile-image">
                                <img src="../image/manisha.jpg" alt="">
                            </div>
                            <center>
                            <div class="desc">
                                <h2> Manisha Gupta </h2>
                                <centre><p> FRONTEND </p></centre>
                            </div>
                        
                            <div class="buttons">
                                <a href="https://www.linkedin.com/in/manisha-gupta-47128920a" class="btn">Linkedin</a>
                                <a href="https://www.linkedin.com/in/manisha-gupta-47128920a" class="btn">Follow Me</a>
                            </div>
                        </center>
                        </div>
                    </div>
        
                    <div class="profile-card">
                        <div class="profile-content">
                            <div class="profile-image">
                                <img src="../image/vinay.jpg" alt="">
                            </div>
                            <center>
                            <div class="desc">
                                <h2>Vinay Kumar Sharma</h2>
                                <p> FRONTEND & BACKEND </p>
                            </div>
                            <div class="buttons">
                                <a href="https://www.linkedin.com/in/vinay-sharma-326380240" class="btn">Linkedin</a>
                                <a href="https://www.linkedin.com/in/vinay-sharma-326380240" class="btn">Follow Me</a>
                            </div>
                        </center>
                        </div>
                    </div>
                    <div class="profile-card">
                        <div class="profile-content">
                            <div class="profile-image">
                                <img src="../image/abhishek.jpg" alt="">
                            </div>
                            <center>
                            <div class="desc">
                                <h2>Abhishek Sharma</h2>
                                <p> FRONTEND </p>
                            </div>
                            <div class="buttons">
                                <a href="https://www.linkedin.com/in/abhishek-kumar-sharma-811b61216" class="btn">Linkedin</a>
                                <a href="https://www.linkedin.com/in/abhishek-kumar-sharma-811b61216" class="btn">Follow Me</a>
                            </div>
                        </center>
                        </div>
                    </div>
                    <div class="profile-card">
                        <div class="profile-content">
                            <div class="profile-image">
                                <img src="../image/ss.jpg" alt="" >
                            </div>
                            <center>
                            <div class="desc">
                                <h2>Shivang Sudhakar</h2>
                                <p> FRONTEND </p>
                            </div>
                            <div class="buttons">
                                <a href="https://www.linkedin.com/in/shivang-sudhakar-50a2391b4" class="btn">Linkedin</a>
                                <a href="https://www.linkedin.com/in/shivang-sudhakar-50a2391b4" class="btn">Follow Me</a>
                            </div>
                        </center>
                        </div>
                    </div>
        
                    <div class="profile-card">
                        <div class="profile-content">
                            <div class="profile-image">
                                <img src="../image/partik.jpg" alt="">
                            </div>
                            <center>
                            <div class="desc">
                                <h2>Prateek Prajapati</h2>
                                <p> FRONTEND </p>
                            </div>
                            <div class="buttons">
                                <a href="https://www.linkedin.com/in/prateek-prajapati-504b98200"class="btn">Linkedin</a>
                                <a href="https://www.linkedin.com/in/prateek-prajapati-504b98200" class="btn">Follow Me</a>
                            </div>
                        </center>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>
    <script>
        const body = document.querySelector("body");
        const navbar = document.querySelector(".navbar");
        const menuBtn = document.querySelector(".menu-btn");
        const cancelBtn = document.querySelector(".cancel-btn");
        menuBtn.onclick = ()=>{
          navbar.classList.add("show");
          menuBtn.classList.add("hide");
          body.classList.add("disabled");
        }
        cancelBtn.onclick = ()=>{
          body.classList.remove("disabled");
          navbar.classList.remove("show");
          menuBtn.classList.remove("hide");
        }
        window.onscroll = ()=>{
          this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
        }
      </script>
    
</body>

</html>