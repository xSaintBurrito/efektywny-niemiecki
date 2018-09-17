<html>

<head>
    <meta charset="UTF-8" />
    <title>efektywny-niemiecki.pl/poczatkujacy</title>
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1990 12:00:00 GMT" />
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>

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
        <div class="jumbotron" style="background-color:black;color:white;">
                                    <h2>Twoj Koszyk</h2>
                                    <div id="paypal-button-container"></div>

    <script>
        paypal.Button.render({

            env: 'sandbox', // sandbox | production

            // PayPal Client IDs - replace with your own
            // Create a PayPal app: https://developer.paypal.com/developer/applications/create
            client: {
                sandbox:    'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
                production: '<insert production client id>'
            },

            // Show the buyer a 'Pay Now' button in the checkout flow
            commit: true,

            // payment() is called when the button is clicked
            payment: function(data, actions) {

                // Make a call to the REST api to create the payment
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: { total: podsumowanie_platnosci(poczatkujacy_sklep), currency: 'PLN' }
                            }
                        ]
                    }
                });
            },

            onAuthorize: function(data, actions) {

                return actions.payment.execute().then(function() {
                    var liczba_losowa =  <?php $var=rand(999999,999999999);
                    $nazwa_pliku = "file" . $var.".txt";
                    $file = fopen($nazwa_pliku,'a');
                    fwrite($file,$var);
                    fclose($file);
                    echo $var;?>;
                var nazwa = "transakcja_udana.php?naglowek=" + liczba_losowa;
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

                }, '#paypal-button-container');

    </script>
                                    
 <p id="podsumowanie"></p>
 <br>
</div>
       <hr>
        
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
    <?php require("bottom_bar.php");?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>