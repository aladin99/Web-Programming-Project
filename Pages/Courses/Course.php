<?php
include '../../Components/Navbar/Navbar.php';
include_once '../../Shared/connection.php';
include_once '../../Shared/CustomResponse.php';
error_reporting(E_ERROR | E_WARNING | E_PARSE);


$UserName = $_SESSION["UserName"];
$sql = "SELECT *
FROM kurs
WHERE kurs.Created= true AND kurs.Id NOT IN (
  SELECT userkurs.KursId
  FROM userkurs
  WHERE userkurs.KorisnikId = '$UserName'
)";
$result = $con->query($sql);

echo "<div class='message-wrapper'><h2 class='centerText'>Lista kurseva koje nudimo! Ako ste zainteresovani za jedan, kliknite na dugme za 'Upiši me'</h2></div>";
echo"</br>";
echo"</br>";
echo "<div>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="course-card">';
        echo '<div class="course-image"></div>';
        echo '<h2 class="course-name"> ' . $row["Naziv"] . '</h2>';
        echo '<p class="course-author"><b>Autor:</b> ' . $row["Kreator"] . '</p>';
        echo '<p class="course-description"><b>Opis:</b> ' . $row["Opis"] . '</p>';
        echo "<a class='btn' href='PickCourse.php?IdKursa=" . $row["Id"] . "' >Upiši me</a>";
        echo '</div>';
        echo"</br>";
    }
} else
echo "<div class='message-wrapper'><h1 class='centerText marginBottom'>Žao nam je, trenutno nema dostupnih kurseva!</h1></div>";


echo "</div>";
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo"<br/>";
include "../../Components/Footer/footer.php";
?>
<style>
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

    .course-image {
        width: 100%;
        height: 300px;
        background-image: url("../../Assets/CourseCover.jpg");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
    .course-card {
        width: 700px;
        padding: 20px;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        margin: 30px auto;
    }

    .course-name {
        font-size: 24px;
        font-weight: bold;
        color: black;
        margin-bottom: 10px;
        padding: 1%;
        text-align: center;
        border-bottom: 3px dashed lightgrey;
    }

    .course-description {
        font-size: 18px;
        text-align: start;
        margin:auto;
        margin-bottom: 20px;
        margin-top: 20px;
        padding: 10px;
        color: black;
    }

    .course-author {
        font-size: 18px;
        text-align: start;
        margin-bottom: 20px;
        margin-top: 20px;
        padding: 10px;
        color: black;
    }

    .marginBottom {
        margin-bottom: 100px !important;
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
        width: 70%;
        font-size: 14px;
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        background-color: green;
        border-radius: 12px;
        padding: 10px 30px;
        border: solid #026112 2px;
        box-shadow: rgb(0, 0, 0) 0px 0px 0px 0px;
        align-items: center !important;
        cursor: pointer;
        text-align: center !important;
    }
    
</style>