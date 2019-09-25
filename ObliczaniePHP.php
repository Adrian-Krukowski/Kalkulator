<?php

include('FunkcjePHP.php');

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
    dodawanie($liczbaA, $liczbaB);
} elseif ($dzialanie == "-") {
    odejmowanie($liczbaA, $liczbaB);
} elseif ($dzialanie == "*") {
    mnozenie($liczbaA, $liczbaB);
} elseif ($dzialanie == "/") {
    dzielenie($liczbaA, $liczbaB);
}elseif ($dzialanie == "√") {
    pierwiastkowanie($liczbaA);
}elseif ($dzialanie == "x2") {
    potegowanie2($liczbaA);
}elseif ($dzialanie == "x^n"){
    potegowanieDoN($liczbaA,$liczbaB);
}elseif ($dzialanie == "mod") {
    modulo($liczbaA, $liczbaB);
}



