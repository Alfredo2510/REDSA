<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="Refacciones Eléctricas de Durango">
    <meta name="description" content="Nos especializamos en la venta de refacciones eléctricas para su vehiculo, como por ejemplo sensores, baterías, focos, marchas, alternadores.">
    <meta name="keyword" content="Refacciones Electricas, Refacciones electricas de durango, REDSA, Autopartes, Refaccionaria, Autoelectrica">
    <title>REDSA</title>

    <?php
        $icono = ControladorPlantilla::ctrEstiloPlantilla();
        echo '<link rel="icon" href="http://localhost:8080/REDSA/BackEnd/'.$icono["icono"].'">';

        //
        // ────────────────────────────────────────────────────────────────────────────────────────────────────────────── I ──────────
        //   :::::: M A N T E N E R   L A   R U T A   F I J A   E N   E L   S I S T E M A : :  :   :    :     :        :          :
        // ────────────────────────────────────────────────────────────────────────────────────────────────────────────────────────
        //
        $url = Ruta::ctrRuta();
    
    ?>

    
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plantilla.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/cabezote.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/slide.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto|Source+Sans+Pro" rel="stylesheet">


    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.easing.js"></script>

</head>  
<body>   
<?php
    //
    // ────────────────────────────────────────────────────────────────────────── I ──────────
    //   :::::: C A B E Z O T E   O   H E A D E R : :  :   :    :     :        :          :
    // ────────────────────────────────────────────────────────────────────────────────────
    //
    include "modulos/cabezote.php";

     // ────────────────────────────────────────────────────────────────────────── I ──────────
    //   :::::: CONTENIDO DINAMICO  : :  :   :    :     :        :          :
    // ────────────────────────────────────────────────────────────────────────────────────
    $rutas = array();
    $ruta = null;

    if(isset($_GET["ruta"])){
        $rutas = explode("/", $_GET["ruta"]);

        $item = "ruta";
        $valor = $rutas[0];

         // ────────────────────────────────────────────────────────────────────────── I ──────────
        //   :::::: URLS AMIGABLES DE CATEGORIAS : :  :   :    :     :        :          :
        // ────────────────────────────────────────────────────────────────────────────────────

        $rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);
        if($valor == $rutaCategorias["ruta"]){
            $ruta = $valor;
        }
         // ────────────────────────────────────────────────────────────────────────── I ──────────
        //   :::::: URLS AMIGABLES PARA SUB CATEGORIAS : :  :   :    :     :        :          :
        // ────────────────────────────────────────────────────────────────────────────────────
        $rutaSubcategorias = ControladorProductos::ctrMostrarSubcategorias($item, $valor);
        foreach ($rutaSubcategorias as $key => $value){
            if($rutas[0] == $value["ruta"]){
                $ruta = $rutas[0];
            }
        }
         // ────────────────────────────────────────────────────────────────────────── I ──────────
        //   :::::: LISTA DE URL'S AMIGABLES : :  :   :    :     :        :          :
        // ────────────────────────────────────────────────────────────────────────────────────

        if($ruta != null){
            include "modulos/productos.php";
        }else{
            include "modulos/error404.php";
        }
    }else{
        include "modulos/slide.php";
    }
?>



<script src="<?php echo $url; ?>vistas/js/cabezote.js"></script>
<script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
<script src="<?php echo $url; ?>vistas/js/slide.js"></script>
</body>
</html>
