<?php

function dodawanie($liczbaA, $liczbaB) {

    $wynik = $liczbaA + $liczbaB;
    echo $wynik;
}

function odejmowanie($liczbaA, $liczbaB) {
    $wynik		= $liczbaA-$liczbaB;
    echo $wynik;
}

function mnozenie($liczbaA, $liczbaB) {
    $wynik		= $liczbaA*$liczbaB;
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
    $liczbaA = $wynik;
}
function potegowanie2($liczbaA){
    $wynik = $liczbaA*$liczbaA;
    $liczbaA = $wynik;
}

function potegowanie3($liczbaA){
    $wynik = $liczbaA*$liczbaA*$liczbaA;
    $liczbaA = $wynik;
}

/*function obliczaj()
{
    $exp = document.Licznik.LicznikTekst.value;
    if (exp) {
        $okno = eval(exp);
    }
}*/

function dzialaj($liczbaA, $dzialanie, $liczbaB, $wynik){
    eval("$wynik = {$liczbaA} {$dzialanie} {$liczbaB}");
    echo $wynik;
}
