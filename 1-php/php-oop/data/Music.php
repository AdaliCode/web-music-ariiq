<?php

namespace Data\Music;

class Music
{
    // const harus ada value
    const AUTHOR = 'Ariiq Fiezayyan';
    // propeties depannya perlu var
    var string $title;
    var string $singer;
    var ?string $released = null; // set default value null => bisa string atau null
    var string $duration = '00:03:00'; // default value

    public function __construct(string $title, string $singer, ?string $released, string $duration)
    {
        $this->title = $title;
        $this->singer = $singer;
        $this->released = $released;
        $this->duration = $duration;
    }

    // function
    function mentionUser(string $user)
    {
        echo "$user sedang mendengar lagu {$this->title} by {$this->singer}!<br>"; // harus jelas $thisya apa
    }

    // void itu adalah tanpa return
    function infoAuthor(): void
    {
        echo 'Author : ' . self::AUTHOR;
    }

    // function __destruct()
    // {
    //     echo "<br>Object Music $this->title telah destroy<br>";
    // }
}

// inheritance
class Kpop extends Music
{
    // overriding => ditimpa functionnya
    function mentionUser(string $user)
    {
        echo "$user sedang mendengar lagu Kpop yang judulnya {$this->title} by {$this->singer}!<br><br>"; // harus jelas $thisya apa
    }
}
class Indonesia extends Music
{
}
