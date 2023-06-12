<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your new password</title>
</head>

<body>
<header>
        <div class="m-auto">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
            <div>
    </header>
    <main>
        <div id="parametro" class="d-flex align-item-center">
            <?php echo $_SESSION["password"] ?>
        </div>
</body>

</html>