<?php
include_once '../../../Shared/connection.php';
include '../../../Components/Navbar/Navbar.php';

error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();

$UserName = $_SESSION["UserName"];

$sql = "SELECT  * FROM kurs WHERE Kreator='$UserName'";  
$result = $con->query($sql);

echo "<div class='glavni'>";
echo "<div class='naslov'>";
echo "<div class='container'>";
echo "<div class='glass'></div>";
echo "<h1 class='centerText marginica'>Lista Vaših kurseva:</h1>";
echo "</div>";
echo "</div>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="course-card">';

        echo '<h2 class="course-name"> ' . $row["Naziv"] . '</h2>';
        echo '<p class="centerText">Opis</p>';
        echo '<p class="course-description">' . $row["Opis"] . '</p>';
        if ($row["Created"]){
            echo "<p>Status: Kreirano</p>";
            echo "<a class='poseti' href='https://e-coooking.000webhostapp.com/Pages/Courses/PickCourse.php?IdKursa=" . $row["Id"] . "' '>Poseti</a>";}
        else {
            echo "<p class='text-warning'>Status: U toku...</p>";
            echo "<a class='danger' href='https://e-coooking.000webhostapp.com/Pages/Courses/CreateCourses/DodajPitanja.php?IdKursa=" . $row["Id"] . "'>Završi</a>";
        }
        echo '</div>';
    }
} else {
    echo "<h1 class='centerText'>Nema kurseva koje ste napravili</h1>";
    echo "<div class='centerText'><a class='text-danger2' href='https://e-coooking.000webhostapp.com/Pages/Courses/CreateCourses/CreateCourse.php'>Kreiraj kurs ovde</a></div>";
}
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo"</div>";
include '../../../Components/Footer/footer.php';
?>
<style>
    .glavni {
        width: 100%;
        height: auto;
        background-image: url('/WebProgramiranje/Assets/food.jpg');
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
    }

    .poseti {
        text-decoration: none;
        padding: 1.5%;
        width: 300px;
        border-radius: 12px;
        font-weight: bold;
        font-size: 14px;
        background-color: green;
        color: white;
    }
    
    .course-card {
        width: 700px;
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
    }

    .course-description {
        font-size: 18px;
        text-align: left;
        overflow-y: auto;
        margin: 0;
        padding: 10px;
        border-radius: 10px;
       border: 1px solid lightgray;
    }
        
    .container {
       
        position: relative;
        display: flex;
        justify-content: center;
    }
    
    .glass {
        width: 30%;
        height: 100%;
        position: absolute;

        background: rgba( 255, 255, 255, 0.6 );
/* box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); */
backdrop-filter: blur( 10.5px );
-webkit-backdrop-filter: blur( 10.5px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
    }
    .centerText {
        text-align: center;
        z-index: 2;
        position: relative;
    }
   
    .danger {
        color: red;
        width: 150px;
        text-decoration: none;
        text-decoration-style: none;
        font-weight: bold;
        padding: 10px;
        border-radius: 5px;
        background-color: lightgoldenrodyellow;
    }

    .text-danger2 {
        display: block;
        margin: auto;
        color: white;
        text-decoration: none;
        text-decoration-style: none;
        font-weight: bold;
        padding: 20px;
        border-radius: 12px;
        background-color: green;
        margin-bottom: 50px !important;
        width: 200px;
        margin-top: 100px;
    }

    .text-danger2:hover {
        background-color: grey;
    }
    

    .text-warning {
        color: black;
    }

    .margina {
        margin-top: 30px;
    }
</style>