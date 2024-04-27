<?php

require_once 'Singer.php';

use Data\Music\Music;

class Album
{
    public string $name;
    var Music $music; // polymorphism
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
