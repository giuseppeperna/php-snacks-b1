<?php
/*
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio
e i PM in un rettangolo verde.
*/

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
?>

<h1>Teachers</h1>
<div style='border:2px solid grey'>
    <?php 
    foreach($db['teachers'] as $k => $teachers) {
        echo $teachers["name"] . " " . $teachers["lastname"] . "<br>";
        }
    ?>
</div>
<br>

<h1>Pm</h1>
<div style='border:2px solid green'>
    <?php 
    foreach($db['pm'] as $k => $pm) {
        echo $pm["name"] . " " . $pm["lastname"] . "<br>";
        }
    ?>
</div>

