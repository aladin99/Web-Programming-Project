<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);

include '../../Shared/connection.php' ?>
<?php include '../Navbar/Navbar.php' ?>
<?php include 'Login.php'?>
<style>
    <?php include 'Login.css'; 
    ?>
</style>

<div>

<form  action="Login.php" class="formLogin" method="POST">
    <div class="title">Logovanje</div>
    <div class="input-container ic2">
        <input id="firstname" name="username" class="<?php echo "input "; ?>" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Korisnicko ime ili Email:</label>
    </div>
    <div class=" input-container ic2">
        <input id="lastname" name="password" class="<?php echo "input "; ?>" type="password" placeholder="" />
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Lozinka:</label>
    </div>
    <span class='Link_center'><a href="../Registration/Register.php">Nemate nalog? Registrujete se ovde!</a></span>
    <span class='Link_center'><a href="../../Configs/Passwords/ForgotPassword.php">Zaboravili ste lozinku?</a></span>
    <br/>
    <hr/>
    
    <input type="submit" value="Potvrdi" name="Login" class="submit"/>
</form></div>
<br>
<br>
<br>
<br>
<?php include '../Footer/footer.php'; ?>

