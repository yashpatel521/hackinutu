<?php
session_start();
// session_destroy();
unset($_SESSION["juryLoggedIn"]);
header("Location:login.php");
?>