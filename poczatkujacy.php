<html>

<head>
    <meta charset="UTF-8" />
    <title>efektywny-niemiecki.pl/tlumaczenia</title>
    <link href='https://fonts.googleapis.com/css?family=Squada One' rel='stylesheet' />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/topbarjs.css" />
    <link rel="stylesheet" type="text/css" href="css/logo.css" />
    <link rel="stylesheet" type="text/css" href="css/poczatkujacy.css" />
    <link href="/css/poczatkujacy.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <script src="js/jQuery.js"></script>
    <script src="js/poczatkujacy.js"></script>

</head>

<body>
    <script>
        sessionStorage.clear();
        var poczatkujacy_sklep = new Array();
    </script>
    <script>
     function idk(){
        var costam =  <?php $var=rand(999999,9999999);
                $nazwa_pliku = "file" . $var.".txt";
                $file = fopen($nazwa_pliku,'a');
                fwrite($file,$var);
                fclose($file);
                //chmod($file,0777);
                                echo $var;?>;
        alert(costam);
        var nazwa = "transakcja_udana.php?naglowek=" + costam;
        var poziom = "0"; //poczatkujacy
        var ilosc_kursow = 0;
        for(var i = 0; i < poczatkujacy_sklep.length;i=i+2){
            sessionStorage.setItem("produkt" + ilosc_kursow ,poczatkujacy_sklep[i]);
            ilosc_kursow++;
        }
        sessionStorage.setItem('ilosc_kursow', ilosc_kursow);
        sessionStorage.setItem('poziom', 0);
        window.location.href = nazwa;
}
    </script>
    <!--TOP LOGO-->
    <?php 
    require("top_menu.php");
    $produkty = array();
    $ilosc_produktow =10;
    $produkty = array_fill(0, $ilosc_produktow,0);
    
?>

<br>
    <!--TOP-->
    <div class="container text-center" width="100%">
        <div class="page-header">
            <h1 style="font-size:45px;">Kursy dla początkujacych</h1>
        </div>
        <img src="resources/kurs.jpg" style="max-height:200px;"> </img><br><br>
        <div class="jumbotron">
        <h2>Na dole strony umieściliśmy link do płatności<br>od razu po zaksięgowaniu wpłaty wysyłamy państwu wybrane kursy e-mailem</h2>
        <p style="color:grey;">e-mail jaki panstwo nam podają nie jest w zaden sposób przechowywany na naszych serwerach</p>
        </div>        <hr>
        
    <button class="line" id="czasownikPrzycisk" > czasowniki</button>
                                    <div class="tresc" id="czasowniki">
                                        <br>
                                        <iframe width=80%; height=60%; src="https://www.youtube.com/embed/gmMtIPc_noE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    <br><br>
                                    <div class="well well-lg"><h2><span class="glyphicon glyphicon-certificate"></span> Rzeczowniki policzalne 20zł</h2></div>
                                    <button class="btn btn-lg btn-danger" id="zakup0" onclick="dodaj_do_koszyka(0,20,poczatkujacy_sklep);ukatywnij_usun(0);podsumowanie_platnosci(poczatkujacy_sklep);podsumowanie_platnosci_tekst(poczatkujacy_sklep);"><span class="glyphicon glyphicon-shopping-cart"></span> Dodaj do koszyka</button>
                                    <button class="btn btn-lg btn-warning" id="usun0" onclick="usun_z_sklepu(0,poczatkujacy_sklep);podsumowanie_platnosci(poczatkujacy_sklep);podsumowanie_platnosci_tekst(poczatkujacy_sklep);NANAx(10);" disabled="true"><span class="glyphicon glyphicon-minus-sign"></span> Usuń z koszyka</button>
                                    <button class="btn btn-md btn-warning" onclick="idk();"><span class="glyphicon glyphicon-minus-sign"></span> przekierowanko</button>
                                    
                                    </div><br><br>
    <button class="line" id="czasownikiNIEPrzycisk"> czasowniki nieregularne</button>
                                    <div class="tresc" id="czasownikiNIE">
                                        <br>
                                        <iframe width=80%; height=60%; src="https://www.youtube.com/embed/gmMtIPc_noE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    <br><br>
                                    <div class="well well-lg"><h2><span class="glyphicon glyphicon-certificate"></span> cena za caly kurs  20zł</h2></div>
                                    <button class="btn btn-md btn-danger" id="zakup1" onclick="dodaj_do_koszyka(1,20,poczatkujacy_sklep);ukatywnij_usun(1);podsumowanie_platnosci(poczatkujacy_sklep);podsumowanie_platnosci_tekst(poczatkujacy_sklep);"><span class="glyphicon glyphicon-shopping-cart"></span> Dodaj do koszyka</button>
                                    <button class="btn btn-md btn-warning" id="usun1" onclick="usun_z_sklepu(1,poczatkujacy_sklep);podsumowanie_platnosci(poczatkujacy_sklep);podsumowanie_platnosci_tekst(poczatkujacy_sklep);" disabled="true"><span class="glyphicon glyphicon-minus-sign"></span> Usuń z koszyka</button>
                                    </div><br><br>
    
    <button class="line" id="rzeczownikiPrzycisk"> rzeczowniki policzalne</button>
                                    <div class="tresc" id="rzeczowniki">
                                        <br>
                                        <iframe width=80%; height=60%; src="https://www.youtube.com/embed/gmMtIPc_noE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    <br><br>
                                    <div class="well well-lg"><h2><span class="glyphicon glyphicon-certificate"></span> cena za caly kurs  20zł</h2></div>
                                    <button class="btn btn-md btn-danger" id="zakup2" onclick="dodaj_do_koszyka(2,20,poczatkujacy_sklep);ukatywnij_usun(2);podsumowanie_platnosci(poczatkujacy_sklep);podsumowanie_platnosci_tekst(poczatkujacy_sklep);"><span class="glyphicon glyphicon-shopping-cart"></span> Dodaj do koszyka</button>
                                    <button class="btn btn-md btn-warning" id="usun2" onclick="usun_z_sklepu(2,poczatkujacy_sklep);podsumowanie_platnosci(poczatkujacy_sklep);podsumowanie_platnosci_tekst(poczatkujacy_sklep);" disabled="true"><span class="glyphicon glyphicon-minus-sign"></span> Usuń z koszyka</button>
                                    
                                   
                                    </div><br><br>
                                    <div class="jumbotron" style="background-color:black;color:white;">
                                    <h2>Twoj Koszyk</h2>
                                    <div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
paypal.Button.render({
  env: 'sandbox',
  client: {
    sandbox: 'AQfSmmCM87n8iibRYjTuXix2LUU0mXjU7KzIYs80Zq0EB7DW5llgf6vdTa2AQr53cvxcRgXsuDtEij4j'
  },
  payment: function (data, actions) {
    
    return actions.payment.create({
      transactions: [{
        amount: {
          total: podsumowanie_platnosci(poczatkujacy_sklep),
          currency: 'PLN'
        }
      }]
    });
  },
  onAuthorize: function (data, actions) {
    return actions.payment.execute()
      .then(function () {
        var liczba =  <?php $var=rand(999999,9999999);
                $nazwa_pliku = "file" . $var.".txt";
                $file = fopen($nazwa_pliku,'a');
                fwrite($file,$var);
                fclose($file);
                chmod($file,0777);
                echo $var;?>;
        alert(liczba);
        var nazwa = "transakcja_udana.php?naglowek=" + liczba;
        var poziom = "0"; //poczatkujacy
        var ilosc_kursow = 0;
        for(var i = 0; i < poczatkujacy_sklep.length;i=i+2){
            sessionStorage.setItem("produkt" + ilosc_kursow ,poczatkujacy_sklep[i]);
            ilosc_kursow++;
        }
        sessionStorage.setItem('ilosc_kursow', ilosc_kursow);
        sessionStorage.setItem('poziom', 0);
        window.location.href = nazwa;
    });
  }
}, '#paypal-button');
</script>
 <p id="podsumowanie"></p><br>
         <!--Currency Converter widget by FreeCurrencyRates.com -->

<div id='gcw_mainFyB1Kx0XQ' class='gcw_mainFyB1Kx0XQ'></div>
<a id='gcw_siteFyB1Kx0XQ' href='https://freecurrencyrates.com/en/'>FreeCurrencyRates.com</a>
<script>function reloadFyB1Kx0XQ(){ var sc = document.getElementById('scFyB1Kx0XQ');if (sc) sc.parentNode.removeChild(sc);sc = document.createElement('script');sc.type = 'text/javascript';sc.charset = 'UTF-8';sc.async = true;sc.id='scFyB1Kx0XQ';sc.src = 'https://freecurrencyrates.com/en/widget-horizontal?iso=PLNEURUSD&df=2&p=FyB1Kx0XQ&v=i&source=fcr&width=220&width_title=110&firstrowvalue=20.00&thm=666666,000000,333333,333333,FFFFFF,666666,555555,ffffff,ffffff&title=Na%20naszej%20stronie%20obowi%C4%85zuj%C4%85%20takie%20kursy&tzo=-120';var div = document.getElementById('gcw_mainFyB1Kx0XQ');div.parentNode.insertBefore(sc, div);} reloadFyB1Kx0XQ(); </script>
<!-- put custom styles here: .gcw_mainFyB1Kx0XQ{}, .gcw_headerFyB1Kx0XQ{}, .gcw_ratesFyB1Kx0XQ{}, .gcw_sourceFyB1Kx0XQ{} -->
<!--End of Currency Converter widget by FreeCurrencyRates.com -->
                                   
</div>
    </div>
    <?php 
    require("bottom_bar.php");
?>
        <!--tresc-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
        </script>

        <!-- Use downloaded version of Bootstrap -->
        <script src="js/bootstrap.min.js">
        </script>
</body>

</html>