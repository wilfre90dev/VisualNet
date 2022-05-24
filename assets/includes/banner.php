<?php
include 'assets/includes/conexiones.php';


if (isset($_POST["mensaje"])) {

    $nombre = $_POST['nombre'];  
    $tipo = $_POST['tipo'];
    $mensaje = $_POST['mensaje'];
    $ip = $_SERVER['REMOTE_ADDR'];   
$fecha=date("Y/m/d");
    
$sql = "INSERT INTO `mensajes` (nombre, tipo, mensaje, ip, fecha) VALUES ('$nombre', '$tipo', '$mensaje', '$ip', '$fecha')";

if ($conn->query($sql) === TRUE) {
    echo "</h4> Mensaje enviado correctamente. Gracias por el tiempo empleado</h4>";   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
if (isset($_POST["textbox"])) {
    $id = $_POST['id']; 
    $textbox = $_POST['textbox'];    
    $fecha=date("Y/m/d");
    
$sql = "UPDATE `mensajes` SET `fechaFin` = '$fecha', `estado` = '$textbox' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "</h4> Registro resuelto. Gracias por el tiempo empleado</h4>";   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
/* 

if (isset($_GET["edit"])) {
    $fecha=date("Y/m/d");
    $id = $_GET['edit'];
    echo $input;
    $sql = "UPDATE `mensajes` SET `fechaFin` = '$fecha'   WHERE id='$id'";
 
 if ($conn->query($sql) === TRUE) {
     echo "</h4> Registro resuelto con exito</h4>";   
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 $conn->close();
 } */
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">

    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="La Web de tu preferencia" name="description">
    <meta content="Wilfredo Palma" name="author">
    <title>VisualNet</title>
    <!-- Favicon -->
    <link href="assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">-->
    <!-- Icons -->
    <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="./assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link href="./assets/css/argon.css?v=1.1.0" rel="stylesheet" type="text/css">
</head>

<body class="" style="">

<header class="header-global">
    <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom headroom--not-bottom headroom--not-top headroom--unpinned"
         id="navbar-main">
        <div class="container">
            <a class=" mr-lg-5 display-3 text-white" href="index.php">VisualNet
            </a>
            <button aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler"
                    data-target="#navbar_global" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="http://localhost/visualnet/index.html">
                                VISUALNET
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"
                                    class="navbar-toggler" data-target="#navbar_global" data-toggle="collapse"
                                    type="button">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <button type="button" class="btn btn-outline-white mb-3" data-toggle="modal"
                            data-target="#modal-reparaciones">Reparaciones
                    </button>
					<button type="button" class="btn btn-outline-white mb-3" data-toggle="modal"
                            data-target="#modal-notification">Contacto
                    </button>	
					<button type="button" class="btn btn-outline-white mb-3" data-toggle="modal"
                            data-target="#modal-red">IP: <?php echo $_SERVER['REMOTE_ADDR'];?>
                    </button>	
					
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <!--


    <div class="position-relative">

      <!-- Hero for FREE version -->

    <section class="section section-lg section-hero section-shaped">
        <!-- Background circles -->
        <div class="shape shape-style-1 shape-primary">
            <span class="span-150"></span>
            <span class="span-50"></span>
            <span class="span-50"></span>
            <span class="span-75"></span>
            <span class="span-100"></span>
            <span class="span-75"></span>
            <span class="span-50"></span>
            <span class="span-100"></span>
            <span class="span-50"></span>
            <span class="span-100"></span>
        </div>
        <div class="container shape-container d-flex align-items-center py-lg">
            <div class="col px-0">
                <div class="row align-items-center justify-content-center">
                    <div class="text-center">