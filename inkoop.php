<?php include "./parts/header.php"; ?>


<div class="container">


<h1>Inkoop</h1>
<br>
<h3>Medicijnen onder minimumvoorraad: </h3>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">bestelCode</th>
      <th scope="col">Productnaam</th>
      <th scope="col">Minimumvoorraad</th>
      <th scope="col">Huidige voorraad</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">77564</th>
      <td>Xanax 5mg</td>
      <td>10</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">6674</th>
      <td>Voltaren emugel</td>
      <td>40</td>
      <td>30</td>
    </tr>
    <tr>
      <th scope="row">8347</th>
      <td>Baap</td>
      <td>30</td>
      <td>20</td>
    </tr>
  </tbody>
</table>

<hr>

<form action="">
    <div class="row">
        <div class="col-md-6">
        <h3>Bijbestellen</h3>

            <div class="form-group">
                <label for="productDropdown">Selecteer een product uit de lijst om bij te bestellen.</label>

                <div class="dropdown" id="productDropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="productDropdownButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Selecteer een product.
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" data-product_id = "77564"  href="#">77564 | Xanax 5mg</a>
                        <a class="dropdown-item" data-product_id = "6674" href="#">6674 | Voltaren emugel</a>
                        <a class="dropdown-item" data-product_id = "8347" href="#">8347 | Baap</a>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Aantal</label>
                <input type="number" class="form-control" placeholder="voer een productaantal in">
            </div> 

            <div class="form-group">
                <button class="btn btn-danger">Meld bestelling</button>
            </div>
        </div>

        <div class="col-md-6" id="goedkoopFabrikant">
            <h3>Goedkoopste fabrikant</h3>
            <p id="placeHolder">Selecteer een product om de goedkoopste fabrikant te zien.</p>

            <span id="goedkoopNaam">

            </span>

            <span id="goedkoopPrijs">

            </span>
        </div>
    </div>
</form>
</div>

<script>
    $("#productDropdown .dropdown-menu a").click((el) => {

        let productFabrikanten = {
            77564: {naam: "Nossocorp",prijs: 10},
            6674: {naam: "Paracetamolpaleis", prijs: 20},
            8347: {naam: "aliexpress", prijs: 23},
        };

        $("#productDropdownButton").text($(el.target).text());

        const productId = $(el.target).data("product_id"); 
        $("#goedkoopFabrikant #placeHolder").remove();
        $("#goedkoopNaam").text(productFabrikanten[productId].naam);
        $("#goedkoopPrijs").text("€" + productFabrikanten[productId].prijs);

    });
</script>

<?php include "./parts/footer.php"; ?> 
