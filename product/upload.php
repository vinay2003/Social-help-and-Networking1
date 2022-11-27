<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:../login/login_form.php');
}

?>
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy N Sell</title>
    <link rel="stylesheet" href="card.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
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
        <li><a href="../about/about.php">About</a></li>
        <li><a href="../Feedback/index.html" target=”_blank”>Feedback</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="card">
      <div class="image img-7"></div>
      <h2>Sunglass</h2>
      <p>Rarely used sunglass for men and women
        in good comdition. Lightly used with bill 
        and life time warranty.<br><b>Prakhar</b><br><b>500</b>
      </p>
    </div>

    <div class="card">
      <div class="image img-8"></div>
      <h2>Shoes</h2>
      <p>A pair of round-toe white sneakers, has regular styling, lace-up detail
        Canvas upper
        Cushioned footbed
        Textured and patterned outsole
        Warranty: 3 months
        Warranty provided by brand/manufacturer<br><b>Prakhar</b><br><b>1200</b></p>
    </div>

    <div class="card">
      <div class="image img-9"></div>
      <h2>Earphone</h2>
      <p>Boat airdrop 131 pro

        New fresh 1 year warranty left
        
        With bill tips and box <br><b>Shivang</b><br><b>650</b></p>
    </div>
    
    <div class="card">
      <div class="image img-10"></div>
      <h2>Mobile Phone</h2>
      <p>
        Vivo T1 Pro 5G
        
        Brand New condition
        
        With original Accessories
        
        Processor : Snapdragon 778G 5G
        
        4700 mAh Battery
        
        64MP Main Camera
        
        16MP Selfie Camera
        
        RAM : 6GB
        
        Storage : 128GB<br><b>Rohit</b><br><b>16,000</b></p>
    </div>

    <div class="card">
      <div class="image img-11"></div>
      <h2>Cooler</h2>
      <p>less power consumption, good quality cooling pads, noise filter, and inverter compatibility.additional features like remote control, auto-fill function, anti-mosquito and dust filter, additional ice chamber.<br><b>Mani</b><br><b>5,000</b></p>
    </div>

    <div class="card">
      <div class="image img-12"></div>
      <h2>Headphones</h2>
      <p>Selling as bought new headphones
        Best condition earphones (Scratch less)
        Box , each & every accessories available (Box almost new)
        CH-700N Features -
        <br><b>Rahul</b><br><b>800</b></p>
    </div>

    <?php
        $con = mysqli_connect('localhost','root',);
                    mysqli_select_db($con,'sell&buy');
                    if(isset($_POST['submit'])){
                        $files = $_FILES['file'];
                        $text = $_POST['text'];

                        // print_r($text);
                        // echo "<br>";
                        // print_r($files);

                        $filename = $files['name'];
                        $fileerror = $files['error'];
                        $filetmp = $files['tmp_name'];

                        $fileext = explode('.',$filename);
                        $filecheck = strtolower(end($fileext));

                        $fileextstored = array('png','jpg','jpeg');

                        if(in_array($filecheck,$fileextstored)){
                            $destinationfile = '../upload/'.$filename;
                            move_uploaded_file($text,$destinationfile);


                            $q = "INSERT INTO `buy`( `image`, `text`) 
                            VALUES ('$destinationfile','$text')";

                            $query = mysqli_query($con,$q);

                            $displayquery = "select * from buy";
                            $querydisplay = mysqli_query($con,$displayquery);
                            // $row = mysqli_num_rows($querydisplay);
                            while($result = mysqli_fetch_array($querydisplay)){
                                ?>
                              <div class="card">
                                <div class="image">
                                  <img src="<?php echo $result['image'];?>" width="300" height="200px">
                                </div>
                                <h1><?php echo "Product".$result['id'];?></h1>
                                <p><?php echo $result['text'];?></p>
                            </div>

                    <?php

                }
          }
      }
?>

  </div>
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