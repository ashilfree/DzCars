<?php require 'admin/database.php';
        $db = database::connect();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Jolly+Lodger" rel="stylesheet">
    <link rel="stylesheet" href="Css/source-code-pro.css">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/extra.css">
    <script src="jquery-3.3.1.min.js"></script>
    <!-- <script type='text/javascript' src="Js/jquery.js"></script> -->
    <script type='text/javascript' src="Js/jquery.isonscreen.min.js"></script>
    <script type='text/javascript' src="Js/countUp.min.js"></script>
    <script type='text/javascript' src="Js/jquery-ui.min.js"></script>
    <title>DzCars</title>
    <!--  -->
    <style>

    </style>

</head>

<body class="boxedd">
    <div class="container">
        <div id="wrapper">
            <header class="header-suck">
                <nav class="navbar" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="images/Layer%201@1X.png"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="sell-your-car.php">SELL YOUR CAR</a></li>
                            <li><a href="#">CONTACT US</a></li>
                            <li><a href="login.php">SIGN IN <span class="glyphicon glyphicon-log-in"></span></a></li>
                        </ul>

                        <!--
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
-->
                    </div><!-- /.navbar-collapse -->
                </nav>
            </header>
            <section class="main">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!--
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"> </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"> </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"> </li>
                </ol>
-->
                    <h1>FIND YOUR MATCH & IDEAL CAR HERE</h1>
                    <img src="images/Layer%202@1X.png">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/Layer%205@1X.png" alt="First slide" />
                        </div>
                        <div class="item">
                            <img src="images/Layer%205@1X.png" alt="Second slide" />
                        </div>
                        <div class="item">
                            <img src="images/Layer%205@1X.png" alt="Third slide" />
                        </div>
                    </div>
                    <!--
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
-->
                </div>

            </section>
            <section class="search">
                <div class="form1 col-xs-10 col-xs-offset-1">
                    <ul class="row">
                        <li class="col-xs-4" id="first"><a href="#1" data-toggle="tab">
                                <h4>Search used cars</h4>
                            </a></li>
                        <li class="col-xs-4" id="second"><a href="#2" data-toggle="tab">
                                <h4>Search new cars</h4>
                            </a></li>
                    </ul>

                    <div class="tab-container row">
                        <div class="tab-content">
                            <div class="tab-pane active" id="1">
                                <form action="" method="POST" role="form" id="contact-form">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="make">Make</label>
                                                <select name="make" id="make" class="form-control form-control-lg futura-font"
                                                    required="required">
                                                    <?php
                                                    echo '<option value="-1" class="futura-font">Any Make</option>';
                                                    $statement = $db->query('SELECT * FROM car_makes');
                                                    $makes = $statement->fetchAll();
                                                    foreach ($makes as $make){
                                                        echo '<option value="'. $make['make_id'].'" class="futura-font">'.$make['make'].'</option>';
                                                    }
                                            ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="model">Model</label>
                                                <select name="model" id="model" class="form-control form-control-lg futura-font"
                                                    required="required">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <select name="state" id="state" class="form-control form-control-lg futura-font"
                                                    required="required">
                                                    <option value="-1" class="futura-font">All</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <div class="row">
                                                    <div class="col-md-5 left-col"><input type="number" class="form-control futura-font input-lg"
                                                            name="price" id="min-price" placeholder="0" step="1"></div>
                                                    <div class="col-md-2"><label for="to" class="to">to</label></div>
                                                    <div class="col-md-5 right-col"><input type="number" class="form-control futura-font input-lg"
                                                            name="to" id="max-price" placeholder="0" step="1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="year">Year</label>
                                                <div class="row">
                                                    <div class="col-md-5 left-col"><input type="number" class="form-control futura-font input-lg"
                                                            name="price" id="min-price" placeholder="0" step="1" value="1900"></div>
                                                    <div class="col-md-2"><label for="to" class="to">to</label></div>
                                                    <div class="col-md-5 right-col"><input type="number" class="form-control futura-font input-lg"
                                                            name="to" id="max-price" placeholder="0" step="1" value="2018"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="kiolometrage">Kiolometrage</label>
                                                <div class="row">
                                                    <div class="col-md-5 left-col"><input type="number" class="form-control futura-font input-lg"
                                                            name="price" id="min-price" placeholder="0" step="1" value="0"></div>
                                                    <div class="col-md-2"><label for="to" class="to">to</label></div>
                                                    <div class="col-md-5 right-col"><input type="number" class="form-control futura-font input-lg"
                                                            name="to" id="max-price" placeholder="0" step="1" value="0"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="transmission">Transmission</label>
                                                <select name="transmission" id="transmission" class="form-control form-control-lg futura-font"
                                                    required="required">
                                                    <option value="-1" class="futura-font">Any</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="fuel-type">Fuel type</label>
                                                <select name="fuel-type" id="fuel-type" class="form-control form-control-lg futura-font"
                                                    required="required">
                                                    <option value="-1" class="futura-font">Any</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="papers">Papers</label>
                                                <select name="papers" id="papers" class="form-control form-control-lg futura-font"
                                                    required="required">
                                                    <option value="-1" class="futura-font">Any</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="question">Don’t know what to search for ?</p>
                                    <div class="form-actions row button-group">
                                        <button type="submit" class="btn btn-danger sea">Search</button>
                                        <a href="index.php" class="btn btn-default res">Reset</a>
                                    </div>
                                    <div class="row search-basic-group">
                                        <a class="search-basic"><span class="glyphicon glyphicon-search"></span> Basic
                                            Search</a>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="2">

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="popular-search">
                <div class="popular-search-container">
                    <h1 class="text-center popular-search-heading">Popular Searches</h1>
                    <div class="row popular-search-body">
                        <div class="col-sm-4 text-center">
                            <div class="post-container">
                                <div class="img-container"><img class="img-responsive" src="images/Layer%2011@1X.png"></div>
                                <div class="disc">
                                    <a href="#"><span class="glyphicon glyphicon-search"></span> Toyota Yaris</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="post-container">
                                <div class="img-container"><img class="img-responsive" src="images/Layer%2012@1X.png"></div>
                                <div class="disc">
                                    <a href="#"><span class="glyphicon glyphicon-search"></span> Peugeot 3008</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="post-container">
                                <div class="img-container"><img class="img-responsive" src="images/Layer%2013@1X.png"></div>
                                <div class="disc">
                                    <a href="#"><span class="glyphicon glyphicon-search"></span> Renault Clio 4</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div id="stm-fixed-cover" data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid stm-fixed-attachment vc_custom_1460955265861"
                    style="position: relative; left: -221.5px; box-sizing: border-box; width: 1583px; padding-left: 221.5px; padding-right: 221.5px;">
                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">


                                        <div class="stm-icon-counter">

                                            <div class="dp-in">
                                                <div class="clearfix">
                                                    <div class="stm-icon-counter-left">
                                                        <i class="stm-service-icon-car-listing"></i>
                                                    </div>

                                                    <div class="stm-counter-meta heading-font">
                                                        <div class="stm-value-wrapper">
                                                            <div class="stm-value" id="counter_6641">155000</div>
                                                            <div class="stm-value-affix">+</div>
                                                        </div>
                                                        <div class="stm-label"> cars for sale</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <script type="text/javascript">
                                            jQuery(document).ready(function ($) {
                                                var counter_6641 = new countUp("counter_6641", 0, 155000, 0, 3, {
                                                    useEasing: true,
                                                    useGrouping: true,
                                                    separator: ''
                                                });

                                                $(window).scroll(function () {
                                                    if ($("#counter_6641").isOnScreen())
                                                    {
                                                        counter_6641.start();
                                                    }
                                                });
                                            });
                                        </script>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">


                                        <div class="stm-icon-counter">

                                            <div class="dp-in">
                                                <div class="clearfix">
                                                    <div class="stm-icon-counter-left">
                                                        <i class="stm-service-icon-two_users"></i>
                                                    </div>

                                                    <div class="stm-counter-meta heading-font">
                                                        <div class="stm-value-wrapper">
                                                            <div class="stm-value" id="counter_9848">17500</div>
                                                            <div class="stm-value-affix">+</div>
                                                        </div>
                                                        <div class="stm-label">visitors per day</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                        <script type="text/javascript">
                                            jQuery(document).ready(function ($) {
                                                var counter_9848 = new countUp("counter_9848", 0, 17500, 0, 2.5, {
                                                    useEasing: true,
                                                    useGrouping: true,
                                                    separator: ''
                                                });

                                                $(window).scroll(function () {
                                                    if ($("#counter_9848").isOnScreen()) {
                                                        counter_9848.start();
                                                    }
                                                });
                                            });
                                        </script>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">


                                        <div class="stm-icon-counter">

                                            <div class="dp-in">
                                                <div class="clearfix">
                                                    <div class="stm-icon-counter-left">
                                                        <i class="stm-service-icon-reviews"></i>
                                                    </div>

                                                    <div class="stm-counter-meta heading-font">
                                                        <div class="stm-value-wrapper">
                                                            <div class="stm-value" id="counter_7690">3500</div>
                                                            <div class="stm-value-affix">+</div>
                                                        </div>
                                                        <div class="stm-label">dealer reviews</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                        <script type="text/javascript">
                                            jQuery(document).ready(function ($) {
                                                var counter_7690 = new countUp("counter_7690", 0, 3500, 0, 2, {
                                                    useEasing: true,
                                                    useGrouping: true,
                                                    separator: ''
                                                });

                                                $(window).scroll(function () {
                                                    if ($("#counter_7690").isOnScreen()) {
                                                        counter_7690.start();
                                                    }
                                                });
                                            });
                                        </script>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">


                                        <div class="stm-icon-counter">

                                            <div class="dp-in">
                                                <div class="clearfix">
                                                    <div class="stm-icon-counter-left">
                                                        <i class="stm-service-icon-shield-o"></i>
                                                    </div>

                                                    <div class="stm-counter-meta heading-font">
                                                        <div class="stm-value-wrapper">
                                                            <div class="stm-value" id="counter_5540">2500</div>
                                                            <div class="stm-value-affix">+</div>
                                                        </div>
                                                        <div class="stm-label">verified dealers</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                        <script type="text/javascript">
                                            jQuery(document).ready(function ($) {
                                                var counter_5540 = new countUp("counter_5540", 0, 2500, 0, 1.5, {
                                                    useEasing: true,
                                                    useGrouping: true,
                                                    separator: ''
                                                });

                                                $(window).scroll(function () {
                                                    if ($("#counter_5540").isOnScreen()) {
                                                        counter_5540.start();
                                                    }
                                                });
                                            });
                                        </script>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="newsletter">
                <form action="" method="POST" role="form" class="form-inline text-center">
                    <div class="form-group">
                        <label for="">Sign up for our Newsletter</label>
                        <input type="text" class="form-control input-lg" id="" placeholder="Input field">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-lg fa-envelope-o"></i></button>
                </form>
            </section>
            <section class="footer">
                <div class="row">
                    <div class="col-sm-4 op1">
                        <ul>
                            <li><a href="#"><strong>Home</strong></a></li>
                            <li><a href="#">About dz-cars.com</a></li>
                            <li><a href="#">Contact dz-cars.com</a></li>
                            <li><a href="#">Mobile Apps</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Sing up</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 op2">
                        <ul>
                            <li><a class="unique" href="#">How to sell your car?</a></li>
                            <li><a href="#">Find a car</a></li>
                            <li><a href="#">F.A.Q</a></li>
                            <li><a href="#">Share</a></li>
                            <li><a href="#">Follow us <i style="font-size:24px" class="fa fa-facebook-official"></i> <i
                                        style="font-size:24px" class="fa fa-twitter-square"></i> <i style="font-size:24px"
                                        class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 op2">
                        <img src="images/Layer%201@1X.png">
                        <div>
                            <p><a href="#" class="btn btn-app-store"><i class="fa fa-apple"></i> <span class="small">Download
                                        on the</span> <span class="big">App Store</span></a></p>
                        </div>
                        <div>
                            <p><a href="#" class="btn btn-app-store"><i class="iconify icon:fa-brands:google-play icon-inline:false"></i>
                                    <span class="small">ANDROID APP ON</span> <span class="big">Google play</span></a></p>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="footer-copyright text-center py-3">Copyright © 2018 <a href="https://mdbootstrap.com/education/bootstrap/">dz-cars.com</a>
                    Designed By Smart</div>
            </footer>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//code.iconify.design/1/1.0.0-rc5/iconify.min.js"></script>
    <script src="Js/script.js"></script>
</body>

</html>