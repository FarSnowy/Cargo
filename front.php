<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Front Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="css/default.css" rel="stylesheet">

	
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <div id="page-loader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container con1">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
          </div>
          <div class="spinner-container con2">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
          </div>
          <div class="spinner-container con3">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
          </div>
        </div>
      </div>
    </div>

    <section id="intro" class="home-video text-light">
		<div class="home-video-wrapper">

		<div class="homevideo-container">
            <video width="1366" height="768" autoplay>
  <source src="video/video.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  
  
</video> 
		</div>
		<div class="overlay">
			<div class="text-center video-caption">
				<div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.8s">
					<h1 class="big-heading font-light"><span id="js-rotating">Cargo Shipping Assistance, We Help You, To Make, Awesome Port, Become A Better choice, Let's Start! </span></h1>
				</div>
				<div class="wow bounceInUp" data-wow-offset="0" data-wow-delay="1s">
					<div class="margintop-30">
						<a href="login.php" class="btn btn-skin" id="btn-scroll">Login</a>
						<a href="register.php" class="btn btn-skin" id="btn-scroll">Register</a>
					</div>
				</div>
			</div>
		</div>
		</div>
    </section>

    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
                              <div class="container">
                                    <div class="row">
                                          <div class="col-md-2 mob-logo">
                                                <div class="row">
                                                      <div class="site-logo">
                                                            <a href="index.html"><img src="img/newlogo.png" alt="" /></a>
                                                      </div>
                                                </div>
                                          </div>
                                          

                                          <div class="col-md-10 mob-menu">
                                                <div class="row">
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav navbar-right">
                                                                  <li class="active"><a href="login.php">Login</a></li>
                                                                  <li class="active"><a href="register.php">Register</a></li>
                                                                  </li>
                                                            </ul>
                                                      </div>
                                                      
                                                </div>
                                          </div>
                                    </div>
                              </div>

                        </nav>
    </div> 

	
	
		
	<section id="parallax2" class="home-section parallax text-light" data-stellar-background-ratio="1">	
           <div class="container">
				<div class="row appear stats">
					<div class="col-md-3">
						<div class="align-center color-white txt-shadow">
							<div class="icon">
								<i class="pe-7s-stopwatch pe-5x"></i>
							</div>
						<strong id="counter-stopwatch" class="number">1252</strong><br />
						<span class="text">Ship</span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="align-center color-white txt-shadow">
							<div class="icon">
								<i class="pe-7s-music pe-5x"></i>
							</div>
						<strong id="counter-music" class="number">229</strong><br />
						<span class="text">Tracks</span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="align-center color-white txt-shadow">
							<div class="icon">
								<i class="pe-7s-coffee pe-5x"></i>
							</div>
						<strong id="counter-clock" class="number">451</strong><br />
						<span class="text">Worker</span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="align-center color-white txt-shadow">
							<div class="icon">
								<i class="pe-7s-cup pe-5x"></i>
							</div>
						<strong id="counter-heart" class="number">112</strong><br />
						<span class="text">Awards</span>
						</div>
					</div>
				</div>
            </div>
	</section>	

	<div id="map-btn1-div">
		<a id="map-btn1" class="gmap-btn close-map-button btn-show" href="#map">
		Click here to know you posisition
		</a>
	</div>
	<a id="map-btn2" class="btn btn-skin btn-lg btn-noradius gmap-btn close-map-button btn-hide" href="#map" title="Close google map" data-toggle="tooltip" data-placement="top">
	Pier 1 The Embarcadero, San Francisco, CA 9411,  Port of San Francisco
	</a>
	
	<!-- google map -->
	<section id="map" class="close-map">
		<div id="google-map"></div>
	</section>
	<!-- /google map -->		
	

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					
					<div class="text-center">
						<a href="#intro" class="totop"><i class="pe-7s-angle-up pe-3x"></i></a>
						
						<div class="social-widget">
							
							
							<ul class="team-social">
									<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
							</ul>						
						
						</div>
						<p>&copy;Future Corp.</p>
                        <div class="credits">
                            
                            <h>Bootstrap Themes</h> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
					</div>
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/slippry.min.js"></script> 
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/morphext.min.js"></script>
	<script src="js/gmap.js"></script>
	<script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>

</html>
