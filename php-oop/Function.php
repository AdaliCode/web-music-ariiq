<?php
require_once 'data/Music.php';
$music = new Music();
$music->title = 'Who Says';
$music->singer = 'Selena Gomez';

$music->mentionUser("Ajeng");
