<?php
// Válida si el titulo de la página está vacío
if(empty($webTitle))
        $webTitle = "Sid&Tech";

?>

<!Doctype html>
<html lang="es">
  <head>
    <!-- ======= Metadatos ======= -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Javier Galvis">
    <meta name="description" content="Sistema Web Gestor de Servicio Tecnico">
    <meta name="keywords" content="servicio, tecnico, celulares, administracion, contabilidad, ordenes, entrada, salida">
    
    <!-- ======= Titulo de la pagina ======= -->
    <title><?= $webTitle ?></title>

    <!-- ======= Favicon ======= -->
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

    <!-- ======= Librerias o Frameworks ======= -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- ======= Estilos Globales ======= -->
    <link rel="stylesheet" href="css/footer.css">