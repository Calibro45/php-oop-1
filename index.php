<?php 

require_once __DIR__ . '/class.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>OOP-php</title>
</head>
<body>
    <main>
        <div class="container">
            <h1>MOVIES</h1>
            <ol>
                <?php 
                
                foreach($moviesCat as $movie ):

                    $title = $movie -> getTitle();
                    $genre = $movie -> getGenre();
                    $director = $movie -> getDirector();
                    $length = $movie -> getLength();
                    $year = $movie -> getYear();
                    $poster = $movie -> getPoster();

                    ?> 

                    <li>
                        <figure>
                            <img src="<?php echo $poster ?>">
                        </figure>
                        <h4><?php echo $title ?></h4>
                        <div>
                            <p>Regista: <?php echo $director ?></p>
                            <p>Genere: <?php echo $genre ?></p>
                            <p>Durata: <?php echo $length ?></p>
                            <p>Anno: <?php echo $year ?></p>
                        </div>
                    </li>

                    <?php
                endforeach
                ?>
            </ol>
        </div>
    </main>
</body>
</html>