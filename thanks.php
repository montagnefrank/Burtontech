<?php 
if ($_POST['name'] == '' || $_POST['phone'] == '' || $_POST['message'] == ''){
        header("Location: index.php#contact");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

        
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
        <!-- /#st-nav -->

        <!-- Service Item
        ================================================== -->
        <section class="service-item">
            <div class="service-item-layer"></div>

            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="typed-headline">
                            <span class="skilltechtypetext">
                                <span class="typed-cursor">|</span>
                            </span>
                        </div>
                        <!-- /.typed-headline -->

                        <div class="service-headline-text">
                            <p>Estimado <?php echo $_POST['name']; ?>, Nuestro equipo de especialistas est&aacute; atendiendo tu solicitud en este momento,<br />
                                y muy pronto nos pondremos en contacto contigo</p>
                            <!-- /.service-item-read-more -->
                        </div>
                        <!-- /.service-headline-text -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.service-item -->

       
         <!-- Footer
        ================================================== -->
        <footer>
            <p>Copyright © 2018 -<a href="http://www.burtonservers.com/" class="primary-hover"> Burton Technology</a></p>
        </footer>

       
        <!-- Scritps
        ================================================== -->
        <!-- JavaScript Libraries -->
        <script src="assets/js/libs.min.js"></script>

        <!-- Custom Particle Theme JavaScript -->
        <script src="assets/js/service-item.js"></script>
        <script src="assets/js/skilltech-style-switcher.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>