<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 12/09/14
 * Time: 09:19 AM
 */
$hermanos = array(
    'Juan',
    'Lucas',
    'Carlos',
    'Adolfo',
    'Roberto'
);

$hermanos =
    [
        'nombre' => 'juan',
        'colores' => [
            'primero' => 'azul',
            'segundo' => 'rojo'
        ],
        'apellidos' => [
            'primer' => 'Bacalla',
            'segundo' => 'cachay'
        ],
        'estudia' => true,
        'edad' => 20
    ];

/*for($i=0; $i < count($hermanos); $i++){
    echo "$hermanos[$i]</br>";
}*/

foreach ($hermanos as $hermano) {
    if (is_array($hermano)) {
        foreach ($hermano as $item) {
            echo "$item</br>";
        }
    } else {
        echo "$hermano</br>";
    }
}

/*echo '<pre>';
print_r($hermanos);*/