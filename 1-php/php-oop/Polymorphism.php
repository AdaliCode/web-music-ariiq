<?php
require_once 'data/Album.php';
require_once 'data/Music.php';

// call namespace
use Data\Music\{Kpop, Indonesia};

// call polymorphism
$doxa = new Album('Doxa');
$doxa->music = new Kpop('DOXA', 'SECRET NUMBER',  null, '00:03:05'); // inheritance from class music
$doxa->music = new Kpop('Beautiful One', 'SECRET NUMBER',  null, '00:03:09'); // inheritance from class music

$pyra_game = new Album('Pyramid Game');

// manipulasi propeties
$pyra_game->music = new Kpop('Higher', 'SECRET NUMBER',  null, '00:03:05'); // inheritance from class music
$pyra_game->music->title = 'Higher';
$pyra_game->music->singer = 'Ava Max';
$pyra_game->music->released = '2024-02-11';
$pyra_game->music->duration = '00:02:24';
echo $pyra_game->music->title . ' - ' . $pyra_game->music->singer . ' - ' . $pyra_game->music->duration . '<br>';
