

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>MOVIES</h1>
    <div class="container">
        <?php
        require_once __DIR__.'/classes/movies.php';

       
        foreach ($movies as $movie) {
            echo '<div class="card">';
            echo '<h2>' . $movie->title . '</h2>';
            echo '<p>Duration: ' . $movie->duration . '</p>';
            echo '<p>Regia: ' . $movie->regia . '</p>';
            echo '<p>Genres: ' . implode(", ", $movie->genere) . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>