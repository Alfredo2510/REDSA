<?php
//--Controlador de Productos o Categorias 
    class ControladorProductos{
    //
    // ──────────────────────────────────────────────────────────────────────────────────────────────────── I ──────────
    //   :::::: M A N D A R   A   L L A M A R   A   L A S  C A T E G O R I A S : :  :   :    :     :        :          :
    // ──────────────────────────────────────────────────────────────────────────────────────────────────────────────
    //
        static public function ctrMostrarCategorias($item, $valor){
            $tabla = "categorias";
            $respuesta = ModeloProductos::mdlMostrarCategorias($tabla, $item, $valor);
            return $respuesta;
        }
//
// ──────────────────────────────────────────────────────────────────────────────────────────────────── I ──────────
//   :::::: M A N D A R   A   L L A M A R   A   L A S  S U B C A T E G O R I A S : :  :   :    :     :        :          :
// ──────────────────────────────────────────────────────────────────────────────────────────────────────────────
//
        static public function ctrMostrarSubcategorias($item, $valor){
            $tabla = "subcategorias";
            $respuesta = ModeloProductos::mdlMostrarSubcategorias($tabla, $item, $valor);
            return $respuesta;
        }
    }