<?php
function emptyInputSignup($name, $lastname, $gender, $country, $placeOfBirth, $jmbg, $phone, $email, $password, $password2)
{

    if (
        empty($name) || empty($lastname) || empty($gender) || empty($country) || empty($placeOfBirth) || empty($jmbg) || empty($phone)
        || empty($email) || empty($password) || empty($password2)
    ) return false;
    return true;
}

// Provera imena 

function CheckName($name)
{
    if (!preg_match('/^([A-Z]{1}[a-z]+)$/', $name))
        return false;
    else
        return true;
}

// Provera prezimena
function CheckLastName($lastname)
{
    if (!preg_match('/^([A-Z]{1}[a-z]+)$/', $lastname)){
        echo '<script>alert("Prezime mora da sadrži samo karaktere.")</script>';
        return false;
    }
    else
        return true;
}

// Provera mesta rodjenja
function CheckPlace($placeOfBirth)
{
    if (!preg_match('/^[A-Za-z]+$/', $placeOfBirth)){
        echo '<script>alert("Polje za mesto rodjenja mora da sadrži mala slova ili velika slova.")</script>';
        return false;
    }
    return true;
}

// Provera zemlje
function CheckCountry($country)
{
    if (!preg_match('/^[A-Za-z]+$/', $country))
        return false;
    return true;
}

// Provera datuma
function CheckDatum($date)
{   

    $gornjaGranica = '2004-07-25';
    $donjaGranica = '1930-07-25';
    if ($gornjaGranica<$date  || $donjaGranica>$date || preg_match('/^[0-9]*$/',$date))
        return false;
    return true;
}

// Provera broja telefona
function CheckPhone($phone)
{
    if (!preg_match('/^(\d{6,10})$/', $phone)){
        echo '<script>alert("Broj telefona mora da sadrži najmanje 6 brojeva")</script>';
        return false;
    }
    return true;
}

// Prover e-maila
function CheckEmail($email)
{
    if (!preg_match('/^([A-Z])?([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/', $email)){
    echo '<script>alert("Mail nije ispravan, mora da sadrzi mala ili velika slova i spceijalne karatere pa @")</script>';
        return false;
    }
    return true;
}

// Provera lozinke
function pwdMatch($password, $password2)
{
    if ($password !== $password2 && $password!=""){
        echo '<script>alert("Lozinka se ne podudara")</script>';
        return false;
    }
    return true;
}

// Provera JMBG-a
function CheckJmbg($con,$jmbg)
{


    $sql = "SELECT * FROM korisnik WHERE Jmbg='$jmbg'";

    $result = $con->query($sql);
    

    if ($result->num_rows > 0){
        echo '<script>alert("JMBG mora da sadrži 10 cifara")</script>';
        return false;
    }
    return true;
}


// Provera korisnickog imena
function CheckUserName($con,$username){
    $sql = "SELECT * FROM korisnik WHERE UserName='$username'";
    $result = $con->query($sql);
    if ($result->num_rows > 0){
        echo '<script>alert("Korisničko ime već postoji")</script>';
        return false;
    }
    return true;
}

// Generisanje korisnickog imena
function GenerateUserName($con,$name,$lastName){
    $a = 0;
    $username = $name . $lastName . $a;
    while (CheckUserName($con, $username) == false) {
        $a++;
        $a = strval($a);
        $username .= $a;
    }
    return $username;
}