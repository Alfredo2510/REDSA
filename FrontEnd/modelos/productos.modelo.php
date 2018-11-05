<?php
require_once "conexion.php";

class ModeloProductos{
    //
    // ──────────────────────────────────────────────────────────────────────────────────────────────────── I ──────────
    //   :::::: M A N D A R   A   L L A M A R   A   L A S  C A T E G O R I A S : :  :   :    :     :        :          :
    // ──────────────────────────────────────────────────────────────────────────────────────────────────────────────
    //
    static public function mdlMostrarCategorias($tabla, $item, $valor){

        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }
        $stmt -> close();
        $stmt = null;
    }
    //
    // ──────────────────────────────────────────────────────────────────────────────────────────────────── I ──────────
    //   :::::: M A N D A R   A   L L A M A R   A   L A S  S U B C A T E G O R I A S : :  :   :    :     :        :          :
    // ──────────────────────────────────────────────────────────────────────────────────────────────────────────────
    //
    static public function mdlMostrarSubcategorias($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_INT);
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt = null;
    }

}