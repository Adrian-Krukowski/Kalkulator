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
        if($liczbaB == 0 ) throw new Exception('Pamiętaj, nie dziel przez 0');

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

function modulo($liczbaA,$liczbaB)
{
    try {
        if ($liczbaA == 0 || $liczbaB == 0){
            throw new Exception('Podaj liczby różne od 0');
        }

        if (is_float($liczbaA) || is_float($liczbaB) ) {
            throw new Exception('Podaj liczby całkowite');
        }
        if($liczbaA < $liczbaB)
        {
            throw new Exception();
        }
        $wynik = $liczbaA % $liczbaB;
        echo $wynik;

    }
        catch(Exception $w) {
        echo $w->getMessage();
    }


}




