<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Gretong a Ecommerce Admin Panel Category Flat Bootstrap Responsive Web Template | Tabs :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="n" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="assets/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="assets/css/icon-font.min.css" type='text/css' />
<script src="assets/js/simpleCart.min.js"> </script>
<script src="assets/js/amcharts.js"></script>	
<script src="assets/js/serial.js"></script>	
<script src="assets/js/light.js"></script>	
<!-- //lined-icons -->
<script src="assets/js/jquery-1.10.2.min.js"></script>
</head> 
<body>
 <?php require_once 'model/appConnection.php'; ?>
    <?php require_once 'model/gorgeousParlour/GORGEOUSModel.php'; ?>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
				<div class="header_bg">
							<div class="header">
								<div class="head-t">
										<!-- start header_right -->
									<div class="header_right">
										<div class="rgt-bottom">
											<div class="log">
												<div class="login">
													<div id="loginContainer"><a id="loginButton" class=""><span>Login</span></a>
														<div id="loginBox" style="display: none;">                
															<form id="loginForm">
																	<fieldset id="body">
																		<fieldset>
																			  <label for="email">Email Address</label>
																			  <input type="text" name="email" id="email">
																		</fieldset>
																		<fieldset>
																				<label for="password">Password</label>
																				<input type="password" name="password" id="password">
																		 </fieldset>
																		<input type="submit" id="login" value="Sign in">
																		<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
																	</fieldset>
																<span><a href="#">Forgot your password?</a></span>
															</form>
														</div>
													</div>
												</div>
											</div>
											<div class="reg">
												<a href="register.php">REGISTER</a>
											</div>
										<div class="cart box_1">
											<a href="cart.php">
												<h3> <span class="simpleCart_total">Rs 0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="images/bag.png" alt=""></h3>
											</a>	
											<p><a href="javascript:;" class="simpleCart_empty">(empty card)</a></p>
											<div class="clearfix"> </div>
										</div>
										<div class="create_btn">
											<a href="checkout.html">CHECKOUT</a>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="search">
										<form>
											<input type="text" value="" placeholder="search...">
											<input type="submit" value="">
										</form>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
				</div>
					<!-- //header-ends -->
				<!--content-->
			<div class="content">
    <div class="women_main">
        <!-- start content -->
        <div class="tab-main">
            <!--/tabs-inner-->
            <div class="tab-inner">
                <div id="tabs" class="tabs">
                    <div class="graph">
                        <nav>

                            <ul>
                                <li class="tab-current"><a href="#section-1" class="icon-shop"><span>FACIAL</span></a></li>
                                <li><a href="#section-2" class="icon-cup"><span>BLEACH</span></a></li>
                                <li><a href="#section-3" class="icon-food"><span>WAXING</span></a></li>
                                <li><a href="#section-4" class="icon-lab"><span>SPA AND MASSAGE</span></a></li>
                                <li><a href="#section-5" class="icon-truck"><span>MEHANDHI AND NAILWORK</span></a></li>
                                <li><a href="#section-3" class="icon-food"><span>HAIR CARE</span></a></li>
                                <li><a href="#section-3" class="icon-food"><span>SPECIAL TREATMENTS</span></a></li>
                            </ul>
                        </nav>
                        <div class="content tab">
                            <section id="section-1" class="content-current">
                                <?php foreach($class['FACIAL'] as $row) { ?>
                                <div class="grid1_of_4">
                                    <div class="content_box"><a href="details.html">
			   	   	 <img src="assets/images/biz/gorgeous/<?php echo $row['SERVICE_ID'];?>.jpg" class="img-responsive" alt="">
				   	  </a>
                                        <h4>
                                            <a href="details.html">
                                                <?php echo $row['SERVICE_NAME'];?>
                                            </a>
                                        </h4>
                                        
                                        <div class="grid_1 simpleCart_shelfItem">

                                            <div class="item_add"><span class="item_price"><h6>Rs<?php echo $row['PRICE'];?></h6></span></div>
                                            <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                                        </div>
                                    </div>
                                </div>
                                                            <?php } ?>
                            <div class="clearfix"></div>
                            </section>

                            <section id="section-2" class="content">
                                <?php foreach($class['BLEACH'] as $row) { ?>
                                <div class="grid1_of_4">
                                    <div class="content_box"><a href="details.html">
			   	   	 <img src="assets/images/biz/gorgeous/<?php echo $row['SERVICE_ID'];?>.jpg" class="img-responsive" alt="">
				   	  </a>
                                        <h4>
                                            <a href="details.html">
                                                <?php echo $row['SERVICE_NAME'];?>
                                            </a>
                                        </h4>
                                        
                                        <div class="grid_1 simpleCart_shelfItem">

                                            <div class="item_add"><span class="item_price"><h6>Rs<?php echo $row['PRICE'];?></h6></span></div>
                                            <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                            </section>

                            <section id="section-3" class="content">
                                <?php foreach($class['WAXING'] as $row) { ?>
                                <div class="grid1_of_4">
                                    <div class="content_box"><a href="details.html">
			   	   	 <img src="assets/images/biz/gorgeous/<?php echo $row['SERVICE_ID'];?>.jpg" class="img-responsive" alt="">
				   	  </a>
                                        <h4>
                                            <a href="details.html">
                                                <?php echo $row['SERVICE_NAME'];?>
                                            </a>
                                        </h4>
                                        
                                        <div class="grid_1 simpleCart_shelfItem">

                                            <div class="item_add"><span class="item_price"><h6>Rs<?php echo $row['PRICE'];?></h6></span></div>
                                            <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                                        </div>
                                    </div>
                                </div>
                                                       <?php } ?>
                            <div class="clearfix"></div>
                             </section>

                            <section id="section-4" class="content">
                                <?php foreach($class['SPA AND MASSAGE'] as $row) { ?>
                                <div class="grid1_of_4">
                                    <div class="content_box"><a href="details.html">
			   	   	 <img src="assets/images/biz/gorgeous/<?php echo $row['SERVICE_ID'];?>.jpg" class="img-responsive" alt="">
				   	  </a>
                                        <h4>
                                            <a href="details.html">
                                                <?php echo $row['SERVICE_NAME'];?>
                                            </a>
                                        </h4>
                                        
                                        <div class="grid_1 simpleCart_shelfItem">

                                            <div class="item_add"><span class="item_price"><h6>Rs<?php echo $row['PRICE'];?></h6></span></div>
                                            <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                                        </div>
                                    </div>
                                </div>
                                                       <?php } ?>
                            <div class="clearfix"></div>
                             </section>

                            <section id="section-5" class="content">
                                <?php foreach($class['MEHANDHI AND NAILWORK'] as $row) { ?>
                                <div class="grid1_of_4">
                                    <div class="content_box"><a href="details.html">
			   	   	 <img src="assets/images/biz/gorgeous/<?php echo $row['SERVICE_ID'];?>.jpg" class="img-responsive" alt="">
				   	  </a>
                                        <h4>
                                            <a href="details.html">
                                                <?php echo $row['SERVICE_NAME'];?>
                                            </a>
                                        </h4>
                                        
                                        <div class="grid_1 simpleCart_shelfItem">

                                            <div class="item_add"><span class="item_price"><h6>Rs<?php echo $row['PRICE'];?></h6></span></div>
                                            <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                                        </div>
                                    </div>
                                </div>
                          
                                                      <?php } ?>
                            <div class="clearfix"></div>
                              </section>
                            
                            <section id="section-6" class="content">
                                <?php foreach($class['HAIR CARE'] as $row) { ?>
                                <div class="grid1_of_4">
                                    <div class="content_box"><a href="details.html">
			   	   	 <img src="assets/images/biz/gorgeous/<?php echo $row['SERVICE_ID'];?>.jpg" class="img-responsive" alt="">
				   	  </a>
                                        <h4>
                                            <a href="details.html">
                                                <?php echo $row['SERVICE_NAME'];?>
                                            </a>
                                        </h4>
                                        
                                        <div class="grid_1 simpleCart_shelfItem">

                                            <div class="item_add"><span class="item_price"><h6>Rs<?php echo $row['PRICE'];?></h6></span></div>
                                            <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                                        </div>
                                    </div>
                                </div>
                                                       <?php } ?>
                            <div class="clearfix"></div>
                             </section>

                            <section id="section-7" class="content">
                                <?php foreach($class['SPECIAL TREATMENTS'] as $row) { ?>
                                <div class="grid1_of_4">
                                    <div class="content_box"><a href="details.html">
			   	   	 <img src="assets/images/biz/gorgeous/<?php echo $row['SERVICE_ID'];?>.jpg" class="img-responsive" alt="">
				   	  </a>
                                        <h4>
                                            <a href="details.html">
                                                <?php echo $row['SERVICE_NAME'];?>
                                            </a>
                                        </h4>
                                        
                                        <div class="grid_1 simpleCart_shelfItem">

                                            <div class="item_add"><span class="item_price"><h6>Rs<?php echo $row['PRICE'];?></h6></span></div>
                                            <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="clearfix"></div>
                            </section>

                        </div>
                    </div>
                </div>

            </div>
            <!-- /content -->
        </div>
        <!-- /tabs -->
    </div>
    <script src="assets/js/cbpFWTabs.js"></script>
    <script>
        new CBPFWTabs(document.getElementById('tabs'));
    </script>

    <!-- end content -->
	<div class="foot-top">
		<div class="col-md-6 s-c">
			<li>
				<div class="fooll">
					<h1>follow us on</h1>
				</div>
			</li>
			<li>
				<div class="social-ic">
					<ul>
						<li><a href="#"><i class="facebok"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="#"><i class="goog"> </i></a></li>
						<li><a href="#"><i class="be"> </i></a></li>
							<div class="clearfix"></div>	
					</ul>
				</div>
			</li>
				<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 s-c">
			<div class="stay">
						<div class="stay-left">
							<form>
								<input type="text" placeholder="Enter your email" required="">
							</form>
						</div>
						<div class="btn-1">
							<form>
								<input type="submit" value="join">
							</form>
						</div>
							<div class="clearfix"> </div>
			</div>
		</div>
			<div class="clearfix"> </div>
</div>
		<div class="footer">
					<div class="col-md-3 cust">
						<h4>CUSTOMER CARE</h4>
							<li><a href="contact.html">Help Center</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="details.html">How To Buy</a></li>
							<li><a href="cart.php">Delivery</a></li>
					</div>
					<div class="col-md-2 abt">
						<h4>ABOUT US</h4>
							<li><a href="products.html">Our Stories</a></li>
							<li><a href="products.html">Press</a></li>
							<li><a href="faq.html">Career</a></li>
							<li><a href="contact.html">Contact</a></li>
					</div>
					<div class="col-md-2 myac">
						<h4>MY ACCOUNT</h4>
							<li><a href="register.php">Register</a></li>
							<li><a href="cart.php">My Cart</a></li>
							<li><a href="cart.php">Order History</a></li>
							<li><a href="details.html">Payment</a></li>
					</div>
					<div class="col-md-5 our-st">
						<div class="our-left">
							<h4>OUR STORES</h4>
						</div>
						
							<li><i class="add"> </i>Mark peter</li>
							<li><i class="phone"> </i>012-586987</li>
							<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
					</div>
					<div class="clearfix"> </div>
						<p>© 2016 Gretong. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
</div>
</div>
			<!--content-->
		</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> New Arrivals</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="shoes.html">Shoes</a></li>
											<li id="menu-academico-avaliacoes" ><a href="products.html">Watches</a></li>
											<li id="menu-academico-boletim" ><a href="sunglasses.html">Sunglasses</a></li>
										  </ul>
										</li>
										 <li id="menu-academico" ><a href="sunglasses.html"><i class="fa fa-file-text-o"></i> <span>Sunglasses</span></a></li>
									<li><a href="sweater.html"><i class="lnr lnr-pencil"></i> <span>Sweater</span></a></li>
									<li id="menu-academico" ><a href="catalog.html"><i class="fa fa-file-text-o"></i> <span>Catalog</span></a></li>
									<li id="menu-academico" ><a href="shoes.html"><i class="lnr lnr-book"></i> <span>Shoes</span></a></li>
									 <li><a href="bags.html"><i class="lnr lnr-envelope"></i> <span>Bags</span></a></li>
									<li><a href="products.html"><i class="lnr lnr-chart-bars"></i> <span>Watches</span></a></li>
							        <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Tabs & Calender</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="tabs.html">Tabs</a></li>
											<li id="menu-academico-boletim" ><a href="calender.html">Calender</a></li>

										  </ul>
									 </li>
									<li><a href="#"><i class="lnr lnr-chart-bars"></i> <span>Forms</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									  <ul>
										<li><a href="input.html"> Input</a></li>
										<li><a href="validation.html">Validation</a></li>
									</ul>
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->
   <!-- real-time -->

   <!-- /Bootstrap Core JavaScript -->
   <!-- real-time -->
<script language="javascript" type="text/javascript" src="assets/js/jquery.flot.js"></script>
	<script type="text/javascript">
	$(function() {

		// We use an inline data source in the example, usually data would
		// be fetched from a server

		var data = [],
			totalPoints = 300;

		function getRandomData() {

			if (data.length > 0)
				data = data.slice(1);

			// Do a random walk

			while (data.length < totalPoints) {

				var prev = data.length > 0 ? data[data.length - 1] : 50,
					y = prev + Math.random() * 10 - 5;

				if (y < 0) {
					y = 0;
				} else if (y > 100) {
					y = 100;
				}

				data.push(y);
			}

			// Zip the generated y values with the x values

			var res = [];
			for (var i = 0; i < data.length; ++i) {
				res.push([i, data[i]])
			}

			return res;
		}

		// Set up the control widget

		var updateInterval = 30;
		$("#updateInterval").val(updateInterval).change(function () {
			var v = $(this).val();
			if (v && !isNaN(+v)) {
				updateInterval = +v;
				if (updateInterval < 1) {
					updateInterval = 1;
				} else if (updateInterval > 2000) {
					updateInterval = 2000;
				}
				$(this).val("" + updateInterval);
			}
		});

		var plot = $.plot("#placeholder", [ getRandomData() ], {
			series: {
				shadowSize: 0	// Drawing is faster without shadows
			},
			yaxis: {
				min: 0,
				max: 100
			},
			xaxis: {
				show: false
			}
		});

		function update() {

			plot.setData([getRandomData()]);

			// Since the axes don't change, we don't need to call plot.setupGrid()

			plot.draw();
			setTimeout(update, updateInterval);
		}

		update();

		// Add the Flot version string to the footer

		$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
	});

	</script>

</body>

</html>