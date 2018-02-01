
<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

 $servername = "localhost";
$username = "root";
$dbname = "book_store";
$conn = mysqli_connect($servername, $username, '', $dbname);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$sql = 'SELECT * 
		FROM book ';
	
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
	 function runMyFunction() {

 $servername = "localhost";
$username = "root";
$dbname = "book_store";
	 	$conn = mysqli_connect($servername, $username, '', $dbname);

    				$username = $_SESSION["login_user"];
					$name = $_POST["bname"];
					$price = $_POST["bprice"];
					$date = $_SERVER['REQUEST_TIME'];
					$sql2 = "INSERT INTO sales(username,bname,bprice,date)
					VALUES ('$username','$name','$price','$date')";
					$query2 = mysqli_query($conn, $sql2);
					echo"her we are ";
  }

  if (isset($_GET['hello'])) {
    echo"here here ";

    runMyFunction();
  }

    // close connection

    mysqli_close($conn);


?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
 

<!-- start-smoth-scrolling -->
</head>

<body>
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>enjoy reading constructing books  </p>
			</div>
			<div class="agile-login">
				<ul>
										<li><a href="Logout.php">Logout</a></li>

				</ul>
			</div>
			<div class="product_list_header">
					<form action="checkout.php" method="post" class="last">
				
						<button class="w3view-cart"  type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				  <?php
					echo "HELLO  , ".$_SESSION["login_user"];
					?>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.html">Book Shop</a></h1>
			</div>
			
	
		<div class="w3l_search ">
			<form action="displaysearchproduct.php" method="post">
				<input type="search" name="search" autocomplete="off" placeholder="Search for book" required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>

			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.html" class="act">Home</a></li>
									<!-- Mega Menu -->
									<li >
										<a href="Islamic.php" >Islamic</a>
									</li>
									<li >
										<a href="Children.php" >Children</a>
									</li>
									<li >
										<a href="Narritive.php" >Narritive</a>
									</li>

									<li><a href="Scinece.php">Scince</a></li>
									<li><a href="offers.html">Offers</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							</nav>
			</div>
		</div>

<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Narritive</li>
			</ol>
		</div>
	</div>
	
	</head>
<body>
	<div class="products" >
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="categories">
					<h2>Children</h2>
						<ul class="cate">
											<li><a href="Scinece.php"><i class="fa fa-arrow-right" aria-hidden="true" ></i>Scinence</a></li>

											<li><a href="Narritive.php"><i class="fa fa-arrow-right" aria-hidden="true" ></i>Narritive</a></li>

											<li><a href="Islamic.php"><i class="fa fa-arrow-right" aria-hidden="true" ></i>Islamic</a></li>

					</ul>
				</div>
			</div>
<div class="col-md-8 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids">

    <?php
	 $counter = 0 ; 
	 while ($row = mysqli_fetch_array($query))
		{
		if($row['cat'] == 3){	
	    $bname = $row['bname'];
	    $bprice = $row['bprice'];
		$counter= $counter +1;	
	    echo '<form method="post" action="Narritive.php?hello=true" >';
	    echo'  	
	    <div class="agile_top_brands_grids">
					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
											<a >';
											echo '<img title=" " alt=" " src="'. $row['imgsrc'] . '"/>';
												echo'</a>

												<p> '.$bname.' </p>
												<h4>.'.$bprice.' <span>$55.00</span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
													<fieldset>
														<input type="hidden" name="bprice" value='.$bprice.'>
														<input type="hidden" name="bname" value='.$bname.'>
														<input type="submit" name="submit"  value="Add to cart" class="button">
													</fieldset>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div >
					';
					echo '</form>';
					if($counter % 3 == 0)
						echo'<div class="clearfix"> </div>';
				 }
					
				}
				
            ?>
     









      
						<div class="clearfix"> </div>
					</div>
				</div>


		         </div>
													</div>
												</div>
										

										
										<div class="clearfix"> </div>
									
	

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});

		});

</script>
<!-- //main slider-banner -->

</body>
</html>
</body>
</html>