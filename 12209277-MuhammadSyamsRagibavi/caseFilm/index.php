<?php

$movieList = [
    [
        'movie' => 'Fire Force',
        'contentRating' => 15,
        'price' => 65000
    ],
    [
        'movie' => 'Doraemon',
        'contentRating' => 0,
        'price' => 40000
    ],
    [
        'movie' => 'Tokyo Ghoul',
        'contentRating' => 21,
        'price' => 75000
    ]
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

    <div class="container">
        <section>
            <div class="form">
                <form action="" method="post">
                    <label>Select Movie</label>
                    <select name="movie" id="movie">`
                        <?php

                        foreach ($movieList as $movieLists) {?>

                            echo "<option value="<?= $movieLists['movie'] ?>"><?= $movieLists['movie'] ?></option>";
                        <?php } ?>

                    </select>
                    <br>
                    <label>Input Your Age</label>
                    <input type="number" name="contentRating" id="contentRating" required>
                    <br>
                    <input type="submit" name="submit">
                    <br>
                </form>
                <?php

                if (isset($_POST['submit'])) {
                    $contentRating = $_POST['contentRating'];
                    $movie = $_POST['movie'];
                        $selectedMovie = '';
                        foreach ($movieList as $movieLists) {
                            if ($movieLists['movie'] == $movie) {
                                $selectedMovie = $movieLists;
                            }
                        }
        
                        if ($selectedMovie) {
                            if ($contentRating >= $selectedMovie['contentRating']) {
                                echo 'Harga Tiket untuk film ' . $selectedMovie['movie'] . " = <span style='color: green'>Rp " . number_format($selectedMovie['price'], 0, ',', '.') . '</span></p>';
                            } else {
                                echo '<p>Belum cukup umur untuk menonton "' . $selectedMovie['movie'] . '".</p>';
                            }
                        }                   
                }
                ?>  
            </div>
        </section>
    </div>
</body>
</html>