<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facturatie</title>
</head>
<body>
<?php include "./parts/header.php"; ?>


<div class="container">
    <?php
    if (isset($_GET['msg'])) {
        ?>
        <div class="alert alert-success">
            <strong>Gelukt!</strong> De factuur word verstuurd!
        </div>
        <?php
    }
    ?>
    <h1>Facturable facturen</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Factuur Nummer</th>
            <th scope="col">Status</th>
            <th scope="col">Adres</th>
            <th scope="col">Klant</th>
            <th scope="col">Datum verstuurd</th>
            <th scope="col">Betaald</th>
            <th scope="col">Acties</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>2</td>
            <td>Verstuurd</td>
            <td>Apothekerslaan 5, 6969HQ Apeldoorn, Nederland</td>
            <td>Joost Adema, BaapMedia</td>
            <td>-</td>
            <td>-</td>
            <td><a class="btn btn-info" href="?msg">Factuur versturen</a></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Verstuurd</td>
            <td>Stegeman 88, 9336HQ Zaandam, Nederland</td>
            <td>Jasper van Hienen, Snackbar</td>
            <td>-</td>
            <td>-</td>
            <td><a class="btn btn-info" href="?msg">Factuur versturen</a></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Klaar voor verzending</td>
            <td>Promenade 55, 3962HB Wijk bij Duurstede, Nederland</td>
            <td>Joost Adema, BaapMedia</td>
            <td>-</td>
            <td>-</td>
            <td><button class="btn btn-info" disabled>Factuur versturen</button></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Klaar voor verzending</td>
            <td>Apothekerslaan 5, 6969HQ Apeldoorn, Nederland</td>
            <td>Sascha Mendel, Vodka inc.</td>
            <td>-</td>
            <td>-</td>
            <td><button class="btn btn-info" disabled>Factuur versturen</button></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Gefactureerd</td>
            <td>Poollaan 78, 9866HS Venlo, Nederland</td>
            <td>Martijn Melchers, Nossocorp</td>
            <td>2018-09-04</td>
            <td>Ja</td>
            <td><button class="btn btn-info" disabled>Factuur versturen</button></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>