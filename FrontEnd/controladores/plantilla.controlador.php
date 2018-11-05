
<?php

//--Controlador de Plantilla 
class ControladorPlantilla{
    //
    // ──────────────────────────────────────────────────────────────────────────────────────────────────── I ──────────
    //   :::::: M A N D A R   A   L L A M A R   A   L A   P L A N T I L L A : :  :   :    :     :        :          :
    // ──────────────────────────────────────────────────────────────────────────────────────────────────────────────
    //
    public function plantilla(){
        include "vistas/plantilla.php";
    }
    //
    // ──────────────── TRAER LOS ESTILOS DINAMICOS DEL CONTROLADOR CTR PLANTILLA ─────
    //
    public function ctrEstiloPlantilla(){
        $tabla = "plantilla";
        $respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);
        return $respuesta;
    }

        
        
}