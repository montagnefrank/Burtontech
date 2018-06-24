<?php

$item = array();
$show = $_GET['show'];
switch ($show) {
    case 'bt':
        $item['codename'] = 'bt';
        $item['title'] = "Burtontech Sitio Previo";
        $item['cliente'] = 'Burton Technology';
        $item['completed'] = 'Julio, 2017';
        $item['type'] = 'Desarrollo Web';
        $item['length'] = '5 d&iacute;as';
        $item['status'] = 'Demo';
        $item['skills'] = 'PHP, MYQL, JavaScript, HTML5';
        $item['price'] = '$ 500,00';
        $item['autor'] = 'Frank Montagne, Senior Dev';
        $item['sdesc'] = "Sitio web anterior de Burton Technology, posteriormente actualizado para refrescar la marca";
        $item['ldesc'] = "Hacemos nuestro mayor esfuerzo por marcar tendencias a nivel de desarrollo de software, "
                . "por eso traemos software de alta calidad y velocidad, ofreciendo beneficios efectivos que no ofrecen otras empresas";
        $item['link'] = "http://www.burtonservers.com/previous";
        break;
    case 'aec':
        $item['codename'] = 'aec';
        $item['title'] = "Sitio Web AEConstructora";
        $item['cliente'] = 'AEConstructora Inmobiliaria';
        $item['completed'] = 'Enero, 2018';
        $item['type'] = 'P&aacute;gina Web';
        $item['length'] = '15 d&iacute;as';
        $item['status'] = 'Producci&oacute;n';
        $item['skills'] = 'PHP, MYSQL, HTML5, jQuery';
        $item['price'] = '$ 500,00';
        $item['autor'] = 'Frank Montagne, Senior Dev';
        $item['sdesc'] = "Sitio web personalizado para mostrar productos inmobiliarios";
        $item['ldesc'] = "Hemos desarrollado una plataforma inteligente para todos los dispositivos, en la que nuestro cliente"
                . "puede administrar completamente a través de un panel administrativo desarrollado por nuestro equipo especializado";
        $item['link'] = "http://www.aeconstructora.com/";
        break;
    case 'mau':
        $item['codename'] = 'mau';
        $item['title'] = "Proyecto Moyi";
        $item['cliente'] = 'Eblooms Direct.';
        $item['completed'] = 'Feb, 2017';
        $item['type'] = 'Sistema de Rastreo';
        $item['length'] = '15 d&iacute;as';
        $item['status'] = 'Producci&oacute;n';
        $item['skills'] = 'PHP, MYSQL, CodeIgniter';
        $item['price'] = '$ 2.500,00';
        $item['autor'] = 'Frank Montagne, Senior Dev';
        $item['sdesc'] = "Sistema de trackeo masivo de carga nacional e internacional";
        $item['ldesc'] = "Tenemos para ofrecer todo tipo de plataformas, para este cliente hemos optimizado nuestro sistema a ser especializado para la "
                . "industria flor&iacute;cola, con capacidad de trackear cientos de miles de productos de manera simultanea";
        $item['link'] = "http://mau.burtonservers.com/";
        break;
    case 'gab':
        $item['codename'] = 'gab';
        $item['title'] = "Sitio web Gabriel Daher";
        $item['cliente'] = 'Gabriel Daher';
        $item['completed'] = 'Mayo, 2017';
        $item['type'] = 'Web BIO';
        $item['length'] = '15 d&iacute;as';
        $item['status'] = 'Producci&oacute;n';
        $item['skills'] = 'PHP, MYSQL, HTML5';
        $item['price'] = '$ 700,00';
        $item['autor'] = 'Frank Montagne, Senior Dev';
        $item['sdesc'] = "Portafolio online y Web Bio especializada para nuestro cliente";
        $item['ldesc'] = "Hacemos trabajo para freelancers y que puedan mostrar su portafolio de productos en internet con"
                . " herramientas especializadas para aumentar las visitas y aumentar la velocidad del sitio web";
        $item['link'] = "http://www.gabrieldaher.me/";
        break;
    case 'hc':
        $item['codename'] = 'hc';
        $item['title'] = "Sitio web Homecubic";
        $item['cliente'] = 'HomeCubic';
        $item['completed'] = 'Noviembre, 2017';
        $item['type'] = 'Portal de Ventas';
        $item['length'] = '25 d&iacute;as';
        $item['status'] = 'Producci&oacute;n';
        $item['skills'] = 'PHP, JavaScript, HTML5';
        $item['price'] = '$ 1.200,00';
        $item['autor'] = 'Frank Montagne, Senior Dev';
        $item['sdesc'] = "Sitio web que incluye plataforma CRM para encuestas y sistema de Ebooks";
        $item['ldesc'] = "Esta plataforma también incluye un blog personalizado la que se puede enlazar con la plataforma de Ebooks y "
                . "administrar a través de encuestas la data e los visitantes y contadores para poder auditar los generadores de contenidos.";
        $item['link'] = "http://www.homecubic.com/";
        break;
    case 'bite':
        $item['codename'] = 'bite';
        $item['title'] = "Plataforma tecnologica Integrada BITE";
        $item['cliente'] = 'Bite Corporation';
        $item['completed'] = 'Abril, 2018';
        $item['type'] = 'Plataforma en Nube';
        $item['length'] = '5 d&iacute;as';
        $item['status'] = 'Producci&oacute;n';
        $item['skills'] = 'JavaScript, HTML5, ISS, Composer BI';
        $item['price'] = '$ 2.400,00';
        $item['autor'] = 'Frank Montagne, Senior Dev';
        $item['sdesc'] = "Integramos todos los aspectos de la empresa ";
        $item['ldesc'] = "desde el portal de ventas online hasta el sistema de facturación todo de manera automática y "
                . "enlazada con las base de datos master del ERP, para también vender por Mercadolibre y otros MarketPlaces";
        $item['link'] = "http://www.bitecorp.com/";
        break;
    case 'ivy':
        $item['codename'] = 'ivy';
        $item['title'] = "Proyecto Ivy";
        $item['cliente'] = 'Bite Corp';
        $item['completed'] = 'Ene, 2017';
        $item['type'] = 'Sistema Administrativo';
        $item['length'] = '25 d&iacute;as';
        $item['status'] = 'Producci&oacute;n';
        $item['skills'] = 'PHP, MYSQL, HTML5, WebFramework';
        $item['price'] = '$ 1.500,00';
        $item['autor'] = 'Frank Montagne, Senior Dev';
        $item['sdesc'] = "Sistema administrativo y contable";
        $item['ldesc'] = "Funciona para llevar control de inventario, facturas, proveedores y clientes, cuenta con una plataforma integrada de control de "
                . "tareas y pendientes, para delegar operaciones al resto de los miembros del equipo";
        $item['link'] = "http://erp.burtonservers.com/";
        break;
    case 'myrcons':
        $item['codename'] = 'myrcons';
        $item['title'] = "Sitio Web Myrcons";
        $item['cliente'] = 'Myrcons Constructores';
        $item['completed'] = 'Enero, 2017';
        $item['type'] = 'Sitio Web';
        $item['length'] = '5 d&iacute;as';
        $item['status'] = 'Producci&oacute;n';
        $item['skills'] = 'PHP, MYSQL, HTML5';
        $item['price'] = '$ 400,00';
        $item['autor'] = 'Frank Montagne, Senior Dev';
        $item['sdesc'] = "Sitio web Inteligente para impulsar las ventas Online";
        $item['ldesc'] = "Plataforma Web optimizada para mostrar la información de la constructora junto con todos sus inmuebles del portafolio, sección de "
                . "contacto personalizada, cuenta con plataforma de alojamiento ILIMITADA para cuentas de email, archivos, bases de datos y mucho mas.";
        $item['link'] = "http://www.myrcons.net/";
        break;
    case 'tdt':
        $item['codename'] = 'tdt';
        $item['title'] = "Tenemosdetodo";
        $item['cliente'] = 'Tenemosdetodo Tienda online';
        $item['completed'] = 'Julio, 2017';
        $item['type'] = 'Tienda online';
        $item['length'] = '25 d&iacute;as';
        $item['status'] = 'Producci&oacute;n';
        $item['skills'] = 'PHP, Prestashop, Smarty, Python';
        $item['price'] = '$ 800,00';
        $item['autor'] = 'Frank Montagne, Senior Dev';
        $item['sdesc'] = "Tienda online personalizada incluye sistema de MarketPlace para que los usuarios puedan vender en ella.";
        $item['ldesc'] = "Esta tienda esta completamente optimizada para las ventas online, tiene un sistema de seguimiento de clientes optimizado para no "
                . "dejar escapar ninguna oferta, cobro con tarjeta de crédito, paypal, PayPhone, integrado con Google Maps, Sistema de transportistas,"
                . " y muchas opciones programadas a medida de las solicitudes del cliente.";
        $item['link'] = "http://www.tenemosdetodo.com.ec/";
        break;
    case 'jassa':
        $item['codename'] = 'jassa';
        $item['title'] = "Jassatelecom Sitio Web";
        $item['cliente'] = 'Jassa Telecom';
        $item['completed'] = 'Oct, 2017';
        $item['type'] = 'Sitio Web';
        $item['length'] = '5 d&iacute;as';
        $item['status'] = 'Producci&oacute;n';
        $item['skills'] = 'CSS3, Bootstrap, JavaScript, HTML5';
        $item['price'] = '$ 300,00';
        $item['autor'] = 'Frank Montagne, Senior Dev';
        $item['sdesc'] = "Sitio web optimizado para SEO y sistema de portafolio";
        $item['ldesc'] = "Cuenta con un panel administrativo para que el cliente pueda administrar el sitio web al 100% desde los textos hasta las imágenes,"
                . " incluye sistema de Blog y Portafolio de servicios, con histórico de proyectos y desarrollo Responsive para todo tipo de pantallas.";
        $item['link'] = "http://www.jassatelecom.com/";
        break;
    case 'cabis':
        $item['codename'] = 'cabis';
        $item['title'] = "Proyecto CABIS";
        $item['cliente'] = 'Distribuidores Claro / Movistar';
        $item['completed'] = 'Dic, 2016';
        $item['type'] = 'Sistema CRM';
        $item['length'] = '20 d&iacute;as';
        $item['status'] = 'Producci&oacute;n';
        $item['skills'] = 'Bootstrap, JavaScript, HTML5';
        $item['price'] = '$ 1.800,00';
        $item['autor'] = 'Frank Montagne, Senior Dev';
        $item['sdesc'] = "Sistema de gestión y control de ventas, Manejo de CRM";
        $item['ldesc'] = "Cuenta con capacidad de gestionar miles de ventas diarias y ofrece reportes de inteligencia e negocios para influenciar el "
                . "CRM de nuestros clientes, Reportes personalizados, interfaz Responsiva.";
        $item['link'] = "http://cabis.burtonservers.com/";
        break;
    case 'eblooms':
        $item['codename'] = 'eblooms';
        $item['title'] = "Eblooms Tienda Online";
        $item['cliente'] = 'Ebloom Dirct';
        $item['completed'] = 'Julio, 2017';
        $item['type'] = 'Tienda Online';
        $item['length'] = '15 d&iacute;as';
        $item['status'] = 'Producci&oacute;n';
        $item['skills'] = 'PHP, MYSQL, Shopify, Paypal API';
        $item['price'] = '$ 700,00';
        $item['autor'] = 'Frank Montagne, Senior Dev';
        $item['sdesc'] = "Tienda online para la venta de productos florícolas y regalos";
        $item['ldesc'] = "Sitio web para controlar las ventas online de la empresa sincronizado con la plataforma de COSTCO para gestionar los pedidos"
                . "que se realizan a través del canal de COSTCO y se cargan directamente en las ventas de la tienda y del sistema de tracking";
        $item['link'] = "http://www.ebloomsdirect.com/";
        break;
    case 'univ':
        $item['codename'] = 'univ';
        $item['title'] = "Plataforma Gaming Universal";
        $item['cliente'] = 'Burton Technology';
        $item['completed'] = 'Mar, 2017';
        $item['type'] = 'Plataforma de Jegos';
        $item['length'] = '20 d&iacute;as';
        $item['status'] = 'Demo';
        $item['skills'] = 'PHP, MYSQL, JavaScript, HTML5';
        $item['price'] = '$ 700,00';
        $item['autor'] = 'Frank Montagne, Senior Dev';
        $item['sdesc'] = "Sitio web sincronizado con servidores de juegos";
        $item['ldesc'] = "A través del portal web puedes registrarte para obtener cuentas de juego sistema de Coins interno para intercambiarlo por premios y "
                . "juegos en línea, sistema de rankings y votaciones para eventos de gamificacion";
        $item['link'] = "http://www.universalgaminglatino.com/";
        break;
    case 'naty':
        $item['codename'] = 'naty';
        $item['title'] = "Proyecto Naty";
        $item['cliente'] = 'Dirulo Pizzeria';
        $item['completed'] = 'Julio, 2017';
        $item['type'] = 'Desarrollo Web';
        $item['length'] = '20 d&iacute;as';
        $item['status'] = 'Producci&oacute;n';
        $item['skills'] = 'PHP, MSYQL, JavaScript, HTML5';
        $item['price'] = '$ 3.500,00';
        $item['autor'] = 'Frank Montagne, Senior Dev';
        $item['sdesc'] = "Sistema de Gestión de restaurantes";
        $item['ldesc'] = "La plataforma te permite administrar varios restaurantes desde el inventario hasta los pedidos de las mesas, incluye soporte"
                . " para pedidos a domicilio y atender las mesas directamente desde la interfaz, despliegue online para manejo de despachadores y administración"
                . " de caja";
        $item['link'] = "http://naty.burtonservers.com/";
        break;
    default:
        header("Location: index.php");

}

?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Burton Technology | <?php echo $item['title']; ?></title>
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
    </head>
    <body>

        <!-- Navigation Menu
        ================================================== -->
        <header>
            <div id="st-logo">
                <a href="index.php">
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
                        <a class="page-scroll hvr-underline-from-center" href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="index.php#our-work">Portafolio</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="index.php#about">Trayectoria</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="index.php#services">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="index.php#skills">Proyecci&oacute;n</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="index.php#contact">Contacto</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- /#st-nav -->

        <!-- Portfolio Item
        ================================================== -->
        <section class="portfolio-item ">
            <img src="assets/img/protfolio/<?php echo $item['codename']; ?>.png" alt="Burton Technology" class="ribbonlogo fadeinbot fadeinbotimg" style="position: absolute; width: 50vw; left: 25%;">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="portfolio-headline">
                            <div id="particles-js"></div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="typed-headline">
                                            <span class="skilltechtypetext">
                                                <span class="typed-cursor">|</span>
                                            </span>
                                            <p>
                                                <?php echo $item['title']; ?> - <?php echo $item['sdesc']; ?>
                                            </p>
                                        </div>
                                        <!-- /.typed-headline -->

                                        <a href="#" class="btn btn-default pull-right hvr-sweep-to-right primary-2-back" id="project-info">Ver info.</a>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>

        <section class="portfolio-item-details" id="portfolio-details">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="col-lg-6 col-md-12">

                            <div class="portfolio-text">
                                <h3>Acerca del <span> Proyecto</span></h3>
                                <p>
                                    <?php echo $item['ldesc']; ?>
                                </p>
                            </div>
                            <!-- /.service-text -->

                            <div class="portfolio-useful-links">
                                <h3>Ir <span> al Proyecto</span></h3>
                                <ul class="list-inline portfolio-icons">
                                    <li>
                                        <a href="<?php echo $item['link']; ?>" target="_blank" class="primary-back-hover bounce_aniX">
                                            <i class="primary material-icons">laptop</i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.list-inline -->
                            </div>


                        </div>

                        <div class="col-lg-6 col-md-12">
                            <ul class="portfolio-info">
                                <li>
                                    <p class="first">Nombre del Proyecto</p>
                                    <p class="second"><?php echo $item['title']; ?></p>
                                </li>
                                <li>
                                    <p class="first">Autor</p>
                                    <p class="second"><?php echo $item['autor']; ?></p>
                                </li>
                                <li>
                                    <p class="first">Cliente</p>
                                    <p class="second"><?php echo $item['cliente']; ?></p>
                                </li>
                                <li>
                                    <p class="first">Precio del Proyecto</p>
                                    <p class="second"><?php echo $item['price']; ?></p>
                                </li>
                                <li>
                                    <p class="first">Fecha de Entrega</p>
                                    <p class="second"><?php echo $item['completed']; ?></p>
                                </li>
                                <li>
                                    <p class="first">Tipo de Proyecto</p>
                                    <p class="second"><?php echo $item['type']; ?></p>
                                </li>
                                <li>
                                    <p class="first">Entregado En</p>
                                    <p class="second"><?php echo $item['length']; ?></p>
                                </li>
                                <li>
                                    <p class="first">Tools:</p>
                                    <p class="second"><?php echo $item['skills']; ?></p>
                                </li>
                                <li>
                                    <p class="first">Estado:</p>
                                    <p class="second"><?php echo $item['status']; ?></p>
                                </li>
                            </ul>
                            <!-- /.list-inline -->
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="portfolio-form">
                                <h3>Quiero algo <span> como esto</span></h3>
                                <form method="post" action="thanks.php" id="contactForm">
                                    <div class="form-group wow fadeIn animated">
                                        <label for="name">Nombre: </label>
                                        <input type="text" id="contact_name" name="name" class="form-control">
                                    </div>

                                    <div class="form-group wow fadeIn animated">
                                        <label for="phone">Teléfono: </label>
                                        <input type="text" id="contact_phone" name="phone" class="form-control" >
                                    </div>
                                    <!-- /.form-group -->

                                    <div class="form-group wow fadeIn animated">
                                        <label for="message">Mensaje: </label>
                                        <textarea id="contact_message" name="message" class="form-control" rows="4"></textarea>
                                    </div>
                                    <!-- /.form-group -->
                                    <button class="btn btn-default wow fadeIn primary-back-hover primary-hover-border animated" type="button" id="submitcontact">Enviar</button>
                                </form>
                            </div>
                            <!-- /.portfolio-form -->
                        </div>

                    </div>
                </div>

            </div>

        </section>

         <!-- Footer
        ================================================== -->
        <footer>
            <p>Copyright © 2018 -<a href="http://www.burtonservers.com/" class="primary-hover"> Burton Technology</a></p>
        </footer>
        
        <!-- Scripts
        ================================================== -->
        <!-- JavaScript Libraries -->
        <script src="assets/js/libs.min.js"></script>

        <!-- Custom Particle Theme JavaScript -->
        <script src="assets/js/portfolio-item.js"></script>
        <script src="assets/js/skilltech-style-switcher.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>