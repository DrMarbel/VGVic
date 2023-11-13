<?php
    if($_POST["codeTitle"] != null && $_POST["codeNum"] != null){
        $command = $_POST["codeTitle"];
        $code = $_POST["codeNum"];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>V. G. VIC's</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="View/styles.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container">
            <?php include "View/navbar.php" ?>
            <?php include "View/code.php" ?>
        </div>
    </body>
</html>