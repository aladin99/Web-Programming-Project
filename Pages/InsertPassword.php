<?php include '../Components/Navbar/Navbar.php' ?>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include '../Shared/CustomResponse.php';
include '../Shared/connection.php';
include '../Functions/globalFuncs.php';
$username = $_SESSION["UserName"];
if (isset($_POST['submit'])) {
    $tip = $_SESSION["tip"];
    $newPassword1 = $_POST["newPassword1"];
    $newPassword2 = $_POST["newPassword2"];
    $oldPassword = $_POST["oldPassword"];
    if ($newPassword1 != $newPassword2) {
        echo '<script>alert("Lozinka se ne poklapa...")</script>';
        echo '<script>window.location.href="https://e-coooking.000webhostapp.com/WebProgramiranje/Pages/InsertPassword.php";</script>';

        return;
    }

    if ($tip == "korisnik") {
        $sql = "SELECT * FROM korisnik WHERE UserName ='$username'"; //fetch user.
        $result = $con->query($sql);

        while ($row = $result->fetch_assoc()) {

            $pwdHashed = $row["Password"];
            $checkPwd = password_verify($oldPassword, $pwdHashed); //Password check.
            if ($checkPwd == false) {
                echo '<script>alert("Stara lozinka se ne podudara.")</script>';
                echo '<script>window.location.href="https://e-coooking.000webhostapp.com/WebProgramiranje/Pages/InsertPassword.php";</script>';
                return;
            }
            $newHashed = password_hash($newPassword1, PASSWORD_DEFAULT);
            $sql2 = "UPDATE korisnik SET  `Password` ='$newHashed' WHERE UserName = '$username'";
            if ($con->query($sql2)) {
                echo '<script>alert("Promenili ste lozinku.")</script>';
                echo '<script>window.location.href="https://e-coooking.000webhostapp.com/WebProgramiranje/Pages/InsertPassword.php";</script>';
            } else {
                echo '<script>alert("Nešto nije u redu, pokušajte ponovo!")</script>';
                return;
            }
        }
    }

    if ($tip == "admin") {
        $sql = "SELECT * FROM `admin` WHERE '$username' = UserName";

        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
            if ($oldPassword != $row["Password"]) {
                echo '<script>alert("Stara lozinka se ne podudara.")</script>';
                echo '<script>window.location.href="https://e-coooking.000webhostapp.com/WebProgramiranje/Pages/InsertPassword.php";</script>';
                return;
            }
            $sql2 = "UPDATE `admin` SET  `Password` ='$newPassword1' WHERE UserName = '$username'";
            if ($con->query($sql2)) {
                echo '<script>alert("Promenili ste Vašu lozinku.")</script>';
                echo '<script>window.location.href="https://e-coooking.000webhostapp.com/WebProgramiranje/Pages/InsertPassword.php";</script>';
            } else {
                echo '<script>alert("Nešto nije u redu, probajte ponovo!")</script>';
                echo '<script>window.location.href="https://e-coooking.000webhostapp.com/WebProgramiranje/Pages/InsertPassword.php";</script>';

                return;
            }
        }
    }

    if ($tip == "predavac") {
        $sql = "SELECT * FROM predavac WHERE UserName ='$username'"; //fetch user.
        $result = $con->query($sql);

        while ($row = $result->fetch_assoc()) {

            $pwdHashed = $row["Password"];
            $checkPwd = password_verify($oldPassword, $pwdHashed); //Password check.
            if ($checkPwd == false) {
                echo '<script>alert("Stara lozinka se ne podudara.")</script>';
                echo '<script>window.location.href="https://e-coooking.000webhostapp.com/WebProgramiranje/Pages/InsertPassword.php";</script>';
                return;
            }
            $newHashed = password_hash($newPassword1, PASSWORD_DEFAULT);
            $sql2 = "UPDATE predavac SET  `Password` ='$newHashed' WHERE UserName = '$username'";
            if ($con->query($sql2)) {
                echo '<script>alert("Promenili ste Vašu lozinku.")</script>';
                echo '<script>window.location.href="https://e-coooking.000webhostapp.com/WebProgramiranje/index.php";</script>';
            } else {
                echo '<script>alert("Nešto nije u redu, probajte ponovo.")</script>';
                return;
            }
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
        <h1 class='Code-Title'>Resetuj lozinku</h1>
        <div class='Form-Input'>
            <label>
                Unesite staru lozinku
            </label>
            <input class='text-input' name='oldPassword' type='password' />
        </div>
        <div class='Form-Input'>
            <label>
                Unesite novu lozinku
            </label>
            <input class='text-input' name='newPassword1' type='password' />
        </div>
        <div class='Form-Input'>
            <label>
                Potvrdite novu lozinku
            </label>
            <input class='text-input' name='newPassword2' type='password' />
        </div>
        <input type="submit" name="submit" class="button-submit" value="Potvrdi" />
    </div>
</form>


<?php
include_once '../Components/Footer/footer.php' ?>