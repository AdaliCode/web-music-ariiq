<?php
require '../functions.php';
if (!isset($_GET["id"])) {
    header("Location: ../index.php");
    exit;
}
$music_detail = query("SELECT * FROM music WHERE id = '{$_GET["id"]}'");
if (empty($music_detail)) {
    header("Location: ../index.php");
    exit;
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $web_name; ?> | <?= $music_detail[0]['title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <div class="card">
            <div class="card-body text-center">
                <h1><?= $music_detail[0]['title']; ?></h1>
                <p> <?= $music_detail[0]['singer']; ?> - <?= $music_detail[0]['album'] ?? $music_detail[0]['title']; ?> - <?= indo_date_format($music_detail[0]['released']); ?> - <?= date("i:s", strtotime($music_detail[0]['duration'] ?? '')); ?></p>
                <a href="../index.php"> Balik</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>