<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');


    //2. Determinar la hipotenusa de un triángulo rectángulo conocidas las longitudes de sus dos catetos. Desarrolle
    //el algoritmo correspondiente. Formula: (HIP = √CATa + √CATb)

    $catetoA = 4;
    $catetoB = 9;
    $hipotenusa = sqrt ($catetoA) + sqrt ($catetoB);

    $obj = (object) [
        "Resultado" => "La hipotenusa de triangulo con longitud a=4 y b=9 es : $hipotenusa",  
        "Mensaje" => "Servidor Origen" .$_SERVER["HTTP_HOST"]

    ];
  
    
    echo json_encode ($obj, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>