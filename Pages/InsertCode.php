<?php include '../Components/Navbar/Navbar.php' ?>
<?php


error_reporting(E_ERROR | E_WARNING | E_PARSE);
include '../Shared/CustomResponse.php';
include '../Shared/connection.php';
include '../Functions/globalFuncs.php';
$username = $_GET["UserName"];
if (isset($_POST['submit'])) {
    $code = $_POST["code"];

    $user = GetUserByID($username, $con);

    if ($user == 0) {
        echo "<script>alert('Neispravan url!')</script>";
        return;
    }
    if ($user->user['Code'] == $code && $user->tip == 'korisnik') {
        $sql = "UPDATE korisnik SET Verified=true WHERE UserName='$username'";
        if ($con->query($sql) == true) {
            echo '<script>alert("Uspešno ste verifikovali vaš nalog!")</script>';
            echo '<script>window.location.href="https://e-coooking.000webhostapp.com/WebProgramiranje/index.php";</script>';

            return;
        } else {
            exit("Greška");
        }
    }
    if ($user->user['Code'] == $code && $user->tip == 'predavac') {
        $sql = "UPDATE predavac SET Verified=true WHERE UserName='$username'";
        if ($con->query($sql) == true) {
            echo "<script>alert('Vaš nalog je uspješno potvrđen!')</script>";
            echo '<script>window.location.href="https://e-coooking.000webhostapp.com/WebProgramiranje/index.php";</script>';
            return;
        } else {
            exit("Greška!");
        }
    }
}


?>
<style>
    <?php
    include_once 'InsertCode.css'
    ?>
</style>
<form class="form" method="POST">
    <div class='forma'>
        <h1 class='Code-Title'>Unesite verifikacioni kod</h1>
        <div class='Form-Input'>
            <label>
                Verifikacioni kod
            </label>
            <input class='text-input' name='code' type='text' />
        </div>
        <input type="submit" name="submit" class="button-submit" value="Potvrdi" />
    </div>
</form>


<?php
include_once '../Components/Footer/footer.php' ?>