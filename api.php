<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');


    //3. Desarrolle un algoritmo que permita determinar el área lateral 
    //y volumen de un cilindro dado su radio (R) y altura (H). Formula: (VOL = π * R^2 * H), (AREA_LATERAL = 2 * π * R * H)

    $radio = 8;
    $altura = 15;
    $π = 3.141592;


    $volumen = $π * $radio**2 * $altura ;
    $areaLateral = 2* $π * $radio * $altura;

    $obj = (object) [

        "Tamaño Radio" => " $radio",
        "Altura del Cilindro" => "$altura",
        "Resultado Volumen" => "El volumen del Cilindro es : $volumen", 
        "Resultado Area" => "El area lateral del Cilindro es : $areaLateral", 
        "Mensaje" => "Servidor Origen" .$_SERVER["HTTP_HOST"]

    ];
  
    
    echo json_encode ($obj, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>