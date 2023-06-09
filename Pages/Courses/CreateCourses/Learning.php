<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include '../../../Components/Navbar/Navbar.php';
include_once '../../../Shared/connection.php';

$UserName=$_SESSION["UserName"];
$sql = "SELECT *
FROM kurs
WHERE kurs.Created= true AND kurs.Id IN (
  SELECT userkurs.KursId
  FROM userkurs
  WHERE userkurs.KorisnikId = '$UserName' AND userkurs.Completed = 0
)";



$result  = $con->query($sql);
echo"</br>";
echo "<div>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="course-card">';
        echo '<h2 class="course-name"> ' . $row["Naziv"] . '</h2>';
        echo '<p class="course-description">Deskripcija: ' . $row["Opis"] . '</p>';
        echo "<a class='btn' href='CourseDetails.php?IdKursa=" . $row["Id"] . "' >Nastavite</a>";
        echo '</div>';
        echo"</br>";
    }
} else
echo "
<div class='glavni'><div class='message-wrapper '><h1 class='centerText marginBottom'>Niste započeli nijedan kurs!</h1></div></div>";


echo "</div>";
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo"<br/>";
include '../../../Components/Footer/footer.php';

?>
<style>

    .glavni {
        width: 100%;
        height: 800px;
        overflow-x: hidden;
        background-image: url('../../../Assets/food.jpg');
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }


    .Button-Enroll {
        padding: 15px;
        background-color: green;

    }

    .message-wrapper {
        background-color: white;
        padding: 25px;
        border-radius: 12px;
        width: 800px;
        margin: auto;
        align-items: center;
        text-align: center;
        margin-bottom: 50px;
        margin-top: 100px;
        border: 4px dashed #C5DE96;
        
    }
    .course-card {
        width: 400px;
        height: auto;
        padding: 30px;
        background-color: white;
        text-align: center;
        border-radius: 10px;
        border: 4px dashed #C5DE96;
        margin: 30px auto;
    }

    .course-name {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .course-description {
        font-size: 18px;
        text-align: left;
        margin: 0;
        padding: 10px;
        border-radius: 10px;
        font-style: italic;


    }

    .marginBottom {
        margin-bottom: 100px !important;
    }

    .centerText {
        text-align: center;
        width: 700px;
        margin: auto;
        margin-top: 100px;

    }

    .text-danger {
        color: red;
        text-decoration: none;
        text-decoration-style: none;
        font-weight: bold;
        padding: 10px;
        border-radius: 5px;
        background-color: lightgoldenrodyellow;
    }

    .text-warning {
        color: black;
    }

    .margina {
        margin-top: 30px;
        margin-bottom: 30px;
    }


    .btn {
        display: flex;
        font-weight: bold;
        font-size: 14px;
        color: #fff;
        background-color: green;
        padding: 10px 30px;
        border-radius: 12px;
        display: flex;
        flex-direction: row;
        align-items: center;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        margin:  5% auto;
        justify-content: center;
    }
   
   
</style>