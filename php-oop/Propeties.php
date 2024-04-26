<?php
require_once 'data/Music.php';

// manipulasi propeties
$music = new Music();
$music->title = 'Higher';
$music->singer = 'Ava Max';
$music->album = $music->title;
$music->released = '2024-02-11';
$music->duration = '00:02:24';
// var_dump($music);

// hasil manipulasi
echo $music->title . ' - ' . $music->singer . ' - ' . $music->duration . '<br>';

// manipulasi propeties
$music2 = new Music();
$music2->title = 'UP';
$music2->singer = 'INNA, Saul Paul';
// $music2->duration = []; //error, karena masuk string bukan array
$music2->duration = '00:02:28';
// var_dump($music2);

// hasil manipulasi
echo $music2->title . ' - ' . $music2->singer . ' - ' . $music2->duration;
