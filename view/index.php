<?php 
$webTitle = "Inicio | Sid&Tech";
include_once 'templates/header-html.inc.php';
?>

<!-- Aquí se agregan los estilos personalizados -->
<link rel="stylesheet" href="css/index.css">

</head>
  <body>
<?php include_once 'templates/nologin-navbar.inc.php'; ?>

<!-- ======= Hero ======= -->
<section class="container-fluid" id="home">
    <div class="row align-items-center contain-hero px-5">
      <div class="col-12 col-lg-6 px-1 order-2 order-lg-1">
        <h1 class="px-5 hero-text">Sistema de Gesti&oacute;n de Servicio T&eacute;cnico</h1> 
        <h3 class="px-5 pt-4 hero-text">Obt&eacute;n acceso al sistema con las mejores funcionalidades para tu negocio.</h3>
      </div>
      <div class="col-12 col-lg-6 hero-img-container order-1 order-lg-2">
        <img src="img/sys-img.png" class="hero-img" alt="Sistema de Gesti&oacute;n de Servicio T&eacute;cnico"> 
      </div>    
    </div>  
  </section> 

<!-- ======= Aliade Brands ======= -->
<section class="container-fluid shadow-lg p-3 mb-5 bg-body-tertiary">
    <div class="row">
        <div class="col-6 col-md-4 col-lg-2"><img src="img/brand-1.png" class="d-block w-100" alt="..."></div>
        <div class="col-6 col-md-4 col-lg-2"><img src="img/brand-2.png" class="d-block w-100" alt="..."></div>
        <div class="col-6 col-md-4 col-lg-2"><img src="img/brand-1.png" class="d-block w-100" alt="..."></div>
        <div class="col-6 col-md-4 col-lg-2"><img src="img/brand-2.png" class="d-block w-100" alt="..."></div>
        <div class="col-6 col-md-4 col-lg-2"><img src="img/brand-1.png" class="d-block w-100" alt="..."></div>
        <div class="col-6 col-md-4 col-lg-2"><img src="img/brand-2.png" class="d-block w-100" alt="..."></div>
    </div>
</section>

<!-- ======= About Us ======= -->
<section class="container-fluid py-5 mb-5" id="about-us">
    <h1 class="text-center">SOBRE NOSOTROS</h1>
    <div class="row cont-about-us my-5 mx-5 fs-6">
        <div class="col-12 col-lg-6 px-5">
            <p>Hemos desarrollado un sitio web especialmente para tu negocio, que cubre todos los &aacute;mbitos, tanto contables como administrativos, permitiendo que lleves un registro seguro y flexible de todo tu negocio, generando as&iacute; una perdurable confianza en todos tus clientes.</p>
            <ul class="list-about pt-3">
                <li class="item-about"><i class="bi bi-check2-all me-2"></i>Facilidad de uso y navegación intuitiva.</li>
                <li class="item-about"><i class="bi bi-check2-all me-2"></i>Optimizaci&oacute;n para dispositivos m&oacute;viles.</li>
                <li class="item-about"><i class="bi bi-check2-all me-2"></i>Seguridad y Protecci&oacute;n de Datos.</li>
            </ul>
        </div>
        <div class="col-12 col-lg-6 px-5">
            <p>Cada d&iacute;a estamos mejorando para ti y tu negocio, implementando nuevas actualizaciones con funciones que estar&aacute;n a la vanguardia y permitan brindar un servicio amigable y oportuno a todos tus clientes, optimizaremos cada función para que puedas personalizarla a tu gusto.
            </p>
            <button type="button" class="btn btn-dark mt-4">Leer M&aacute;s...</button>
        </div>
    </div>
</section>

<!-- ======= FAQ ======= -->
<section class="container-fluid shadow-lg py-5 mb-5" id="faq">
    <div class="row">
        <div class="col-12 col-lg-6">
        <h1 class="text-center pb-5">PREGUNTAS FRECUENTES</h1>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item mx-5">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="bi bi-question-circle-fill me-3"></i>¿Puedo generar una orden de servicio?
                        </button>
                    </h2>
                <div id="flush-collapseOne" class="accordion-collapse show" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">¡Claro que s&iacute;! Nuestro sistema est&aacute; enfocado principalmente en esta funcionalidad, adem&aacute;s, no solo podr&aacute;s generar la orden sino que tambi&eacute;n podr&aacute;s enviarla mediante un mensaje de Whatsapp para que tus clientes est&eacute;n al tanto del servicio que se le encuentra realizando a sus dispositivos.</div>
                    </div>
                </div>
                <div class="accordion-item mx-5">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <i class="bi bi-question-circle-fill me-3"></i>¿C&oacute;mo uso el sitio web?
                        </button>
                    </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">No te preocupes, contamos con diferentes videos en YouTube que te ayudarán con el manejo del sitio web, notar&aacute;s que es tan sencillo que en unos minutos ser&aacute;s un experto al usarlo.</div>
                    </div>
                </div>
                <div class="accordion-item mx-5">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <i class="bi bi-question-circle-fill me-3"></i>¿En que horario est&aacute; disponible el sitio web?
                        </button>
                    </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">El sitio web est&aacute; optimizado para que lo uses las 24 horas del d&iacute;a los 7 dias de la semana, as&iacute; que no ser&aacute; un problema el horario en que desees usarlo.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 hero-img-container">
            <img src="img/sys-img.png" class="hero-img" alt="Sistema de Gesti&oacute;n de Servicio T&eacute;cnico">
        </div>
    </div>
</section>

<!-- ======= Services ======= -->
<section class="container-fluid" id="services">
    <div class="row services-row mb-5">
        <h1 class="text-center mb-4">SERVICIOS</h1>
        <div class="col-6 col-lg-3 service-card">
            <h1><i class="bi bi-file-earmark-text-fill"></i></h1>
            <h4>Registro de Ordenes</h4>
            <p class="pt-2">Registra órdenes, mejora atención. Simplifica proceso.</p>
        </div>
        <div class="col-6 col-lg-3 service-card">
        <h1><i class="bi bi-buildings-fill"></i></h1>
            <h4>Control de tu Negocio</h4>
            <p class="pt-2">Domina tu negocio, optimiza cada detalle, crece sin límites.</p>
        </div>
        <div class="col-6 col-lg-3 service-card">
            <h1><i class="bi bi-cash-coin"></i></h1>
            <h4>Gesti&oacute;n de Ventas</h4>
            <p class="pt-2">Dirige tus ventas con precisión, alcanza metas, supera expectativas.</p>
        </div>
        <div class="col-6 col-lg-3 service-card">
            <h1><i class="bi bi-gear-fill"></i></h1>
            <h4>Gesti&oacute;n de Servicios</h4>
            <p class="pt-2">Administra tus servicios con eficiencia, brinda calidad, fideliza clientes.</p>
        </div>
    </div>
</section>

<!-- ======= Call to action ======= -->
<section class="container-fluid callaction">
    <div class="row align-items-center px-5 mx-5 callaction-info">
        <div class="col-12 col-sm-9">
        <h1>Automatiza tu negocio</h1>    
        <p>Optimiza tu servicio técnico con nuestra solución todo-en-uno. Controla reparaciones, gestiona clientes y mejora la eficiencia. ¡Descubre cómo simplificar tu proceso hoy!</p></div>
        <div class="col-12 col-sm-3 align-items-center"><button class="btn btn-outline-light" type="submit"><i class="bi bi-person-fill"></i> ¡Explora Ahora!</button></div>
    </div>
</section>

<!-- ======= Footer ======= -->
<section class="container-fluid">
    <div class="row px-5 mb-5 footer-info">
        <div class="col-12 col-md-4 mt-5">
            <h3 class="pb-2">FixMastery</h3>
            <p>Medellin, Colombia</p>
            <p><b><i class="bi bi-telephone-fill"></i> Celular: </b>+57 300 290 9333</p>
            <p><b><i class="bi bi-envelope-check-fill"></i> Email: </b>e.javiergalvis@gmail.com</p>
        </div>
        <div class="col-12 col-md-4 mt-5">
            <h5 class="pb-2">Enlaces &Uacute;tiles</h5>
            <p><a class="links-footer" href="#home"><i class="bi bi-house"></i> Inicio</a></p>
            <p><a class="links-footer" href="#about-us"><i class="bi bi-people-fill"></i> Sobre Nosotros</a></p>
            <p><a class="links-footer" href="#faq"><i class="bi bi-question-circle-fill"></i> Preguntas Frecuentes</a></p>
            <p><a class="links-footer" href="#services"><i class="bi bi-info-circle"></i> Servicios</a></p>
        </div>
        <div class="col-12 col-md-4 mt-5">
            <h5 class="pb-2">Síguenos</h5>
            <p>Descubre más en nuestras redes sociales. Únete hoy para acceder a contenido exclusivo y estar al tanto de nuestras últimas novedades.</p>
            <h1> 
                <button type="button" class="btn btn-primary"><i class="bi bi-facebook"></i></button> 
                <button type="button" class="btn btn-danger"><i class="bi bi-instagram"></i></i></button> 
                <button type="button" class="btn btn-success"><i class="bi bi-whatsapp"></i></button> 
        </div>
    </div>
</section>

<!-- ======= CopyRight ======= -->

<section class="container-fluid">
    <div class="row">
        <div class="col text-center copy">
            <p>© Copyright fixmastery.com All Rights Reserved</p>
            <p>Designed by Javier Galvis</p>
        </div>
    </div>
</section>

<?php include_once 'templates/end-html.inc.php'; ?>