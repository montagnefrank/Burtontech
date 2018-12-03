<?php
//////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require ("assets/scripts/videorandom.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Burton Technology | Tecnolog&iacute;a en tus manos</title>

        <link rel="icon" href="assets/img/logotipo.png" type="image/x-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700%7CTitillium+Web:200,300,400,600,700&amp;subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- Libraries CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/animate.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap-colorpicker.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="assets/css/particle_video_light.css" rel="stylesheet">
        <link href="assets/css/particle_demo.css" rel="stylesheet">
        <link href="assets/css/skins.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">
        <link href="assets/css/bg_video.css" rel="stylesheet">
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112590518-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-112590518-1');
        </script>
        <meta name="google-site-verification" content="wu6tF4C2bObbbhCNKemENLoKcp2cseHWd-aKAkYiV3U" />
    </head>
    <body id="page-top" data-spy="scroll" data-target="#st-nav">                  

        <!-- Menu ================================================== -->
        <header>
            <div id="st-logo">
                <a href="#0">
                    <img src="assets/img/logoheader.png" alt="Burton Technology" class="headerlogo">
                </a>
            </div>
        </header>

        <div id="st-nav">
            <a href="#0" class="st-nav-trigger bounce_ani">
                Menu<span></span>
            </a>

            <nav id="st-main-nav">
                <ul>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="#page-top">Inicio</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="#our-work">Portafolio</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="#about">Trayectoria</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="#services">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="#skills">Proyecci&oacute;n</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="#contact">Contacto</a>
                    </li>
                </ul>
            </nav>
        </div>
        <section id="hero" class="hero-section-video">
            <div class="video-overlay"></div>
            <div class="hero-video">

                <video autoplay loop poster="assets/video/particle-video-light.jpg" id="bgvid" class="mobilevideobg">
                    <source src="assets/video/particle-video-light.webm" type="video/webm">
                    <source src="assets/video/particle-video-light.mp4" type="video/mp4">
                </video>

                <div class="video-background desktopvideobg">

                    <div class="video-foreground">

                        <iframe src="https://www.youtube.com/embed/<?php echo $video; ?>?controls=0&showinfo=0&rel=0&mute=1&modestbranding=1&autoplay=1&loop=1&playlist=<?php echo $video; ?>" frameborder="0" allowfullscreen></iframe>

                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-logo mar_bottom32">
                            <img src="assets/img/name<?php echo $color; ?>.png" alt="Logo burtontech" class="logoslider">
                            <div id="particles-js"></div>
                        </div>
                        <div class="typed-text mar_bottom32">
                            <span class="skilltechtypetext <?php echo $color; ?>">
                                <span class="typed-cursor">|</span>
                            </span>
                        </div>
                        <div class="service-item-read-more" style="bottom: 32px;">
                            <a href="#big-image" class="arrow-down page-scroll">
                                <i class="fa fa-angle-down bounce" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="big-image" class="image-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <img src="assets/img/btsolid.png" alt="Burton Technology" class="ribbonlogo">
                        <h3 class="wow fadeInLeft animated" style="text-shadow: black 0.1em 0.1em 0.2em">Buscas lo más  <span> moderno y eficiente</span>?</h3>
                        <h4 class="wow fadeInLeft animated" style="text-shadow: black 0.1em 0.1em 0.2em">Has llegado al sitio correcto, explora nuestro portafolio ahora!</h4>
                        <a class="btn btn-default btn-lg wow fadeInRight hvr-sweep-to-right primary-2-back animated page-scroll" href="#our-work">Portafolio</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portafolio ================================================== -->
        <section id="our-work" class="our-work-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 see-work">
                        <h2 class="wow fadeInLeft animated">Trabajos Recientes</h2>
                    </div>
                    <div class="col-md-12 new-style">
                        <p class="wow fadeInLeft animated">
                            Nuestro estilo marca tendencias en el 2018. Te gusta? 
                            <a href="#contact" class="secondary page-scroll">
                                LLAMA AHORA
                            </a>
                        </p>
                    </div>
                    <div class="col-md-12 portfolio-images">

                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-img first">
                                <img class="img-responsive" src="assets/img/protfolio/bt.jpg" alt="burtotech anterior">
                                <div class="sweep-left image-gradient"></div>
                                <div class="sweep-from-center">
                                    <div class="sweep-layer">
                                        <div class="sweep-content">
                                            <div class="sweep-icon">
                                                <a href="portfolio.php?show=bt" target="_blank">
                                                    <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <h3><a href="portfolio.php?show=bt" target="_blank" class="secondary-hover">Burtontech Sitio Previo</a></h3>
                                            <p>Somos un grupo en constante evolución</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sweep-right image-gradient"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-img first">
                                <img class="img-responsive" src="assets/img/protfolio/mau.jpg" alt="Proyecto Mau">
                                <div class="sweep-left image-gradient"></div>
                                <div class="sweep-from-center">
                                    <div class="sweep-layer">
                                        <div class="sweep-content">
                                            <div class="sweep-icon">
                                                <a href="portfolio.php?show=mau" target="_blank">
                                                    <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <h3><a href="portfolio.php?show=mau" target="_blank" class="secondary-hover">Proyecto Moyi</a></h3>
                                            <p>Sistema de Trackeo masivo de Carga</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sweep-right image-gradient"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-img first">
                                <img class="img-responsive" src="assets/img/protfolio/gab.jpg" alt="Gabriel Daher">
                                <div class="sweep-left image-gradient"></div>
                                <div class="sweep-from-center">
                                    <div class="sweep-layer">
                                        <div class="sweep-content">
                                            <div class="sweep-icon">
                                                <a href="portfolio.php?show=gab" target="_blank">
                                                    <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <h3><a href="portfolio.php?show=gab" target="_blank" class="secondary-hover">Gabriel Daher</a></h3>
                                            <p>Portafolio Online Personalizado</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sweep-right image-gradient"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-img first">
                                <img class="img-responsive" src="assets/img/protfolio/hc.jpg" alt="Homecubic">
                                <div class="sweep-left image-gradient"></div>
                                <div class="sweep-from-center">
                                    <div class="sweep-layer">
                                        <div class="sweep-content">
                                            <div class="sweep-icon">
                                                <a href="portfolio.php?show=hc" target="_blank">
                                                    <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <h3><a href="portfolio.php?show=hc" target="_blank" class="secondary-hover">Homecubic</a></h3>
                                            <p>Sitio Web Inteligente</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sweep-right image-gradient"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-img first">
                                <img class="img-responsive" src="assets/img/protfolio/bite.jpg" alt="Proyecto Bite">
                                <div class="sweep-left image-gradient"></div>
                                <div class="sweep-from-center">
                                    <div class="sweep-layer">
                                        <div class="sweep-content">
                                            <div class="sweep-icon">
                                                <a href="portfolio.php?show=bite" target="_blank">
                                                    <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <h3><a href="portfolio.php?show=bite" target="_blank" class="secondary-hover">BiteCorp</a></h3>
                                            <p>Desarrolo de Plataforma Tecnológica</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sweep-right image-gradient"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-img first">
                                <img class="img-responsive" src="assets/img/protfolio/ivy.jpg" alt="Proyecto Ivy">
                                <div class="sweep-left image-gradient"></div>
                                <div class="sweep-from-center">
                                    <div class="sweep-layer">
                                        <div class="sweep-content">
                                            <div class="sweep-icon">
                                                <a href="portfolio.php?show=ivy" target="_blank">
                                                    <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <h3><a href="portfolio.php?show=ivy" target="_blank" class="secondary-hover">Proyecto Ivy</a></h3>
                                            <p>Sistema Administrativo Contable</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sweep-right image-gradient"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-img first">
                                <img class="img-responsive" src="assets/img/protfolio/myrcons.jpg" alt="Myrcons">
                                <div class="sweep-left image-gradient"></div>
                                <div class="sweep-from-center">
                                    <div class="sweep-layer">
                                        <div class="sweep-content">
                                            <div class="sweep-icon">
                                                <a href="portfolio.php?show=myrcons" target="_blank">
                                                    <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <h3><a href="portfolio.php?show=myrcons" target="_blank" class="secondary-hover">Myrcons Constructores</a></h3>
                                            <p>Sitio web en Wordpress CMS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sweep-right image-gradient"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-img first">
                                <img class="img-responsive" src="assets/img/protfolio/tdt.jpg" alt="TDT">
                                <div class="sweep-left image-gradient"></div>
                                <div class="sweep-from-center">
                                    <div class="sweep-layer">
                                        <div class="sweep-content">
                                            <div class="sweep-icon">
                                                <a href="portfolio.php?show=tdt" target="_blank">
                                                    <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <h3><a href="portfolio.php?show=tdt" target="_blank" class="secondary-hover">Tenemosdetodo</a></h3>
                                            <p>Tienda Online Personalizada</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sweep-right image-gradient"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-img first">
                                <img class="img-responsive" src="assets/img/protfolio/jassa.jpg" alt="Jassa">
                                <div class="sweep-left image-gradient"></div>
                                <div class="sweep-from-center">
                                    <div class="sweep-layer">
                                        <div class="sweep-content">
                                            <div class="sweep-icon">
                                                <a href="portfolio.php?show=jassa" target="_blank">
                                                    <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <h3><a href="portfolio.php?show=jassa" target="_blank" class="secondary-hover">Jassatelecom</a></h3>
                                            <p>Sitio web con Portafolio</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sweep-right image-gradient"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-img first">
                                <img class="img-responsive" src="assets/img/protfolio/cabis.jpg" alt="Cabis">
                                <div class="sweep-left image-gradient"></div>
                                <div class="sweep-from-center">
                                    <div class="sweep-layer">
                                        <div class="sweep-content">
                                            <div class="sweep-icon">
                                                <a href="portfolio.php?show=cabis" target="_blank">
                                                    <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <h3><a href="portfolio.php?show=cabis" target="_blank" class="secondary-hover">Proyecto Cabis</a></h3>
                                            <p>Sistema Administrativo y CRM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sweep-right image-gradient"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-img first">
                                <img class="img-responsive" src="assets/img/protfolio/eblooms.jpg" alt="Eblooms">
                                <div class="sweep-left image-gradient"></div>
                                <div class="sweep-from-center">
                                    <div class="sweep-layer">
                                        <div class="sweep-content">
                                            <div class="sweep-icon">
                                                <a href="portfolio.php?show=eblooms" target="_blank">
                                                    <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <h3><a href="portfolio.php?show=eblooms" target="_blank" class="secondary-hover">Eblooms Direct</a></h3>
                                            <p>Tienda Online Internacional</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sweep-right image-gradient"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-img first">
                                <img class="img-responsive" src="assets/img/protfolio/naty.jpg" alt="Proyecto Naty">
                                <div class="sweep-left image-gradient"></div>
                                <div class="sweep-from-center">
                                    <div class="sweep-layer">
                                        <div class="sweep-content">
                                            <div class="sweep-icon">
                                                <a href="portfolio.php?show=naty" target="_blank">
                                                    <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <h3><a href="portfolio.php?show=naty" target="_blank" class="secondary-hover">Proyecto Naty</a></h3>
                                            <p>Sistema de gestión de Restaurantes</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sweep-right image-gradient"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Servicios ================================================== -->
        <section id="about" class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-text">
                            <h2 class="wow fadeIn animated"><span>Somos la Solución </span> Absoluta para tu negocio</h2>
                            <p class="wow fadeIn animated">
                                Contamos con un equipo de profesionales listos para atender todas y cada una de las solicitudes de nuestros clientes, 
                                Desarrollamos plataformas personalizadas de tecnología para garantizar los resultados que esperas! ¿Has pagado por tecnología que no ofrece resultados? Debes cambiarte a Proveedores Garantizados AHORA!
                            </p>
                            <ul class="about-icons list-inline">
                                <li class="wow fadeIn animated">
                                    <div class="icon"><i class="material-icons primary">beenhere</i></div>
                                    <div class="text">Rápido, Confiable y Garantizado</div>
                                </li>
                                <li class="wow fadeIn animated">
                                    <div class="icon"><i class="material-icons primary">comment</i></div>
                                    <div class="text">Te atendemos los Profesionales</div>
                                </li>
                                <li class="wow fadeIn animated">
                                    <div class="icon"><i class="material-icons primary">insert_chart</i></div>
                                    <div class="text">Resultados REALES Y CUANTIFICABLES</div>
                                </li>
                            </ul>
                        </div>

                        <div class="about-images">
                            <div class="mockup image-left">
                                <img class="wow fadeInLeft animated" src="assets/img/ipad2.png" alt="ipad">
                            </div>

                            <div class="mockup image-center">
                                <img class="wow slideInUp animated" src="assets/img/ipad1.png" alt="ipad">
                            </div>

                            <div class="mockup image-right">
                                <img class="wow fadeInRight animated" src="assets/img/ipad3.png" alt="ipad">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cita  ================================================== -->
        <section id="quote" class="quote-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 quote-headline">
                        <h4 class="wow fadeIn animated">Estamos aquí para <span>Mejorarte las cosas</span></h4>
                    </div>
                    <div class="col-md-12 quote-bottom">
                        <div class="container">
                            <h3 class="wow fadeIn animated">
                                "Paciencia, Persistencia y Dedicación hace una combinación irrevocable para
                                <span class="primary">el Éxito</span>."
                            </h3>
                            <p class="wow fadeIn animated">NAPOLEON HILL</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Servicios  ================================================== -->
        <section id="services" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 service-headline">
                        <h2 class="wow fadeIn animated">Podemos ayudarte con <span class="primary">más cosas de las que crees posible!</span></h2>
                        <p class="wow fadeIn animated">
                            Nuestro núcleo de negocios se forma en la atención y el servicio, Hemos optimizado nuestra operación para envolver todos los aspectos tecnológios 
                            para empresas de todo nivel, echa un vistazo a nuestros servicios.
                        </p>
                    </div>

                    <div class="col-md-12 service-content">
                        <div class="left">
                            <div class="service wow fadeIn animated">
                                <div class="text">
                                    <a  class="primary-hover">Artes Gráficas</a>
                                    <p>Somos Expertos en generar contenido visual para tus proyectos.</p>
                                </div>
                                <div class="icons">
                                    <i class="material-icons primary">create</i>
                                </div>
                            </div>
                            <div class="service wow fadeIn animated">
                                <div class="text">
                                    <a  class="primary-hover">Páginas Web</a>
                                    <p>Hemos recibido felicitaciones constantes por el resultado de nuestros Websites.</p>
                                </div>
                                <div class="icons">
                                    <i class="material-icons primary">screen_share</i>
                                </div>
                            </div>
                            <div class="service wow fadeIn animated">
                                <div class="text">
                                    <a  class="primary-hover">APP's y Softwares</a>
                                    <p>Ponemos en macha esa Idea Millonaria que tanto has esperado crear.</p>
                                </div>
                                <div class="icons">
                                    <i class="material-icons primary">devices</i>
                                </div>
                            </div>
                        </div>
                        <div class="service-image">
                            <img src="assets/img/services.png" alt="iphone">
                        </div>
                        <div class="right">
                            <div class="service-2 wow fadeIn animated">
                                <div class="icons">
                                    <i class="material-icons primary">network_check</i>
                                </div>
                                <div class="text">
                                    <a  class="primary-hover">Redes e Infraestructura</a>
                                    <p>Conectamos tus Equipos en cualquier parte del Planeta.</p>
                                </div>
                            </div>
                            <div class="service-2 wow fadeIn animated">
                                <div class="icons">
                                    <i class="material-icons primary">public</i>
                                </div>
                                <div class="text">
                                    <a  class="primary-hover">Marketing</a>
                                    <p>Hacemos que tu marca y negocio alcancen al público ideal.</p>
                                </div>
                            </div>
                            <div class="service-2 wow fadeIn animated">
                                <div class="icons">
                                    <i class="material-icons primary">cloud_done</i>
                                </div>
                                <div class="text">
                                    <a  class="primary-hover">Servicios en Nube</a>
                                    <p>El mejor precio para tus Alojamientos, Dominios, Clouds, y todo lo que necesitas!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Cotizar ================================================== -->
        <section id="call-to" class="call-to-section">
            <div class="call-to-layer main-gradient"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="wow fadeIn animated">Quieres formar parte? <br /><span> Podemos construir tu proyecto en </span> DÍAS!</h3>
                        <p class="wow fadeIn animated">
                            <span>Deja YA de confiar </span>  en empresas que te hablan de <span> SEMESTRES y MESES </span> para finalizar tu proyecto, 
                            nosotros hemos adelantado todo el trabajo por tí, ahora puedes tener tu proyecto funcionando en <span> DÍAS y sin demoras.</span>
                        </p>
                        <a class="btn btn-default wow fadeInRight hvr-sweep-to-right button-gradient animated page-scroll" href="#contact">Cotizar</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Servicios        ================================================== -->
        <section id="skills" class="skills-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="skills-headline">
                            <h4 class="wow fadeIn animated">Dejamos que <span>Nuestra Trayectoria </span> hable por Nosotros</h4>
                            <p class="wow fadeIn animated">
                                Puedes formar parte de nuestro Grupo Premium de Empresas, quienes reciben todo tipo de soluciones de tecnología a precios ESPECIALES
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 progress-bar-wrapper">
                        <div class="progress-bars">
                            <div class="bar-wrapper">
                                <div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn animated">Páginas web Online</div>
                                <div class="col-md-8 col-sm-8 col-xs-7">
                                    <div class="progressBar skill-bar-gradient wow animated first-bar"></div>
                                </div>
                                <div class="col-md-1 col-sm-1 col-xs-1">
                                    <span class="counter">67</span><span>.</span>
                                </div>
                            </div>
                            <div class="bar-wrapper">
                                <div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn animated">ERP's</div>
                                <div class="col-md-8 col-sm-8 col-xs-7">
                                    <div class="progressBar skill-bar-gradient wow animated second-bar"></div>
                                </div>
                                <div class="col-md-1 col-sm-1 col-xs-1">
                                    <span class="counter">28</span><span>.</span>
                                </div>
                            </div>
                            <div class="bar-wrapper">
                                <div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn animated">APP's Móviles</div>
                                <div class="col-md-8 col-sm-8 col-xs-7">
                                    <div class="progressBar skill-bar-gradient wow animated third-bar"></div>
                                </div>
                                <div class="col-md-1 col-sm-1 col-xs-1">
                                    <span class="counter">36</span><span>.</span>
                                </div>
                            </div>
                            <div class="bar-wrapper">
                                <div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn animated">Alojamentos Ilimitados</div>
                                <div class="col-md-8 col-sm-8 col-xs-7">
                                    <div class="progressBar skill-bar-gradient wow animated fourth-bar"></div>
                                </div>
                                <div class="col-md-1 col-sm-1 col-xs-1">
                                    <span class="counter">84</span><span> ctas</span>
                                </div>
                            </div>
                            <div class="bar-wrapper">
                                <div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn animated">Líneas de Código</div>
                                <div class="col-md-8 col-sm-8 col-xs-7">
                                    <div class="progressBar skill-bar-gradient wow animated fifth-bar"></div>
                                </div>
                                <div class="col-md-1 col-sm-1 col-xs-1">
                                    +<span class="counter">200</span><span>k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contacto ================================================== -->
        <section id="contact" class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-headline">
                            <h3 class="wow fadeIn animated">Queremos ser tu Aliado <span>Tecnológico</span></h3>
                            <p class="wow fadeIn animated">
                                No esperes más y ecríbenos! somos la empresa garantizada para hacer realidad tus proyectos, no dejes que nada se interponga para lograr tus metas y tus planes de crecimiento!
                            </p>
                        </div>

                        <div class="contact-content">
                            <div class="contact-info">
                                <p class="contact-header">Te atendemos por <span> Todos los medios</span></p>
                                <div class="info-line">
                                    <div class="info-icon wow fadeIn animated">
                                        <i class="fa fa-envelope-o primary" aria-hidden="true"></i>
                                    </div>
                                    <div class="info-text wow fadeIn animated">
                                        <p>ventas@burtonservers.com</p>
                                    </div>
                                </div>
                                <div class="info-line">
                                    <div class="info-icon wow fadeIn animated">
                                        <i class="fa fa-phone primary" aria-hidden="true"></i>
                                    </div>
                                    <div class="info-text wow fadeIn animated">
                                        <p>097 904 6196</p>
                                    </div>
                                </div>

                                <div class="info-line">
                                    <div class="info-icon wow fadeIn animated">
                                        <i class="fa fa-map-marker primary" aria-hidden="true"></i>
                                    </div>
                                    <div class="info-text wow fadeIn animated">
                                        <p>Quito, Av. Veracruz y Villalengua</p>
                                    </div>
                                </div>

                                <div class="bottom-info">
                                    <h4 class="wow fadeIn animated"><span>Sigue nuestras</span> redes</h4>

                                    <ul class="list-inline social-icons wow fadeIn animated">
                                        <li>
                                            <a href="https://www.facebook.com/burtontechnology/" target="_blank" class="primary-2-back primary-back-hover">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/burtonservers" target="_blank" class="primary-2-back primary-back-hover">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/channel/UCM-zmZOrTx1T5VBm97MGJUg" target="_blank" class="primary-2-back primary-back-hover">
                                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/burtontechnology/" target="_blank" class="primary-2-back primary-back-hover">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>

                                    <p class="wow fadeIn animated">Queremos estar conectados contigo en todo momento.</p>
                                </div>
                            </div>

                            <div class="contact-form">
                                <h4 class="wow fadeIn animated">Estamos esperando <span> Tu Mensaje</span></h4>

                                <form method="post" action="thanks.php" id="contactForm">
                                    <div class="form-group wow fadeIn animated">
                                        <label for="name">Nombre: </label>
                                        <input type="text" id="contact_name" name="name" class="form-control">
                                    </div>

                                    <div class="form-group wow fadeIn animated">
                                        <label for="phone">Teléfono: </label>
                                        <input type="text" id="contact_phone" name="phone" class="form-control" >
                                    </div>

                                    <div class="form-group wow fadeIn animated">
                                        <label for="message">Mensaje: </label>
                                        <textarea id="contact_message" name="message" class="form-control" rows="4"></textarea>
                                    </div>
                                    <button class="btn btn-default wow fadeIn primary-back-hover primary-hover-border animated" type="button" id="submitcontact">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer =============================================== -->
        <footer>
            <p>Copyright © 2018 -<a href="http://www.burtonservers.com/" class="primary-hover"> Burton Technology</a></p>
        </footer>

        <!-- Scripts
        ================================================== -->
        <!-- JavaScript Libraries -->
        <script src="assets/js/libs.min.js"></script>

        <!-- Custom  JavaScript -->
        <script src="assets/js/particle-theme.min.js"></script>
        <script src="assets/js/skilltech-style-switcher.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>


