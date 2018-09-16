sklep_produkty= new Array();
$(document).ready(function(){
    $("#czasownikPrzycisk").click(function(){
        if($("#czasowniki").is(":hidden") == true){$("#czasowniki").show(200)}
        else{$("#czasowniki").hide(200)}
    });
    $("#czasownikiNIEPrzycisk").click(function(){
        if($("#czasownikiNIE").is(":hidden") == true){ $("#czasownikiNIE").show(200)}
        else($("#czasownikiNIE").hide(200))
    });

    $("#rzeczownikiPrzycisk").click(function(){

        if($("#rzeczowniki").is(":hidden")){ $("#rzeczowniki").show(200)}
        else{$("#rzeczowniki").hide(200)}
    });
 
 });

 function dodaj_do_koszyka(nazwa, cena,array){
    alert("eloo");    
        array.push(nazwa);
        array.push(cena);
 }


 function elo(tablica)
 {
    var suma = 0;
    var arrayLength = tablica.length;
    for(var i = 0; i < arrayLength;i=i+2)
    {
            suma += tablica[i+1];
    }
    alert(suma);
    alert(arrayLength);
 }
 function ukatywnij_usun(ktory){
     alert("disabled");
     var nazwa = "zakup" + ktory;
     var nazwa_usun = "usun" + ktory;
     alert(nazwa);
     document.getElementById(nazwa).disabled = true;
     document.getElementById(nazwa_usun).disabled = false;
}
function usun_z_sklepu(ktory,tablia_z_zakupami){
    var nazwa_dodaj = "zakup" + ktory;
    var nazwa_usun = "usun" + ktory;
    var tablia_z_zakupami_dlugosc = tablia_z_zakupami.length;
    for(var i = 0; i < tablia_z_zakupami_dlugosc; i+=2){
        alert("i " + i);
        alert("tablia_z_zakupami[i] " + tablia_z_zakupami[i]);
        if(tablia_z_zakupami[i] == ktory){
            tablia_z_zakupami.splice(i,2);
            break;
        }
    }
    document.getElementById(nazwa_usun).disabled = true;
    document.getElementById(nazwa_dodaj).disabled =false;
}



 function podsumowanie_platnosci(tablica){
     var ilosc = tablica.length;
     if(ilosc ==0)
     return 0;
     var suma=0;
     for(var i = 0; i < ilosc; i=i+2){
        suma += tablica[i+1];
     }
     return suma;
 }

 function podsumowanie_platnosci_tekst(tablica){
     var podsumowanie = "<br>";
     var ilosc0 = 0;
     var ilosc = tablica.length;
     for(var i = 0; i < ilosc;i=i+2){
       // podsumowanie += "<hr>" 
        if(tablica[i] == 0){podsumowanie += "czasowniki regularne " + " - " + tablica[i+1] + "zł";}
        if(tablica[i] == 1){podsumowanie += "czasowniki nieregularne " + " - " + tablica[i+1] + "zł";}
        if(tablica[i] == 2){podsumowanie += "rzeczowniki " + " - " + tablica[i+1] + "zł";}
          
        podsumowanie += "<hr>"
     }
     podsumowanie += "<hr> SUMA - " +  podsumowanie_platnosci(tablica) + "zł";   
     document.getElementById("podsumowanie").innerHTML=podsumowanie;
     return podsumowanie;
 }

 function kreator_div(nazwa,cena){
     var kreator= "<div class='well well-lg'><h2>" + nazwa +" - " + cena +"zł</h2></div>";
              return kreator;                      
 }


 function

