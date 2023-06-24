<?php 
require __DIR__ . '/Movie.php';
require __DIR__ . '/Genre.php';

// $matrix = new Movie("sci-fi", "matrix", 120, "path immagine" );
// $star_wars = new Movie("sci-fi", "star wars", 120, "path immagine" );

$scifi = new Genre("sci-fi");
$action = new Genre("action");

$movies = [
    new Movie(
        [$scifi, $action],
        "matrix",
        120,
        "https://www.gloriarebecchi.com/wp-content/uploads/2021/01/matrix_2.jpg"
    ),
    new Movie([$scifi], "star wars", 120, "https://media-assets.wired.it/photos/615f2247a02eee0720b50a88/master/w_1600%2Cc_limit/1507734608_star_wars_poster-1.jpg" ),
        new Movie(
            [$scifi, $action],
            "matrix",
            120,
            "https://www.gloriarebecchi.com/wp-content/uploads/2021/01/matrix_2.jpg"
        ),
        new Movie(
            [$scifi, $action],
            "matrix",
            120,
            "https://www.gloriarebecchi.com/wp-content/uploads/2021/01/matrix_2.jpg"
        ),
        new Movie(
            [$scifi, $action],
            "matrix",
            120,
            "https://www.gloriarebecchi.com/wp-content/uploads/2021/01/matrix_2.jpg"
        ),
        new Movie(
            [$scifi, $action],
            "matrix",
            120,
            "https://www.gloriarebecchi.com/wp-content/uploads/2021/01/matrix_2.jpg"
        ),
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body class="text-white">

    <header class="py-4">

        <nav class="container d-flex justify-content-around align-items-center p-2 rounded shadow">
            <h1>OOP1</h1>
            <h2>Films</h2>
        </nav>

    </header>
    
    <main>
        <div class="d-flex justify-content-center align-items-center mainContent" >
            
            <div class="container overflow-x-auto">
    
                <div class="row flex-nowrap">
    
                        <?php foreach ($movies as $movie) {?>

                            <div class="col-md-3 col-12 my-3">

                                <div class="card d-flex flex-column justify-content-between h-100">

                                    <h2><?= $movie->title ?></h2>
                                    <h3>Durata : <?= $movie->duration?> minuti</h3>
                                    <h4>Generi: 
                                        <?= $movie->getGenresAsString() ?>
                                    </h4> 
                                    <div class="h-75">
                                        <img class="img-fluid h-100 w-100 object-fit-cover " src="<?= $movie->poster?>" alt="<?= $movie->title ?>">
                                    </div>
                                    
                                </div>

                            </div>

                        <?php } ?>
    
                </div>
    
            </div>

        </div>
    </main>
    
    

</body>
</html>