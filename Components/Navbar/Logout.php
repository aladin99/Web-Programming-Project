<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
session_start();
session_unset();
session_destroy();
echo '<script>window.location.href="https://e-coooking.000webhostapp.com/WebProgramiranje/index.php";</script>';

?>