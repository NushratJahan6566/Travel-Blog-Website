<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Beyond Horizon</title>
    <script src="https://kit.fontawesome.com/2be1af60ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/homepage2.css">
</head>
<body>
<header>
        <a href="hp.php" class="logo">দিগন্ত পেরিয়ে</a>
        <div class="navigation">
          <nav class="navigation_items">
            <!-- <a href="#home">Home</a> -->
            <a href="hp.php">আমাদের পরিচয়</a>
            <a href="package.html">আমাদের প্যাকেজ</a>
            <a href="booking.html">আমাদের সেবা সমূহ</a>
            <a href="blog.html">অনুপ্রেরণা</a>
            <a href="contactus.php"> যোগাযোগ </a>
            <a href="service.html"><button class="btn1"> বুকিং করুন </button></a>
            <!-- <a href="index.php" ><i class="fa-solid fa-user" style="color: #f4f1ed;"></i></a> -->
          </nav>
    
        </div>
      </header>w
    
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
      </p>
      <a href="logout.php">Logout</a>
    </div>
      <!-- footer section -->

      <section class="footer">
        
          <div class="footer__socials">
            <span>
              <a href="https://www.facebook.com/index.php/"><i class="fa-brands fa-facebook"></i></a>
            </span>
            <span>
              <a href="https://www.instagram.com/?hl=en"><i class="fa-brands fa-instagram"></i></a>
            </span>
            <span>
              <a href="https://www.bing.com/ck/a?!&&p=58309769a115c705JmltdHM9MTcxNTIxMjgwMCZpZ3VpZD0wNGE1MDNjZC1kZDQ4LTZmN2MtMGUzOS0xN2RlZGNkMzZlOGYmaW5zaWQ9NTIwNA&ptn=3&ver=2&hsh=3&fclid=04a503cd-dd48-6f7c-0e39-17dedcd36e8f&psq=twitter&u=a1aHR0cHM6Ly90d2l0dGVyLmNvbS8&ntb=1"><i class="fa-brands fa-twitter"></i></a>
            </span>
            <span>
              <a href="https://www.bing.com/ck/a?!&&p=dbe1e1ebf616ea53JmltdHM9MTcxNTIxMjgwMCZpZ3VpZD0wNGE1MDNjZC1kZDQ4LTZmN2MtMGUzOS0xN2RlZGNkMzZlOGYmaW5zaWQ9NTIwMQ&ptn=3&ver=2&hsh=3&fclid=04a503cd-dd48-6f7c-0e39-17dedcd36e8f&psq=linkedin&u=a1aHR0cHM6Ly93d3cubGlua2VkaW4uY29tLw&ntb=1"><i class="fa-brands fa-linkedin"></i></a>
            </span>
          </div>
          
        <div class="footer__bar">
          Copyright © 2024 Beyond Horizon. All rights reserved.
        </div>
      </section>

</body>
</html>