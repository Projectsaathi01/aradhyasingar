
<!DOCTYPE html>
<html>
<head>
	<title>Aradhya Singar & Gift Pasal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
	<div class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
        <link rel="icon" href="assets/img/aplus.png" type="image/png">
			<a href="#" class="navbar-brand brand-deco">Aradhya Singar & Gift Pasal</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="collapse navbar-collapse offset navbar-style" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="#">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="#">About</a></li> 
								<!-- <li class="nav-item"><a class="nav-link" href="#services">Services</a> -->
								<li class="nav-item"><a class="nav-link" href="#product">Products</a>
								

								<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
							</ul>
						</div> 
		</div>
	</div>

	<!-- for banar -->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	 	 <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="assets/img/gift.png" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="assets/img/service.png" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="assets/img/contact.png" alt="Third slide">
		    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
</div>
	<!-- <section>
		<img src="assets/img/img1.jpg" class="img-fluid" alt="Responsive image">
	</section> -->


<!-- products -->
	<div class="container">
		<div class="product-title">
			<h3 id="product"> Our Products</h3>
			<hr>
		</div>

		<div class="row item-padding">
			<!-- 1st product  -->
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="product-deco product-border">
						<img src="assets/img/gift.png" alt="Service First" class="img-fluid" style="max-height: 80px;">
						<a href=""><h4>Gift Items</h4></a>
						<p>You will get gift items with economic price</p>
						
				
						<!-- modal end -->

					</div>
				</div>
			
			<!-- 2nd product -->
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="product-deco product-border">
						<img src="assets/img/toy.png" alt="Service First" class="img-fluid" style="max-height: 80px;">
						<a href=""><h4>Toys & Dolls</h4></a>
						<p>We provide Toy for babies</p>
					</div>
				</div>
				
			
			<!-- 3rd product -->
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="product-deco product-border">
						<img src="assets/img/parlor.png" alt="Service First" class="img-fluid" style="max-height: 80px;">
						<a href=""><h4>Cosmetic Items</h4></a>
						<p>We provide Cosmetic Products</p>

					</div>
			</div>

		</div>

	
	

	</div>


	

	<!-- social media for -->

<!-- google map -->

<div class="container">
	<div class="findus-title">
		<h4>Find Us</h4>
		<hr>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div style="width: 100%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3490.7507937207106!2d80.17865155018205!3d28.965115175615264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a1ade3a7cdce75%3A0x962959efd39e54b3!2sRana%20Printing!5e0!3m2!1sen!2snp!4v1578991788671!5m2!1sen!2snp" width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div><br />

		</div>
	</div>
</div>





	<!-- social media plugin -->
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v5.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="112732810236277"
  theme_color="#7646ff"
  logged_in_greeting="राना प्रिन्टिंगमा तपाईलाई स्वागत छ । कृपया आफ्नो मेसेज छोड्नु होला ।"
  logged_out_greeting="राना प्रिन्टिंगमा तपाईलाई स्वागत छ । कृपया आफ्नो मेसेज छोड्नु होला ।">
      </div>

	

<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>







<div class="footer-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6" style="color: white;">
				<address>
					<h3>Contact Us</h3>
					<a mailto="#">aradhya_singal@gmaill.com</a>
					<p class="postal-address"> 10400 Mahendranagar <br> Kanchanpur, Nepal </p>
					<!-- <p>9805772487 | 9809441156</p> -->

				</address>
			</div>
			<div class="col-lg-6" style="color: white;">
				<div>
					<h3>Social Media</h3>
					<div class="social-icon">
						<img src="assets/img/facebook.png" src="https://www.facebook.com/ranaprintingmnr">
						<img src="assets/img/twitter.png" src="">
						<img src="assets/img/linkedin.png">


					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<p>Projectsaathi Team &copy; <?php echo date("Y"); ?></p>
	</div>
</div>


</body>
</html>


<!-- 