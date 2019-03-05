<?php
  $salto="\r\n\r\n"; 
  $send = "";
  if (isset($_POST['submit'])) 
  {
    $from = 'Correo de: '.$_POST['email'];
    $to = 'info@empiricgames.net'.',';
    $to .= 'luis_axlux@hotmail.com';
    $subject = 'Nuevo contacto en Empiric Games de: '.$_POST['email'];
    $body = 'Mensaje: '.$_POST['mensaje'];

    $email=$_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $emailError = '<div class="text-warning subtitle">Ingresa una dirección de correo válida!</div>';
    }
    
    if (!$emailError)
    {
        if (mail($to, $subject, $body, $from)) 
        {
            $send = '<div class="text-success subtitle">Mensaje enviado. Nos comunicaremos contigo muy pronto!</div>';
        }
        else
            $send = '<div class="text-danger subtitle">Lo sentimos, ha ocurrido un error, inténtalo de nuevo.</div>';
    }
  }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Empiric Games - Empresa de Desarrollo de Videojuegos</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">
    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="icon/favicon.ico" type="image/x-icon">

    <!-- COMMON TAGS -->
    <meta name="description" content="Empiric Games Desarrollo de Video Juegos y Apps.">
    <meta name="keywords" content="juegos, video juegos, android, unity, desarrollo, games, video games" />
    <meta name="author" content="Empiric Games">
    <meta name="designer" content="Empiric Games">
    <meta name="url" content="http://empiricgames.net">
    <meta name="copyright" content="Empiric Games">
    <meta name="robots" content="index,follow">
    <!-- Schema.org for Google+ -->
    <meta itemprop="name" content="Empiric Games">
    <meta itemprop="description" content="Empiric Games Desarrollo de Video Juegos y Apps.">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Empiric Games">
    <meta name="twitter:description" content="Empiric Games Desarrollo de Video Juegos y Apps.">
    <!-- Open Graph general -->
    <meta name="og:title" content="Empiric Games">
    <meta name="og:description" content="Empiric Games Desarrollo de Video Juegos y Apps.">
    <meta name="og:url" content="http://empiricgames.net">
    <meta name="og:site_name" content="Empiric Games">
    <meta name="og:type" content="website">

</head>
<body class="header_sticky" data-offset="50" data-spy="scroll" data-target="#header">
    
    <!-- Boxed -->
    <div class="boxed">

        <div class="header-top-area">
            <div class="container">
                <div class="row fit">
                <div class="col-sm-4">
                        <div class="logo wow fadeInUp" data-wow-delay="1s">
                            <a href="empiricgames.net"><img src="img/empiricGAMES.png" width="150"></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a class="smoth-scroll" href="#rev_slider_1078_1_wrapper">Inicio</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#acerca">Acerca de</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#habilidades">Habilidades</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#apps">Apps</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#contacto">Contactanos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container tparrows-none" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">

            <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
            <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
                <div class="slotholder"></div>

                    <ul><!-- SLIDE  -->

                        <!-- SLIDE 1 -->
                        <li data-index="rs-3049" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"    data-rotate="0"  data-saveperformance="off"  data-title="Empiric Games" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- <div class="overlay">
                            </div> -->
                            <!-- MAIN IMAGE -->
                            <img src="img/Mockup.png"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption title-slide color2e2f letter-spacing-1"
                                id="slide-3049-layer-1"
                                data-x="['right','right','right','right']" data-hoffset="['-73','30','30','30']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-90','-90','-90','-90']"
                                data-fontsize="['80','80','65','33']"
                                data-lineheight="['100','100','80','45']"
                                data-fontweight="['600','600','600','600']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":100,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                data-textAlign="['right','right','right','right']"
                                data-paddingtop="[10,10,10,10]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 16; white-space: nowrap;">Empiric Games
                            </div>

                             <!-- LAYER NR. 12 -->
                            <div class="tp-caption sub-title position color2e2f letter-spacing-0"
                                id="slide-3049-layer-3"
                                data-x="['right','right','right','right']" data-hoffset="['-73','30','30','30']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-163','-163','-140','-140']"
                                data-fontsize="['48',48','30','18']"
                                data-lineheight="['60','60','35','16']"
                                data-fontweight="['00','00','00','00']"
                                data-width="['660','660','660','300']"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":1100,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                data-textAlign="['right','right','right','right']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 17; white-space: nowrap;text-transform:left;">Nosotros somos
                            </div>

                            <!-- LAYER NR. 13 -->
                            <div class="tp-caption sub-title color7779 letter-spacing-0"
                                id="slide-3049-layer-4"
                                data-x="['right','right','right','right']" data-hoffset="['-73','30','30','30']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['32','32','10','-10']"
                                data-fontsize="['18',18','16','14']"
                                data-lineheight="['30','30','22','16']"
                                data-fontweight="['300','300','300','300']"
                                data-width="['800',800','700','450']"
                                data-height="none"
                                data-whitespace="['nowrap',normal','normal','normal']"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":1100,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                data-textAlign="['right','right','right','right']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 17; white-space: normal;">Somos un equipo de personas que se animan por la creacion <br> de videojuegos.
                            </div>

                            <a href="#apps" target="_self" class="tp-caption flat-button botton-slider bg2e2f fontsize13 our-work"

                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'

                            data-x="['center','center','center','center']" data-hoffset="['430','380','230','80']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['158','158','140','100']"
                            data-width="['auto']"
                            data-height="['auto']"
                            style="z-index: 3;">VER JUEGOS
                            </a><!-- END LAYER LINK -->
                        </li>

                    </ul>
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </div>

        <section id="home-basic-agency-s1" class="flat-row home-basic-agency-s1">
            <div class="container">
                <div class="section-text-box">
                    <div class="row">
                      <h1 class="top-header-black" id="acerca">Descubre más 
                        acerca de nosotros</span></h1>
                        <div class="col-md-4 section-reponsive-mb30">
                            <article class="post clearfix">
                                <div class="padding-right-10">
                                    <h2 class="title-post fontsize24 margin-bottom-18 text-center"><a href="#" class="title-no-link">¿Quienes somos?</a></h2>
                                    <p class="text-center">Empiric Games es una empresa que desarrolla aplicaciones para el entretenimiento.</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 section-reponsive-mb30">
                            <article class="post clearfix">
                                <div class="padding-right-10">
                                    <h2 class="title-post fontsize24 margin-bottom-18 text-center"><a href="#" class="title-no-link">¿Como trabajamos?</a></h2>
                                    <p class="text-center">
                                      Trabajamos con las últimas tendencias modernas (programación, modelado, visuales) para el desarrollo de aplicaciones, nos encargamos de usar las herramientas más completas y recomendadas del mercado.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 section-reponsive-mb30">
                            <article class="post clearfix">
                                <div class="padding-right-10">
                                    <h2 class="title-post fontsize24 margin-bottom-18 text-center"><a href="#" class="title-no-link">¿Que hacemos?</a></h2>
                                    <p class="text-center">Realizamos la programación y diseño, conjuntamente con el desarrollo de sonidos que son implementados en el producto final.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                 </div>
            </div>
        </section>

        <section class="flat-row home-basic-agency-s3">
             <div class="container">
                 <div class="row" id="habilidades">
                   <h1 class="top-header-black">¿Que ofrecemos?</h1>
                    <div class="col-md-4 section-reponsive-mb30">
                        <div class="iconbox left style3 left-icon fontsize-icon-36 clearfix">
                            <div class="box-header">
                                <div class="box-icon">
                                    <i class="ti-ruler-pencil"></i>
                                </div>
                            </div>
                            <div class="box-content">
                                <h4 class="box-title color-black">Diseño unico</h4>
                                <p>Nos encargamos de realizar un desarrollo con diseños nuevos e innovadores.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 section-reponsive-mb30">
                        <div class="iconbox left style3 left-icon fontsize-icon-36 clearfix">
                            <div class="box-header">
                                <div class="box-icon">
                                    <i class="ti-desktop"></i>
                                </div>
                            </div>
                            <div class="box-content">
                                <h4 class="box-title color-black">Perfectamente desarrollado</h4>
                                <p>
                                  Se realiza la depuración y programación de cada segmento de código de las aplicaciones, creando una aplicación solida.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 section-reponsive-mb30">
                        <div class="iconbox left style3 left-icon fontsize-icon-36 clearfix">
                            <div class="box-header">
                                <div class="box-icon">
                                    <i class="ti-mobile"></i>
                                </div>
                            </div>
                            <div class="box-content">
                                <h4 class="box-title color-black">Apps multiplataformas</h4>
                                <p>
                                  Nuestras aplicaciones de entretenimiento son creadas para soportar apps multiplataformas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider h54"></div>
                <div class="row">
                    <div class="col-md-4 section-reponsive-mb30">
                        <div class="iconbox left style3 left-icon fontsize-icon-36 clearfix">
                            <div class="box-header">
                                <div class="box-icon">
                                    <i class="ti-settings"></i>
                                </div>
                            </div>
                            <div class="box-content">
                                <h4 class="box-title color-black">Apps actualizadas</h4>
                                <p>
                                  Al crear un juego, realizamos actualizaciones para mejorar el rendimiento y aumentar la escalabilidad.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 section-reponsive-mb30">
                        <div class="iconbox left style3 left-icon fontsize-icon-36 clearfix">
                            <div class="box-header">
                                <div class="box-icon">
                                    <i class="ti-layout"></i>
                                </div>
                            </div>
                            <div class="box-content">
                                <h4 class="box-title color-black">Para todos, entre todos.</h4>
                                <p>
                                  Nuestros juegos son desarrollados para los más jovenes, como también para un público adulto.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 section-reponsive-mb30">
                        <div class="iconbox left style3 left-icon fontsize-icon-36 clearfix">
                            <div class="box-header">
                                <div class="box-icon">
                                    <i class="ti-headphone-alt"></i>
                                </div>
                            </div>
                            <div class="box-content">
                                <h4 class="box-title color-black">Mejor soporte para los usuarios</h4>
                                <p>
                                  Si tienes algun inconveniente durante el uso de las aplicaciones, consulta el soporte de ayuda, nos contactas y te ayudaremos a resolverlo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-basic-agency-s4">
          <h1 class="top-header-black padding-top-40" id="apps">App Showcase</h1>
            <div class="wrap-our-work style-post-agency clearfix  padding-bottom-50">
                <div class="section-one-fourth grid-metro blog_column_metro wow fadeInUp" data-wow-duration=".5s">
                    <article class="post clearfix">
                        <div class="featured-post">
                            <a href="blog-single-sidebar.html"><img src="img/Skynimals.png" alt="image"></a>
                        </div>
                        <div class="content-post">
                            <h2 class="title-post"><a href="#" title="">Skynimals</a></h2>
                        </div>
                    </article>
                </div>
                <div class="section-one-fourth grid-metro blog_column_metro wow fadeInUp" data-wow-duration=".5s">
                    <article class="post clearfix">
                        <div class="featured-post">
                            <a href="blog-single-sidebar.html"><img src="img/SwapSpace.png" alt="image"></a>
                        </div>
                        <div class="content-post">
                            <h2 class="title-post"><a href="#">Swap Space</a></h2>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="call-action style2 home-business-s7">
          <div class="container">
                <section id="equipo" class="row">
                  <section class="container-equipo">
                    <div class="title-call-action another align">
                          Nuestro equipo de desarrollo
                      </div>

                    <div class="col-md-4 col-sm-12 equip wow fadeInUp" data-wow-duration="1s">
                      <img src="img/avatar-luis.png" alt="" class="equipo-img"/>
                      <h2>Luis Gigante</h2>
                      <p>
                        Artista 3D / Desarrollador / Programador 
                      </p>
                    </div>

                    <div class="col-md-4 col-sm-12 equip wow fadeInUp" data-wow-duration="1s">
                      <img src="img/avatar-esteban.png" alt="" class="equipo-img"/>
                      <h2>Esteban Hernandez</h2>
                      <p>
                        Desarrollador / Programador
                      </p>
                    </div>

                    <div class="col-md-4 col-sm-12 equip wow fadeInUp" data-wow-duration="1s">
                      <img src="img/avatar-aldo.png" alt="" class="equipo-img"/>
                      <h2>Aldo Di Luigi</h2>
                      <p>
                        Artista Gráfico
                      </p>
                    </div>
                    
                    <div class="col-md-12 col-sm-12 equip wow fadeInUp" >
                        <div class="row">
                            <div class="col-md-2 col-sm-12">
                              <!--Relleno-->
                            </div>
                            <div class="col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <img src="img/avatar-alejandro.png" alt="" class="equipo-img"/>
                                <h2>Alejandro Hernandez</h2>
                                <p>
                                    Artista 3D / Programador
                                </p>
                            </div>
                            <div class="col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <img src="img/avatar-daniel.png" alt="" class="equipo-img"/>
                                <h2>Daniel Marcial</h2>
                                <p>
                                    Musica / Sonidos FX
                                </p>
                            </div>
                        </div>
                    </div>
                    
                  </section>
                </section>
              </div>
              </section>

        <!-- Footer -->
        <section class="blancejqurey1 footer" id="footer">
            <div class="container-fluid padding-top-40 foot" id="contacto">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 margin-top-20">
                      <p class="text-footer text-left">
                        Para comunicarte con el equipo de trabajodebes enviar un mensaje en el formulario que encontraras aqui. Nuestro equipo leera tus inquietudes con gusto nuestra respuesta te la haremos saber a tu correo.
                    </p><br>
                    <div class="follow-us text-center margin-left-36">
                        <span class="h4">SIGUENOS</span>
                    </div><br>
                    <div class="flat-socials gradient-bgvioletgreen text-center margin-bottom-20">
                        <a href="#"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                    <div class="col-md-6 margin-bottom-20">
                      <form method="post" role="form" action="#contacto">
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Tu Email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="mensaje" placeholder="Tu Mensaje" rows="3" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                        <?php echo $send; ?>
                      </form>
                    </div>
                  </div>
              </div>
          </div>
          <div class="container-fluid text-center text-white copyright">
               &copy; Copyright 2018 <a href="empiricgames.net" class="copy-text">Empiric Games</a> | Todos los derechos reservados.
          </div>
        </section>
        <!---Footer End-->

        <!-- Go Top -->
        <a class="go-top">
            <i class="ti-angle-up"></i>
        </a>


    <!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script>
    <script type="text/javascript" src="javascript/jquery-validate.js"></script>
    <script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="javascript/imagesloaded.min.js"></script>

    <script type="text/javascript" src="javascript/parallax.js"></script>
    <script type="text/javascript" src="javascript/jquery.magnific-popup.min.js"></script>
    <!-- <script type="text/javascript" src="javascript/switcher.js"></script> -->
    <script type="text/javascript" src="javascript/wow.js"></script>

    <script type="text/javascript" src="javascript/main.js"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="revolution/js/slider2.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    

</body>
</html>
