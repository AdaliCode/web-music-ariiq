<?php
require_once 'data/Genre.php';
require_once 'data/Music.php';

use Data\Music\{Kpop, Indonesia};

$genre = new Genre();
$genre->setName('Kpop');
$genre->setMusic(new Kpop('DOXA', 'SECRET NUMBER',  null, '00:03:05'));
$genre->setMusic(new Kpop('DOOMCHITA', 'SECRET NUMBER',  null, '00:03:05'));

echo 'Genre : ' . $genre->getName() . "<br>";
echo 'Musiknya : ';
var_dump($genre->getMusic());
