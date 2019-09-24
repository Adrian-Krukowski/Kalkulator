<?php
/*
function dzialaj($liczbaA, $dzialanie, $liczbaB, $wynik){
    eval("$wynik = {$liczbaA} {$dzialanie} {$liczbaB}");
    echo $wynik;
}*/

function dodawanie($liczbaA, $liczbaB) {

    $wynik = $liczbaA + $liczbaB;
    echo $wynik;
}

function odejmowanie($liczbaA, $liczbaB) {
    $wynik = $liczbaA-$liczbaB;
    echo $wynik;
}

function mnozenie($liczbaA, $liczbaB){
    $wynik = $liczbaA * $liczbaB;
    echo $wynik;
}

function dzielenie($liczbaA, $liczbaB) {
    try{
        if($liczbaB == 0 ) throw new Exception($liczbaA = 'Pamiętaj, nie dziel przez 0');
        $wynik = $liczbaA / $liczbaB;
        echo $wynik;
    }
    catch(Exception $wyjatek)
    {
        echo $wyjatek->getMessage();
    }
}

function pierwiastkowanie($liczbaA) {
    $wynik = sqrt($liczbaA);
    echo $wynik;
}
function potegowanie2($liczbaA){
    $wynik = $liczbaA*$liczbaA;
    echo $wynik;
}

function potegowanieDoN($liczbaA, $liczbaB){
    $wynik = pow($liczbaA, $liczbaB);
    echo $wynik;
}

/*function modulo($liczbaA,$liczbaB){
    $wynik = $liczbaA % $liczbaB;
    echo $wynik;
}*/



