<?php

class Music
{
    // propeties depannya perlu var
    var string $title;
    var string $singer;
    var string $album;
    var ?string $released = null; // set default value null => bisa string atau null
    var string $duration = '00:03:00'; // default value

    // function
    function mentionUser(string $user)
    {
        echo "$user sedang mendengar lagu {$this->title} by {$this->singer}!"; // harus jelas $thisya apa
    }
}
