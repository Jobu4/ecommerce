<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vheadssamani</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/lightslider.css">
    <script src="./js/jquery.js"></script>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="./js/jquery.js"></script>
      <script src="./js/lightslider.js"></script>
    <script>
        $(document).ready(function(){
            $('#icon').click(function(){
                $('ul').toggleClass('shows');
            });
        });
    </script>
</head>
<body>

<?php include "nav.php" ?>
    <section>
        <div class="shop-header">
            <h1>CONTACT</h1>
            <p><a href="./index.php">HOME</a> / <span>CONTACT</span></p>
        </div>
    </section>
    <section>
            <div class="contact-container">
            <div class="contact-information">
                <h1>CONTACT INFO</h1>
                <p>Address:Nairobi,Kenya.</p>
                <p>Phone: 0701234567</p>
                <p>Email: vheadsamani@gmail.com</p>
        
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-pinterest"></a>
            </div>
           
<div class="information">

            <h1>Send Message:</h1>
           <div>
                <h3> Your Name</h3>
            <input type="text" >
        </div>
            <div>
            <h3>Your Email:</h3>
            <input type="email" placeholder="" >
            </div>
        
            <div>
                <h3>Message:</h3>
                <textarea name="" id="" cols="60" rows="10" ></textarea>
                
            </div>
            <button type="submit" name="nameInput" required>Submit Message</button>
    
    </div>
            </div>
    </section>
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106208.30615489521!2d36.84638493712015!3d-1.2672953950690895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi!5e0!3m2!1sen!2ske!4v1691400519745!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <footer  class="footer">
        <div class="footer-container">
        <div class="contact-info">
            <h1>CONTACT INFO</h1>
            <p>Address:Nairobi,Kenya.</p>
            <p>Phone: 0701234567</p>
            <p>Email: vheadsamani@gmail.com</p>
    
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-pinterest"></a>
        </div>
        <div class="footer-links">
            <h1>ACCOUNTS</h1>
            <div> <a href="./index.php">HOME</a></div>
           <div><a href="">ABOUT US</a></div>
            <div><a href="">STORE INFORMATION</a></div>
            
    
        </div>
        <div class="footer-news">
            <h1>NEWSLETTERS</h1>
            <p style="width: 350px;">Do you want to get information about our offers and new unique furniture!!JOIN THE CHAT BY  SUBSCRIBING TO OUR CHANNEL INFORMATION</p>
            <input type="email" placeholder="Your emailaddress" class="email">
            <p><button type="submit" name="nameInput" required>Subscribe</button></p>
    
        </div>
    </div>
    <div class="copyright">
    
    &#169 copyright v heads samani.all rights reserved 2023 <br>designed by Job Mutuku.
    
    </div>
      </footer>
      <script src="./js/app.js"></script>
</body>
</html>