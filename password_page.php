<?php
include 'functions.php';

session_start();

if (!isset($_POST['length'])) {
    throw new Exception('Please provide password length.');
}

if (isset($_SESSION["error"])) {
    $_SESSION["error"] = "";
}

$length = $_POST["length"];
$use_letters = isset($_POST["letters"]) ? $_POST["letters"] == "on" : false;
$use_numbers = isset($_POST["numbers"]) ? $_POST["numbers"] == "on" : false;
$use_symbols = isset($_POST["symbols"]) ? $_POST["symbols"] == "on" : false;
$no_repetitions = isset($_POST["no-repetitions"]) ? $_POST["no-repetitions"] == "on" : false;

if ($no_repetitions) {
    $max_length = 0;

    if ($use_letters) {
        $max_length += 52;
    }

    if ($use_numbers) {
        $max_length += 10;
    }

    if ($use_symbols) {
        $max_length += 12;
    }

    if ($max_length == 0) {
        $max_length = 74;
    }

    if ($length > $max_length) {
        $_SESSION["error"] = "When no repetitions is selected, you can choose at most " . $max_length . " characters length.";
        header('Location: ./show_password.php');
        return;
    }
}

$_SESSION['password'] = generate_password($length, $use_letters, $use_numbers, $use_symbols, $no_repetitions);
header('Location: ./show_password.php');

?>