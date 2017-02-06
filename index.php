<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Conoce cómo te podemos ayudar al control y al éxito de tus objetivos empresariales y personales, gracias a nuestra tecnología computacional." />
        <meta name="author" content="Insperion México" >
        <title>Insperion México</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="css/owl.transitions.css"/>
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <!--<link rel="stylesheet" type="text/css" href="css/style.css"/>-->
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        <link href="css/responsive.css" rel="stylesheet">


        <link rel="stylesheet" type="text/css" href="css/simple-line-icons.css"/>
        <link rel="stylesheet" type="text/css" href="css/owl.theme.css"/>

        <link rel="stylesheet" type="text/css" href="css/hover.css">

        <link rel="shortcut icon" href="images/ico/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="images/ico/favicon.png" type="image/png">

        <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,100,200,300,500,600,800,900' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps:400,700' rel='stylesheet' type='text/css'>

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png"> 
    </head>

    <body id="home" class="homepage" onload="$('#myPage').css('display', 'block'); $('#loading').css('display', 'none');">
        <div id="loading" class="loading">
            <center>
                <img src="images/ico/apple-touch-icon-144-precomposed.png" style="display: block; padding: 0px;">
                <img src="images/loading.gif" style="display: block; padding: 0px;">
            </center>                
        </div>    

        <header id="top-header" class="navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <div class="navbar-brand">
                        <a class="smooth-scroll" data-section="#home" href="#home" >
                            <img class="more_right" src="images/svg/logo2_insperion.svg"/>
                        </a>
                    </div>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul id="nav" class="nav navbar-nav">
                            <li class="scroll"><a href="#home" data-section="#home">Inicio</a></li>
                            <li class="scroll"><a href="#philosophy" data-section="#philosophy">Filosofía</a></li>
                            <li class="scroll"><a href="#products_services" data-section="#products_services">Productos y Servicios</a></li>
                            <li class="scroll"><a href="#contact-area" data-section="#contact-area">Contacto</a></li>   
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
        <!--
        <section id="main-slider">
            <div class="owl-carousel">
                <div class="item" style="background-image: url(images/slider/welcome.svg);">
                    <div class="slider-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <img id="central-logo" class="img-responsive image_centered" src="images/slider/insperion.svg"/>
                                    <div class="carousel-content text-center box-slider">                                    
                                        <label>Bienvenido</label>
                                        <p class="text-center white-strong">Te damos la bienvenida a nuestro sitio web</p>
                                        <a class="btn btn-primary btn-lg smooth-scroll" href="#philosophy" data-section="#philosophy">Conócenos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url(images/slider/PP1.svg);">
                    <div class="slider-inner">
                        <div class="container">
                            <div class="row">
                                <div class="pp col-md-12">
                                    <div class="carousel-content text-center box-slider margin-box-slider">
                                        <label>Manten el contacto con tus clientes</label>
                                        <p class="text-center white-strong">Aplicaciones móviles y sitios web para impulsar tus actividades</p>
                                        <a class="btn btn-primary btn-lg" href="#pdm1">Descubre cómo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url(images/slider/PP2.svg);">
                    <div class="slider-inner">
                        <div class="container">
                            <div class="row">
                                <div class="pp col-md-12">
                                    <div class="carousel-content text-center box-slider margin-box-slider">
                                        <label>El Internet de las Cosas ya está aquí</label>
                                        <p class="text-center white-strong">Optimice sus ventas facilitando la compra a sus clientes</p>
                                        <a class="btn btn-primary btn-lg" href="#pdm2">Descubre cómo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url(images/slider/PP3.svg);">
                    <div class="slider-inner">
                        <div class="container">
                            <div class="row">
                                <div class="pp col-md-12">
                                    <div class="carousel-content text-center box-slider margin-box-slider">
                                        <label>¿No sabes que alternativa seleccionar?</label>
                                        <p class="text-center white-strong">Insperion te ofrece Consultoría Profesional</p>
                                        <a class="btn btn-primary btn-lg" href="#pdm3">Más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url(images/slider/b1.jpg);">
                    <div class="slider-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="carousel-content text-center box-slider margin-box-slider">
                                        <label>Impulsando tu mundo</label>
                                        <p class="text-center white-strong">Descubre cuáles son nuestros productos y servicios</p>
                                        <a class="btn btn-primary btn-lg" href="#products_services">Más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        -->
        <section id="main-slider">
            <div class="item" style="background-image: url(images/slider/welcome.png);">
                <div>
                    <img id="central-logo" class="img-responsive image_centered" src="images/slider/insperion.svg"/>
                    <div class="text-center">
                        <p class="text-center">Te damos la bienvenida a nuestro sitio web</p>
                        <a class="btn btn-primary btn-lg smooth-scroll" href="#philosophy" data-section="#philosophy">Conócenos</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="products_services" >
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown" data-wow-duration="500ms">Productos y Servicios</h2>
                    <p class="text-center wow fadeInDown desp_service" data-wow-duration="750ms">Para saber más acerca de un servicio, simplemente dé clic en uno de los iconos</p>
                </div>
                <div class="row">
                    <div class="features">
                        <div class="col-xs-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="0ms">
                            <div class="features-item">
                                <center><img class="img-responsive hvr-push" src="images/svg/DesarrolloDeSoftware.svg" onclick="set_ShowModalDesarrollo()"/></center>
                                <center><h3 class="features-title font-alt">Desarrollo de Software</h3><center>
                                <p class="text-center desp_service">Sistemas y Aplicaciones para todo propósito, nuestra Ingenieria de Software a tu disposición.</p>
                            </div>
                        </div>
                        <div class="col-xs-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
                            <div class="features-item">
                                <center><img class="img-responsive hvr-push" src="images/svg/PreguntasCotizacion.svg" onclick="set_ShowModalConsultoria()"/></center>
                                <center><h3 class="features-title font-alt">Consultoría en Tecnologías de la Información y Comunicaciones</h3></center>
                                <p class="text-center desp_service">Cotización de Proyectos, preguntas y dudas acerca de Tecnologia Computacional y en Comunicaciones. No se preocupe, tenemos las respuestas.</p>
                            </div>
                        </div>
                        <div class="col-xs-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                            <div class="features-item">
                                <center><img class="img-responsive hvr-push" src="images/svg/Ventas.svg" onclick="set_ShowModalVentas()"/></center>
                                <center><h3 class="features-title font-alt">Venta de Equipos Computacionales y Accesorios</h3></center>
                                <p class="text-center desp_service">Computadoras de Escritorio, Switches, Impresoras, Servidores ... La tecnología para impulsar tus actividades.</p>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->    
            </div><!--/.container-->
        </section><!--/#services-->
        <section id="philosophy">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">Bienvenido a Insperion</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 wow fadeInLeft">
                        <img id="filosofia_image" class="img-responsive image_centered" src="images/svg/filosofia.svg" />
                    </div>
                    <div class="col-sm-6 wow fadeInRight">
                        <p>
                            Somos una empresa cuyo giro es el ofrecimiento de servicios de Desarrollo de Software y productos de las Tecnologías de la Informacion y Comunicaciones.<br/>
                        </p>
                        <p>
                            &nbsp;&nbsp;&nbsp;El software que nosotros creamos en Insperion cumple con los requerimientos que usted nos confiere, lo hacemos <b>Arte</b>, tanto en apariencia como en funcionalidad.<br/>
                        </p>
                        <p>
                            &nbsp;&nbsp;&nbsp;Los productos y servicios de consultoría son <b>precisos para tu necesidad</b>, para que no tenga que preocuparse por nada más que disfrutar y aprovecharlo en tu empresa, en tus negocios, en tu persona.
                        </p>
                        <div class="center_all">
                            <a class="btn btn-primary" href="#ModalMVV" onclick="set_ShowModalMVV()">Descubre más</a>
                        </div>                    
                    </div>
                </div>
            </div>
        </section><!--/#about-->
        <section id="pdm">
        <div class="container">
            <div class="section-header wow fadeInUp">
                <center>
                    <h1>Impulsa tu Mundo</h1>
                </center>
            </div>
            <div id="pdm1" class="row">
                <div class="col-sm-6 wow fadeInRight">
                    <img class="img-responsive pdm-img image_centered" src="images/pdm/l1.svg" alt="">
                </div>
                <div class="col-sm-6 wow fadeInLeft">
                    <h3>Manten el contacto con tus clientes</h3>
                    <br/>
                    <ul>
                        <li><a href="#f11" data-toggle="collapse" aria-expanded="false" aria-controls="#f11">Preséntate con tu sitio web</a></li>
                        <div id="f11" class="collapse">
                            <div class="card card-block desc-mini">
                                 Haz que tu producto o servicio se conozca, eficaz y efectivamente, a través de tu sitio o página web hacia los hogares, negocios, instituciones y empresas.
                            </div><br/>
                        </div>
                        <li><a href="#f12" data-toggle="collapse" aria-expanded="false" aria-controls="#f12">Tu App a la disposición de las personas y negocios</a></li>
                        <div id="f12" class="collapse">
                            <div class="card card-block desc-mini">
                                Ofrece tu aplicación móvil en una de las plataformas más populares: Android&trade;. Presenta promociones y ofertas para aquello que soliciten tu producto y/o servicio mediante tu aplicación.
                            </div><br/>
                        </div>
                    </ul>
                </div>
            </div>
            <div id="pdm2" class="row">
                <div class="col-sm-6 wow fadeInRight">
                    <img class="img-responsive pdm-img image_centered" src="images/pdm/l2.svg" alt="">
                </div>
                <div class="col-sm-6 wow fadeInLeft">
                    <h3>Optimice sus ventas facilitando la compra a sus clientes</h3>
                    <br/>
                    <ul>
                        <li><a href="#f21" data-toggle="collapse" aria-expanded="false" aria-controls="#f21">¿Vendes por Internet?</a></li>
                        <div id="f21" class="collapse">
                            <div class="card card-block desc-mini">
                                Ofrece a tus clientes la expansión de tu servicio y/o producto en la web, más formas de pago como PayPal&trade; y Tarjetas de Crédito/Débito, comodidad y confianza, sin importar el lugar en donde se encuentren.
                            </div><br/>
                        </div>
                        <li><a href="#f22" data-toggle="collapse" aria-expanded="false" aria-controls="#f22">Optimiza tus procesos internos de tu negocio</a></li>
                        <div id="f22" class="collapse">
                            <div class="card card-block desc-mini">
                                Te ofrecemos Puntos de Venta a tu medida, software para controlar y supervisar las etapas de tus productos, tu proceso de prospección de clientes y mucho más.
                            </div><br/>
                        </div>
                    </ul>
                </div>
            </div>
            <div id="pdm3" class="row">
                <div class="col-sm-6 wow fadeInRight">
                    <img class="img-responsive pdm-img image_centered" src="images/pdm/l3.svg" alt="">
                </div>
                <div class="col-sm-6 wow fadeInLeft">
                    <h3>¿No sabes que alternativa seleccionar?</h3>
                    <br/>
                    <ul>
                        <li><a href="#f31" data-toggle="collapse" aria-expanded="false" aria-controls="#f31">Cúal tecnología usar</a></li>
                        <div class="collapse" id="f31">
                            <div class="card card-block desc-mini">
                                Le podemos ayudar en la decisión y creación de una plataforma web, móvil y/o híbrida según la naturaleza de tus actividades. 
                            </div><br/>
                        </div>
                        <li><a href="#f32" data-toggle="collapse" aria-expanded="false" aria-controls="#f32">Escalabilidad en tu negocio</a></li>
                        <div class="collapse" id="f32">
                            <div class="card card-block desc-mini">
                                Reemplazo y Actualización de software y hardware, para tus planes de crecimiento y/o expansión del negocio.
                            </div><br/>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </section>
        
        <div class="testimonials" id="testimonials" style="background: url(images/datacenter.jpg) 100%;">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                        <div id="owl-demo" class="owl-carousel owl-theme test wow fadeInUp">
                            <div class="item">
                                <p>
                                    <center>
                                        <sup><i class="fa fa-quote-left"></i></sup>
                                        <strong>La experiencia de trato de persona a persona con Insperion fue muy buena</strong>
                                        <sup><i class="fa fa-quote-right"></i></sup>
                                    </center>
                                </p>
                                <div class="test-img">
                                    <center>
                                        <img src="images/testimonial/playandcheers.png"/>
                                    </center>  
                                    <p>
                                        <strong>Emmanuel Alejandro Becerra Barragán</strong>
                                        <br>
                                        Gerente General de Play&amp;Cheers.
                                    </p>                                                                  
                                </div>
                            </div>
                            <div class="item">
                                <p>
                                    <center>
                                        <sup><i class="fa fa-quote-left"></i></sup>
                                        <strong>Los servicios son bastante buenos, del cual Insperion va a tener mucho éxito</strong>
                                        <sup><i class="fa fa-quote-right"></i></sup>
                                    </center>
                                </p>
                                <div class="test-img">
                                    <center>
                                        <img class="img-responsive" src="images/testimonial/MUSEOLEON.png"/>
                                    </center>
                                    <p>
                                        <strong>José Isaac Ortega Ramírez</strong>
                                        <br>
                                        Director Administrativo del Museo de la Ciudad de León.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="contact-area">
            <div id="contact-message" class="container">
                <div class="row">
                    <div class="section-header top_section">
                        <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible;">Contacto</h2>
                        <p id="ans-email-sent" class="text-center wow fadeInDown animated" style="visibility: visible;">¡Haz tus Cotizaciones, Dudas y Comentarios!</p>
                    </div>
                    <form id="main-contact-form" name="contact-form" method="post" action="#">
                        <div class="col-lg-6 animated animate-from-left" style="opacity: 1; left: 0px;">

                            <div id="sent-name" class="form-group">
                                <label for="name"><b>Tu nombre</b></label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Nombre completo" required>
                            </div>
                            <div id="sent-email" class="form-group">
                                <label for="email"><b>E-mail</b></label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enviaremos la respuesta aquí" required>
                            </div>
                        </div>
                        <div class="col-lg-6 animated animate-from-right" style="opacity: 1; right: 0px;">
                            <div id="sent-m" class="form-group">
                                <label for="message"><b>Tu Mensaje</b></label>
                                <textarea name="message" id="textarea-message" class="form-control" rows="8" placeholder="¿En que te puede ayudar Insperion?" required></textarea>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <br>
                        <br>
                        <div class="text-center">
                            <input id="sent-btn" type="submit" class="btn btn-primary btn-lg btn-send-msg" onclick="send_mesagge()" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </section><!--/#bottom-->

        <footer class="back_b">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <b><span class="copyright">La Ingeniería de tu Mundo. 2016</span></b>
                    </div>
                    <div class="col-md-4">
						<b class="designed_by">Síguenos en</b>
                        <div class="social-tray">
							<a href="https://www.facebook.com/InsperionInYourWorld/"><img class="social-ic hvr-push" src="images/svg/face-w.svg"/></a>
							<a href="https://twitter.com/InsperionInYour"><img class="social-ic hvr-push" src="images/svg/twitter-w.svg"/></a>
							<a href="https://plus.google.com/u/0/115734567625416628442"><img class="social-ic hvr-push" src="images/svg/g-w.svg"/></a>
						</div>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li><b class="designed_by">Diseñado por</b></li>
                        </ul>
                        <ul class="list-inline quicklinks">
                            <li><img src="images/svg/logo_insperion2.svg"/></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- MODALS -->

        <div id="ModalDesarrollo" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Desarrollo de Software</h4>
                    </div>
                    <div class="modal-body">
                        Tenemos los siguientes desarrollos pensados para ti:<br/><br/>
                        <ul>
                            <li class="bold-li"><a href="#desc1" data-toggle="collapse" aria-expanded="false" aria-controls="#desc1">Soluciones Integrales</a></li>
                            <div class="collapse" id="desc1">
                                <div class="card card-block desc-mini">
                                    Sistemas que hacen uso de varias tecnologías de la información a la vez, creando soluciones a cualquier tipo de escala.
                                </div><br/>
                            </div>
                            <li class="bold-li"><a href="#desc2" data-toggle="collapse" aria-expanded="false" aria-controls="#desc2">Desarrollo de Aplicaciones Móviles Android</a></li>
                            <div class="collapse" id="desc2">
                                <div class="card card-block desc-mini">
                                    El sistema operativo Android&trade; es el más ampliamente usado en los smartphones y tablets; las aplicaciones en Android&trade; son programas que permiten la ejecución de una o varias actividades, como los juegos.
                                </div><br/>
                            </div>
                            <li class="bold-li"><a href="#desc3" data-toggle="collapse" aria-expanded="false" aria-controls="#desc3">Desarrollo de Software a tu medida</a></li>
                            <div class="collapse" id="desc3">
                                <div class="card card-block desc-mini">
                                    Sistemas que se ejecutan en una computadora (PC, Laptop, etc) para resolver o atender a una necesidad.
                                </div><br/>
                            </div>
                            <li class="bold-li"><a href="#desc4" data-toggle="collapse" aria-expanded="false" aria-controls="#desc4">Desarrollo de Páginas, Sitios y Aplicaciones Web</a></li>
                            <div class="collapse" id="desc4">
                                <div class="card card-block desc-mini">
                                    Se ejecutan con un navegador de Internet, son desarrollos de alta disponibilidad, integridad y escalabilidad, haciendo uso del Internet de las Cosas.
                                </div><br/>
                            </div>
                        </ul>
                    </div>
                    <div class="modal-footer" style="background: url(images/svg/modalfooter.svg) 100%;">
                        <a id="closemodaldesarrollo" href="#contact-area" class="btn btn-default" onclick="set_HiddenModalDesarrollo()">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="ModalConsultoria" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Consultoría</h4>
                    </div>
                    <div class="modal-body">
                        Nuestros servicios son:<br/><br/>
                        <ul>
                            <li class="bold-li"><a href="#descc1" data-toggle="collapse" aria-expanded="false" aria-controls="#descc1">Cotización de Proyectos</a></li>
                            <div class="collapse" id="descc1">
                                <div class="card card-block desc-mini">
                                    <b>SIN COMPROMISO</b>, permítenos hacer una cotización que representen para ti y nosotros el principio para una solución a tus necesidades. 
                                </div><br/>
                            </div>
                            <li class="bold-li"><a href="#descc2" data-toggle="collapse" aria-expanded="false" aria-controls="#descc2">Para Empresas/Instituciones</a></li>
                            <div class="collapse" id="descc2">
                                <div class="card card-block desc-mini">
                                    Puedes preguntar cualquier cosa acerca de nuestros servicios, dudas acerca de un proyecto que tienes pensado para tu empresa y/o problema que sea necesario atender. No te preocupes, te ayudaremos en este proceso.
                                </div><br/>
                            </div>
                            <li class="bold-li"><a href="#descc3" data-toggle="collapse" aria-expanded="false" aria-controls="#descc3">Para personas como tú</a></li>
                            <div class="collapse" id="descc3">
                                <div class="card card-block desc-mini">
                                    Pregunta tus dudas acerca de lo computacional y de la comunicaciones, ¡vamos!.
                                </div><br/>
                            </div>
                        </ul>
                    </div>
                    <div class="modal-footer" style="background: url(images/svg/modalfooter.svg) 100%;">
                        <a id="closemodalconsultoria" href="#contact-area" class="btn btn-default" onclick="set_HiddenModalConsultoria()">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="ModalVentas" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ventas</h4>
                    </div>
                    <div class="modal-body">
                        Lo que ofrecemos para ti son:<br/><br/>
                        <ul>
                            <li class="bold-li"><a href="#descv1" data-toggle="collapse" aria-expanded="false" aria-controls="#descv1">Equipos Computacionales y Accesorios</a></li>
                            <div class="collapse" id="descv1">
                                <div class="card card-block desc-mini">
                                    <ul>
                                        <li class="bold-li">Equipo Computacional y Accesorios:</li>
                                        <ul>
                                            <li>Computadoras de Escritorio, Laptops, Servidores</li>
                                            <li>Impresoras, Lector Externo DVD/CD</li>
                                            <li>Software Antivirus</li>
                                            <li>Auriculares, Memorias USB, SD y Micro SD</li>
                                        </ul>
                                        <li class="bold-li">Equipo de Redes y Telecomunicaciones:</li>
                                        <ul>
                                            <li>Routers y Firewalls</li>
                                            <li>Switches, Comutadores Telefónicos</li>
                                            <li>Smartphones y Tablets</li>
                                        </ul>
                                    </ul>
                                    <strong>Y mucho más ...</strong>
                                </div><br/>
                            </div>
                            <li class="bold-li"><a href="#descv2" data-toggle="collapse" aria-expanded="false" aria-controls="#descv2">Software de Facturación</a></li>
                            <div class="collapse" id="descv2">
                                <div class="card card-block desc-mini">
                                    En México las empresas están avanzado con la Contabilidad Electronica,  ofrecemos los sistemas de contabilidad de marcas como Contaq &#174; y Aspel &#174;.
                                </div><br/>
                            </div>
                        </ul>
                    </div>
                    <div class="modal-footer" style="background: url(images/svg/modalfooter.svg) 100%;">
                        <a id="closemodalventas" href="#contact-area" class="btn btn-default" onclick="set_HiddenModalVentas()">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="ModalMVV" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Descubre más</h4>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li class="bold-li"><a href="#descm1" data-toggle="collapse" aria-expanded="false" aria-controls="#descm1">MISIÓN</a></li>
                            <div class="collapse" id="descm1">
                                <div class="card card-block desc-mini">
                                    Crear y aplicar soluciones integrales y consultoría dirigidas a satisfacer las necesidades de la sociedad, apoyándonos en conocimientos y habilidades en Desarrollo de Software y productos de las Tecnologías de la Información y Comunicaciones.
                                </div><br/>
                            </div>
                            <li class="bold-li"><a href="#descm2" data-toggle="collapse" aria-expanded="false" aria-controls="#descm2">VISIÓN</a></li>
                            <div class="collapse" id="descm2">
                                <div class="card card-block desc-mini">
                                    Ser una empresa líder en las Tecnologías de la Información y Comunicaciones a nivel nacional, creando soluciones a los  problemas de la sociedad mexicana, a través de nuestros proyectos y productos adaptadas a cada organización, manteniendo clientes satisfechos.
                                </div><br/>
                            </div>
                            <li class="bold-li"><a href="#descm4" data-toggle="collapse" aria-expanded="false" aria-controls="#descm4">VALORES</a></li>
                            <div class="collapse" id="descm4">
                                <div class="card card-block desc-mini">
                                    <ul>
                                        <li class="bold-li"><a href="#v1" data-toggle="collapse" aria-expanded="false" aria-controls="#v1">Compromiso</a></li>
                                        <div id="v1" class="collapse">
                                            En Insperion actuamos de manera honorable en cualquier situación que se presente, siendo congruentes entre lo que decimos y hacemos, creando una promesa entre usted y nosotros.<br/>
                                        </div>
                                        <li class="bold-li"><a href="#v2" data-toggle="collapse" aria-expanded="false" aria-controls="#v2">Integridad</a></li>
                                        <div id="v2" class="collapse">
                                            Nos hacemos responsables en cada actividad que nosotros ejerzamos. Insperion procura estar consciente de que los cambios tienen un impacto a niveles como social y de conocimiento.<br/>
                                        </div>
                                        <li class="bold-li"><a href="#v3" data-toggle="collapse" aria-expanded="false" aria-controls="#v3">Perseverancia</a></li>
                                        <div id="v3" class="collapse">
                                            Mejoramos cada día en cada una de nuestra actividades para alcanzar un nuevo nivel de destreza, habilidad y experiencia, desde la fase personal hasta la fase de Organización.<br/>
                                        </div>
                                        <li class="bold-li"><a href="#v4" data-toggle="collapse" aria-expanded="false" aria-controls="#v4">Disciplina</a></li>
                                        <div id="v4" class="collapse">
                                            La constancia es nuestra definición de mejorar.<br/>
                                        </div>
                                        <li class="bold-li"><a href="#v5" data-toggle="collapse" aria-expanded="false" aria-controls="#v5">Proactividad</a></li>
                                        <div id="v5" class="collapse">
                                            Insperion procura tener iniciativa antes los problemas tecnológicos de la sociedad, así como anticiparse a las necesidades de la misma en un futuro.<br/>
                                        </div>
                                        <li class="bold-li"><a href="#v6" data-toggle="collapse" aria-expanded="false" aria-controls="#v6">Trabajo en Equipo</a></li>
                                        <div id="v6" class="collapse">
                                            Todo trabajo, proyecto y tarea ejecutada en Insperion es realizada por un conjunto de personas, todos compartimos el éxito y aprendiendo juntos de las nuevas experiencias.<br/>
                                        </div>
                                    </ul><br/>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://apis.google.com/js/platform.js" async defer>{lang: 'es'}</script>
        <script src="js/jquery.min.js"></script> 
        <script src="js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="js/owl.carousel.min.js"></script> 
        <script src="js/mousescroll.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/jquery.inview.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/images_services_hover.js"></script>
        <script src="js/modals.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script> 
        <script type="text/javascript" src="js/jquery.waypoints.min.js"></script> 
        <script type="text/javascript" src="js/send_email.js"></script>
        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id))
                                    return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
        </script>
<!--            <script src="https://apis.google.com/js/platform.js" async defer>
        {
            lang: 'es-419'
        }
        </script>-->
        <script>
            $(document).ready(function () {

                $("#owl-demo").owlCarousel({
                    navigation: false, // Show next and prev buttons
                    slideSpeed: 500,
                    autoPlay: 3000,
                    paginationSpeed: 400,
                    singleItem: true

                            // "singleItem:true" is a shortcut for:
                            // items : 1, 
                            // itemsDesktop : false,
                            // itemsDesktopSmall : false,
                            // itemsTablet: false,
                            // itemsMobile : false

                });

            });

            /*$('.timer').each(count);*/
            jQuery(function ($) {
                // custom formatting example
                $('.timer').data('countToOptions', {
                    formatter: function (value, options) {
                        return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                    }
                });


                // start all the timers
                $('#testimonials').waypoint(function () {
                    $('.timer').each(count);
                });

                function count(options) {
                    var $this = $(this);
                    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                    $this.countTo(options);
                }
            });


            $(document).ready(function () {
                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                });
            })
        </script>
    </body>
</html>

