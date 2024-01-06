<?php include "nav.php" ?>
<div>
    <h1 class="header-content">BUILD YOUR HOME,<br>WE'LL DESIGN IT <br>FOR YOU.</h1>
</div>
</header>
<section>
    <div class="offer-container">
        <div class="offer-shiny">
            <span></span>
            <img src="./images/offer-1.jpg" alt="" class=""><a href="./index.html"></a>
        </div>
        <div class="offer-shiny">
            <span></span>
            <img src="./images/offe-2.jpg" alt="" class=""><a href="./index.html"></a>
        </div>
    </div>
    <div>
        <h1 class="section-header-2">New Arrivals</h1>
        <h1 class="section-header-1">Browse the collection of our new products</h1>
    </div>
    <div class="section-container">
        <?php
            $query="SELECT * FROM products";
            $products=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($products)){ 
            ?>
        <div class="card-container">
            <div class="cards">
                <img src="http://localhost/project/admin/images/<?php echo $row['Image'] ?>" alt="image" width="250px"
                    height="300px" class="card-image">
                <div class="card-content">
                    <small><?php echo $row['Title'] ?></small><br>
                    <small>KSH <?php echo $row['SellingPricing'] ?></small><br>
                    <br>
                    <span class=" cart-button"><button><a href="product.php?product=<?php echo $row['ID'] ?>"
                                class="cart-link">buy now</a></button> </span>
                </div>
            </div>
        </div>
        <?php } ?>


    </div>
    <section>
        <div>
            <h1 class="section-header-2">Top Rated Products</h1>
            <h1 class="section-header-1"> Awide selection of items to choose from.</h1>
        </div>

        <section class="slider">
            <ul id="autoWidth" class="cs-hidden">
                <?php
                $query="SELECT * FROM products ORDER BY Title DESC LIMIT 3";
                $newest_products=mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($newest_products)){               
                ?>
                <li class="item-a">
                    <div class="box">
                        <div class="slide-img">
                            <img src="http://localhost/project/admin/images/<?php echo $row['Image'] ?>" alt="">

                            <div class="overlay">
                                <a href="." class="buy-btn">Buy Now</a>
                            </div>
                        </div>
                        <div class="detail-box">
                            <div class="type">
                                <a href="">new categories</a>
                                <?php 
                                $categoryid= $row['ArtType'];
                                $query="SELECT * FROM categories WHERE ID='{$categoryid}'";
                                $categories=mysqli_query($conn,$query);
                                while($category=mysqli_fetch_assoc($categories)){
                                
                                ?>

                                <span><?php echo $category['name'] ?></span>
                                <?php } ?>
                            </div>

                        </div>
                    </div>

                </li>
                <?php } ?>

            </ul>
        </section>

    </section>
    <section>
        <div class="offer-container">
            <div class="offer-shiny">
                <span></span>
                <img src="./images/black-friday.jpg" alt="" class=""><a href=""></a>
            </div>
            <div class="offer-shiny">
                <span></span>
                <img src="./images/offer-3.jpg" alt="" class=""><a href=""></a>
            </div>
        </div>
    </section>

</section>


<section class="section-container">
    <div>
        <div><img src="./images/icons8-fast-delivery-64.png" alt="" style="float: left; margin-top: 20px;"></div>
        <div class="section2-content">
            <h3>FAST DELIVERY</h3>
            <P>Fast delivery of upto 24hours.</P>
        </div>
    </div>
    <div>
        <div><img src="./images/icons8-worldwide-delivery-64.png" alt="" style="float: left; margin-top: 20px;">
        </div>
        <div class="section2-content">
            <h3>GLOBAL SHIPPING</h3>
            <P>Qiuck and on-time global shipping</P>
        </div>
    </div>

    <div>
        <div><img src="./images/icons8-custom.gif" alt="" style="float: left; margin-top: 20px;"></div>
        <div class="section2-content">
            <h3>CUSTOM DESIGNS</h3>
            <P style="max-width: 180px;">We offer the opportunity to make a custom order just the way you like it.
            </P>
        </div>
    </div>

    <div id="one">
        <div><img src="./images/icons8-black-friday-64.png" alt="" style="float: left; margin-top: 10px;"></div>
        <div class="section2-content">
            <h3>BLACK FRIDAY OFFERS</h3>
            <P>Shocking discount on every friday.</P>
        </div>
    </div>


</section>
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
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-909c8b74-cfcb-4bb5-afdf-a7e9f7e24c74"></div>
</body>

</html>