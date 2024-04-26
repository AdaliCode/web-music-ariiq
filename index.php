<?php
require 'functions.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $web_name; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center mb-3"><?= $web_name; ?></h1>
        <?php foreach ($music_data as $key => $dvs) : ?>
            <div class="row mb-3">
                <div class="card border border-dark">
                    <div class="card-body text-center">
                        <h3><?= $dvs['title']; ?> - <?= $dvs['singer']; ?></h3>
                        <a href="music/detail.php?title=<?= $dvs['title']; ?>">Lihat Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>