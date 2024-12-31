<?php
session_start();
unset($_SESSION['un']);
unset($_SESSION['pwd']);

session_destroy();
header('location:../index.php');
?>