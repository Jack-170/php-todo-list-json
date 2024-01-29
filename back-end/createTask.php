<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Headers: X-Requested-With");
header("Access-Control-Allow-Origin: http://localhost:5173");


$jsonTasks = file_get_contents(__DIR__ . "/task.json");
$tasks = json_decode($jsonTasks, true);

$newTaskText = $_POST['text'];
$newTask = [
    "text" => $newTaskText,
    "completed" => false
];

$tasks[] = $newTask;

$jsonTasks = json_encode($tasks);
file_put_contents(__DIR__ . "/task.json", $jsonTasks);
echo $jsonTasks;

// VERSIONE 1
// $tasks = [
//     [
//         "text" => "Fare la spesa",
//         "completed" => false
//     ],
//     [
//         "text" => "Fare il bucato",
//         "completed" => true
//     ],
//     [
//         "text" => "Fare il letto",
//         "completed" => false
//     ]
// ];

// $newTaskText = $_POST['text'];
// $newTask = [
//     "text" => $newTaskText,
//     "completed" => false
// ];

// $tasks[] = $newTask;

// $jsonTasks = json_encode($tasks);
// echo $jsonTasks;