<?php
include __DIR__ . "./partials/varibles.php";

// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Pass Gen</title>
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
            <?php echo generatorPass($pswlenght) ?>
        </div>
        <form class="d-flex justify-content-between py-5" action="/partials/session.php" method="GET">
            <div class="w-50 d-flex flex-column gap-4">
                <label class="my-1" for="Pswlenght">Lunghezza Password</label>
                <label class="my-1" for="CharaRep">Consenti ripetizioni di uno o più caratteri:</label> 
                <div>
                    <button type="submit">Invia</button>
                    <button type="reset">Annulla</button>
                </div>
            </div>
            <div class="w-50">
                <input class="w-25 my-1" type="number" name="Pswlenght" min="6" max="12"> <br>
                <div class="d-inline-block">
                <input class="my-1" type="radio" name="CharaRep">SI
                <br>
                <input class="my-1" type="radio" name="CharaRep">NO
                <div class="mt-3">
                    <input type="checkbox">Lettere
                    <br>
                    <input type="checkbox">Numeri
                    <br>
                    <input type="checkbox">Simboli
                    <br>
                </div>
            </div>
        </form>
    </main>

</body>

</html>