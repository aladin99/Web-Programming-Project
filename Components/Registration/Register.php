<?php include '../Navbar/Navbar.php'; ?>
<?php include '../../Shared/connection.php'; ?>
<?php include '../../Functions/validation.php'; ?>
<?php include '../../Functions/globalFuncs.php'; ?>
<?php include '../../Configs/MailerBot.php'; ?>
<?php require_once '../../Shared/CustomResponse.php'; ?>

<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$Flags = array(false, false, false, false, false, false, false);
$Message = "";
if (isset($_POST["submit"])) {
    $zahtev = false;
    $name = trim($_POST["name"]);
    $lastName = trim($_POST["lastname"]);
    $email = $_POST["Email"];
    $sex = $_POST["sex"];
    $birthday = $_POST["birthday"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    $mobile = $_POST["mobile"];
    $jmbg = $_POST["jmbg"];
    $country = $_POST["Country"];
    $place = $_POST["Pob"];
    $zahtev = false;
    if (isset($_POST["zahtev"])) {
        $zahtev = $_POST["zahtev"];
    }
    $ultimateFlag = false;

    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];
    if (CheckName($name) == false)
        $Flags[0] = true;
    if (CheckLastName($lastName) == false)
        $Flags[1] = true;
    if (CheckEmail($email) == false)
        $Flags[2] = true;
    if (CheckCountry($country) == false)
        $Flags[3] = true;
    if (CheckDatum($birthday) == false)
        $Flags[4] = true;
    if (pwdMatch($password, $password2) == false)
        $Flags[5] = true;
    if (CheckJmbg($con, $jmbg) == false)
        $Flags[6] = true;
    for ($x = 0; $x < 7; $x++) {
        if ($Flags[$x] == true)
            $ultimateFlag = true;
    }
    if ($ultimateFlag == false) {
        $checkIfexists =  GetUserByID($email, $con);
        if ($checkIfexists != 0) {
            echo '<script>alert("Email već postoji!")</script>';
            echo '<script>window.location.href="./Register.php";</script>';
            return;
        }
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        $username = GenerateUserName($con, $name, $lastName);
        $generatedCode = $key = substr(md5(time() . $username), 0, 10);

        if ($error === 0) {
            if ($img_size > 625000) {
                $em = "Veličina fajla je prevelika!";
                echo '<script>window.location.href="./Register.php";</script>';
            } else {

                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION); 
                $img_ex_lc = strtolower($img_ex);
                $allowed_exs = array("jpg", "jpeg", "png", "webp", "gif");
                if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                    $img_upload_path = './uploads/' . $new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
                    $sql = "INSERT INTO korisnik (`Name`,LastName,DateOfBirth,PlaceOfBirth,Sex,Jmbg,Country,Email,`Password`,UserName,Verified,Mobile,`Image`,Code,Accepted)
                        VALUES ('$name','$lastName','$birthday','$place',true,'$jmbg','$country','$email','$hashedPwd','$username',false,'1231231231','$new_img_name','$generatedCode',false)";
                    $sql2 = "INSERT INTO predavac (`Name`,LastName,DateOfBirth,PlaceOfBirth,Sex,Jmbg,Country,`Password`,Email,UserName,Mobile,`Image`,Accepted,Code,Verified)
                        VALUES ('$name','$lastName','$birthday','$place',true,'$jmbg','$country','$hashedPwd','$email','$username','1231231231','$new_img_name',false,'$generatedCode',false)";
                    if ($zahtev == null || $zahtev != true) $zahtev = false;
                    echo '<script>alert("Uspešno ste se registrovali, proverite Vaš mejl!")</script>';
                    if ($zahtev == false) {
                        if ($con->query($sql) === true) {
                            senfVerificationMail($email, $generatedCode, $username);
                            echo '<script>window.location.href="../SignIn/LoginForm.php";</script>';
                            return;
                        } else {
                            echo '<script>alert("Greška!")</script>';
                            echo '<script>window.location.href="./Register.php";</script>';
                        }
                    }
                    if ($con->query($sql2) === true && $zahtev == true) {
                        senfVerificationMail($email, $generatedCode, $username);
                        echo '<script>window.location.href="../SignIn/LoginForm.php";</script>';
                    } else {
                        echo '<script>alert("Greška!")</script>';
                        echo '<script>window.location.href="./Register.php";</script>';
                    }
                } else {
                    echo '<script>alert("Greška!")</script>';
                    echo '<script>window.location.href="./Register.php";</script>';
                }
            }
        } else {
            echo '<script>alert("Greška!")</script>';
            echo '<script>window.location.href="./Register.php";</script>';
        }
    }
}


?>
<style>
    <?php include 'Register.css'; ?>
</style>

<?php echo "<span class='Text_center'>$Message </span>"; ?>
<form enctype="multipart/form-data" class="form" method="POST">
    <div class="title">Dobrodošli</div>
    
    <div class="input-container ic2">
        <input id="firstname" name="name" class="<?php if ($Flags[0] == true) {
                                                        echo "  wrongInput input";
                                                    } else echo "input "; ?>" type="text" placeholder=" " />
                                                    <p class="info--p">*Unitesite ime koristeći samo karaktere</p>
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Ime:</label>
    </div>
    <?php if ($Flags[0] == true) {
        echo "<span>Unos ne smije biti prazan, samo slova koja počinju velikim slovom.</span>";
    }  ?>
    <div class=" input-container ic2">
        <input id="lastname" name="lastname" class="<?php if ($Flags[1] == true) {
                                                        echo "  wrongInput input";
                                                    } else echo "input "; ?>" type="text" placeholder=" " />
                                                    <p class="info--p">*Unitesite prezime koristeći samo karaktere</p>
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Prezime:</label>
    </div>
    <?php if ($Flags[1] == true) {
        echo "<span>Prezime moraju biti samo slova koja počinju velikim slovom</span>";
    }  ?>
    <div class="input-container ic3">
        <input name="Email" class="<?php if ($Flags[2] == true) {
                                        echo "  wrongInput input";
                                    } else echo "input "; ?>" type="text" placeholder=" " />
                                    <p class="info--p">*Unitesite vaš e-mail koristeci 'A-Z,a-z,.-3' pre @...</p>
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Email</>
    </div>
    <?php if ($Flags[2] == true) {
        echo "<span>E-pošta nije važeća</span>";
    }  ?>
    <div class="input-container ic4">
        <input id="country" class="<?php if ($Flags[3] == true) {
                                        echo "  wrongInput input";
                                    } else echo "input "; ?>" type="text" name="Country" placeholder=" " />
                                    <p class="info--p">*Mora da sadrži samo karaktere.</p>
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Zemlja</label>
    </div>
    <div class="input-container ic5">
        <select id="email" class="input" type="select" name="sex" placeholder=" ">
            <option>Muško</option>
            <option>Žensko</option>
        </select>
    </div>
    <?php if ($Flags[1] == true) {
        echo "<span>Polje ne smije biti prazno, a vi morate biti stariji od 18 godina.</span>";
    }  ?>
    <div class="input-container ic6">
        <input class="<?php if ($Flags[4] == true) {
                            echo "  wrongInput input";
                        } else echo "input "; ?>" name="birthday" type="date" placeholder=" " />
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Datum rodjenja</label>
    </div>

    <div class="input-container ic7">
        <input name="password" class="<?php if ($Flags[5] == true) {
                                            echo "  wrongInput input";
                                        } else echo "input "; ?>" type="password" placeholder=" " />
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Lozinka</label>
    </div>
    <div class="input-container ic8">
        <input name="password2" class="<?php if ($Flags[5] == true) {
                                            echo "  wrongInput input";
                                        } else echo "input "; ?>" type="password" placeholder=" " />
                                        <p class="info--p">*Lozinka mora da sadrži veliko slovo i specijalni karakter.</p>
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Ponovite lozinku</label>
    </div>

    <div class="input-container ic9">
        <input name="mobile" class="input" type="text" placeholder=" " />
        <p class="info--p">*Broj telefona mora da sadrži najmanje 6 cifara.</p>
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Broj telefona</label>
    </div>

    <div class="input-container ic10">
        <input name="jmbg" class="<?php if ($Flags[6] == true) {
                                        echo "  wrongInput input";
                                    } else echo "input "; ?>" type="number" placeholder=" " />
                                    <p class="info--p">*JMBG mora da sadrzi 10 brojeva</p>
        <div class="cut"></div>
        <label for="lastname" class="placeholder">JMBG</label>
    </div>
    <div class="input-container ic11">
        <input name="Pob" class="<?php if ($Flags[3] == true) {
                                        echo "  wrongInput input";
                                    } else echo "input "; ?>" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Mesto rodjenja</label>
    </div>
    <div class="input-container ic12">
        <!-- <label style='margin-left:15px'>Izaberite sliku</label> -->
        <!-- <input type="file" name='image' />
        <div class="file-input"> -->
      <input
        type="file"
        name="image"
        id="file-input"
        class="file-input__input"
      />
      <label class="file-input__label" for="file-input">
        <svg
          aria-hidden="true"
          focusable="false"
          data-prefix="fas"
          data-icon="upload"
          class="svg-inline--fa fa-upload fa-w-16"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 512 512"
        >
          <path
            fill="currentColor"
            d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"
          ></path>
        </svg>
        <span class="dodaj--sliku">Dodajte sliku</span></label
      >
    </div>
    </div>
    <div class="input-container special">
        <label for="lastname" class="placeholder">Aplicirajte za profesora</label>

        <input name="zahtev" value="yes" type="checkbox" placeholder=" " />
    </div>

    <span class='Link_center'><a href="/WebProgramiranje\Components\SignIn\LoginForm.php">Već imate nalog? Ulogujte se!</a></span>
    <br/>
    <hr />
    <input type="submit" value="Registruj se" name="submit" class="submit" value="Potvrdi" />
</form>
<?php include '../Footer/footer.php'; ?>