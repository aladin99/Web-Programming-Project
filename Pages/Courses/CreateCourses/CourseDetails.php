<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include '../../../Components/Navbar/Navbar.php';
include_once '../../../Shared/connection.php';
$KursId = $_GET["IdKursa"];
$UserName = $_SESSION["UserName"];
$sql = "SELECT * FROM kurs WHERE '$KursId'=Id";
$potvrda = 'Da li ste sigurni da želite da započnete test?'; // Poruka potvrde  

echo '<div class="banner">';
echo "  <div>";
echo "    <h1>Dobrodošli na našu eCooking platformu</h1>";
echo "</div>";
echo "</div>";


$result = $con->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<div class='glavni' >";
    echo "<h1 class='centerTitle'>" . $row['Naziv'] . "</h1>";
    echo "<span class='paragraph-headers'>Važno!</span><p class='margin_left'> Savetujemo Vas da test koji se nalazi na dnu našeg portala pokrenete tek kada budete sigurni da ste naučili sve što je potrebno iz literature koje Vaš profesor 'okači' na portalu. </p>";
    echo "<br/>";

    echo "<span class='paragraph-headers'>Dodatne informacije:</span> <p class='margin_left'>Dobrodošli u svet eCooking-a, gde se virtuelno sastaju ljubitelji kulinarstva iz celog sveta! Naša platforma nudi širok izbor kurseva iz elektronskog kulinarstva koji će vas inspirisati, obrazovati i pretvoriti u vrhunskog kuvara u udobnosti sopstvene kuhinje.

    Naš tim stručnih šefova i kuvara sa bogatim iskustvom pripremio je izuzetno raznolik izbor kurseva, prilagođenih kako početnicima tako i iskusnim kulinarskim entuzijastima. Bez obzira da li želite da ovladate osnovnim veštinama kuvanja, istražujete nove kuhinje i ukuse ili usavršite svoje veštine u specifičnim kulinarskim tehnikama, mi imamo kurs za vas.
    
    Naši kursevi su prilagođeni digitalnom formatu i pružaju vam interaktivno iskustvo učenja. Uz pomoć video lekcija, detaljnih uputstava i korisnih saveta, vodićemo vas korak po korak kroz proces pripreme jela.</p>";
    echo "<br/>";

    echo "<span class='paragraph-headers'>Opis kursa</span>: <p class='margin_left'>" . $row['Opis'] . "</p> ";
    echo "<span class='paragraph-headers'>Literaturu preuzmite ispod: </span>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    $file_name = $row['file_name'];
    $file_path = $row['file_path'];
    echo "<button class='learn-more'>
    <span class='circle' aria-hidden='true'>
    <span class='icon arrow'></span>
    </span>
    <span class='button-text'><a class='btn2' href='$file_path' download>$file_name</a></span>
  </button>";
    echo "<div class='marginAuto'><span class='margin_left'>
    Mislite li da ste spremni za polaganje testa?
     Ako je tako, nastavite klikom na <i>'Započni test'</i></span> :
   </button>
</div> 
    <div class='centerText'><a  onclick='return confirm(\"".$potvrda."\");' class='btn'href='Test.php?IdKursa=" . $KursId . "'>Započni test!</a></div></div> ";
    echo "</div>";
    echo "</div>";
  }
}

include '../../../Components/Footer/footer.php';
?>
<style>

  .glavni {
    width: 80%;
    height: 750px;
    position: relative;
    padding: 1%;
    margin: 2% auto;
    border-radius: 12px;
    border: 4px dashed #C5DE96;
  }
 


  .centerText {
    display: flex;
    justify-content: center;
    padding: 3%;
    margin: auto;
  }
  .btn {
    margin: auto;
    width: 200px;
    background-color: green;
    color: white;
    text-decoration: none;
    padding: 10px;
    border-radius: 12px;
    cursor: pointer;
    text-align: center;
    justify-content: center;
  }

  .btn:hover {
    background-color: transparent;
    border: 3px dashed #C5DE96;
    color: black;
  }

  
  .download--button {
    padding: 10px;
    background-color: gray;
    color: white;
  }

  button {
    position: relative;
    display: inline-block;
    cursor: pointer;
    outline: none;
    border: 0;
    vertical-align: middle;
    text-decoration: none;
    background: transparent;
    padding: 0;
    font-size: inherit;
    font-family: inherit;
  }

  button.learn-more {
    width: 18rem;
    height: auto;
  }

  button.learn-more .circle {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    position: relative;
    display: block;
    margin: 0;
    width: 3rem;
    height: 3rem;
    background: #282936;
    border-radius: 1.625rem;
  }

  button.learn-more .circle .icon {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    background: #fff;
  }

  button.learn-more .circle .icon.arrow {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    left: 0.625rem;
    width: 1.125rem;
    height: 0.125rem;
    background: none;
  }

  button.learn-more .circle .icon.arrow::before {
    position: absolute;
    content: "";
    top: -0.29rem;
    right: 0.0625rem;
    width: 0.625rem;
    height: 0.625rem;
    border-top: 0.125rem solid #fff;
    border-right: 0.125rem solid #fff;
    transform: rotate(45deg);
  }

  button.learn-more .button-text {
    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 0.75rem 0;
    margin: 0 0 0 1.85rem;
    color: #282936;
    font-weight: 700;
    line-height: 1.6;
    text-align: center;
    text-transform: uppercase;
  }

  button:hover .circle {
    width: 100%;
  }

  button:hover .circle .icon.arrow {
    background: #fff;
    transform: translate(1rem, 0);
  }

  button:hover .button-text {
    color: #fff;
  }

  .btn {
    text-align: center;
  }

  .margin_left {
    margin-left: 10px;
  }

  .marginAuto {
    margin: auto;
    text-align: center !important;
    margin-top: 40px
  }
  
  
  .btn2 {
    text-decoration: none;
    color: white;
    font-weight: bold;
    margin-left: 34px;
    width: 100px;
    height: 100%;
    align-items: center;
    padding: 1%;
    font-size: 12px;
  }

  .btn2:hover {
    color: white;
  }
  

  .paragraph-headers {
    font-weight: bold;
    font-style: italic;
    margin-left: 20px;
  }
</style>

<style>
  .banner {
    background-image: url("../../../Assets//Learning.jpg");
    background-size: cover;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
  }

  .banner h1 {
    padding: 4%;
    color: black;
    font-family: Copperplate, Papyrus, fantasy;
    background: rgba(255, 255, 255, 0.1);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.18);
    font-size: 48px;
    margin: 0;
  }
</style>