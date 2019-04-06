<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="color/default.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>

  <!-- Section: intro -->
  <section id="intro" class="intro">

    <div class="slogan">
      <h1> BLOG ALBAR </h1>
    </div>
    <div class="page-scroll">
      <a href="#about">
				<i class="fa fa-angle-down fa-5x animated"></i>
			</a>
    </div>
  </section>
  <!-- /Section: intro -->

  <!-- Navigation -->
  <div id="navigation">
    <nav class="navbar navbar-custom" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menu">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#gallery">My gallery</a></li>
                <li><a href="#contact">Talk to me</a></li>
              </ul>
            </div>
            <!-- /.Navbar-collapse -->

          </div>
        </div>
      </div>
      <!-- /.container -->
    </nav>
  </div>
  <!-- /Navigation -->

  <!-- Section: about -->
  <section id="about" class="home-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">

          <div class="section-heading text-center">
            <div class="wow bounceInDown" data-wow-delay="0.2s">
              <h2>This is me ALBAR</h2>
            </div>
            <p class="wow bounceInUp" data-wow-delay="0.3s"></p>
			
			<h3>Achmadi Hudadin Albarqi</h3>
			<h3>17753001</h3>
			<h4>@include('layout.header')</h4>
			<h4> @yield('content')</h4>
          </div>

        </div>
      </div>
    </div>


  </section>
  <!-- /Section: about -->
  
   <!-- Section: gallery -->
  <section id="gallery" class="home-section text-center bg-gray">

    <div class="container">
      <div class="row">
	
	<ul>
		@section('sidebar')
		<li>HTML</li>
		<li>CSS</li>
		<li>JS</li>
		@show
	</ul>
	
      </div>
    </div>
  </section>
    <!-- /Section: services -->
	
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <p>&copy; Albar Theme. 2019</p>
          <div class="credits">
          
            Designed by <a href="#">Bootstrap</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
