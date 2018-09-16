<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mailx = $_GET['mail'];
$numer = $_GET['numer'];
$poziom = $_GET['poziom'];

$mail = new PHPMailer;
$mail->SMTPDebug = false;                             
$mail->isSMTP();            
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;                          
$mail->Username = "wasylko.0@gmail.com";                 
$mail->Password = "9nark0ty7i";                           
$mail->SMTPSecure = "tls";                           
$mail->Port = 587;                                   
$mail->From = "wasylko.0@gmail.com";
$mail->FromName = "efektywny-niemiecki.pl";
$mail->addAddress($mailx);
$mail->isHTML(true);
$istnieje = 0;
if($poziom == 0) //poczatkujacy//
{
    if(file_exists ("kursy/poczatkujacy/plik$numer.txt")){
        $istnieje++;
        $mail->addAttachment("kursy/poczatkujacy/plik$numer.txt");
    }
    if(file_exists ("kursy/poczatkujacy/plik$numer.mp3")){
        $istnieje++;
        $mail->addAttachment("kursy/poczatkujacy/plik$numer.mp3");
    }
    if(file_exists ("kursy/poczatkujacy/plik$numer.jpg")){
        $istnieje++;
        $mail->addAttachment("kursy/poczatkujacy/plik$numer.jpg");
    }
}
if($poziom == 1) // sredniowzawasowany
{
    if(file_exists ("kursy/sredni/plik$numer.jpg")){
        $istnieje=1;
        $mail->addAttachment("kursy/sredni/plik$numer.jpg");
    }
}
if($poziom == 2) // trudny
{
    if(file_exists ("kursy/wysoki/plik$numer.jpg")){
        $istnieje=1;
        $mail->addAttachment("kursy/wysoki/plik$numer.jpg");
    }
}

$mail->Subject = "$istnieje kurs nr $numer od efektywny-niemiecki.pl";
$mail->Body = "<h2>Wysylamy kurs w zalaczniku</h2><br> <p>mma nadzieje ze sie podoba</p> twoj nr to $numer poziom to $poziom zalacznik to $zalacznik";
$mail->AltBody = "Wysylamy kurs w zalaczniku mam nadzieje ze sie podoba twoj nr to $numer";
if($mail->send()) 
{
    echo("tak wyslane na $mailx $numer");
} 
else 
{
    echo("chuj $mailx $numer");
}
?>