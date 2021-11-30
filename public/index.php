<?php
    require __DIR__ . '/../app/src/app.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baigiamasis darbas</title>
    <script src="https://kit.fontawesome.com/4cfba4ce59.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Open+Sans&family=Poppins&family=Roboto:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../app/css/normalize.css">
    <link rel="stylesheet" href="../app/css/style.css">
    <script>
        function myFunction() {
            var x = document.getElementById("mMenu");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
</head>
<body>
    <?php
        include('../app/views/header.php');
        include('../app/views/content.php');
        include('../app/views/footer.php');
    ?>
</body>
</html>
