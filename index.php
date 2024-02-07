<?php
include 'functions.php';
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
            <h1>PHP Strong Password Generator</h1>
        </div>
    </header>

    <main>
        <div class="container mb-3">
            <form action="" method="GET">
                <div class="mb-3">
                    <label for="choose-the-length" class="form-label">Choose the length of the password</label>
                    <input name="length" type="number" class="form-control" id="choose-the-length">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="container mb-3">
            <?php
            if (isset($_GET['length'])) {
                echo generate_password($_GET['length']);
            }
            ?>
        </div>
    </main>

    <footer>

    </footer>

    <script type="text/javascript" src="./javascript/scripts.js"></script>
</body>

</html>