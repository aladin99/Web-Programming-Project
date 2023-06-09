<?php
include 'Mailer/class.phpmailer.php';
include 'Mailer/class.smtp.php';
error_reporting(E_ERROR | E_WARNING | E_PARSE);

function sendmail($to, $nameto, $subject, $message, $altmess) {
    $from  = "aladin.dunp@gmail.com";
    $namefrom = "Aladin";
    $mail = new PHPMailer();
    $mail->isSMTP();   // by SMTP
    $mail->isHTML();   // by HTML
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth   = "true";   // user and password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->Username   = $from;
    $mail->Password   = "iyohcltdauolrlgu";
    $mail->Subject  = $subject;
    $mail->setFrom($from);   // From (origin)
    $mail->Body = $message;
    $mail->addAddress($to);
    return $mail->send();
} 
function senfVerificationMail($reciever,$Code,$NameOfUser){
$to="$reciever";
$message = "<div class='card' style=' border: 4px dashed #C5DE96;width: 340px; height: 300px; background-color: white; overflow: hidden; border-radius: 12px;'>
        <div class='card_header' style='width: 100%; height: 50px; background-color: #C5DE96; padding-left: 5px;padding-top: 2px;'>
        <div class='logo' style='margin-top: 5px; width: 85px; background-color: white; padding: 7px; border-radius: 15px;display:flex; justify-content: center;
        align-items: center;'><b><span style='color: black;'>eCooking</b></div>

        </div>
        <div class='card_content' style='padding: 10px;'>
        <h4>U prilogu je Vaš kod za verifikaciju:</h4>
        <p><b>'  $Code   '<b/></p>
        <a href='https://e-coooking.000webhostapp.com/WebProgramiranje/Pages/InsertCode.php?UserName=$NameOfUser'>Kliknite na link i unesite kod u polje.</a>
        </div>
    </div>";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <aladin.dunp@gmail.com' . "\r\n";
    $headers .= 'Cc: ' . $to . '' . "\r\n";
    $emailSent = sendmail($to, "Radi", "Potvrda naloga", $message,  $headers);
    if ($emailSent) {
     echo'<script>alert("Email je uspešno poslat!")</script>';   
     return;
    } else {
        echo'<script>alert("Email nije uspešno poslat!")</script>';   
    }
}

function PasswordReset($reciever,$Sifra,$NameOfUser){
    $to="$reciever";
    $message = "<div class='card' style=' border: 4px dashed #C5DE96;width: 340px; height: 300px; background-color: white; overflow: hidden; border-radius: 15px;'>
            <div class='card_header' style='width: 100%; height: 50px; background-color: #C5DE96; padding-left: 5px;padding-top: 2px;'>
            <div class='logo' style='margin-top: 5px; width: 85px; background-color: white; padding: 7px; border-radius: 15px;display:flex; justify-content: center;
            align-items: center;'><b><span style='color: black;'>eCooking</b></div>
    
            </div>
            <div class='card_content' style='padding: 10px;'>
            <h4>U prilogu je Vaša nova šifra: </h4>
            <p>'$Sifra'</p>
            <p>Poštovani, uspešno ste resetovali šifru, sada Vam šaljemo novu šifru.</p>
            <a href='https://e-coooking.000webhostapp.com/WebProgramiranje/Components/SignIn/LoginForm.php'>Logovanje</a>
            </div>
        </div>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
        // More headers
        $headers .= 'From: <aladin.dunp@gmail.com' . "\r\n";
        $headers .= 'Cc: ' . $to . '' . "\r\n";
        $emailSent = sendmail($to, "Radi", "Resetovanje lozinke", $message,  $headers);
        if ($emailSent) {
         echo'<script>alert("Reset za lozinku je uspešno poslat!")</script>';   
        } else {
            echo'<script>alert("Reset za lozinku nije uspešno poslat!")</script>';   
        }
    }
