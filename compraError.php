<?php
session_start();
require_once 'php/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MEGAROLLER | Fábrica de Cortinas Roller</title>

    <?php include 'php/links-header.php'; ?>

</head>
<body>
    <div id="wrapper">
        <div class="overlay"></div>

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <?php include 'php/header.php'; ?>

            <div class="container-full">
                <h1>Error al recibir su pago!</h1>
            </div>
            <!-- /.CONTENIDO -->

            <?php include 'php/footer.php'; ?>
        </div>
        <!-- /#page-content-wrapper --> 
        <?php include 'php/sidebar.php'; ?>
    </div>
    <!-- /#wrapper --> 

    <?php include 'php/scripts-footer.php'; ?>
    
</body>
</html>
