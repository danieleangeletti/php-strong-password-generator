<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <?php
            if (isset($_SESSION["error"]) && $_SESSION["error"] != "") {
                echo "<h4>Error: " . $_SESSION["error"] . "</h4>";
            } else {
                echo "<div>La password è: " . $_SESSION['password'] . "</div>";
            }
            ?>
        </div>
    </header>

    <script type="text/javascript" src="./javascript/scripts.js"></script>
</body>

</html>