var exp = '', sol = '',expA = '',expB = '', expO = '';

function czyszczenie(){
    document.Licznik.liczbaA.value ="";
    document.Licznik.liczbaB.value ="";
    document.Licznik.licznikOperator.value ="";

}

function usuniecieOstatniegoZnaku(){
    expA= document.Licznik.liczbaA.value
    expB= document.Licznik.liczbaB.value
    expO= document.Licznik.licznikOperator.value;

    if(expB == "" && expO == ""){

        document.Licznik.liczbaA.value = expA.substring(0,expA.length-1);
    }
    else if(expB == "" && expO != ""){

        document.Licznik.licznikOperator.value = expO.substring(0,exp.length-1);
        document.Licznik.licznikOperatorUkryty.value = expO.substring(0,exp.length-1);
    }
    else if(expB != ""){

        document.Licznik.liczbaB.value = expB.substring(0,expB.length-1);
    }
}

function insert(liczba) {
    if(document.Licznik.licznikOperator.value == ''){
                document.Licznik.liczbaA.value = document.Licznik.liczbaA.value+liczba

                //uniemozliwia wpisania dwoch "."
                if(document.Licznik.liczbaA.value.split('.').length>2)
                     //"." nie zostanie wpisana ponownie(przeniesiona($))
                     document.Licznik.liczbaA.value = document.Licznik.liczbaA.value.replace(/\.$/,"");
    }
            //dodatkowa walidacja dla sqrt oraz potegowania ^2
            if(document.Licznik.licznikOperator.value != ''
                && document.Licznik.licznikOperator.value != '√'
                && document.Licznik.licznikOperator.value !='x2') {

                document.Licznik.liczbaB.value = document.Licznik.liczbaB.value+liczba

                if(document.Licznik.liczbaB.value.split('.').length>2)
                    document.Licznik.liczbaB.value = document.Licznik.liczbaB.value.replace(/\.$/,"");

    }
}

function tylkoLiczby(evt, id)
{
    try{
    var keynum;
    var keychar;


    if(evt.which)
    {
        keynum = evt.which;
    }
    keychar = String.fromCharCode(keynum);

    if(keynum==46){
        var numcheck=document.getElementById(id).value;
        if(numcheck.split('.').length<2){

            return true;
        }
    }
    if (keynum < 48 || keynum > 57)
        return false;

    return true;
}catch(w){
    alert(w);
}
}

/*function tylkoLiczby(evt,id)
{
    try{
        var charCode = (evt.which) ? evt.which : event.keyCode;

        if(charCode==46){
            var txt=document.getElementById(id).value;
            if(txt.split('.').length<2){

                return true;
            }
        }
        if (charCode < 48 || charCode > 57)
            return false;

        return true;
    }catch(w){
        alert(w);
    }
}*/
function jedenOperator(op, ) {
    if(document.Licznik.liczbaA.value != ''){
        document.Licznik.licznikOperator.value = exp + op;
        document.Licznik.licznikOperatorUkryty.value = exp + op;

        if (op =="√" || op =='x2'){
            document.getElementById("liczbaB").disabled = true;
            document.Licznik.liczbaB.value = '';
        }
        else {document.getElementById("liczbaB").disabled = false;}
       }
}

function obliczaj(){
    exp = document.Licznik.LicznikTekst.value;
    if(exp){
        document.Licznik.LicznikTekst.value = eval(exp);

    }
}