<?php include "./parts/header.php"; ?>
    <div class="container">
        <h1>Facturatie</h1>
        <br/>
        <h3>Bedrijven die nalatig zijn met het betalen van een factuur</h3>
        <br/>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">bedrijfsnaam</th>
                <th scope="col">telefoonnummer</th>
                <th scope="col">email</th>
                <th scope="col">datum</th>
                <th scope="col">verkooporderId</th>
                <th scope="col">factuurId</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>BaapMedia</td>
                <td>06859248547</td>
                <td>joost@email.com</td>
                <td>2018-10-03</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Snackbar</td>
                <td>030849595484</td>
                <td>jasper@email.com</td>
                <td>2018-10-02</td>
                <td>4</td>
                <td>4</td>
            </tr>
            </tbody>
        </table>
    </div>
<?php include "./parts/footer.php"; ?>