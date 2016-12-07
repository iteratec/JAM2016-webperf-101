<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="iteratec">

    <title>perf-test-suite</title>

    <!-- Bootstrap Core CSS -->
	<link href="assets-old-path/css/bootstrap.css" rel="stylesheet">
	<!-- Jquery Magnific popup css -->
	<link rel="stylesheet" type="text/css" href="assets-old-path/css/magnific-popup.css">
	<!-- icons -->
	<link rel="stylesheet" type="text/css" href="assets-old-path/css/font-awesome.css">
	<!-- Custom CSS -->
	<link href="assets-old-path/css/header.css" rel="stylesheet">
	<link href="assets-old-path/css/main.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery Version 1.11.0 -->
	<script src="assets-old-path/js/jquery-1.11.0.js"></script>
	<script src="assets-old-path/js/jquery-ui.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="assets-old-path/js/bootstrap.js"></script>
	<script src="assets-old-path/js/jquery.magnific-popup.js"></script>
	<script src="assets-old-path/js/shuffle.js"></script>
	<script src="assets-old-path/js/jquery.shapeshift.js"></script>
	<script src="assets-old-path/js/homepage.js"></script>
	<script src="assets-old-path/js/heavy_lifting.js"></script>

</head>

<body onload="RumReporter.sendBeacon({time: performance.now()});">

    <?php

        //simulate server side processing time
        $sleep = (isset($_GET["sleep"]) ? $_GET["sleep"] : 0);
		if($sleep && ctype_digit(strval($sleep))) sleep($sleep);
    ?>

    <!-- Navigation -->
    <header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <img src="assets-old-path/images/icons/bars.png" />
                </button>

                <a href="index.php" class="navbar-brand">perf-test-suite</a>
            </div>

          
        </div>
        <!-- /.container -->
    </header>

    <!-- Page Content -->
    <div class="container page" id="home">

        <h2>Example shop page</h2>

        <!-- carrousel -->
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-holder">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="assets-old-path/images/country-1170x400.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="assets-old-path/images/boat-1170x400.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="assets-old-path/images/snow-1170x400.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="assets-old-path/images/beach_old_path-1170x400.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="assets-old-path/images/glass-building-1170x400.jpeg" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <img src="assets-old-path/images/icons/chevron-left.png" />
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <img src="assets-old-path/images/icons/chevron-right.png" />
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- quotes -->
        <div class="row margin30">
            <div class="col-md-9 box-center">
                <blockquote>
                    <div class="col-sm-3 text-center">
                        <img class="img-circle" style="width: 100px;height:100px;" src="assets-old-path/images/person_3.png">
                    </div>
                    <div class="col-sm-9">
                        <p>
                            <img src="assets-old-path/images/icons/quote-left.png" />
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.
                            <img src="assets-old-path/images/icons/quote-right.png" />
                        </p>
                        <small>Someone famous</small>
                    </div>
                </blockquote>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3><small>Recent Bookings</small></h3>
                <ul class="thumbnails">
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-old-path/images/rila.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Rila mountain, Bulgaria" src="assets-old-path/images/rila_small.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-old-path/images/icons/holiday-mountain.png" /> Rila mountain, Bulgaria
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
                                    <img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
                                <p>22 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-old-path/images/varna_panorama.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Varna" src="assets-old-path/images/varna.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-old-path/images/icons/holiday-town.png" />
										Varna, Bulgaria
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
                                <p>28 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-old-path/images/tsarevets.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Tzarevets, Veliko Tarnvo, Bulgaria" src="assets-old-path/images/tsarevets_small.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-old-path/images/icons/holiday-nature.png" /> Tzarevets, Veliko Tarnovo, Bulgaria
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>28 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-old-path/images/london.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="London" src="assets-old-path/images/london.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-old-path/images/icons/holiday-travel.png" /> London
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>15 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-old-path/images/cibeles.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cibeles, Madrid, Spain" src="assets-old-path/images/cibeles_small_2.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-old-path/images/icons/holiday-sun.png" /> Cibeles, Madrid, Spain
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>12 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-old-path/images/recife.jpg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Recife, Brasil" src="assets-old-path/images/recife_small_1.jpg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-old-path/images/icons/holiday-beach.png" /> Recife, Brasil
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>6 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-old-path/images/tree.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Asia" src="assets-old-path/images/tree.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-old-path/images/icons/holiday-tree.png" /> Asia
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>31 reviews</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-3">
                        <div class="thumbnail" href="assets-old-path/images/san-fran.jpeg">
                            <a href="javascript:;">
                                <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="San Francisco" src="assets-old-path/images/san-fran.jpeg">
                            </a>
                            <div class="caption">
                                <h4>
									<a href="javascript:;">
										<img class="icon-small" src="assets-old-path/images/icons/holiday-car.png" /> San Francisco
									</a>
								</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                            </div>
                            <div class="ratings">
                                <p>
									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                </p>
								<p>0 reviews</p>
                            </div>
                        </div>
                    </li>
                    <div class="only-visible-on-desktop">
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/cheetah.jpeg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cheetah" src="assets-old-path/images/cheetah.jpeg">
                                </a>
                                <div class="caption">
                                    <h4>
    									<a href="javascript:;">
    										<img class="icon-small" src="assets-old-path/images/icons/holiday-nature.png" /> Africa
    									</a>
    								</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/louvre.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Louvre" src="assets-old-path/images/louvre.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
    									<a href="javascript:;">
    										<img class="icon-small" src="assets-old-path/images/icons/holiday-animals.png" /> Louvre, Paris, France
    									</a>
    								</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>28 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/cityview.jpeg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cityview" src="assets-old-path/images/cityview.jpeg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-travel.png" /> Cityview
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>15 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/finland.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Finland" src="assets-old-path/images/finland_small.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-sun.png" /> Finland
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>12 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/flying-duck.jpeg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Flying duck" src="assets-old-path/images/flying-duck.jpeg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-beach.png" /> Flying duck
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>6 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/art-gallery.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Art gallery" src="assets-old-path/images/art-gallery.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-tree.png" /> Art gallery
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>31 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/beginning-of-life.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Beginning of life" src="assets-old-path/images/beginning-of-life.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-car.png" /> Beginning of life
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/cherry-blossom.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Cherry blossom" src="assets-old-path/images/cherry-blossom.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-nature.png" /> Cherry blossom
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/coffee-central.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Coffee central" src="assets-old-path/images/coffee-central.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-beach.png" /> Coffee
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>6 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/frankfurt-waters.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Frankfurt waters" src="assets-old-path/images/frankfurt-waters.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-tree.png" /> Frankfurt waters
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>31 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/man-made-skies.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Man made skies" src="assets-old-path/images/man-made-skies.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-car.png" /> Man made skies
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/old-love.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Old love" src="assets-old-path/images/old-love.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-nature.png" /> Old love
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/ungodly-skies.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Ungodly skies" src="assets-old-path/images/ungodly-skies.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-beach.png" /> Ungodly skies
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>6 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/windy-day.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Windy day" src="assets-old-path/images/windy-day.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-tree.png" /> Windy day
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>31 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/sky-and-building.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Sky and building" src="assets-old-path/images/sky-and-building.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-car.png" /> Sky and building
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/trombone_player.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Trombone_player" src="assets-old-path/images/trombone_player.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-nature.png" /> Trombone player
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
    					</li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/wasp.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Wasp" src="assets-old-path/images/wasp.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-beach.png" /> Wasp
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>6 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/catcher-in-the-rye.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Catcher in the rye" src="assets-old-path/images/catcher-in-the-rye.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-tree.png" /> Catcher in the rye
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>31 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/old-caddy.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="Old caddy" src="assets-old-path/images/old-caddy.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-car.png" /> Old Caddy
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-md-3">
                            <div class="thumbnail" href="assets-old-path/images/oneway.jpg">
                                <a href="javascript:;">
                                    <img class="attachment-portfolio-full wp-post-image" width="600" height="400" alt="One way only" src="assets-old-path/images/oneway.jpg">
                                </a>
                                <div class="caption">
                                    <h4>
                                        <a href="javascript:;">
                                            <img class="icon-small" src="assets-old-path/images/icons/holiday-nature.png" /> One way only
                                        </a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis, lorem vitae volutpat luctus, lectus nisl suscipit sem, nec varius magna neque in dui. Nullam non leo id turpis hendrerit...</p>
                                </div>
                                <div class="ratings">
                                    <p>
    									<img class="icon-small" src="assets-old-path/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star-filled.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
									<img class="icon-small" src="assets/images/icons/star.png" />
                                    </p>
    								<p>0 reviews</p>
                                </div>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-md-12" id="timingResult">
                Loading timing events, please wait...
            </div>
        </div>

    </div>
    <!-- /.container -->

    <div class="container page">
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-md-12">
                    <p>Performance test suite is created by iteratec and based on <a href="http://http2rulez.com/">HTTP 2.0 Rulez!</a> by <a href="https://twitter.com/ipeychev">Iliyan Peychev</a>.<br></p>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->



     <script type="text/javascript" src="assets/js/sendBeacon.js"></script>

</body>

</html>
