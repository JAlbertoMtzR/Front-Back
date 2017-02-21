<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sea Life</title>

    <!-- Bootstrap CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.fullpage/2.5.9/jquery.fullPage.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="css/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="fullpage">
    <div class="section" id="toursp">
        <header class="row">
            <div class="col-md-3">
                <a href="/"><img src="img/logosealife.png" height="100"alt="logo" class="center-block"></a>
            </div>
            <div class="col-md-6">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand hidden-md hidden-lg" href="#">Menu</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="/tours.php" class="active">Tours</a></li>
                            <li><a href="/traslados.php">Transportación</a></li>
                            <li><a href="/nosotros.php">Nosotros</a></li>
                            <li><a href="/contacto.php">Contacto</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <a href="#">
			    						<span class="fa-stack fa-2x">
											<i class="fa fa-circle-thin fa-stack-2x"></i>
											<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
										</span>
                            </a>
                            <a href="#" id="clima">
										<span class="fa-stack fa-2x">
											<i class="fa fa-circle-thin fa-stack-2x"></i>
											<i class="fa fa-sun-o fa-stack-1x fa-inverse"></i>
										</span>
                            </a>
                            <a href="#">
										<span class="fa-stack fa-2x">
											<i class="fa fa-circle-thin fa-stack-2x"></i>
											<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
										</span>
                            </a>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div><!--col md 6-->
            <div class="clearfix"></div>
            <div class="col-md-6 col-md-offset-3">
                <div id="weather" class="hidden"></div>
            </div>
        </header>
    </div>
    <div class="section">
        <div class="onda-top"></div>
        <div class="col-md-6 padding bg-blanco ostrich">
            <h2>Jungle Tour</h2>
            <p class="text-justify">
                Conduce tu propia lancha rápida para dos personas sintiendo la adrenalina en una magnifica excursión
                guiada a tráves de la laguna Nichupté.
            </p>
            <h3><strong>Servicios incluidos</strong></h3>
            <ul>
                <li>90 minutos de diversión en lancha rápida</li>
                <li>40 minutos de snorkel en arrecife Ángel</li>
                <li>2 horas y 10 minutos de aventura acuática</li>
                <li>Guía bilingüe</li>
                <li>Regaderas</li>
                <li>Agua embotellada</li>
                <li>Locker</li>
                <li>Equipo de snorkel <br> <small>(Chaleco salvavidas, Aletas, visores y tubo de snorkel)</small></li>
            </ul>
            <br>
            <button class="btn btn-warning" data-toggle='modal' data-target='#tourModal' data-id="1">¡Lo
                Quiero!</button>
        </div>
        <div class="col-md-6 padding bg-blanco">
            <p class="pull-right">Vive la mejor experiencia</p>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/Jungle1.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="img/Jungle2.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="img/jungle3.jpg" alt="...">
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="onda-bot col-md-12"></div>
    </div>
    <div class="section" >
        <div class="col-md-12 padding full" id="tours-bg-2"></div>
    </div>
    <div class="section">
        <div class="onda-top-amarillo"></div>
        <div class="col-md-6 padding bg-blanco ostrich">
            <h2>Boca del puma</h2>
            <p class="text-justify">
                Ingresa a un Territorio salvaje en medio de la naturaleza y vence un desafiante recorrido entre los
                arboles a bordo de un vehículo todo terreno.
            </p>
            <p>Circuitos de tirolesas, cenote y auto todo terreno.</p>
            <h3><strong>Servicios incluidos</strong></h3>
            <ul>
                <li>Cenote</li>
                <li>Equipo de guantes de piel, arnes y casco (Tirolesa)</li>
                <li>Ligero almuerzo típico de la región y agua de sabor</li>
                <li>Baños</li>
                <li>Transporte</li>
                <li>5 horas de tour (incluyendo traslados)</li>
            </ul>
            <br>
            <button class="btn btn-warning" data-toggle='modal' data-target='#tourModal' data-id="2">¡Lo
            Quiero!</button>
        </div>
        <div class="col-md-6 padding bg-blanco">
            <p class="pull-right">Vive la mejor experiencia</p>
            <div id="puma-carousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/Puma1.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="img/Puma2.jpg" alt="...">
                    </div>
                    <div class="item">
                        <img src="img/Puma3.jpg" alt="...">
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#puma-carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#puma-carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="onda-bot-amarillo col-md-12"></div>
    </div>
    <div class="section" >
        <div class="col-md-12 padding full" id="tours-bg-3"></div>
    </div>
    <div class="section">
        <div class="onda-top-verde"></div>
        <div class="col-md-12 padding full ostrich text-center">
            <h3>Tulum y Cenotes</h3>
            <div class="col-md-4">
                <div class="wrap bg-azul">
                    <img src="img/tulum.jpg" alt="" class="img-responsive">
                    <p class="text-center">Tulum + cenote Aktun che</p>
                </div>
                <button class="btn btn-warning" data-toggle='modal' data-target='#tourModal' data-id="3">Ver
                    mas</button>
            </div>
            <div class="col-md-4">
                <div class="wrap bg-azul">
                    <img src="img/tulum.jpg" alt="" class="img-responsive">
                    <p class="text-center">Tulum + cenote dos ojos</p>
                </div>
                <button class="btn btn-warning" data-toggle='modal' data-target='#tourModal' data-id="3">Ver
                    mas</button>
            </div>
            <div class="col-md-4">
                <div class="wrap bg-azul">
                    <img src="img/tulum.jpg" alt="" class="img-responsive">
                    <p class="text-center">Tulum extremo + boca del puma</p>
                </div>
                <button class="btn btn-warning" data-toggle='modal' data-target='#tourModal' data-id="4">Ver
                    mas</button>
            </div>
        </div>
        <div class="onda-bot-verde col-md-12"></div>
    </div>
    <div class="section">
        <div class="third full tulum">
            <div class="col-md-12 text-center" style="padding-top: 10%;">
                <h3 class="text-center no-margin"><span style="border-bottom: 5px solid #FCD000;">Conectate con nosotros</span></h3>
                <br>
                <a href=""><span class="fa-stack fa-3x">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span></a>
                <a href=""><span class="fa-stack fa-3x">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						</span></a>
                <a href=""><span class="fa-stack fa-3x">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
						</span></a>
                <a href=""><span class="fa-stack fa-3x">
							<i class="fa fa-circle-thin fa-stack-2x"></i>
							<i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
						</span></a>
            </div>
        </div>
        <footer class="quarter">
            <div class="col-md-3">
                <div class="foot">
                    <div class="col-md-4">
			    				<span class="fa-stack fa-3x">
								  <i class="fa fa-circle-thin fa-stack-2x"></i>
								  <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
								</span>
                    </div>
                    <div>
                        Blvd. Kukulcan zona hotelera <br>
                        frente al hotel grand oasis <br>
                        Km. 15.6 Cancún, Quintana roo.
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="foot">
                    <div class="col-md-4">
			    				<span class="fa-stack fa-3x">
								  <i class="fa fa-circle-thin fa-stack-2x"></i>
								  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span>
                    </div>
                    <div>
                        Teléfonos <br>
                        998 840 7140 <br>
                        998 293 6784
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="foot">
                    <div class="col-md-4">
			    				<span class="fa-stack fa-3x">
								  <i class="fa fa-circle-thin fa-stack-2x"></i>
								  <i class="fa fa-at fa-stack-1x fa-inverse"></i>
								</span>
                    </div>
                    <div>
                        info@sealifemarina.com
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="foot">
                    <a href="https://www.facebook.com/sealifemarina/"><span class="fa-stack fa-lg">
								<i class="fa fa-circle-thin fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span></a>
                    <a href=""><span class="fa-stack fa-lg">
								<i class="fa fa-circle-thin fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</span></a>
                    <a href=""><span class="fa-stack fa-lg">
								<i class="fa fa-circle-thin fa-stack-2x"></i>
								<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
							</span></a>
                </div>
            </div>
        </footer>
    </div>
</div>
<?php include_once 'partials/modal.php'?>
<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.fullpage/2.5.9/jquery.fullPage.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/general.js"></script>
<script src="js/tours.js"></script>
</body>
</html>
