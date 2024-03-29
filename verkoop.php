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
<form style="width: 80%; margin: 0 auto;" id="main-form" action="order-confirmed.php">
	<h1 class="title">Verkoopformulier</h1>
	
	<p>Selecteer klant of voer nieuwe klantgegevens in</p>
	<select id="select">
	</select>
	<div class="form-group row" style="margin: 30px 0">
		<div class="col">
			<label for="klantnaam">Klantnaam:</label>
			<input type="text" class="form-control" id="klantnaam" placeholder="Klantnaam">
		</div>
		<div class="col">
			<label for="klantnaam">Klantnummer:</label>
			<input type="text" class="form-control" id="klantnummer" placeholder="Klantnummer">
		</div>
		<div class="col">
			<label for="klantnaam">Adres:</label>
			<input type="text" class="form-control" id="adres" placeholder="Adres">
		</div>
	</div>
	<div id="orderregel-container" class="orderregel-container">
		<div class="form-group row default" style="display: flex; align-items: center; margin: 30px 0">
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
				<label for="aantal">Aantal:</label>
				<input type="text" class="form-control aantal" id="aantal" placeholder="Aantal">
			</div>
		</div>
	</div>
	<br>
	<p>Alle producten beschikbaar: <span id="beschikbaar"></span></p>
	<p>Prijs zonder korting: &euro;<span id="prijs"></span></p>
	<p>Korting: <span id="korting"></span>&percnt;</p>
	<p>Totaalprijs: &euro;<span id="totaal"></span></p>
	<div class="btn btn-secondary" onclick="calcTotal(); calcKorting();">Haal totaalprijs op</div>
	<div class="btn btn-secondary" onclick="addRow()">Voeg orderregel toe</div>
	<div class="btn btn-danger" onclick="removeRow()">Verwijder laaste orderregel</div>
	<button type="submit" class="btn btn-primary">Sla bestelling op</button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
	const customerData = [
		{
			id: 0,
			text: "BaapMedia",
			klantnaam: "BaapMedia",
			klantnummer: 1,
			adres: "Promenade 55 3962HB Wijk bij Duurstede",
			korting: 5,
		},
		{
			id: 1,
			text: "Vodka inc",
			klantnaam: "Vodka inc",
			klantnummer: 2,
			adres: "Kruisnbessengaard 66 2927HS Almelo",
			korting: 5,
		},
		{
			id: 2,
			text: "Nossocorp",
			klantnaam: "Nossocorp",
			klantnummer: 3,
			adres: "Apothekerslaan 5 6969HQ Amsterdam",
			korting: 5,
		},
		{
			id: 3,
			text: "Snackbar",
			klantnaam: "Snackbar",
			klantnummer: 4,
			adres: "Stegeman 88 9336HQ Zaandam",
			korting: 5,
		},
		{
			id: 4,
			text: "Circus TimaFloemp",
			klantnaam: "Circus TimaFloemp",
			klantnummer: 5,
			adres: "Poollaan 78 9866HS Venlo",
			korting: 5,
		},
		{
			id: 5,
			text: "Dorrestruik internet services",
			klantnaam: "Dorrestruik internet services",
			klantnummer: 6,
			adres: "Avanslaan 87 627KL Den Bosch",
			korting: 5,
		},
	];

	const form = $("#select");
	const form2 = $("#select2");
	let elementcounter = 0;

	form.select2({
		data: customerData
	});

	form.on('select2:select', function (e) {
		let data = e.params.data;
		$("#klantnaam").val(data.klantnaam);
		$("#klantnummer").val(data.klantnummer);
		$("#adres").val(data.adres);
		$("#korting").html(data.korting);
	});

	$(".aantal").on("focusout", function () {
		const options = ["JA", "NEE"];
		$("#totaal").html(Math.floor(Math.random() * (500 - 5 + 1) + 5));
		$("#beschikbaar").html(options[Math.floor(Math.random() * 2)]);
	});

	function addRow() {
		const el = $(".default").clone().removeClass("default").addClass(`orderregel${elementcounter}`).appendTo("#orderregel-container");
		elementcounter++;
	}
	
	function removeRow() {
		const el = document.getElementById("orderregel-container");
		el.removeChild(el.lastChild);
	}

	function calcTotal() {
		$("#prijs").html(Math.floor(Math.random() * (500 - 200 + 1) + 200));
	}

	function calcKorting() {
		$("#totaal").html(Math.floor(Math.random() * (200 - 5 + 1) + 5));
	}
</script>