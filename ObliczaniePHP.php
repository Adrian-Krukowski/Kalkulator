<?php

include('FunkcjePHP.php');

$liczbaA = $_POST['liczbaA'];
$liczbaB = $_POST['liczbaB'];

$dzialanie = $_POST['licznikOperatorUkryty'];
//echo $dzialanie;



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
}elseif ($dzialanie == "mod"){
    modulo($liczbaA,$liczbaB);
}

//$oblicz = isset($_POST['dzialanie']);

/*<form method="get" action="ObliczaniePHP.php" >
    $liczbaA = liczbaA;
    $liczbaB = liczbaB;*/
?>


