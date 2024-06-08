<?php 
$webTitle = "Inicio | Sid&Tech";
include_once 'templates/header-html.inc.php';
?>

<!-- Aquí se agregan los estilos personalizados -->
<link rel="stylesheet" href="css/register.css">

</head>
  <body>
<?php include_once 'templates/nologin-navbar.inc.php'; ?>


<section class="container-fluid" id="home">
    <div class="row align-items-center contain-hero px-5">
      <div class="col-12 col-lg-6 px-1 order-2 order-lg-1"> 
      <h1 class="text-center py-3 my-3">Inicia Sesi&oacute;n</h1>
        <form class="" action="">
                <div class="row">
                    <div class="form-floating mb-3">
                        <input type="email" name="email" id="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Correo electr&oacute;nico</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 form-floating mb-3">
                        <input type="password" name="password" id="password" class="form-control" id="floatingInput" placeholder="12345678" minlength="8" maxlength="16" required>
                        <label for="floatingInput">Contrase&ntilde;a</label>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Iniciar Sesión</button>
                </div>

            </form>
      </div>
      <div class="col-12 col-lg-6 hero-img-container order-1 order-lg-2">
        <img src="img/sys-img.png" class="hero-img" alt="Sistema de Gesti&oacute;n de Servicio T&eacute;cnico"> 
      </div>    
    </div>  
  </section> 


<?php include_once 'templates/end-html.inc.php'; ?>