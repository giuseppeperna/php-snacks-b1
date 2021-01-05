<?php
/*
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni
alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$students = [
    [
        'name' => 'John',
        'lastname' => 'Doe',
        'marks' => [6, 7, 8, 10, 4],
    ],
    [
        'name' => 'Jane',
        'lastname' => 'Doe',
        'marks' => [4, 6, 5, 10, 5],
    ],
    [
        'name' => 'Tony',
        'lastname' => 'Smith',
        'marks' => [10, 4, 6, 8, 9],
    ],
    [
        'name' => 'Julia',
        'lastname' => 'Reed',
        'marks' => [5, 6, 8, 7, 3],
    ],
];

function averageMarks($nums) {
    $marksRange = count($nums);
    $markSum = 0;

    foreach($nums as $number) {
        $markSum += $number;
    };

    return $markSum / $marksRange;
}

?>

<ul>
    <?php foreach($students as $k => $student) {
        echo "<li>" . $student['name'] . " " . $student['lastname'] . "<br>" 
        . "Average of the marks: " . averageMarks($student['marks']) . "</li>" . "<br>";
    } 
    ?>
</ul>