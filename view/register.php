<?php 
$webTitle = "Registro | Sid&Tech";
include_once 'templates/header-html.inc.php';
?>

<!-- Aquí se agregan los estilos personalizados -->
<link rel="stylesheet" href="css/register.css">

</head>
  <body>
<?php include_once 'templates/nologin-navbar.inc.php'; ?>

<section class="container-fluid contain-form" id="home">
    <div class="row align-items-center contain-hero my-5 px-5">
      <div class="col-12 col-lg-6 px-1 order-2 order-lg-1">
            <h1 class="text-center py-3 my-3">Registra tu Empresa</h1>
            <form class="" action="">
                <div class="row">
                    <div class="col-12 col-md-6 form-floating mb-3">
                        <input type="text" name="nameBusiness" id="nameBusiness" class="form-control" id="floatingInput" placeholder="CeluStar" required>
                        <label for="floatingInput">Nombre de la Empresa</label>
                    </div>
                    <div class="col-12 col-md-6 form-floating mb-3">
                        <input type="text" name="namePerson" id="namePerson" class="form-control" id="floatingInput" placeholder="Juan" required>
                        <label for="floatingInput">Ingresa tu nombre</label>
                    </div>
                </div>

                <div class="row">
                    <div class="form-floating mb-3">
                        <input type="email" name="email" id="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Correo electr&oacute;nico</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 form-floating mb-3">
                        <input type="number" name="phone" id="phone" class="form-control" id="floatingInput" placeholder="3000000000" required>
                        <label for="floatingInput">WhatsApp / Celular</label>
                    </div>
                    <div class="col-12 col-md-6 form-floating mb-3">
                        <input type="text" name="address" id="address" class="form-control" id="floatingInput" placeholder="Calle 5 # 6" required>
                        <label for="floatingInput">Direcci&oacute;n</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 form-floating mb-3">
                        <input type="text" name="country" id="country" class="form-control" id="floatingInput" placeholder="Colombia" required>
                        <label for="floatingInput">Pa&iacute;s</label>
                    </div>
                    <div class="col-12 col-md-6 form-floating mb-3">
                        <input type="text" name="city" id="city" class="form-control" id="floatingInput" placeholder="Medellin" required>
                        <label for="floatingInput">Ciudad</label>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <label for="formFile" name="logo" id="logo" class="form-label"><h4>Adjunta el logo de tu Empresa</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 col-md-6 form-floating mb-3">
                        <input type="password" name="password" id="password" class="form-control" id="floatingInput" placeholder="12345678" minlength="8" maxlength="16" required>
                        <label for="floatingInput">Contrase&ntilde;a</label>
                    </div>
                    <div class="col-12 col-md-6 form-floating mb-3">
                        <input type="password" name="passwordVerify" id="passwordVerify" class="form-control" id="floatingInput" placeholder="12345678" minlength="8" maxlength="16" required>
                        <label for="floatingInput">Confirmar contrase&ntilde;a</label>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Registrar Empresa</button>
                </div>

            </form>
      </div>
      <div class="col-12 col-lg-6 hero-img-container order-1 order-lg-2">
        <img src="img/sys-img.png" class="hero-img" alt="Sistema de Gesti&oacute;n de Servicio T&eacute;cnico"> 
      </div>
    </div>  
  </section> 









<?php include_once 'templates/end-html.inc.php'; ?>