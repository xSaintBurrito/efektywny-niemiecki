<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1990 12:00:00 GMT" />
    <title>efektywny-niemiecki</title>
    <link href='https://fonts.googleapis.com/css?family=Squada One' rel='stylesheet'>
   <link rel="stylesheet" type="text/css" href="css/main.css"> 
    <link rel="stylesheet" type="text/css" href="css/topbarjs.css">
    <link rel="stylesheet" type="text/css" href="css/slide.css">
     <link rel="stylesheet" type="text/css" href="css/logo.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Squada One' rel='stylesheet'>

    <script src="js/jQuery.js">
    </script>
    <script src="js/main.js">
    </script>
    <script src="js/topbar.js">
    </script>
    <script src="js/slide.js">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--tu jest logo strony-->
    <link rel="Shortcut icon" href="img1.jpg" />
</head>

<body onload="currentSlide(1);">

    <script>
        setInterval(function() {
            showSlide();
        }, 5000);
    </script>
    <!--TOP LOGO-->
    <?php 
    require("top_menu.php");
?>
<style>
    a.slide{
        padding:0px 0px;
    }
</style>
<br><br>
    <!--TOP-->
    <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <a  class="slide" href="poczatkujacy.php"><img class="d-block w-100" src="kursyX.png" alt="Second slide"></a>
        <div class="carousel-caption d-none d-md-block">
            <h3></h3>
            <p></p>
        </div>
        </div>
        <div class="carousel-item">
        <a  class="slide" href="tlumaczenia.php"><img class="d-block w-100" src="tlumaczenieX.png" alt="Third slide"></a>
        <div class="carousel-caption d-none d-md-block text-center">
          
        </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Poprzedni</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Kolejny</span>
    </a>
</div>
</div>
<br><br>
    <?php 
    require("bottom_bar.php");
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>

    <!-- Use downloaded version of Bootstrap -->
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>