<?php 
require __DIR__ . '/Movie.php';
require __DIR__ . '/Genre.php';

// $matrix = new Movie("sci-fi", "matrix", 120, "path immagine" );
// $star_wars = new Movie("sci-fi", "star wars", 120, "path immagine" );

$scifi = new Genre("sci-fi");
$action = new Genre("action");

$movies = [
    new Movie(
        [$scifi],
        "matrix",
        120,
        "https://www.gloriarebecchi.com/wp-content/uploads/2021/01/matrix_2.jpg"
    ),
    new Movie([$scifi], "star wars", 120, "https://media-assets.wired.it/photos/615f2247a02eee0720b50a88/master/w_1600%2Cc_limit/1507734608_star_wars_poster-1.jpg" )
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php foreach ($movies as $movie) {?>
        <div>
            <h2><?= $movie->title ?></h2>
            <h3>Durata : <?= $movie->duration?> minuti</h3>
            <h4>Generi: 
                <?= $movie->getGenresAsString() ?>
            </h4>
            <h4>Genere : <?php foreach ($movie->genres as $genre) {?>
                <p><?= $genre->name?></p>
            <?php } ?>
            </h4>
            <img src="<?= $movie->poster?>" alt="<?= $movie->title ?>">
        </div>
    <?php } ?>
    
    

</body>
</html>