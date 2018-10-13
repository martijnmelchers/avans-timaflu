<?php
	/**
	 * Created by Jasper van Hienen
	 * For: timaflu
	 * Date: October 11 2018
	 *-----------------------------------
	 * TODO:
	 *-----------------------------------
	 * NOTES:
	 *-----------------------------------
	 */
	include("parts/header.php");
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
<form style="width: 80%; margin: 0 auto;" id="main-form">
	<h1 class="title">Verkoopformulier</h1>
	
	<p>Selecteer klant of voer nieuwe klantgegevens in</p>
	<select id="select">
		<option>BaapMedia: 1</option>
		<option>Vodka inc.: 2</option>
		<option>Nossocorp: 3</option>
		<option>Snackbar: 4</option>
		<option>Circus TimaFloemp: 5</option>
		<option>Dorrestruik internet services: 4</option>
	</select>
	<div class="form-group row" style="margin: 30px 0">
		<div class="col">
			<label for="klantnaam">Klantnaam:</label>
			<input type="text" class="form-control" id="klantnaam" placeholder="Klantnaam">
		</div>
		<div class="col">
			<label for="klantnaam">Klantnummer:</label>
			<input type="text" class="form-control" id="klantnaam" placeholder="Klantnummer">
		</div>
		<div class="col">
			<label for="klantnaam">Adres:</label>
			<input type="text" class="form-control" id="klantnaam" placeholder="Adres">
		</div>
	</div>
	<div class="orderregel-container">
		<div class="form-group row orderregel" style="display: flex; align-items: center; margin: 30px 0">
			<div class="col">
				<label for="select2">Medicijn:</label>
				<select class="form-control">
					<option>Altijdop tubes</option>
					<option>Geen medicijn 0mg</option>
					<option>Voltaren emugel 300mg</option>
					<option>Paracetamol 500mg</option>
					<option>Xanax 6mg</option>
				</select>
			</div>
			<div class="col">
				<label for="klantnaam">Aantal:</label>
				<input type="text" class="form-control" id="klantnaam" placeholder="Aantal">
			</div>
		</div>
	</div>
	<div class="btn btn-secondary" onclick="addRow()">Voeg orderregel toe</div>
	<button type="submit" class="btn btn-primary">Sla bestelling op</button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
	$("#select").select2();

	function addRow() {
		$(".orderregel").clone().appendTo(".orderregel-container");
	}
</script>