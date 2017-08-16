<!DOCTYPE html>
<html>

<head>
    <title>KickGrass</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Vide" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="assets/css/kickgrass/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="assets/css/kickgrass/style.css" rel='stylesheet' type='text/css' />
    <!-- js -->
    <script src="assets/js/kickgrass/jquery-1.11.1.min.js"></script>
    <!-- start-smoth-scrolling -->
    <link href="assets/css/kickgrass/font-awesome.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <!--- start-rate---->
    <link rel="stylesheet" href="assets/css/kickgrass/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
    <!---//End-rate---->

</head>

<body>
    <?php require_once 'model/appConnection.php'; ?>
    <?php require_once 'model/kickGrassHotel/kickGrassModel.php'; ?>
    <div class="header">

        <div class="container">

            <div class="logo">
                <h1><a href="index.html"><b>T<br>H<br>E</b>Kick Grass<span>The Best Hotel</span></a></h1>
            </div>

            <div class="header-ri">
                <ul class="social-top">
                    <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
                    <li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
                    <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
                    <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!---->
    <!--content-->
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="kitchen.html"> <img class="first-slide" src="assets/images/biz/kickgrass/ba.jpg" alt="First slide"></a>

            </div>
            <div class="item">
                <a href="care.html"> <img class="second-slide " src="assets/images/biz/kickgrass/ba1.jpg" alt="Second slide"></a>

            </div>
            <div class="item">
                <a href="hold.html"><img class="third-slide " src="assets/images/biz/kickgrass/ba2.jpg" alt="Third slide"></a>

            </div>
        </div>

    </div>
    <!-- /.carousel -->
    <!--content-->
    <div class="content-top ">
        <div class="container ">
            <div class="spec ">
                <h3>Menu</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>
            <div class="tab-head ">
                <nav class="nav-sidebar">
                    <ul class="nav tabs ">
                        <li class="navigation active"><a href="#tab0" data-toggle="tab">OFFERS</a></li>
                        <li class="navigation"><a href="#tab1" data-toggle="tab">BURGER</a></li>
                        <li class="navigation"><a href="#tab2" data-toggle="tab">PIZZA</a></li>
                        <li class="navigation"><a href="#tab3" data-toggle="tab">SANDWICH</a></li>
                        <li class="navigation"><a href="#tab4" data-toggle="tab">STARTER</a></li>
                        <li class="navigation"><a href="#tab5" data-toggle="tab">CURRIES</a></li>
                        <li class="navigation"><a href="#tab6" data-toggle="tab">BREADS</a></li>
                        <li class="navigation"><a href="#tab7" data-toggle="tab">BRIYANI</a></li>
                    </ul>
                </nav>
                <div class=" tab-content tab-content-t ">

                    <div class="tab-pane active text-style" id="tab0">
                        <div class=" con-w3l">
                            <?php foreach($class['BURGER'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="tab-pane text-style" id="tab1">
                        <div class=" con-w3l">
                            <?php foreach($class['BURGER'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="tab-pane text-style" id="tab2">
                        <div class=" con-w3l">
                            <?php foreach($class['PIZZA'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="tab-pane text-style" id="tab3">
                        <div class=" con-w3l">
                            <?php foreach($class['SANDWICH'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-toggle="modal" data-target="#myModal" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>
                                        <!-- Modal -->
                                        <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Modal Header</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Some text in the modal.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="tab-pane text-style" id="tab4">
                        <div class=" con-w3l">
                            <?php foreach($class['STARTER'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="tab-pane text-style" id="tab5">
                        <div class=" con-w3l">
                            <?php foreach($class['CURRIES'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="tab-pane text-style" id="tab6">
                        <div class=" con-w3l">
                            <?php foreach($class['BREADS'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="tab-pane text-style" id="tab7">
                        <div class=" con-w3l">
                            <?php foreach($class['BRIYANI'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>

                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>


            <div class="tab-head ">
                <nav class="nav-sidebar">
                    <ul class="nav tabs ">
                        <li class="navigation active"><a href="#tab8" data-toggle="tab">RICE</a></li>
                        <li class="navigation"><a href="#tab9" data-toggle="tab">NOODLES</a></li>
                        <li class="navigation"><a href="#tab10" data-toggle="tab">PASTAS</a></li>
                        <li class="navigation"><a href="#tab11" data-toggle="tab">SOUP</a></li>
                        <li class="navigation"><a href="#tab12" data-toggle="tab">MOJITOS AND COOLERS</a></li>
                        <li class="navigation"><a href="#tab13" data-toggle="tab">MILKSHAKES</a></li>
                        <li class="navigation"><a href="#tab14" data-toggle="tab">DESSERTS</a></li>
                    </ul>
                </nav>
                <div class=" tab-content tab-content-t ">

                    <div class="tab-pane active text-style" id="tab8">
                        <div class=" con-w3l">
                            <?php foreach($class['RICE'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                    <div class="tab-pane text-style" id="tab9">
                        <div class=" con-w3l">
                            <?php foreach($class['NOODLES'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="tab-pane text-style" id="tab10">
                        <div class=" con-w3l">
                            <?php foreach($class['PASTAS'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                    <div class="tab-pane text-style" id="tab11">
                        <div class=" con-w3l">
                            <?php foreach($class['SOUP'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                    <div class="tab-pane text-style" id="tab12">
                        <div class=" con-w3l">
                            <?php foreach($class['MOJITOS AND COOLERS'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>



                    <div class="tab-pane text-style" id="tab13">
                        <div class=" con-w3l">
                            <?php foreach($class['MILKSHAKES'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                    <div class="tab-pane text-style" id="tab14">
                        <div class=" con-w3l">
                            <?php foreach($class['DESSERTS'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div><br><br>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>


            <div class="tab-head ">
                <nav class="nav-sidebar">
                    <ul class="nav tabs ">
                        <li class="navigation active"><a href="#tab15" data-toggle="tab">COLD BEVERAGES</a></li>
                        <li class="navigation"><a href="#tab16" data-toggle="tab">FRESH JUICE</a></li>
                        <li class="navigation"><a href="#tab17" data-toggle="tab">HOT BEVERAGES</a></li>
                        <li class="navigation"><a href="#tab18" data-toggle="tab">ICE CREAM</a></li>
                        <li class="navigation"><a href="#tab19" data-toggle="tab">SIDES</a></li>

                    </ul>
                </nav>
                <div class=" tab-content tab-content-t ">

                    <div class="tab-pane active text-style" id="tab15">
                        <div class=" con-w3l">
                            <?php foreach($class['COLD BEVERAGES'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                    <div class="tab-pane text-style" id="tab16">
                        <div class=" con-w3l">
                            <?php foreach($class['FRESH JUICE'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="tab-pane text-style" id="tab17">
                        <div class=" con-w3l">
                            <?php foreach($class['HOT BEVERAGES'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                    <div class="tab-pane text-style" id="tab18">
                        <div class=" con-w3l">
                            <?php foreach($class['ICE CREAM'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                    <div class="tab-pane text-style" id="tab19">
                        <div class=" con-w3l">
                            <?php foreach($class['SIDES'] as $row) { ?>
                            <div class="col-md-3 m-wthree">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                        <img src="assets/images/biz/kickgrass/<?php echo $row['PRODUCT_ID'];?>.jpg" class="img-responsive" alt="">
                                        <div class="offer">
                                            <p><span>Offer</span></p>
                                        </div>
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <a href="single.html">
                                                    <?php echo $row['PRODUCT_NAME'];?>
                                                </a>
                                            </h6>
                                        </div>
                                        <div class="mid-2">
                                            <p><label>$2.00</label><em class="item_price"><?php echo $row['PRICE'];?></em></p>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="images/of.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <br>
    <div class="ser-t">
        <b></b>
        <span><i></i></span>
        <b class="line"></b>
    </div><br><br>
    <div class="ser-t">
        <b></b>
        <span><i></i></span>
        <b class="line"></b>
    </div>

    <!--footer-->
    <div class="footer">
        <div class="container">
            <div class="col-md-3 footer-grid">
                <h3>About Us</h3>
                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
            </div>
            <div class="col-md-3 footer-grid ">
                <h3>Menu</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="kitchen.html">Kitchen</a></li>
                    <li><a href="care.html">Personal Care</a></li>
                    <li><a href="hold.html">Household</a></li>
                    <li><a href="codes.html">Short Codes</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid ">
                <h3>Customer Services</h3>
                <ul>
                    <li><a href="shipping.html">Shipping</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                    <li><a href="faqs.html">Faqs</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="offer.html">Online Shopping</a></li>

                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h3>My Account</h3>
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>

                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="footer-bottom">
                <h2><a href="index.html"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h2>
                <p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                <ul class="social-fo">
                    <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                </ul>
                <div class=" address">
                    <div class="col-md-4 fo-grid1">
                        <p><i class="fa fa-home" aria-hidden="true"></i>12K Street , 45 Building Road Canada.</p>
                    </div>
                    <div class="col-md-4 fo-grid1">
                        <p><i class="fa fa-phone" aria-hidden="true"></i>+1234 758 839 , +1273 748 730</p>
                    </div>
                    <div class="col-md-4 fo-grid1">
                        <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@example1.com</a></p>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
            <div class="copy-right">
                <p> &copy; 2016 Big store. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
            </div>
        </div>
    </div>
    <!-- //footer-->


    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!-- //smooth scrolling -->
    <!-- for bootstrap working -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
    <script type="text/javascript">
        $(function() {

            var goToCartIcon = function($addTocartBtn) {
                var $cartIcon = $(".my-cart-icon");
                var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({
                    "position": "fixed",
                    "z-index": "999"
                });
                $addTocartBtn.prepend($image);
                var position = $cartIcon.position();
                $image.animate({
                    top: position.top,
                    left: position.left
                }, 500, "linear", function() {
                    $image.remove();
                });
            }

            $('.my-cart-btn').myCart({
                classCartIcon: 'my-cart-icon',
                classCartBadge: 'my-cart-badge',
                affixCartIcon: true,
                checkoutCart: function(products) {
                    $.each(products, function() {
                        console.log(this);
                    });
                },
                clickOnAddToCart: function($addTocart) {
                    goToCartIcon($addTocart);
                },
                getDiscountPrice: function(products) {
                    var total = 0;
                    $.each(products, function() {
                        total += this.quantity * this.price;
                    });
                    return total * 1;
                }
            });

        });
    </script>

    <!-- product -->

</body>

</html>