<?php


header("Content-Type: application/json");
header("Access-Control-Allow-Headers: X-Requested-With");
header("Access-Control-Allow-Origin: http://localhost:5173");


$tasks = [
    [
        'text' => 'Fare la spesa',
        'completed' => false,
    ],
    [
        'text' => 'Studiare per l\'esame',
        'completed' => true,
    ],
    [
        'text' => 'Andare in palestra',
        'completed' => false,
    ],
    [
        'text' => 'Chiamare un amico',
        'completed' => true,
    ],
    [
        'text' => 'Leggere un libro',
        'completed' => false,
    ],
];

$jsonTasks = json_encode($tasks);
echo $jsonTasks;


