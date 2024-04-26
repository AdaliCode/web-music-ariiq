<?php
require '../functions.php';
if (!isset($_GET["title"])) {
    header("Location: ../index.php");
    exit;
}

// cek detail data
for ($i = 0; $i < count($music_data); $i++) {
    if ($music_data[$i]['title'] == $_GET["title"]) {
        $music_detail = $music_data[$i];
        break;
    }
}

// cek jika get title tidak ada di array
if ($i == count($music_data)) {
    header("Location: ../index.php");
    exit;
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $web_name; ?> | <?= $music_detail['title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <div class="text-center">
            <h1><?= $music_detail['title']; ?></h1>
            <p>Penyanyi : <?= $music_detail['singer']; ?></p>
            <p>Rilis : <?= $music_detail['release']; ?></p>
            <a href="../index.php">Balik</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>