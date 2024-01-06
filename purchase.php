<?php include "connection.php" ?>
<?php 
if(isset($_POST['pay'])){
    $fullname=$_POST['full-name'];
    $card=$_POST['credit-card-num'];
    $Email=$_POST['Email'];
    $mobile=$_POST['MobileNumber'];
    $EnquiryNumber=mt_rand(100000000, 999999999);
    $status="pending";
    $send = "INSERT INTO tblenquiry(FullName,credit_card, Email, MobileNumber,EnquiryNumber,Status) VALUES ('$fullname', '$card','$Email', '$mobile', '$EnquiryNumber','$status')";
    $query=mysqli_query($conn, $send);
    if ($query) {
echo "<script>alert('payment successful');</script>";
echo "<script>window.location.href ='pay_success.php'</script>";

  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }

}
// EnquiryNumber
// FullName
	// Email
    // MobileNumber

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./styles.css">
    <!---Boxicons CDN Setup for icons-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/bb515311f9.js" crossorigin="anonymous"></script>

<title>Credit Card Checkout</title>

<body>
    <div class="checkout-container">
        <div class="left-side">
            <div class="text-box">
                <?php
                $productId=$_GET['product'];
                $query="SELECT * FROM products WHERE ID='{$productId}'";
                $products=mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($products)){
                ?>
                <h1 class="home-heading"><?php echo $row['Title'] ?></h1>
                <p class="home-price"><em><?php echo $row['SellingPricing'] ?></em></p>
                <hr class="left-hr" />
            </div>
        </div>

        <div class="right-side">
            <div class="receipt">
                <h2 class="receipt-heading">Receipt Summary</h2>
            </div>

            <div class="payment-info">
                <h3 class="payment-heading">Payment Information</h3>
                <form class="form-box" method="post" action="">
                    <div>
                        <label for="full-name">Full Name</label>
                        <input id="full-name" name="full-name" placeholder="Enter your name" required type="text" />
                    </div>

                    <!-- email -->
                    <div>
                        <label for="email">email</label>
                        <input id="email" name="Email" placeholder="Enter your email" required type="email" />
                    </div>
                    <div>
                        <label for="email">Mobile</label>
                        <input id="full-name" name="MobileNumber" placeholder="Enter your Mobile" required
                            type="text" />
                    </div>



                    <div>
                        <label for="credit-card-num">Card Number
                            <span class="card-logos">
                                <i class="card-logo fa-brands fa-cc-visa"></i>
                                <i class="card-logo fa-brands fa-cc-amex"></i>
                                <i class="card-logo fa-brands fa-cc-mastercard"></i>
                                <i class="card-logo fa-brands fa-cc-discover"></i> </span></label>
                        <input id="credit-card-num" name="credit-card-num" placeholder="1111-2222-3333-4444" required
                            type="text" />
                    </div>

                    <div>

                    </div>
                    <button href="bgQG8ohz7OzdxMyBWzVvIk8gz7vKRgKN" class="btn" type="submit" name="pay">
                        <i class="fa-solid fa-lock"></i> Pay now
                    </button>
                </form>

                <p class="footer-text">
                    <i class="fa-solid fa-lock"></i>
                    Your credit card infomration is encrypted
                </p>
            </div>
        </div>
    </div>
    
</body>

</html>

<?php } ?>