<!DOCTYPE html>
<html>
    <head>
        <title>Touristiqo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="assets/css/Main.css" rel="stylesheet">
        <link href="assets/css/hover.css" rel="stylesheet"/>
        <link href="assets/css/mobile.css" rel="stylesheet"/>

        <script src="assets/js/main.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/hover-box.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Početna <span class="glyphicon glyphicon-home"></span></a></li>
                        <li><a href="letovanje.html">Letovanje</a></li>
                        <li><a href="#">Zimovanje</a></li>
                        <li><a href="#">Krstarenje</a></li>
                        <li><a href="#">Wellness & Spa</a></li>
                        <li><a href="#">Za mlade</a></li>
                        <li><a href="#">City Break</a></li>
                        <li><a href="#">O nama <span class="glyphicon glyphicon-user"></span></a></li>
                        <li><a href="#">Konrakt <span class="glyphicon glyphicon-earphone"></span></a></li>
                        <li class="dropdown active"><a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown">Grčka</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Zakintos</a></li>
                                <li><a href="#">Kavos</a></li>
                                <li><a href="#">Kalitea</a></li>
                                <li><a href="#">Pefkohori</a></li>
                                <li><a href="#">Krf</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Hrvatska</a></li>
                                <li><a href="#">Crna Gora</a></li>
                                <li><a href="#">Italija</a></li>
                            </ul>
                        </li>       
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Vas nalog <span class="glyphicon glyphicon-log-in"></span></a>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">

                    <div id="DrpDwn" class="dropdown-content">
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Grčka</a>
                            <ul class="dropdown-menu">
                                <li><a href="hrvatska.html">Hrvatska</a></li>
                                <li><a href="hrvatska.html">Crna Gora</a></li>
                                <li><a href="hrvatska.html">Italija</a></li>
                            </ul>
                        </div>   
                    </div>
                </li>
                <li>
                    <a href="#">Zakintos</a>
                </li>
                <li>
                    <a href="#">Kavos</a>
                </li>
                <li>
                    <a href="#">Kalitea</a>
                </li>
                <li>
                    <a href="#">Pefkohori</a>
                </li>
                <li>
                    <a href="#">Krf</a>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="hotel">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="assets/img/hotel1zakintos.jpeg" alt="Hotel">
                            <h3>Sunset Paradise</h3>
                            <p>Od 50€/noć</p>
                            <div class="rating">
                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                            </div>
                            <a href="<?php echo Misc::link('rezervisanje'); ?>" class="btn btn-primary" role="button">Rezerviši<span class="glyphicon glyphicon-ok"></span></a>
                        </div>
                    </div>
                </div>           <div class="hotel">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="assets/img/hotel1zakintos.jpeg" alt="Hotel">
                            <h3>Sunset Paradise</h3>
                            <p>Od 50€/noć</p>
                            <div class="rating">
                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                            </div>
                            <a href="rezervacija.html" class="btn btn-primary" role="button">Rezerviši<span class="glyphicon glyphicon-ok"></span></a>
                        </div>
                    </div>
                </div>
                <div class="hotel">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="assets/img/hotel1zakintos.jpeg" alt="Hotel">
                            <h3>Sunset Paradise</h3>
                            <p>Od 50€/noć</p>
                            <div class="rating">
                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                            </div>
                            <a href="rezervacija.html" class="btn btn-primary" role="button">Rezerviši<span class="glyphicon glyphicon-ok"></span></a>
                        </div>
                    </div>
                </div>         
                <div class="hotel">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="assets/img/hotel1zakintos.jpeg" alt="Hotel">
                            <h3>Sunset Paradise</h3>
                            <p>Od 50€/noć</p>
                            <div class="rating">
                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                            </div>
                            <a href="rezervacija.html" class="btn btn-primary" role="button">Rezerviši<span class="glyphicon glyphicon-ok"></span></a>
                        </div>
                    </div>
                </div>         
                <div class="hotel">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="assets/img/hotel1zakintos.jpeg" alt="Hotel">
                            <h3>Sunset Paradise</h3>
                            <p>Od 50€/noć</p>
                            <div class="rating">
                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                            </div>
                            <a href="rezervacija.html" class="btn btn-primary" role="button">Rezerviši<span class="glyphicon glyphicon-ok"></span></a>
                        </div>
                    </div>
                </div>
                <div class="hotel">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="assets/img/hotel1zakintos.jpeg" alt="Hotel">
                            <h3>Sunset Paradise</h3>
                            <p>Od 50€/noć</p>
                            <div class="rating">
                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                            </div>
                            <a href="rezervisi.html" class="btn btn-primary" role="button">Rezerviši<span class="glyphicon glyphicon-ok"></span></a>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
        
<?php include 'app/views/_global/afterContent.php'; ?>