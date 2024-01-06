<?php include "./connection.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!---Boxicons CDN Setup for icons-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container">
        <div class="single-product">
            <?php
          $productid=($_GET['product']);
          $query="SELECT * FROM products WHERE ID='{$productid}'";
          $product=mysqli_query($conn,$query);
          while($row=mysqli_fetch_assoc($product)){      
            ?>
            <div class="row">
                <div class="col-6">
                    <div class="product-image">
                        <div class="product-image-main">
                            <img src="http://localhost/project/admin/images/<?php echo $row['Image'] ?>" alt=""
                                id="product-main-image">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="breadcrumb">
                        <span><a href="index.php">Home</a></span>
                        <span class="active">Products</span>
                    </div>

                    <div class="product">
                        <div class="product-title">
                            <h2><?php echo $row['Title'] ?></h2>
                        </div>
                        <div class="product-rating">
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span class="review">(50 Review)</span>
                        </div>
                        <div class="product-price">
                            <span class="sale-price">KSH <?php echo $row['SellingPricing'] ?></span>
                        </div>

                        <div class="product-details">
                            <h3>Description</h3>
                            <p> <?php echo $row['Description'] ?></p>
                        </div>


                        <span class="divider"></span>

                        <div class="product-btn-group">
                            <div class="button buy-now"><i class='bx bxs-zap'></i><a
                                    href="purchase.php?product=<?php echo $row['ID'] ?>">Buy Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    

    <!--script-->
    <script src="script.js"></script>
</body>

</html>