<?php
include '../../Components/Navbar/Navbar.php';
include_once '../../Shared/connection.php';
include_once '../../Shared/CustomResponse.php';
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$UserName = $_SESSION["UserName"];
function GetCompleted($number)
{
  if ($number == 0)
    return "Pao test";
  return "Završen test";
}
echo "<div class='glavni' >";
echo "<h1 class='centriraj'>Uvid u polaznike kurseva</h1>";
$sql = "SELECT korisnik.Name,kurs.Naziv,test.Points,test.Completed 
        FROM korisnik 
        INNER JOIN userkurs ON korisnik.UserName = userkurs.KorisnikId
        INNER JOIN kurs ON userkurs.KursId = kurs.Id
        INNER JOIN predavac ON kurs.Kreator = predavac.UserName
        INNER JOIN test ON test.UserName = korisnik.UserName AND test.KursId = kurs.Id
        WHERE kurs.Kreator = '$UserName'";


$result = $con->query($sql);
if ($result->num_rows > 0) {
  echo "</br>";
  echo "<table>";
  echo "<thead>";
  echo "<tr>";
  echo "<th>Ime</th>";
  echo "<th>Naziv kursa</th>";
  echo "<th>Poeni</th>";
  echo "<th>Prošlo</th>";
  echo "<tr>";
  echo "</thead>";
  echo "<tbody>";
  while ($row = $result->fetch_assoc()) {
    $numb = $row["Completed"];

    echo '<tr>';
    echo '<td>' . $row['Name'] . '</td>';
    echo '<td>' . $row['Naziv'] . '</td>';
    echo '<td>' . $row['Points'] . '</td>';
    echo '<td>' . GetCompleted($numb) . '</td>';
    echo '</tr>';
  }
  echo "</tbody>";
  echo "</table>";
} else {
  echo "<div class= 'divBox'><h1 class='centriraj'>Nema upisanih ljudi na vaše kurseve!</h1></div>";
}
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo"<br/>";
echo "</div>";
include '../../Components/Footer/footer.php';



?>

<style>

  .glavni {
    width: 100%;
    height: auto;
    padding: 0%;
    margin: 0%;
    background-image: url('../../Assets/food.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }


  /* CSS styles for the table */
  table {
    border-collapse: collapse;
    width: 80%;
    margin: auto;
    margin-bottom: 20px;
  }

  .centriraj {
    margin-top: 5%;
    text-align: center;
  }
  .divBox{
    background-color: white;
    padding: 25px;
    border-radius: 12px;
    border: 4px dashed #C5DE96;
    width: 500px;
    margin: auto;
    align-items: center;
    margin-bottom: 200px;
    margin-top: 100px;
  }
  th,
  td {
    text-align: left;
    padding: 8px;
    border: 1px solid black;
    background-color: white;
  }

  th {
    background-color: #f2f2f2;
    font-weight: bold;
  }

  tr:nth-child(even) {
    background-color: #C5DE96;
  }