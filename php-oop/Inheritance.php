<?php
require_once 'data/Music.php';
// Inheritance
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
$daddy = new Kpop('Daddy', 'PSY, CL', 'PSY 9th', null, '00:03:50');
$doxa = new Kpop('DOXA', 'SECRET NUMBER', 'DOXA', null, '00:03:05');
$doxa->mentionUser('Afirah');
$teman_bahagia = new Indonesia('Teman Bahagia', 'Jaz', 'Sinergi', null, '00:03:27');
