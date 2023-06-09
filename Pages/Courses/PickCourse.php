<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

include_once '../../Shared/connection.php';
include '../../Components/Navbar/Navbar.php';

$tip = $_SESSION["tip"];
$KursId = $_GET["IdKursa"];
if ($tip == "korisnik") {
    if (isset($_SESSION["Id"]) === false) {
        echo '<script>window.location.href="../../index.php";</script>';
    } else {
        $UserName = $_SESSION["UserName"];
        $check = "SELECT * FROM userkurs WHERE userkurs.KorisnikId = '$UserName' AND userkurs.KursId= $KursId";
        $resultOf = $con->query($check);
        if ($resultOf->num_rows > 0) {
            echo "<div class='message-wrapper'>";

            echo '<script>alert("Već ste odabrali ovaj kurs.")</script>';
            echo '<script>window.location.href="./CreateCourses/CourseDetails.php?IdKursa=' . $row['Id']  . '";</script>';
            echo "</div>";

            return;
        }
        $sql = "INSERT INTO userkurs (KursId,KorisnikId) VALUES('$KursId','$UserName')";

        if ($con->query($sql) == true) {
            echo "<div class='message-wrapper'>";

            echo "<h1 class='textSuccess'>Uspešno ste se upisali na kurs!</h1>";
            echo "<a class='coursebutton' href='./CreateCourses/CourseDetails.php?IdKursa=" . $KursId . "'>Započnite kurs!</a>";
            echo "</div>";
        }
    }
} else {
    echo "<div class='message-wrapper'>";
    echo "<h1 class='textSuccess'>Idite na kurs</h1>";
    echo "<a class='coursebutton' href='./CreateCourses/CourseDetails.php?IdKursa=" . $KursId . "'>Započnite kurs</a>";
    echo "</div>";
}


echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

include '../../Components/Footer/footer.php';

?>

<style>
    .textSuccess {
        color: green;
        text-align: center;
    }

    .coursebutton {
        display: block;
        margin: auto;
        color: white;
        text-align: center;
        text-decoration: none;
        text-decoration-style: none;
        font-weight: bold;
        padding: 10px;
        border-radius: 12px;
        background-color: green;
        margin-bottom: 50px !important;
        width: 200px;
        margin-top: 100px;
        transition: background 0.4s ease-in-out;

    }

    .message-wrapper {
        background-color: white;
        border: 4px dashed #C5DE96;
        padding: 25px;
        border-radius: 12px;
        width: 700px;
        margin: auto;
        align-items: center;
        margin-bottom: 50px;
        margin-top: 100px;
    }

    .coursebutton:hover {
        background-color: #000001;
    }
</style>