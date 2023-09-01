<?php
require_once __DIR__.'/classes/movies.php';

$Oppenheimer =new movies('Oppenheimer',  '3h', 'Christopher Nolan');

var_dump($Oppenheimer);
$Oppenheimer->details();

$Barbie =new movies('Barbie',  '1h 54m', 'Greta Gerwig');

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