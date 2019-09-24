var exp = '', sol = '',expA = '',expB = '';

function czyszczenie(){
    document.Licznik.liczbaA.value ="";
    document.Licznik.liczbaB.value ="";
    document.Licznik.licznikOperator.value ="";

}

function usuniecieOstatniegoZnaku(){
    expA= document.Licznik.liczbaA.value
    expB= document.Licznik.liczbaB.value
    exp= document.Licznik.licznikOperator.value;
    if(expB == "" && exp == ""){

        document.Licznik.liczbaA.value = expA.substring(0,expA.length-1);
    }
    else if(expB == "" && exp != ""){

        document.Licznik.licznikOperator.value = exp.substring(0,exp.length-1);
    }
    else if(expB != ""){

        document.Licznik.liczbaB.value = expB.substring(0,expB.length-1);
    }
}

function insert(liczba) {
        if(document.Licznik.licznikOperator.value == ''){
    document.Licznik.liczbaA.value = document.Licznik.liczbaA.value+liczba
    }
        if(document.Licznik.licznikOperator.value != '')
        {
        document.Licznik.liczbaB.value = document.Licznik.liczbaB.value+liczba

    }
}

function jedenOperator(op) {

    if(document.Licznik.liczbaA.value != ''){
        document.Licznik.licznikOperator.value = exp + op;
        document.Licznik.licznikOperatorUkryty.value = exp + op;
    }
}

function obliczaj(){
    exp = document.Licznik.LicznikTekst.value;
    if(exp){
        document.Licznik.LicznikTekst.value = eval(exp);

    }
}

/* html function jedenOperator(op) {
        if(jedenOperator = true){
    exp = document.Licznik.LicznikTekst.value;
    document.Licznik.LicznikTekst.value = exp + op;

} */



    //     var operator = document.getElementsByClassName("ButtonDzialan");
    //     exp = document.Licznik.LicznikTekst.value;
    //     document.Licznik.LicznikTekst.value = exp + operator;

    //exp = document.Licznik.LicznikTekst.value;
    //document.Licznik.LicznikTekst.value = exp + op;




function kropka(){
    document.Licznik.LicznikTekst.value = exp + ',';
}
