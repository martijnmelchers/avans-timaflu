<?php include "./parts/header.php"; ?>
<div class="container">
    <div id="sendMsg" class="alert alert-success" hidden>
        De order is op verstuurd gezet!
    </div>
    <h1>Magazijn</h1>
    <br/>
    <h3>Orders die verstuurd moeten worden</h3>
    <br/>
    <!--    <table id="magazijnTable" class="table">
            <thead>
            <tr>
                <th>naam</th>
                <th>bakId</th>
                <th>verkooporderId</th>
                <th>status</th>
                <th>Acties</th>
            </tr>
            </thead>
            <tbody>
            <tr id="0">
                <td>Voltaren emugel 300mg</td>
                <td>4</td>
                <td>4</td>
                <td>Klaar voor verzending</td>
                <td><a class="btn btn-info" href="#" onclick="removeRow(0)">Zet op verstuurd</a></td>
            </tr>
            <tr id="1">
                <td>Geen medicijn 300mg</td>
                <td>2</td>
                <td>2</td>
                <td>Klaar voor verzending</td>
                <td><a class="btn btn-info" href="#" onclick="removeRow(1)">Zet op verstuurd</a></td>
            </tr>
            <tr id="2">
                <td>Paracetamol 500mg</td>
                <td>4</td>
                <td>4</td>
                <td>Klaar voor verzending</td>
                <td><a class="btn btn-info" href="#" onclick="removeRow(2)">Zet op verstuurd</a></td>
            </tr>
            <tr id="3">
                <td>Geen medicijn 0mg</td>
                <td>4</td>
                <td>4</td>
                <td>Klaar voor verzending</td>
                <td><a class="btn btn-info" href="#" onclick="removeRow(3)">Zet op verstuurd</a></td>
            </tr>
            <tr id="4">
                <td>Altijdop tubes</td>
                <td>1</td>
                <td>1</td>
                <td>Wordt verzameld</td>
                <td><a class="btn btn-info disabled" href="#" onclick="removeRow(4)">Zet op verstuurd</a></td>
            </tr>
            <tr id="5">
                <td>Voltaren emugel 300mg</td>
                <td>3</td>
                <td>3</td>
                <td>Wordt verzameld</td>
                <td><a class="btn btn-info disabled" href="#" onclick="removeRow(5)">Zet op verstuurd</a></td>
            </tr>
            </tbody>
        </table>-->

    <table id="magazijnTable" class="table magazijnTable">
        <thead>
        <tr>
            <th>verkooporderId</th>
            <th>status</th>
        </tr>
        </thead>
        <tbody>
        <tr id="1">
            <td>1</td>
            <td>Klaar voor verzending</td>
        </tr>
        <tr id="3">
            <td>3</td>
            <td>Klaar voor verzending</td>
        </tr>
        </tbody>
    </table>
</div>
<?php include "./parts/footer.php"; ?>
<div id="orderModal1" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Verkooporder 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Order informatie</h5>

                <table class="table">
                    <thead>
                    <tr>
                        <th>verkooporderId</th>
                        <th>bestelCode</th>
                        <th>naam</th>
                        <th>aantal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>8384</td>
                        <td>Altijdop tubes</td>
                        <td>1</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuleer</button>
                <button type="button" class="btn btn-primary" onclick="removeRow(1)">Zet op verstuurd</button>
            </div>
        </div>
    </div>
</div>
<div id="orderModal3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Verkooporder 3</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Order informatie</h5>

                <table class="table">
                    <thead>
                    <tr>
                        <th>verkooporderId</th>
                        <th>bestelCode</th>
                        <th>naam</th>
                        <th>aantal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>3</td>
                        <td>374734</td>
                        <td>Voltaren emugel 300mg</td>
                        <td>5</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuleer</button>
                <button type="button" class="btn btn-primary" onclick="removeRow(3)">Zet op verstuurd</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('#magazijnTable tr').click(function () {
        var id = $(this).attr('id');
        $('#orderModal' + id).modal('show');
    });


    function removeRow(id) {
        $('#' + id + '').remove();
        $('#sendMsg').removeAttr('hidden');
        $('#orderModal' + id).modal('hide');
        return false;
    }
</script>

