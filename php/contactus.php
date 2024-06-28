<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Travel Agency</title>
    <script src="https://kit.fontawesome.com/2be1af60ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/contactus.css">
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
      </header>

    <main>
        <section class="contact-form">
            <form action="procss_form.php" method="post">
                <div class="form-group">
                    <label for="name">নাম:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">ইমেইল:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="number">ফোন নম্বর:</label>
                    <input type="number" id="number" name="number">
                </div>
                <div class="form-group">
                    <label for="subject">বিষয়:</label>
                    <select id="subject" name="subject" required>
                        <option value="" disabled selected>একটি বিষয় নির্বাচন করুন</option>
                        <option value="General Inquiry">সাধারণ জিজ্ঞাসা</option>
                        <option value="Booking Information">বুকিং সংক্রান্ত তথ্য</option>
                        <option value="Package Details">প্যাকেজের বিবরণ</option>
                        <option value="Service Enquiry">সেবা অনুসন্ধান</option>
                        <option value="Other">অন্যান্য</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">বার্তা:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <div class="form-group form-group-submit">
                    <button name="submit">বার্তা প্রেরণ</button>
                </div>
            </form>
        </section>
    </main>
   

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
    কপিরাইট © ২০২৪ দিগন্ত পেরিয়ে। সর্বস্বত্ব সংরক্ষিত
    </div>
    </section>


</body>
</html>
