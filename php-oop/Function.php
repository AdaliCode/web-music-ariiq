<?php
require_once 'data/Music.php';
$music = new Music('DOXA', 'SECRET NUMBER', 'DOXA', null, '00:03:05');
$music->title = 'Who Says';
$music->singer = 'Selena Gomez';

// call function
$music->mentionUser("Ajeng");
$music->infoAuthor();
