<?php session_start(); ?>
<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore a wide selection of high-quality furniture for every room at V Heads Samani Discover modern living room sofas, stylish bedroom sets, elegant dining tables, and more. Transform your home with our curated collection of furniture that combines comfort, functionality, and timeless design. Shop now for the perfect pieces to create a personalized and inviting space.">
    <meta name="keywords" content="Modern living room furniture, Leather sofas, Sectional couches, Coffee tables, TV stands, Recliners, Accent chairs, Lounge chairs, Wall art for living room,
Queen size beds, Platform beds, Bedroom sets, Dressers, Nightstands, Bedside tables, Mattresses, Wardrobes, Bedroom decor,
Dining tables, Dining chairs, Dining sets, Buffet tables, Sideboards, Bar stools, Counter height tables, Formal dining room furniture, Dining room lighting,
Desks, Office chairs, Bookcases, Filing cabinets, Computer desks, Ergonomic chairs, Home office decor, Standing desks, Office organization,
Patio furniture, Outdoor dining sets, Garden benches, Outdoor sofas, Hammocks, Sun loungers, Outdoor rugs, Picnic tables, Outdoor decor,
Accent tables, Storage furniture, Console tables, Entryway benches, Shoe racks, Room dividers, Children's furniture, Nursery furniture, Vintage furniture">
    <meta name="author" content="v heads samani">
    <meta name="robots" content="index, follow">
    <title>vheadssamani</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/lightslider.css">
    <script src="./js/jquery.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/lightslider.js"></script>
</head>

<body>

    <header>
        <nav>
            <label class="logo">V HEADS SAMANI</label>
            <ul>
                <li><a  href="index.php">home</a></li>
                <li><a href="">shop</a>
                        <div class="sub-menu-1">
                            <ul>
                                <!-- get the categories dynamicaly -->
                                <?php
                            $query="SELECT * FROM categories";
                            $result=mysqli_query($conn,$query);
                            while($row=mysqli_fetch_assoc($result)){
                             ?>
                                <li><a
                                        href="categories.php?category=<?php echo $row['ID'] ?>"><?php echo $row['name'] ?></a>
                                </li><br>
                                <?php } ?>
                            </ul>
                        </div>

                </li>
                <li><a href="./about.php">about us</a></li>
                <li><a href="./contact.php">contact</a></li>

            </ul>
            <label id="icon">
                <i class="fa fa-bars" style="font-size: 48px;"></i>

            </label>
        </nav>



