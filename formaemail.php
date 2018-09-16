<html>

<head>
    <meta charset="UTF-8" />
    <title>efektywny-niemiecki.pl/tlumaczenia</title>
    <link href='https://fonts.googleapis.com/css?family=Squada One' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/topbarjs.css">
    <link rel="stylesheet" type="text/css" href="css/logo.css">
    <link rel="stylesheet" type="text/css" href="css/formaemail.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

</head>

<body>
    <!--TOP LOGO-->
    <?php 
    require("top_menu.php");
?>
    <?php
	$send = false; 
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';


	// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
function mailerXX($imie, $nazwisko,$email,$tel,$wiadomosc)
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
	$mail->addAddress("matteuzs@o2.pl");
	$mail->isHTML(true);

	$mail->Subject = "Nowa prosba o przetlumaczenie ze strony efektywny-niemiecki.pl " . (string)$_GET["jezyk"] . " " . (string)$_POST["wybor"];
	$mail->Body = "Otrzymales maila od " . (string)$imie . " ". (string)$nazwisko . "<br>email: ". (string)$email . "<br>tel: ". (string)$tel . "<br><p>". (string)$wiadomosc . "</p>";
	$mail->AltBody = "Otrzymales maila od " . (string)$imie . " " . (string)$nazwisko . " email: " . (string)$email . " tel: ". (string)$tel . " o tresci " .(string)$wiadomosc ." ";
	if(!$mail->send()) 
	{
		//echo "<p>natrafilismy na problemy podczas wysylania wiadomosci</p>";
		return false;
	} 
	else 
	{
	//echo "e-mail do nas dotarl zajmiemy sie nim bardzo szybko";
	return true;
	}
}
if(isset($_POST['submit']))
{
	if(mailerXX($_POST["imie"],$_POST["nazwisko"],$_POST["email"],$_POST["tel"],$_POST["tresc"]))
	{
		echo '<script language="javascript">';
		echo 'alert("wiadomosc wyslana")';
		echo '</script>';
		
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("trwaja teraz prace nad nasza strona prosimy napisz maila")';
		echo '</script>';
	}	
}

?>
    <!--TOP-->
    <!--tresc-->
    <div style="margin-top:2%;" class="glowny">
        <h2 class="napis">Napisz do nas w swojej sprawie odpowiemy najszybciej jak sie uda</h2>
        <form method="post" enctype="multipart/form-data">
            <span style="color:white;">Imie:</span><br>
            <input type="text" name="imie" required><br><br>
            <span style="color:white;">Nazwisko:</span><br>
            <input type="text" name="nazwisko" required><br><br>
            <span style="color:white;">e-mail:</span><br>
            <input type="text" name="email" required><br><br>
            <span style="color:white;">tel:</span><br>
            <input type="text" name="tel" required><br><br>
            <span style="color:white;">O co chodzi:</span><br>
            <textarea name="tresc" cols="40" rows="5" required></textarea>
            <br>
            <select name="wybor">
                <option value="na polski">
                    <?php 
				if($_GET["jezyk"] == "de"){ 
				echo "Z niemieckiego";
				}
				if($_GET["jezyk"] == "ang"){
					echo "Z angielskiego";
				}
				if($_GET["jezyk"] != 'ang'	&& $_GET["jezyk"] != 'de'){
					 echo "";
				};			 
										 ?>
                </option>
                <option value="z polskiego">
                    <?php 
				if($_GET["jezyk"] == "de"){ 
				echo "Na niemiecki";
				}
				if($_GET["jezyk"] == "ang"){
					echo "Na angielski";
				}
				if($_GET["jezyk"] != 'ang'	&& $_GET["jezyk"] != 'de'){
					 echo "";
				};			 
										 ?>
                </option>
            </select><br><br>
            <input type="submit" name="submit" value="Wyślij"><br>
        </form>
    </div>
    <br><br><br>
    <!--tresc-->
    <?php 
    require("bottom_bar.php");
?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>

    <!-- Use downloaded version of Bootstrap -->
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>