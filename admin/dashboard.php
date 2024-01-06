<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['agmsaid']==0)) {
  header('location:logout.php');
  } 




?>
<!DOCTYPE html>
<html lang="en">

<head>



    <title>Welcome to the admin side</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"
        media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet">
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
</head>

<body>
    <!-- container section start -->
    <section id="container" class="">


        <?php include_once('includes/header.php');?>
        <!--header end-->

        <!--sidebar start-->
        <?php include_once('includes/sidebar.php');?>
        <!--sidebar end-->

        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!--overview start-->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-laptop"></i> Main overview</h3>
                        <ol class="breadcrumb">
                            <li><a href="dashboard.php">Home</a></li>
                            <li>Overview</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="info-box green-bg">
                            <?php $query=mysqli_query($con,"Select * from admin");
                $admins=mysqli_num_rows($query);
                 ?>

                            <div class="count"><?php echo $admins;?></div>
                            <div class="title"> <a class="dropdown-item" href="view_users">Total Admins</a></div>
                        </div>
                        <!--/.info-box-->
                    </div>
                    <!--/.col-->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="info-box brown-bg">
                            <?php $query1=mysqli_query($con,"Select * from users");
                            $uenqcount=mysqli_num_rows($query1);
                            ?>

                            <div class="count"><?php echo $uenqcount;?></div>
                            <div class="title"> <a class="dropdown-item" href="view_users">users</a>
                            </div>
                        </div>
                        <!--/.info-box-->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="info-box gray-bg ">
                            <?php $query1=mysqli_query($con,"Select * from categories");
                             $aenqcount=mysqli_num_rows($query1);
                             ?>

                            <div class="count"><?php echo $aenqcount;?></div>
                            <div class="title"> <a class="dropdown-item" href="#" style="color:black;">categories</a>
                            </div>
                        </div>
                        <!--/.info-box-->
                    </div>
                    <!--/.col-->


                    <!--/.col-->


                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="info-box dark-bg">
                            <?php $query2=mysqli_query($con,"Select * from tblenquiry where status='pending'");
                            $artcount=mysqli_num_rows($query2);
                            ?>

                            <div class="count"><?php echo $artcount;?></div>
                            <div class="title"> <a class="dropdown-item" href="#" style="color:black;">pending
                                    orders</a>
                            </div>
                        </div>
                        <!--/.info-box-->
                    </div>
                    <!--/.col-->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="info-box green-bg">
                            <?php $query1=mysqli_query($con,"Select * from tblenquiry");
$amcount=mysqli_num_rows($query1);
?>

                            <div class="count"><?php echo $amcount;?></div>
                            <div class="title"> <a class="dropdown-item" href="view_users.php">purchases</a>
                            </div>
                        </div>
                        <!--/.info-box-->
                    </div>
                    <!--/.col-->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="info-box dark-bg">
                            <?php $query2=mysqli_query($con,"Select * from tblenquiry where status='delivered'");
$apcount=mysqli_num_rows($query2);
?>

                            <div class="count"><?php echo $apcount;?></div>
                            <div class="title"> <a class="dropdown-item" href="#" style="color:black;">Delivered
                                    products</a></div>
                        </div>
                        <!--/.info-box-->
                    </div>
                    <!--/.col-->


                </div>
                <!--/.row-->
                <?php include_once('includes/footer.php');?>


            </section>

        </section>
        <!--main content end-->
    </section>
    <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js"></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js">
        </script>
        <!-- Full Google Calendar - Calendar -->
        <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
        <!--script for this page only-->
        <script src="js/calendar-custom.js"></script>
        <script src="js/jquery.rateit.min.js"></script>
        <!-- custom select -->
        <script src="js/jquery.customSelect.min.js"></script>
        <script src="assets/chart-master/Chart.js"></script>

        <!--custome script for all page-->
        <script src="js/scripts.js"></script>
        <!-- custom script for this page-->
        <script src="js/sparkline-chart.js"></script>
        <script src="js/easy-pie-chart.js"></script>
        <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="js/jquery-jvectormap-world-mill-en.js"></script>
        <script src="js/xcharts.min.js"></script>
        <script src="js/jquery.autosize.min.js"></script>
        <script src="js/jquery.placeholder.min.js"></script>
        <script src="js/gdp-data.js"></script>
        <script src="js/morris.min.js"></script>
        <script src="js/sparklines.js"></script>
        <script src="js/charts.js"></script>
        <script src="js/jquery.slimscroll.min.js"></script>
        <script>
        //knob
        $(function() {
            $(".knob").knob({
                'draw': function() {
                    $(this.i).val(this.cv + '%')
                }
            })
        });

        //carousel
        $(document).ready(function() {
            $("#owl-slider").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true

            });
        });

        //custom select box

        $(function() {
            $('select.styled').customSelect();
        });

        /* ---------- Map ---------- */
        $(function() {
            $('#map').vectorMap({
                map: 'world_mill_en',
                series: {
                    regions: [{
                        values: gdpData,
                        scale: ['#000', '#000'],
                        normalizeFunction: 'polynomial'
                    }]
                },
                backgroundColor: '#eef3f7',
                onLabelShow: function(e, el, code) {
                    el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                }
            });
        });
        </script>

</body>

</html>