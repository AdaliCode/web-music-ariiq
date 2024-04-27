<?php require 'data/Singer.php';
$tiara = new Singer("Tiara Andini", 22);
// $tiara->name // error, karena private

// call private propeties
echo "Nama Penyanyi : " . $tiara->getName() . ", ";
echo "Umur : " . $tiara->getAge() . "<br>";

$minji_nj = new Kpop('Minji New Jeans', 21);
$minji_nj->info();
