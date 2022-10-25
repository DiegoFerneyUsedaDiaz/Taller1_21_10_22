<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');


    //4. Desarrolle un algoritmo que permita leer dos números y ordenarlos de menor a mayor,si es el caso

    $numeros = [10,3];
 
    print_r ($numeros);
  
   asort($numeros);
    print_r ($numeros);



    //$obj = (object) [

       // "Numero 1" => " $numero1",
       //"Numero 2" => " $numero2",
      

       // "Mensaje" => "Servidor Origen" .$_SERVER["HTTP_HOST"]

    //];
  
    
    //echo json_encode ($obj, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>