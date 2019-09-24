var exp = '';

function czyszczenie(){
    document.Licznik.LicznikTekst.value ="";
}

function usuniecieOstatniegoZnaku(){
    exp = document.Licznik.LicznikTekst.value;
    document.Licznik.LicznikTekst.value = exp.substring(0,exp.length-1);
}


function insert(liczba) {
    document.Licznik.LicznikTekst.value = document.Licznik.LicznikTekst.value+liczba
}

function obliczaj(){
    if(obliczaj(true)){
        liczbaB = 2;
    }
    document.Licznik.LicznikTekst.value = <? $wynik ?>
    //  exp = document.Licznik.LicznikTekst.value;
    /*if(exp){
         document.Licznik.LicznikTekst.value = eval(exp);
     } */
}

function jedenOperator(op){
    if(jedenOperator(true))
    {
        liczbaA = document.Licznik.LicznikTekst.value
    }
    /*   //exp = document.Licznik.LicznikTekst.value;
       document.Licznik.LicznikTekst.value = exp + op;
   */
}


/*   function kropka(){
       document.Licznik.LicznikTekst.value = exp + ',';
   }
*/