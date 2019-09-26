<?php

include ('FunkcjePHP.php');
//include('zmeinnapomocnicza.php');
//echo wynik;
$liczbaA = $_POST['liczbaA'];

try {
    if ($_POST['licznikOperatorUkryty'] =='√'||$_POST['licznikOperatorUkryty'] == 'x2'){
        $liczbaB='0';
    }
    else{
        $liczbaB = $_POST['liczbaB'];
    throw new Exception('');}
}
catch (Exception $e){};

$dzialanie = $_POST['licznikOperatorUkryty'];

//@@@@@@ Poprawić jako ostatnie @@@@@@
if ($dzialanie == "+") {
    funkcjeObliczeniowe::dodawanie($liczbaA,$liczbaB);
} elseif ($dzialanie == "-") {
    funkcjeObliczeniowe::odejmowanie($liczbaA,$liczbaB);
} elseif ($dzialanie == "*") {
    funkcjeObliczeniowe::mnozenie($liczbaA,$liczbaB);
} elseif ($dzialanie == "/") {
    funkcjeObliczeniowe::dzielenie($liczbaA,$liczbaB);
}elseif ($dzialanie == "√") {
    funkcjeObliczeniowe::pierwiastkowanie($liczbaA);
}elseif ($dzialanie == "x2") {
    funkcjeObliczeniowe::potegowanie2($liczbaA);
}elseif ($dzialanie == "x^n"){
    funkcjeObliczeniowe::potegowanieDoN($liczbaA,$liczbaB);
}elseif ($dzialanie == "mod") {
    funkcjeObliczeniowe::modulo($liczbaA, $liczbaB);
}