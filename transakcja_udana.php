<html>

<head>
    <meta charset="UTF-8" />
    <title>efektywny-niemiecki.pl/tlumaczenia</title>
    <link href='https://fonts.googleapis.com/css?family=Squada One' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/topbarjs.css">
    <link rel="stylesheet" type="text/css" href="css/slide.css">
    <link rel="stylesheet" type="text/css" href="css/logo.css">
    <link rel="stylesheet" type="text/css" href="css/tlumaczenia.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <script src="js/jQuery.js">
    </script>
    <script src="js/main.js">
    </script>
    <script src="js/topbar.js">
    </script>
    <script src="js/slide.js">
    </script>
</head>
<script>
<body>
    <!--TOP LOGO-->
    <?php 
    require("top_menu.php")
?>

<?php
$skonczone = 0;
$dostep = false;
error_reporting(0);
$nazwa_pliku = "file" . $_GET["naglowek"].".txt";
if(fopen($nazwa_pliku,"r"))
{
$plik = fopen($nazwa_pliku,"r");
$zmienna = fread($plik,filesize($nazwa_pliku));
if($zmienna==$_GET["naglowek"])
$dostep = true;
}
fclose($plik);
if($dostep == true)
{
    echo "<div class='alert alert-success alert-lg' role='alert'>";
    echo "<h1>Dostęp</h1>";
    echo "</div>";
}
else
{
    echo "<div class='alert alert-success alert-lg' role='alert'>";
    echo "<h1>Brak dostępu</h1>";
    echo "<a href='index.php'>powróć na stronę glównąś</a>";
    echo "</div>";
}

	$send = false; 
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

function mailer($email)
{
	$mail = new PHPMailer;
	$mail->SMTPDebug = false;  // 3 wczesnije                             
	$mail->isSMTP();            
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;                          
	$mail->Username = "wasylko.0@gmail.com";                 
	$mail->Password = "system02";                           
	$mail->SMTPSecure = "tls";                           
	$mail->Port = 587;                                   
	$mail->From = "wasylko.0@gmail.com";
	$mail->FromName = "Mateusz W";
	$mail->addAddress((string)$email);
	$mail->isHTML(true);

	$mail->Subject = "no-reply od efektywny-niemiecki.pl";
	$mail->Body = "<h2>Otrzymalismy platnosc i wszystko jest w porzadku wyslemy tobie kurs mailem</h2><br> <p>w razie problemow napisz do nas</p>";
	$mail->AltBody = "Otrzymalismy platnosc i wszystko jest w porzadku wyslemy tobie kurs mailem w razie problemow napisz do nas";
	if($mail->send()) 
	{
		return false;
	} 
	else 
	{
        return true;
	}
}
if(isset($_POST['wyslij']) and $dostep==true)
{
	if(mailer($_POST["email"]))
	{
        unlink($nazwa_pliku);
        echo"<script>";
        echo "alert('mail zostal juz wysalny');";
        echo ("window.location.href = procesuje.php?mail=" .$_POST["email"]);
        echo "</script>";
        $dostep= false;
        $skonczone =1;
    }
	else
	{
        echo"<div class='alert alert-danger' role='alert'>";
        echo "sproboj ponownie jutro";
        echo "<a href='index.php'>powroc na strone glowna</a>";
        echo "</div>";
    }	
}
?>

        <div class="container">
        <div class="jumbotron">
        <p style="color:black;">Pierwszy wykaz rodzajów operacji przetwarzania wymagających oceny skutków opublikowany w MP
24 sierpnia 2018 r. w Monitorze Polskim został ogłoszony Komunikat Prezesa Urzędu Ochrony Danych Osobowych z dnia 17 sierpnia 2018 r. w sprawie wykazu rodzajów operacji przetwarzania danych osobowych wymagających oceny skutków przetwarzania dla ich ochrony.
        </p>
        <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">podaj nam adres e-mail, na który mamy wysłać kursy:</label>
            <input type="email" class="form-control" name="email" require>
             </div>
        <button type="submit" class="btn btn-primary btn-lg" id="potwierdzenie" name="wyslij">Wyślij</button>
        <a href="regulamin.php" target="_blank">Regulamin</a>
        </form>
        </div>
</div>
    
<script>
if("<?php echo $skonczone;?>" == "1"){
    window.location.href = 'procesuje.php?mail=' + "<?php echo ($_POST["email"]); ?>";
}
</script>
    <!--content-->
    <?php require("bottom_bar.php");?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>