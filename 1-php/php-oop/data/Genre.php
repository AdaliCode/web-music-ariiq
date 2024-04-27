<?php
require_once 'Singer.php';

use Data\Music\Music;

class Genre
{
    private string $name;
    private Music $music;

    // setter getter name
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        // validation setter
        if (trim($name) != '') {
            $this->name = $name;
        }
    }

    // setter getter music
    public function getMusic()
    {
        return $this->music;
    }
    public function setMusic(Music $music): void
    {
        $this->music = $music;
    }
}
