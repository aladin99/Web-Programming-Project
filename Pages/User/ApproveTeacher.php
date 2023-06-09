<?php 
include_once '../../Shared/connection.php';



$sql = "SELECT * FROM predavac  WHERE Accepted = 0  AND Verified = 1";
$potvrda = 'Da li ste sigurni?'; // Poruka potvrde  

function GetCompleted($number){
    if($number==0)
      return "Approve";
    return "Completed";
  }
  
 

if($_SESSION["tip"]=="admin"){

$result = $con->query($sql);
echo"</br>";
echo "<h2 class='centriraj'>  >> Profesori koji čekaju odgovor administratora << </h2>";
echo"<table>";
        echo"<thead>";
        echo"<tr>";
        echo"<th>Ime</th>";
        echo"<th>Prezime</th>";
        echo"<th>Email</th>";
        echo"<th>Odobri</th>";
        echo"<th>Izbriši</th>";
        echo"<tr>";
        echo"</thead>";
        echo"<tbody>";
while($row= $result->fetch_assoc()){
    
$numb=$row['Accepted'];
    echo'<tr>';
    echo'<td>'.$row['Name'].'</td>';
    echo'<td>'.$row['LastName'].'</td>';
    echo'<td>'.$row['Email'].'</td>';
    echo'<td><a title="Prihvati korisnika" onclick="return confirm(\''.$potvrda.'\');" class="links-table-approve" href="./Approve.php?UserName='.$row['UserName'].'">Odobri</a></td>';
    echo'<td><a title="Izbriši korisnika" onclick="return confirm(\''.$potvrda.'\');" class="links-table-delete" href="./DissApprove.php?UserName='.$row['UserName'].'">Izbriši</a></td>';
    echo'</tr>';



}

echo "</table>";
echo "</br>";
$sql2 = "SELECT * FROM korisnik  WHERE Accepted = 0 ";
$result2 = $con->query($sql2);
echo"</br>";
echo "<h2 class='centriraj'> >> Korisnici koji čekaju odgovor administratora << </h1>";
echo"<table>";
        echo"<thead>";
        echo"<tr>";
        echo"<th>Ime</th>";
        echo"<th>Prezime</th>";
        echo"<th>Email</th>";
        echo"<th>Odobri</th>";
        echo"<th>Izbriši</th>";
        echo"<tr>";
        echo"</thead>";
        echo"<tbody>";
while($row= $result2->fetch_assoc()){
    
$numb=$row['Accepted'];
    echo'<tr>';
    echo'<td>'.$row['Name'].'</td>';
    echo'<td>'.$row['LastName'].'</td>';
    echo'<td>'.$row['Email'].'</td>';
    echo'<td><a title="Prihvati korisnika" onclick="return confirm(\''.$potvrda.'\');" class="links-table-approve" href="./ApproveStudent.php?UserName='.$row['UserName'].'">Odobri</a></td>';
    echo'<td><a title="Izbriši korisnika" onclick="return confirm(\''.$potvrda.'\');" class="links-table-delete" href="./DissApproveStudent.php?UserName='.$row['UserName'].'">Izbriši</a></td>';
    echo'</tr>';



}

echo "</table>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
}


?>


<style>
    /* CSS styles for the table */
    table {
    border-collapse: collapse;
    width: 70%;
    margin-bottom: 20px;
    margin:auto;
    max-height: 500px;
    overflow-y: scroll;
    }
    .centriraj{
    text-align: center;
    }
    th, td {
    text-align: left;
    padding: 8px;
    border: 1px solid black;
    }

    th {
    background-color: black;
    font-weight: bold;
    color: white;
    }

    tr:nth-child(even) {
    background-color: #C5DE96;
    }

    table .links-table-delete {
      background-color: red;
      border-radius: 8px;
      padding: 5%;
      color: white !important;
      font-weight: bold !important;
      text-decoration: none;
    }

    table .links-table-approve {
      background-color: green;
      border-radius: 8px;
      padding: 5%;
      color: white !important;
      font-weight: bold !important;
      text-decoration: none;
    }
</style>