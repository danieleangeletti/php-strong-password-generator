<?php
include 'functions.php';

session_start();

if (!isset($_POST['length'])) {
    throw new Exception('Please provide password length.');
}

$length = $_POST["length"];
$use_letters = isset($_POST["letters"]) ? $_POST["letters"] == "on" : false;
$use_numbers = isset($_POST["numbers"]) ? $_POST["numbers"] == "on" : false;
$use_symbols = isset($_POST["symbols"]) ? $_POST["symbols"] == "on" : false;

$_SESSION['password'] = generate_password($length, $use_letters, $use_numbers, $use_symbols);
header('Location: ./show_password.php');

?>