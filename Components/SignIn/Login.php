<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once  '../../Shared/connection.php';
require_once '../../Functions/globalFuncs.php';
require_once '../../Shared/CustomResponse.php';
if (isset($_POST["Login"])) {
    $UserName = $_POST["username"];
    $Password = $_POST["password"];

    $data = LogInUser($con, $UserName);

    if ($data->tip != 'admin') {
        echo $data->user["UserName"];
        if ($data->user["Verified"] == 0) {
            echo '<script>alert("Morate da verifikujete e-mail adresu! Proverite mejl!")</script>';
            echo '<script>window.location.href="./LoginForm.php";</script>';
            return;
        }
        if ($data->user["Accepted"] == 0) {
            echo '<script>alert("Korisnik mora da bude prihvaćen od admina")</script>';
            echo '<script>window.location.href="./LoginForm.php";</script>';
            return;
        }
        $User = $data->user["Password"];
        $pwdHashed = $data->user["Password"];

        $checkPwd = password_verify($Password, $pwdHashed);
        if (!$checkPwd) {
            echo '<script>alert("Netačna lozinka!")</script>';
            echo '<script>window.location.href="./LoginForm.php";</script>';
            return;
        }
        if ($checkPwd) {
            $_SESSION["UserName"] = $data->user["UserName"];
            $_SESSION["Name"] = $data->user["Name"];
            $_SESSION["Email"] = $data->user["Email"];
            $_SESSION["Id"] = $data->user["Id"];
            $_SESSION["tip"] = $data->tip;


            if (isset($_SESSION['UserName']) && isset($_SESSION["Name"]) && isset($_SESSION["Email"])) {
                echo '<script>alert("Uspesno uneto!")</script>';
                echo '<script>window.location.href="../../index.php";</script>';
                return;
            }
        } else {
            echo '<script>alert("Netačni podaci!")</script>';
            echo '<script>window.location.href="./LoginForm.php";</script>';
            return;
        }
    } else {
        if ($Password == $data->user['Password']) {
            $pomocna = $data->user["Id"];
            $_SESSION["UserName"] = $data->user["UserName"];
            $_SESSION["Name"] = $data->user["Name"];
            $_SESSION["Email"] = $data->user["Email"];
            $_SESSION["Id"] = $data->user["Id"];
            $_SESSION["tip"] = $data->tip;
            if (isset($_SESSION['UserName']) && isset($_SESSION["Name"]) && isset($_SESSION["Email"])) {
                echo '<script>window.location.href="../../index.php";</script>';
                return;
            } else {
                echo '<script>alert("Netačni podaci!")</script>';
                echo '<script>window.location.href="./LoginForm.php";</script>';
                return;
            }
        } else {
            echo '<script>alert("Netačni podaci!")</script>';
            echo '<script>window.location.href="./LoginForm.php";</script>';
            return;
        }
    }
}
