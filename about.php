<?php include "nav.php" ?>
<style>
    
.container1{
    position: relative;
    text-align: center;
    color:black;
}
.photo{
    box-shadow: 2px 2xp 10px 5px rgba(0,0,0,0.3);
    height:auto;
    max-width: 1340px;
    
   
}
.content{
    position: absolute;
    top: 10%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 5px;
    margin: 10px 10px;
    background-color:rgba(135, 206, 235,0.03);/* used 0.03 to manage the opacity of the text back ground*/
    font-size: 48px;
    font-weight: lighter;
}
.paragraph{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: column;
    margin: bottom 20px;
    
}
.p-1{
    border: 2px solid black;
    width: 50%;
    padding: 20px;
    margin: 0 auto;
    margin-top: 60px;
    color:#1a1d4e;
    box-shadow: 2px 2xp 10px 5px rgba(0,0,0,0.3);

}
.title1{
    font-size:38px;
    font-weight:bolder;
    text-align:center;
    padding:5px;

}
.note1{
    font-size:20px;
    font-weight:lighter;
}
</style>
<section>
<section>
        <div class="shop-header">
            <h1>ABOUT US</h1>
            <p><a href="./index.php">HOME</a> / <span>ABOUT US</span></p>
        </div>
    </section>

    </div>
     <div class="container1">
     <img id="image-1" src="./images/about.jpeg" alt="" class="photo">
     <h1 class="content">ABOUT US</h1>
    </div>
    <section class="section">
    <div class="paragraph">
    <div class="p-1">
        <h1 class="title1">WELCOME TO OUR E-SHOP</h1>
       <p class="note1">The 5 Heads Samani e-shop is a dynamic online platform that curates an exclusive collection of unique and meticulously crafted art pieces and furniture. Born out of a passion for art and design, the e-shop was established by a group of visionary artisans who shared a common goal: to bridge the gap between creativity and functionality. Inspired by diverse artistic expressions and cultural influences, the founders embarked on a journey to create an immersive online destination where customers could explore a wide range of handpicked products, each reflecting the dedication and innovation of its creator. The 5 Heads Samani e-shop has rapidly evolved into a haven for art enthusiasts and design aficionados alike, fostering a community that values both aesthetic excellence and the stories behind each creation. Through careful curation and an unwavering commitment to quality, the e-shop has cemented its place as a trailblazer in the realm of online art and furniture retail.</p>
    </div>
</div>

</section>
<div class="elfsight-app-74d4fb32-9b94-4f9e-bda9-a0a02447258b"></div>
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<footer class="footer">
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
            <div><a href="./">ABOUT US</a></div>
            <div><a href="">STORE INFORMATION</a></div>


        </div>
        <div class="footer-news">
            <h1>NEWSLETTERS</h1>
            <p style="width: 350px;">Do you want to get information about our offers and new unique furniture!!JOIN
                THE CHAT BY SUBSCRIBING TO OUR CHANNEL INFORMATION</p>
            <input type="email" placeholder="Your emailaddress" class="email">
            <p><button type="submit" name="nameInput" required>Subscribe</button></p>

        </div>
    </div>
    <div class="copyright">

        &#169 copyright v heads samani.all rights reserved 2023 <br>designed by 5 heads.

    </div>




</footer>
<script src="./js/app.js"></script>


</body>

</html>