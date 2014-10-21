<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal site of Ben Overholts">
    <meta name="author" content="Ben Overholts">

    <title>Ben Overholts</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Log Visitor Statistics -->
    <?php include ('./php/logger.php'); ?>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Ben Overholts</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#bio">Bio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#projects">Projects</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://www.benoverholts.com/Ben_Overholts_Resume.pdf" target="_blank">Resume</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
    	<section id="intro" data-speed="4" data-type="background">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12">
	                    <img class="img-responsive" src="img/profile.png" alt="">
	                    <div class="intro-text">
	                        <span class="name">Hi I'm Ben!</span>
	                        <hr class="star-light">
	                        <span class="skills">University of Maryland '16 - B.S. Computer Science</span>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
    </header>

    <!-- Bio Grid Section -->
    <section id="bio" data-speed="4" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Bio</h2>
                    <hr class="star-primary">
                </div>
            </div>

            <!-- UMD CS Section -->
            <div class="row">
            	<div class="col-sm-4">
                	<img src="img/portfolio/maryland.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-sm-8">
                	<p>I am a Computer Science student at the University of Maryland, College Park.  I expect to graduate in May 2016, and
                    have completed coursework on topics including data structures, algorithm analysis, computer systems architecture,
                    security, and compilers.  I have experience working with a wide range of tools and languages; for more information, check
                    out my <a href="http://www.benoverholts.com/Ben_Overholts_Resume.pdf" target="_blank">Resume</a> or <a id="contact_link" href="#contact">Contact Me</a>!</p>
                </div>
            </div>

            <!-- Divider -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <hr class="star-primary">
                </div>
            </div>

            <!-- Work Experience Section -->
            <div class="row">
                <div class="col-sm-8">
                    <p>I spent this summer working as a QA Automation Intern at IBM in their Smarter Workforce division.  I used a toolkit
                    which consisted of <a href="http://www.gebish.org/" target="_blank">Geb</a>, <a href="http://groovy.codehaus.org/" target="_blank">Groovy</a>,
                    <a href="http://maven.apache.org/" target="_blank">Maven</a> (<a href="http://maven.apache.org/surefire/maven-surefire-plugin/" target="_blank">Surefire</a>),
                    and <a href="http://jenkins-ci.org/" target="_blank">Jenkins</a>.  In addition to helping the full time employees with their work, I integrated
                    <a href="http://www.oracle.com/technetwork/java/javase/jdbc/index.html" target="_blank">JDBC</a> support into the testing framework so that
                    we could run database queries from within scripts for verification of UI data.</p>
                </div>
                <div class="col-sm-4">
                    <img src="img/portfolio/ibm_wayne.jpg" class="img-responsive" alt="">
                </div>
            </div>

            <!-- Divider -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <hr class="star-primary"> <!-- TODO: replace this hr, possibly just invis spacer -->
                </div>
            </div>

            <!-- Steel Hornets Section -->
            <div class="row">
                <div class="col-sm-4">
                    <img src="img/portfolio/robotics.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-sm-8">
                    <p>If you're not familiar with First you should <a href="http://www.usfirst.org/" target="_blank">go check them out</a>.  I
                    spent 3 years competing in their First Tech Challenge robotics league with my high school's team
                    (Team 118, Steel Hornets).  In that time, we went to World Championships twice, and I learned an invaluable
                    amount about teamwork, perseverance, leadership, and patience.  Now, as an alumni of the program, I help
                    my high school host a Pennsylvania regional qualifying tournament each season.</p>
                </div>
            </div>

            <!-- Divider -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <hr class="star-primary"> <!-- TODO: replace this hr, possibly just invis spacer -->
                </div>
            </div>

            <!-- Other Activities Section -->
            <div class="row">

            	<!-- DCC Picture -->
           		<div class="col-sm-4 col-sm-offset-1">
            		<div class="row">
                        <div class="col-sm-12">
							<img src="img/portfolio/dcc_delta_gamma.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<h4>DCC Honors Program</h4>
						</div>
					</div>
				</div>

				<!-- Club Swimming Picture -->
				<div class="col-sm-4 col-sm-offset-2">
            		<div class="row">
						<div class="col-sm-12">
							<img src="img/portfolio/club_swim.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<h4>Club Swimming</h4>
						</div>
					</div>
				</div>
<!--
				<!- - Something Else Picture - ->
				<div class="col-sm-4">
            		<div class="row">
						<div class="col-sm-12">
							<img src="img/portfolio/placeholder.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<h4>Something, IDK</h4>
						</div>
					</div>
				</div>
-->
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="success" id="projects" data-speed="4" data-type="background">
        <div class="container">
        	<div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Projects</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
            	<div class="col-sm-4 col-sm-offset-1 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link success" data-toggle="modal">
                        <img src="img/portfolio/firefinch.jpg" class="img-responsive" alt="">
                        <div class="caption">
                            <div class="caption-content text-center">
                                <h3 class="project-title">FireFinch</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-sm-offset-2 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link success" data-toggle="modal">
                        <img src="img/portfolio/lan_academy.jpg" class="img-responsive" alt="">
                        <div class="caption">
                            <div class="caption-content text-center">
                                <h3 class="project-title">LAN Academy</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link success" data-toggle="modal">
                        <img src="img/portfolio/photophonix.jpg" class="img-responsive" alt="">
                        <div class="caption">
                            <div class="caption-content text-center">
                                <h3 class="project-title">Photophonix</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-sm-offset-2 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link success" data-toggle="modal">
                        <img src="img/portfolio/camera_tracking.jpg" class="img-responsive" alt="">
                        <div class="caption">
                            <div class="caption-content text-center">
                                <h3 class="project-title">Camera Tracking Test</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" data-speed="4" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
	        <div class="footer-above">
	            <div class="container">
	                <div class="row">
	                    <div class="footer-col col-md-12">
	                        <h3>Around the Web</h3>
	                        <ul class="list-inline">
	                            <li>
	                                <a href="https://github.com/BenOverholts/" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
	                            </li>
	                            <li>
	                                <a href="https://www.linkedin.com/pub/benjamin-overholts/86/3b2/1a7" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Ben Overholts 2014
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>FireFinch</h2>
                            <hr class="star-primary">
                            <p>FireFinch is a proprietary algorithmic trading platform for cryptocurrency trading pairs like USD/BTC, USD/LTC, and LTC/BTC.  The Java-based application is backed by a portfolio of trading strategies that utilize technical/fundamental indicators and arbitrage.  Strategies have been successfully backtested and the aim is to begin forward testing strategies beginning Fall 2014, with actual trading to begin in Winter 2014/2015.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>LAN Academy</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/lan_2.jpg" class="img-responsive img-centered" alt="">
                            <p><a href="http://lanacademy.org/" target="_blank">LAN Academy</a> is an early-stage nonprofit based in Boston and dedicated to bringing world-class secondary education to students in the developing world. They partner with organizations worldwide to turn on the existing computer labs into offline digital tutoring labs using our open source software and hand-picked open educational resources in a way that is offline, scalable and accessible to the students around the world in a wide variety of circumstances.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Photophonix</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/capstone_fair.jpg" class="img-responsive img-centered" alt="">
                            <p>Photophonix is the Honors Program Capstone Project of myself and David Wannlund (pictured right), and undergraduate Physics/Music dual major.  This android application generates dynamic music based on a live feed of input from the device camera using a selection of precompiled instrumental loops composed by David.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Camera Tracking Test</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/camera_tracking_code.jpg" class="img-responsive img-centered" alt="">
                            <p>This project is just some rudimentary experimentation with motion tracking.  Using <a href="http://sol.gfxile.net/escapi/" target="_blank">ESCAPI</a> to retrieve data from an attached webcam, I wrote some code to detect a distinctly colored object and recognice different swiping motions.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

    <!-- Parallax Scrolling JavaScript -->
    <script src="js/parallax.js"></script>

</body>

</html>
