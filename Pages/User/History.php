<?php
include_once '../../Shared/connection.php';
include_once '../../Components/Navbar/Navbar.php';

$username = $_SESSION["UserName"];
$sql = "SELECT kurs.Naziv,test.Points, test.Completed, kurs.Id FROM kurs INNER JOIN userkurs ON kurs.Id= userkurs.KursId 
INNER JOIN test ON test.UserName = userkurs.KorisnikId AND test.KursId = kurs.Id
WHERE userkurs.KorisnikId = '$username'";



function GetCompleted($number)
{
    if ($number == 0)
        return "Nije završen";
    return "Završen";
}


$result = $con->query($sql);
echo "<h1 class='centriraj'>Istorija aktivnosti korisnika</h1>";
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Naziv kursa</th>";
echo "<th>Pohadjanje testa</th>";
echo "<th>Poeni na testu</th>";
echo "<tr>";
echo "</thead>";
echo "<tbody>";


while ($row = $result->fetch_assoc()) {
    $numb = $row['Completed'];
    echo " <tr>";
    echo '<td>' . $row['Naziv'] . '</td>';
    echo '<td>' . GetCompleted($numb) . '</td>';
    echo '<td>' . $row['Points'] . '</td>';
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";









include_once '../../Components/Footer/footer.php';
?>


<style>
    .centriraj {
        text-align: center;
    }

    table {
        border-collapse: collapse;
        width: 70%;
        margin: auto;
        text-align: center;
        margin-bottom: 300px;
        margin-top: 100px;
        border: 1px solid black;
    }

    th,
    td {
        background-color: white;
        text-align: center;
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: lightgrey;
        color: black;
        font-weight: bold;
        text-align: center;

    }

    tr:nth-child(even) {
        background-color: #C5DE96;
        text-align: center;

    }
</style>