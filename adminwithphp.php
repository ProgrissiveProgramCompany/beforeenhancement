
<?php
$servername = "localhost";
$username = "root";
$dbname = "book_store";

$conn = mysqli_connect($servername, $username, '', $dbname);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM book';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>

	<style type="text/css">
	</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/tableStyle.css" rel="stylesheet" type="text/css" media="all" />

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
<!-- start-smoth-scrolling -->
</head>

<body>
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>weclocme ADmin</a></p>
			</div>
			<div class="agile-login">
				<ul>
					<li><a href="Adminadd.html"> Add book </a></li>
					<li><a href="Adminaddcat.php">Add category</a></li>
					<li><a href="Logout.php">Logout</a></li>

				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Thanks Admin, you always make our website up to date</li>

				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.html">BOOK STORE</a></h1>
			</div>
	
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->

<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Groceries</li>
			</ol>
		</div>
	</div>
	</head>
<body>
	

	<h1>Books Catogery Table</h1>
	<table class="data-table">
		<caption class="title">All books in the store</caption>
		<thead>
			<tr>
				<th>book ID</th>
				<th>Catogery</th>
				<th>BOOK NAME</th>
				<th>Author</th>
				<th>UPDATE</th>
			</tr>
		</thead>
		<tbody>
		<?php
	while ($row = mysqli_fetch_array($query))
		{
        echo "<form id ='artisttable' action ='updatebook.php' method ='post'>";
			 echo "<tr>";
        echo "<td>" ."<input type='text'	class='fieldtext' name ='bid' value ='" . $row['bid'] . "' </td>";
        echo "<td>" ."<input type='text'	class='fieldtext' name ='catId' value ='" . $row['cat'] . "' </td>";
        echo "<td>" . $row['bname'] . " </td>";
        echo "<td>"  . $row['b_publisher'] . " </td>";
        echo "<td>" . "<input type='submit' name ='update' class='butt2' value='update'" . " </td>";
        echo	"</tr>";
		echo "</form>";

		}
?>
		</tbody>
		<tfoot>
			<tr>
				
			</tr>
		</tfoot>
	</table>
	<div>
	<div class="clearfix"> </div>
			</div>\

<div class="clearfix"> </div>
			</div>\
				<a href="Adminadd.html"><input type="submit" name="abbb" value="ADD BOOK"  class="butt" required="">  </a>    				
				<a href="Adminaddcat.php"><input type="submit" name="abbc" value="ADD Category" class="butt" required="">  </a>    				
				<div class="clearfix"></div>
		<div class="clearfix"> </div>
			</div>
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>

					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info">
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">About Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info">
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="Islamic.html">Islamic</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="Narritive.html">Narritive</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="Scinece.html">Science</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="Chlidren.html">Chlidren</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info">
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout.html">My Cart</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.html">Login</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.html">Create Account</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

		<div class="footer-copy">

			<div class="container">
				<p> let our website up to date Admin</p>
			</div>
		</div>

	</div>
	<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="payment-w3ls">
					<img src="images/card.png" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //footer -->
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

