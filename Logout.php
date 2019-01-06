<?php
session_start();

// destroy the session
unset($_SESSION["name"]);
$_SESSION["name"]=NULL;
header('location: index.php');
?>