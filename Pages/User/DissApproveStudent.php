<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);

include_once '../../Shared/connection.php';
$UserName =  $_GET["UserName"];
$sql = "DELETE FROM korisnik WHERE  UserName='$UserName'";



if($con->query($sql)){
    echo"<script>alert('Korisnik je uspešno obrisan')</script>";
    echo '<script>window.location.href="./UserProfile.php";</script>';

}else{
    echo '<script>alert("Nije uspelo brisanje korisnika!")</script>';
    echo '<script>window.location.href="./UserProfile.php";</script>';

}
?>