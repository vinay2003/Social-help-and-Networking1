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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imageuploader</title>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="upload.css">
</head>
<body>

                <!-- Sidebar -->
                <!-- <div class="s-layout__sidebar">
                  <a class="s-sidebar__trigger" href="#0">
                     <i class="fa fa-bars"></i>
                  </a>
                
                  <nav class="s-sidebar__nav">
                    <h1>Content</h1>
                     <ul>
                        <li>
                           <a class="s-sidebar__nav-link" href="user_page.php">
                              <i class="fa fa-home"></i><em>Home</em>
                           </a>
                        </li>
                        <li>
                           <a class="s-sidebar__nav-link" href="upload.php">
                            <i class="fa-solid fa-person-circle-question"></i><em>Lost and Found</em>
                           </a>
                        </li>
                        <li>
                           <a class="s-sidebar__nav-link" href="product.php">
                            <i class="fa-solid fa-bag-shopping"></i><em>Product</em>
                           </a>
                        </li>
                        <li>
                          <a class="s-sidebar__nav-link" href="index.php">
                            <i class="fa-solid fa-cloud-arrow-up"></i><em>Upload</em>
                          </a>
                       </li>
                       <li>
                        <a class="s-sidebar__nav-link" href="about.html">
                          <i class="fa-solid fa-address-card"></i><em>About</em>
                        </a>
                       </li>
                       <li>
                        <a class="s-sidebar__nav-link" href="https://docs.google.com/spreadsheets/d/1q3FDV8_45cT-6OEHGzu7sgB2J5sPMuBcQRofsr2lpSs/edit#gid=0">
                          <i class="fa-solid fa-message-lines"></i><em>Feedback</em>
                        </a>
                       </li>
                     </ul>
                  </nav>
                </div> -->
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
                <li><a href="./index.php">Image Uploder</a></li>
                <li><a href="../about/about.php">About</a></li>
                <li><a href="../Feedback/index.html"  target=”_blank”>Feedback</a></li>
              </ul>
              <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
              </div>
            </div>
          </nav>
            
        </div>
    <div class="container">
        <h1 class="text-white bg-dark text-center">
            Lost and Found
        </h1>
        <div class=" m-auto d-block ">
        <form action="../product/upload.php" method="post" enctype="multipart/form-data">
            
            <div class="form-group text-white">
                <label for="file"> Product: </label>
                <input type="file" name="file" id="file" class="form-control">
            </div>
            <div class="form-group ">
            <label for="validationTextarea" class="form-label">Discription:</label>
            <textarea class="form-control " name="text" id="validationTextarea" placeholder="Required example textarea" required></textarea>
            </div>
            <input type="submit" name="submit" value="submit" class="btn-btn-success1">
        </form>
        </div>
    </div>
    <div class="container margin-bottom">
        <h1 class="text-white bg-dark text-center ">
            Sell and Buy
        </h1>
        <div class=" m-auto d-block">
        <form action="../product/product.php" method="post" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="file"> Product: </label>
                <input type="file" name="file" id="file" class="form-control">
            </div>
            <class="form-group">
            <label for="validationTextarea" class="form-label">Discription:</label>
            <textarea class="form-control" name="text" id="validationTextarea" placeholder="Required example textarea" required></textarea>
            </div>
            <input type="submit" name="submit" value="submit" class="btn-btn-success2">
        </form>
        </div>
    </div>
</body>
</html>