<!DOCTYPE html>
<html lang="en">

<head>
    <title>SciELO México</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!--      <meta name="description" content="CodedThemes">
      <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="CodedThemes">-->
      <!-- Favicon icon -->
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome/css/font-awesome.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
      <link rel="stylesheet" href="assets/js/datatables/datatables.min.css">
      <style>
        #card-titulo{
            visibility: hidden;
            height: 0px;
            margin-top: -100px;            
        }
        #titulo{
            --color:#e63a4e;
            color:#e00922;
            font-size: 15px;
            margin-top: -15px;
        }
        @media only screen and (max-width: 992px){
            #card-titulo{
                visibility: visible;
                min-height: 50px;
                margin-top: 0px;
            }
        }
        .nav-left{
            margin-left: 60px;
        }
        .ui-accordion-header-active,.ui-state-hover{
            background: #e00922!important;
        }
        a.accordion-msg:hover, a.accordion-msg:focus{
            background-color: #e00922!important;
        }
        .icon-awesome{
            font-size: 15px;
            padding: 4px;
            margin-right: 10px;
            color: #fff;
            border-radius: 4px;
            width: 30px;
            display: inline-block;
            height: 30px;
            text-align: center;
        }
        a.a-color:hover {
            background-color: white!important;
            color:#e00922!important;
        }
        .titulo{
            color:#e00922;
            font-size: 20px;
        }
        .subtitulo{
            color:#e00922;
            font-size: 15px;
        }
        .texto-i{
            text-align: initial;
        }
        .tabla-descripcion{
            width: 100%;
            white-space: normal;
            text-align: justify;
        }
        .dtr-control:before{
            background-color: #e00922!important;
        }
      </style>
  </head>

  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo" style="background-color: white">
                        <a style="color:#e00922" class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a href="index.php">
                            <img style="height: 70px;margin-left: 50px" class="img-fluid" src="assets/images/scielomx.gif" alt="Theme-Logo" />
                        </a>
                        <?php if(isset($_SESSION['usuario'])): ?>
                            <a style="color:#e00922" class="mobile-options">
                                <i class="ti-more"></i>
                            </a>
                        <?php endif?>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

<!--                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>-->
                            <li>
                                <span class="titulo"></span>
                            </li>
                        </ul>
                        <?php if(isset($_SESSION['usuario'])): ?>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <span><b><?php echo $_SESSION['usuario']; ?></b></span>
                                    <i style="color:#e00922" class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="/usuarios/cerrar_sesion">
                                            <i class="ti-layout-sidebar-left"></i> Cerrar Sesión
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
<!--                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span>John Doe</span>
                                        <span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="#"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>-->
<!--                            <div class="pcoded-search">
                                <span class="searchbar-toggle">  </span>
                                <div class="pcoded-search-box ">
                                    <input type="text" placeholder="Search">
                                    <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
                                </div>
                            </div>-->
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation"><br><br>Menú</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="index.php"> 
                                        <span style="background-color:#e00922" class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Inicio</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span style="background-color:#e00922" class="pcoded-micon"><i class="ti-book"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Revistas</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="" class="link_menu" id="admision_inmediata">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Admisión inmediata</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="" class="link_menu" id="admision">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Admisión</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="" class="link_menu" id="evaluacion">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Evaluación</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="" class="link_menu" id="control">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Control y seguimiento</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="" class="link_menu" id="envio">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Envío</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="" class="link_menu" id="informes">
                                        <span style="background-color:#e00922" class="pcoded-micon"><i class="ti-info"></i><b>I</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Informes</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span style="background-color:#e00922" class="pcoded-micon"><i class="ti-bookmark-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Certificación</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="" class="link_menu" id="certificacion">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Servicios de marcación</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="" class="link_menu" id="empresas">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Empresas y profesionistas</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="" class="link_menu" id="cotizador" target="_blank">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Cotizador</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span style="background-color:#e00922" class="pcoded-micon"><i class="ti-bookmark-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Publicación electrónica</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="" class="link_menu" id="modalidades">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Modalidades</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="" class="link_menu" id="guia">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Guía para pubicación continua</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="" class="link_menu" id="manuales">
                                        <span style="background-color:#e00922" class="pcoded-micon"><i class="ti-layout-list-thumb"></i><b>MG</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Manuales y guías</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="" class="link_menu" id="criterios">
                                        <span style="background-color:#e00922" class="pcoded-micon"><i class="ti-layout-list-thumb"></i><b>MG</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Criterios</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                           
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <!--<nav id="titulo" class="navbar header-navbar pcoded-header iscollapsed" header-theme="theme1" pcoded-header-position="fixed" style=""></nav>-->
                                <div class="page-wrapper">
                                    <div id="card-titulo" class="page-header card">
                                        <div class="row">
                                            <div id="titulo" class="col-md-12">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div id="card_subtitulo" class="page-header card">
                                        <div class="row">
                                            <div id="subtitulo" class="col-md-12 subtitulo">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="page-body">
                                        <div class="row">
                                            <!-- card1 start -->
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div id="contenido" class="card-body" style="text-align:justify">                                                        
                                                    </div>
                                                    <object id="archivo" type="application/pdf" data="" height="800">
                                                    </object>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--                <div class="fixed-button">
                    <a href="https://codedthemes.com/item/guru-able-admin-template/" target="_blank" class="btn btn-md btn-primary">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
                    </a>
                </div>-->
            </div>
        </div>

        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript" src="assets/pages/todo/todo.js "></script>
<script type="text/javascript" src="assets/pages/accordion/accordion.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/scielo.js"></script>
<script type="text/javascript" src="assets/js/datatables/datatables.min.js"></script>
<script src="scielo/utils_js"></script>
<?php if (isset($_SESSION['usuario'])): ?>
    <script> usuario = '<?php echo $_SESSION['usuario']?>' </script>
<?php endif; ?>
<!--<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>-->
</body>

</html>
