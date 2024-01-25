<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>php-strong-password-generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <style type="text/css">


    </style>




</head>

<body>


    <div class="container p-3 text-center">

    </div>


    <?php
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
    file_put_contents("task.json", $jsonTasks);

    echo "File creato con successo!<br>";
    echo '<br>';
    ?>


    <?php
    // $jsonTasks = file_get_contents("task.json");
    // $tasks = json_decode($jsonTasks, true);
    
    // var_dump($tasks);
    // echo '<br>';
    ?>

    <?php
    // echo "Testo della task 1: " . $tasks[0]['text'] . "\n";
    // echo "Stato di completamento della task 1: " . ($tasks[0]['completed'] ? 'Completata' : 'Da completare') . "\n";
    
    // // Loop attraverso le tasks
    // foreach ($tasks as $task) {
    //     echo "Testo: " . $task['text'] . ", Stato: " . ($task['completed'] ? 'Completata' : 'Da completare') . "\n";
    // } -->
    ?>






</body>

</html>