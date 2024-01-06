<?php include "connection.php"; ?>
<?php include "nav.php"; ?>

<?php 
$category_id = $_GET['category'];
$query = "SELECT * FROM products WHERE ArtType='$category_id'";
$category_products = mysqli_query($conn, $query);

// Fetch the first product to get its category
if ($product_category = mysqli_fetch_assoc($category_products)) {
    $categoryID = $product_category['ArtType'];
    $query = "SELECT * FROM categories WHERE ID ='{$categoryID}'";
    $category_names = mysqli_query($conn, $query);
    $category_name = mysqli_fetch_assoc($category_names);
?>

<section>
    <div class="shop-header">
        <!-- Display the category name -->
        <h1><?php echo $category_name['name'] ?></h1>
        <p><a href="./index.html">HOME</a>\ <span><?php echo $category_name['name'] ?></span></p>
    </div>
</section>
<section>
    <section class="products">
        <!-- Loop through products of the category -->
        <div class="products-container">
        <?php
        mysqli_data_seek($category_products, 0); // Reset the result set pointer
        while ($product_category = mysqli_fetch_assoc($category_products)) {
        ?>
        <div class="section-container">
            <div class="card-container">
                <div class="cards">
                    <img src="http://localhost/project/admin/images/<?php echo $product_category['Image'] ?>"
                        alt="chair" width="250px" height="300px" class="card-image">
                    <div class="card-content">
                        <small><?php echo $product_category['Title'] ?></small><br>
                        <small><?php echo $product_category['SellingPricing'] ?>/=</small><br>
                        <span class="cart-button">
                            <button><a href="product.php?product=<?php echo $product_category['ID'] ?>"
                                    class="cart-link">Buy Now</a></button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        </div>
    </section>
</section>
<?php } ?>    
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
