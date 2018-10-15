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
            <th scope="col">Acties</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>2</td>
            <td>Verstuurd</td>
            <td><a class="btn btn-info" href="?msg">Factuur versturen</a></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Verstuurd</td>
            <td><a class="btn btn-info" href="?msg">Factuur versturen</a></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>