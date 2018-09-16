<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
.loader {
    border: 16px  black; 
    border-top: 16px solid red; 
    border-bottom:16px solid black;
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>

<script>
alert("<?php echo $_GET['mail']; ?>")
    var tablica_kursow = new Array();
    var liczba_kursow = sessionStorage.getItem("ilosc_kursow");
    //document.getElementById("p2").innerHTML = "do wyslania jest " + liczba_kursow;
    var procesowany_kurs =0;
    for(var c = 0; c < liczba_kursow; c++ ){
        tablica_kursow.push(sessionStorage.getItem("produkt" + c));
    }
    for(var i =0; i< tablica_kursow.length;i++)
    {
            
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                procesowany_kurs++;
                document.getElementById("p1").innerHTML = document.getElementById("p1").innerHTML + " twoja odp to :" + this.responseText + "<br>";
                document.getElementById("p2").innerHTML = procesowany_kurs + "/" +liczba_kursow;
                if(procesowany_kurs == liczba_kursow){
                document.getElementById("p2").innerHTML = "wszystko wyslane";
                sessionStorage.clear();
                document.getElementById("laduje").style.width = "0px";
                document.getElementById("laduje").style.height = "0px";
                }

            }
        };
        xmlhttp.open("GET", "wysylamaila.php?mail=matteuzs@o2.pl&numer=" + tablica_kursow[i] +"&poziom=" + sessionStorage.getItem("poziom")+"&mail=" + "<?php echo $_GET['mail']; ?>"  , true);
        xmlhttp.send();
    }
    

</script>
<body>
<div class="container">
    <div class="page-header">
    <h1>Wysyłamy Ci właśnie e-maila z kursami:</h1>
    <p>Poczekaj na zakończenie procesu</p>
    </div>
            <div class="jumbotron text-center">
            <div id="laduje" class="loader"></div>
            <p id="p1"></p>
            </div>
            <div class="jumbotron">
            <p id="p2">ŁADUJEMY KURSY</p>
            </div>
            <div class="jumbotron text-center" >
            <a href="index.php" style="btn btn-success">przejdź do strony głównej</a>
            </div>
    </div>
</div>
<script>
var usuwanie_plikow = new XMLHttpRequest();
                usuwanie_plikow.onreadystatechange = function() {};
                usuwanie_plikow.open("GET","usuwapliki.php?nazwa_pliku=" <?php echo $_GET['plik'];?>,true);
                alert(usuwanie_plikow.responseText);
                usuwanie_plikow.send();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>

    <!-- Use downloaded version of Bootstrap -->
    <script src="js/bootstrap.min.js">
</body>
</html>