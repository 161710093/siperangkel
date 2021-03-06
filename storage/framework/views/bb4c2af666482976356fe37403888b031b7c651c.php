<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>SiPeRangLab</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link href="<?php echo e(asset('sambuts/css/bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('sambuts/css/font-awesome.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('sambuts/css/style.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('sambuts/css/animate.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('sambuts/css/skin-blue.css')); ?>" rel="stylesheet">
<!-- Le fav -->
<link rel="shortcut icon" href="<?php echo e(asset('sambuts/ico/favicon.png')); ?>">
<!--[if lt IE 9]>
<style>
nav,.container,header#top-section,.carousel,.demobutton {display:none;}
</style>
<div id='browserWarning'>
You are using an outdated version of Internet Explorer Please to
<a style="color:red;" href='http://getfirefox.com'>Firefox</a>,
<a style="color:red;" href='http://www.google.de/chrome'>Google Chrome</a>
,
<a style="color:red;" href='http://www.apple.com/safari/'>Safari</a>
or the latest version of
<a style="color:red;" href='http://windows.microsoft.com/en-US/internet-explorer/downloads/ie'>Internet Explorer</a>
for a
<span class='bold'>better</span>
and
<span class='bold'>safer</span>
experience.
</div>
<![endif]-->
</head>
<!-- /head-->
<body data-spy="scroll" data-target=".navbar">
<nav id="topnav" class="navbar navbar-fixed-top navbar-default" role="navigation">
<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand">SiPeRangLab</a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav navbar-right">
			<li class="active"><a href="#top-section">Home</a></li>
			<li><a href="#Section-1">Features</a></li>
			<li><a href="#Section-2">Gallery</a></li>
			<li><a href="#Section-5">Pricing</a></li>
			<li><a href="#Section-6">Contact</a></li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
</nav>
<!-- HOMEPAGE -->
<header id="top-section" class="fullbg">
<div class="jumbotron">
	<div id="carousel_intro" class="carousel slide fadeing">
		<div class="carousel-inner">
			<div class="active item" id="slide_1">
				<div class="carousel-content">					
					<div class="animated fadeInDownBig">
						 <h1>Sistem Peminjaman Barang Laboratorium</h1>
                         <h3>Email : guest@gmail.com <br> Kata Sandi : rahasia</h3>
					</div>
					<br/>
					<a href="<?php echo e(url('/login')); ?>" class="buttoncolor animated fadeInRightBig"><i class="fa fa-sign-in"></i> Masuk</a>
					
				</div>
			</div>
			<div class="item" id="slide_2">
				<div class="carousel-content">					
					<div class="animated fadeInDownBig">
						 <h1>Selamat Datang <br>Di<br>Halaman Website SIPERANGLAB</h1>
					</div>
				</div>
			</div>
			<div class="item" id="slide_3">
				<div class="carousel-content">					
					<div class="animated fadeInDownBig">
						 <h1>SiPeRangLab Adalah Aplikasi Berbasis Website Yang Di Gunakan Untuk Pengelolaan Sistem Peminjaman Laboratorium Khususnya Pada Laboratorium Komputer.</h1>					
					</div>
				</div>
			</div>
		</div>
	</div>
	<button class="left carousel-control" href="#carousel_intro" data-slide="prev" data-start="opacity: 0.6; left: 0%;" data-250="opacity:0; left: 5%;"><i class="fa fa-chevron-left"></i></button>
	<button class="right carousel-control" href="#carousel_intro" data-slide="next" data-start="opacity: 0.6; right: 0%;" data-250="opacity:0; right: 5%;"><i class="fa fa-chevron-right"></i></button>
</div>
<div class="inner-top-bg">
</div>
</header>


<section id="Section-1" class="fullbg">
<div class="section-divider">
</div>
<div class="container">
<div class="row">
	<div class="page-header text-center col-sm-12 col-lg-12 color-white animated fade">
		<h1>Features</h1>
		<p class="lead">
			 Some stuff about product
		</p>
	</div>
</div>
<div class="row color-white">
	<div class="col-md-12 animated fadeInUpNow">
		<div class="boxservice">
			<i class="fa fa-globe"></i>
			<h3>Web Design</h3>
			<p>
				Web design encompasses many different skills and disciplines in the production and maintenance of websites.
			</p>
		</div>
		<div class="boxservice">
			<i class="fa fa-user"></i>
			<h3>User Experience</h3>
			<p>
				The different areas of web design include web graphic design; interface design; authoring; user experience design; and seo.
			</p>
		</div>
		<div class="boxservice rightb">
			<i class="fa fa-dashboard"></i>
			<h3>Client Side</h3>
			<p>
				The term web design is normally used to describe the design process relating to the front-end (client side) design of a website 
			</p>
		</div>
		<div class="boxservice bottomb">
			<i class="fa fa-cloud-download"></i>
			<h3>Themes & Templates</h3>
			<p>
				A web template system uses a template processor to combine web templates to form finished web pages.
			</p>
		</div>
		<div class="boxservice bottomb">
			<i class="fa fa-trophy"></i>
			<h3>Publishing Tools</h3>
			<p>
				It is a web publishing tool present in content management systems, web application frameworks, and HTML editors.
			</p>
		</div>
		<div class="boxservice rightb bottomb">
			<i class="fa fa-microphone"></i>
			<h3>Static & Dynamic</h3>
			<p>
				Web templates can be used like the template of a form letter to generate "static" web pages in advance or to produce.
			</p>
		</div>
	</div>
</div>

</div>
</section>

<section id="Section-2" class="fullbg color-white">
<div class="section-divider">
</div>
<div class="container demo-3">
<div class="row">
	<div class="page-header text-center col-sm-12 col-lg-12 animated fade">
		<h1>Gallery</h1>
		<p class="lead">
			 What customers say about our Product
		</p>
	</div>
</div>
<div class="row animated fadeInUpNow">
	<div class="col-sm-12 col-lg-12">
		<ul class="grid cs-style-4">
			<li>
			<figure>
			<div>
				<img src="http://unsplash.it/400/266?random=10" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>Safari</h3>
			<span>Wow Themes</span>
			<a href="#">Take a look</a>
			</figcaption>
			</figure>
			</li>
			<li>
			<figure>
			<div>
				<img src="http://unsplash.it/400/266?random=11" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>Game Center</h3>
			<span>Wow Themes</span>
			<a href="#">Take a look</a>
			</figcaption>
			</figure>
			</li>
			<li>
			<figure>
			<div>
				<img src="http://unsplash.it/400/266?random=12" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>Music</h3>
			<span>Wow Themes</span>
			<a href="#">Take a look</a>
			</figcaption>
			</figure>
			</li>
			<li>
			<figure>
			<div>
				<img src="http://unsplash.it/400/266?random=13" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>Settings</h3>
			<span>Wow Themes</span>
			<a href="#">Take a look</a>
			</figcaption>
			</figure>
			</li>
			<li>
			<figure>
			<div>
				<img src="http://unsplash.it/400/266?random=14" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>Camera</h3>
			<span>Wow Themes</span>
			<a href="#">Take a look</a>
			</figcaption>
			</figure>
			</li>
			<li>
			<figure>
			<div>
				<img src="http://unsplash.it/400/266?random=15" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>Phone</h3>
			<span>Wow Themes</span>
			<a href="#">Take a look</a>
			</figcaption>
			</figure>
			</li>
		</ul>
	</div>
</div>
</div>
</section>

</section>
<!-- SECTION-5 (pricing) -->
<section id="Section-5" class="fullbg color-white">
<div class="section-divider">
</div>
<div class="container">
<div class="row">
	<div class="page-header text-center col-sm-12 col-lg-12 animated fade">
		<h1>Pricing</h1>
		<p class="lead">
			 Boxes for any type of pricing plan
		</p>
	</div>
</div>
<div class="row pricing animated fadeInUpNow">
	<div class="col-lg-3">
		<div class="whitebox salmonborder">
			<div class="content">
				<p class="price">
					 299<sup>$</sup>
				</p>
				<ul>
					<li>Shopping Area</li>
					<li>Spacious Rooms </li>
					<li>Close to the Airport</li>
					<li>Heart of the City</li>
				</ul>
				<a class="btn btn-lg"><i class="fa fa-shopping-cart"></i> Buy Now</a>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="whitebox goldborder">
			<div class="content best-offer">
				<p class="price">
					 479<sup>$</sup>
				</p>
				<ul>
					<li>Shopping Area</li>
					<li>Spacious Rooms </li>
					<li>Close to the Airport</li>
					<li>Heart of the City</li>
				</ul>
				<a class="btn btn-lg"><i class="fa fa-user"></i> Sign Up</a>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="whitebox blueborder">
			<div class="content">
				<p class="price">
					 621<sup>$</sup>
				</p>
				<ul>
					<li>Shopping Area</li>
					<li>Spacious Rooms </li>
					<li>Close to the Airport</li>
					<li>Heart of the City</li>
				</ul>
				<a class="btn btn-lg"><i class="fa fa-book"></i> Book Now</a>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="whitebox greenborder">
			<div class="content">
				<p class="price">
					 843<sup>$</sup>
				</p>
				<ul>
					<li>Shopping Area</li>
					<li>Spacious Rooms </li>
					<li>Close to the Airport</li>
					<li>Heart of the City</li>
				</ul>
				<a class="btn btn-lg"><i class="fa fa-mail-forward"></i> Add to Cart</a>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<!-- SECTION-6 (contact) -->
<section id="Section-6" class="fullbg">
<div class="section-divider">
</div>
<div class="container">
<div class="row">
	<div class="page-header text-center col-sm-12 col-lg-12 color-white animated fade">
		<h2>Contact Us</h2>
		<p class="lead">
			 Fill out the form and we will call you back
		</p>
	</div>
</div>
<div class="row animated fadeInUpNow">
	<div class="col-lg-8 col-md-offset-2">
		<form action="#" name="MYFORM" id="MYFORM">
			<input name="name" size="30" type="text" id="name" class="col-lg-6 leftradius" placeholder="Your Name">
			<input name="email" size="30" type="text" id="email" class="col-lg-6 rightradius" placeholder="E-mail Address">
			<br/><br/>
			<textarea id="message" name="message" class="col-lg-12 allradius" placeholder="Message" rows="7"></textarea><br/>
			<img src="contact/refresh.jpg')}}" alt="" id="refresh" style="width:45px;"/><img src="contact/get_captcha.php" alt="" id="captcha" style="height:45px;"/>
			<br/>
			<input name="code" type="text" id="code" placeholder="Enter Captcha" class="top20">
			<br/>
			<input value="Send Message" type="submit" id="Send" class="btn btn-default btn-lg">
			<br/>
		</form>
	</div>
</div>
</div>
</section>
<!-- FOOTER -->
<footer id="foot-sec">
<div class="footerdivide">
</div>
<div class="container ">
<div class="row">
	<div class="text-center color-white col-sm-12 col-lg-12">
		<ul class="social-icons">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
		</ul>
		<p>
			 © Your Website.com. Template by WowThemes.net
		</p>
		<p>
			<a href="http://www.wowthemes.net/premium-themes-templates/">Official Website</a> | <a href="http://www.wowthemes.net/support/">Theme Support</a> | <a href="http://www.wowthemes.net/frequently-asked-questions/">F.A.Q.</a>
		</p>
	</div>
</div>
</div>
</footer>
<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo e(asset('sambuts/js/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('sambuts/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('sambuts/js/jquery.parallax-1.1.3.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('sambuts/js/jquery.localscroll-1.2.7-min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('sambuts/js/jquery.scrollTo-1.4.6-min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('sambuts/js/jquery.bxslider.min.js')); ?>"></script>
<script src="<?php echo e(asset('sambuts/js/jquery.placeholder.js')); ?>"></script>
<script src="<?php echo e(asset('sambuts/js/modernizr.custom.js')); ?>"></script>
<script src="<?php echo e(asset('sambuts/js/toucheffects.js')); ?>"></script>
<script src="<?php echo e(asset('sambuts/js/animations.js')); ?>"></script>
<script src="<?php echo e(asset('sambuts/js/init.js')); ?>"></script>
</body>
</html>