<?php
include 'functions.php';
session_start();
if (isset($_POST['length'])) {
    $_SESSION['password'] = generate_password($_POST['length']);
    header('Location: ./show_password.php');
}
;
?>