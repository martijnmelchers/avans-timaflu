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
                <input id="productAantal" type="number" class="form-control" placeholder="voer een productaantal in">
            </div> 

            <div class="form-group">
                <button class="btn btn-success" id="voegToeAanBestelling">Voeg toe aan bestelling</button>
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



    <div class="row">
        <div class="col-12">
            <h3>Huidige bestelling</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">bestelCode</th>
                        <th scope="col">Fabrikant</th>
                        <th scope="col">Prijs per stuk</th>
                        <th scope="col">Aantal</th>
                        <th scope="col">Totaalprijs</th>
                    </tr>
                </thead>
                <tbody id="huidigeBestelling">
                </tbody>
            </table>

            <div class="form-group">
                <button class="btn btn-danger" id="bestelProducten">Meld Bestelde producten</button>
            </div>
        </div>
    </div>
</form>
</div>

<script>
    let huidigeData = {};
    let huidigeBestelling = [];
    $("#productDropdown .dropdown-menu a").click((el) => {

        let productFabrikanten = {
            77564: {naam: "Nossocorp",prijs: 10},
            6674: {naam: "Paracetamolpaleis", prijs: 20},
            8347: {naam: "aliexpress", prijs: 23},
        };

        $("#productDropdownButton").text($(el.target).text());

        const productId = $(el.target).data("product_id"); 
        
        $("#goedkoopFabrikant #placeHolder").remove();
        
        $("#goedkoopNaam").html(
            "De goedkoopste fabrikant is: <br>" + 
            "<b>" + productFabrikanten[productId].naam + ":</b>"
        );

        $("#goedkoopPrijs").text("€" + productFabrikanten[productId].prijs);
        
        huidigeData = {
            bestelCode: productId,
            fabrikantNaam: productFabrikanten[productId].naam,
            aantal: 0,
            prijs: productFabrikanten[productId].prijs,
        };
    });


    $("#productAantal").keyup(() => {
        let value = $("#productAantal").val();
        huidigeData.aantal = value;
    });


    function validateNum(num){
        if(num  <= 0){
            return false;
        }
        return true;
    }

    $("#voegToeAanBestelling").click(() => {
     
        if(!validateNum($("#productAantal").val())){
            alert("Voer een geldig aantal in boven de de 0");
            $("#productAantal").val("");
            return;
        }

        huidigeBestelling.push(huidigeData);
        $("#huidigeBestelling").html("");
        for (const key in huidigeBestelling) {
            if (huidigeBestelling.hasOwnProperty(key)) {
                const inkoopregel = huidigeBestelling[key];
                const totaalprijs = inkoopregel.prijs * inkoopregel.aantal;
                $("#huidigeBestelling").append(`
                    <tr>
                        <th scope="row">${inkoopregel.bestelCode}</th>
                        <td>${inkoopregel.fabrikantNaam}</td>
                        <td>${inkoopregel.prijs}</td>
                        <td>${inkoopregel.aantal}</td>
                        <td>${totaalprijs}</td>
                    </tr>
                `);
            }
        }
    });


    $("#bestelProducten").click(() => {
        if(Object.keys(huidigeBestelling).length > 0){
            alert("Producten zijn gemeld als besteld (niet echt)");
        }
        else {
            alert("Je hebt geen producten geselecteerd om een bestelling te maken!");
        }
    });
</script>

<?php include "./parts/footer.php"; ?> 
