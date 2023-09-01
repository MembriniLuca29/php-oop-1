<?php
require_once __DIR__.'/classes/movies.php';

$Oppenheimer = new Movies('Oppenheimer', '3h', 'Christopher Nolan', ['Drama', 'Sci-Fi']);
var_dump($Oppenheimer);
$Oppenheimer->details();

$Barbie = new Movies('Barbie', '1h 54m', 'Greta Gerwig', ['Comedy', 'Family']);

var_dump($Barbie);
$Barbie->details();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1
</title>
</head>
<body>
    
</body>
</html>