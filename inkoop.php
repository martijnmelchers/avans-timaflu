<?php include "./parts/header.php"; ?>


<div class="container">


<h1>Inkoop</h1>
<br>
<h3>Medicijnen onder minimumvoorraad: </h2>
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

<h3>Bijbestellen</h3>


<p>Selecteer een product uit de lijst om bij te bestellen.</p>



<form action="">
    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Selecteer een product.
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">77564 | Xanax 5mg</a>
        <a class="dropdown-item" href="#">6674 | Voltaren emugel</a>
        <a class="dropdown-item" href="#">8347 | Baap</a>
    </div>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    
    <button class="btn btn-danger">Meld bestelling</button>
</form>



</div>

<?php include "./parts/footer.php"; ?> 
