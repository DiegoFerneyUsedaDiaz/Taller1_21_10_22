<?php

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $_DATA["servidor"] = $_SERVER["HTTP_HOST"];
    extract($_DATA);


    
    echo json_encode($_DATA, JSON_PRETTY_PRINT);


  //$nombre = $_POST['nombre'];
  //$cedula = $_POST['cedula'];
 // $horas = $_POST['horas'];

//echo "Mi nombre es $nombre mi cedula $cedula y mi sueldo es $horas.";



    //5.Desarrolle un algoritmo para la empresa Constructora Tecnovivir Casas C.A., que le permita calcular e"
    //imprimir la nómina para su cancelación a un total de 50 obreros calificados a quienes debe cancelar por horas
    //trabajadas. Lahora trabajada se pautó en 30.000 Bolívares

   


    //$obj = (object) [

       // "Numero 1" => " $numero1",
       //"Numero 2" => " $numero2",
      

       // "Mensaje" => "Servidor Origen" .$_SERVER["HTTP_HOST"]

    //];
  
    
    //echo json_encode ($obj, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>