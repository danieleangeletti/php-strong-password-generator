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
            <form action="password_page.php" method="POST">
                <div class="mb-3">
                    <label for="choose-the-length" class="form-label">Choose the length of the password</label>
                    <input name="length" type="number" class="form-control" id="choose-the-length">
                </div>
                <div class="mb-3 form-check">
                    <input name="letters" type="checkbox" class="form-check-input" id="with-letters">
                    <label class="form-check-label" for="with-letters">Letters</label>
                </div>
                <div class="mb-3 form-check">
                    <input name="numbers" type="checkbox" class="form-check-input" id="with-numbers">
                    <label class="form-check-label" for="with-numbers">Numbers</label>
                </div>
                <div class="mb-3 form-check">
                    <input name="symbols" type="checkbox" class="form-check-input" id="with-symbols">
                    <label class="form-check-label" for="with-symbols">Symbols</label>
                </div>
                <div class="mb-3 form-check">
                    <input name="no-repetitions" type="checkbox" class="form-check-input" id="no-repetitions">
                    <label class="form-check-label" for="no-repetitions">No repetitions</label>
                </div>
                <button type="submit" class="btn btn-primary">GENERATE PW</button>
            </form>
        </div>
    </main>

    <footer>

    </footer>

    <script type="text/javascript" src="./javascript/scripts.js"></script>
</body>

</html>